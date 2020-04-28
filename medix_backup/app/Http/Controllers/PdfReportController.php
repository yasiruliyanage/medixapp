<?php

namespace App\Http\Controllers;

use App\Sms;
use SoapClient;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class PdfReportController extends Controller
{



       public function __construct()
    {
    	set_time_limit(300);
        $this->middleware('auth:admin');
        $this->middleware('admin',['except' =>'test']);
    }

      public function getPdfReportsPage(){
       
        $workplaces = DB::select("select * from workplaces");
        $designations = DB::select("select * from designations");
        $groups = DB::select("select * from groups");
         $members = DB::select("select * from users");


     	return view('dashboard.pages.export_users_reports_pdf',compact('workplaces','designations','groups','members'));
     }

      
     public function exportuserbyworkplacepdf(Request $request)
    {
        $this-> validate($request,['work_place'=>'Required']); 

        $workplace = $request->get('work_place');
        $userlist = DB::select("select * from users where work_place=? ",[$workplace]); 

        $result = DB::table('workplaces')->select('placename')->where('id', $workplace)->first();
         $placename = $result->placename;

         $curdate=date('Y-m-d-h-i');
        
        // dd($data);

         // return view('pdfreports.reports.usersbyworkplace',compact('userlist'));
        $pdf = PDF::loadView('pdfreports.reports.usersbyworkplace',compact('userlist','placename'))->setPaper('a4', 'landscape');
        //return $pdf->download('Department-Workers.pdf');
         return $pdf->download($placename.'-Department-Workers'.$curdate.'.pdf');
        
    }

       public function exportuserbydesignationpdf(Request $request)
    {
        $this-> validate($request,['designation'=>'Required']); 

        $designation = $request->get('designation');
        $userlist = DB::select("select * from users where designation=? ",[$designation]); 

        $result = DB::table('designations')->select('designation')->where('id', $designation)->first();
         $designationname = $result->designation;

         $curdate=date('Y-m-d-h-i');
        
        // dd($data);

         // return view('pdfreports.reports.usersbyworkplace',compact('userlist'));
        $pdf = PDF::loadView('pdfreports.reports.usersbydesignation',compact('userlist','designationname'))->setPaper('a4', 'landscape');
        //return $pdf->download('Department-Workers.pdf');
         return $pdf->download($designationname.'-Workers'.$curdate.'.pdf');
        
    }

        public function exportuserbygrouppdf(Request $request)
    {
        $this-> validate($request,['group_id'=>'Required']); 

        $groupid = $request->get('group_id');
        $userlist = DB::select("select * from group_members where group_id=? ",[$groupid]); 

        $result = DB::table('groups')->select('groupname')->where('id', $groupid)->first();
        $groupname = $result->groupname;



         $curdate=date('Y-m-d-h-i');
        
        // dd($data);

         // return view('pdfreports.reports.usersbyworkplace',compact('userlist'));
        $pdf = PDF::loadView('pdfreports.reports.usersbygroup',compact('userlist','groupname'))->setPaper('a4', 'portrait');
        //return $pdf->download('Department-Workers.pdf');
         return $pdf->download($groupname.'-Group-Members'.$curdate.'.pdf');
        
    }
        public function exportuserpdf(Request $request)
    {
        $this-> validate($request,['union_id'=>'Required']); 

        $memberid = $request->get('union_id');
        //dd($memberid);
        $memberdata = DB::select("select * from users where union_id=? ",[$memberid]); 

        $result = DB::table('users')->select('name','lname','profile_img','designation','work_place','gender')->where('union_id', $memberid)->first();

        //dd($result)

        $username = $result->name;
        $userlname = $result->lname;
        $gender=$result->gender;

        $userprofic = $result->profile_img;
       // dd($userprofic);
        $workplaceid = $result->work_place;
        $designationid =$result->designation;
         
         if(!empty($userprofic)){
           
            $userprofic = $result->profile_img;

         }else{

            if($gender=='male'){

            $userprofic='male-avatar.png';
            }else{

            $userprofic='female-avatar.png';

            }

         }

         $curdate = date('Y-m-d-h-i');

         $workplacequery = DB::table('workplaces')->select('placename')->where('id', $workplaceid)->first();

         $designationquery = DB::table('designations')->select('designation')->where('id', $designationid)->first();

         $workplacename =  $workplacequery ->placename;
         $designationname =  $designationquery ->designation;


        
        // dd($data);

         // return view('pdfreports.reports.usersbyworkplace',compact('userlist'));
        $pdf = PDF::loadView('pdfreports.reports.userinfo',compact('memberdata','username','memberid','userlname','userprofic','workplacename','designationname'))->setPaper('a4', 'portrait');
        //return $pdf->download('Department-Workers.pdf');
         return $pdf->download($memberid.'-'.$username.'-'.$userlname.'-information'.$curdate.'.pdf');
        
    }

}
