<?php
namespace App\Http\Controllers;

use App\Sms;
use SoapClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class QuestionController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
        
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
         $covid_questions = DB::table("covid_questions")->where('inRecycle',0)->paginate(100);
        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
   $record_count = count($covid_questions);
        return view('dashboard.pages.covid19application.manage_questions',compact('covid_questions','record_count'));
    }

      public function decessionindex()
    {
        
         $covid_decessions = DB::table("covid_decession_factors")->where('inRecycle',0)->paginate(100);
        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");
   $record_count = count($covid_decessions);
        return view('dashboard.pages.covid19application.manage_condition_percentages',compact('covid_decessions','record_count'));
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
         return view('dashboard.pages.covid19application.add_questions');
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
       
        


       

        return view('dashboard.pages.covid19application.question_pagination_data',compact('covid_questions','record_count'))->render();
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
       
        


       

        return view('dashboard.pages.covid19application.question_pagination_trash_data',compact('covid_questions','record_count'))->render();
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

      
        


       

        return view('dashboard.pages.covid19application.decession_pagination_data',compact('covid_decessions','record_count'))->render();
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
            'question_si' => 'required',
            'question_en'=> 'required',
            'question_ta'=> 'required',


        ]);

     
       //getting data from  membership field data
      

       $question_si = $request->get('question_si');
       $question_en = $request->get('question_en');
        $question_ta = $request->get('question_ta');
       
    

     
       $timestamp = now();
      
		     

      
        $contacts = DB::insert('insert into covid_questions(question_si,question_en,question_ta,created_at) value(?,?,?,?)',[$question_si,$question_en,$question_ta,$timestamp]);
    


        if($contacts){
               
            $red = redirect('admin/covid19application/add')->with('success','Question succefully added');

        }else {
            $red = redirect('covid19application/add')->with('danger','Input data failed ');
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
        $covid_questions = DB::select('select * from covid_questions where id=? ',[$id]);

        // $designations = DB::select("select * from designations");
        // $workplaces = DB::select("select * from workplaces");
        return view('dashboard.pages.covid19application.view_question',compact('covid_questions'));
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

        return view('dashboard.pages.covid19application.edit_questions',compact('covid_questions'));
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
            $red = redirect('admin/covid19application')->with('success','Question has been updated');
          

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

        return view('dashboard.pages.covid19application.edit_decession',compact('covid_decession'));
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
            $red = redirect('admin/covid19application/decessions')->with('success','Decession has been updated');
          

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
        $red = redirect('admin/covid19application');
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
        return redirect('admin/covid19application');

    }
	
	    public function recycleAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  covid_questions set inRecycle = 1  where id in ('.implode(",",$ids).')');
        return redirect('admin/covid19application/deletedquestions');

    }

       public function restoreall(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  covid_questions set inRecycle = 0  where id in ('.implode(",",$ids).')');
        return redirect('admin/covid19application');

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
        $red = redirect('admin/covid19application/deletedquestions');
        return $red;
    }

     public function restore($id)
    {
        $contacts = DB::update('update covid_questions set inRecycle = 0  where id =?',[$id]);
        $red = redirect('admin/covid19application/');
        return $red;
    }


      public function showTrash()
    {
        $covid_questions = DB::table("covid_questions")->where('inRecycle',1)->paginate(100);
          $record_count = count($covid_questions);
        return view('dashboard.pages.covid19application.manage_questions_trash',compact('covid_questions','record_count'));
    }
}
