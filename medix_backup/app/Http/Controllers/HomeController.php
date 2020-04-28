<?php

namespace App\Http\Controllers;
use App\Sms;
use SoapClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user/pages/homedashboard');
    }
	  public function showmessages(Request $request)
    {
	    $id = $request->get('id');
        $singlemesseges = DB::select("select * from sentmesseges where member_id=?  ",[$id]);

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");

        return view('user.pages.manage_sms',['singlemesseges'=>$singlemesseges]);
    }
	  public function showevents()
    {
	  
        $myevents = DB::select("select * from events");

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");

        return view('user.pages.myevents',compact('myevents'));
    }
	public function mygroups(Request $request)
	 {
		 $id = $request->get('id');
        $groupsinfo = DB::select("select * from groups");
		  $groups = DB::select("select * from group_members where member_id=?  ",[$id]);

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");

        return view('user.pages.mygroups',compact('groups','groupsinfo'));
    }
	
	  public function showeditprofile()
    {
        return view('auth.edit_admin');
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
        $admins = DB::update('update users set name= ? , username = ? ,  nic = ? , mobile = ? , address = ? ,  email = ? ,  updated_at = ? where id = ? ',
        [$name,$username,$nic,$mobile,$address,$email,$timestamp,$id]);

       if($admins) {
            $red = redirect('user/profile')->with('success','Data has been updated');



       }else {

         $red = redirect('user/editprofile/')->with('danger','Error update please try again');
       }

       return $red;
        } else {

          //geting data from  membership field data
       $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('admins/profileimg'),$new_name);
      // $new_name="test.jpg";
          $admins = DB::update('update users set name= ? ,username = ? , nic = ? , profile_img = ? , mobile = ? , address = ? , email = ?  , updated_at = ? where id = ? ',
        [$name,$username,$nic,$new_name,$mobile,$address,$email,$timestamp,$id]);

       if($admins) {

            $red = redirect('user/profile')->with('success','Data has been updated');



       }else {

         $red = redirect('user/editprofile/')->with('danger','Error update please try again');
       }

       return $red;
        }
        

       

    }

      public function viewprofile()
    {

        return view('auth.view_admin');

    }

       public function changepasswordform()
    {

        return view('auth.changepassword');

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
        $admins = DB::update('update users set password=?, updated_at = ? where id = ? ',
        [$password,$timestamp,$id]);

         $red = redirect('home')->with('success','Password Changed successfully');
  

        }else{
            $red = redirect('user/changepassword/')->with('danger','Error you entered old password ');

        }
       
    return $red;
       

    }

    public function verifymobile(Request $request){

      $this->validate($request,[

        'otp_code'=>'required|min:6|max:6',

      ]);


      $userid = Auth::user()->id;


      $otp_code = $request->get('otp_code');

      $getoldotp = DB::select('select * from users where id=?',[$userid]);

      $oldotp = $getoldotp[0]->otp_code;


      if(Hash::check($otp_code, $oldotp)){

        $updatenumbervstatus = DB::update('update users set isverified=? where id=?',[1,$userid]);

                 $red = redirect('home')->with('success','Mobile number Verified Succefully');
    
      }else{
                 $red = redirect('home')->with('danger','Error verification code is wrong ');

      }

      return $red;

    }
}
