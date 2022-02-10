<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.ShowProducts')->with('products', $products);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AddProducts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name' => 'required|unique:products',
        'price' => 'required',
        'image' => 'image|mimes:jpeg,png|nullable|max:1999',
            'category'=>'required'
        ]);

        if ($request->hasFile('image')){
            //1. get file name with extension
            $FileNameWithExtension = $request->file('image')->getClientOriginalName();

            //2. Get just file name
            $JustFileName= pathinfo($FileNameWithExtension, PATHINFO_FILENAME);

            //3. Get just extension
            $Extension = $request->file('image')->getClientOriginalExtension();

            //4. File name to store
            $FileNameToStore = $JustFileName.'_'.time().'.'.$Extension;

            //5. Upload image
            $path = $request->file('image')->storeAs('/public/ProductImages', $FileNameToStore);
        }else{
            $FileNameToStore = 'No image';
        }
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $FileNameToStore;
        $product->category = $request->category;
        if($request->status == "on"){
            $product->status = "on";
        }else{
            $product->status = "no";
        }
        $product->save();

        return redirect('/admin/product/create')->with('status', 'Uspesno dodat product!') ;



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);

        return view('admin.EditProduct')->with('products', $products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|unique:categories']);

        $product= Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        if($request->status == "on"){
            $product->status = "on";
        }else{
            $product->status = "no";
        }


        if ($request->hasFile('image')) {
            //old image
            $old_image = $product->image;

            //1. get file name with extension
            $FileNameWithExtension = $request->file('image')->getClientOriginalName();

            //2. Get just file name
            $JustFileName = pathinfo($FileNameWithExtension, PATHINFO_FILENAME);

            //3. Get just extension
            $Extension = $request->file('image')->getClientOriginalExtension();

            //4. File name to store
            $FileNameToStore = $JustFileName . '_' . time() . '.' . $Extension;

            //5. Upload image
            $path = $request->file('image')->storeAs('/public/ProductImages', $FileNameToStore);

            if ($old_image != "No image") {
                Storage::delete('/public/ProductImages/'.$old_image);
            }

            $product->image = $FileNameToStore;

        }


        $product->save();

        return redirect('/admin/products')->with('status', 'Success updated!') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $old_image=$product->image;
        if ($old_image != "No image") {
            Storage::delete('/public/ProductImages/' . $old_image);
        }
         $product->delete();

        return redirect('/admin/products')->with('status', 'Successdeleted!') ;

    }

}

