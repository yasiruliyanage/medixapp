<?php

namespace App\Http\Controllers;
use App\Sms;
use SoapClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
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
        $staffmembers = DB::select("select * from staff where inRecycle = 0 ");

        //$designations = DB::select("select * from designations");
       // $workplaces = DB::select("select * from workplaces");

        return view('dashboard.pages.manage_staff',['staffmembers'=>$staffmembers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $designations = DB::select("select * from designations");
    
        return view('dashboard.pages.add_staff',['designations'=>$designations]);
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
            'position' => 'required',
            'phone' => 'required|unique:staff,phone',
            'homephone' => 'required',
            'address'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'nic'=>'required|unique:staff,nic',
            'fblink' => 'required',
             'twlink' => 'required',
              'linkedinlink' => 'required',
               'instalink' => 'required',
               'email' => 'unique:staff,email',
            'photo' => 'image|max:2048',


        ]);

     
       //geting data from  membership field data
      

       $name = $request->get('name');
       $position = $request->get('position');
        $address = $request->get('address');
         $homephone = $request->get('homephone');
          $dob = $request->get('dob');
       $nic = $request->get('nic');
         $gender = $request->get('gender');
       $phone = $request->get('phone');
       $fblink = $request->get('fblink');
         $twlink = $request->get('twlink');
         $linkedinlink = $request->get('linkedinlink');
           $instalink = $request->get('instalink');

        $email = $request->get('email'); 
       $timestamp = now();
       if(empty($request->file('photo'))){   
        $staff = DB::insert('insert into staff(name,position,gender,homephone,nic,dob,address,phone,fblink,twlink,linkedinlink,instalink,email,created_at) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$name,$position,$gender,$homephone,$nic,$dob,$address,$phone,$fblink,$twlink,$linkedinlink,$instalink,$email,$timestamp]);
      


        if($staff){

            $red = redirect('admin/staff/')->with('success','Staff Member succefully added');

        }else {
            $red = redirect('staff/add')->with('danger','Input data failed ');
        }
      }else{
         
          $image =$request->file('photo');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('staff/'),$new_name);

          $staff = DB::insert('insert into staff(name,position,gender,homephone,nic,dob,address,phone,photo,fblink,twlink,linkedinlink,instalink,email,created_at) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$name,$position,$gender,$homephone,$nic,$dob,$address,$phone,$new_name,$fblink,$twlink,$linkedinlink,$instalink,$email,$timestamp]);
      


        if($staff){
              
            $red = redirect('admin/staff/')->with('success','Staff Member succefully added');

        }else {
            $red = redirect('staff/add')->with('danger','Input data failed ');
        }
      }

        return $red;
 

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 /*   public function show($id)
    {
        $members = DB::select('select * from staff where inRecycle=0 and  id=? ',[$id]);

         $designations = DB::select("select * from designations");
         $workplaces = DB::select("select * from workplaces");


        return view('dashboard.pages.member_profile',compact('members','designations','workplaces'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staffmembers = DB::select('select * from staff  where inRecycle=0 and  id=?',[$id]);
      
        //['members'=> $members],['workplaces'=>$workplaces],['designations'=>$designations]
        // $designations = DB::select("select * from designations");

        return view('dashboard.pages.edit_staff',compact('staffmembers'));
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
        //validating membership form fields
            $this-> validate($request,[
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required',
            'homephone' => 'required',
            'address'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'nic'=>'required',
            'fblink' => 'required',
             'twlink' => 'required',
              'linkedinlink' => 'required',
               'instalink' => 'required',
               'email' => 'required',
               'photo' => 'image|max:2048',
        ]);
   

     
      

      $name = $request->get('name');
        $position = $request->get('position');
       $phone = $request->get('phone');
          $address = $request->get('address');
         $homephone = $request->get('homephone');
          $dob = $request->get('dob');
       $nic = $request->get('nic');
         $gender = $request->get('gender');
       $fblink = $request->get('fblink');
         $twlink = $request->get('twlink');
         $linkedinlink = $request->get('linkedinlink');
           $instalink = $request->get('instalink');

        $email = $request->get('email'); 
       $timestamp = now();
      

         if(empty($request->file('photo'))){
        $members = DB::update('update staff set name= ? , position =? , phone =?,homephone=?,gender=?, address=?,dob=?,nic=? , fblink = ? , twlink=? , linkedinlink = ? , instalink = ? , email = ? , updated_at = ? where id = ? ',
        [$name,$position,$phone,$homephone, $gender,$address,$dob,$nic,$fblink,$twlink,$linkedinlink,$instalink,$email,$timestamp,$id]);

       if($members) {
            $red = redirect('admin/staff')->with('success','Data has been updated');



       }else {

         $red = redirect('staff/edit/',$id)->with('danger','Error update please try again');
       }

       return $red;
        } else {

          

          //geting data from  membership field data
       $image =$request->file('photo');
       $new_name = rand().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('staff/'),$new_name);
      // $new_name="test.jpg";
          $members = DB::update('update staff set name= ? , position = ? , phone = ?,homephone=?,gender=?, address=?,dob=?,nic=?, photo = ? , fblink = ? , twlink= ? , linkedinlink = ? , instalink = ? , email = ? , updated_at = ? where id = ? ',
        [$name,$position,$phone,$homephone,$gender,$address,$dob,$nic,$new_name,$fblink,$twlink,$linkedinlink,$instalink,$email,$timestamp,$id]);

       if($members) {
            $red = redirect('admin/staff')->with('success','Data has been updated');



       }else {

         $red = redirect('staff/edit/',$id)->with('danger','Error update please try again');
       }

       return $red;
        }
     

       



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = DB::delete('delete from staff where id =?',[$id]);
        $red = redirect('admin/staff');
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
        $dbs = DB::delete('delete from staff where id in ('.implode(",",$ids).')'); 
        return redirect('admin/home');

    }

     public function recycleAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  staff set inRecycle = 1  where id in ('.implode(",",$ids).')');
        return redirect('admin/staff');

    }

       public function restoreall(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::update('update  staff set inRecycle = 0  where id in ('.implode(",",$ids).')');
        return redirect('admin/home');

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recycle($id)
    {
        $staff = DB::update('update staff set inRecycle = 1  where id =?',[$id]);
        $red = redirect('admin/staff');
        return $red;
    }

     public function restore($id)
    {
        $staff = DB::update('update staff set inRecycle = 0  where id =?',[$id]);
        $red = redirect('admin/staff');
        return $red;
    }


      public function showTrash()
    {
        $staffmembers = DB::select('select * from staff where inRecycle=1');

        return view('dashboard.pages.staff_trash',compact('staffmembers'));
    }
   
   



    

     
}
