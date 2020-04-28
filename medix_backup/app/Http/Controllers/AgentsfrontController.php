<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AgentsfrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {

         $this->middleware('guest');
        //$this->middleware('admin',['except' =>'test']);

    }
    public function index()
    {

		// $designations = DB::select("select * from designations");
         $members = DB::table("admins")->where('inRecycle',0)->whereIn('role_id',array('3','4','5','6','7'))->paginate(36);
		// $homemembers = DB::table("users")->paginate(9);

        $provinces = DB::select("select * from province");
        $districts = DB::select("select * from district");
        $zones = DB::select("select * from zones");
        $divisions = DB::select("select * from divisions");
        $schools = DB::select("select * from schools");

         $record_count = count($members);

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('frontend/pages/agents',compact('members','provinces','districts','zones','divisions','schools','record_count'));
        //return view('frontend/pages/members');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fetch_data(Request $request)
    {
        if($request->ajax())

      {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
        $province = $request->get('province');
        $district =$request->get('district');
        $zone = $request->get('zone');
        $division = $request->get('division');
        $school = $request->get('school');
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);



       // dd($province,$district,$zone, $division,$school);

       if(!empty($query)){

         $members = DB::table('admins')
         ->where('inRecycle',0)
         ->where('emp_id','like','%'.$query.'%')
         ->orWhere('name','like','%'.$query.'%')
         ->orWhere('lname','like','%'.$query.'%')
         ->orWhere('dob','like','%'.$query.'%')
         ->orWhere('nic','like','%'.$query.'%')
         ->orWhere('mobile','like','%'.$query.'%')
         ->orWhere('address','like','%'.$query.'%')
         ->orWhere('ps_number','like','%'.$query.'%')
         ->orWhere('id','like','%'.$query.'%')
             ->whereIn('role_id',array('3','4','5','6','7'))
         ->orderBy($sort_by,$sort_type)
         ->paginate(100);

         $record_count = count($members);
       }else if(empty($query))
       {

         if((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){

         // $test = 'i am in first block';
         // dd($test);

          $members = DB::table('admins')->where('inRecycle',0)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);

          $record_count = count($members);

        }elseif((!empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){




          //$test = 'i am in second block';
          //dd($province,$district,$zone,$division,$school,$test);
         $members = DB::table('admins')->where('inRecycle',0)->where('province',$province)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in second new block';
          //dd($test);

         $members = DB::table('admins')->where('inRecycle',0)->where('province',$province)->where('district',$district)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in third block';
          //dd($test);

        $members = DB::table('admins')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
        $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in four block';
          //dd($test);

         $members = DB::table('admins')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

        // $test = 'i am in  five block';
          //dd($test);

         $members = DB::table('admins')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
         $record_count = count($members);

        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in sixth block';
         // dd($test);

         $members = DB::table('admins')->where('inRecycle',0)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
         $record_count = count($members);
        }elseif((!empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in seventh block';
          //dd($test);

          $members = DB::table('admins')->where('inRecycle',0)->where('zone',$zone)->where('division',$division)->where('school',$school)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
          $record_count = count($members);
        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){

          //$test = 'i am in eight block';
          //dd($test);

         $members = DB::table('admins')->where('inRecycle',0)->where('division',$division)->where('school',$school)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
         $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){

          //$test = 'i am in nineth block';
          //dd($test);

        $members = DB::table('admins')->where('inRecycle',0)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(36);
        $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(!empty($school))){


          //$test = 'i am in tenth block';
          //dd($division,$school,$test);

          $members = DB::table('admins')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('school',$school)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
          $record_count = count($members);

        }elseif((!empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in eleventh block test';
          //dd($test);


        $members = DB::table('admins')->where('inRecycle',0)->where('province',$province)->where('district',$district)->where('zone',$zone)->where('division',$division)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
        $record_count = count($members);

        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(empty($division))&&(!empty($school))){

         // $test = 'i am in twelth block';
         // dd($test);
          $members = DB::table('admins')->where('inRecycle',0)->where('school',$school)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
          $record_count = count($members);

        }
        elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in thirth block';
         // dd($test);
          $members = DB::table('admins')->where('inRecycle',0)->where('division',$division)->whereIn('role_id',array('3','4','5','6','7'))->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(36);
          $record_count = count($members);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in fourteenth block';
         // dd($test);

        $members = DB::table('admins')->where('inRecycle',0)->where('zone',$zone)->whereIn('role_id',array('3','4','5','6','7'))->where('division',$division)->where('school',$school)->orderBy($sort_by,$sort_type)->paginate(36);
        $record_count = count($members);


        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(!empty($division))&&(!empty($school))){

         // $test = 'i am in fourteenth block';
        //  dd($test);
          $members = DB::table('admins')->where('inRecycle',0)->where('district',$district)->where('zone',$zone)->where('division',$division)->where('school',$school)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
          $record_count = count($members);
        }elseif((empty($province))&&(!empty($district))&&(empty($zone))&&(empty($division))&&(empty($school))){

         // $test = 'i am fifteenth  block';
         // dd($test);
           $members = DB::table('admins')->where('inRecycle',0)->where('district',$district)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
           $record_count = count($members);

          // dd($members);

        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){


         // $test = 'i am in sixeenth block';
         // dd($test);
          $members = DB::table('admins')->where('inRecycle',0)->where('zone',$zone)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
          $record_count = count($members);

        }elseif((empty($province))&&(empty($district))&&(empty($zone))&&(!empty($division))&&(empty($school))){

          //$test = 'i am in seventeeth block';
          //dd($test);

          $members = DB::table('admins')->where('inRecycle',0)->where('division',$division)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
          $record_count = count($members);
        }elseif((empty($province))&&(!empty($district))&&(!empty($zone))&&(empty($division))&&(empty($school))){

          //$test = 'i am in eighteenth block';
          //dd($test);

          $members = DB::table('admins')->where('inRecycle',0)->where('district',$district)->where('zone',$zone)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
          $record_count = count($members);
        }elseif((empty($province))&&(empty($district))&&(!empty($zone))&&(empty(!$division))&&(empty($school))){

          //$test = 'i am in nineteenth block';
          //dd($test);

          $members = DB::table('admins')->where('inRecycle',0)->where('zone',$zone)->where('division',$division)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
          $record_count = count($members);
        }else{

          $members = DB::table('admins')->where('inRecycle',0)->whereIn('role_id',array('3','4','5','6','7'))->orderBy($sort_by,$sort_type)->paginate(36);
          $record_count = count($members);
          //dd($members);
        }

       }






        return view('frontend.pages.agentsdata',compact('members','record_count'))->render();
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
