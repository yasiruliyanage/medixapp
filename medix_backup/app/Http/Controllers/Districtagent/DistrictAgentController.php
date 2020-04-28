<?php

namespace App\Http\Controllers\Districtagent;

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

class DistrictAgentController extends Controller
{

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('districtagent');
    }
    
     public function index()

    {
        $user = Auth::user();

        $userdid = Auth::user()->district;

        $getdname = DB::select('select * from district where id=?',[$userdid]);
        $dname=$getdname[0]->placename;
        return view('districtagent.pages.home',compact('user','dname'));
    }



   public function divisionAgents(){

        // $user = Auth::user();

        $agents = DB::table("admins")->where('inRecycle',0)->where('role_id',6)->paginate(100);

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
      
      //  ['members'=>$members]
         
          $userpid = Auth::user()->province;

           $userdid = Auth::user()->district;

        $getdname = DB::select('select * from district where id=?',[$userdid]);
        $dname=$getdname[0]->placename;

       
         $districts = DB::select("select * from district where p_id=?",[$userpid]);
          $zones = DB::select("select * from zones where p_id=?",[$userpid]);
          $divisions = DB::select("select * from divisions where  p_id=?",[$userpid]);


         $record_count = count($agents);

        return view('districtagent.pages.divisionadmin.manage_divisional_agents',compact('agents','districts','zones','divisions','record_count','dname'));
    }

    public function divisionAgentsfetchdata(Request $request){

       if($request->ajax())

      {

      $userpid = Auth::user()->province;
       $userdid = Auth::user()->district;
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
        $province = $userpid;
        $district =$userdid;
        $zone = $request->get('zone');
        
        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);

       // dd($province,$district,$zone, $division,$school);

       if(!empty($query)){
       
       $dstatus=0;
       $sroleid=6;
         $agents = DB::table('admins')
         ->where('inRecycle',$dstatus)
         ->where('role_id',$sroleid)
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

         $record_count = count($agents);


       }else if(empty($query))
       {

          if((empty($province))&&(empty($district))&&(empty($zone))){

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',6)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);


        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))){
          
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',6)->where('province',$province)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);

         $record_count = count($agents);
        
        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))){
          
           $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',6)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);

         $record_count = count($agents);
        
        }elseif((!empty($province))&&(empty($district))&&(!empty($zone))){
          
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',6)->where('province',$province)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);

         $record_count = count($agents);
        
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))){
          
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',6)->where('province',$province)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(100);

         $record_count = count($agents);
        
        }elseif((!empty($province))&&(empty($district))&&(empty($zone))){
          
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',6)->where('province',$province)->orderBy($sort_by,$sort_type)->paginate(100);

         $record_count = count($agents);
        
        }elseif((empty($province))&&(!empty($district))&&(empty($zone))){
          
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',6)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(100);

         $record_count = count($agents);
        
        }elseif((empty($province))&&(empty($district))&&(!empty($zone))){
          
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',6)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($agents);
        
        }

       }
       
      


       

        return view('districtagent.pages.divisionadmin.divisional_agent_pagination_data',compact('agents','record_count'))->render();
      }



    }

     public function divisionAgentshow($id)
    {
        $agents = DB::select('select * from admins where id=? ',[$id]);

       
          //  ['members'=>$members]
         $userpid = Auth::user()->province;
          $userdid = Auth::user()->district;

        $getdname = DB::select('select * from district where id=?',[$userdid]);
        $dname=$getdname[0]->placename;

        $provinces = DB::select('select * from province ');
         $districts = DB::select("select * from district where p_id=?",[$userpid]);
          $zones = DB::select("select * from zones where p_id=?",[$userpid]);
          $divisions = DB::select("select * from divisions where p_id=?",[$userpid]);
         


         

          //dd($zones);


        // $designations = DB::select("select * from designations");
        // $workplaces = DB::select("select * from workplaces");
        return view('districtagent.pages.divisionadmin.divisional_agent_profile_admin',compact('agents','provinces','districts','zones','divisions','dname'));
    }

    public function schoolAgents(){

         // $user = Auth::user();

        $agents = DB::table("admins")->where('inRecycle',0)->where('role_id',7)->paginate(100);

         $userdid = Auth::user()->district;

        $getdname = DB::select('select * from district where id=?',[$userdid]);
        $dname=$getdname[0]->placename;

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
      
      //  ['members'=>$members]
         $userpid = Auth::user()->province;

       
         $districts = DB::select("select * from district where p_id=?",[$userpid]);
          $zones = DB::select("select * from zones where p_id=?",[$userpid]);
          $divisions = DB::select("select * from divisions where p_id=?",[$userpid]);
          $schools = DB::select("select * from schools where p_id=?",[$userpid]);


         $record_count = count($agents);

        return view('districtagent.pages.schooladmin.manage_school_agents',compact('agents','districts','zones','divisions','schools','record_count','dname'));

    }

     public function schoolAgentsfetchdata(Request $request){

      if($request->ajax())
       
      {

        $userpid = Auth::user()->province;
         $userdid = Auth::user()->district;
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
        $province =$userpid;

        $district =$userdid;
        $zone = $request->get('zone');
        $division = $request->get('division');
        $school = $request->get('school');

        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);



       // dd($province,$district,$zone, $division,$school);

       if(!empty($query)){
       
       $dstatus=0;
       $sroleid=7;
         $agents = DB::table('admins')
         ->where('inRecycle',$dstatus)
         ->where('role_id',$sroleid)
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

         $record_count = count($agents);


       }else if(empty($query))
       {
        
          if((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         // $test = 'i am in first block';
         // dd($test);

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->orderBy($sort_by,$sort_type)->paginate(100);
          

          $record_count = count($agents);

        }elseif((!empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         


          //$test = 'i am in second block';
          //dd($province,$district,$zone,$division,$school,$test);
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($agents);
        
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in second new block';
          //dd($test);
       
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in third block';
          //dd($test);
          
        $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($agents);
        
        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in four block';
          //dd($test);
         
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

        // $test = 'i am in  five block';
          //dd($test);
         
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($agents);

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in sixth block';
         // dd($test);
        
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($agents);
        }elseif((!empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in seventh block';
          //dd($test);

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in eight block';
          //dd($test);

         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){

          //$test = 'i am in nineth block';
          //dd($test);

        $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(!empty($school))){
          

          //$test = 'i am in tenth block';
          //dd($division,$school,$test);

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in eleventh block test';
          //dd($test);


        $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($agents);
       
        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){
          
         $test = 'i am in twelth block';
          dd($test);
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);

        }
        elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){
          
         // $test = 'i am in thirth block';
         // dd($test);
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in fourteenth block';
         // dd($test);
         
        $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($agents);
        

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){
          
         // $test = 'i am in fourteenth block';
        //  dd($test);
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);
        }elseif((empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         // $test = 'i am fifteenth  block';
         // dd($test);
           $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(100);
           $record_count = count($agents);

          // dd($members);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){


         // $test = 'i am in sixeenth block';
         // dd($test);
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);

        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in seventeeth block';
          //dd($test);
        
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);
        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in eighteenth block';
          //dd($test);
        
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);
        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty(!$division))&&(empty($school))){

          //$test = 'i am in nineteenth block';
          //dd($test);

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);
        }elseif((!empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){

          //$test = 'i am in nineteenth block';
          //dd($test);

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);
        }else{

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($agents);
          //dd($members);
        }


         return view('districtagent.pages.schooladmin.school_agent_pagination_data',compact('agents','record_count'))->render();
       

       }

         
          
     }


 }

   public function schoolAgentshow($id)
    {
        $agents = DB::select('select * from admins where id=? ',[$id]);
  
        //  ['members'=>$members]
         $userpid = Auth::user()->province;
          $userdid = Auth::user()->district;

        $getdname = DB::select('select * from district where id=?',[$userdid]);
        $dname=$getdname[0]->placename;

        $provinces = DB::select('select * from province ');
         $districts = DB::select("select * from district where p_id=?",[$userpid]);
          $zones = DB::select("select * from zones where p_id=?",[$userpid]);
          $divisions = DB::select("select * from divisions where p_id=?",[$userpid]);
          $schools = DB::select("select * from schools where p_id=?",[$userpid]);

       
        




         

          //dd($zones);


        // $designations = DB::select("select * from designations");
        // $workplaces = DB::select("select * from workplaces");
        return view('districtagent.pages.schooladmin.school_agent_profile_admin',compact('agents','provinces','districts','zones','divisions','schools','dname'));
    }




           public function showeditprofile()
    {

       $userdid = Auth::user()->district;

        $getdname = DB::select('select * from district where id=?',[$userdid]);
        $dname=$getdname[0]->placename;
        return view('districtagent.pages.edit_admin',compact('dname'));
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
            $red = redirect('districtagent/profile')->with('success','Profile has been updated');



       }else {

         $red = redirect('districtagent/profile')->with('danger','Error update please try again');
       }

       return $red;
        } else {

          //geting data from  membership field data
       $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('provinceagents/profileimg'),$new_name);
      // $new_name="test.jpg";
          $admins = DB::update('update admins set name= ? ,username = ? , nic = ? , profile_img = ? , mobile = ? , address = ? , email = ?  , updated_at = ? where id = ? ',
        [$name,$username,$nic,$new_name,$mobile,$address,$email,$timestamp,$id]);

       if($admins) {

            $red = redirect('districtagent/profile')->with('success','Profile has been updated');



       }else {

         $red = redirect('districtagent/editprofile/')->with('danger','Error update please try again');
       }

       return $red;
        }
        

       

    }

      public function viewprofile()
    {

       $userdid = Auth::user()->district;

        $getdname = DB::select('select * from district where id=?',[$userdid]);
        $dname=$getdname[0]->placename;

        return view('districtagent.pages.view_admin',compact('dname'));

    }

       public function changepasswordform()
    {

       $userdid = Auth::user()->district;

        $getdname = DB::select('select * from district where id=?',[$userdid]);
        $dname=$getdname[0]->placename;

        return view('districtagent.pages.changepassword',compact('dname'));

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

         $red = redirect('districtagent/dashboard')->with('success','Password Changed successfully');
  

        }else{
            $red = redirect('districtagent/changepassword/')->with('danger','Error you entered worng old password ');

        }
       
    return $red;
       

    }

       
       
      


       

       
     

   public function getProvinceMembers(Request $request)
    {

       $userpid = Auth::user()->province;
       $userdid = Auth::user()->district;
        $members = DB::table("users")->where('inRecycle',0)->where('province',$userpid)->where('district',$userdid)->paginate(100);

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
      
      //  ['members'=>$members]

       // $provinces = DB::select("select * from province");
       
        $zones = DB::select("select * from zones where d_id=? and p_id=?",[$userdid,$userpid]);
        $divisions = DB::select("select * from divisions where d_id=? and p_id=? ",[$userdid,$userpid]);
        $schools = DB::select("select * from schools where d_id=? and p_id=?",[$userdid,$userpid]);

         $userdid = Auth::user()->district;

        $getdname = DB::select('select * from district where id=?',[$userdid]);
        $dname=$getdname[0]->placename;

         $record_count = count($members);

        return view('districtagent.pages.members.manage_members',compact('members','zones','divisions','schools','record_count','dname'));
    }

    public function memberfetch_data(Request $request){

      if($request->ajax())
       
      {
        $userpid = Auth::user()->province;
        $userdid = Auth::user()->district;
         
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
        $province = $userpid;
        $district =$userdid;
        $zone = $request->get('zone');
        $division = $request->get('division');
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
         
         $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)-where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
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
       
      


       

        return view('districtagent.pages.members.member_pagination_data',compact('members','record_count'))->render();
      }
    }


       public function membershow($id)
    {
        $members = DB::select('select * from users where id=? ',[$id]);

         $userpid = Auth::user()->province;
         $userdid = Auth::user()->district;
         $schools = DB::select('select * from schools where p_id=?',[$userpid]);
         $districts = DB::select('select * from district where p_id=? ',[$userpid]);
          $divisions = DB::select('select * from divisions where d_id=? ',[$userdid]);
          $zones = DB::select('select * from zones where d_id=? ',[$userdid]);

           $userdid = Auth::user()->district;

        $getdname = DB::select('select * from district where id=?',[$userdid]);
        $dname=$getdname[0]->placename;

          //dd($zones);


        // $designations = DB::select("select * from designations");
        // $workplaces = DB::select("select * from workplaces");
        return view('districtagent.pages.members.member_profile',compact('members','zones','divisions','schools','dname'));
    }

    
}
