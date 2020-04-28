<?php

namespace App\Exports;

use App\GroupMembers;

use Illuminate\Support\Facades\DB;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;
class UsersByGroup implements FromQuery,WithHeadings,WithEvents,ShouldAutoSize
{

	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

   public function __construct( $groupid,$groupname){
        
        $today=date('Y-m-d-h-i');
        $this->today = $today;
        $this->groupname= $groupname;
    	$this->group = $groupid;

    	
    }

    
     public function registerEvents():array {

    	$styleArray = [

    		'font' => [
               'bold' => true,
    		]
 

    	];
 
    	return [
            
            BeforeSheet::class=>function(BeforeSheet $event ) use ($styleArray){
                       $event->sheet->setCellValue('A1',$this->groupname.'   Group Members of CEBTU up to  '.$this->today);
            },

           

           AfterSheet::class => function(AfterSheet $event) use ($styleArray){

           	$event->sheet->getStyle('A2:G2')->applyFromArray($styleArray);

         



           },

    	];
    }
     public function query()
    {
        return GroupMembers::query()->select('member_name','member_mobile')->where('group_id',$this->group)->orderBy('group_id');
    }

    public function headings(): array
    {
        return [
            'Member Name',
            'Mobile',
        ];
    }
}
