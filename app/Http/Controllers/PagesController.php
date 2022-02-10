<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;
class PagesController extends Controller
{
    public function home (){
      return view('pages.index');
    }

    public function about (){
        return view('pages.about');
    }

    public function services (){
        $products= DB::table('products')->paginate(5);
        return view('pages.services')->with('products', $products);
    }

    public function show ($id){
        $products = Product::find($id);
        return view('pages.show')->with('products', $products);;
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'filename' =>'image|mimes:jpeg,png,jpg,gif,svg|max:1999'
        ]);

        print ($request->file('filename'));

        /*$product= new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return redirect('/services')->with('status', 'Uspesno dodat artical!') ;   */

    }

    public function edit($id){
        $products = Product::find($id);

        return view('pages.edit')->with('products', $products);
    }

    public function update(Request $request, $id){

        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product= Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return redirect('/services')->with('status', 'Uspesno zmenjeni podaci o artical!') ;
    }

    public function delete($id){
        $product= Product::find($id);

        $product->delete();
        return redirect('/services')->with('status', 'Uspesno obrisani podaci o articalu!') ;
    }
}
