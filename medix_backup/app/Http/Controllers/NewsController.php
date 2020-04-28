<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class NewsController extends Controller
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
          $news = DB::select("select * from news where inRecycle=0 ORDER BY  id DESC ");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_news',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('dashboard.pages.add_news');
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
            'e_longdesc' => 'required',
            'tag' => 'required',
            'main_image' => 'required|image|max:2048',
           // 'news_video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
           // 'gallery_img' => 'required'

        ]);

       

  
      if($request->hasFile('gallery_img'))
    {
     $names = [];
    foreach($request->file('gallery_img') as $image)
    {
        $destinationPath = 'news/news_gallery_images/';
        $galleryimagename = rand().'.'.$image->getClientOriginalName();
        $image->move($destinationPath, $galleryimagename);
        array_push($names, $galleryimagename);          

    }

   //  $galleryimage = json_encode($names);
     $galleryimage = implode(',', $names);
    }else{
		  $galleryimage = '';
	  }

    /*  if($request->hasFile('news_video')){

            $file = $request->file('news_video');
            $videofilename = rand().'.'.$file->getClientOriginalName();
            $path = public_path().'news/newsvidoes/';
            $file->move($path, $videofilename);
        }*/

    $image =$request->file('main_image');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('news/mainimg'),$new_name);


       $heading = $request->get('e_heading');

        $video = $request->get('news_video');

       $longdesc = $request->get('e_longdesc');
        $tag = $request->get('tag');
       $main_image = $new_name;

       $gallery = $galleryimage;
      
      // $mobile = $request->get('mobile');
        $timestamp = now();
         $news = DB::insert('insert into news(header_title,long_desc,main_image,gallery_img,video,newstag,created_at) value(?,?,?,?,?,?,?)',[$heading,$longdesc,$new_name,$gallery,$video,$tag,$timestamp,]);



        if($news){
            $red = redirect('admin/news/')->with('success','news succefully added');

        }else {
            $red = redirect('admin/news/add')->with('danger','Input data failed ');
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
          $news = DB::select('select * from news where id=? ',[$id]);
        return view('dashboard.pages.news_profile',['news'=>$news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $news = DB::select('select * from news where id=? ',[$id]);
        return view('dashboard.pages.edit_news',['news'=>$news]);
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
            'e_longdesc' => 'required',
            'main_image' => 'image|max:2048',
          //  'news_video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
             'tag'=>'required'

        ]);

       

  
      if($request->hasFile('gallery_img'))
    {
     $names = [];
    foreach($request->file('gallery_img') as $image)
    {
        $destinationPath = 'news/news_gallery_images/';
        $galleryimagename = rand().'.'.$image->getClientOriginalName();
        $image->move($destinationPath, $galleryimagename);
        array_push($names, $galleryimagename);          

    }

   //  $galleryimage = json_encode($names);
     $galleryimage = implode(',', $names);
    }

     /* if($request->hasFile('news_video')){

            $file = $request->file('news_video');
            $videofilename = rand().'.'.$file->getClientOriginalName();
            $path = public_path().'news/newsvidoes/';
            $file->move($path, $videofilename);
        }*/

  if($request->hasFile('main_image')){
    $image =$request->file('main_image');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('news/mainimg'),$new_name);
}

       $heading = $request->get('e_heading');
        $tag  = $request->get('tag');
       $longdesc = $request->get('e_longdesc');
      
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

      
    $video = $request->get('news_video');
      
      // $mobile = $request->get('mobile');
        $timestamp = now();

   //condition-01
          
            if(!empty($request->file('gallery_img'))&&!empty($request->file('main_image'))){
            //  dd($request->all());

         $news = DB::update('update news set  header_title=? ,  long_desc=? , main_image =? , gallery_img = ? , video = ? ,newstag=?, updated_at = ?  where id=?',[$heading,$longdesc,$main_image,$gallery,$video,$tag,$timestamp,$id]);

         

       if($news) {
            $red = redirect('admin/news')->with('success','Data has been updated');



       }else {

         $red = redirect('news/edit/',$id)->with('danger','Error update please try again');
       }

       return $red;

    }

    //condition-02

     if(empty($request->file('gallery_img'))&&!empty($request->file('main_image'))){
     // dd($request->all());
         $news = DB::update('update news set  header_title=? ,  long_desc=? , main_image =? , video =? , newstag =?, updated_at = ? where id=? ',[$heading,$longdesc,$main_image,$video,$tag,$timestamp,$id]);

         

       if($news) {
            $red = redirect('admin/news')->with('success','Data has been updated');



       }else {

         $red = redirect('news/edit/',$id)->with('danger','Error update please try again');
       }

       return $red;
    }

    //condition 03

   if(!empty($request->file('gallery_img'))&& empty($request->file('main_image'))){
    
         $news = DB::update('update news set  header_title=? , long_desc=? , gallery_img=? ,video = ? ,newstag=?, updated_at = ?  where id=?',[$heading,$longdesc,$gallery_img,$video,$tag,$timestamp,$id]);

         

       if($news) {
            $red = redirect('admin/news')->with('success','Data has been updated');



       }else {

         $red = redirect('news/edit/',$id)->with('danger','Error update please try again');
       }

       return $red;
       
    }

  

      //condition 07

    if(empty($request->file('main_image'))&&empty($request->file('gallery_img'))){

       

       $news = DB::update('update news set  header_title=? ,  long_desc=? ,video=?,newstag=?,  updated_at = ?  where id=?',[$heading,$longdesc,$video,$tag,$timestamp,$id]);

         

       if($news) {
            $red = redirect('admin/news')->with('success','Data has been updated');



       }else {

         $red = redirect('news/edit/',$id)->with('danger','Error update please try again');
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
         $news = DB::delete('delete from news where id =?',[$id]);
         $red = redirect('admin/news');
         return $red;
    }

      public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::delete('delete from news where id in ('.implode(",",$ids).')');
        return redirect('admin/news');

    }


       public function recycleAll(Request $request){

          $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update news set inRecycle = 1  where id in ('.implode(",",$ids).')');
        return redirect('admin/news');
       

    }

       public function restoreall(Request $request){

           $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update news set inRecycle = 0  where id in ('.implode(",",$ids).')');
        return redirect('admin/news');
      

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recycle($id)
    {
        $news = DB::update('update news set inRecycle = 1 where id =?',[$id]);
         $red = redirect('admin/news');
         return $red;
     
    }

     public function restore($id)
    {

         $news = DB::update('update news set inRecycle = 0 where id =?',[$id]);
         $red = redirect('admin/news');
         return $red;
       
    }


      public function showTrash()
    {
        $news = DB::select('select * from news where inRecycle=1');

        return view('dashboard.pages.news_trash',compact('news'));
    }
}
