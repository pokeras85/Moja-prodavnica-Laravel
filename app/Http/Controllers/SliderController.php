<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();

        return view('admin.ShowSlider')->with('sliders', $sliders);
    }

    public function create()
    {
        return view('admin.AddSlaider');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'description_one' => 'required',
            'description_two' => 'required',
            'slide_image' => 'image|mimes:jpeg,png|nullable|max:1999',
        ]);

        if ($request->hasFile('slide_image')){
            //1. get file name with extension
            $FileNameWithExtension = $request->file('slide_image')->getClientOriginalName();

            //2. Get just file name
            $JustFileName= pathinfo($FileNameWithExtension, PATHINFO_FILENAME);

            //3. Get just extension
            $Extension = $request->file('slide_image')->getClientOriginalExtension();

            //4. File name to store
            $FileNameToStore = $JustFileName.'_'.time().'.'.$Extension;

            //5. Upload image
            $path = $request->file('slide_image')->storeAs('/public/SliderImage', $FileNameToStore);
        }else{
            $FileNameToStore = 'No image';
        }
        $slider = new Slider();
        $slider->description1 = $request->description_one;
        $slider->description2 = $request->description_two;
        $slider->Slider_image = $FileNameToStore;
        $slider->status=1;

        $slider->save();

        return redirect('/admin/slider/create')->with('status', 'Uspesno dodat slider!') ;



    }

    public function edit($id){
        $slider = Slider::find($id);
        return view('admin.EditSlider')->with('slider', $slider);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'description_one' => 'required',
            'description_two' => 'required',
            'slide_image' => 'image|mimes:jpeg,png|nullable|max:1999',
        ]);

        $slider = Slider::find($id);
        $slider->description1 = $request->description_one;
        $slider->description2 = $request->description_two;


        if ($request->hasFile('slide_image')){
            //0 old image
            $old_image = $slider->Slider_image;

            //1. get file name with extension
            $FileNameWithExtension = $request->file('slide_image')->getClientOriginalName();

            //2. Get just file name
            $JustFileName= pathinfo($FileNameWithExtension, PATHINFO_FILENAME);

            //3. Get just extension
            $Extension = $request->file('slide_image')->getClientOriginalExtension();

            //4. File name to store
            $FileNameToStore = $JustFileName.'_'.time().'.'.$Extension;

            //5. Upload image
            $path = $request->file('slide_image')->storeAs('/public/SliderImage', $FileNameToStore);

            if($old_image != "No image") {
                Storage::delete('/public/SliderImage/'.$old_image);
            }

            $slider->Slider_image = $FileNameToStore;

        }
        $slider->save();

        return redirect('/admin/sliders')->with('status', 'Success updated!') ;
    }

    public function destroy($id){

        $slider = Slider::find($id);
        $old_image=$slider->Slider_image;
        if ($old_image != "No image") {
            Storage::delete('/public/SliderImage/' . $old_image);
        }
        $slider->delete();

        return redirect('/admin/sliders')->with('status', 'Successful deleted!') ;

    }

    public function activate($id){

        $slider = Slider::find($id);
        $slider->status = 1;
        $slider->save();

        return redirect('/admin/sliders');

    }

    public function  unactivate($id){
        $slider = Slider::find($id);
        $slider->status = 0;
        $slider->save();

        return redirect('/admin/sliders');

    }
    public function test()
    {
        $products = Product::all();

        return view('test')->with('products', $products);

    }

}
