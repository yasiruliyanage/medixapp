<?php

namespace App\Http\Controllers;
use App\Sms;
use SoapClient;
use Importer;
use File;
use Illuminate\Http\Request;
use App\Imports\MemberImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

//use Excel;
//use DB;

class MembershipController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin',['except' =>'test']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $members = DB::table("users")->where('inRecycle',0)->paginate(100);

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
      
      //  ['members'=>$members]

        $provinces = DB::select("select * from province");
        $districts = DB::select("select * from district");
        $zones = DB::select("select * from zones");
        $divisions = DB::select("select * from divisions");
        $schools = DB::select("select * from schools");
        $subjects = DB::select("select * from subjects");

         $record_count = count($members);

        return view('dashboard.pages.manage_members',compact('members','provinces','districts','zones','divisions','schools','subjects','record_count'));
    }

    public function fetch_data(Request $request){

      if($request->ajax())

      {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
        $province = $request->get('province');
        $district =$request->get('district');
        $zone = $request->get('zone');
        $division = $request->get('division');
        $school = $request->get('school');
         $subject = $request->get('sub_id');
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
      
        if((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))&&(empty($subject))){
          
         // $test = 'i am in first block';
         // dd($test);

          $members = DB::table('users')->where('inRecycle',0)->orderBy($sort_by,$sort_type)->paginate(100);

          $record_count = count($members);

        }elseif((!empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))&&(empty($subject))){
          
         


          //$test = 'i am in second block';
          //dd($province,$district,$zone,$division,$school,$test);
         $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);
        
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))&&(empty($subject))){

          //$test = 'i am in second new block';
          //dd($test);
       
         $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))&&(empty($subject))){

          //$test = 'i am in third block';
          //dd($test);
          
        $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($members);
        
        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))&&(empty($subject))){

          //$test = 'i am in four block';
          //dd($test);
         
         $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))&&(empty($subject))){

          //$test = 'i am in four block';
          //dd($test);
         
         $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))&&(!empty($subject))){

        // $test = 'i am in  five block';
          //dd($test);
         
         $members = DB::table('users')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->where('sub_code',$subject)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((!empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))&&(!empty($subject))){

          //$test = 'i am in seventh block';
          //dd($test);

          $members = DB::table('users')->where('inRecycle',0)->where('zone',$zone)->where('division',$division)->where('school',$school)->where('sub_code',$subject)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))&&(!empty($subject))){

          //$test = 'i am in eight block';
          //dd($test);

         $members = DB::table('users')->where('inRecycle',0)->where('division',$division)->where('school',$school)->where('sub_code',$subject)->orderBy($sort_by,$sort_type)->paginate(100);
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
       
        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){
          
         // $test = 'i am in twelth block';
         // dd($test);
          $members = DB::table('users')->where('inRecycle',0)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);

        }
        elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){
          
         // $test = 'i am in thirth block';
         // dd($test);
          $members = DB::table('users')->where('inRecycle',0)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in fourteenth block';
         // dd($test);
         
        $members = DB::table('users')->where('inRecycle',0)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($members);
        

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){
          
         // $test = 'i am in fourteenth block';
        //  dd($test);
          $members = DB::table('users')->where('inRecycle',0)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }elseif((empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         // $test = 'i am fifteenth  block';
         // dd($test);
           $members = DB::table('users')->where('inRecycle',0)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(100);
           $record_count = count($members);

          // dd($members);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){


         // $test = 'i am in sixeenth block';
         // dd($test);
          $members = DB::table('users')->where('inRecycle',0)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);

        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in seventeeth block';
          //dd($test);
        
          $members = DB::table('users')->where('inRecycle',0)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in eighteenth block';
          //dd($test);
        
          $members = DB::table('users')->where('inRecycle',0)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty(!$division))&&(empty($school))){

          //$test = 'i am in nineteenth block';
          //dd($test);

          $members = DB::table('users')->where('inRecycle',0)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))&&(!empty($subject))){

         //$test = 'i am in nineteenth block';

      //dd($test);



          $members = DB::table('users')->where('inRecycle',0)->where('sub_code',$subject)->orderBy($sort_by,$sort_type)->paginate(100);

         // dd($members);
          $record_count = count($members);
        }else{

          $members = DB::table('users')->where('inRecycle',0)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
          //dd($members);
        }

       

       }
       
      


       

        return view('dashboard.pages.member_pagination_data',compact('members','record_count'))->render();
      }
    }


      public function fetch_trash_data(Request $request){

      if($request->ajax())

      {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
        $province = $request->get('province');
        $district =$request->get('district');
        $zone = $request->get('zone');
        $division = $request->get('division');
        $school = $request->get('school');
        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);

        
       // dd($province,$district,$zone, $division,$school);

       if(!empty($query)){
       
         $members = DB::table('users')
         ->where('inRecycle',1)
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

          $members = DB::table('users')->where('inRecycle',1)->orderBy($sort_by,$sort_type)->paginate(100);

          $record_count = count($members);

        }elseif((!empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         


          //$test = 'i am in second block';
          //dd($province,$district,$zone,$division,$school,$test);
         $members = DB::table('users')->where('inRecycle',1)->where('province',$province)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);
        
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in second new block';
          //dd($test);
       
         $members = DB::table('users')->where('inRecycle',1)->where('province',$province)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in third block';
          //dd($test);
          
        $members = DB::table('users')->where('inRecycle',1)->where('province',$province)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($members);
        
        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in four block';
          //dd($test);
         
         $members = DB::table('users')->where('inRecycle',1)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

        // $test = 'i am in  five block';
          //dd($test);
         
         $members = DB::table('users')->where('inRecycle',1)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)-where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in sixth block';
         // dd($test);
        
         $members = DB::table('users')->where('inRecycle',1)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);
        }elseif((!empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in seventh block';
          //dd($test);

          $members = DB::table('users')->where('inRecycle',1)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in eight block';
          //dd($test);

         $members = DB::table('users')->where('inRecycle',1)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){

          //$test = 'i am in nineth block';
          //dd($test);

        $members = DB::table('users')->where('inRecycle',1)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(!empty($school))){
          

          //$test = 'i am in tenth block';
          //dd($division,$school,$test);

          $members = DB::table('users')->where('inRecycle',1)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in eleventh block test';
          //dd($test);


        $members = DB::table('users')->where('inRecycle',1)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($members);
       
        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){
          
         // $test = 'i am in twelth block';
         // dd($test);
          $members = DB::table('users')->where('inRecycle',1)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);

        }
        elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){
          
         // $test = 'i am in thirth block';
         // dd($test);
          $members = DB::table('users')->where('inRecycle',1)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in fourteenth block';
         // dd($test);
         
        $members = DB::table('users')->where('inRecycle',1)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($members);
        

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){
          
         // $test = 'i am in fourteenth block';
        //  dd($test);
          $members = DB::table('users')->where('inRecycle',1)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }elseif((empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         // $test = 'i am fifteenth  block';
         // dd($test);
           $members = DB::table('users')->where('inRecycle',1)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(100);
           $record_count = count($members);

          // dd($members);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){


         // $test = 'i am in sixeenth block';
         // dd($test);
          $members = DB::table('users')->where('inRecycle',1)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);

        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in seventeeth block';
          //dd($test);
        
          $members = DB::table('users')->where('inRecycle',1)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in eighteenth block';
          //dd($test);
        
          $members = DB::table('users')->where('inRecycle',1)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty(!$division))&&(empty($school))){

          //$test = 'i am in nineteenth block';
          //dd($test);

          $members = DB::table('users')->where('inRecycle',1)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
        }else{

          $members = DB::table('users')->where('inRecycle',1)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
          //dd($members);
        }

       }
       
      


       

        return view('dashboard.pages.member_trash_pagination_data',compact('members','record_count'))->render();
      }
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
        $provinces = DB::select("select * from province");
        $districts = DB::select("select * from district");
        $zones = DB::select("select * from zones");
        $divisions = DB::select("select * from divisions");
        $schools = DB::select("select * from schools");
        $subjects = DB::select("select * from subjects");
		$newunionid = abs( crc32( uniqid() ) );
        return view('dashboard.pages.add_member',compact('provinces','districts','zones','divisions','schools','subjects','newunionid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		  
        //validating membership form fields
           $this-> validate($request,[
            'name' => 'required',
            'lname' => 'required',
            'reg_id' => 'nullable|unique:users,reg_id',
            'username' => 'required',
             //'t_status' => 'required',
             'p_id'=>'required',
             'd_id'=>'required',
             'z_id'=>'required',
             'div_id'=>'required',
             's_id'=>'required',
              'sub_id'=>'required',
             //'emp_id'=>'required',
            'email' => 'nullable|unique:users,email',
           //'nic'=> 'unique:users,nic',
            'mobile'=> 'required|unique:users,mobile',
            'address'=> 'required',
            'dob'=> 'required',
           //'ps_number'=> 'nullable',
            'profile_img' => 'image|max:2048',
            'password' => 'required',
           //  'homephone' => 'required',
             'gender' => 'required',
          //  'designation' => 'required',
          // 'work_place' => 'required',


        ]);

     //  dd($request);
       //geting data from  membership field data
      // dd($request);

       $name = $request->get('name');
       $lname = $request->get('lname');
       $reg_id = $request->get('reg_id');
       $ps_number = $request->get('ps_number');
       $username = $request->get('username');
       $password = Hash::make( $request->get('password'));
       $passwordorginal = $request->get('password');
       $dob = $request->get('dob');
       $nic = $request->get('nic');
      // $profile_img = $request->get('profile_img');
       $homephone = $request->get('homephone');
       $mobile = $request->get('mobile');
       $address = $request->get('address');
       $gender = $request->get('gender');
       $email = $request->get('email');
       //$t_status = $request->get('t_status');
       $p_id = $request->get('p_id');
       $d_id = $request->get('d_id');
       $z_id = $request->get('z_id');
       $div_id = $request->get('div_id');
       $s_id = $request->get('s_id');
       $sub_id = $request->get('sub_id');
      // $t_collage = $request->get('t_collage');
      // $t_year = $request->get('t_year');
     //  $t_dep = $request->get('t_dep');
       $employee_id = $request->get('emp_id');
       $status = 1;
       $timestamp = now();
	
       if(empty($request->get('img1'))){ 
		     $checkrecordexxists = DB::select('select * from users where nic=? ',[$nic]);

        $rowcount= count($checkrecordexxists);

       if($rowcount==0){ 

         $verificationcode = mt_rand(100000, 999999);
          $hashedotpcode = Hash::make($verificationcode);
         
           $member = DB::insert('insert into users(name,lname,status,username,email,nic,mobile,address, reg_id,ps_number,emp_id,password,homephone,gender,province,district,zone,division,school,dob,created_at,otp_code,sub_code) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$name,$lname,$status,$username,$email,$nic,$mobile,$address,$reg_id,$ps_number,$employee_id,$password,$homephone,$gender,$p_id,$d_id,$z_id,$div_id,$s_id,$dob,$timestamp,$hashedotpcode,$sub_id]);
       $message=$employee_id.'
        You are now added to 
        CTSU Online UMS SYSTEM 
        Username:'.$username.'
        Password:'.$passwordorginal.'
        Verification Code:'.$verificationcode.'
        Please Log in to
        http://www.ctsu.lk/login'; 
       //counting new teacher count in school

       $countinsc=DB::select('select * from users where school=?',[$s_id]);

       $countinsct=count($countinsc);

       DB::update('update schools set t_count=? where id=?',[$countinsct,$s_id]);

      

        //counting new teacher count in division
       $countindiv=DB::select('select * from users where division=?',[$div_id]);
        //counting new teacher count in zone
       
        $countindivt=count($countindiv);

         DB::update('update divisions set t_count=? where id=?',[$countindivt,$div_id]);

        //count new teacher count in zone

       $countinzone=DB::select('select * from users where zone=?',[$z_id]);

        $countinzonet=count($countinzone);
       
        DB::update('update  zones set t_count=? where id=?',[$countinzonet,$z_id]);


        //counting new teacher count in district
       $countindistrict=DB::select('select * from users where district=?',[$d_id]);


        $countindistrictt=count($countindistrict);

         DB::update('update  district set t_count=? where id=?',[$countindistrictt,$d_id]);


        //counting new teacher count in province
        $countinprovince=DB::select('select * from users where province=?',[$p_id]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set t_count=? where id=?',[$countinprovincet,$p_id]);


          $subcountallteachers= DB::table("users")->where('sub_code',$sub_id)->count();
         
        
         
         //updating teachers count for subject

         DB::update('update subjects set t_count=? where id=?',[$subcountallteachers,$sub_id]);

        if($member){
              $username='esmsusr_12qs';
            $password='agn3fr';
           
            $sms= new Sms();

            $client = $sms->getClient();


            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';

 

            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 
            $red = redirect('admin/members/add')->with('success','Member succefully added');

        }else {
            $red = redirect('members/add')->with('danger','Input data failed ');
        }
	   }else {
		    $red = redirect('members/add')->with('danger','nic already exists ');
	   }
		 
      }else{
		   
		   $data = Input::get('img1'); 
		
		      $data = base64_decode(explode(",", explode(";", $data)[1])[1]);

         
               //  dd($data);
                $new_name         =  rand() . '.jpg';

                //$destinationPath  = './members/profileimg/'; 
		        $destinationPath  = public_path('members/profileimg');\
					file_put_contents('./members/profileimg/'.$new_name , $data);
         
          $checkrecordexxists = DB::select('select * from users where nic=? ',[$nic]);

        $rowcount= count($checkrecordexxists);

       if($rowcount==0){ 

          $verificationcode = mt_rand(100000, 999999);
           $hashedotpcode = Hash::make($verificationcode);
               $member = DB::insert('insert into users(name,lname,status,username,email,nic,mobile,address, reg_id,ps_number,emp_id,profile_img,password,homephone,gender,province,district,zone,division,school,dob,created_at,otp_code,sub_code) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$name,$lname,$status,$username,$email,$nic,$mobile,$address,$reg_id,$ps_number,$employee_id,$new_name,$password,$homephone,$gender,$p_id,$d_id,$z_id,$div_id,$s_id,$dob,$timestamp,$hashedotpcode,$sub_id]);
      
       $message=$employee_id.'
        You are now added to 
        CTSU Online UMS SYSTEM 
        Username:'.$username.'
        Password:'.$passwordorginal.'
        Verification Code:'.$verificationcode.'
        Please Log in to
        http://www.ctsu.lk/login'; 


       //counting new teacher count in school

       $countinsc=DB::select('select * from users where school=?',[$s_id]);

       $countinsct=count($countinsc);

       DB::update('update schools set t_count=? where id=?',[$countinsct,$s_id]);

      

        //counting new teacher count in division
       $countindiv=DB::select('select * from users where division=?',[$div_id]);
        //counting new teacher count in zone
       
        $countindivt=count($countindiv);

         DB::update('update divisions set t_count=? where id=?',[$countindivt,$div_id]);

        //count new teacher count in zone

       $countinzone=DB::select('select * from users where zone=?',[$z_id]);

        $countinzonet=count($countinzone);
       
        DB::update('update  zones set t_count=? where id=?',[$countinzonet,$z_id]);


        //counting new teacher count in district
       $countindistrict=DB::select('select * from users where district=?',[$d_id]);


        $countindistrictt=count($countindistrict);

         DB::update('update  district set t_count=? where id=?',[$countindistrictt,$d_id]);
         

        //counting new teacher count in province
        $countinprovince=DB::select('select * from users where province=?',[$p_id]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set t_count=? where id=?',[$countinprovincet,$p_id]);

       //counting and updating subject table with new counts of teachers
        
         //counting new teacher count in district

        /* $subcountinprovince = DB::table("users")->where('sub_code',$sub_id)->where('province',$p_id)->count();
         $subcountindistrict= DB::table("users")->where('sub_code',$sub_id)->where('district',$d_id)->count();
         $subcountinzone= DB::table("users")->where('sub_code',$sub_id)->where('zone',$z_id)->count();
         $subcountindivision= DB::table("users")->where('sub_code',$sub_id)->where('division',$div_id)->count();
         $subcountinschool= DB::table("users")->where('sub_code',$sub_id)->where('school',$s_id)->count();*/
          $subcountallteachers= DB::table("users")->where('sub_code',$sub_id)->count();
         
        
         
         //updating teachers count for subject

         DB::update('update subjects set t_count=? where id=?',[$subcountallteachers,$sub_id]);



        if($member){
              $username='esmsusr_12qs';
            $password='agn3fr';
           
            $sms= new Sms();

            $client = $sms->getClient();


            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';

 

            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 
            $red = redirect('admin/members/add')->with('success','Member succefully added');

        }else {

            $red = redirect('members/add')->with('danger','Input data failed ');

        }
	   }else{

		    $red = redirect('members/add')->with('danger','nic already exists ');


	   }
      }

        return $red;
 

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = DB::select('select * from users where id=? ',[$id]);
         $schools = DB::select('select * from schools');

         $districts = DB::select('select * from district ');

         $provinces = DB::select('select * from province ');

          $divisions = DB::select('select * from divisions ');
          $zones = DB::select('select * from zones ');

          //dd($zones);


        // $designations = DB::select("select * from designations");
        // $workplaces = DB::select("select * from workplaces");
        return view('dashboard.pages.member_profile',compact('members','provinces','districts','zones','divisions','schools'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = DB::select('select * from users where id=?',[$id]);
        $provinces = DB::select("select * from province");
        $districts = DB::select("select * from district");
        $zones = DB::select("select * from zones");
        $divisions = DB::select("select * from divisions");
        $schools = DB::select("select * from schools");
        $subjects = DB::select("select * from subjects");
        //['members'=> $members],['workplaces'=>$workplaces],['designations'=>$designations]

        return view('dashboard.pages.edit_member',compact('members','provinces','districts','zones','divisions','schools','subjects'));
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
        //validating membership form fields
            $this-> validate($request,[
            'name' => 'required',
            'lname' => 'required',
           // 'reg_id' => 'nullable|unique:users,reg_id',
            'username' => 'required',
            // 't_status' => 'required',
             'p_id'=>'required',
             'd_id'=>'required',
             'z_id'=>'required',
             'div_id'=>'required',
             's_id'=>'required',
             'sub_id'=>'required',
           // 'email' => 'required',
          // 'nic'=> 'numeric|min:10|max:50',
            'mobile'=> 'required',
            'address'=> 'required',
            'dob'=> 'required',
            'emp_id'=>'required',
          // 'ps_number'=> 'nullable|unique:users,ps_number',
            'profile_img' => 'image|max:2048',
            //'password' => 'required',
           //  'homephone' => 'required',
             'gender' => 'required',
           // 'designation' => 'required',
         //'work_place' => 'required',
        ]);


            
       
      

       $name = $request->get('name');
        $lname = $request->get('lname');
       $reg_id = $request->get('reg_id');
       $ps_number = $request->get('ps_number');
       $username = $request->get('username');
	  $passwordorginal=$request->get('password');
	   if(!empty($request->get('password'))){
       $password = Hash::make( $request->get('password'));
	   }else{
		   
	    $password = "";
	   }
       $dob = $request->get('dob');
       $nic = $request->get('nic');
       $profile_img = $request->get('profile_img');
       $homephone = $request->get('homephone');
       $mobile = $request->get('mobile');
       $address = $request->get('address');
      
       $gender = $request->get('gender');
       $email = $request->get('email');
       $employee_id = $request->get('emp_id');
     
       $status = $request->get('status');;
      // $t_status = $request->get('t_status');
       $p_id = $request->get('p_id');
       $d_id = $request->get('d_id');
       $z_id = $request->get('z_id');
       $div_id = $request->get('div_id');
       $s_id = $request->get('s_id');
       $sub_id = $request->get('sub_id');
      // $t_collage = $request->get('t_collage');
      // $t_year = $request->get('t_year');
      // $t_dep = $request->get('t_dep');
       $timestamp = now();
		
		/* if these records still exists these fields set to null becuse that fields are uinque*/
		   $checkrecordexxistsem = DB::select('select * from users where  email=?',[$email]);

        $rowcountunionem= count($checkrecordexxistsem);

        if($rowcountunionem==0){
		  
		 $email = $request->get('email');
			
		}else{
		 
		  $result = DB::table('users')->select('email')->where('id', $id)->first();
      
         $email= $result->email;
      
		}
		
		   

    
	   $checkrecordexxists = DB::select('select * from users where  nic=?',[$nic]);

        $rowcountnic= count($checkrecordexxists);

        if($rowcountnic==0){
		  
		 $nic = $request->get('nic');
			
		}else{
		 
		  $result = DB::table('users')->select('nic')->where('id', $id)->first();
        // $result2 = DB::table('users')->select('mobile')->where('union_id', $unionid)->first();
         $nic= $result->nic;
       
		
		
			
		}
		
		 $checkrecordexxistsmobile = DB::select('select * from users where  mobile=?',[$mobile]);
		 $rowcountmobile= count($checkrecordexxistsmobile);

        if($rowcountmobile==0){
			
			  $mobile = $request->get('mobile');

          $mobile = $request->get('mobile');

          $verificationcode = mt_rand(100000, 999999);
           $hashedotpcode = Hash::make($verificationcode);

          $sendverifymessage=DB::update('update users set otp_code=? , isverified=? where id=?',[$hashedotpcode,0,$id]);
         // dd($sendverifymessage);
            $message=$employee_id.'
        Your Mobile number
        has been updated 
        Please Verify it
        Verification Code:'.$verificationcode.'
        Please Log in to
        http://www.ctsu.lk/login'; 


           if($sendverifymessage){

            $username='esmsusr_12qs';
            $password='agn3fr';
           
            $sms= new Sms();

            $client = $sms->getClient();


            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';


            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 

          }
		  
			
		}else{
		  
		 $result = DB::table('users')->select('mobile')->where('id', $id)->first();
        // $result2 = DB::table('users')->select('mobile')->where('union_id', $unionid)->first();
         $mobile= $result->mobile;
		
		
			
		}


		
		 $checkrecordexxistsempid = DB::select('select * from users where  emp_id=?',[$employee_id]);
		 $rowcountempid= count($checkrecordexxistsempid);

        if($rowcountempid==0){
		   $employee_id = $request->get('emp_id');
			
		}else{
	    
		$result = DB::table('users')->select('emp_id')->where('id', $id)->first();
        // $result2 = DB::table('users')->select('mobile')->where('union_id', $unionid)->first();
         $employee_id= $result->emp_id;
		  
		
		
		
			
		}

      //getting old record info

      $oldreacordinfo = DB::select('select * from  users where id=?',[$id]);

       $oldsid = $oldreacordinfo[0]->school;
       $olddivid = $oldreacordinfo[0]->division;
       $oldzid = $oldreacordinfo[0]->zone;
       $olddid = $oldreacordinfo[0]->district;
       $oldpid = $oldreacordinfo[0]->province;
       $oldsubid = $oldreacordinfo[0]->sub_code;







      //counting old teacher count in school and update it



       $oldcountinsc=DB::select('select * from users where school=?',[$oldsid]);

       $oldcountinsct=count($oldcountinsc);

       $newoldcountsct=$oldcountinsct-1;


      
       DB::update('update schools set t_count=? where id=?',[$newoldcountsct,$oldsid]);


      

        //counting new teacher count in division
       $oldcountindiv=DB::select('select * from users where division=?',[$olddivid]);
        //counting new teacher count in zone
       
        $oldcountindivt=count($oldcountindiv);

          $newoldcountindivt=$oldcountindivt-1;

         DB::update('update divisions set t_count=? where id=?',[$newoldcountindivt,$olddivid]);

        //count new teacher count in zone

       $oldcountinzone=DB::select('select * from users where zone=?',[$oldzid]);

        $oldcountinzonet=count($oldcountinzone);

        $newoldcountinzonet=$oldcountinzonet-1;
       
        DB::update('update  zones set t_count=? where id=?',[$newoldcountinzonet,$oldzid]);




        //counting new teacher count in district
       $oldcountindistrict=DB::select('select * from users where district=?',[$olddid]);


        $oldcountindistrictt=count($oldcountindistrict);

        $newoldcountindistrictt=$oldcountindistrictt-1;

         DB::update('update  district set t_count=? where id=?',[$newoldcountindistrictt,$olddid]);
         

        //counting new teacher count in province
        $oldcountinprovince=DB::select('select * from users where province=?',[$oldpid]);

         $oldcountinprovincet=count($oldcountinprovince);

         $newoldcountinprovincet=$oldcountinprovincet-1;

        DB::update('update  province set t_count=? where id=?',[$newoldcountinprovincet,$oldpid]);


         //update old teachers  count in subject

        $oldsubcountallteachers= DB::table("users")->where('sub_code',$oldsubid)->count();

        //update old teachers count in subject

        $newoldsubcountallteachers = $oldsubcountallteachers-1;

        DB::update('update subjects set t_count=? where id=?',[$newoldsubcountallteachers,$oldsubid]);




         if(empty($request->file('img1'))){
			 
			 if(empty($request->get('password'))){
			    $members = DB::update('update users set name= ? , lname=? , reg_id =? , username = ? , dob = ? , nic = ? , homephone = ? , mobile = ? , address = ? , emp_id = ? , ps_number=?, province=?,district=?,zone=?,division=?,school=?, gender = ? , email = ? , status = ?, sub_code = ? , updated_at = ? where id = ? ',
        [$name,$lname,$reg_id,$username,$dob,$nic,$homephone,$mobile,$address,$employee_id,$ps_number,$p_id,$d_id,$z_id,$div_id,$s_id,$gender,$email,$status,$sub_id,$timestamp,$id]);



       if($members) {

          //counting new teacher count in school

       $countinsc=DB::select('select * from users where school=?',[$s_id]);

       $countinsct=count($countinsc);

       DB::update('update schools set t_count=? where id=?',[$countinsct,$s_id]);

      

        //counting new teacher count in division
       $countindiv=DB::select('select * from users where division=?',[$div_id]);
        //counting new teacher count in zone
       
        $countindivt=count($countindiv);

         DB::update('update divisions set t_count=? where id=?',[$countindivt,$div_id]);

        //count new teacher count in zone

       $countinzone=DB::select('select * from users where zone=?',[$z_id]);

        $countinzonet=count($countinzone);
       
        DB::update('update  zones set t_count=? where id=?',[$countinzonet,$z_id]);


        //counting new teacher count in district
       $countindistrict=DB::select('select * from users where district=?',[$d_id]);


        $countindistrictt=count($countindistrict);

         DB::update('update  district set t_count=? where id=?',[$countindistrictt,$d_id]);
         

        //counting new teacher count in province
        $countinprovince=DB::select('select * from users where province=?',[$p_id]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set t_count=? where id=?',[$countinprovincet,$p_id]);

            $red = redirect('admin/members')->with('success','Data has been updated');


       //update new teachers count in subject
        $subcountallteachers= DB::table("users")->where('sub_code',$sub_id)->count();
    
         //updating teachers count for subject

         DB::update('update subjects set t_count=? where id=?',[$subcountallteachers,$sub_id]);
          
  
       }else {

         $red = redirect('members/edit/',$id)->with('danger','Error update please try again');
		   
       }
		 return $red;
			 }else{
				 
				 
				   $members = DB::update('update users set name= ? , lname=? , reg_id =? , username = ?,password=? , dob = ? , nic = ? , homephone = ? , mobile = ? , address = ? , emp_id = ? , ps_number=?,province=?,district=?,zone=?,division=?,school=?, gender = ? , email = ? , status = ?,sub_code=?, updated_at = ? where id = ? ',
        [$name,$lname,$reg_id,$username,$password,$dob,$nic,$homephone,$mobile,$address,$employee_id,$ps_number,$p_id,$d_id,$z_id,$div_id,$s_id,$gender,$email,$status,$sub_id,$timestamp,$id]);


			   
				  $message=$employee_id.'Your password changed succesfully CTSU Online Database. Username: '.$username.' ,      Password:'.$passwordorginal.'Please Log in to http://www.ctsu.lk/login';

       if($members) {

      //counting new teacher count in school

       $countinsc=DB::select('select * from users where school=?',[$s_id]);

       $countinsct=count($countinsc);

       DB::update('update schools set t_count=? where id=?',[$countinsct,$s_id]);

      

        //counting new teacher count in division
       $countindiv=DB::select('select * from users where division=?',[$div_id]);
        //counting new teacher count in zone
       
        $countindivt=count($countindiv);

         DB::update('update divisions set t_count=? where id=?',[$countindivt,$div_id]);

        //count new teacher count in zone

       $countinzone=DB::select('select * from users where zone=?',[$z_id]);

        $countinzonet=count($countinzone);
       
        DB::update('update  zones set t_count=? where id=?',[$countinzonet,$z_id]);


        //counting new teacher count in district
       $countindistrict=DB::select('select * from users where district=?',[$d_id]);


        $countindistrictt=count($countindistrict);

         DB::update('update  district set t_count=? where id=?',[$countindistrictt,$d_id]);
         

        //counting new teacher count in province
        $countinprovince=DB::select('select * from users where province=?',[$p_id]);

         $countinprovincet=count($countinprovince);




        DB::update('update  province set t_count=? where id=?',[$countinprovincet,$p_id]);


         //update new teachers count in subject
        $subcountallteachers= DB::table("users")->where('sub_code',$sub_id)->count();
    
         //updating teachers count for subject

         DB::update('update subjects set t_count=? where id=?',[$subcountallteachers,$sub_id]);



		         $username='esmsusr_12qs';
            $password='agn3fr';
           
            $sms= new Sms();

            $client = $sms->getClient();


            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';

 

            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 
            $red = redirect('admin/members')->with('success','Data has been updated');

           

       }else {

         $red = redirect('members/edit/',$id)->with('danger','Error update please try again');
		   
		   
       }
				return $red; 
				 
			 
			 
			  
      

       
        
			 
			 
			 }
			 
		 }else {
				 
			 if(empty($request->get('password'))){
				 
				 
      
				 
          $data = Input::get('img1'); 
		
		      $data = base64_decode(explode(",", explode(";", $data)[1])[1]);

         

                $new_name         =  rand() . '.jpg';
				 
				 

                //$destinationPath  = './members/profileimg/'; 
		        $destinationPath  = public_path('members/profileimg');
				 
				 
			 file_put_contents('./members/profileimg/'.$new_name , $data);
				 
    dd($data);
      
      //deleting old file when updating new one
       $getoldfilename = DB::table('users')->select('profile_img')->where('id', $id)->first();
      
         $oldfile= $getoldfilename->profile_img;

         
         $destinationPath = public_path('members/profileimg/');
				 

				 
         File::delete($destinationPath.$oldfile);
       $members = DB::update('update users set name= ? , lname=? , reg_id =? , username = ? , dob = ? , nic = ? ,profile_img=?, homephone = ? , mobile = ? , address = ? , emp_id = ? , ps_number=?,province=?,district=?,zone=?,division=?,school=?, gender = ? , email = ? , status = ? , sub_code=? , updated_at = ? where id = ? ',
        [$name,$lname,$reg_id,$username,$dob,$nic,$new_name,$homephone,$mobile,$address,$employee_id,$ps_number,$p_id,$d_id,$z_id,$div_id,$s_id,$gender,$email,$status,$sub_id,$timestamp,$id]);
        
       if($members) {

          //counting new teacher count in school

       $countinsc=DB::select('select * from users where school=?',[$s_id]);

       $countinsct=count($countinsc);

       DB::update('update schools set t_count=? where id=?',[$countinsct,$s_id]);

      

        //counting new teacher count in division
       $countindiv=DB::select('select * from users where division=?',[$div_id]);
        //counting new teacher count in zone
       
        $countindivt=count($countindiv);

         DB::update('update divisions set t_count=? where id=?',[$countindivt,$div_id]);

        //count new teacher count in zone

       $countinzone=DB::select('select * from users where zone=?',[$z_id]);

        $countinzonet=count($countinzone);
       
        DB::update('update  zones set t_count=? where id=?',[$countinzonet,$z_id]);


        //counting new teacher count in district
       $countindistrict=DB::select('select * from users where district=?',[$d_id]);


        $countindistrictt=count($countindistrict);

         DB::update('update  district set t_count=? where id=?',[$countindistrictt,$d_id]);
         

        //counting new teacher count in province
        $countinprovince=DB::select('select * from users where province=?',[$p_id]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set t_count=? where id=?',[$countinprovincet,$p_id]);
            //$red = redirect()->route('member.edit', array('id' => $id))->with('success','Data has been updated');
           $red = redirect('admin/members/')->with('success','Data has been updated');


            //update new teachers count in subject
        $subcountallteachers= DB::table("users")->where('sub_code',$sub_id)->count();
    
         //updating teachers count for subject

         DB::update('update subjects set t_count=? where id=?',[$subcountallteachers,$sub_id]);



       }else {

         $red = redirect('members/edit/',$id)->with('danger','Error update please try again');
       }
			 }else{
				 

				   $data = Input::get('img1'); 
		
		      $data = base64_decode(explode(",", explode(";", $data)[1])[1]);

         

                $new_name         =  rand() . '.jpg';

                //$destinationPath  = './members/profileimg/'; 
		        $destinationPath  = public_path('members/profileimg');
				 file_put_contents('./members/profileimg/'.$new_name , $data);
				 
dd($data);

       //deleating old image file wwhen updating new one
       $getoldfilename = DB::table('users')->select('profile_img')->where('id', $id)->first();
      
         $oldfile= $getoldfilename->profile_img;

         
         $destinationPath = public_path('members/profileimg/');
         File::delete($destinationPath.$oldfile);
      // $new_name="test.jpg";
        $members = DB::update('update users set name= ? , lname=? , reg_id =? , username = ?,password=? , dob = ? , nic = ?,profile_img=? , homephone = ? , mobile = ? , address = ? , emp_id = ? , ps_number=?,province=?,district=?,zone=?,division=?,school=?, gender = ? , email = ? , status = ?,sub_code = ? , updated_at = ? where id = ? ',
        [$name,$lname,$reg_id,$username,$password,$dob,$nic,$new_name,$homephone,$mobile,$address,$employee_id,$ps_number,$p_id,$d_id,$z_id,$div_id,$s_id,$gender,$email,$status,$sub_id,$timestamp,$id]);
        
				  $message=$employee_id.'Your password changed succesfully CTSU Online Database  Username: '.$username.'    Password:'.$passwordorginal.'Please Log in to http://www.ctsu.lk/login';

       if($members) {

          //counting new teacher count in school

       $countinsc=DB::select('select * from users where school=?',[$s_id]);

       $countinsct=count($countinsc);

       DB::update('update schools set t_count=? where id=?',[$countinsct,$s_id]);

      

        //counting new teacher count in division
       $countindiv=DB::select('select * from users where division=?',[$div_id]);
        //counting new teacher count in zone
       
        $countindivt=count($countindiv);

         DB::update('update divisions set t_count=? where id=?',[$countindivt,$div_id]);

        //count new teacher count in zone

       $countinzone=DB::select('select * from users where zone=?',[$z_id]);

        $countinzonet=count($countinzone);
       
        DB::update('update  zones set t_count=? where id=?',[$countinzonet,$z_id]);


        //counting new teacher count in district
       $countindistrict=DB::select('select * from users where district=?',[$d_id]);


        $countindistrictt=count($countindistrict);

         DB::update('update  district set t_count=? where id=?',[$countindistrictt,$d_id]);
         

        //counting new teacher count in province
        $countinprovince=DB::select('select * from users where province=?',[$p_id]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set t_count=? where id=?',[$countinprovincet,$p_id]);

         //update new teachers count in subject
        $subcountallteachers= DB::table("users")->where('sub_code',$sub_id)->count();
    
         //updating teachers count for subject

         DB::update('update subjects set t_count=? where id=?',[$subcountallteachers,$sub_id]);

		     $username='esmsusr_12qs';
            $password='agn3fr';
           
            $sms= new Sms();

            $client = $sms->getClient();


            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';

 

            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 
            $red = redirect('admin/members')->with('success','Data has been updated');

             

       }else {

         $red = redirect('members/edit/',$id)->with('danger','Error update please try again');
       }
				 
				 
				 
			 }

          return $red;
        }


       



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
     {
         $getoldfilename = DB::table('users')->select('profile_img')->where('id', $id)->first();
      
         $oldfile= $getoldfilename->profile_img;

         
         $destinationPath = public_path('members/profileimg/');
         File::delete($destinationPath.$oldfile);

         //getting old record info

      $oldreacordinfo = DB::select('select * from  users where id=?',[$id]);

      $oldsid = $oldreacordinfo[0]->school;
       $olddivid = $oldreacordinfo[0]->division;
       $oldzid = $oldreacordinfo[0]->zone;
        $olddid = $oldreacordinfo[0]->district;
        $oldpid = $oldreacordinfo[0]->province;


      //counting old teacher count in school and update it



       $oldcountinsc=DB::select('select * from users where school=?',[$oldsid]);

       $oldcountinsct=count($oldcountinsc);

       $newoldcountsct=$oldcountinsct-1;



       DB::update('update schools set t_count=? where id=?',[$newoldcountsct,$oldsid]);

      

        //counting new teacher count in division
       $oldcountindiv=DB::select('select * from users where division=?',[$olddivid]);
        //counting new teacher count in zone
       
        $oldcountindivt=count($oldcountindiv);

          $newoldcountindivt=$oldcountindivt-1;

         DB::update('update divisions set t_count=? where id=?',[$newoldcountindivt,$olddivid]);

        //count new teacher count in zone

       $oldcountinzone=DB::select('select * from users where zone=?',[$oldzid]);

        $oldcountinzonet=count($oldcountinzone);

        $newoldcountinzonet=$oldcountinzonet-1;
       
        DB::update('update  zones set t_count=? where id=?',[$newoldcountinzonet,$oldzid]);


        //counting new teacher count in district
       $oldcountindistrict=DB::select('select * from users where district=?',[$olddid]);


        $oldcountindistrictt=count($oldcountindistrict);

        $newoldcountindistrictt=$oldcountindistrictt-1;

         DB::update('update  district set t_count=? where id=?',[$newoldcountindistrictt,$olddid]);
         

        //counting new teacher count in province
        $oldcountinprovince=DB::select('select * from users where province=?',[$oldpid]);

         $oldcountinprovincet=count($oldcountinprovince);

         $newoldcountinprovincet=$oldcountinprovincet-1;

        DB::update('update  province set t_count=? where id=?',[$newoldcountinprovincet,$oldpid]);
        $members = DB::delete('delete from users where id =?',[$id]);
        $red = redirect('admin/members');
        return $red;
    }
   
      /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */

    public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

         $ids = $request->get('ids');
         $oldfiles=DB::select('select *  from users where id in ('.implode(",",$ids).')');

        foreach ($oldfiles as  $oldfile) {
          
          $oldfilename= $oldfile->profile_img;

         
         $destinationPath = public_path('members/profileimg');
         File::delete($destinationPath.$oldfilename);
         
          $oldsid = $oldfile->school;
       $olddivid = $oldfile->division;
       $oldzid = $oldfile->zone;
        $olddid = $oldfile->district;
        $oldpid = $oldfile->province;


      //counting old teacher count in school and update it



       $oldcountinsc=DB::select('select * from users where school=?',[$oldsid]);

       $oldcountinsct=count($oldcountinsc);

       $newoldcountsct=$oldcountinsct-1;



       DB::update('update schools set t_count=? where id=?',[$newoldcountsct,$oldsid]);

      

        //counting new teacher count in division
       $oldcountindiv=DB::select('select * from users where division=?',[$olddivid]);
        //counting new teacher count in zone
       
        $oldcountindivt=count($oldcountindiv);

          $newoldcountindivt=$oldcountindivt-1;

         DB::update('update divisions set t_count=? where id=?',[$newoldcountindivt,$olddivid]);

        //count new teacher count in zone

       $oldcountinzone=DB::select('select * from users where zone=?',[$oldzid]);

        $oldcountinzonet=count($oldcountinzone);

        $newoldcountinzonet=$oldcountinzonet-1;
       
        DB::update('update  zones set t_count=? where id=?',[$newoldcountinzonet,$oldzid]);


        //counting new teacher count in district
       $oldcountindistrict=DB::select('select * from users where district=?',[$olddid]);


        $oldcountindistrictt=count($oldcountindistrict);

        $newoldcountindistrictt=$oldcountindistrictt-1;

         DB::update('update  district set t_count=? where id=?',[$newoldcountindistrictt,$olddid]);
         

        //counting new teacher count in province
        $oldcountinprovince=DB::select('select * from users where province=?',[$oldpid]);

         $oldcountinprovincet=count($oldcountinprovince);

         $newoldcountinprovincet=$oldcountinprovincet-1;

        DB::update('update  province set t_count=? where id=?',[$newoldcountinprovincet,$oldpid]);

        }
        $dbs = DB::delete('delete from users where id in ('.implode(",",$ids).')');
        return redirect('admin/deletedmembers');

    }
	
	    public function recycleAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  users set inRecycle = 1  where id in ('.implode(",",$ids).')');
        return redirect('admin/members');

    }

       public function restoreall(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  users set inRecycle = 0  where id in ('.implode(",",$ids).')');
        return redirect('admin/home');

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recycle($id)
    {
        $members = DB::update('update users set inRecycle = 1  where id =?',[$id]);
        $red = redirect('admin/members');
        return $red;
    }

     public function restore($id)
    {
        $members = DB::update('update users set inRecycle = 0  where id =?',[$id]);
        $red = redirect('admin/members');
        return $red;
    }


      public function showTrash()
    {
        $members = DB::table("users")->where('inRecycle',1)->paginate(100);

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
      
      //  ['members'=>$members]

        $provinces = DB::select("select * from province");
        $districts = DB::select("select * from district");
        $zones = DB::select("select * from zones");
        $divisions = DB::select("select * from divisions");
        $schools = DB::select("select * from schools");

         $record_count = count($members);

        return view('dashboard.pages.member_trash',compact('members','provinces','districts','zones','divisions','schools','record_count'));
    }

  

       public function createimport( ){
     

      $pendingmembers = DB::table("register_pending_users")->where('isregistered',0)->paginate(100);
      
          $record_count = count($pendingmembers);
        
        return view('dashboard.pages.import_new_members',compact('pendingmembers','record_count'));
       
    }

     public function fetch_import_data(Request $request){

      if($request->ajax())

      {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');

         
        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);

        
       // dd($province,$district,$zone, $division,$school);

       if(!empty($query)){
       
         $pendingmembers = DB::table('register_pending_users')
         ->where('isregistered',0)
         ->where('emp_id','like','%'.$query.'%')
         ->orWhere('nic','like','%'.$query.'%')
         ->orderBy($sort_by,$sort_type)
         ->paginate(100);

         $record_count = count($pendingmembers);
       }else{
       

         $pendingmembers = DB::table('register_pending_users')->where('isregistered',0)->orderBy($sort_by,$sort_type)->paginate(100);

          $record_count = count($pendingmembers);

       }
       
  
        return view('dashboard.pages.imported_member_pagination_data',compact('pendingmembers','record_count'))->render();
      }
    }


    public function storeimport(Request $request){

       $this-> validate($request,[
        'excelfile' =>'required|max:5000|mimes:xlsx,xls,csv'
       ]);
       $dateTime=date('YMD_His'); 


       $excelfile =$request->file('excelfile')->store('temp');
       
       $path=storage_path('app').'/'.$excelfile; 
		config(['excel.import.startRow' => 2]);
     //  $path = $request->file('excelfile')->getRealPath();
     //  $new_file = $dateTime.'-'.$excelfile->getClientOriginalName();
       //$savepath = public_path('/newmemberlists/');
       //$excelfile->move(public_path('newmemberlists/'),$new_file); 

       Excel::import(new MemberImport,$path);
      //$red = redirect('admin/members/importmemberlist')->with('success','Members Imported successfully');
       //return $red;

       
       
       return back()->with('success','Member Data Imported successfully ');




    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyimported($id)
    {
       // dd($id);
        $members = DB::delete('delete from register_pending_users where nic =?',[$id]);
        $red = redirect('admin/members/importmemberlist');
        return $red;
    }
   
      /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */

    public function deleteAllimported(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::delete('delete from register_pending_users where nic in ('.implode(",",$ids).')');
        return redirect('admin/members/importmemberlist');

    }

  

     
}