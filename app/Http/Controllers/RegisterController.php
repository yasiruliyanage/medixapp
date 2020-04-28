<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use Validator,Redirect,Response,File;
class RegisterController extends Controller
{
    public function create(){

    	return view('dashboard.registration.create');

    }

    public function store(Request $request){
       //validate form

    	$this-> validate($request,[
    		'username' => 'required',
    		'email'=> 'required',
    		'password' => 'required|confirmed',
    		'name' => 'required',
    		'nic' => 'required',
    		'code' => 'required',
    		'address'=>'required',
    		'profile_img' => 'required|image|max:2048',
    		'mobile' => 'required'
    	]);

       $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('public/profileimg'),$new_name);

      /*  $form_data = array(
             'username'=>$request->input('username'),
           'email'=>$request->input('email'),
            'password'=> $request->input('password'),
             'name'=> $request->input('name'),
              'nic'=> $request->input('nic'),
              'code'=>$request->input('code'),
               'address'=>$request->input('address'),
               'profile_img'=> $new_name,
        );*/
        $user = new User([
              'username'=>$request->input('username'),
           'email'=>$request->input('email'),
            'password'=> $request->input('password'),
             'name'=> $request->input('name'),
              'nic'=> $request->input('nic'),
              'code'=>$request->input('code'),
               'address'=>$request->input('address'),
                'mobile'=>$request->input('mobile'),
               'profile_img'=> $new_name,
        ]);

        $user ->save();
    	//$user = User::create($form_data);

      //  ['username','email','password','name','nic','code','address','mobile']

    	//sign them in 
    	auth()->login($user);

    	//redirect to the home

    	return redirect()->route('adminhome');
    }
}
