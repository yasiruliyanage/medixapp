<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProvinceController extends Controller
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
        $provinces = DB::select("select * from province");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_province',['provinces'=>$provinces]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.add_province');
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
            'place_name' => 'required|unique:province,placename',

        ]);

        $placename = $request->get('place_name');
        $timestamp = now();
         $news = DB::insert('insert into province(placename,created_at) value(?,?)',[$placename,$timestamp]);



        if($news){
            $red = redirect('admin/provinces/')->with('success','workplace succefully added');

        }else {
            $red = redirect('admin/provinces/add')->with('danger','Input data failed ');
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
         $provinces = DB::select('select * from province where id=?',[$id]);

        return view('dashboard.pages.edit_province',['provinces'=> $provinces]);
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
            'place_name' => 'required',
           


        ]);

         $placename =  $request->get('place_name');
          $timestamp = now();
         $checkrecordexxists = DB::select('select * from province where  placename=?',[$placename]);

        $rowcountnic= count($checkrecordexxists);

        if($rowcountnic==0){
			   $workplaces = DB::update('update province set placename= ? ,  updated_at = ? where id = ? ',
        [$placename,$timestamp,$id]);

       if($workplaces) {
            $red = redirect('admin/provinces')->with('success','Data has been updated');



       }else {

         $red = redirect('provinces/edit/',$id)->with('danger','Error update please try again');
       }
			
		}else{

	     $red = redirect('admin/provinces')->with('danger','Error Record Already Exists');
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

        $countdistricts = DB::select('select * from district where p_id=?',[$id]);

          //district count

          $dcount = count($countdistricts);

        if($dcount==0){

         $news = DB::delete('delete from province where id =?',[$id]);
         $red = redirect('admin/districts');
        }else{

          $red = redirect('admin/districts')->with('danger','Error Your Province is not empty');
        }
        
         return $red;
    }

     public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');

        $provinces=DB::select('select *  from province where id in ('.implode(",",$ids).')');

        foreach ($provinces as  $province) {
          
           $pid = $province->id;

           $dcount=$province->d_count;

            if($dcount==0){

         $news = DB::delete('delete from province where id =?',[$pid]);
         $red = redirect('admin/provinces');
        }
           


          
        }
      
        return redirect('admin/provinces')->with('success','Selected Provices Deleted Successfully');

    }
}
