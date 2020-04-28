<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Importer;
use PDF;
use App\Imports\transferMemberImporter;
use App\Exports\TransferCycleExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TransferBoardController extends Controller
{


	   public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin',['except' =>'test']);
    }
     public function createimport( ){
      $transferrequests = DB::select("select * from transfer_request_list ");
        
        return view('dashboard.pages.import_transfer_requests',compact('transferrequests'));
       
    }

    public function allTransferCycles(){
        $transfercycles = DB::select("select * from transfer_cycle");

        return view('dashboard.pages.transfercycles',compact('transfercycles'));

    }

    public function pendingTransferRequests(){
        $transferrequests = DB::select("select * from transfer_request_list where t_state=0");

        return view('dashboard.pages.pending_transfer_requests',compact('transferrequests'));

    }
      public function completedTransferRequests(){
        $transferrequests = DB::select("select * from transfer_request_list where t_state=1");

        return view('dashboard.pages.completed_transfer_requests',compact('transferrequests'));

    }
      public function allTransferRequests(){
        $transferrequests = DB::select("select * from transfer_request_list ");

        return view('dashboard.pages.all_transfer_requests',compact('transferrequests'));

    }

    public function completedTransferCycles(){

        $ctransfercycles = DB::select("select * from transfer_cycle where c_state=1 ");
        
        return view('dashboard.pages.completedtransfercycles',compact('ctransfercycles'));

    }



    //displaying cycle info & transfer request info can be add to transfer cycle

    public function getCycleInfo($id){

    	$transfercyclerecords=DB::select('select * from transfer_cycles_info where c_id=?',[$id]);
    
        //getting cycle ended location from id

        $transfercycleinfo=DB::select('select * from transfer_cycle where c_id=?',[$id]);

        $getcycleinfo = DB::select('select * from transfer_cycle where c_id=? ',[$id]);
        
        //dd($getcycleinfo);
        $cyclestartedpoint=$getcycleinfo[0]->started_at;

        $cyclelastendpoint=$getcycleinfo[0]->ended_at;
        
        //getting requests by members want to transfer to cycle started depo from cycle endpoint depo by their 1st preference order by worked year count
        $requestdirectfromendpoint1=DB::select('select * from transfer_request_list where p_w_s=? and p_1=? and t_state=0 ORDER BY years DESC ',[$cyclelastendpoint,$cyclestartedpoint]);

        //getting requests by members want to transfer to cycle started depo from cycle endpoint depo by their 2nd preference order by worked year count
        $requestdirectfromendpoint2=DB::select('select * from transfer_request_list where p_w_s=? and p_2=? and t_state=0 ORDER BY years DESC ',[$cyclelastendpoint,$cyclestartedpoint]);

          //getting requests by members want to transfer to cycle started depo from cycle endpoint depo by their 3rd preference order by worked year count
        $requestdirectfromendpoint3=DB::select('select * from transfer_request_list where p_w_s=? and p_3=? and t_state=0  ORDER BY years DESC ',[$cyclelastendpoint,$cyclestartedpoint]);

          //geeting requests by members want to transfer from cycle end point depo to other depos
         $requestdirectfromendpointother=DB::select('select * from transfer_request_list where p_w_s=? and t_state=0 ORDER BY years DESC ',[$cyclelastendpoint]);

        $s_point=$transfercycleinfo[0]->started_at;
    	$e_point=$transfercycleinfo[0]->ended_at;
    	$t_p_c=$transfercycleinfo[0]->t_p_c;
    	$c_state=$transfercycleinfo[0]->c_state;
       
        $cycle_id=$id;


        return view('dashboard.pages.transfercycleinfo',compact('transfercyclerecords','requestdirectfromendpoint1','requestdirectfromendpoint2','requestdirectfromendpoint3','requestdirectfromendpointother','cycle_id','s_point','e_point','t_p_c','c_state'));
          

    }

     //displaying cycle info 

    public function getCycleInfoview($id){

    	$transfercyclerecords=DB::select('select * from transfer_cycles_info where c_id=?',[$id]);

    	$transfercycleinfo=DB::select('select * from transfer_cycle where c_id=?',[$id]);

    	$s_point=$transfercycleinfo[0]->started_at;
    	$e_point=$transfercycleinfo[0]->ended_at;
    	$t_p_c=$transfercycleinfo[0]->t_p_c;
    	$c_state=$transfercycleinfo[0]->c_state;
       
        $cycle_id=$id;


        return view('dashboard.pages.transfercycleinfoview',compact('transfercyclerecords','cycle_id','s_point','e_point','t_p_c','c_state'));
          

    }




    public function storeimport(Request $request){

       $this-> validate($request,[
        'excelfile' =>'required|max:5000|mimes:xlsx,xls,csv'
       ]);
       $dateTime=date('YMDHis'); 


       $excelfile =$request->file('excelfile');

       $path = $request->file('excelfile')->getRealPath();
     //  $new_file = $dateTime.'-'.$excelfile->getClientOriginalName();
       //$savepath = public_path('/newmemberlists/');
       //$excelfile->move(public_path('newmemberlists/'),$new_file); 

       Excel::import(new transferMemberImporter,$path);
      //$red = redirect('admin/members/importmemberlist')->with('success','Members Imported successfully');
       //return $red;

       $alldepos= DB::select('select * from depos');

       foreach($alldepos as $depo){
       	$deponame = $depo->placename;
        $selectvacancies = DB::select('select * from transfer_request_list where p_w_s=?',[$deponame]);

        $vacancycount = count($selectvacancies);

        $updatevacancycount = DB::update('update depos set v_count =? where placename = ?',[$vacancycount,$deponame]);





       }

       
       
       return back()->with('success','Member Data Imported successfully ');




    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyimported($id)
    {
        $members = DB::delete('delete from transfer_request_list where t_ref_id =?',[$id]);
        $alldepos= DB::select('select * from depos');

       foreach($alldepos as $depo){
       	$deponame = $depo->placename;
        $selectvacancies = DB::select('select * from transfer_request_list where p_w_s=?',[$deponame]);

        $vacancycount = count($selectvacancies);

        $updatevacancycount = DB::update('update depos set v_count =? where placename = ?',[$vacancycount,$deponame]);





       }
        $red = redirect('admin/transfersboard/import');
        return $red;
    }


   
      /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */

    public function deleteAllimported(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');

        $dbs = DB::delete('delete from transfer_request_list where t_ref_id in ('.implode(",",$ids).')');  $alldepos= DB::select('select * from depos');

        $alldepos= DB::select('select * from depos');
       foreach($alldepos as $depo){
       	$deponame = $depo->placename;
        $selectvacancies = DB::select('select * from transfer_request_list where p_w_s=?',[$deponame]);

        $vacancycount = count($selectvacancies);

        $updatevacancycount = DB::update('update depos set v_count =? where placename = ?',[$vacancycount,$deponame]);





       }

        return redirect('admin/transfersboard/import');

    }


  //get add transfer request page

    public function getaddtransferrequest(){
     
     $pwsdepos = DB::select("select * from depos");
     $p1s = DB::select("select * from depos");
     $p2s = DB::select("select * from depos");
     $p3s = DB::select("select * from depos");
        
   return view('dashboard.pages.add_new_transferrequest',compact('pwsdepos','p1s','p2s','p3s'));

    }



// add transfer request manually
      public function addtransferRequest(Request $request){
       $this->validate($request,[
       	'name'=>'required',
       	'emp_id'=>'required',
       	'dob'=>'required',
       	'p_w_s'=>'required',
       	'ms'=>'required',
       	'r_d_f_p_w_s'=>'required',
       	'years'=>'required',
       	'p1'=>'required',
       	//'p2'=>'required',
       //'p3'=>'required',
       	'r_f_t'=>'required',
       	'address'=>'required',
       ]);

       $name = $request->get('name');
       $emp_id = $request->get('emp_id');
       $dob = $request->get('dob');
       $p_w_s = $request->get('p_w_s');
       $ms = $request->get('ms');
       $r_d_f_p_w_s = $request->get('r_d_f_p_w_s');
       $years = $request->get('years');
       $p1 = $request->get('p1');
        $p2 = $request->get('p2');
        $p3 = $request->get('p3');
       $r_f_t = $request->get('r_f_t');
       $address = $request->get('address');
       
       $refid=rand(100,10000);
        $curdate=date('Y-m-d-h-i-s'); 

       
       DB::insert('insert into transfer_request_list(emp_id,ref_id,name,dob,p_w_s,m_s,r_d_f_p_w_s,years,p_1,p_2,p_3,r_f_t,address,t_state,created_at) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$emp_id,$refid,$name,$dob,$p_w_s,$ms,$r_d_f_p_w_s,$years,$p1,$p2,$p3,$r_f_t,$address,0,$curdate]);


       //update vacancy count after adding new transfer request

       $getoldvacancycount= DB::select('select * from depos where placename= ?',[$p_w_s]);



     // dd($getoldvacancycount);

       $v_count = $getoldvacancycount[0]->v_count;

      

       //update v count 

       $newv_count=$v_count+1;

       DB::update('update depos set v_count=?  where placename=?',[$newv_count,$p_w_s]); 

       
       $red = redirect('admin/transfersboard/addnewrequest')->with('success','New Transfer Request has been added successfully');

       return $red;


      }


 //get edit transfer request page

    public function getedittransferrequest($id){
     $transferrequests = DB::select('select * from transfer_request_list where t_ref_id=?',[$id]);
     $pwsdepos = DB::select("select * from depos");
     $p1s = DB::select("select * from depos");
     $p2s = DB::select("select * from depos");
     $p3s = DB::select("select * from depos");
     $p4s = DB::select("select * from depos");

        
   return view('dashboard.pages.edit_transferrequest',compact('transferrequests','pwsdepos','p1s','p2s','p3s','p4s'));

   
    }


 //edit transfer request manually

     public function edittransferRequest(Request $request){

     $this->validate($request,[
        't_ref_id'=>'required',
       	'name'=>'required',
       	'emp_id'=>'required',
       	'dob'=>'required',
       	'p_w_s'=>'required',
       	'ms'=>'required',
       	'r_d_f_p_w_s'=>'required',
       	'years'=>'required',
       	'p1'=>'required',
       //	'p2'=>'required',
       //	'p3'=>'required',
       	'r_f_t'=>'required',
       	'address'=>'required',
       ]);


       $t_ref_id=$request->get('t_ref_id');
       $name = $request->get('name');
       $emp_id = $request->get('emp_id');
       $dob = $request->get('dob');
       $p_w_s = $request->get('p_w_s');
       $ms = $request->get('ms');
       $r_d_f_p_w_s = $request->get('r_d_f_p_w_s');
       $years = $request->get('years');
       $p1 = $request->get('p1');
       $p2 = $request->get('p2');
       $p3 = $request->get('p3');
       $r_f_t = $request->get('r_f_t');
       $address = $request->get('address');

       //dd($p_w_s);
       $curdate=date('Y-m-d-h-i-s');

      
      //get old vacancy count by p w a from record going to update

       $getoldpws=DB::select('select * from transfer_request_list where t_ref_id=?',[$t_ref_id]);

       $oldplacename = $getoldpws[0]->p_w_s;

       //check if we are sending same current workstation after updating if we send same workstation vcancy count not changing if it is different subtract 1 vacancy from old workstation and adds to new workstation

       if($p_w_s!=$oldplacename){

       	 $getoldvacancycount= DB::select('select * from depos where placename = ?',[$oldplacename]);

       	 $oldvcount=$getoldvacancycount[0]->v_count;

       	 $newoldvcount=$oldvcount-1;

       	 //updating old v count

       	   DB::update('update depos set v_count=? where placename=?',[$newoldvcount,$oldplacename]); 

       	$getnewvacancycount = DB::select('select * from depos where placename= ?',[$p_w_s]);

       	$newvcount=$getnewvacancycount[0]->v_count;

       	$updatednewvcount=$newvcount+1;


       	//updating new v count

       	DB::update('update depos set v_count=? where placename=?',[$updatednewvcount,$p_w_s]); 



        DB::update('update transfer_request_list set name = ?, dob = ? , emp_id=? , p_w_s = ? , m_s= ?, r_d_f_p_w_s=? , years = ? ,p_1=?,p_2=?,p_3=?,r_f_t=?,address=?,updated_at=? where t_ref_id=? ',[$name,$dob,$emp_id,$p_w_s,$ms,$r_d_f_p_w_s,$years,$p1,$p2,$p3,$r_f_t,$address,$curdate,$t_ref_id]);

       }else{

       	 DB::update('update transfer_request_list set name = ?, dob = ? , emp_id=? , p_w_s = ? , m_s= ?, r_d_f_p_w_s=? , years = ? ,p_1=?,p_2=?,p_3=?,r_f_t=?,address=?,updated_at=? where t_ref_id=? ',[$name,$dob,$emp_id,$p_w_s,$ms,$r_d_f_p_w_s,$years,$p1,$p2,$p3,$r_f_t,$address,$curdate,$t_ref_id]);
       }


      $red = redirect('admin/transfersboard/allrequests/')->with('success','Transfer Request has been updated successfully');

      return $red;
      	
     }

     


    //Transfer Process functions


    //show transfer request info
    public function transferProfile($id){

    	$requestsinfo = DB::select('select * from transfer_request_list where t_ref_id=?',[$id]);
      
        return view('dashboard.pages.transfer_request_info',compact('requestsinfo'));
    }

     public function transferInfoProfile($id){

    	$requestsinfo = DB::select('select * from transfer_request_list where t_ref_id=?',[$id]);
        $depos =DB::select('select * from depos');
        
        //getting preference depo names for get vacancy counts

        //check preference 1 is empty or not
        $p1c=$requestsinfo[0]->p_1;
        $p2c=$requestsinfo[0]->p_2;
        $p3c=$requestsinfo[0]->p_3;

        if(empty($p1c)){
        	 $preference1name="";
        	 $preference1vcount=0;
        }else{
        	 $preference1name=$requestsinfo[0]->p_1;
        	  $preference1vcountget=DB::select('select * from depos where placename=?',[$preference1name]);
        	  $preference1vcount=$preference1vcountget[0]->v_count;

        }

         if(empty($p2c)){
        	 $preference2name="";
        	 $preference2vcount=0;

        }else{
        	 $preference2name=$requestsinfo[0]->p_2;
        	 $preference2vcountget=DB::select('select * from depos where placename=?',[$preference2name]);
        	 $preference2vcount=$preference2vcountget[0]->v_count;

        }

         if(empty($p3c)){
        	 $preference3name="";
        	 $preference3vcount=0;
        }else{
        	 $preference3name=$requestsinfo[0]->p_3;
        	 $preference3vcountget=DB::select('select * from depos where placename=?',[$preference3name]);
        	 $preference3vcount=$preference3vcountget[0]->v_count;

        }

       


      /*  $preference1name=$requestsinfo[0]->p_1;
        $preference2name=$requestsinfo[0]->p_2;
        $preference3name=$requestsinfo[0]->p_3;
        
        //getting vacancy counts 
        $preference1vcountget=DB::select('select * from depos where placename=?',[$preference1name]);
        $preference2vcountget=DB::select('select * from depos where placename=?',[$preference2name]);
        $preference3vcountget=DB::select('select * from depos where placename=?',[$preference3name]);
        
        
        
        $preference1vcount=$preference1vcountget[0]->v_count;
        $preference2vcount=$preference2vcountget[0]->v_count;
        $preference3vcount=$preference3vcountget[0]->v_count;*/






        return view('dashboard.pages.transfer_request_profile',compact('requestsinfo','depos','preference1name','preference2name','preference3name','preference1vcount','preference2vcount','preference3vcount'));





    }



    

    public function completeTransferRequest(Request $request,$id) {
      
      //transfer request data 
       $this->validate($request,[
        'emp_id' => 'required',
        'preference'=>'required',
        'notes'=>'required',
       ]);
       

       //getting data from transfer request form


      // $t_ref_id = $request->get('t_ref_id');
        $t_ref_id = $id;

       $emp_id = $request->get('emp_id');

       $preference = $request->get('preference');

       $notes = $request->get('notes');
        

       //getting other data of transfer request from database
       $trequestinfo=DB::select('select * from transfer_request_list where t_ref_id = ? and emp_id=? ',[$t_ref_id,$emp_id]);
        $created_at = date('Y-m-d-h-i-s');

       $started_at=$trequestinfo[0]->p_w_s;
       $name=$trequestinfo[0]->name;
       $t_from=$trequestinfo[0]->p_w_s;
       $t_to=$preference;
       $t_reason=$trequestinfo[0]->r_f_t;
       $s_reason=$notes;
       $t_date=$created_at;

       $ended_at=$preference;

      
       //checking transfer cycle count for create new transfer cycle or continue previously created transfer cycle
       $checktransfercyclecount=DB::select('select * from transfer_cycle');


       
       //counting cycles from data
       $tcyclecount=count($checktransfercyclecount);

       //if no cycles in the database  creating first cycle 
       if($tcyclecount==0){

       	//checking user prefered depo has vacancies

       	$chekvcount=DB::select('select * from depos where placename=?',[$preference]);

       	$getvcount=$chekvcount[0]->v_count;

       	if($getvcount>0){


        

        
        $createtransfercycle=DB::insert('insert into transfer_cycle(started_at,ended_at,t_p_c,created_at,c_state) values(?,?,?,?,?)',[$started_at,$ended_at,1,$created_at,0]);

         $checklastcycle=DB::select('select * from transfer_cycle  order by c_id DESC limit 1');

        $last_c_id=$checklastcycle[0]->c_id;
        
        $insert_transfer_cycle_info=DB::insert('insert into transfer_cycles_info(emp_no,t_ref_id,c_id,t_order,name,t_from,t_to,t_reason,s_reason,t_date) values(?,?,?,?,?,?,?,?,?,?)',[$emp_id,$t_ref_id,$last_c_id,1,$name,$t_from,$t_to,$t_reason,$s_reason,$t_date]);



        $getoldvacancycount=DB::select('select * from depos where placename=?',[$t_to]);

        $oldvacancycount=$getoldvacancycount[0]->v_count;

        $newvacancycount=$oldvacancycount-1;

        $updatenewvacancycount=DB::update('update depos set v_count=? where placename=?',[$newvacancycount,$t_to]);

       

        $updatelastendpoint=DB::update('update transfer_cycle set ended_at=? where c_id=?',[$ended_at,$last_c_id]);

        $update_transfer_request_state=DB::update('update transfer_request_list set t_state=1 where t_ref_id=?',[$t_ref_id]); 

        $id=$last_c_id;
       // $red = redirect('transfersboard/transfercycleinfo/',$id)->with('success','Person Transfered Successfully');
       
        //return $red;
         return redirect()->route('transfer.cycleinfo', array('id' => $id))->with('success','Person Transfered Successfully');

         
        
       }else{

          return redirect()->route('transfer.requestcomplete', array('id' => $id))->with('danger','there no vacancies on selected depo');
       }

       }else {

       	/*if cycles in the database check the last cycle is finished or not if it is finished  created a new transfer cycle else continue the last unfinshed transfer cycle*/

       	$checklastcycle=DB::select('select * from transfer_cycle  order by c_id DESC limit 1');

        $c_state = $checklastcycle[0]->c_state;
        $c_id =$checklastcycle[0]->c_id;
        $c_started_point=$checklastcycle[0]->started_at;
        $lastcycleendpoint=$checklastcycle[0]->ended_at;
        /*checking last cycle is finished or not*/
        if($c_state==1){

        $chekvcount=DB::select('select * from depos where placename=?',[$preference]);

       	$getvcount=$chekvcount[0]->v_count;

       	if($getvcount>0){
         
        $createtransfercycle=DB::insert('insert into transfer_cycle(started_at,ended_at,t_p_c,created_at,c_state) values(?,?,?,?,?)',[$started_at,$ended_at,1,$created_at,0]);
          $checklastcycle=DB::select('select * from transfer_cycle  order by c_id DESC limit 1');

        $last_c_id=$checklastcycle[0]->c_id;
        
        $insert_transfer_cycle_info=DB::insert('insert into transfer_cycles_info(emp_no,t_ref_id,c_id,t_order,name,t_from,t_to,t_reason,s_reason,t_date) values(?,?,?,?,?,?,?,?,?,?)',[$emp_id,$t_ref_id,$last_c_id,1,$name,$t_from,$t_to,$t_reason,$s_reason,$t_date]);

        

        $getoldvacancycount=DB::select('select * from depos where placename=?',[$t_to]);

        $oldvacancycount=$getoldvacancycount[0]->v_count;

        $newvacancycount=$oldvacancycount-1;

        $updatenewvacancycount=DB::update('update depos set v_count=? where placename=?',[$newvacancycount,$t_to]);
        
         $update_transfer_request_state=DB::update('update transfer_request_list set t_state=1 where t_ref_id=?',[$t_ref_id]);

          return redirect()->route('transfer.cycleinfo', array('id' => $last_c_id))->with('success','Person Transfered Successfully');
         
         }else{

         	return redirect()->route('transfer.requestcomplete', array('id' => $id))->with('danger','there no vacancies on selected depo');
         } 

        }else if($c_state==0){

       
        //check user prefered depo has vacancies

         $chekvcount=DB::select('select * from depos where placename=?',[$preference]);

       	$getvcount=$chekvcount[0]->v_count;

       	if($getvcount>0){

         //check end point is requested users last workstation

        	if($started_at==$lastcycleendpoint){

            //calculating transfer order id in tranfer cycle info list 
            $getlastordernofromtinfo=DB::select('select * from transfer_cycles_info where c_id=?  order by t_order DESC limit 1',[$c_id]);

            $lastorderidofcycleinfo=$getlastordernofromtinfo[0]->t_order;

            $neworderid=$lastorderidofcycleinfo+1;
              
              $insert_transfer_cycle_info=DB::insert('insert into transfer_cycles_info(emp_no,t_ref_id,c_id,t_order,name,t_from,t_to,t_reason,s_reason,t_date) values(?,?,?,?,?,?,?,?,?,?)',[$emp_id,$t_ref_id,$c_id,$neworderid,$name,$t_from,$t_to,$t_reason,$s_reason,$t_date]);

         //geting and incresing total transfered people count in cycle
        $getoldvacancycount=DB::select('select * from depos where placename=?',[$t_to]);

        $gettpc=DB::select('select * from transfer_cycle where c_id=?',[$c_id]);

        $getpccount=$gettpc[0]->t_p_c;

        $newtpccount= $getpccount+1;



        $oldvacancycount=$getoldvacancycount[0]->v_count;

        $newvacancycount=$oldvacancycount-1;

        $updatenewvacancycount=DB::update('update depos set v_count=? where  placename=?',[$newvacancycount,$t_to]);
      //updating last end point of transfer cycle and updating transfered people count
        $updatelastendpointofcycle=DB::update('update transfer_cycle set ended_at=?,t_p_c=? where c_id',[$t_to,$newtpccount,$c_id]);

       //update transfer request list mark transfer has completed
       $update_transfer_request_state=DB::update('update transfer_request_list set t_state=1 where t_ref_id=?',[$t_ref_id]); 


        /*check if endpoint of the cycle is equal to  starting point of the cycle if it is true update transfer cycle as completed and redirect to completed transfer cycles page else redirect to transfer cycle profile page*/



        if($c_started_point==$t_to){
            
            $updatecyclestatus=DB::update('update transfer_cycle set c_state=1 where  c_id=?',[$c_id]);

             $red =  redirect('admin/transfersboard/completedtransfercycles');
            
            //return $red;
             return redirect()->route('transfer.completedcycles')->with('success','Person Transfered Successfully');

        }else{

        	$id=$c_id;
            //$red = redirect('transfersboard/transfercycleinfo/',$id)->with('success','Person Transfered Successfully');
        	//return view('dashboard.pages.transfer_cycle_view',compact('cycle_id','transfercyclerecords'));
        	//return $red;
        	 return redirect()->route('transfer.cycleinfo', array('id' => $id))->with('success','Person Transfered Successfully');
        }





        	}else{

        	   $id=$c_id;

             //  $red = redirect('transfersboard/transfercycleinfo/',$id)->with('danger','Your current workstation not match with cycle end point please sect another request to transfer');
             // $red;
            return redirect()->route('transfer.cycleinfo', array('id' => $id))->with('danger','Your current workstation not match with cycle end point please select another request to transfer');

        	}

        }else{
        	return redirect()->route('transfer.requestcomplete', array('id' => $id))->with('danger','there no vacancies on selected depo');

        }


        
         

        }/*end of second main if condition*/

       }/*end point of main if condition*/



     }

     public function deleteCycle($id){

     	

     	$cid=$id;

     	   $transferrecords=DB::select('select * from transfer_cycles_info where c_id=?',[$cid]);

     	//move each and every transfer request in the cycle to transfer request list 

     	foreach ($transferrecords as $transferrecord) {

     		$t_ref_id=$transferrecord->t_ref_id;
     		$t_from=$transferrecord->t_from;

     		/*section setting vacancy count to old states*/

     	    $selectoldvacancycount=DB::select('select * from depos where placename=?',[$t_from]);
        
     	    $oldvacancycount=$selectoldvacancycount[0]->v_count;
       
     	    $newvacancycount=$oldvacancycount+1;
           //update depo vacancy count
     	   $updatedepos = DB::update('update depos set v_count = ? where placename =?',[$newvacancycount,$t_from]);
     	  //update transfer request rate
     	   $update_transfer_request_state=DB::update('update transfer_request_list set t_state=0 where t_ref_id=?',[$t_ref_id]);
     	}
        
         
         //deleting records acording to cycle id 
         DB::delete('delete from transfer_cycles_info where c_id=?',[$cid]);
         
         //deleting transfer cycle from transfer cycles

         DB::delete('delete from transfer_cycle where c_id=?',[$cid]);

          $red =  redirect('admin/transfersboard/transfercycles');
         return $red;
         

     }

       public function deleteAllCycles(Request $request){

         $this-> validate($request,[
            'cids' => 'required',
        ]);

        $cids = $request->get('cids');

        $transfercycles = DB::select('select * from transfer_cycle where c_id in ('.implode(",",$cids).')');

     	foreach ($transfercycles as $transfercycle) {

     		$cid=$transfercycle->c_id;
     		
     
        $transferrecords=DB::select('select * from transfer_cycles_info where c_id=?',[$cid]);
     	//move each and every transfer request in the cycle to transfer request list 

     	foreach ($transferrecords as $transferrecord) {

     		$t_ref_id=$transferrecord->t_ref_id;
     		$t_from=$transferrecord->t_from;

     		/*section setting vacancy count to old states*/

     	    $selectoldvacancycount=DB::select('select * from depos where placename=?',[$t_from]);
        
     	    $oldvacancycount=$selectoldvacancycount[0]->v_count;
     	    $newvacancycount=$oldvacancycount+1;
           //update depo vacancy count
     	   $updatedepos = DB::update('update depos set v_count = ? where placename =?',[$newvacancycount,$t_from]);
     	  //update transfer request rate
     	   $update_transfer_request_state=DB::update('update transfer_request_list set t_state=0 where t_ref_id=?',[$t_ref_id]);
     	  }
        
         
         //deleting records acording to cycle id 
         DB::delete('delete from transfer_cycles_info where c_id=?',[$cid]);
         
        

       }

       //deleting transfer cycle from transfer cycles
       DB::delete('delete from transfer_cycle where c_id in ('.implode(",",$cids).')');
        
       $red =  redirect('admin/transfersboard/transfercycles');

       return $red;
         

     }

     //Export Transport Cycle Data to Excel File  

       public function ExportTransferCycleToExcel($id)
    {
    	$curdate=date('Y-m-d-h-i');
        
        $cid=$id;

        $cycleinfo = DB::select('select * from transfer_cycle where c_id');

        $cyclespoint=$cycleinfo[0]->started_at;
        $cycleepoint=$cycleinfo[0]->ended_at;
        $tpc=$cycleinfo[0]->t_p_c;
        $cstate=$cycleinfo[0]->c_state;


       // $groupid = $request->get('group_id');

       // $result = DB::table('groups')->select('groupname')->where('id', $groupid)->first();
      
        // $groupname= $result->groupname;

        

        return (new TransferCycleExport($cid,$cyclespoint,$cycleepoint,$tpc,$cstate))->download('Transfer-Cycle-'.$cid.'-Report'.$curdate.'.xlsx');
    }

    //Export Transport Cycle Data to Word File

     public function ExportCyclesToWordDocx($id)

       {

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
       $newSection->addText('Transfer Cycle Information', $header);

       $transferCycleinfo = DB::select("select * from transfer_cycle where c_id=? ",[$id]);

       $cyclespoint=$transferCycleinfo[0]->started_at;
       $cycleepoint=$transferCycleinfo[0]->ended_at;
       $tpc=$transferCycleinfo[0]->t_p_c;
       $cstate=$transferCycleinfo[0]->c_state;

       if($cstate==1){
          $cyclestate='Cycle Completed';
    	}else{
    	  $cyclestate='Cycle Not Completed';
    	}

        $cyclesinfo = DB::select("select * from transfer_cycles_info where c_id=? ORDER BY t_order ASC",[$id]);
        

         $maintable=$newSection->addTable($tablestyles);

         $maintable->addRow();
         $maintable->addCell(1750)->addText("Cycle ID", $rowheader);
         $maintable->addCell(4000)->addText($id);
         $maintable->addRow();
         $maintable->addCell(1750)->addText("Cycle Started At", $rowheader);
         $maintable->addCell(4000)->addText($cyclespoint);
         $maintable->addRow();
         $maintable->addCell(1750)->addText("Cycle Ended At", $rowheader);
         $maintable->addCell(4000)->addText($cycleepoint);
         $maintable->addRow();
         $maintable->addCell(1750)->addText("Total People Transferred", $rowheader);
         $maintable->addCell(4000)->addText($tpc);
          $maintable->addRow();
         $maintable->addCell(1750)->addText("Cycle State", $rowheader);
         $maintable->addCell(4000)->addText($cyclestate);
         

         $newSection->addText('Transfer Cycle Information Details', $header);
       
       $table = $newSection->addTable( $tablestyles);
       $table->addRow();
         $table->addCell(1750)->addText("Order", $rowheader);
         $table->addCell(1750)->addText("Employee No", $rowheader);
         $table->addCell(1750)->addText("Tref No", $rowheader);
         $table->addCell(1750)->addText("Name", $rowheader);
         $table->addCell(1750)->addText("From", $rowheader);
         $table->addCell(1750)->addText("To", $rowheader);
         $table->addCell(1750)->addText("Reason for Transfer", $rowheader);
         $table->addCell(1750)->addText("Special for Transfer", $rowheader);
         $table->addCell(1750)->addText("Date", $rowheader);
        foreach($cyclesinfo as $cycleinfo){
         $table->addRow();
         $table->addCell(1750)->addText($cycleinfo->t_order);
         $table->addCell(1750)->addText($cycleinfo->emp_no);
         $table->addCell(1750)->addText($cycleinfo->t_ref_id);
          $table->addCell(1750)->addText($cycleinfo->name);
         $table->addCell(1750)->addText($cycleinfo->t_from);
         $table->addCell(1750)->addText($cycleinfo->t_to);
         $table->addCell(1750)->addText($cycleinfo->t_reason);
         $table->addCell(1750)->addText($cycleinfo->s_reason);
         $table->addCell(1750)->addText($cycleinfo->t_date);
        
        


        }



     
        
  /*    for ($r = 1; $r <= 8; $r++) {
    $table->addRow();
    for ($c = 1; $c <= 2; $c++) {

        $table->addCell(1750)->addText("Row {$r}, Cell {$c}");

      }
      }*/
      


       $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest,'Word2007');

       try{
       	 $objectWriter->save(storage_path('Transfer-Cycle-'.$id.'-'.$curdate.'.docx'));
       } catch (Exception $e){

       }

       return response()->download(storage_path('Transfer-Cycle-'.$id.'-'.$curdate.'.docx'));

   }

   //Export to PDF
   
      public function ExportCycleToPDF($id)
    {
        

        $cid=$id;

        $cycledata = DB::select("select * from transfer_cycle where c_id=? ",[$cid]); 

        //$result = DB::table('users')->select('name','lname','profile_img','designation','work_place')->where('union_id', $memberid)->first();

        //dd($result)
        
        $cyclespoint = $cycledata[0]->started_at;
        $cycleepoint = $cycledata[0]->ended_at;
        $tpc = $cycledata[0]->t_p_c;
        $createddate =$cycledata[0]->created_at;
        $cstate=$cycledata[0]->c_state;

        if($cstate==1){
          $cyclestate='Cycle Completed';
    	}else{
    	  $cyclestate='Cycle Not Completed';
    	}
        $curdate = date('Y-m-d-h-i');


         $cycleinfodata = DB::select("select * from transfer_cycles_info where c_id=? ",[$cid]); 




         

        
        // dd($data);

         // return view('pdfreports.reports.usersbyworkplace',compact('userlist'));
        $pdf = PDF::loadView('pdfreports.reports.transfercycleinfo',compact('cycleinfodata','cyclespoint','cycleepoint','tpc','createddate','cyclestate','cid'))->setPaper('a4', 'landscape');
        //return $pdf->download('Department-Workers.pdf');
         return $pdf->download('Transfer Cycle'.$cid.'information'.$curdate.'.pdf');
        
    }


}
