<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DesignationsController extends Controller
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
         $designations = DB::select("select * from designations ");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_designations',['designations'=>$designations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.add_designation');
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
            'designation_name' => 'required|unique:designations,designation',

        ]);

        $designation = $request->get('designation_name');
        $timestamp = now();
         $designations = DB::insert('insert into designations(designation,created_at) value(?,?)',[$designation,$timestamp]);



        if($designations){
            $red = redirect('admin/designations/')->with('success','workplace succefully added');

        }else {
            $red = redirect('admin/designations/add')->with('danger','Input data failed ');
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
          $designations = DB::select('select * from designations where id=?',[$id]);

        return view('dashboard.pages.edit_designation',['designations'=> $designations]);
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
            'designation_name' => 'required',

        ]);

         $designation =  $request->get('designation_name');
          $timestamp = now();
		
		  $checkrecordexxists = DB::select('select * from designations where  designation=?',[$designation]);

        $rowcountnic= count($checkrecordexxists);

        if($rowcountnic==0){
		    $designations = DB::update('update designations set designation= ? ,  updated_at = ? where id = ? ',
        [$designation,$timestamp,$id]);
 
       if($designations) {
		   
            $red = redirect('admin/designations')->with('success','Data has been updated');
           


       }else {

         $red = redirect('designations/edit/',$id)->with('danger','Error update please try again');
       }
			
		}else{
		  
	      $red = redirect('admin/designations')->with('danger','designation name  Already Exists');
		//$red = redirect('designations/edit/',$id)->with('danger','Error designation name  exists');
		
			
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
         $designations = DB::delete('delete from designations where id =?',[$id]);
         $red = redirect('admin/designations');
         return $red;
    }

     public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::delete('delete from designations where id in ('.implode(",",$ids).')');
        return redirect('admin/designations');

    }
}
