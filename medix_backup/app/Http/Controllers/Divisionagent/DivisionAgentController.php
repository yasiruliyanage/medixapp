<?php

namespace App\Http\Controllers\Divisionagent;

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

class DivisionAgentController extends Controller
{

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('divisionagent');
    }
      public function index()

    {
        $user = Auth::user();

        $userdivid = Auth::user()->division;

        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;



      
        return view('divisionagent.pages.home',compact('user','divname'));
    }

           public function showeditprofile()
    {

       $userdivid = Auth::user()->division;

        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;
        return view('divisionagent.pages.edit_admin',compact('divname'));
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
            $red = redirect('hospitaladmin/profile')->with('success','Profile has been updated');



       }else {

         $red = redirect('hospitaladmin/profile')->with('danger','Error update please try again');
       }

       return $red;
        } else {

          //geting data from  membership field data
       $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('divisionalagents/profileimg'),$new_name);
      // $new_name="test.jpg";
          $admins = DB::update('update admins set name= ? ,username = ? , nic = ? , profile_img = ? , mobile = ? , address = ? , email = ?  , updated_at = ? where id = ? ',
        [$name,$username,$nic,$new_name,$mobile,$address,$email,$timestamp,$id]);

       if($admins) {

            $red = redirect('hospitaladmin/profile')->with('success','Profile has been updated');



       }else {

         $red = redirect('hospitaladmin/editprofile/')->with('danger','Error update please try again');
       }

       return $red;
        }
        

       

    }

      public function viewprofile()
    {

       $userdivid = Auth::user()->division;

        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;

        return view('divisionagent.pages.view_admin',compact('divname'));

    }

       public function changepasswordform()
    {

       $userdivid = Auth::user()->division;

        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;

        return view('divisionagent.pages.changepassword',compact('divname'));

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

         $red = redirect('hospitaladmiin/dashboard')->with('success','Password Changed successfully');
  

        }else{
            $red = redirect('hospitaladmiin/changepassword/')->with('danger','Error you entered worng old password ');

        }
       
    return $red;
       

    }

       
       
      


       

       
     

   public function getProvinceMembers(Request $request)
    {

       $userpid = Auth::user()->province;
       $userdid = Auth::user()->district;
       $userzid = Auth::user()->zone;
       $userdivid = Auth::user()->division;
       $members = DB::table("users")->where('inRecycle',0)->where('province',$userpid)->where('district',$userdid)->where('zone',$userzid)->where('division',$userdivid)->paginate(100);

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
      
      //  ['members'=>$members]

       // $provinces = DB::select("select * from province");
       
       
        
        $schools = DB::select("select * from schools where d_id=? and p_id=? and z_id=? and div_id=?",[$userdid,$userpid,$userzid,$userdivid]);

         

        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;

         $record_count = count($members);

        return view('divisionagent.pages.members.manage_members',compact('members','schools','record_count','divname','divname'));
    }

    public function memberfetch_data(Request $request){

      if($request->ajax())
       
      {
        $userpid = Auth::user()->province;
        $userdid = Auth::user()->district;
        $userzid = Auth::user()->zone;
        $userdivid = Auth::user()->division;
         
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
        $province = $userpid;
        $district =$userdid;
        $zone = $userzid;
        $division = $userdivid;
        $school = $request->get('school');
        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);

        
       // dd($province,$district,$zone, $division,$school);

       if(!empty($query)){
       
         $members = DB::table('users')
         ->where('inRecycle',0)
         ->where('emp_id','like','%'.$query.'%')
         ->orWhere('name','like','%'.$query.'%')
         ->orWhere('lname','like','%'.$query.'%')
         ->orWhere('dob','like','%'.$query.'%')
         ->orWhere('nic','like','%'.$query.'%')
         ->orWhere('mobile','like','%'.$query.'%')
         ->orWhere('address','like','%'.$query.'%')
         ->orWhere('ps_number','like','%'.$query.'%')
         ->orWhere('id','like','%'.$query.'%')
         ->orderBy($sort_by,$sort_type)
         ->paginate(100);

         $record_count = count($members);
       }else if(empty($query))
       {
      
         if((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         // $test = 'i am in first block';
         // dd($test);

          $members = DB::table('users')->where('inRecycle',0)->orderBy($sort_by,$sort_type)->paginate(100);

          $record_count = count($members);

        }elseif((!empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         


          //$test = 'i am in second block';
          //dd($province,$district,$zone,$division,$school,$test);
         $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);
        
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in second new block';
          //dd($test);
       
         $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in third block';
          //dd($test);
          
        $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($members);
        
        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in four block';
          //dd($test);
         
         $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

        // $test = 'i am in  five block';
          //dd($test);
         
         $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in sixth block';
         // dd($test);
        
         $members = DB::table('users')->where('inRecycle',0)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);
        }elseif((!empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in seventh block';
          //dd($test);

          $members = DB::table('users')->where('inRecycle',0)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in eight block';
          //dd($test);

         $members = DB::table('users')->where('inRecycle',0)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){

          //$test = 'i am in nineth block';
          //dd($test);

        $members = DB::table('users')->where('inRecycle',0)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(!empty($school))){
          

          //$test = 'i am in tenth block';
          //dd($division,$school,$test);

          $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in eleventh block test';
          //dd($test);


        $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($members);
       
        }else{

          $members = DB::table('users')->where('inRecycle',0)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
          //dd($members);
        }

       }
       
      


       

        return view('divisionagent.pages.members.member_pagination_data',compact('members','record_count'))->render();
      }
    }


       public function membershow($id)
    {
        $members = DB::select('select * from users where id=? ',[$id]);

         $userpid = Auth::user()->province;
         $userdid = Auth::user()->district;
         $userzid = Auth::user()->zone;
         $userdivid = Auth::user()->division;
         $schools = DB::select('select * from schools where div_id=?',[$userdivid]);
     
          
         // dd($divisions);
           $userdivid = Auth::user()->division;

        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;

          //dd($zones);


        // $designations = DB::select("select * from designations");
        // $workplaces = DB::select("select * from workplaces");
        return view('divisionagent.pages.members.member_profile',compact('members','schools','divname'));
    }


}
