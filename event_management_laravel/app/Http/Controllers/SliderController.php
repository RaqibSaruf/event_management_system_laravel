<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{

    
    public function create(){
        $sliders = Slider::all();
    	return view('slider')->with('Sliders',$sliders);   
        
    }



    public function store(Request $request){
        $this->validate($request,[
            'title' =>'required',
            'image' => 'required|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:80000',

        ],[ 'image.required' => 'The :attribute field can not be blank value.',
            'image.uploaded' => 'The :attribute can be only JPG or JPEG.',
    ]);
    	
        $slider = new Slider();
 

        $slider->title = $request->input('title');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/slider/',$filename);
            $slider->image = $filename;
        }else{
            return redirect()->route('create');
            $slider->image = '';
        }

        $slider->save();
        return redirect()->route('create');
    }



    public function edit($id){
        $sliders = SLider::find($id);
        return view('update_slider')->with('sliders',$sliders);
    }



    public function update_slider(Request $request, $id){

        $sliders = Slider::find($id);

        $this->validate($request,[
            'title' =>'required',
            'image' => 'required|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:80000',

        ],[ 'image.required' => 'The :attribute field can not be blank value.',
            'image.uploaded' => 'The :attribute can be only JPG or JPEG.',
    ]);


        $sliders->title = $request->input('title');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/slider/',$filename);
            $sliders->image = $filename;
        }else{
            return redirect()->route('update_slider');
            $sliders->image = '';
        }

        $sliders->save();
        return redirect('/slider')->with('sliders',$sliders);
    }



    public function delete($id){
        $sliders = SLider::find($id);
        $sliders->delete();
        $image_path = "public/uploads/slider/".$sliders->image; 

         if (file_exists($image_path)) {

               @unlink($image_path);

           }

        return redirect('/slider')->with('sliders',$sliders);
    }


}
