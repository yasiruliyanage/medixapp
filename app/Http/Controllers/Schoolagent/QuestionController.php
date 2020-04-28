<?php
namespace App\Http\Controllers\Schoolagent;

use App\Sms;
use SoapClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class QuestionController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('schoolagent');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $covid_questions = DB::select("select * from covid_questions where inRecycle = 0");
        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");

        return view('covid19application.pages.departmentadminsection.manage_questions',['covid_questions'=>$covid_questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	//these code lines commented for future use
      //$designations = DB::select("select * from designations");
      //  $workplaces = DB::select("select * from workplaces");
       // return view('dashboard.pages.add_member',['designations'=>$designations],['workplaces'=>$workplaces]);
         return view('dashboard.pages.add_question');
    }

 public function fetch_data(Request $request){

      if($request->ajax())

      {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');

        
        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);

       if(!empty($query)){
       
         

          $covid_questions = DB::table('users')->where('inRecycle',0)->where('question_si','like','%'.$query.'%')
         ->orWhere('question_en','like','%'.$query.'%')
         ->orWhere('question_ta','like','%'.$query.'%')->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
         
        

       }else{

          $covid_questions = DB::table('covid_questions')->where('inRecycle',0)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($covid_questions);

       }
       
        


       

        return view('covid19application.pages.departmentadminsection.question_pagination_data',compact('covid_questions','record_count'))->render();
      }
    }


     public function fetch_trash_data(Request $request){

      if($request->ajax())

      {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');

        
        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);

       if(!empty($query)){
       
         

          $covid_questions = DB::table('users')->where('inRecycle',1)->where('question_si','like','%'.$query.'%')
         ->orWhere('question_en','like','%'.$query.'%')
         ->orWhere('question_ta','like','%'.$query.'%')->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
         
        

       }else{

          $covid_questions = DB::table('covid_questions')->where('inRecycle',1)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($covid_questions);

       }
       
        


       

        return view('covid19application.pages.departmentadminsection.question_pagination_data',compact('covid_questions','record_count'))->render();
      }
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
           
          //   'email' => 'required',
           //  'nic'=> 'unique:users,nic',
            'mobile'=> 'required|unique:users,mobile',
            'address'=> 'required',
          
            'profile_img' => 'image|max:2048',
            //'password' => 'required',
           //  'homephone' => 'required',
             'gender' => 'required',
          //  'designation' => 'required',
          // 'work_place' => 'required',


        ]);

     
       //getting data from  membership field data
      

       $name = $request->get('name');
       
      // $nic = $request->get('nic');
      // $profile_img = $request->get('profile_img');
     
       $mobile = $request->get('mobile');
       $address = $request->get('address');
     
       $gender = $request->get('gender');
       $email = $request->get('email');
     
       $timestamp = now();
       if(empty($request->file('profile_img'))){ 
		     

      
        $contacts = DB::insert('insert into contacts(name,email,mobile,address,gender,created_at) value(?,?,?,?,?,?)',[$name,$email,$mobile,$address,$gender,$timestamp]);
       $message=$name.'Contact added Succesfully to  CEBTU Online Database';


        if($contacts){
               $username='esmsusr_12qs';
            $password='agn3fr';
           
            $sms= new Sms();

            $client = $sms->getClient();


            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';

 

            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 
            $red = redirect('admin/contacts/add')->with('success','Contact succefully added');

        }else {
            $red = redirect('contacts/add')->with('danger','Input data failed ');
        }
	   
		 
      }else{
         
          $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('contacts/profileimg'),$new_name);
         

   
          $contacts = DB::insert('insert into contacts(name,email,mobile,address,profile_img,gender,created_at) value(?,?,?,?,?,?,?)',[$name,$email,$mobile,$address,$new_name,$gender,$timestamp]);
       $message=$name.'Contact added Succesfully to  CEBTU Online Database';
        if($contacts){
              $username='esmsusr_12qs';
            $password='agn3fr';
           
            $sms= new Sms();

            $client = $sms->getClient();


            $session=$sms->createSession('',$username,$password,''); 

            $alias='CTSU';

 

            $sms->sendMessages($session,$alias,$message,array($mobile), 0); 

            $sms->closeSession($session); 
            $red = redirect('admin/contacts/add')->with('success',' succefully added');

        }else {
            $red = redirect('contacts/add')->with('danger','Input data failed ');
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
        $contacts = DB::select('select * from contacts where id=? ',[$id]);

        // $designations = DB::select("select * from designations");
        // $workplaces = DB::select("select * from workplaces");
        return view('dashboard.pages.contact_profile',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts = DB::select('select * from contacts where id=?',[$id]);
      //  $designations = DB::select("select * from designations");
      //  $workplaces = DB::select("select * from workplaces");
        //['members'=> $members],['workplaces'=>$workplaces],['designations'=>$designations]

        return view('dashboard.pages.edit_contact',compact('contacts'));
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
           // 'lname' => 'required',
            //'union_id' => 'required',
           // 'username' => 'required',
           // 'email' => 'required',
          // 'nic'=> 'numeric|min:10|max:50',
            'mobile'=> 'required',
            'address'=> 'required',
         //   'dob'=> 'required',
          // 'employee_id'=> 'required',
            'profile_img' => 'image|max:2048',
            //'password' => 'required',
           //  'homephone' => 'required',
             'gender' => 'required',
           // 'designation' => 'required',
         //'work_place' => 'required',
        ]);

       
      

       $name = $request->get('name');
     //   $lname = $request->get('lname');
     //  $union_id = $request->get('union_id');
     //  $username = $request->get('username');
	//  $passwordorginal=$request->get('password');
	 //  if(!empty($request->get('password'))){
     //  $password = Hash::make( $request->get('password'));
	 //  }else{
		   
	  //  $password = "";
	 //  }
      // $dob = $request->get('dob');
      // $nic = $request->get('nic');
       $profile_img = $request->get('profile_img');
     //  $homephone = $request->get('homephone');
       $mobile = $request->get('mobile');
       $address = $request->get('address');
     //  $employee_id = $request->get('employee_id');
     //  $designation = $request->get('designation');
       $gender = $request->get('gender');
       $email = $request->get('email');
     //  $work_place = $request->get('work_place');
       //$status = $request->get('status');;
       $timestamp = now();
		
		/* if these records still exists these fields set to null becuse that fields are uinque*/
		   $checkrecordexxistsem = DB::select('select * from contacts where  email=?',[$email]);

        $rowcountunionem= count($checkrecordexxistsem);

        if($rowcountunionem==0){
		  
		 $email = $request->get('email');
			
		}else{
		 
		  $result = DB::table('contacts')->select('email')->where('id', $id)->first();
      
         $email= $result->email;
      
		}
		
		
	  
		
		 $checkrecordexxistsmobile = DB::select('select * from contacts where  mobile=?',[$mobile]);
		 $rowcountmobile= count($checkrecordexxistsmobile);

        if($rowcountmobile==0){
			
			  $mobile = $request->get('mobile');
		  
			
		}else{
		  
		 $result = DB::table('contacts')->select('mobile')->where('id', $id)->first();
        // $result2 = DB::table('users')->select('mobile')->where('union_id', $unionid)->first();
         $mobile= $result->mobile;
		
		
			
		}
		
		

         if(empty($request->file('profile_img'))){
			 
			 
			    $contacts = DB::update('update contacts set name= ? ,mobile = ? , address = ? , gender = ? , email = ? ,updated_at = ? where id = ? ',
        [$name,$mobile,$address,$gender,$email,$timestamp,$id]);

       if($contacts) {
            $red = redirect('admin/contacts')->with('success','Data has been updated');
          

       }else {

         $red = redirect('contacts/edit/',$id)->with('danger','Error update please try again');
		   
       }
		 return $red;
			 
			 
		 }else {
				 
			 
				 
				 
				   //geting data from  membership field data
       $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('contacts/profileimg'),$new_name);
      // $new_name="test.jpg";
          $contacts  = DB::update('update contacts set name= ? , profile_img = ? , mobile = ? , address = ? ,  gender = ? , email = ? ,updated_at = ? where id = ? ',
        [$name,$new_name,$mobile,$address,$gender,$email,$timestamp,$id]);
				

       if($contacts) {
		    
            $red = redirect('admin/contacts')->with('success','Data has been updated');

             

       }else {

         $red = redirect('contacts/edit/',$id)->with('danger','Error update please try again');
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
        $contacts = DB::delete('delete from contacts where id =?',[$id]);
        $red = redirect('admin/contacts');
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
        $dbs = DB::delete('delete from contacts where id in ('.implode(",",$ids).')');
        return redirect('admin/home');

    }
	
	    public function recycleAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  contacts set inRecycle = 1  where id in ('.implode(",",$ids).')');
        return redirect('admin/contacts');

    }

       public function restoreall(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  contacts set inRecycle = 0  where id in ('.implode(",",$ids).')');
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
        $contacts = DB::update('update contacts set inRecycle = 1  where id =?',[$id]);
        $red = redirect('admin/contacts');
        return $red;
    }

     public function restore($id)
    {
        $contacts = DB::update('update contacts set inRecycle = 0  where id =?',[$id]);
        $red = redirect('admin/contacts');
        return $red;
    }


      public function showTrash()
    {
        $contacts = DB::select('select * from contacts where inRecycle=1');

        return view('dashboard.pages.contacts_trash',compact('contacts'));
    }
}
