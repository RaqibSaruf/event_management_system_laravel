<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\description;

class DescriptionController extends Controller
{
    public function create(){
    	$description = description::find(1);
    	return view('description')->with('description',$description);       
}

	public function store(Request $request, $id){

        $description = description::find($id);

        $image_path = "public/uploads/description/".$description->image; 



        $this->validate($request,[
            'image' => 'image|mimes:jpeg,JPEG,png,PNG,jpg,JPG|max:80000',

        ],[ 'image.uploaded' => 'The :attribute can be only JPG or JPEG or PNG.',
    ]);


        $description->title = $request->input('title');
        $description->description = $request->input('description');

        if($request->hasfile('image')){


            if(file_exists($image_path)) {
                @unlink($image_path);
            }

            $file = $request->file('image');
            $filename=$file->getClientOriginalName();


            if (DB::table('descriptions')->where('image', '=', $filename)->exists()) {

                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;

                $file->move('public/uploads/description/',$filename);

            }else{
                    $file->move('public/uploads/description/',$filename);
                }

            $description->image = $filename;
        }

        $description->save();
        
        return redirect('/description')->with('description',$description)->withSuccess('Files has been successfully updated.');
}





}
