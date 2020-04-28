<?php

namespace App\Exports;

use App\User;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;

class UsersByBirthday implements FromQuery,WithHeadings,WithEvents,ShouldAutoSize
{

	 use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    public function __construct( $today){
        $time=strtotime($today);

        $newtime=date("m-d",$time);
        $newtimetoday=date("y-m-d",$time);

    	$this->today = $newtime;
    	$this->newtoday = $newtimetoday;

    	//dd($this->today);
    }
     public function registerEvents():array {

    	$styleArray = [

    		'font' => [
               'bold' => true,
    		]
 

    	];
 
    	return [
            
            BeforeSheet::class=>function(BeforeSheet $event ) use ($styleArray){
                       $event->sheet->setCellValue('A1','Members of CEBTU having Birthday  '.$this->newtoday);
            },

           

           AfterSheet::class => function(AfterSheet $event) use ($styleArray){

           	$event->sheet->getStyle('A2:G2')->applyFromArray($styleArray);

         



           },

    	];
    }

    public function query(){
    

    	return User::query()->select('name','lname','email','mobile','address','union_id','employee_id')->where(DB::raw("date_format(dob,'%d-%m')"),'=',$this->today);

    	/* $users= DB::select("select name,lname,email,mobile,address,union_id from users where date_format(dob,'%d %m') =?",$this->today);*/

    	// return $users;
    	  

    }
      public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Email',
             'Mobile',
             'Address',
             'Union ID',
             'Employee ID',
        ];
    }

}
