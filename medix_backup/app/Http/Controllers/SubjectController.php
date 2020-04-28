<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
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
    public function index()
    {
        $subjects = DB::select("select * from subjects");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_subjects',['subjects'=>$subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.add_subject');
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
            'sub_name' => 'required|unique:subjects,subname',

        ]);

        $subname = $request->get('sub_name');
        $timestamp = now();
         $subjects = DB::insert('insert into subjects(subname,created_at) value(?,?)',[$subname,$timestamp]);



        if($subjects){
            $red = redirect('admin/hospitaldesignations/')->with('success','Designation succefully added');

        }else {
            $red = redirect('admin/hospitaldesignations/add')->with('danger','Input data failed ');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $subjects = DB::select('select * from subjects where id=?',[$id]);

        return view('dashboard.pages.edit_subject',['subjects'=> $subjects]);
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
         $this-> validate($request,[
            'sub_name' => 'required',
           


        ]);

         $subname =  $request->get('sub_name');
          $timestamp = now();
         $checkrecordexxists = DB::select('select * from subjects where  subname=?',[$subname]);

        $rowcountnic= count($checkrecordexxists);

        if($rowcountnic==0){
			   $subjects = DB::update('update subjects set subname= ? ,  updated_at = ? where id = ? ',
        [$subname,$timestamp,$id]);

       if($subjects) {
            $red = redirect('admin/hospitaldesignations')->with('success','Data has been updated');



       }else {

         $red = redirect('hospitaldesignations/edit/',$id)->with('danger','Error update please try again');
       }
			
		}else{

	     $red = redirect('admin/hospitaldesignations')->with('danger','Error Record Already Exists');
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

        $countteachers = DB::select('select * from users where sub_code=?',[$id]);

          //district count

          $tcount = count($countteachers);

        if($tcount==0){

         $subjects = DB::delete('delete from subjects where id =?',[$id]);
         $red = redirect('admin/hospitaldesignations');
        }else{

          $red = redirect('admin/hospitaldesignations')->with('danger','Error Designation is not empty ');
        }
        
         return $red;
    }

     public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');

        $subjects=DB::select('select *  from subjects where id in ('.implode(",",$ids).')');

        foreach ($subjects as  $subject) {
          
           $subid = $subject->id;

           $subcount=$subject->t_count;

            if($subcount==0){

         $subjects = DB::delete('delete from subjects where id =?',[$subid]);
         $red = redirect('admin/hospitaldesignations');
        }
           


          
        }
      
        return redirect('admin/hospitaldesignations')->with('success','Selected Designations Deleted Successfully');

    }
}
