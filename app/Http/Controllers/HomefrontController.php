<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class HomefrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        
        // $this->middleware('guest');
        //$this->middleware('admin',['except' =>'test']);

    }
    public function index()
    {
         $news = DB::select("select * from news order by created_at  DESC LIMIT 3 ");
		 $events = DB::select("select * from events order by created_at  DESC LIMIT 3 ");
		 $homeevents = DB::select("select * from events order by id  DESC LIMIT 1 ");
		 $designations = DB::select("select * from designations");
		 $homenews = DB::select("select * from news order by id  DESC LIMIT 1 ");
		 $homestaff = DB::select("select * from staff order by id ASC LIMIT 3 ");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('frontend/pages/home',compact('news','events','homeevents','homenews','homestaff','designations'));
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
        //
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
}
