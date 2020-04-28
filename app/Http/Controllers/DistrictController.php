<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DistrictController extends Controller
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
        $districts = DB::select("select * from district");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_district',['districts'=>$districts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = DB::select("select * from province");
        return view('dashboard.pages.add_district',compact('provinces'));
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
            'p_id'=>'required',
            'place_name' => 'required|unique:district,placename',

        ]);
        $p_id = $request->get('p_id');
        $placename = $request->get('place_name');
        $timestamp = now();
         $districts = DB::insert('insert into district(placename,p_id,created_at) value(?,?,?)',[$placename,$p_id,$timestamp]);
          
          $countdistricts = DB::select('select * from district where p_id=?',[$p_id]);

          //district count

          $dcount = count($countdistricts);

          $updatedcount = DB::update('update province set d_count=? where id=?',[$dcount,$p_id]);

          
        if($districts){


            $red = redirect('admin/districts/')->with('success','District succefully added');

        }else {
            $red = redirect('admin/districts/add')->with('danger','Input data failed ');
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
          $provinces = DB::select("select * from province");
         $districts = DB::select('select * from district where id=?',[$id]);

        return view('dashboard.pages.edit_district',compact('provinces','districts'));
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
            'p_id'=>'required',
            'place_name' => 'required',
           


        ]);
         $p_id = $request->get('p_id');
         $placename =  $request->get('place_name');
          $timestamp = now();
         $checkrecordexxists = DB::select('select * from district where  placename=?',[$placename]);

        $rowcountnic= count($checkrecordexxists);

        if($rowcountnic==0){
			   $districts = DB::update('update district set placename= ?,p_id=? ,  updated_at = ? where id = ? ',
        [$placename,$p_id,$timestamp,$id]);

       if($districts) {
            $red = redirect('admin/districts')->with('success','Data has been updated');



       }else {

         $red = redirect('districts/edit/',$id)->with('danger','Error update please try again');
       }
			
		}else{
			  $red = redirect('admin/districts')->with('danger','Error Record Already Exists');
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

         $getpid=DB::select('select * from district where id=?',[$id]);

         $p_id=$getpid[0]->p_id;
         $countzones = DB::select('select * from zones where d_id=?',[$id]);
         //district count
         
          $zcount = count($countzones);

         

        if($zcount==0){

         $news = DB::delete('delete from district where id =?',[$id]);



         $countdistricts = DB::select('select * from district where p_id=?',[$p_id]);

          //district count

          $dcount = count($countdistricts);
          $updatedcount = DB::update('update province set d_count=? where id=?',[$dcount,$p_id]);
         $red = redirect('admin/districts');
        }else{

          $red = redirect('admin/districts')->with('danger','Error Your District is not empty');
        }
        
         return $red;
    }

     public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);



        $ids = $request->get('ids');

        $districts=DB::select('select *  from district where id in ('.implode(",",$ids).')');

        foreach ($districts as  $district) {
          
            $did = $district->id;

           $dcount=$district->z_count;

           $pid = $district->p_id;

          // dd($dcount);

            if($dcount==0){



          $news = DB::delete('delete from district where id =?',[$did]);

          $countdistricts = DB::select('select * from district where p_id=?',[$pid]);

          //district count

          $dcount = count($countdistricts);

          //dd($dcount);

          $updatedcount = update('update province set d_count=? where id=?',[$dcount,$pid]);

          

     }
          
        }
       
        return redirect('admin/districts')->with('success','Selecte District Deleted Successfully Except Districts are not Empty');
     }


}
