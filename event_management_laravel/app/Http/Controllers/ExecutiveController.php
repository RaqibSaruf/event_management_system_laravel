<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\executive;

class ExecutiveController extends Controller
{
    public function create(){
        $executive = executive::Paginate(5);
    	return view('executive')->with('executive',$executive);   
        
}

	public function store(Request $request){
        $this->validate($request,[
            'name' =>'required',
            'title' =>'required',
            'std_id' =>'required',
            'contact' =>'required',
            'image' => 'required|image|mimes:jpeg,JPEG,png,PNG,jpg,JPG|max:80000',

        ],[ 'image.required' => 'The :attribute field can not be blank value.',
            'image.uploaded' => 'The :attribute can be only JPG or JPEG or PNG.',
    ]);
    	
        $executive = new executive();
 

        $executive->name = $request->input('name');
        $executive->title = $request->input('title');
        $executive->std_id = $request->input('std_id');
        $executive->contact = $request->input('contact');
        $executive->email = $request->input('email');


        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename=$file->getClientOriginalName();


            if (DB::table('executives')->where('image', '=', $filename)->exists()) {

                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;

                $file->move('public/uploads/executive/',$filename);

            }else{
                    $file->move('public/uploads/executive/',$filename);
                }

            $executive->image = $filename;
        }else{
            return redirect()->route('executive');
            $executive->image = '';
        }

        $executive->save();

        return redirect()->route('executive')->withSuccess('Files has been successfully uploaded.');
}



    public function edit($id){
        $executive = executive::find($id);
        return view('update_executive')->with('executive',$executive);
}



    public function update_slider(Request $request, $id){

        $executive = executive::find($id);

        $image_path = "public/uploads/executive/".$executive->image; 



        $this->validate($request,[
            'image' => 'image|mimes:jpeg,JPEG,png,PNG,jpg,JPG|max:80000',

        ],[ 'image.uploaded' => 'The :attribute can be only JPG or JPEG or PNG.',
    ]);

        $executive->name = $request->input('name');
        $executive->title = $request->input('title');
        $executive->std_id = $request->input('std_id');
        $executive->contact = $request->input('contact');
        $executive->email = $request->input('email');

        if($request->hasfile('image')){


            if(file_exists($image_path)) {
                @unlink($image_path);
            }

            $file = $request->file('image');
            $filename=$file->getClientOriginalName();


            if (DB::table('executives')->where('image', '=', $filename)->exists()) {

                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;

                $file->move('public/uploads/executive/',$filename);

            }else{
                    $file->move('public/uploads/executive/',$filename);
                }

            $executive->image = $filename;
        }

        $executive->save();
        
        return redirect('/executive')->with('executive',$executive)->withSuccess('Files has been successfully updated.');
}



    public function delete($id){
        $executive = executive::find($id);
        $executive->delete();
        $image_path = "public/uploads/executive/".$executive->image; 

         if (file_exists($image_path)){
               @unlink($image_path);
           }

        return redirect('/executive')->with('executive',$executive);
}

}
