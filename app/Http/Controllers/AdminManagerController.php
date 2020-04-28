<?php

namespace App\Http\Controllers;
use App\Sms;
use SoapClient;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminManagerController extends Controller
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
        $admins = DB::select("select * from admins");

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");

        return view('dashboard.pages.manage_admins',['admins'=>$admins]);
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
         return view('dashboard.pages.add_download_item');
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
            'name' => 'required',
            'description' => 'required',
           
          //   'email' => 'required',
           //  'nic'=> 'unique:users,nic',
            //'mobile'=> 'required|unique:users,mobile',
            //'address'=> 'required',
          
            'attachmentfile' => 'required|mimes:xlsx,xls,csv,ppt,pptx,jpg,jpeg,png,gif,doc,docx,mp4,mp3,pdf',
            //'password' => 'required',
           //  'homephone' => 'required',
            // 'gender' => 'required',
          //  'designation' => 'required',
          // 'work_place' => 'required',


        ]);

     
       //getting data from  membership field data
      

       $name = $request->get('name');
       
      // $nic = $request->get('nic');
      // $profile_img = $request->get('profile_img');
     
       //$mobile = $request->get('mobile');
       $description = $request->get('description');
     
     //  $gender = $request->get('gender');
       //$email = $request->get('email');
       $timestamp = now();
      
         
      $attachment =$request->file('attachmentfile');
      $orginalfilename =pathinfo($attachment->getClientOriginalName(), PATHINFO_FILENAME);
       $new_name = $orginalfilename.rand().'.'.$attachment->getClientOriginalExtension();
       $attachment->move(public_path('downloaditems/'),$new_name);
         

   
      $downloads = DB::insert('insert into downloads(name,description,fileattachment,created_at) value(?,?,?,?)',[$name,$description,$new_name,$timestamp]);
      
        if($downloads){
             
            $red = redirect('admin/downloaditems/add')->with('success',' item succefully added');

        }else {
            $red = redirect('downloaditems/add')->with('danger','Input data failed ');
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
        $downloads = DB::select('select * from downloads where id=? ',[$id]);

        // $designations = DB::select("select * from designations");
        // $workplaces = DB::select("select * from workplaces");
        return view('dashboard.pages.downloaditem_profile',compact('downloads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminid=$id;
        $admins = DB::select('select * from admins where id=?',[$id]);
         $roles = DB::select('select * from roles');
         $adminroles=DB::select('select * from role_admins where admin_id=?',[$id]);

         $adminroleid=$adminroles[0]->role_id;
      //  $designations = DB::select("select * from designations");
      //  $workplaces = DB::select("select * from workplaces");
        //['members'=> $members],['workplaces'=>$workplaces],['designations'=>$designations]

        return view('dashboard.pages.edit_admin_role',compact('admins','roles','adminroleid','adminid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //validating membership form fields
            $this-> validate($request,[
            'id'=>'required',
            'roleid' => 'required',
        ]);

       
      //dd($request);
      $id=$request->get('id');
      $roleid = $request->get('roleid');
      $timestamp = now();
		
	
		
		
	  
		
		
		
		

         
			 
			 
			    $rolesupdate = DB::update('update role_admins set role_id= ? ,updated_at = ? where admin_id = ? ',
        [$roleid,$timestamp,$id]);

         // dd($rolesupdate);

       if($rolesupdate) {
            $red = redirect('admin/manageadmins')->with('success','Admin Role has been updated');

       }else {
         return redirect()->route('manageadmins.edit', array('id' => $id))->with('danger','Error update please try again');
        // $red = redirect('manageadmins/edit/',$id)->with('danger','Error update please try again');
		   
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
        $contacts = DB::delete('delete from admins where id =?',[$id]);

      
        $red = redirect('admin/manageadmins');
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
       
        $dbs = DB::delete('delete from admins where id in ('.implode(",",$ids).')');

        //$getoldfilename = DB::table('downloads')->select('fileattachment')->where('id', $id)->first();
      
         
        return redirect('admin/manageadmins');

    }
	
	    public function recycleAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  downloads set inRecycle = 1  where id in ('.implode(",",$ids).')');
        return redirect('admin/downloaditems');

    }

       public function restoreall(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  downloads set inRecycle = 0  where id in ('.implode(",",$ids).')');
        return redirect('admin/downloaditems');

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recycle($id)
    {
        $downloads = DB::update('update downloads set inRecycle = 1  where id =?',[$id]);
        $red = redirect('admin/downloaditems');
        return $red;
    }

     public function restore($id)
    {
        $downloads = DB::update('update downloads set inRecycle = 0  where id =?',[$id]);
        $red = redirect('admin/downloaditems');
        return $red;
    }


      public function showTrash()
    {
        $downloads = DB::select('select * from downloads where inRecycle=1');

        return view('dashboard.pages.downloads_trash',compact('downloads'));
    }
}
