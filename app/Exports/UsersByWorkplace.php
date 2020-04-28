<?php

namespace App\Exports;

use App\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;

class UsersByWorkplace implements FromQuery,WithHeadings,WithEvents,ShouldAutoSize
{
	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
     public function __construct( $workplace,$placename){
        
         $today=date('Y-m-d-h-i');
        $this->today = $today;
    	$this->workplace = $workplace;
    	$this->workplacename = $placename;

    	

    	
    }

     public function registerEvents():array {

    	$styleArray = [

    		'font' => [
               'bold' => true,
    		]
 

    	];
 
    	return [
            
            BeforeSheet::class=>function(BeforeSheet $event ) use ($styleArray){
                       $event->sheet->setCellValue('A1',$this->workplacename.'   Workers of CEBTU up to  '.$this->today);
            },

           

           AfterSheet::class => function(AfterSheet $event) use ($styleArray){

           	$event->sheet->getStyle('A2:G2')->applyFromArray($styleArray);

         



           },

    	];
    }

    public function query()
    {
        return User::query()->select('name','lname','email','mobile','address','union_id','employee_id')->where('work_place',$this->workplace);
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
