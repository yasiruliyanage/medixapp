<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ZoneController extends Controller
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
        $zones = DB::select("select * from zones");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_zone',['zones'=>$zones]);
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
        return view('dashboard.pages.add_zone',compact('provinces','districts'));
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
            'place_name' => 'required|unique:zones,placename',

        ]);
        $p_id = $request->get('p_id');
        $d_id = $request->get('d_id');
        $placename = $request->get('place_name');
        $timestamp = now();
         $zones = DB::insert('insert into zones(placename,p_id,d_id,created_at) value(?,?,?,?)',[$placename,$p_id,$d_id,$timestamp]);
         
          
          $countzones = DB::select('select * from zones where d_id=?',[$d_id]);

          //district count

          $zcount = count($countzones);
          

          //updating zone count in district table
          $updatezcount = DB::update('update district set z_count=? where id=?',[$zcount,$d_id]);

          //updating zone count in province table 

          $oldzonecount = DB::select('select * from  province where id=?',[$p_id]);

          $newzcountp=$oldzonecount[0]->z_count+1;
          $updatezcountp = DB::update('update province set z_count=? where id=?',[$newzcountp,$p_id]);

        if($zones){
            $red = redirect('admin/zones/')->with('success','zone succefully added');

        }else {
            $red = redirect('admin/zones/add')->with('danger','Input data failed ');
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
         $zones = DB::select('select * from zones where id=?',[$id]);

         $districts = DB::select('select * from district ');

         $provinces = DB::select('select * from province ');

        return view('dashboard.pages.edit_zone',compact('districts','provinces','zones'));
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
            'place_name' => 'required',
           


        ]);
         $p_id = $request->get('p_id');
         $d_id = $request->get('d_id');
         $placename =  $request->get('place_name');
          $timestamp = now();
         $checkrecordexxists = DB::select('select * from zones where  placename=? and p_id=? and d_id=?',[$placename,$p_id,$d_id]);

        $rowcountnic= count($checkrecordexxists);

        if($rowcountnic==0){

          /* $getzoneinfo = DB::select('select * from zones where id=?',[$id]);



           $oldzonename = $getzoneinfo[0]->placename;

           $olddid = $getzoneinfo[0]->d_id;

           $oldpid=$getzoneinfo[0]->p_id;



           if($olddid!=$d_id&&$oldpid!=$p_id){
           


           }elseif($olddid!=$d_id&&$oldpid==$p_id){


           }else{


           }*/


	    $zones = DB::update('update zones set placename= ?,p_id=? ,d_id=? ,  updated_at = ? where id = ? ',
        [$placename,$p_id,$d_id,$timestamp,$id]);

       if($zones) {

          // $countzones = DB::select('select * from zones where d_id=?',[$d_id]);

          //district count

          //$zcount = count($countzones);
          

          //updating zone count in district table
          //$updatezcount = DB::update('update district set z_count=? where id=?',[$zcount,$d_id]);

          //updating zone count in province table 

          /*$oldzonecount = DB::select('select * from  province where id=?',[$p_id]);

          $newzcountp=$oldzonecount[0]->z_count+1;
          $updatezcountp = DB::update('update province set z_count=? where id=?',[$newzcountp,$p_id]);*/
          

          $alldistricts = DB::select('select * from district ');

          foreach($alldistricts as $district){


            $did=$district->id;

            $getzonecountinfo=DB::select('select * from zones where d_id=?',[$did]);


            $newzonecount=count($getzonecountinfo);


            DB::update('update district set z_count=? where id=?',[$newzonecount,$did]);
            



          }

          $allprovinces = DB::select('select * from province');

          foreach($allprovinces as $oneprovince){
            
            $pid = $oneprovince->id;

            $alldistrictinprovince = DB::select('select * from district where p_id=?',[$pid]);
            
            $newzonecount = 0;

            //set zone count to zero first

            //DB::update('update province set z_count=0 where id=?',[$pid]);
            foreach($alldistrictinprovince as $onedistrictinprovince){

           // $getoldzcountinfo = DB::select('select * from province where id=?',[$pid]);

            // $oldzcount=count($getzonecountinfo);

            $d_id= $onedistrictinprovince->id;



            $getzonecountinfo=DB::select('select * from district where id=?',[$d_id]);

            $zonecountinfod = $getzonecountinfo[0]->z_count;




            $newzonecount=$newzonecount  + $zonecountinfod;
            
            

            }
          // dd($newzonecount,$pid);
           DB::update('update province set z_count=? where id=?',[$newzonecount,$pid]);

           

          }




          $red = redirect('admin/zones')->with('success','Data has been updated');



       }else {

         $red = redirect('zones/edit/',$id)->with('danger','Error update please try again');
       }
			
		}else{
			  $red = redirect('admin/zones')->with('danger','Error Record Already Exists');
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

         $countdivisions = DB::select('select * from divisions where z_id=?',[$id]);
         //district count
         
          $divcount = count($countdivisions);

          if($divcount==0){

         $getzoneinfo=DB::select('select * from zones where id=?',[$id]);

         $p_id =  $getzoneinfo[0]->p_id;
         $d_id = $getzoneinfo[0]->d_id;

         //update district table zone count 

         //getoldzonecountdistrict

         $oldzonecount = DB::select('select * from district where id=?',[$d_id]);
         

         $oldzonecountd = $oldzonecount[0]->z_count;

         $newzonecount = $oldzonecountd-1;

         //update new zone count district  

         DB::update('update district set z_count=? where id=?',[$newzonecount,$d_id]);


        //getoldzonecountdistrict

         $oldzonecountpro = DB::select('select * from province where id=?',[$p_id]);
         

         $oldzonecountp =$oldzonecountpro[0]->z_count;

         $newzonecountpro = $oldzonecountp-1;

         //update new zone count district  

         DB::update('update province set z_count=? where id=?',[$newzonecountpro,$d_id]);




         

         $news = DB::delete('delete from zones where id =?',[$id]);


         $red = redirect('admin/zones')->with('success','Zone Deleted Successfully');
     }else{
         
         $red = redirect('admin/zones')->with('danger','Selected Zone is not empty');

     }

         return $red;
    }

     public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);




        $ids = $request->get('ids');



        $zones=DB::select('select *  from zones where id in ('.implode(",",$ids).')');

        foreach ($zones as  $zone) {
          
            $zid = $zone->id;

           $divcount=$zone->div_count;

           $pid = $zone->p_id;
           $did = $zone->d_id;

          // dd($dcount);

            if($divcount==0){



          $news = DB::delete('delete from zones where id =?',[$zid]);

         // $countzones = DB::select('select * from zones where d_id=?',[$did]);

          //district count

          //$zcount = count($countzones);

          //dd($dcount);

          $oldzcountpro = DB::select('select * from province where id=?',[$pid]);

          $oldzcountp = $oldzcountpro[0]->z_count;

          $newzcountp =$oldzcountp-1; 

          $updatedcount = update('update province set z_count=? where id=?',[$newzcountp,$pid]);

          

     }
          
        }
     
        return redirect('admin/zones')->with('success','Selected zones deleted successfully except not empty zones');

    }
}
