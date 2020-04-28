<?php

namespace App\Http\Controllers;

use App\Sms;
use SoapClient;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class WordReportsController extends Controller
{



       public function __construct()
    {
    	set_time_limit(300);
        $this->middleware('auth:admin');
        $this->middleware('admin',['except' =>'test']);
    }

      public function getWordReportsPage(){
       
        $workplaces = DB::select("select * from workplaces");
        $designations = DB::select("select * from designations");
        $groups = DB::select("select * from groups");
        $members = DB::select("select * from users");


     	return view('dashboard.pages.export_users_reports_word',compact('workplaces','designations','groups','members'));
     }

      
     public function exportuserbyworkplaceword(Request $request)
    {
        $this-> validate($request,['work_place'=>'Required']); 

        $workplace = $request->get('work_place');
        $userlist = DB::select("select * from users where work_place=? ",[$workplace]); 

        $membercount=count($userlist);

        $result = DB::table('workplaces')->select('placename')->where('id', $workplace)->first();
        $placename = $result->placename;

        $curdate=date('Y-m-d-h-i');

        
        
        // dd($data);

         // return view('pdfreports.reports.usersbyworkplace',compact('userlist'));
        /*$pdf = PDF::loadView('pdfreports.reports.usersbyworkplace',compact('userlist','placename'))->setPaper('a4', 'landscape');
        //return $pdf->download('Department-Workers.pdf');
         return $pdf->download($placename.'-Department-Workers'.$curdate.'.pdf');*/

         $wordTest = new \PhpOffice\PhpWord\PhpWord();

       $newSection = $wordTest->addSection();
      $curdate=date('Y-m-d-h-i');
       

       



      // $newSection->addText($desc1);
      // $newSection->addText($desc2);
       $header = array('size' => 16, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'green');
        $rowheader = array('size' => 12, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'green');
       $tablestyles = array('size' => 16, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'#8a2424');
       $rows = 10;
       $cols = 2;
       $newSection->addText('Members of '.$placename, $header);

      

     
        

         $maintable=$newSection->addTable($tablestyles);

         $maintable->addRow();
         $maintable->addCell(1750)->addText("Workplace", $rowheader);
         $maintable->addCell(4000)->addText($placename);
         $maintable->addRow();
         $maintable->addCell(1750)->addText("Total Workers", $rowheader);
         $maintable->addCell(4000)->addText($membercount);
       
         

         $newSection->addText('Member Information', $header);
       
       $table = $newSection->addTable( $tablestyles);
       $table->addRow();
         $table->addCell(1750)->addText("Union ID", $rowheader);
         $table->addCell(1750)->addText("Employee ID", $rowheader);
         $table->addCell(1750)->addText("First Name", $rowheader);
         $table->addCell(1750)->addText("Last Name", $rowheader);
         $table->addCell(1750)->addText("Email", $rowheader);
         $table->addCell(1750)->addText("Mobile", $rowheader);
         $table->addCell(1750)->addText("Address", $rowheader);
       
        foreach($userlist as $user){
         $table->addRow();
         $table->addCell(1750)->addText($user->union_id);
         $table->addCell(1750)->addText($user->employee_id);
         $table->addCell(1750)->addText($user->name);
          $table->addCell(1750)->addText($user->lname);
         $table->addCell(1750)->addText($user->email);
         $table->addCell(1750)->addText($user->mobile);
         $table->addCell(1750)->addText($user->address);
        }



     
        
  /*    for ($r = 1; $r <= 8; $r++) {
    $table->addRow();
    for ($c = 1; $c <= 2; $c++) {

        $table->addCell(1750)->addText("Row {$r}, Cell {$c}");

      }
      }*/
      


       $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest,'Word2007');

       try{
         $objectWriter->save(storage_path('Members-at'.$placename.'-'.$curdate.'.docx'));
       } catch (Exception $e){

       }

       return response()->download(storage_path('Members-at'.$placename.'-'.$curdate.'.docx'));


        
    }

       public function exportuserbydesignationword(Request $request)
    {
        $this-> validate($request,['designation'=>'Required']); 

        $designation = $request->get('designation');
        $userlist = DB::select("select * from users where designation=? ",[$designation]); 

        $membercount=count($userlist);

        $result = DB::table('designations')->select('designation')->where('id', $designation)->first();
         $designationname = $result->designation;

         $curdate=date('Y-m-d-h-i');
        
        // dd($data);

         // return view('pdfreports.reports.usersbyworkplace',compact('userlist'));
        /*$pdf = PDF::loadView('pdfreports.reports.usersbydesignation',compact('userlist','designationname'))->setPaper('a4', 'landscape');
        //return $pdf->download('Department-Workers.pdf');
         return $pdf->download($designationname.'-Workers'.$curdate.'.pdf');*/

            $wordTest = new \PhpOffice\PhpWord\PhpWord();

       $newSection = $wordTest->addSection();
      $curdate=date('Y-m-d-h-i');
       

       



      // $newSection->addText($desc1);
      // $newSection->addText($desc2);
       $header = array('size' => 16, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'green');
        $rowheader = array('size' => 12, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'green');
       $tablestyles = array('size' => 16, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'#8a2424');
       $rows = 10;
       $cols = 2;
       $newSection->addText($designationname.' Workers of CEBTU', $header);

      

     
        

         $maintable=$newSection->addTable($tablestyles);

         $maintable->addRow();
         $maintable->addCell(1750)->addText("Designation", $rowheader);
         $maintable->addCell(4000)->addText($designationname);
         $maintable->addRow();
         $maintable->addCell(1750)->addText("Total Workers", $rowheader);
         $maintable->addCell(4000)->addText($membercount);
       
         

         $newSection->addText('Member Information', $header);
       
       $table = $newSection->addTable( $tablestyles);
       $table->addRow();
         $table->addCell(1750)->addText("Union ID", $rowheader);
         $table->addCell(1750)->addText("Employee ID", $rowheader);
         $table->addCell(1750)->addText("First Name", $rowheader);
         $table->addCell(1750)->addText("Last Name", $rowheader);
         $table->addCell(1750)->addText("Email", $rowheader);
         $table->addCell(1750)->addText("Mobile", $rowheader);
         $table->addCell(1750)->addText("Address", $rowheader);
       
        foreach($userlist as $user){
         $table->addRow();
         $table->addCell(1750)->addText($user->union_id);
         $table->addCell(1750)->addText($user->employee_id);
         $table->addCell(1750)->addText($user->name);
          $table->addCell(1750)->addText($user->lname);
         $table->addCell(1750)->addText($user->email);
         $table->addCell(1750)->addText($user->mobile);
         $table->addCell(1750)->addText($user->address);
        }



     
        
  /*    for ($r = 1; $r <= 8; $r++) {
    $table->addRow();
    for ($c = 1; $c <= 2; $c++) {

        $table->addCell(1750)->addText("Row {$r}, Cell {$c}");

      }
      }*/
      


       $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest,'Word2007');

       try{
         $objectWriter->save(storage_path($designationname.'-workers-'.$curdate.'.docx'));
       } catch (Exception $e){

       }

       return response()->download(storage_path($designationname.'-workers-'.$curdate.'.docx'));
        
    }

        public function exportuserbygroupword(Request $request)
    {
        $this-> validate($request,['group_id'=>'Required']); 

        $groupid = $request->get('group_id');
        $userlist = DB::select("select * from group_members where group_id=? ",[$groupid]); 

        $membercount=count($userlist);

        $result = DB::table('groups')->select('groupname')->where('id', $groupid)->first();
        $groupname = $result->groupname;



         $curdate=date('Y-m-d-h-i');
        
        // dd($data);

         // return view('pdfreports.reports.usersbyworkplace',compact('userlist'));
       // $pdf = PDF::loadView('pdfreports.reports.usersbygroup',compact('userlist','groupname'))->setPaper('a4', 'portrait');
        //return $pdf->download('Department-Workers.pdf');
        // return $pdf->download($groupname.'-Group-Members'.$curdate.'.pdf');


            $wordTest = new \PhpOffice\PhpWord\PhpWord();

       $newSection = $wordTest->addSection();
      $curdate=date('Y-m-d-h-i');
       

       



      // $newSection->addText($desc1);
      // $newSection->addText($desc2);
       $header = array('size' => 16, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'green');
        $rowheader = array('size' => 12, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'green');
       $tablestyles = array('size' => 16, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'#8a2424');
       $rows = 10;
       $cols = 2;
       $newSection->addText($groupname.' group members of CEBTU', $header);

      

     
        

         $maintable=$newSection->addTable($tablestyles);

         $maintable->addRow();
         $maintable->addCell(1750)->addText("Group Name", $rowheader);
         $maintable->addCell(7000)->addText($groupname);
         $maintable->addRow();
         $maintable->addCell(1750)->addText("Total Members", $rowheader);
         $maintable->addCell(7000)->addText($membercount);
       
         

         $newSection->addText('Group Member Information', $header);
       
       $table = $newSection->addTable( $tablestyles);
       $table->addRow();
         $table->addCell(7000)->addText("Name", $rowheader);
         $table->addCell(7000)->addText("Mobile", $rowheader);
        
       
        foreach($userlist as $user){
         $table->addRow();
         $table->addCell(7000)->addText($user->member_name);
         $table->addCell(7000)->addText($user->member_mobile);
        }



     
        
  /*    for ($r = 1; $r <= 8; $r++) {
    $table->addRow();
    for ($c = 1; $c <= 2; $c++) {

        $table->addCell(1750)->addText("Row {$r}, Cell {$c}");

      }
      }*/
      


       $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest,'Word2007');

       try{
         $objectWriter->save(storage_path($groupname.'-members-'.$curdate.'.docx'));
       } catch (Exception $e){

       }

       return response()->download(storage_path($groupname.'-members-'.$curdate.'.docx'));
        
    }
        public function exportuserword(Request $request)
    {
        $this-> validate($request,['union_id'=>'Required']); 

        $memberid = $request->get('union_id');
        //dd($memberid);
        $memberdata = DB::select("select * from users where union_id=? ",[$memberid]); 

        $result = DB::table('users')->select('name','lname','profile_img','designation','work_place','gender','email','nic','mobile','address','employee_id','homephone')->where('union_id', $memberid)->first();

        //dd($result)

        $username = $result->name;
        $userlname = $result->lname;
        $gender=$result->gender;
        $profile_img=$result->profile_img;
        $email=$result->email;
        $nic=$result->nic;
        $mobile=$result->mobile;
        $address=$result->address;
        $emp_id=$result->employee_id;
        $homephone=$result->homephone;



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
        //$pdf = PDF::loadView('pdfreports.reports.userinfo',compact('memberdata','username','memberid','userlname','userprofic','workplacename','designationname'))->setPaper('a4', 'portrait');
        //return $pdf->download('Department-Workers.pdf');
        // return $pdf->download($memberid.'-'.$username.'-'.$userlname.'-information'.$curdate.'.pdf');

                 $wordTest = new \PhpOffice\PhpWord\PhpWord();

       $newSection = $wordTest->addSection();
      $curdate=date('Y-m-d-h-i');
       

       



      // $newSection->addText($desc1);
      // $newSection->addText($desc2);
       $header = array('size' => 16, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'green');
        $rowheader = array('size' => 12, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'green');
       $tablestyles = array('size' => 16, 'bold' => true,'borderSize'=>12 , 'borderColor'=>'#8a2424');
       $rows = 10;
       $cols = 2;
       $newSection->addText('Member Information Report', $header);

      

     
        

         $maintable=$newSection->addTable($tablestyles);
         $maintable->addRow();
         $maintable->addCell(1750)->addText("Employee ID", $rowheader);
         $maintable->addCell(7000)->addText($emp_id);
          $maintable->addRow();
         $maintable->addCell(1750)->addText("Union ID", $rowheader);
         $maintable->addCell(7000)->addText($memberid);
         $maintable->addRow();
         $maintable->addCell(1750)->addText("First Name", $rowheader);
         $maintable->addCell(7000)->addText($username);
         $maintable->addRow();
         $maintable->addCell(1750)->addText("Last Name", $rowheader);
         $maintable->addCell(7000)->addText($userlname);
          $maintable->addRow();
         $maintable->addCell(1750)->addText("Gender", $rowheader);
         $maintable->addCell(7000)->addText($gender);
          $maintable->addRow();
         $maintable->addCell(1750)->addText("Email", $rowheader);
         $maintable->addCell(7000)->addText($email);
          
          $maintable->addRow();
         $maintable->addCell(1750)->addText("Mobile", $rowheader);
         $maintable->addCell(7000)->addText($mobile);
          $maintable->addRow();
         $maintable->addCell(1750)->addText("Address", $rowheader);
         $maintable->addCell(7000)->addText($address);
          $maintable->addRow();
         $maintable->addCell(1750)->addText("Home Phone", $rowheader);
         $maintable->addCell(7000)->addText($homephone);
          $maintable->addRow();
         $maintable->addCell(1750)->addText("Workplace", $rowheader);
         $maintable->addCell(7000)->addText($workplacename);
          $maintable->addRow();
         $maintable->addCell(1750)->addText("Designation", $rowheader);
         $maintable->addCell(7000)->addText($designationname);
        

       
         

        



     
        
  /*    for ($r = 1; $r <= 8; $r++) {
    $table->addRow();
    for ($c = 1; $c <= 2; $c++) {

        $table->addCell(1750)->addText("Row {$r}, Cell {$c}");

      }
      }*/
      


       $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest,'Word2007');

       try{
         $objectWriter->save(storage_path($username.'-'.$userlname.'-Detail-report-'.$curdate.'.docx'));
       } catch (Exception $e){

       }

       return response()->download(storage_path($username.'-'.$userlname.'-Detail-report-'.$curdate.'.docx'));


        
    }

}
