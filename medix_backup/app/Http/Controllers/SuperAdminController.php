<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
         $this->middleware('schoolagent',['except' =>'test']);
    }
    public function index()

    {
    	return view('admin.editor');
    }

    public function test()
    {
    	return view('admin.test');
    }
}
