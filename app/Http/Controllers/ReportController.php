<?php

namespace App\Http\Controllers;

use App\Sms;
use SoapClient;
use Importer;
use Illuminate\Http\Request;
use App\Exports\UsersByBirthday;
use App\Exports\UsersByWorkplace;
use App\Exports\UsersByDesignation;
use App\Exports\UsersByGroup;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{

	   public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin',['except' =>'test']);
    }
     public function getUsersbyBdayForm(){

     	return view('dashboard.pages.export_users_by_bday');
     }

     public function getUsersbyBday(Request $request)
    {
        $this-> validate($request,['dob'=>'Required']); 

        $date = $request->get('dob');

        $curdate=date('Y-m-d-h-i');

        return (new UsersByBirthday($date))->download('usersbybday'.$curdate.'.xlsx');
    }

    public function getUsersbyWorkplaceForm(){
       
        $workplaces = DB::select("select * from workplaces");

     	return view('dashboard.pages.export_users_by_workplace',compact('workplaces'));
     }

     public function getUsersbyWorkplace(Request $request)
    {
        $this-> validate($request,['work_place'=>'Required']); 

        $workplace = $request->get('work_place');

        $result = DB::table('workplaces')->select('placename')->where('id', $workplace)->first();
      
         $placename= $result->placename;
       $curdate=date('Y-m-d-h-i');
        

        return (new UsersByWorkplace($workplace,$placename))->download($placename.'-Department-Workers'.$curdate.'.xlsx');
    }

    public function getUsersbyDesignationForm(){
       
        $designations = DB::select("select * from designations");

     	return view('dashboard.pages.export_users_by_designation',compact('designations'));
     }

     public function getUsersbyDesignation(Request $request)
    {
        $this-> validate($request,['designation'=>'Required']); 

        $designation = $request->get('designation');
        $curdate=date('Y-m-d-h-i');

        $result = DB::table('designations')->select('designation')->where('id', $designation)->first();
      
         $designationname= $result->designation;

        

        return (new UsersByDesignation($designation,$designationname))->download($designationname.'-Workers'.$curdate.'.xlsx');
    }
     public function getUsersbyGroupForm(){
       
        $groups = DB::select("select * from groups");

     	return view('dashboard.pages.export_users_by_groups',compact('groups'));
     }

     public function getUsersbyGroup(Request $request)
    {
    	$curdate=date('Y-m-d-h-i');
        $this-> validate($request,['group_id'=>'Required']); 

        $groupid = $request->get('group_id');

        $result = DB::table('groups')->select('groupname')->where('id', $groupid)->first();
      
         $groupname= $result->groupname;

        

        return (new UsersByGroup($groupid,$groupname))->download($groupname.'-members'.$curdate.'.xlsx');
    }

}
