<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DivisionController extends Controller
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
        $divisions = DB::select("select * from divisions");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_division',['divisions'=>$divisions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = DB::select("select * from province");
        $districts = DB::select("select * from district");
        $zones = DB::select("select * from zones");
        return view('dashboard.pages.add_division',compact('provinces','districts','zones'));
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
            'd_id'=>'required',
            'z_id'=>'required',
            'place_name' => 'required|unique:divisions,placename',

        ]);
        $p_id = $request->get('p_id');
        $d_id = $request->get('d_id');
        $z_id = $request->get('z_id');
        $placename = $request->get('place_name');
        $timestamp = now();
        $divisions = DB::insert('insert into divisions(placename,p_id,d_id,z_id,created_at) value(?,?,?,?,?)',[$placename,$p_id,$d_id,$z_id,$timestamp]);

          $countdivisions = DB::select('select * from divisions where z_id=?',[$z_id]);

          //district count

          $divcount = count($countdivisions);
          

          //updating division count in zone table
          $updatedivcount = DB::update('update zones set div_count=? where id=?',[$divcount,$z_id]);
          


          //updating zone count in province table 

         /* $oldzonecount = DB::select('select * from  province where id=?',[$p_id]);

          $newdivcountp=$olddivisioncount[0]->div_count+1;
          $updatezcountp = DB::update('update province set div_count=? where id=?',[$newdivcountp,$p_id]);*/
          
        

          $alldistricts = DB::select('select * from district');

          foreach($alldistricts as $onedistrict){
            
            $did = $onedistrict->id;

            $allzoneindistrict = DB::select('select * from zones where d_id=?',[$did]);
            
            $newdivcount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($allzoneindistrict as $onezoneindistrict){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $z_id= $onezoneindistrict->id;



            $getdivisioncountinfo=DB::select('select * from zones where id=?',[$z_id]);

            $divisioncountinfod = $getdivisioncountinfo[0]->div_count;




            $newdivcount=$newdivcount  + $divisioncountinfod;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update district set div_count=? where id=?',[$newdivcount,$did]);

           

          }

           $allprovinces = DB::select('select * from province');

          foreach($allprovinces as $oneprovince){
            
            $pid = $oneprovince->id;

            $alldistrictinprovince = DB::select('select * from district where p_id=?',[$pid]);
            
            $newdivisioncount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($alldistrictinprovince as $onedistrictinprovince){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $d_id= $onedistrictinprovince->id;



            $getdivisioncountinfo=DB::select('select * from district where id=?',[$d_id]);

            $divisioncountinfod = $getdivisioncountinfo[0]->div_count;




            $newdivisioncount=$newdivisioncount  + $divisioncountinfod;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update province set div_count=? where id=?',[$newdivisioncount,$pid]);

           

          }


        if($divisions){
            $red = redirect('admin/divisions/')->with('success','division succefully added');

        }else {
            $red = redirect('admin/divisions/add')->with('danger','Input data failed ');
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
         $zones = DB::select('select * from zones');

         $districts = DB::select('select * from district ');

         $provinces = DB::select('select * from province ');

         $divisions = DB::select('select * from divisions where id=?',[$id]);


        return view('dashboard.pages.edit_division',compact('districts','provinces','zones','divisions'));
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
            'd_id'=>'required',
            'z_id'=>'required',
            'place_name' => 'required',
           


        ]);
         $p_id = $request->get('p_id');
         $d_id = $request->get('d_id');
         $z_id = $request->get('z_id');
         $placename =  $request->get('place_name');
          $timestamp = now();
         $checkrecordexxists = DB::select('select * from divisions where  placename=? and p_id=? and d_id=? and z_id=?',[$placename,$p_id,$d_id,$z_id]);

        $rowcountnic= count($checkrecordexxists);

        if($rowcountnic==0){
			   $divisions = DB::update('update divisions set placename= ?,p_id=? ,d_id=? ,z_id=?,  updated_at = ? where id = ? ',
        [$placename,$p_id,$d_id,$z_id,$timestamp,$id]);



       //updation division counts in zone
                 $allzones = DB::select('select * from zone ');

          foreach($allzones as $onezone){


            $zid=$onezone->id;

            $getdivisioncountinfo=DB::select('select * from divisions where z_id=?',[$zid]);


            $newdivisioncount=count($getdivisioncountinfo);


            DB::update('update zones set div_count=? where id=?',[$newzonecount,$zid]);
            



          }

            $alldistricts = DB::select('select * from district');

          foreach($alldistricts as $onedistrict){
            
            $did = $onedistrict->id;

            $allzoneindistrict = DB::select('select * from zones where d_id=?',[$did]);
            
            $newdivcount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($allzoneindistrict as $onezoneindistrict){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $z_id= $onezoneindistrict->id;



            $getdivisioncountinfo=DB::select('select * from zones where id=?',[$z_id]);

            $divisioncountinfod = $getdivisioncountinfo[0]->div_count;




            $newdivcount=$newdivcount  + $divisioncountinfod;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update district set div_count=? where id=?',[$newzonecount,$did]);

           

          }

           $allprovinces = DB::select('select * from province');

          foreach($allprovinces as $oneprovince){
            
            $pid = $oneprovince->id;

            $alldistrictinprovince = DB::select('select * from district where p_id=?',[$pid]);
            
            $newdivisioncount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($alldistrictinprovince as $onedistrictinprovince){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $d_id= $onedistrictinprovince->id;
             


            $getdivisioncountinfo=DB::select('select * from district where id=?',[$d_id]);

            $divisioncountinfod = $getdivisioncountinfo[0]->div_count;




            $newdivisioncount=$newdivisioncount  + $divisioncountinfod;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update province set div_count=? where id=?',[$newdivisioncount,$pid]);

           

          }



       if($divisions) {
            $red = redirect('admin/divisions')->with('success','Data has been updated');



       }else {

         $red = redirect('divisions/edit/',$id)->with('danger','Error update please try again');
       }
			
		}else{
			  $red = redirect('admin/divisions')->with('danger','Error Record Already Exists');
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

          $countschools = DB::select('select * from schools where div_id=?',[$id]);
         //district count
         
          $scount = count($countschools);

          if($scount==0){

         $getdivisioninfo=DB::select('select * from divisions where id=?',[$id]);

         $z_id =  $getdivisioninfo[0]->z_id;
         $p_id =  $getdivisioninfo[0]->p_id;
         $d_id = $getdivisioninfo[0]->d_id;

         //update district table zone count 

         //getoldzonecountdistrict

         $olddivisioncount = DB::select('select * from divisions where z_id=?',[$z_id]);
         

         $olddivisioncountd = count($olddivisioncount);

         $newdivisioncount = $olddivisioncountd;

         //update new zone count district  

         DB::update('update zones set div_count=? where id=?',[$newdivisioncount,$z_id]);


        //getoldzonecountdistrict

         $olddivisioncountdis = DB::select('select * from divisions where d_id=?',[$d_id]);
         

         $olddivisioncountdis =count($olddivisioncountdis);

         $newdivisioncountdis = $olddivisioncountdis;

         //update new zone count district  

         DB::update('update district set div_count=? where id=?',[$newdivisioncountdis,$d_id]);


          //getoldzonecountdistrict

         $olddivisioncountpro = DB::select('select * from divisions where p_id=?',[$p_id]);
         

         $olddivisioncountpro =count($olddivisioncountpro);

         $newdivisioncountpro = $olddivisioncountpro;

         //update new zone count district  

         DB::update('update province set div_count=? where id=?',[$newdivisioncountpro,$p_id]);




         

         $news = DB::delete('delete from divisions where id =?',[$id]);


         $red = redirect('admin/divisions')->with('success','division Deleted Successfully');
     }else{
         
         $red = redirect('admin/division')->with('danger','Selected Division is not empty');

     }
         
         return $red;
    }

     public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

           $ids = $request->get('ids');

          // dd($ids);

         $divisions=DB::select('select *  from divisions where id in ('.implode(",",$ids).')');


        foreach ($divisions as  $division) {
          
            $divid = $division->id;

          $countschools = DB::select('select * from schools where div_id=?',[$divid]);
         //district count
         
          $scount = count($countschools);


      

          // dd($scount);

           $pid = $division->p_id;
           $did = $division->d_id;

           $zid = $division->z_id;

          // dd($dcount);

            if($scount==0){



          $news = DB::delete('delete from divisions where id =?',[$divid]);

         // $countzones = DB::select('select * from zones where d_id=?',[$did]);

          //district count

          //$zcount = count($countzones);

          //dd($dcount);

           //update district table zone count 

         //getoldzonecountdistrict

         $olddivisioncount = DB::select('select * from divisions where id=?',[$divid]);
         
          $newdivisioncountzone  = count($olddivisioncount);

         //$olddivisioncountzone = $olddivisioncount->div_count;

         //$newdivisioncountzone = $olddivisioncountzone-1;

         //update new school count division 

         DB::update('update zones set div_count=? where id=?',[$newdivisioncountzone,$zid]);


      


          //getoldschoolcountzone

         $olddivisioncountdis = DB::select('select * from district where id=?',[$did]);
           

           $newdivisioncountdis =count($olddivisioncountdis);

        // $olddivisioncountdis =$olddivisioncountdis[0]->div_count;

        // $newdivisioncountdis = $olddivisioncountdis-1;

         //update new zone count district  

         DB::update('update district set div_count=? where id=?',[$newdivisioncountdis,$did]);





          //getoldzonecountdistrict

         $olddivisioncountpro = DB::select('select * from province where id=?',[$pid]);
         

         $olddivisioncountpro =$olddivisioncountpro[0]->div_count;

         $newdivisioncountpro = $olddivisioncountpro-1;

         //update new zone count district  

         DB::update('update province set div_count=? where id=?',[$newdivisioncountpro,$pid]);

          

     }
          
        }

        
        return redirect('admin/divisions')->with('success','Divisions are deleted Succesfully Except Divisions are not empty');

    }
}
