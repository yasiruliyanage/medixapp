<?php

namespace App\Http\Controllers\Schoolagent;

use App\Sms;
use SoapClient;
use Importer;
use File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\MemberImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class SchoolAgentController extends Controller
{

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
         $this->middleware('schoolagent');
    }
     public function index()

    {
        $user = Auth::user();

        $usersid = Auth::user()->school;
        $userdivid = Auth::user()->division;

        $getsname = DB::select('select * from schools where id=?',[$usersid]);
        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $sname=$getsname[0]->placename;
        $divname=$getdivname[0]->placename;




      
        return view('schoolagent.pages.home',compact('user','sname','divname'));
    }

           public function showeditprofile()
    {

      

       
         $usersid = Auth::user()->school;
        $userdivid = Auth::user()->division;

        $getsname = DB::select('select * from schools where id=?',[$usersid]);
        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $sname=$getsname[0]->placename;
        $divname=$getdivname[0]->placename;
        
        return view('schoolagent.pages.edit_admin',compact('sname','divname'));
    }

      public function saveprofile(Request $request)

    {

          $this-> validate($request,[
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'nic'=> 'required',
            'mobile'=> 'required',
            'address'=> 'required',
           'profile_img' => 'image|max:2048|mimes:jpg,png,jpeg,gif,svg',
        ]);

       //   dd($request->all());

       $id = $request->get('id');
        $name = $request->get('name');
        $username = $request->get('username');
        $nic = $request->get('nic');
        $mobile = $request->get('mobile');
        $email = $request->get('email');
        $address = $request->get('address');
         $timestamp = now();

          if(empty($request->file('profile_img'))){
        $admins = DB::update('update admins set name= ? , username = ? ,  nic = ? , mobile = ? , address = ? ,  email = ? ,  updated_at = ? where id = ? ',
        [$name,$username,$nic,$mobile,$address,$email,$timestamp,$id]);

       if($admins) {
            $red = redirect('departmentadmin/profile')->with('success','Profile has been updated');



       }else {

         $red = redirect('departmentadmin/profile')->with('danger','Error update please try again');
       }

       return $red;
        } else {

          //geting data from  membership field data
       $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('schoolagents/profileimg'),$new_name);
      // $new_name="test.jpg";
          $admins = DB::update('update admins set name= ? ,username = ? , nic = ? , profile_img = ? , mobile = ? , address = ? , email = ?  , updated_at = ? where id = ? ',
        [$name,$username,$nic,$new_name,$mobile,$address,$email,$timestamp,$id]);

       if($admins) {

            $red = redirect('departmentadmin/profile')->with('success','Profile has been updated');



       }else {

         $red = redirect('departmentadmin/editprofile/')->with('danger','Error update please try again');
       }

       return $red;
        }
        

       

    }

      public function viewprofile()
    {

        $usersid = Auth::user()->school;
        $userdivid = Auth::user()->division;

        $getsname = DB::select('select * from schools where id=?',[$usersid]);
        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $sname=$getsname[0]->placename;
        $divname=$getdivname[0]->placename;
        return view('schoolagent.pages.view_admin',compact('sname','divname'));

    }

       public function changepasswordform()
    {

         $usersid = Auth::user()->school;
        $userdivid = Auth::user()->division;

        $getsname = DB::select('select * from schools where id=?',[$usersid]);
        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $sname=$getsname[0]->placename;
        $divname=$getdivname[0]->placename;

        return view('schoolagent.pages.changepassword',compact('sname','divname'));

    }

         public function savechangepassword(Request $request)
    {

            $this-> validate($request,[
            'oldpassword' => 'required',
             'password' => 'required|confirmed|min:8'
        ]);

        $id = $request->get('id');
        $currentpassword = $request->get('currentpassword');
        $enteredoldpassword = $request->get('oldpassword');
          
       


        $password =  Hash::make($request->get('password'));
         $timestamp = now();
        if(Hash::check($enteredoldpassword,$currentpassword)){
        $admins = DB::update('update admins set password=?, updated_at = ? where id = ? ',
        [$password,$timestamp,$id]);

         $red = redirect('departmentadmin/dashboard')->with('success','Password Changed successfully');
  

        }else{
            $red = redirect('departmentadmin/changepassword/')->with('danger','Error you entered worng old password ');

        }
       
    return $red;
       

    }


}
