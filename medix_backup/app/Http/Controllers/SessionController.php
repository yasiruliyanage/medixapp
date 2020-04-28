<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class SessionController extends Controller
{


	public function create(){
    	return view('dashboard.registration.login');
    }
    public function destroy(){
    	auth()->logout();
    	return redirect()->route('adminlogin');


    }

    public function store(Request $request){

      
        if(auth()->attempt([

           'email' => $request-> input('email'),
           'password'=>$request -> input('password') 


        ]))

        {

            $user = User::where('email',$request-> email)->first();

            if($user->is_admin())

            {
                return redirect()->route('adminhome');
            }

             return redirect()->route('userhome');

        }

        return redirect() ->back();


    }
  /*  public function store(Request $request){
    	 $this -> validate($request,[
      	'email' => 'email|required',
      	'password' => 'required'
      ]);
    	 if(Auth::attempt(['email' => $request-> input('email'),'password' => $request -> input('password')])){
     

    	 	return redirect() -> route('dashboard/home');
    	 }

    	 return redirect() -> back();
    }*/


    
}
