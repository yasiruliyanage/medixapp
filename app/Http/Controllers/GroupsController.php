<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GroupsController extends Controller
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
         $groups = DB::select("select * from groups  where inRecycle=0 ");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_groups',['groups'=>$groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.add_group');
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
            'group_name' => 'required',

        ]);

        $groupname = $request->get('group_name');
        $timestamp = now();
         $groups = DB::insert('insert into groups(groupname,created_at) value(?,?)',[$groupname,$timestamp]);



        if($groups){
            $red = redirect('admin/groups/')->with('success','workplace succefully added');

        }else {
            $red = redirect('admin/groups/add')->with('danger','Input data failed ');
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
        $groups = DB::select('select * from groups where id=? ',[$id]);
        $groupmembers = DB::select('select * from group_members where group_id=? ',[$id]);

        return view('dashboard.pages.show_group',['groups'=>$groups],['groupmembers'=>$groupmembers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $groups = DB::select('select * from groups where id=?',[$id]);

        return view('dashboard.pages.edit_group',['groups'=> $groups]);
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
            'group_name' => 'required',

        ]);

         $groupname =  $request->get('group_name');
          $timestamp = now();


           $groups = DB::update('update groups set groupname = ? ,  updated_at = ? where id = ? ',
        [$groupname,$timestamp,$id]);

       if($groupname) {
            $red = redirect('admin/groups')->with('success','Data has been updated');



       }else {

         $red = redirect('groups/edit/',$id)->with('danger','Error update please try again');
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
         $groups = DB::delete('delete from groups where id =?',[$id]);
         $red = redirect('admin/groups');
         return $red;
    }

     public function destroymember(Request $request)
    {
         $id = $request->get('union_id');
         $groupid = $request->get('group_id');
         //$dd=dd($request->all());
        
         $groupmembers = DB::delete('delete from group_members where group_id=? and member_id=?',[$groupid,$id]);
         $red = redirect('admin/groups');
         return $red;
    }

      public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::delete('delete from groups where id in ('.implode(",",$ids).')');
        return redirect('admin/groups');

    }
     public function deleteAllmembers(Request $request){
         $this-> validate($request,[
            'ids' => 'required',


        ]);

        $groupid= $request->get('group_id');

        $ids = $request->get('ids');
		// dd($ids);
		 $ids =  array_map('strval', $ids ); 
		
        $dbs = DB::delete('delete from group_members where member_id in ('.implode(",",$ids).') and group_id=?',[$groupid]);
        return redirect('admin/groups/profile/'.$groupid);

    }
     public function searchResponse(Request $request){
        $query = $request->get('term','');
        $users=\DB::table('users');
		 dd($query);
      /*   if($request->type=='member_id'){
            $users->where('id','LIKE','%'.$query.'%');
        }
        if($request->type=='union_id'){
            $users->where('union_id','LIKE','%'.$query.'%');
        }
        if($request->type=='nic'){
            $users->where('nic','LIKE','%'.$query.'%');
        }
         if($request->type=='mobile'){
            $users->where('mobile','LIKE','%'.$query.'%');
        }
          if($request->type=='employee_id'){
            $users->where('employee_id','LIKE','%'.$query.'%');
        }
         if($request->type=='name'){
			echo $query;
            $users->where('name','LIKE','%'.$query.'%');
        }
           $users=$users->get();*/        
        $data=array();
        foreach ($users as $user) {
                $data[]=array('union_id'=>$user->union_id,'name'=>$user->name,'mobile'=>$user->mobile,'employee_id'=>$user->employee_id,'nic'=>$user->nic,'member_id'=>$user->id);
        }
       /* if(count($data))
             return $data;
        else
            return ['union_id'=>'','name'=>'','mobile'=>'','nic'=>'','employee_id'=>'','member_id'=>''];*/
    }
     public function showaddmemberform()
    {
         $groups = DB::select("select * from groups ");
        return view('dashboard.pages.add_groupmember',['groups'=>$groups]);
    }
     public function savemember( Request $request)
    {

          $this-> validate($request,[
            'nic' => 'required',
            'group_id' =>'required',
        ]);

        

        $groupid = $request->get('group_id');
        $nic = $request->get('nic');
          $result = DB::table('users')->select('name')->where('nic', $nic)->first();
         $result2 = DB::table('users')->select('mobile')->where('nic', $nic)->first();
		  $result3 = DB::table('users')->select('id')->where('nic', $nic)->first();
	     $memberid = $result3->id;
         $membername= $result->name;
         $mobile= $result2->mobile;
        $timestamp = now();
        $checkrecordexxists = DB::select('select * from group_members where member_id=? and group_id=?',[$memberid,$groupid]);

        $rowcount= count($checkrecordexxists);

        if($rowcount==0){
             $groupmember = DB::insert('insert into group_members(group_id,member_id,member_name,member_mobile,created_at) value(?,?,?,?,?)',[$groupid,$memberid,$membername,$mobile,$timestamp]);


        if($groupmember){
            $red = redirect('admin/groups/')->with('success','member added  succefully added');

        }else {
            $red = redirect('admin/groups/addmember')->with('danger','Input data failed ');
        }
        return $red;
    }else{

         $red = redirect('admin/groups/addmember')->with('danger','Input data failed ');


        return $red;

         }


        

        
    }
   public function savememberingroup( Request $request)
    {

          $this-> validate($request,[
            'nic' => 'required',
            'group_id' =>'required',
        ]);

        

        $groupid = $request->get('group_id');
        $nic = $request->get('nic');
          $result = DB::table('users')->select('name')->where('nic', $nic)->first();
         $result2 = DB::table('users')->select('mobile')->where('nic', $nic)->first();
	      $result3 = DB::table('users')->select('id')->where('nic', $nic)->first();
	     $memberid = $result3->id;
         $membername= $result->name;


         $mobile= $result2->mobile;

        
     
        $timestamp = now();
        $checkrecordexxists = DB::select('select * from group_members where member_id=? and group_id=?',[$memberid,$groupid]);

        $rowcount= count($checkrecordexxists);

        if($rowcount==0){
             $groupmember = DB::insert('insert into group_members(group_id,member_id,member_name,member_mobile,created_at) value(?,?,?,?,?)',[$groupid,$memberid,$membername,$mobile,$timestamp]);


        if($groupmember){
            $red = redirect('admin/groups/profile/'.$groupid)->with('success','member added  succefully added');

        }else {
            $red = redirect('admin/groups/profile/'.$groupid)->with('danger','Input data failed ');
        }
        return $red;
        }else{

         $red = redirect('admin/groups/profile/'.$groupid)->with('danger','Input data failed ');

        return $red;

         }


        

        
    }
	
	  public function recycleAll(Request $request){

          $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update groups set inRecycle = 1  where id in ('.implode(",",$ids).')');
        return redirect('admin/groups');
       

    }

       public function restoreall(Request $request){

           $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update groups set inRecycle = 0  where id in ('.implode(",",$ids).')');
        return redirect('admin/groups');
      

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recycle($id)
    {
        $groups = DB::update('update groups set inRecycle = 1 where id =?',[$id]);
         $red = redirect('admin/groups');
         return $red;
     
    }

     public function restore($id)
    {

         $groups = DB::update('update groups set inRecycle = 0 where id =?',[$id]);
         $red = redirect('admin/groups');
         return $red;
       
    }


      public function showTrash()
    {
        $groups = DB::select('select * from groups where inRecycle=1');

        return view('dashboard.pages.group_trash',compact('groups'));
    }
}
