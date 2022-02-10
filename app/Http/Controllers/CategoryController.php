<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories =Category::all();
        return view('admin.ShowCategory')->with('categories' , $categories);
    }

    public function create()
    {
        return view('admin.AddCategory');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:categories|max:50'
        ]);

        $category = new Category;
        $category->name = $request->name;

        $category->save();

        return redirect('/admin/category/create')->with('status', 'Uspesno dodat artical!') ;
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.EditCategory')->with('category' , $category);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|unique:categories']);


        $category= Category::find($id);
        $oldcat=$category->name;
        $category->name = $request->name;

        Product::where('category',$oldcat)
            ->update(['category' => $category->name]);

        $category->save();

        return redirect('/admin/categories')->with('status', 'Success updated!') ;
    }
    public function delete($id){
        $category= Category::find($id);

        $category->delete();
        return redirect('/admin/categories')->with('status', 'Deleted successful!') ;
    }
}
