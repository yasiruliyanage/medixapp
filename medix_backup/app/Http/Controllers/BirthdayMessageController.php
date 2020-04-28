<?php

namespace App\Http\Controllers;
use App\Sms;
use SoapClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BirthdayMessageController extends Controller
{


	 public function __construct()
    {
        
         $this->middleware('guest');
       

    }


    
       public function sendBirthdaymessage()

    {

    	 $sms= new Sms();

            $client = $sms->getClient();

    	 $username='esmsusr_chl';
                 $password='250jpul';
                  $session=$sms->createSession('',$username,$password,''); 
        $birthdaymembers  = DB::select("select * from users  where date_format(dob,'%d %m') = date_format(curdate(),'%d %m')");

          foreach( $birthdaymembers as $birthdaymember){
                $member_mobile = $birthdaymember->mobile;
                $member_name = $birthdaymember->name;

                 $message='Wish you Happy Birthday'.$member_name.'Greetings from CEBTU-http://www.cebtu.lk/login';
            $alias='CEBTU';
            $sms->sendMessages($session,$alias,$message,$member_mobile, 0); 

           
             }

         $sms->closeSession($session); 
    }

   // $successtext = "greetings sent successfully";

   // return $successtext;

}
