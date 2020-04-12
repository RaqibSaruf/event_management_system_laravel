<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\latestEvent;
use App\latestEventImage;


class LatestEventController extends Controller
{
	
    public function create(){
    	return view('latestEvent');       
}



    public function store(Request $request){
        $this->validate($request,[
            'title' =>'required',
            'description' =>'required',
            'image' => 'image|mimes:jpeg,JPEG,png,PNG,jpg,JPG|max:80000',

        ],[ 'title.required' => 'The :attribute field can not be blank value.',
        	'description.required' => 'The :attribute field can not be blank value.',
        	'image.uploaded' => 'The :attribute can be only JPG or JPEG or PNG.',
    ]);
    	
        $event = new latestEvent();
 

        $event->title = $request->input('title');
        $event->description = $request->input('description');

        

        $event->save();


        if($request->hasfile('images'))
         {
 
            foreach($request->file('images') as $image)
            {
            	$event_img = new latestEventImage();
            	$event_img->latest_events_id = $event->id;
                $filename=$image->getClientOriginalName();

                if (DB::table('latest_event_image')->where('image', '=', $filename)->exists()) {

                	    $extension = $image->getClientOriginalExtension();
            			$filename = time() . '.' . $extension;

            			$image->move('public/uploads/latest_event/', $filename);

                }else{
                	$image->move('public/uploads/latest_event/', $filename);
                }

                
                $event_img->image = $filename;

                $event_img->save();
            }
         }

        return redirect()->route('latest_event')->withSuccess('Files has been successfully uploaded.');
}


	public function all(){
    	$events = latestEvent::Paginate(1);
        $img[]= new latestEventImage();

    	foreach ($events as $event) {
    		$img[$event->id]= DB::table('latest_event_image')->select('image')->where('latest_events_id', '=', $event->id)->get();
    	}

    	return view('event')->with(compact('events','img'));  
        
}


		
    public function edit($id){
        $events = latestEvent::find($id);
        $images= DB::table('latest_event_image')->select('id','image')->where('latest_events_id', '=', $events->id)->get();
        return view('update_event')->with(compact('events','images'));
}

	public function update_event(Request $request, $id){
		$events = latestEvent::find($id);

		$this->validate($request,[
            'image' => 'image|mimes:jpeg,JPEG,png,PNG,jpg,JPG|max:80000',
        ],[  'image.uploaded' => 'The :attribute can be only JPG or JPEG or PNG.',
    ]);

		$events->title = $request->input('title');
        $events->description = $request->input('description');

        $events->save();

        if($request->hasfile('images'))
         {
 
            foreach($request->file('images') as $image)
            {
            	$event_img = new latestEventImage();
            	$event_img->latest_events_id = $events->id;
                $filename=$image->getClientOriginalName();

                if (DB::table('latest_event_image')->where('image', '=', $filename)->exists()) {

                	    $extension = $image->getClientOriginalExtension();
            			$filename = time() . '.' . $extension;

            			$image->move('public/uploads/latest_event/', $filename);

                }else{
                	$image->move('public/uploads/latest_event/', $filename);
                }

                
                $event_img->image = $filename;

                $event_img->save();
            }
         }
         return redirect()->route('all_event')->withSuccess('Event has been successfully updated.');

}

    public function delete_image($e_id,$i_id){
    	$events = latestEvent::find($e_id);
        $img = latestEventImage::find($i_id);
        $img->delete();
        $image_path = "public/uploads/latest_event/".$img->image; 

         if (file_exists($image_path)){
               @unlink($image_path);
           }

        return redirect()->route('edit_event',[$e_id])->withSuccess('Image has been deleting successfully.');
}



    



}
