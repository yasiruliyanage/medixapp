<?php
namespace App\Http\Controllers\Schoolagent;

use App\Sms;
use SoapClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class CovidMeterController extends Controller
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
		  $userdivid = Auth::user()->division;

        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;
        
         $covid_questions = DB::table("covid_questions")->where('inRecycle',0)->paginate(100);
        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
   $record_count = count($covid_questions);
		 $usersid = Auth::user()->school;
      $getsname = DB::select('select * from schools where id=?',[$usersid]);
      $sname=$getsname[0]->placename;

        return view('schoolagent.covid19meter.dashboard',compact('covid_questions','record_count','divname','sname'));
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createnewinterview()
    {
    	//these code lines commented for future use
      //$designations = DB::select("select * from designations");
      //  $workplaces = DB::select("select * from workplaces");
       // return view('dashboard.pages.add_member',['designations'=>$designations],['workplaces'=>$workplaces]);

      //deleting incompleted records if on database
        
        DB::delete("delete from covid_assessd_patients where interview_status=?",[2]);

          $patientid = abs(crc32( uniqid() ));
		  $userdivid = Auth::user()->division;

        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;
		

      return view('schoolagent.covid19meter.create_interview',compact('patientid','divname'));
    }




    //storing assesed patient data 
  public function store(Request $request)
    {
      
        //validating membership form fields
            $this-> validate($request,[
            'name' => 'required',
            'phone'=> 'required',
            'address'=>'required',
            'dob'=>'required',
              'profile_img' => 'image|max:2048',
              'patient_no' => 'required',
              'patient_state'=>'required',
              'details_from'=>'required',
              'gender'=>'required',



        ]);

     
       //getting data from  membership field data
      

       $name = $request->get('name');
       $nic = $request->get('nic');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $dob = $request->get('dob');
        $patient_no = $request->get('patient_no');
        $patient_state = $request->get('patient_state');
        $details_from = $request->get('details_from');
         $gender = $request->get('gender');
       $timestamp = now();

       
       if(empty($request->file('profile_img'))){ 
         
         $new_name = 'patient_avatar.jpg';


       }else{

        //geting data from  membership field data
       $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('covid19assesdpatients/profileimg'),$new_name);

       }
         
        $userpid = Auth::user()->province;
        $userdid = Auth::user()->district;
       $userzid = Auth::user()->zone;
       $userdivid = Auth::user()->division;
        $usersid = Auth::user()->school;

       $patient_province = $userpid;
       $patient_district = $userdid;
       $patient_hospitaltype = $userzid;
       $patient_hospital = $userdivid;
       $patient_department = $usersid;


        $interview_status = 2;

      

      
         

      
        $insertcovidexaminedpatient = DB::insert('insert into covid_assessd_patients(patient_no,name,nic,phone,address,dob,profile_img,patient_state_onhospital,details_from,patient_province,patient_district,patient_hospitaltype,patient_hospital,patient_department,interview_status,gender,interviewed_at,created_at) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$patient_no,$name,$nic,$phone,$address,$dob,$new_name,$patient_state,$details_from,$patient_province,$patient_district,$patient_hospitaltype,$patient_hospital,$patient_department,$interview_status,$gender,$timestamp,$timestamp]);


    


        if($insertcovidexaminedpatient){

             $covid_questions = DB::table("covid_questions")->where('inRecycle',0)->paginate(100);
               
             $red = view('schoolagent.covid19meter.questionarie',compact('covid_questions','patient_no','name'));

           // $red = redirect('admin/covid19application/add')->with('success','Question succefully added');

        }else {

            $red = redirect('departmentadmin/covid19meter/createnew')->with('danger','Input data failed ');

        }
     
     
      

        return $red;
 

    }



      public function completequestionarie(Request $request)
    {
     
       $this-> validate($request,[
            'ids' => 'required',
            'patient_no'=>'required',
        ]);
        

        $patient_no = $request->get('patient_no');
        $ids = $request->get('ids');

         $answeredquestionscount = count($ids);

        
        $covid_questions = DB::select("select * from covid_questions where inRecycle=0");

        $questionscount = count($covid_questions);


        $predict_percentage = ($answeredquestionscount/$questionscount)*100;



        $covid_decession_factors = DB::select('select * from covid_decession_factors');

        $percentage1 = $covid_decession_factors[0]->percentage;
        $percentage2 = $covid_decession_factors[1]->percentage;
        $percentage3 = $covid_decession_factors[2]->percentage;
        $percentage4 = $covid_decession_factors[3]->percentage;


        //decession selector

        if($predict_percentage > $percentage1 ){
       
          $decession = 'You are positive to covid19 symptoms';

          $state = 'covid19positive';

        }else if($predict_percentage > $percentage3){

          $decession = 'You are need to Self Quarantine';

          $state = 'selfquarantine';

        }else if($predict_percentage > $percentage4){

          $decession = 'You are need to go to OPD';


          $state = 'OPD';

        }else if($predict_percentage> $percentage2){

          $decession = ' You are normal';

          $state ='normal';
        }
     
        $interview_status = 1;

        $update_patient_status = DB::update('update covid_assessd_patients set patient_results =? , patient_result_decission =?,interview_status=? where patient_no = ?',[ $predict_percentage,$state,$interview_status,$patient_no]);



        

        return view('schoolagent.covid19meter.covid19meterresult',compact('decession','state','predict_percentage'));
     

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
          $record_count = count($covid_questions);
         
        

       }else{

          $covid_questions = DB::table('covid_questions')->where('inRecycle',0)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($covid_questions);

       }
       
        


       

        return view('schoolagent.pages.covid19application.question_pagination_data',compact('covid_questions','record_count'))->render();
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
       
         

          $covid_questions = DB::table('covid_questions')->where('inRecycle',1)->where('question_si','like','%'.$query.'%')
         ->orWhere('question_en','like','%'.$query.'%')
         ->orWhere('question_ta','like','%'.$query.'%')->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($members);
         
        

       }else{

          $covid_questions = DB::table('covid_questions')->where('inRecycle',1)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($covid_questions);

       }
       
        


       

        return view('schoolagent.pages.covid19application.question_pagination_trash_data',compact('covid_questions','record_count'))->render();
      }
    }


     public function fetch_decession_data(Request $request){

      if($request->ajax())

      {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');

        
        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);

    

          $covid_decessions = DB::table('covid_decession_factors')->where('inRecycle',1)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($covid_decessions);

      
        


       

        return view('schoolagent.pages.covid19application.decession_pagination_data',compact('covid_decessions','record_count'))->render();
      }
    }


   
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $covid_questions = DB::select('select * from covid_questions where id=? ',[$id]);

        // $designations = DB::select("select * from designations");
        // $workplaces = DB::select("select * from workplaces");
        return view('schoolagent.pages.covid19application.view_question',compact('covid_questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $covid_questions = DB::select('select * from covid_questions where id=?',[$id]);
      //  $designations = DB::select("select * from designations");
      //  $workplaces = DB::select("select * from workplaces");
        //['members'=> $members],['workplaces'=>$workplaces],['designations'=>$designations]

        return view('schoolagent.pages.covid19application.edit_questions',compact('covid_questions'));
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
            'question_si' => 'required',
            'question_en'=> 'required',
            'question_ta'=> 'required',
        ]);

       
      

       $question_si = $request->get('question_si');
        $question_en = $request->get('question_en');
        $question_ta = $request->get('question_ta');
    
      
       $timestamp = now();
		
	
		
		

     
			 
			 
			    $covid_questions = DB::update('update covid_questions set question_si= ? ,question_en = ? , question_ta = ? , updated_at = ? where id = ? ',
        [$question_si,$question_en,$question_ta,$timestamp,$id]);

       if($covid_questions) {
            $red = redirect('departmentadmin/covid19application')->with('success','Question has been updated');
          

       }else {

         $red = redirect('covid19application/edit/',$id)->with('danger','Error update please try again');
		   
       }
		 return $red;
			 
			 
	


       



    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function decessionedit($id)
    {
        $covid_decession = DB::select('select * from covid_decession_factors where id=?',[$id]);
      //  $designations = DB::select("select * from designations");
      //  $workplaces = DB::select("select * from workplaces");
        //['members'=> $members],['workplaces'=>$workplaces],['designations'=>$designations]

        return view('schoolagent.pages.covid19application.edit_decession',compact('covid_decession'));
    }


     public function decessionupdate(Request $request, $id)
    {
        //validating membership form fields
            $this-> validate($request,[
            'percentage'=> 'required',
        ]);

       
      

       $percentage = $request->get('percentage');
       
    
      
       $timestamp = now();
    
  
    
    

     
       
       
          $covid_decession = DB::update('update covid_decession_factors set percentage= ? , updated_at = ? where id = ? ',
        [$percentage,$timestamp,$id]);

       if($covid_decession) {
            $red = redirect('departmentadmin/covid19application/decessions')->with('success','Decession has been updated');
          

       }else {

         $red = redirect('covid19application/decessions/edit/',$id)->with('danger','Error update please try again');
       
       }
     return $red;
       
       
  


       



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $covid_questions = DB::delete('delete from covid_questions where id =?',[$id]);
        $red = redirect('departmentadmin/covid19application');
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
        $dbs = DB::delete('delete from covid_questions where id in ('.implode(",",$ids).')');
        return redirect('departmentadmin/covid19application');

    }
	
	    public function recycleAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  covid_questions set inRecycle = 1  where id in ('.implode(",",$ids).')');
        return redirect('departmentadmin/covid19application/deletedquestions');

    }

       public function restoreall(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  covid_questions set inRecycle = 0  where id in ('.implode(",",$ids).')');
        return redirect('departmentadmin/covid19application');

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recycle($id)
    {
        $contacts = DB::update('update covid_questions set inRecycle = 1  where id =?',[$id]);
        $red = redirect('departmentadmin/covid19application/deletedquestions');
        return $red;
    }

     public function restore($id)
    {
        $contacts = DB::update('update covid_questions set inRecycle = 0  where id =?',[$id]);
        $red = redirect('departmentadmin/covid19application/');
        return $red;
    }


      public function showTrash()
    {
        $covid_questions = DB::table("covid_questions")->where('inRecycle',1)->paginate(100);
          $record_count = count($covid_questions);
        return view('schoolagent.pages.covid19application.manage_questions_trash',compact('covid_questions','record_count'));
    }



     public function getcovidpatients(Request $request){

      $usersid = Auth::user()->school; 
      $covid_assessd_patients = DB::table("covid_assessd_patients")->where('inRecycle',0)->where('patient_department',$usersid)->paginate(100);

         $userdivid = Auth::user()->division;
		 $usersid = Auth::user()->school; 

        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;
		 
	    $getsname = DB::select('select * from schools where id=?',[$usersid]);
        $sname=$getsname[0]->placename;

        $provinces = DB::select("select * from province");
        $districts = DB::select("select * from district");
        $zones = DB::select("select * from zones");
        $divisions = DB::select("select * from divisions");
        $schools = DB::select("select * from schools");
        $subjects = DB::select("select * from subjects");

        $record_count = count($covid_assessd_patients);


        return view('schoolagent.covid19meter.manage_patients',compact('covid_assessd_patients','provinces','districts','zones','divisions','schools','subjects','record_count','divname','sname'));
       




     }

     public function fetch_patient_data(Request $request){

      if($request->ajax())

      {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
		  
		   $userpid = Auth::user()->province;
		   $userdid = Auth::user()->district; 
            $userzid = Auth::user()->zone; 
		   $userdivid = Auth::user()->division; 
		   $usersid = Auth::user()->school; 
		   
        $province = $request->get('province');
        $district =$request->get('district');
        $zone = $request->get('zone');
        $division = $request->get('division');
        $school = $request->get('school');
        $interviewddate = $request->get('sub_id');
        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);

        
       // dd($province,$district,$zone, $division,$school);

       if(!empty($query)){
		   
		 
		   
		   $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle','=',0)
		 ->where('patient_department','=',$school) 
		  ->where(function($query1) use ($query){
                    $query1->where('name','like','%'.$query.'%')
                   ->orWhere('nic','like','%'.$query.'%')
					->orWhere('dob','like','%'.$query.'%')
         ->orWhere('phone','like','%'.$query.'%')
         ->orWhere('interviewed_at','like','%'.$query.'%')
         ->orWhere('address','like','%'.$query.'%');
               })->orderBy($sort_by,$sort_type)
         ->paginate(100);
		   
		   
		   
		  // dd($covid_assessd_patients);
         
         $record_count = count($covid_assessd_patients);

         //dd($covid_assessd_patients);
       }else if(empty($query))
       {
		   
		   
		  // dd($province,$district,$zone, $division,$school);
      
        if((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))&&(empty($interviewddate))){
          
        //  $test = 'i am in first block';
        // dd($test);

          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->orderBy($sort_by,$sort_type)->paginate(100);

          $record_count = count($covid_assessd_patients);

        }elseif((!empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))&&(empty($interviewddate))){
          
         


        //  $test = 'i am in second block';
        //  dd($province,$district,$zone,$division,$school,$test);
			
         $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_province',$province)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($covid_assessd_patients);
        
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))&&(empty($interviewddate))){

        //  $test = 'i am in second new block';
         // dd($test);
       
         $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_province',$province)->where('patient_district',$district)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($covid_assessd_patients);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))&&(empty($interviewddate))){

       // $test = 'i am in third block';
        // dd($test);
			//dd($province,$district,$zone, $division,$school);
          
        $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_province',$province)->where('patient_district',$district)->where('patient_hospitaltype',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
       $record_count = count($covid_assessd_patients);
			//dd($covid_assessd_patients);
			
        
        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))&&(empty($interviewddate))){

         // $test = 'i am in four block';
         // dd($test);
         
         $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_province',$province)->where('patient_district',$district)->where('patient_hospitaltype',$zone)->where('patient_hospital',$division)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($covid_assessd_patients);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))&&(empty($interviewddate))){

          //$test = 'i am in four block';
          //dd($test);
         
         $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_province',$province)->where('patient_district',$district)->where('patient_hospitaltype',$zone)->where('patient_hospital',$division)->where('patient_department',$school)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($covid_assessd_patients);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))&&(!empty($interviewddate))){

         //$test = 'i am in  five block';
         // dd($test);
         
         $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_province',$province)->where('patient_district',$district)->where('patient_hospitaltype',$zone)->where('patient_hospital',$division)->where('patient_department',$school)->where('interviewed_at',$interviewddate)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($covid_assessd_patients);

        }elseif((!empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))&&(!empty($interviewddate))){

         // $test = 'i am in seventh block';
         // dd($test);

          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_hospitaltype',$zone)->where('patient_hospital',$division)->where('patient_department',$school)->where('interviewed_at',$interviewddate)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($covid_assessd_patients);
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))&&(!empty($interviewddate))){

         // $test = 'i am in eight block';
         // dd($test);

         $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_hospital',$division)->where('patient_department',$school)->where('interviewed_at',$interviewddate)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($covid_assessd_patients);

        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){

         // $test = 'i am in nineth block';
         // dd($test);

        $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_department',$school)->orderBy($sort_by,$sort_type)->paginate(100);
       $record_count = count($covid_assessd_patients);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(!empty($school))){
          

          //$test = 'i am in tenth block';
          //dd($division,$school,$test);

          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_province',$province)->where('patient_district',$district)->where('patient_hospitaltype',$zone)->where('patient_department',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($covid_assessd_patients);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

        // $test = 'i am in eleventh block test';
         // dd($test);


        $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_province',$province)->where('patient_district',$district)->where('patient_hospitaltype',$zone)->where('patient_hospital',$division)->orderBy($sort_by,$sort_type)->paginate(100);
        $record_count = count($covid_assessd_patients);
       
        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){
          
        // $test = 'i am in twelth block';
        // dd($test);
          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_department',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($covid_assessd_patients);
        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){
          
        //  $test = 'i am in thirth block';
         // dd($test);
          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_hospital',$division)->where('patient_department',$school)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($covid_assessd_patients);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

        // $test = 'i am in fourteenth block';
        // dd($test);
         
        $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_hospitaltype',$zone)->where('patient_hospital',$division)->where('patient_department',$school)->orderBy($sort_by,$sort_type)->paginate(100);
       $record_count = count($covid_assessd_patients);
        

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){
          
        //$test = 'i am in fourteenth block';
         //dd($test);
          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_district',$district)->where('patient_hospitaltype',$zone)->where('patient_hospital',$division)->where('patient_department',$school)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($covid_assessd_patients);
        }elseif((empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){
          
         // $test = 'i am fifteenth  block';
         // dd($test);
           $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_district',$district)->orderBy($sort_by,$sort_type)->paginate(100);
           $record_count = count($covid_assessd_patients);

          // dd($members);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){


         // $test = 'i am in sixeenth block';
         // dd($test);
          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_hospitaltype',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
         $record_count = count($covid_assessd_patients);

        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(empty($school))){

         // $test = 'i am in seventeeth block';
         //dd($test);
        
          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_hospital',$division)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($covid_assessd_patients);
        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

         // $test = 'i am in eighteenth block';
          //dd($test);
        
          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_district',$district)->where('patient_hospitaltype',$zone)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($covid_assessd_patients);
        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty(!$division))&&(empty($school))){

          //$test = 'i am in nineteenth block';
          //dd($test);

          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('patient_hospitaltype',$zone)->where('patient_hospital',$division)->orderBy($sort_by,$sort_type)->paginate(100);
          $record_count = count($covid_assessd_patients);
        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))&&(!empty($interviewddate))){

        // $test = 'i am in nineteenth block';

     // dd($interviewddate);



          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->where('interviewed_at',$interviewddate)->orderBy($sort_by,$sort_type)->paginate(100);


         //dd($covid_assessd_patients);

        
          $record_count = count($covid_assessd_patients);
        }else{

          $covid_assessd_patients = DB::table('covid_assessd_patients')->where('inRecycle',0)->orderBy($sort_by,$sort_type)->paginate(100);
       // $record_count = count($covid_assessd_patients);
          //dd($members);
        }

       

       }
    

     
      
        return view('schoolagent.covid19meter.patient_pagination_data',compact('covid_assessd_patients','record_count'))->render();
      }
    }


     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function patientinfo($id)
    {
         $covidpatient = DB::select('select * from covid_assessd_patients where id=? ',[$id]);
         
         $schools = DB::select('select * from schools');

         $districts = DB::select('select * from district ');

         $provinces = DB::select('select * from province ');

         $divisions = DB::select('select * from divisions ');

		
         $zones = DB::select('select * from zones');
		
		
	    $userdivid = Auth::user()->division;
        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;
		
		$usersid = Auth::user()->school;
        $getsname = DB::select('select * from schools where id=?',[$usersid]);
        $sname=$getsname[0]->placename;


        return view('schoolagent.covid19meter.patient_profile',compact('covidpatient','provinces','districts','zones','divisions','schools','divname','sname'));


   
    }


  
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpatientinfo($id)
    {
		
        $covidpatient = DB::select('select * from covid_assessd_patients  where id=?',[$id]);
        $userdivid = Auth::user()->division;

		
	    $usersid = Auth::user()->school; 
        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
		
		$divname = $getdivname[0]->placename;
		$getsname = DB::select('select * from schools where id=?',[$usersid]);
        $sname=$getsname[0]->placename;
      
      //  $designations = DB::select("select * from designations");
      //  $workplaces = DB::select("select * from workplaces");
        //['members'=> $members],['workplaces'=>$workplaces],['designations'=>$designations]

        return view('schoolagent.covid19meter.edit_patient',compact('covidpatient','divname','sname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function patientupdate(Request $request, $id)
    {
        //validating membership form fields
            $this-> validate($request,[
             'name' => 'required',
            'phone'=> 'required',
            'address'=>'required',
            'dob'=>'required',
             'profile_img' => 'image|max:2048',
              'patient_state'=>'required',
              'details_from'=>'required',
              'gender'=>'required',
        ]);

       
        $name = $request->get('name');
       $nic = $request->get('nic');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $dob = $request->get('dob');
        $patient_state = $request->get('patient_state');
        $details_from = $request->get('details_from');
         $gender = $request->get('gender');
        $timestamp = now();

         
      $userdivid = Auth::user()->division;

        $getdivname = DB::select('select * from divisions where id=?',[$userdivid]);
        $divname=$getdivname[0]->placename;
		
	  $usersid = Auth::user()->school;
      $getsname = DB::select('select * from schools where id=?',[$usersid]);
      $sname=$getsname[0]->placename;
    
    
    
    
     
    
    

         if(empty($request->file('profile_img'))){
       
       
          $covidpatientupdate = DB::update('update covid_assessd_patients  set name= ? ,nic = ? , phone = ? , address = ? , dob = ?, patient_state_onhospital= ? , details_from = ? , gender = ? ,updated_at = ? where id = ? ',
        [$name,$nic,$phone,$address,$dob,$patient_state,$details_from,$gender,$timestamp,$id]);

       if($covidpatientupdate) {
            $red = redirect('departmentadmin/covid19meter/patients')->with('success','Patient Data has been updated');
          

       }else {

         $red = redirect('departmentadmin/covid19meter/edit/',$id)->with('danger','Error update please try again');
       
       }
     return $red;
       
       
     }else {
         
       
         
         
           //geting data from  membership field data
       $image =$request->file('profile_img');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('covid19assesdpatients/profileimg'),$new_name);
      // $new_name="test.jpg";
         $covidpatientupdate = DB::update('update covid_assessd_patients  set name= ? ,nic = ? , phone = ? , address = ? , dob = ?, patient_state_onhospital= ? , details_from = ?,profile_img=? , gender = ? ,updated_at = ? where id = ? ',
        [$name,$nic,$phone,$address,$dob,$patient_state,$details_from,$new_name,$gender,$timestamp,$id]);
        

       if($contacts) {
        
            $red = redirect('departmentadmin/covid19meter/patients')->with('success','Patient Data has been updated');

             

       }else {

         $red = redirect('departmentadmin/covid19meter/edit/',$id)->with('danger','Error update please try again');
       }
         
         
         
       

          return $red;
        }


       



    }


}