<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class CountryController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin')->except(['districts','divisions','zones','schools']);
       // $this->middleware('guest')->except(['districts','divisions','zones','schools']);
      //  $this->middleware('admin',['except' =>'zones']);
      //  $this->middleware('admin',['except' =>'divisions']);
      //  $this->middleware('admin',['except' =>'schools']);*/

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depos = DB::select("select * from depos ");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_depos',['depos'=>$depos]);
    }


    public function districts(){

        $p_id = Input::get('p_id');

        $districts = DB::select("select * from district where p_id=? ",[$p_id]);
         
         return response()->json($districts);

    }

       public function zones(){

        $d_id = Input::get('d_id');

        $zones = DB::select("select * from zones where d_id=? ",[$d_id]);
         
         return response()->json($zones);

    }


       public function divisions(){

        $z_id = Input::get('z_id');

        $divisions = DB::select("select * from divisions where z_id=? ",[$z_id]);
         
         return response()->json($divisions);

    }

    public function schools(){

        $div_id = Input::get('div_id');

        $schools = DB::select("select * from schools where div_id=? ",[$div_id]);
         
         return response()->json($schools);

    }



   





  
}
