<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{

       public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin',['except' =>'test']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $events = DB::select("select * from events where inRecycle=0 ORDER BY id  desc ");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_events',['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboard.pages.add_event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validating membership form fields
            $this-> validate($request,[
            'e_heading' => 'required',
            'e_shortdesc' => 'required',
            'e_longdesc' => 'required',
            'contact_no' => 'required',
            'organizer_name' => 'required',
			'e_date'=>'required',
			'e_time'=>'required',
			'e_venue'=>'required',
            'main_image' => 'required|image|max:2048',
            //'event_video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',

        ]);

       

  
      if($request->hasFile('gallery_img'))
    {
     $names = [];
    foreach($request->file('gallery_img') as $image)
    {
        $destinationPath = 'event/event_gallery_images/';
        $galleryimagename = rand().'.'.$image->getClientOriginalName();
        $image->move($destinationPath, $galleryimagename);
        array_push($names, $galleryimagename);          

    }

   //  $galleryimage = json_encode($names);
     $galleryimage = implode(',', $names);
    }

    /*  if($request->hasFile('event_video')){

            $file = $request->file('event_video');
            $videofilename = rand().'.'.$file->getClientOriginalName();
            $path = public_path().'event/eventvidoes/';
            $file->move($path, $videofilename);
        }*/

    $image =$request->file('main_image');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('event/mainimg'),$new_name);


       $heading = $request->get('e_heading');
        $shortdesc = $request->get('e_shortdesc');
       $longdesc = $request->get('e_longdesc');
       $contact_no = $request->get('contact_no');
       $organizer = $request->get('organizer_name');
	   $edate = $request->get('e_date');
	   $etime = $request->get('e_time');
	   $evenue = $request->get('e_venue');
       $main_image = $new_name;

       
     /*  if(!empty($request->file('event_video'))){
         $video = $videofilename;
     }else{
         $video = "";
     }*/

     $video=$request->get('event_video');
      if(!empty($request->file('gallery_img'))){

            $gallery = $galleryimage;
       
          }else{
         
            $gallery = "";
          }

      
      // $mobile = $request->get('mobile');
        $timestamp = now();




         $event = DB::insert('insert into events(header_title,short_desc,long_desc,orgnizer,contactno,main_image,gallery_img,video,e_date,e_time,e_venue,created_at) value(?,?,?,?,?,?,?,?,?,?,?,?)',[$heading,$shortdesc,$longdesc,$organizer,$contact_no,$new_name,$gallery,$video,$edate,$etime,$evenue,$timestamp]);



        if($event){
            $red = redirect('admin/events/')->with('success','Member succefully added');

        }else {
            $red = redirect('admin/events/add')->with('danger','Input data failed ');
        }

        return $red;

  



       
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $events = DB::select('select * from events where id=? ',[$id]);
        return view('dashboard.pages.event_profile',['events'=>$events]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = DB::select('select * from events where id = ?',[$id]);

        return view('dashboard.pages.edit_event',['events'=> $events]);
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
        //validating membership form fields
            $this-> validate($request,[
            'e_heading' => 'required',
            'e_shortdesc' => 'required',
            'e_longdesc' => 'required',
            'contact_no' => 'required',
            'organizer_name' => 'required',
			'e_date'=>'required',
			'e_time'=>'required',
			'e_venue'=>'required',
            'main_image' => 'image|max:2048',
           // 'event_video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',

        ]);

       

  
      if($request->hasFile('gallery_img'))
    {
     $names = [];
    foreach($request->file('gallery_img') as $image)
    {
        $destinationPath = 'event/event_gallery_images/';
        $galleryimagename = rand().'.'.$image->getClientOriginalName();
        $image->move($destinationPath, $galleryimagename);
        array_push($names, $galleryimagename);          
    }

   //  $galleryimage = json_encode($names);
     $galleryimage = implode(',', $names);
    }


  if($request->hasFile('main_image')){
    $image =$request->file('main_image');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('event/mainimg'),$new_name);
}

       $heading = $request->get('e_heading');
        $shortdesc = $request->get('e_shortdesc');
       $longdesc = $request->get('e_longdesc');
       $contact_no = $request->get('contact_no');
       $organizer = $request->get('organizer_name');
		  $edate = $request->get('e_date');
	   $etime = $request->get('e_time');
	   $evenue = $request->get('e_venue');
         if(!empty($request->file('main_image'))){
       $main_image = $new_name;

   }else{
       $main_image = "";
   }
      if(!empty($request->file('gallery_img'))){
       $gallery = $galleryimage;

   }else{
       $gallery ="";
   }

      
       if(!empty($request->get('event_video'))){
         $video = $request->get('event_video');
     }else{
		  $result = DB::table('events')->select('video')->where('id', $id)->first();
        // $result2 = DB::table('users')->select('mobile')->where('union_id', $unionid)->first();
         $oldvideo= $result->video;
         $video = $oldvideo;
     }
      
      // $mobile = $request->get('mobile');
        $timestamp = now();

   //condition-01
          
            if(!empty($request->file('gallery_img'))&&!empty($request->file('main_image'))){




         $events = DB::update('update events set  header_title=? , short_desc=? , long_desc=? ,contactno=?, orgnizer= ? , main_image =? , gallery_img = ? , video = ? ,e_date=?,e_time=?,e_venue=?, updated_at = ? where id=? ',[$heading,$shortdesc,$longdesc,$contact_no,$organizer,$main_image,$gallery,$video,$edate,$etime,$evenue,$timestamp,$id]);

         

       if($events) {
            $red = redirect('admin/events')->with('success','Data has been updated');



       }else {

         $red = redirect('events/edit/',$id)->with('danger','Error update please try again');
       }

       return $red;

    }

    //condition-02

    if(empty($request->file('gallery_img'))&&!empty($request->file('main_image'))){

         $events = DB::update('update events set  header_title=? , short_desc=? , long_desc=? ,contactno=?, orgnizer= ? , main_image =? , video = ? ,e_date=?,e_time=?,e_venue=? , updated_at = ?  where id=?',[$heading,$shortdesc,$longdesc,$contact_no,$organizer,$main_image,$video,$edate,$etime,$evenue,$timestamp,$id]);

         

       if($events) {
            $red = redirect('admin/events')->with('success','Data has been updated');



       }else {

         $red = redirect('events/edit/',$id)->with('danger','Error update please try again');
       }

       return $red;
    }

    //condition 03

    if(!empty($request->file('gallery_img'))&&empty($request->file('main_image'))){
         $events = DB::update('update events set  header_title=? , short_desc=? , long_desc=? ,contactno=?, orgnizer= ? , gallery_img =? ,video = ? ,e_date=?,e_time=?,e_venue=? , updated_at = ?  where id=?',[$heading,$shortdesc,$longdesc,$contact_no,$organizer,$gallery,$video,$edate,$etime,$evenue,$timestamp,$id]);

         

       if($events) {
            $red = redirect('admin/events')->with('success','Data has been updated');



       }else {

         $red = redirect('events/edit/',$id)->with('danger','Error update please try again');
       }

       return $red;
       
    }

    

      //condition 07

    if(empty($request->file('main_image'))&&empty($request->file('gallery_img'))){
         $events = DB::update('update events set  header_title=? , short_desc=? , long_desc=? ,contactno=?, orgnizer= ?,video=?,e_date=? , e_time=?, e_venue=? , updated_at = ? where id=? ',[$heading,$shortdesc,$longdesc,$contact_no,$organizer,$video,$edate,$etime,$evenue,$timestamp,$id]);

         

       if($events) {
            $red = redirect('admin/events')->with('success','Data has been updated');



       }else {

         $red = redirect('events/edit/',$id)->with('danger','Error update please try again');
       }

       return $red;
       
    }

   







          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $events = DB::delete('delete from events where id =?',[$id]);
         $red = redirect('admin/events');
         return $red;
    }

      public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::delete('delete from events where id in ('.implode(",",$ids).')');
        return redirect('admin/events');

    }
       public function recycleAll(Request $request){

          $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update events set inRecycle = 1  where id in ('.implode(",",$ids).')');
        return redirect('admin/events');
       

    }

       public function restoreall(Request $request){

           $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update events set inRecycle = 0  where id in ('.implode(",",$ids).')');
        return redirect('admin/events');
      

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recycle($id)
    {
        $events = DB::update('update events set inRecycle = 1 where id =?',[$id]);
         $red = redirect('admin/events');
         return $red;
     
    }

     public function restore($id)
    {

         $events = DB::update('update events set inRecycle = 0 where id =?',[$id]);
         $red = redirect('admin/events');
         return $red;
       
    }


      public function showTrash()
    {
        $events = DB::select('select * from events where inRecycle=1');

        return view('dashboard.pages.events_trash',compact('events'));
    }
}
