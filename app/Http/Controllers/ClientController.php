<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Slider;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\common\src\Omnipay;
use Stripe\Charge;
use Stripe\Stripe;
use App\Order;
use App\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class ClientController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $products=Product::all();
        return view('client.index')->with('sliders', $sliders)->with('products',$products);
    }

    public function login(){
        return view('client.login');
    }

    public function cart(){
        if (!Session::has('cart')){
            return view('client.cart');
        }
        $oldcard = Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldcard);
        return view('client.cart',['products'=>$cart->items]);
    }

    public function update(Request $request, $id){
        $oldcard = Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldcard);
        $quantity=$request->quantity;
        $cart->update($quantity,$id);
        Session::put('cart',$cart);

        return redirect('/cart');
        //print($quantity.$id);
    }

    public function remove($id){
        $oldcard = Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldcard);
        $cart->remove($id);
        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        }else {
            Session::forget('cart');
        }
        return redirect('/cart');
    }

    public function shop(){
        $products=Product::all();
        $categories=Category::all();
        return view('client.shop')->with('products',$products)->with('categories',$categories);
    }

    public function checkout(){
        if(!Session::has('client')){
            return redirect('/login');
        }
        if (!Session::has('cart')){
            return redirect('/cart');
        }
        return view('client.checkout');
    }

    public function createaccount(Request $request){
        $this->validate($request, ['username'=>'required',
                                   'email'=>'email|required|unique:clients',
                                   'password'=>'required|min:4']);

    $client = new Client();
        $client->username=$request->input('username');
        $client->email=$request->input('email');
        $client->password=$request->bcrypt(input('password'));

        $client->save();
        return redirect('/register')->with('success', 'Successful registered !');

    }

    public function loginaccount(Request $request){
        $this->validate($request, [
            'email'=>'email|required',
            'password'=>'required|min:4']);

        $client = Client::where('email',$request->input('email'))->first();

        if($client){
            if($request->input('password') ==$client->password){
                Session::put('client', $client);
                return redirect('/shop')->with('success', 'You login in!');
            }else{
                return redirect('/login')->with('status', 'not corect email or password!');
            }
        }else{
             return redirect('/login')->with('status', 'You do not have account!');

        }
    }

    public function register(){
        return view('client.register');
    }

    public function logout(){
        Session::forget('client');
        return redirect('/');
    }

    public function categories($category_id){
        $categories=Category::all();
        $one_category=Category::find($category_id);
        $products=Product::where('category', $one_category->name)->get();

        return view('client.shop_by_category')->with('categories',$categories)->with('one_category',$one_category)->with('products',$products);

    }
    public function addToCart($id){
        $product=Product::find($id);

//ukoloiko cart postoji u sesiji onda će se u oldcard smestiti vrdnost cart iz sesije, u suprotnom u oldcart ide null
        $oldcard = Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldcard);
        $cart->add($product, $id);
        Session::put('cart',$cart);

        //dd(Session::get('cart')); da vidim šta je u sesiji
        return redirect('/shop');

    }

public function postcheckout(Request $request){
    if (!Session::has('cart')){
        return redirect('/cart');
    }

    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);

    Stripe::setApiKey(env('STRIPE_SECRET_KEY'));



    try{
        $amount = Session::get('cart')->totalPrice;
        $amount *= 100;
        $amount = (int) $amount;

        $payment_intent = \Stripe\PaymentIntent::create([
            'description' => 'Stripe Test Payment',
            "amount" => $amount,
            'currency' => 'USD',
            'payment_method_types' => ['card'],
            'payment_method'=>'pm_card_visa',
            'confirm'=>'true'
        ]);
        $intent = $payment_intent->client_secret;

        $order = new Order();
        $order->name=$request->input('name');
        $order->address=$request->input('address');
        $order->cart=serialize($cart);
        $order->payment_id=$payment_intent->id;
        $order->save();

        $orders=Order::where('payment_id', $payment_intent->id)->get();

        $orders->transform(function ($order, $key){
            $order->cart=unserialize($order->cart);
            return $order;
        });

        $email=Session::get('client')->email;

        Mail::to($email)->send(new SendMail($orders));

    } catch(\Exception $e){
        Session::put('error', $e->getMessage());
        return redirect('/checkout');
    }

    Session::forget('cart');
    return redirect('/cart')->with('success', 'Purchase accomplished successfully !');
}
}
