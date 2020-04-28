<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
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
        $schools = DB::select("select * from schools");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_school',['schools'=>$schools]);
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
        $divisions = DB::select("select * from divisions");
        return view('dashboard.pages.add_school',compact('provinces','districts','zones','divisions'));
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
            'div_id'=>'required',
            'place_name' => 'required|unique:schools,placename',

        ]);
        $p_id = $request->get('p_id');
        $d_id = $request->get('d_id');
        $z_id = $request->get('z_id');
        $div_id = $request->get('div_id');
        $placename = $request->get('place_name');
        $timestamp = now();
         $schools = DB::insert('insert into schools(placename,p_id,d_id,z_id,div_id,created_at) value(?,?,?,?,?,?)',[$placename,$p_id,$d_id,$z_id,$div_id,$timestamp]);
        
         $countschools = DB::select('select * from schools where div_id=?',[$div_id]);

          //district count

          $scount = count($countschools);
          

          //updating school count in division table
          $updatescount = DB::update('update divisions set s_count=? where id=?',[$scount,$div_id]);

            $allzones = DB::select('select * from zones');

          foreach($allzones as $onezone){
            
            $zid = $onezone->id;

            $alldivisioninzone = DB::select('select * from divisions where z_id=?',[$zid]);
            
            $newscount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($alldivisioninzone as $onedivisioninzone){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $div_id= $onedivisioninzone->id;



            $getscountinfo=DB::select('select * from divisions where id=?',[$div_id]);

            $scountinfodiv = $getscountinfo[0]->s_count;




            $newscount=$newscount  + $scountinfodiv;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update zones set s_count=? where id=?',[$newscount,$zid]);

           

          }
          
           $alldistricts = DB::select('select * from district');

          foreach($alldistricts as $onedistrict){
            
            $did = $onedistrict->id;

            $allzonesindistrict = DB::select('select * from zones where d_id=?',[$did]);
            
            $newscount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($allzonesindistrict as $onezoneindistrict){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $z_id= $onezoneindistrict->id;



            $getscountinfo=DB::select('select * from zones where id=?',[$z_id]);

            $scountinfoz = $getscountinfo[0]->s_count;




            $newscount=$newscount  + $scountinfoz;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update district set s_count=? where id=?',[$newscount,$did]);

           

          }


           $allprovinces = DB::select('select * from province');

          foreach($allprovinces as $oneprovince){
            
            $pid = $oneprovince->id;

            $alldistrictinprovince = DB::select('select * from district where p_id=?',[$pid]);
            
            $newscount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($alldistrictinprovince as $onedistrictinprovince){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $d_id= $onedistrictinprovince->id;



            $getscountinfo=DB::select('select * from district where id=?',[$d_id]);

            $scountinfod = $getscountinfo[0]->s_count;




            $newscount=$newscount  + $scountinfod;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update province set s_count=? where id=?',[$newscount,$pid]);

           

          }


        if($schools){
            $red = redirect('admin/departments/')->with('success','Department succefully added');

        }else {
            $red = redirect('admin/departments/add')->with('danger','Input data failed ');
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
         $schools = DB::select('select * from schools where id=?',[$id]);

         $districts = DB::select('select * from district ');

         $provinces = DB::select('select * from province ');

          $divisions = DB::select('select * from divisions ');
           $zones = DB::select('select * from zones ');

        return view('dashboard.pages.edit_school',compact('districts','provinces','zones','divisions','schools','zones'));
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
             'div_id'=>'required',
            'place_name' => 'required',
           


        ]);
         $p_id = $request->get('p_id');
         $d_id = $request->get('d_id');
         $z_id = $request->get('z_id');
         $div_id = $request->get('div_id');
         $placename =  $request->get('place_name');
         $timestamp = now();
         $checkrecordexxists = DB::select('select * from schools where  placename=? and p_id=? and d_id=? and z_id=? and div_id=?',[$placename,$p_id,$d_id,$z_id,$div_id]);

        $rowcountnic= count($checkrecordexxists);

        if($rowcountnic==0){
			   $school = DB::update('update schools set placename= ?,p_id=? ,d_id=? ,z_id=?,div_id=?, updated_at = ? where id = ? ',
        [$placename,$p_id,$d_id,$z_id,$div_id,$timestamp,$id]);


        //updation scounts in division
                 $alldivisions = DB::select('select * from divisions');

          foreach($alldivisions as $onedivision){


            $divid=$onedivision->id;

            $getscountinfo=DB::select('select * from schools where div_id=?',[$divid]);


            $newscount=count($getscountinfo);


            DB::update('update divisions  set s_count=? where id=?',[$newscount,$divid]);
            



          }

             $allzones = DB::select('select * from zones');

          foreach($allzones as $onezone){
            
            $zid = $onezone->id;

            $alldivisioninzone = DB::select('select * from divisions where z_id=?',[$zid]);
            
            $newscount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($alldivisioninzone as $onedivisioninzone){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $div_id= $onedivisioninzone->id;



            $getscountinfo=DB::select('select * from divisions where id=?',[$div_id]);

            $scountinfodiv = $getscountinfo[0]->s_count;




            $newscount=$newscount  + $scountinfodiv;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update zones set s_count=? where id=?',[$newscount,$zid]);

           

          }
          
           $alldistricts = DB::select('select * from district');

          foreach($alldistricts as $onedistrict){
            
            $did = $onedistrict->id;

            $allzonesindistrict = DB::select('select * from zones where d_id=?',[$did]);
            
            $newscount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($allzonesindistrict as $onezoneindistrict){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $z_id= $onezoneindistrict->id;



            $getscountinfo=DB::select('select * from zones where id=?',[$z_id]);

            $scountinfoz = $getscountinfo[0]->s_count;




            $newscount=$newscount  + $scountinfoz;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update district set s_count=? where id=?',[$newscount,$did]);

           

          }


           $allprovinces = DB::select('select * from province');

          foreach($allprovinces as $oneprovince){
            
            $pid = $oneprovince->id;

            $alldistrictinprovince = DB::select('select * from district where p_id=?',[$pid]);
            
            $newscount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($alldistrictinprovince as $onedistrictinprovince){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $d_id= $onedistrictinprovince->id;



            $getscountinfo=DB::select('select * from district where id=?',[$d_id]);

            $scountinfod = $getscountinfo[0]->s_count;




            $newscount=$newscount  + $scountinfod;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update province set s_count=? where id=?',[$newscount,$pid]);

           

          }






       if($school) {
            $red = redirect('admin/departments')->with('success','Data has been updated');



       }else {

         $red = redirect('departments/edit/',$id)->with('danger','Error update please try again');
       }
			
		}else{
			  $red = redirect('admin/departments')->with('danger','Error Record Already Exists');
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


        $countteachers = DB::select('select * from users where school=?',[$id]);
         //district count
         
          $tcount = count($countteachers);

          if($tcount==0){

         $getschoolinfo=DB::select('select * from schools where id=?',[$id]);

         $z_id =  $getschoolinfo[0]->z_id;
         $p_id =  $getschoolinfo[0]->p_id;
         $d_id = $getschoolinfo[0]->d_id;
         $div_id = $getschoolinfo[0]->div_id;

         //update district table zone count 

         //getoldzonecountdistrict

         $oldschoolcount = DB::select('select * from schools where id=?',[$div_id]);
         

         $oldschoolcountdiv = $oldschoolcount[0]->s_count;

         $newschoolcount = $oldschoolcountdiv-1;

         //update new school count division 

         DB::update('update divisions set s_count=? where id=?',[$newschoolcount,$div_id]);


        //getoldschoolcountzone

         $oldschoolcountzone = DB::select('select * from zone where id=?',[$z_id]);
         

         $oldschoolcountzone =$oldschoolcountzone[0]->s_count;

         $newschoolcountzone = $oldschoolcountzone-1;

         //update new zone count district  

         DB::update('update zones set s_count=? where id=?',[$newschoolcountzone,$z_id]);


          //getoldschoolcountzone

         $oldschoolcountdis = DB::select('select * from district where id=?',[$d_id]);
         

         $oldschoolcountdis =$oldschoolcountdis[0]->s_count;

         $newschoolcountdis = $oldschoolcountdis-1;

         //update new zone count district  

         DB::update('update district set s_count=? where id=?',[$newschoolcountdis,$d_id]);





          //getoldzonecountdistrict

         $oldschoolcountpro = DB::select('select * from province where id=?',[$p_id]);
         

         $oldschoolcountpro =$oldschoolcountpro[0]->s_count;

         $newschoolcountpro = $oldschoolcountpro-1;

         //update new zone count district  

         DB::update('update province set s_count=? where id=?',[$newschoolcountpro,$p_id]);




         

         $news = DB::delete('delete from schools where id =?',[$id]);


         $red = redirect('admin/departments')->with('success','Department Deleted Successfully');
     }else{
         
         $red = redirect('admin/departments')->with('danger','Selected Department is not empty');

     }
         return $red;
    }

     public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);



        $ids = $request->get('ids');

          $schools=DB::select('select *  from schools where id in ('.implode(",",$ids).')');

        foreach ($schools as  $school) {
          
            $sid = $school->id;

           $tcount=$school->t_count;

           $pid = $school->p_id;
           $did = $school->d_id;
           $divid = $school->div_id;

           $zid = $school->z_id;

          // dd($dcount);

            if($tcount==0){



          $news = DB::delete('delete from schools where id =?',[$sid]);

         // $countzones = DB::select('select * from zones where d_id=?',[$did]);

          //district count

          //$zcount = count($countzones);

          //dd($dcount);

           //update district table zone count 

         //getoldzonecountdistrict

         //update district table zone count 

         //getoldzonecountdistrict

         $oldschoolcount = DB::select('select * from schools where id=?',[$divid]);
         

         $oldschoolcountdiv = count($oldschoolcount);

         $newschoolcount = $oldschoolcountdiv;

         //update new school count division 

         DB::update('update divisions set s_count=? where id=?',[$newschoolcount,$divid]);


        //getoldschoolcountzone

         $oldschoolcountzone = DB::select('select * from zones where id=?',[$zid]);
         

         $oldschoolcountzone =count($oldschoolcountzone);

         $newschoolcountzone = $oldschoolcountzone;

         //update new zone count district  

         DB::update('update zones set s_count=? where id=?',[$newschoolcountzone,$zid]);


          //getoldschoolcountzone

         $oldschoolcountdis = DB::select('select * from district where id=?',[$did]);
         

         $oldschoolcountdis =count($oldschoolcountdis);

         $newschoolcountdis = $oldschoolcountdis;

         //update new zone count district  

         DB::update('update district set s_count=? where id=?',[$newschoolcountdis,$did]);





          //getoldzonecountdistrict

         $oldschoolcountpro = DB::select('select * from province where id=?',[$pid]);
         

         $oldschoolcountpro =count($oldschoolcountpro);

         $newschoolcountpro = $oldschoolcountpro;

         //update new zone count district  

         DB::update('update province set s_count=? where id=?',[$newschoolcountpro,$pid]);

          

     }
          
        }
        //$dbs = DB::delete('delete from schools where id in ('.implode(",",$ids).')');
        return redirect('admin/departments')->with('success','Selected Schools deleted successfully except schools are not empty');

    }
}
