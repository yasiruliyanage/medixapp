<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function __construct()
    {
        
         $this->middleware('guest');
        //$this->middleware('admin',['except' =>'test']);

    }

    public function index()
    {
        $downloads = DB::table("downloads")->paginate(9);

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('frontend/pages/downloads',['downloads'=>$downloads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('frontend.pages.full_event',['events'=>$events]);
    }

	 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fetch_data(Request $request)
    {
        if($request->ajax())
		{
			$downloads = DB::table('downloads')->paginate(9);
			 //$designations = DB::select("select * from designations");
			return view('frontend/pages/downloaddata',compact('downloads'))->render();
		}
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
      public function noResult(){
     
     return view('frontend/pages/no_result');

    }

    public function SearchAll(Request $request){

         $this-> validate($request,[
            'q' => 'required',
        ]);

         $q=$request->get('q');

          $members = DB::select("select * from users where employee_id  like ? or name  like ? ",['%'.$q.'%','%'.$q.'%']);
         $downloads = DB::select("select * from downloads where name  like ? or description  like ? ",['%'.$q.'%','%'.$q.'%']);
          $news = DB::select("select * from news where header_title  like ? or long_desc  like ? ",['%'.$q.'%','%'.$q.'%']);
           $events = DB::select("select * from events where header_title like ? or long_desc  like ? ",['%'.$q.'%','%'.$q.'%']);

           $membercount=count($members);
           $downloadscount=count($downloads);
           $newscount=count($news);
           $eventscount=count($events);

         if($q!=""){

          

          return view('frontend/pages/search',compact('members','downloads','news','events','membercount','downloadscount','newscount','eventscount','q'));


         }else{

            $red=redirect('/noresult');
            return $red;
         }

   
    }

  
}
