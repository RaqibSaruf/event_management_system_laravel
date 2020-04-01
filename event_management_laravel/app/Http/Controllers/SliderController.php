<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Slider;

class SliderController extends Controller
{

    
    public function create(){
        $sliders = Slider::Paginate(5);
    	return view('slider')->with('Sliders',$sliders);   
        
}



    public function store(Request $request){
        $this->validate($request,[
            'title' =>'required',
            'image' => 'required|image|mimes:jpeg,JPEG,png,PNG,jpg,JPG|max:80000',

        ],[ 'image.required' => 'The :attribute field can not be blank value.',
            'image.uploaded' => 'The :attribute can be only JPG or JPEG or PNG.',
    ]);
    	
        $slider = new Slider();
 

        $slider->title = $request->input('title');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename=$file->getClientOriginalName();


            if (DB::table('sliders')->where('image', '=', $filename)->exists()) {

                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;

                $file->move('public/uploads/slider/',$filename);

            }else{
                    $file->move('public/uploads/slider/',$filename);
                }

            $slider->image = $filename;
        }else{
            return redirect()->route('slider');
            $slider->image = '';
        }

        $slider->save();

        return redirect()->route('slider')->withSuccess('Files has been successfully uploaded.');
}



    public function edit($id){
        $sliders = SLider::find($id);
        return view('update_slider')->with('sliders',$sliders);
}



    public function update_slider(Request $request, $id){

        $sliders = Slider::find($id);

        $image_path = "public/uploads/slider/".$sliders->image; 



        $this->validate($request,[
            'image' => 'image|mimes:jpeg,JPEG,png,PNG,jpg,JPG|max:80000',

        ],[ 'image.uploaded' => 'The :attribute can be only JPG or JPEG or PNG.',
    ]);


        $sliders->title = $request->input('title');

        if($request->hasfile('image')){


            if(file_exists($image_path)) {
                @unlink($image_path);
            }

            $file = $request->file('image');
            $filename=$file->getClientOriginalName();


            if (DB::table('sliders')->where('image', '=', $filename)->exists()) {

                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;

                $file->move('public/uploads/slider/',$filename);

            }else{
                    $file->move('public/uploads/slider/',$filename);
                }

            $sliders->image = $filename;
        }

        $sliders->save();
        
        return redirect('/slider')->with('sliders',$sliders)->withSuccess('Files has been successfully updated.');
}



    public function delete($id){
        $sliders = SLider::find($id);
        $sliders->delete();
        $image_path = "public/uploads/slider/".$sliders->image; 

         if (file_exists($image_path)){
               @unlink($image_path);
           }

        return redirect('/slider')->with('sliders',$sliders);
}


}
