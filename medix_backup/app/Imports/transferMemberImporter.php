<?php

namespace App\Imports;

//use App\DateTime;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\WithStartRow;

class transferMemberImporter implements ToCollection,WithStartRow
{


	public function startRow():int
	{
       return 2;
	}
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        //inserting transfer request records to database

        foreach ($rows as $row) {
         //dd($row);
         $emp_id = $row[1];
         $ref_no = $row[0];
         $name = $row[2];

         //$dobold= strtotime($row[3]);
        // $dobcalc= new DateTime($dobold);
         $dob = date("Y-m-d",$row[3]);
          //dd($dob);

         $ms= $row[5];
         $pws=$row[4];
          // $rdfpwsold= strtotime($row[6]);
        // $rdfpwscalc= new DateTime($rdfpwsold);
         $rdfpws = date("Y-m-d",$row[6]);
         //$rdfpwscalc->format('Y-m-d');
        // $rdfpws= date('Ymd', $row[6]);


         $yearsofwork = $row[7];
         $p1=$row[8];
         $p2=$row[9];
         $p3=$row[10];
         $rt=$row[11];
         $address=$row[12];

          $curdate=date('y-m-d');
         // dd($dob);
           $checkrecord = DB::select('select * from transfer_request_list where  emp_id=? and ref_id',[$emp_id,$ref_no]);

        if(empty($checkrecord)){
         $insertrecords=DB::insert('insert into transfer_request_list(emp_id,ref_id,name,dob,p_w_s,m_s,r_d_f_p_w_s,years,p_1,p_2,p_3,r_f_t,address,t_state,created_at)value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$emp_id,$ref_no,$name,$dob,$pws,$ms,$rdfpws,$yearsofwork,$p1,$p2,$p3,$rt,$address,0,$curdate]);

     }
         $checkdepos1 = DB::select('select * from  depos where  placename=?',[$pws]);
         $checkdepos2 = DB::select('select * from  depos where  placename=?',[$p1]);
         $checkdepos3 = DB::select('select * from  depos where  placename=?',[$p2]);
         $checkdepos4 = DB::select('select * from  depos where  placename=?',[$p3]);

          //$curdate=date('Y-M-D-H-I-s');
           // $curdate=date('ymd');

           if(empty($checkdepos1)){
            
          //  dd($pws);

           	//inserting depos who are not in the  current depo list geting from current work place
           	//checks if the placename is empty or not
           	if(!empty($pws)){
            $insertdepos=DB::insert('insert into depos(placename,created_at) value(?,?)',[$pws,$curdate]);
            }
            
           }
            

            //inserting depos who are not in the  current depo list geting from 1 st preference place
             if(empty($checkdepos2)){
             	//checks if the placename is empty or not
             	if(!empty($p1)){
            $insertdepos=DB::insert('insert into  depos(placename,created_at) value(?,?)',[$p1,$curdate]);
            }
            
           }

              //inserting depos who are not in the  current depo list geting from 2 nd preference place
             if(empty($checkdepos3)){
             	//checks if the placename is empty or not
            if(!empty($p2)){
            $insertdepos = DB::insert('insert into depos(placename,created_at) value(?,?)',[$p2,$curdate]);
           }
            
           }

               //inserting depos who are not in the  current depo list geting from 3rd preference place
             if(empty($checkdepos4)){
             	//checks if the placename is empty or not
             if(!empty($p3)){
            $insertdepos = DB::insert('insert into depos(placename,created_at) value(?,?)',[$p3,$curdate]);
             }
            
           }












        	
        }
    }
}
