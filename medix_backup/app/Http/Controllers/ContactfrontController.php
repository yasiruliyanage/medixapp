<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class ContactfrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        
         //$this->middleware('guest');
        //$this->middleware('admin',['except' =>'test']);

    }
    public function index()
    {
         //$news = DB::select("select * from news ");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('frontend/pages/contact_us');
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
          $this-> validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
             'message' => 'required',
        ]);

     
       //geting data from  membership field data
      

       $name = $request->get('name');
       $email = $request->get('email');
       $phone = $request->get('phone');
       $subject = $request->get('subject');
       $message = $request->get('message');

       $email_from='hi@dinukawijesinghe.com';
            $email_subject="New message from $name";
            $msg="<html><header>
<!-- Latest compiled and minified CSS -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
</header>
<body>
<div class='container-fluid'>
<div class='row'>
<div class='well col-md-12'>
<div class='table-responsive'>
<table class='table-striped '>
<tr>
<th> Full Name</th><td>".$name."</td>
</tr>

<tr>
<th>Email</th><td>".$email."</td>
</tr>

<tr>
<th>Phone</th><td>".$phone."</td>
</tr>
<tr>
<th>Subject</th><td>".$subject."</td>
</tr>
<tr>
<th>Message</th><td>".$message."</td>
</tr>

</table>
</div>
<p>&copy;www.cebtu.lk</p>
</div>
</div>
</div>


</body>

<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
</html>";
        
            
            //sending email
            $to= "info@cebtu.lk";
               $headerFields = array(
    "From:$email",
    "Cc:cisworldmail@gmail.com",
    "MIME-Version: 1.0",
    "Content-Type: text/html;charset=utf-8"
    );
            mail($to,$email_subject,$msg,implode("\r\n", $headerFields));
           $red= redirect('/contact')->with('success','Message Sent successfully');
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
