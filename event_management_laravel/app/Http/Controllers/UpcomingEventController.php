<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UpcomingEvent;


class UpcomingEventController extends Controller
{
    
    public function create(){
        $upcoming_events = UpcomingEvent::Paginate(1);
    	return view('UpcomingEvent')->with('upcoming_events',$upcoming_events);   
        
}



    public function store(Request $request){
        $this->validate($request,[
            'title' =>'required',
            'description' =>'required',
            'image' => 'required|image|mimes:jpeg,JPEG,png,PNG,jpg,JPG|max:80000',

        ],[ 'image.required' => 'The :attribute field can not be blank value.',
            'image.uploaded' => 'The :attribute can be only JPG or JPEG or PNG.',
    ]);
    	
        $upcoming_event = new UpcomingEvent();
 

        $upcoming_event->title = $request->input('title');
        $upcoming_event->description = $request->input('description');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename=$file->getClientOriginalName();


            if (DB::table('upcoming_events')->where('image', '=', $filename)->exists()) {

                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;

                $file->move('public/uploads/upcoming_event/',$filename);

            }else{
                    $file->move('public/uploads/upcoming_event/',$filename);
                }

            $upcoming_event->image = $filename;
        }else{
            return redirect()->route('upcoming_event');
            $upcoming_event->image = '';
        }

        $upcoming_event->save();

        return redirect()->route('upcoming_event')->withSuccess('Event has been successfully uploaded.');
}



    public function edit($id){
        $upcoming_events = UpcomingEvent::find($id);
        return view('update_up_event')->with('upcoming_events',$upcoming_events);
}



    public function update_upcoming_event(Request $request, $id){

        $upcoming_events = UpcomingEvent::find($id);

        $image_path = "public/uploads/upcoming_event/".$upcoming_events->image; 



        $this->validate($request,[
            'image' => 'image|mimes:jpeg,JPEG,png,PNG,jpg,JPG|max:80000',

        ],[ 'image.uploaded' => 'The :attribute can be only JPG or JPEG or PNG.',
    ]);


        $upcoming_events->title = $request->input('title');
        $upcoming_events->description = $request->input('description');

        if($request->hasfile('image')){


            if(file_exists($image_path)) {
                @unlink($image_path);
            }

            $file = $request->file('image');
            $filename=$file->getClientOriginalName();


            if (DB::table('upcoming_events')->where('image', '=', $filename)->exists()) {

                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;

                $file->move('public/uploads/upcoming_event/',$filename);

            }else{
                    $file->move('public/uploads/upcoming_event/',$filename);
                }

            $upcoming_events->image = $filename;
        }

        $upcoming_events->save();
        
        return redirect('/upcoming_event')->with('upcoming_events',$upcoming_events)->withSuccess('Upcoming Event has been successfully updated.');
}



    public function delete($id){
        $upcoming_events = UpcomingEvent::find($id);
        $upcoming_events->delete();
        $image_path = "public/uploads/upcoming_event/".$upcoming_events->image; 

         if (file_exists($image_path)){
               @unlink($image_path);
           }

        return redirect('/upcoming_event')->with('upcoming_events',$upcoming_events);
}
}
