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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


//use Excel;
//use DB;

class SchoolAgentAdminController extends Controller
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

       // $user = Auth::user();

        $agents = DB::table("admins")->where('inRecycle',0)->where('role_id',7)->paginate(2);

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
      
      //  ['members'=>$members]

         $provinces = DB::select("select * from province");
         $districts = DB::select("select * from district");
          $zones = DB::select("select * from zones");
          $divisions = DB::select("select * from divisions");
          $schools = DB::select("select * from schools");


         $record_count = count($agents);

        return view('dashboard.pages.schooladmin.manage_school_agents',compact('agents','provinces','districts','zones','divisions','schools','record_count'));
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

        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);



       // dd($province,$district,$zone, $division,$school);

       if(!empty($query)){
       
       $dstatus=0;
       $sroleid=3;
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
         ->paginate(2);

         $record_count = count($agents);


       }else if(empty($query))
       {

           if((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         // $test = 'i am in first block';
         // dd($test);

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->orderBy($sort_by,$sort_type)->paginate(2);
          

          $record_count = count($agents);

        }elseif((!empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         


          //$test = 'i am in second block';
          //dd($province,$district,$zone,$division,$school,$test);
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);
        
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in second new block';
          //dd($test);
       
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in third block';
          //dd($test);
          
        $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(2);
        $record_count = count($agents);
        
        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in four block';
          //dd($test);
         
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

        // $test = 'i am in  five block';
          //dd($test);
         
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in sixth block';
         // dd($test);
        
         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);
        }elseif((!empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in seventh block';
          //dd($test);

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in eight block';
          //dd($test);

         $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){

          //$test = 'i am in nineth block';
          //dd($test);

        $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
        $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(!empty($school))){
          

          //$test = 'i am in tenth block';
          //dd($division,$school,$test);

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in eleventh block test';
          //dd($test);


        $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(2);
        $record_count = count($agents);
       
        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){
          
         // $test = 'i am in twelth block';
         // dd($test);
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);

        }
        elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){
          
         // $test = 'i am in thirth block';
         // dd($test);
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in fourteenth block';
         // dd($test);
         
        $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
        $record_count = count($agents);
        

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){
          
         // $test = 'i am in fourteenth block';
        //  dd($test);
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
        }elseif((empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         // $test = 'i am fifteenth  block';
         // dd($test);
           $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(2);
           $record_count = count($agents);

          // dd($members);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){


         // $test = 'i am in sixeenth block';
         // dd($test);
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);

        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in seventeeth block';
          //dd($test);
        
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in eighteenth block';
          //dd($test);
        
          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty(!$division))&&(empty($school))){

          //$test = 'i am in nineteenth block';
          //dd($test);

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
        }else{

          $agents = DB::table('admins')->where('inRecycle',0)->where('role_id',7)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
          //dd($members);
        }

       }

        return view('dashboard.pages.schooladmin.school_agent_pagination_data',compact('agents','record_count'))->render();
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
       
       $dstatus=1;
       $sroleid=3;
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
         ->paginate(2);

         $record_count = count($agents);


       }else if(empty($query))
       {

           if((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         // $test = 'i am in first block';
         // dd($test);

          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->orderBy($sort_by,$sort_type)->paginate(2);
          

          $record_count = count($agents);

        }elseif((!empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         


          //$test = 'i am in second block';
          //dd($province,$district,$zone,$division,$school,$test);
         $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('province',$province)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);
        
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in second new block';
          //dd($test);
       
         $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('province',$province)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in third block';
          //dd($test);
          
        $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(2);
        $record_count = count($agents);
        
        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in four block';
          //dd($test);
         
         $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

        // $test = 'i am in  five block';
          //dd($test);
         
         $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in sixth block';
         // dd($test);
        
         $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);
        }elseif((!empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in seventh block';
          //dd($test);

          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in eight block';
          //dd($test);

         $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
         $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){

          //$test = 'i am in nineth block';
          //dd($test);

        $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
        $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(!empty($school))){
          

          //$test = 'i am in tenth block';
          //dd($division,$school,$test);

          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in eleventh block test';
          //dd($test);


        $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(2);
        $record_count = count($agents);
       
        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){
          
         // $test = 'i am in twelth block';
         // dd($test);
          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);

        }
        elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){
          
         // $test = 'i am in thirth block';
         // dd($test);
          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in fourteenth block';
         // dd($test);
         
        $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
        $record_count = count($agents);
        

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){
          
         // $test = 'i am in fourteenth block';
        //  dd($test);
          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
        }elseif((empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         // $test = 'i am fifteenth  block';
         // dd($test);
           $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('district',$district)->orderBy($sort_by,$sort_type)->paginate(2);
           $record_count = count($agents);

          // dd($members);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){


         // $test = 'i am in sixeenth block';
         // dd($test);
          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);

        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in seventeeth block';
          //dd($test);
        
          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in eighteenth block';
          //dd($test);
        
          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('district',$district)->where('zone',$zone)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty(!$division))&&(empty($school))){

          //$test = 'i am in nineteenth block';
          //dd($test);

          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->where('zone',$zone)->where('division',$division)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
        }else{

          $agents = DB::table('admins')->where('inRecycle',1)->where('role_id',7)->orderBy($sort_by,$sort_type)->paginate(2);
          $record_count = count($agents);
          //dd($members);
        }

       }

        return view('dashboard.pages.schooladmin.school_agent_trash_pagination_data',compact('agents','record_count'))->render();
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
           $newregid = abs( crc32( uniqid() ) );
        return view('dashboard.pages.schooladmin.add_school_agent_admin',compact('provinces','districts','zones','divisions','schools','newregid'));
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
            'reg_id' => 'nullable|unique:admins,reg_id',
            'username' => 'required',
             'p_id'=>'required',
             'd_id'=>'required',
              'z_id'=>'required',
              'div_id'=>'required',
              's_id'=>'required',
             'emp_id'=>'nullable|required|unique:admins,emp_id',
            'email' => 'nullable|unique:admins,email',
           //'nic'=> 'unique:users,nic',
            'mobile'=> 'required|unique:admins,mobile',
            'address'=> 'required',
            'dob'=> 'required',
           'ps_number'=> 'nullable|unique:admins,ps_number',
            'profile_img' => 'image|max:2048',
            'password' => 'required',
           //  'homephone' => 'required',
             'gender' => 'required',
        ]);

     
       //geting data from  membership field data
      // dd($request);
       $creator_f_name = Auth::user()->name ;
       $creator_l_name = Auth::user()->lname ;
       $created_by = $creator_f_name.' '.$creator_l_name;
       $creator_id = Auth::user()->id;
       $creator_role_id = Auth::user()->role_id;

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
      
       $p_id = $request->get('p_id');
       $d_id = $request->get('d_id');
       $z_id = $request->get('z_id');
       $div_id = $request->get('div_id');
       $s_id = $request->get('s_id');
       $employee_id = $request->get('emp_id');
       $status = 1;
       $timestamp = now();
       if(empty($request->file('profile_img'))){ 
		     $checkrecordexxists = DB::select('select * from admins where nic=? ',[$nic]);

        $rowcount= count($checkrecordexxists);

       if($rowcount==0){ 


          $agent = DB::insert('insert into admins(name,lname,status,username,email,nic,mobile,address, reg_id,ps_number,emp_id,password,homephone,gender,province,district,zone,division,school,role_id,dob,created_at,created_by,creator_id,creator_role_id) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$name,$lname,$status,$username,$email,$nic,$mobile,$address,$reg_id,$ps_number,$employee_id,$password,$homephone,$gender,$p_id,$d_id,$z_id,$div_id,$s_id,7,$dob,$timestamp,$created_by,$creator_id,$creator_role_id]);
       $message=$employee_id.'You are now added CTSU Online UMS SYSTEM as School agent  Username:'.$username.'Password:'.$passwordorginal.'Please Log in to http://www.ctsu.lk/admin/login'; 

    


        //counting new  district agent count in province
        $countinprovince=DB::select('select * from admins where province=?  and role_id=?',[$p_id,7]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set s_a_count=? where id=?',[$countinprovincet,$p_id]);

         //counting new  district agent count in district
        $countindistrict=DB::select('select * from admins where district=?  and role_id=?',[$d_id,7]);

         $countindistrictt=count($countindistrict);

        DB::update('update  district set s_a_count=? where id=?',[$countindistrictt,$d_id]);

          //counting new  zone agent count in district
        $countinzone=DB::select('select * from admins where zone=?  and role_id=?',[$z_id,7]);

         $countinzonet=count($countinzone);

        DB::update('update zones set s_a_count=? where id=?',[$countinzonet,$z_id]);

           //counting new  division agent count in district
        $countindiv=DB::select('select * from admins where division=?  and role_id=?',[$div_id,7]);

         $countindivt=count($countindiv);

        DB::update('update divisions set s_a_count=? where id=?',[$countindivt,$div_id]);

    
          //counting new  division agent count in district
        $countinschool=DB::select('select * from admins where school=?  and role_id=?',[$s_id,7]);

         $countinschoolt=count($countinschool);

        DB::update('update schools set s_a_count=? where id=?',[$countinschoolt,$s_id]);


        if($agent){
              $username='esmsusr_12qs';
            $password='agn3fr';

            $getinsertedpersoninfo = DB::select('select * from admins where nic=?',[$nic]);

            $agentid = $getinsertedpersoninfo[0]->id;
           

           //assign role to agent 

            DB::insert('insert into role_admins(role_id,admin_id) value(?,?)',[7,$agentid]);



           
            $sms= new Sms();

            $client = $sms->getClient();


            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';

 

            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 
            $red = redirect('admin/departmentadmins/add')->with('success','School Agent succefully added');

        }else {
            $red = redirect('departmentadmins/add')->with('danger','Input data failed ');
        }
	   }else {
		    $red = redirect('departmentadmins/add')->with('danger','nic already exists ');
	   }
		 
      }else{
         
          $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('schoolagents/profileimg'),$new_name);
          $checkrecordexxists = DB::select('select * from admins where nic=? ',[$nic]);

        $rowcount= count($checkrecordexxists);

       if($rowcount==0){ 

             $agent = DB::insert('insert into admins(name,lname,status,username,email,nic,mobile,address, reg_id,ps_number,emp_id,profile_img,password,homephone,gender,province,district,zone,division,school,role_id,dob,created_at,created_by,creator_id,creator_role_id) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$name,$lname,$status,$username,$email,$nic,$mobile,$address,$reg_id,$ps_number,$employee_id,$new_name,$password,$homephone,$gender,$p_id,$d_id,$z_id,$div_id,$s_id,7,$dob,$timestamp,$created_by,$creator_id,$creator_role_id]);
       $message=$employee_id.'You are now added CTSU Online UMS SYSTEM  as School Agent  Username: '.$username.'Password:'.$passwordorginal.'Please Log in to http://www.ctsu.lk/admin/login'; 


      
           //counting new  district agent count in province
        $countinprovince=DB::select('select * from admins where province=?  and role_id=?',[$p_id,7]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set s_a_count=? where id=?',[$countinprovincet,$p_id]);

         //counting new  district agent count in district
        $countindistrict=DB::select('select * from admins where district=?  and role_id=?',[$d_id,7]);

         $countindistrictt=count($countindistrict);

        DB::update('update  district set s_a_count=? where id=?',[$countindistrictt,$d_id]);

          //counting new  zone agent count in district
        $countinzone=DB::select('select * from admins where zone=?  and role_id=?',[$z_id,7]);

         $countinzonet=count($countinzone);

        DB::update('update zones set s_a_count=? where id=?',[$countinzonet,$z_id]);

           //counting new  division agent count in district
        $countindiv=DB::select('select * from admins where division=?  and role_id=?',[$div_id,7]);

         $countindivt=count($countindiv);

        DB::update('update divisions set s_a_count=? where id=?',[$countindivt,$div_id]);

    
          //counting new  division agent count in district
        $countinschool=DB::select('select * from admins where school=?  and role_id=?',[$s_id,7]);

         $countinschoolt=count($countinschool);

        DB::update('update schools set s_a_count=? where id=?',[$countinschoolt,$s_id]);



        if($agent){

            $getinsertedpersoninfo = DB::select('select * from admins where nic=?',[$nic]);

            $agentid = $getinsertedpersoninfo[0]->id;
           

           //assign role to agent 

            DB::insert('insert into role_admins(role_id,admin_id) value(?,?)',[7,$agentid]);
              $username='esmsusr_12qs';
            $password='agn3fr';
           
            $sms= new Sms();

            $client = $sms->getClient();

            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';

 

            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 
            $red = redirect('admin/departmentadmins/add')->with('success','School Agent  succefully added');

        }else {
            $red = redirect('departmentadmins/add')->with('danger','Input data failed ');
        }
	   }else{
		    $red = redirect('departmentadmins/add')->with('danger','nic already exists ');
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
        $agents = DB::select('select * from admins where id=? ',[$id]);
  


        $provinces = DB::select('select * from province ');
         $districts = DB::select("select * from district");
          $zones = DB::select("select * from zones");
          $divisions = DB::select("select * from divisions");
          $schools = DB::select("select * from schools");




         

          //dd($zones);


        // $designations = DB::select("select * from designations");
        // $workplaces = DB::select("select * from workplaces");
        return view('dashboard.pages.schooladmin.school_agent_profile_admin',compact('agents','provinces','districts','zones','divisions','schools'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agents = DB::select('select * from admins where id=?',[$id]);
        $provinces = DB::select("select * from province");
         $districts = DB::select("select * from district");
          $zones = DB::select("select * from zones");
          $divisions = DB::select("select * from divisions");
          $schools = DB::select("select * from schools");
      
        

        return view('dashboard.pages.schooladmin.edit_school_agent_admin',compact('agents','provinces','districts','zones','divisions','schools'));
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
            //'reg_id' => 'nullable|unique:admins,reg_id',
            'username' => 'required',
             'p_id'=>'required',
             'd_id'=>'required',
             'z_id'=>'required',
             'div_id'=>'required',
             's_id'=>'required',
             'emp_id'=>'required',
            //'email' => 'nullable|unique:admins,email',
           //'nic'=> 'unique:users,nic',
            'mobile'=> 'required',
            'address'=> 'required',
            'dob'=> 'required',
           //'ps_number'=> 'nullable|unique:admins,ps_number',
            'profile_img' => 'image|max:2048',
            //'password' => 'required',
           //  'homephone' => 'required',
             'gender' => 'required',
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
       $updater_f_name = Auth::user()->name ;
       $updater_l_name = Auth::user()->lname ;
       $updated_by = $updater_f_name.' '.$updater_l_name;
       $updater_id = Auth::user()->id;
       $updater_role_id = Auth::user()->role_id;

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
      
       $p_id = $request->get('p_id');
       $d_id = $request->get('d_id');
       $z_id = $request->get('z_id');
       $div_id = $request->get('div_id');
       $s_id = $request->get('s_id');




      
    
       $timestamp = now();
		
		/* if these records still exists these fields set to null becuse that fields are uinque*/
		   $checkrecordexxistsem = DB::select('select * from admins where  email=?',[$email]);

        $rowcountunionem= count($checkrecordexxistsem);

        if($rowcountunionem==0){
		  
		 $email = $request->get('email');
			
		}else{
		 
		  $result = DB::table('admins')->select('email')->where('id', $id)->first();
      
         $email= $result->email;
      
		}
		
		   $checkrecordexxistsregid = DB::select('select * from admins where  reg_id=?',[$reg_id]);

        $rowcountregid= count($checkrecordexxistsregid);

        if($rowcountregid==0){
		  
		 $reg_id = $request->get('reg_id');
			
		}else{
		 
		  $result = DB::table('admins')->select('reg_id')->where('id', $id)->first();
        // $result2 = DB::table('users')->select('mobile')->where('union_id', $unionid)->first();
         $reg_id= $result->reg_id;
       
		
		
			
		}

     $checkrecordexxistspsnumber = DB::select('select * from admins where  ps_number=?',[$ps_number]);

        $rowcountpsnumber= count($checkrecordexxistspsnumber);

        if($rowcountpsnumber==0){
      
     $ps_number = $request->get('ps_number');
      
    }else{
     
      $result = DB::table('admins')->select('ps_number')->where('id', $id)->first();
        // $result2 = DB::table('users')->select('mobile')->where('union_id', $unionid)->first();
         $ps_number= $result->ps_number;
       
    
    
      
    }
	   $checkrecordexxists = DB::select('select * from admins where  nic=?',[$nic]);

        $rowcountnic= count($checkrecordexxists);

        if($rowcountnic==0){
		  
		 $nic = $request->get('nic');
			
		}else{
		 
		  $result = DB::table('admins')->select('nic')->where('id', $id)->first();
        // $result2 = DB::table('users')->select('mobile')->where('union_id', $unionid)->first();
         $nic= $result->nic;
       
		
		
			
		}
		
		 $checkrecordexxistsmobile = DB::select('select * from admins where  mobile=?',[$mobile]);
		 $rowcountmobile= count($checkrecordexxistsmobile);

        if($rowcountmobile==0){
			
			  $mobile = $request->get('mobile');
		  
			
		}else{
		  
		 $result = DB::table('admins')->select('mobile')->where('id', $id)->first();
        // $result2 = DB::table('users')->select('mobile')->where('union_id', $unionid)->first();
         $mobile= $result->mobile;
		
		
			
		}
		
		 $checkrecordexxistsempid = DB::select('select * from admins where  emp_id=?',[$employee_id]);
		 $rowcountempid= count($checkrecordexxistsempid);

        if($rowcountempid==0){
		   $employee_id = $request->get('emp_id');
			
		}else{
	    
		$result = DB::table('admins')->select('emp_id')->where('id', $id)->first();
        // $result2 = DB::table('users')->select('mobile')->where('union_id', $unionid)->first();
         $employee_id= $result->emp_id;
		  
		
		
		
			
		}

      //getting old record info

      $oldreacordinfo = DB::select('select * from  admins where id=?',[$id]);

      
        $oldpid = $oldreacordinfo[0]->province;
         $olddid = $oldreacordinfo[0]->district;
         $oldzid =$oldreacordinfo[0]->zone;
         $olddivid =$oldreacordinfo[0]->division;
          $oldsid =$oldreacordinfo[0]->school;




      



     
         

        //counting old district agent count in province
        $oldcountinprovince=DB::select('select * from admins where province=? and role_id=?',[$oldpid,7]);

         $oldcountinprovincet=count($oldcountinprovince);

         $newoldcountinprovincet=$oldcountinprovincet-1;

        DB::update('update  province set s_a_count=? where id=?',[$newoldcountinprovincet,$oldpid]);

         //counting old teacher count in province
        $oldcountindistrict=DB::select('select * from admins where district=? and role_id=?',[$olddid,7]);

         $oldcountindistrictt=count($oldcountindistrict);

         $newoldcountindistrictt=$oldcountindistrictt-1;

        DB::update('update  district set s_a_count=? where id=?',[$newoldcountindistrictt,$olddid]);

          //counting old agent count in zone
        $oldcountinzone=DB::select('select * from admins where zone=? and role_id=?',[$oldzid,7]);

         $oldcountinzonet=count($oldcountinzone);

         $newoldcountinzonet=$oldcountinzonet-1;

        DB::update('update  zones set s_a_count=? where id=?',[$newoldcountinzonet,$oldzid]);


        //counting old agent count in division
        $oldcountindivision=DB::select('select * from admins where division=? and role_id=?',[$olddivid,7]);

         $oldcountindivisiont=count($oldcountindivision);

         $newoldcountindivisiont=$oldcountindivisiont-1;

        DB::update('update  divisions set s_a_count=? where id=?',[$newoldcountindivisiont,$olddivid]);

         //counting old  agent count in school
        $oldcountinschool=DB::select('select * from admins where school=? and role_id=?',[$oldsid,7]);

         $oldcountinschoolt=count($oldcountinschool);

         $newoldcountinschoolt=$oldcountinschoolt-1;

        DB::update('update  schools set s_a_count=? where id=?',[$newoldcountinschoolt,$oldsid]);



         if(empty($request->file('profile_img'))){
			 
			 if(empty($request->get('password'))){
			    $agents = DB::update('update admins set name = ? , lname=? , reg_id =? , username = ? , dob = ? , nic = ? , homephone = ? , mobile = ? , address = ? , emp_id = ? , ps_number=?, province = ?,district=?,zone=?,division=?,school= ?, gender = ? , email = ? , status = ? , updated_at = ?,updated_by=?,updater_id=?,updater_role_id=?  where id = ? ',[$name,$lname,$reg_id,$username,$dob,$nic,$homephone,$mobile,$address,$employee_id,$ps_number,$p_id,$d_id,$z_id,$div_id,$s_id,$gender,$email,$status,$timestamp,$updated_by,$updater_id,$updater_role_id,$id]);



       if($agents) {

           
       
        //counting new  district agent count in province
        $countinprovince=DB::select('select * from admins where province=?  and role_id=?',[$p_id,7]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set s_a_count=? where id=?',[$countinprovincet,$p_id]);

         //counting new  district agent count in district
        $countindistrict=DB::select('select * from admins where district=?  and role_id=?',[$d_id,7]);

         $countindistrictt=count($countindistrict);

        DB::update('update  district set s_a_count=? where id=?',[$countindistrictt,$d_id]);

          //counting new  zone agent count in district
        $countinzone=DB::select('select * from admins where zone=?  and role_id=?',[$z_id,7]);

         $countinzonet=count($countinzone);

        DB::update('update zones set s_a_count=? where id=?',[$countinzonet,$z_id]);

           //counting new  division agent count in district
        $countindiv=DB::select('select * from admins where division=?  and role_id=?',[$div_id,7]);

         $countindivt=count($countindiv);

        DB::update('update divisions set s_a_count=? where id=?',[$countindivt,$div_id]);

    
          //counting new  division agent count in district
        $countinschool=DB::select('select * from admins where school=?  and role_id=?',[$s_id,7]);

         $countinschoolt=count($countinschool);

        DB::update('update schools set s_a_count=? where id=?',[$countinschoolt,$s_id]);

            $red = redirect('admin/departmentadmins')->with('success','School Agent Data has been updated');
          
  
       }else {

         $red = redirect('departmentadmins/edit/',$id)->with('danger','Error update please try again');
		   
       }

		 return $red;
			 }else{
				 

        
        //counting old district agent count in province
        $oldcountinprovince=DB::select('select * from admins where province=? and role_id=?',[$oldpid,7]);

         $oldcountinprovincet=count($oldcountinprovince);

         $newoldcountinprovincet=$oldcountinprovincet-1;

        DB::update('update  province set s_a_count=? where id=?',[$newoldcountinprovincet,$oldpid]);

         //counting old teacher count in province
        $oldcountindistrict=DB::select('select * from admins where district=? and role_id=?',[$olddid,7]);

         $oldcountindistrictt=count($oldcountindistrict);

         $newoldcountindistrictt=$oldcountindistrictt-1;

        DB::update('update  district set s_a_count=? where id=?',[$newoldcountindistrictt,$olddid]);

          //counting old agent count in zone
        $oldcountinzone=DB::select('select * from admins where zone=? and role_id=?',[$oldzid,7]);

         $oldcountinzonet=count($oldcountinzone);

         $newoldcountinzonet=$oldcountinzonet-1;

        DB::update('update  zones set s_a_count=? where id=?',[$newoldcountinzonet,$oldzid]);


        //counting old agent count in division
        $oldcountindivision=DB::select('select * from admins where division=? and role_id=?',[$olddivid,7]);

         $oldcountindivisiont=count($oldcountindivision);

         $newoldcountindivisiont=$oldcountindivisiont-1;

        DB::update('update  divisions set s_a_count=? where id=?',[$newoldcountindivisiont,$olddivid]);

         //counting old  agent count in school
        $oldcountinschool=DB::select('select * from admins where school=? and role_id=?',[$oldsid,7]);

         $oldcountinschoolt=count($oldcountinschool);

         $newoldcountinschoolt=$oldcountinschoolt-1;

        DB::update('update  schools set s_a_count=? where id=?',[$newoldcountinschoolt,$oldsid]);




       $agents = DB::update('update admins set name= ? , lname=? , reg_id =? , username = ?, password=?, dob = ? , nic = ? , homephone = ? , mobile = ? , address = ? , emp_id = ? , ps_number=?, province= ?,district=?,zone=?,division=?,school=?,gender = ? , email = ? , status = ? , updated_at = ?,updated_by=?,updater_id=?,updater_role_id=? where id = ?  ',
        [$name,$lname,$reg_id,$username,$password,$dob,$nic,$homephone,$mobile,$address,$employee_id,$ps_number,$p_id,$d_id,$z_id,$div_id,$s_id,$gender,$email,$status,$timestamp,$updated_by,$updater_id,$updater_role_id,$id]);
				 
				 
     $message=$employee_id.'Your password changed succesfully CTSU Online Database. Username: '.$username.' ,      Password:'.$passwordorginal.'Please Log in to http://www.ctsu.lk/admin/login';
       

       if($agents) {
        
          
        //counting new  district agent count in province
        $countinprovince=DB::select('select * from admins where province=?  and role_id=?',[$p_id,7]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set s_a_count=? where id=?',[$countinprovincet,$p_id]);

         //counting new  district agent count in district
        $countindistrict=DB::select('select * from admins where district=?  and role_id=?',[$d_id,7]);

         $countindistrictt=count($countindistrict);

        DB::update('update  district set s_a_count=? where id=?',[$countindistrictt,$d_id]);

          //counting new  zone agent count in district
        $countinzone=DB::select('select * from admins where zone=?  and role_id=?',[$z_id,7]);

         $countinzonet=count($countinzone);

        DB::update('update zones set s_a_count=? where id=?',[$countinzonet,$z_id]);

           //counting new  division agent count in district
        $countindiv=DB::select('select * from admins where division=?  and role_id=?',[$div_id,7]);

         $countindivt=count($countindiv);

        DB::update('update divisions set s_a_count=? where id=?',[$countindivt,$div_id]);

    
          //counting new  division agent count in district
        $countinschool=DB::select('select * from admins where school=?  and role_id=?',[$s_id,7]);

         $countinschoolt=count($countinschool);

        DB::update('update schools set s_a_count=? where id=?',[$countinschoolt,$s_id]);

       




		       $username='esmsusr_12qs';
            $password='agn3fr';
           
            $sms= new Sms();

            $client = $sms->getClient();


            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';

 

            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 
            $red = redirect('admin/departmentadmins')->with('success','School agent  has been updated Successfully');

           

       }else {

         $red = redirect('departmentadmins/edit/',$id)->with('danger','Error update please try again');
		   

       }
				return $red; 
				 
			 
			 }
			 
		 }else {
				 
			 if(empty($request->get('password'))){
				 
				 
          //geting data from  membership field data
       $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('departmentadmins/profileimg'),$new_name);
      // $new_name="test.jpg";
      
      //deleting old file when updating new one
       $getoldfilename = DB::table('admins')->select('profile_img')->where('id', $id)->first();
      
         $oldfile= $getoldfilename->profile_img;

        // dd($oldfile);
         $destinationPath = public_path('departmentadmins/profileimg/');
         File::delete($destinationPath.$oldfile);
        

        
        //counting old district agent count in province
        $oldcountinprovince=DB::select('select * from admins where province=? and role_id=?',[$oldpid,7]);

         $oldcountinprovincet=count($oldcountinprovince);

         $newoldcountinprovincet=$oldcountinprovincet-1;

        DB::update('update  province set s_a_count=? where id=?',[$newoldcountinprovincet,$oldpid]);

         //counting old teacher count in province
        $oldcountindistrict=DB::select('select * from admins where district=? and role_id=?',[$olddid,7]);

         $oldcountindistrictt=count($oldcountindistrict);

         $newoldcountindistrictt=$oldcountindistrictt-1;

        DB::update('update  district set s_a_count=? where id=?',[$newoldcountindistrictt,$olddid]);

          //counting old agent count in zone
        $oldcountinzone=DB::select('select * from admins where zone=? and role_id=?',[$oldzid,7]);

         $oldcountinzonet=count($oldcountinzone);

         $newoldcountinzonet=$oldcountinzonet-1;

        DB::update('update  zones set s_a_count=? where id=?',[$newoldcountinzonet,$oldzid]);


        //counting old agent count in division
        $oldcountindivision=DB::select('select * from admins where division=? and role_id=?',[$olddivid,7]);

         $oldcountindivisiont=count($oldcountindivision);

         $newoldcountindivisiont=$oldcountindivisiont-1;

        DB::update('update  divisions set s_a_count=? where id=?',[$newoldcountindivisiont,$olddivid]);

         //counting old  agent count in school
        $oldcountinschool=DB::select('select * from admins where school=? and role_id=?',[$oldsid,7]);

         $oldcountinschoolt=count($oldcountinschool);

         $newoldcountinschoolt=$oldcountinschoolt-1;

        DB::update('update  schools set s_a_count=? where id=?',[$newoldcountinschoolt,$oldsid]);
       

           $agents = DB::update('update admins set name= ? , lname=? , reg_id =? , username = ?, dob = ? , nic = ?,profile_img=? , homephone = ? , mobile = ? , address = ? , emp_id = ? , ps_number=?, province= ?,district=?,zone=?,division=?,school=?, gender = ? , email = ? , status = ? , updated_at = ? , updated_by=?,updater_id=?,updater_role_id=? where id = ? ',
        [$name,$lname,$reg_id,$username,$dob,$nic,$new_name,$homephone,$mobile,$address,$employee_id,$ps_number,$p_id,$d_id,$z_id,$div_id,$s_id,$gender,$email,$status,$timestamp,$updated_by,$updater_id,$updater_role_id,$id]);
    
        
        
       if($agents) {
           
            
         
        //counting new  district agent count in province
        $countinprovince=DB::select('select * from admins where province=?  and role_id=?',[$p_id,7]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set s_a_count=? where id=?',[$countinprovincet,$p_id]);

         //counting new  district agent count in district
        $countindistrict=DB::select('select * from admins where district=?  and role_id=?',[$d_id,7]);

         $countindistrictt=count($countindistrict);

        DB::update('update  district set s_a_count=? where id=?',[$countindistrictt,$d_id]);

          //counting new  zone agent count in district
        $countinzone=DB::select('select * from admins where zone=?  and role_id=?',[$z_id,7]);

         $countinzonet=count($countinzone);

        DB::update('update zones set s_a_count=? where id=?',[$countinzonet,$z_id]);

           //counting new  division agent count in district
        $countindiv=DB::select('select * from admins where division=?  and role_id=?',[$div_id,7]);

         $countindivt=count($countindiv);

        DB::update('update divisions set s_a_count=? where id=?',[$countindivt,$div_id]);

    
          //counting new  division agent count in district
        $countinschool=DB::select('select * from admins where school=?  and role_id=?',[$s_id,7]);

         $countinschoolt=count($countinschool);

        DB::update('update schools set s_a_count=? where id=?',[$countinschoolt,$s_id]);




          $red = redirect('admin/departmentadmins')->with('success','Data has been updated');

       }else {

         $red = redirect('departmentadmins/edit/',$id)->with('danger','Error update please try again');

       }
			 }else{





				 
			

       //deleating old image file wwhen updating new one
       $getoldfilename = DB::table('admins')->select('profile_img')->where('id', $id)->first();
      
         $oldfile= $getoldfilename[0]->profile_img;

        //dd($oldfile);

         
         $destinationPath = public_path('departmentadmins/profileimg/');
         File::delete($destinationPath.$oldfile);
       //$new_name="test.jpg";

        
   
            //geting data from  membership field data
       $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('departmentadmins/profileimg'),$new_name);

       
        //counting old district agent count in province
        $oldcountinprovince=DB::select('select * from admins where province=? and role_id=?',[$oldpid,7]);

         $oldcountinprovincet=count($oldcountinprovince);

         $newoldcountinprovincet=$oldcountinprovincet-1;

        DB::update('update  province set s_a_count=? where id=?',[$newoldcountinprovincet,$oldpid]);

         //counting old teacher count in province
        $oldcountindistrict=DB::select('select * from admins where district=? and role_id=?',[$olddid,7]);

         $oldcountindistrictt=count($oldcountindistrict);

         $newoldcountindistrictt=$oldcountindistrictt-1;

        DB::update('update  district set s_a_count=? where id=?',[$newoldcountindistrictt,$olddid]);

          //counting old agent count in zone
        $oldcountinzone=DB::select('select * from admins where zone=? and role_id=?',[$oldzid,7]);

         $oldcountinzonet=count($oldcountinzone);

         $newoldcountinzonet=$oldcountinzonet-1;

        DB::update('update  zones set s_a_count=? where id=?',[$newoldcountinzonet,$oldzid]);


        //counting old agent count in division
        $oldcountindivision=DB::select('select * from admins where division=? and role_id=?',[$olddivid,7]);

         $oldcountindivisiont=count($oldcountindivision);

         $newoldcountindivisiont=$oldcountindivisiont-1;

        DB::update('update  divisions set s_a_count=? where id=?',[$newoldcountindivisiont,$olddivid]);

         //counting old  agent count in school
        $oldcountinschool=DB::select('select * from admins where school=? and role_id=?',[$oldsid,7]);

         $oldcountinschoolt=count($oldcountinschool);

         $newoldcountinschoolt=$oldcountinschoolt-1;

        DB::update('update  schools set s_a_count=? where id=?',[$newoldcountinschoolt,$oldsid]);

      


         $agents = DB::update('update admins set name= ? , lname=? , reg_id =? , username = ?, password = ?, dob = ? , nic = ?,profile_img=? , homephone = ? , mobile = ? , address = ? , emp_id = ? , ps_number=?, province= ?,district=?,zone=?,division=?,school=?, gender = ? , email = ? , status = ? , updated_at = ?,updated_by=?,updater_id=?,updater_role_id=? where id = ? ',
        [$name,$lname,$reg_id,$username,$password,$dob,$nic,$new_name,$homephone,$mobile,$address,$employee_id,$ps_number,$p_id,$d_id,$z_id,$div_id,$s_id,$gender,$email,$status,$timestamp,$updated_by,$updater_id,$updater_role_id,$id]);



        $message=$employee_id.'Your password changed succesfully CTSU Online Database  Username: '.$username.'    Password:'.$passwordorginal.'Please Log in to http://www.ctsu.lk/admin/login';


       if($agents) {

         
       
        //counting new  district agent count in province
        $countinprovince=DB::select('select * from admins where province=?  and role_id=?',[$p_id,7]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set s_a_count=? where id=?',[$countinprovincet,$p_id]);

         //counting new  district agent count in district
        $countindistrict=DB::select('select * from admins where district=?  and role_id=?',[$d_id,7]);

         $countindistrictt=count($countindistrict);

        DB::update('update  district set s_a_count=? where id=?',[$countindistrictt,$d_id]);

          //counting new  zone agent count in district
        $countinzone=DB::select('select * from admins where zone=?  and role_id=?',[$z_id,7]);

         $countinzonet=count($countinzone);

        DB::update('update zones set s_a_count=? where id=?',[$countinzonet,$z_id]);

           //counting new  division agent count in district
        $countindiv=DB::select('select * from admins where division=?  and role_id=?',[$div_id,7]);

         $countindivt=count($countindiv);

        DB::update('update divisions set s_a_count=? where id=?',[$countindivt,$div_id]);

    
          //counting new  division agent count in district
        $countinschool=DB::select('select * from admins where school=?  and role_id=?',[$s_id,7]);

         $countinschoolt=count($countinschool);

        DB::update('update schools set s_a_count=? where id=?',[$countinschoolt,$s_id]);

		     $username='esmsusr_12qs';
            $password='agn3fr';
           
            $sms= new Sms();

            $client = $sms->getClient();


            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';

 

            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 
            $red = redirect('admin/departmentadmins')->with('success','School  Agent Data has been updated');

             

       }else {

         $red = redirect('departmentadmins/edit/',$id)->with('danger','Error update please try again');
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
         $getoldfilename = DB::table('admins')->select('profile_img')->where('id', $id)->first();
      
         $oldfile = $getoldfilename->profile_img;

         
         $destinationPath = public_path('schoolagents/profileimg/');
         File::delete($destinationPath.$oldfile);

         //getting old record info

      $oldreacordinfo = DB::select('select * from  admins where id=?',[$id]);

     
        $oldpid = $oldreacordinfo[0]->province;
        $olddid = $oldreacordinfo[0]->district;
        $oldzid = $oldreacordinfo[0]->zone;
        $olddivid = $oldreacordinfo[0]->division;
		  $oldsid = $oldreacordinfo[0]->school;
       
     
     

        $agents = DB::delete('delete from admins where id =?',[$id]);
         DB::delete('delete from role_admins where role_id=? and admin_id=?',[7,$id]);

        
        //counting new  district agent count in province
        $countinprovince=DB::select('select * from admins where province=?  and role_id=?',[$oldpid,7]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set s_a_count=? where id=?',[$countinprovincet,$oldpid]);

         //counting new  district agent count in district
        $countindistrict=DB::select('select * from admins where district=?  and role_id=?',[$olddid,7]);

         $countindistrictt=count($countindistrict);

        DB::update('update  district set s_a_count=? where id=?',[$countindistrictt,$olddid]);

          //counting new  zone agent count in district
        $countinzone=DB::select('select * from admins where zone=?  and role_id=?',[$oldzid,7]);

         $countinzonet=count($countinzone);

        DB::update('update zones set s_a_count=? where id=?',[$countinzonet,$oldzid]);

           //counting new  division agent count in district
        $countindiv=DB::select('select * from admins where division=?  and role_id=?',[$olddivid,7]);

         $countindivt=count($countindiv);

        DB::update('update divisions set s_a_count=? where id=?',[$countindivt,$olddivid]);

         //counting new  division agent count in district
        $countinschool=DB::select('select * from admins where school=?  and role_id=?',[$oldsid,7]);

         $countinschoolt=count($countinschool);

        DB::update('update schools set s_a_count=? where id=?',[$countinschoolt,$oldsid]);

      
        $red = redirect('admin/deleteddepartmentadmins');
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
         $oldfiles=DB::select('select *  from admins where id in ('.implode(",",$ids).')');

        foreach ($oldfiles as  $oldfile) {
          
          $oldfilename= $oldfile->profile_img;

         
         $destinationPath = public_path('schoolagents/profileimg');
         File::delete($destinationPath.$oldfilename);
         
        $oldid = $oldfile->id;
        $oldpid = $oldfile->province;
        $olddid = $oldfile->district;
        $oldzid = $oldfile->zone;
        $olddivid = $oldfile->division;
        $oldsid = $oldfile->school;

        $agents = DB::delete('delete from admins where id =?',[$oldid]);
         
         DB::delete('delete from role_admins where role_id=? and admin_id=?',[7,$oldid]);

        
        //counting new  district agent count in province
        $countinprovince=DB::select('select * from admins where province=?  and role_id=?',[$oldpid,7]);

         $countinprovincet=count($countinprovince);

        DB::update('update  province set s_a_count=? where id=?',[$countinprovincet,$oldpid]);

         //counting new  district agent count in district
        $countindistrict=DB::select('select * from admins where district=?  and role_id=?',[$olddid,7]);

         $countindistrictt=count($countindistrict);

        DB::update('update  district set s_a_count=? where id=?',[$countindistrictt,$olddid]);

          //counting new  zone agent count in district
        $countinzone=DB::select('select * from admins where zone=?  and role_id=?',[$oldzid,7]);

         $countinzonet=count($countinzone);

        DB::update('update zones set s_a_count=? where id=?',[$countinzonet,$oldzid]);

           //counting new  division agent count in district
        $countindiv=DB::select('select * from admins where division=?  and role_id=?',[$olddivid,7]);

         $countindivt=count($countindiv);

        DB::update('update divisions set s_a_count=? where id=?',[$countindivt,$olddivid]);

         //counting new  division agent count in district
        $countinschool=DB::select('select * from admins where school=?  and role_id=?',[$oldsid,7]);

         $countinschoolt=count($countinschool);

        DB::update('update schools set s_a_count=? where id=?',[$countinschoolt,$oldsid]);
         

    

        }

       
        return redirect('admin/departmentadmins/deleteddepartmentadmins');

    }
	
	    public function recycleAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  admins set inRecycle = 1  where id in ('.implode(",",$ids).')');
        return redirect('admin/departmentadmins/');

    }

       public function restoreall(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  admins set inRecycle = 0  where id in ('.implode(",",$ids).')');
        return redirect('admin/departmentadmins/deleteddepartmentadmins');

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recycle($id)
    {
        $members = DB::update('update admins set inRecycle = 1  where id =?',[$id]);
        $red = redirect('admin/departmentadmins');
        return $red;
    }

     public function restore($id)
    {
        $members = DB::update('update admins set inRecycle = 0  where id =?',[$id]);
        $red = redirect('admin/departmentadmins');
        return $red;
    }


      public function showTrash()
    {
         // $user = Auth::user();

        $agents = DB::table("admins")->where('inRecycle',1)->where('role_id',7)->paginate(2);

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
      
      //  ['members'=>$members]

         $provinces = DB::select("select * from province");
         $districts = DB::select("select * from district");
          $zones = DB::select("select * from zones");
          $divisions = DB::select("select * from divisions");
          $schools = DB::select("select * from schools");

         $record_count = count($agents);

        return view('dashboard.pages.schooladmin.school_agent_admin_trash',compact('agents','provinces','districts','zones','divisions','schools','record_count'));
    }

    public function createimport( ){
      $pendingmembers = DB::select("select * from register_pending_users");
        
        return view('dashboard.pages.import_new_members',compact('pendingmembers'));
       
    }


    public function storeimport(Request $request){

       $this-> validate($request,[
        'excelfile' =>'required|max:5000|mimes:xlsx,xls,csv'
       ]);
       $dateTime=date('YMD_His'); 


       $excelfile =$request->file('excelfile');

       $path = $request->file('excelfile')->getRealPath();
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
        
        $members = DB::delete('delete from register_pending_users where employee_id =?',[$id]);
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
        $dbs = DB::delete('delete from register_pending_users where employee_id in ('.implode(",",$ids).')');
        return redirect('admin/members/importmemberlist');

    }

  

     
}