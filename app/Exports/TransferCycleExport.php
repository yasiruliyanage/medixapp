<?php

namespace App\Exports;

use App\transferCyclesInfo;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;

class TransferCycleExport implements FromQuery,WithHeadings,WithEvents,ShouldAutoSize
{

	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
  
  public function __construct( $cycleid,$cyclespoint,$cycleepoint,$tpc,$cstate){
        
        $today=date('Y-m-d-h-i');
        $this->today = $today;
        $this->cid= $cycleid;
    	$this->spoint = $cyclespoint;
    	$this->epoint = $cycleepoint;
    	$this->tpc=$tpc;

    	if($cstate==1){
          $this->cstate='Cycle Completed';
    	}else{
    	  $this->cstate='Cycle Not Completed';
    	}

    }

    	 public function registerEvents():array {

    	$styleArray = [

    		'font' => [
               'bold' => true,
    		]
 

    	];
 
    	return [
            
            BeforeSheet::class=>function(BeforeSheet $event ) use ($styleArray){
                       $event->sheet->setCellValue('A1','Cycle ID');
                       $event->sheet->setCellValue('B1',$this->cid);
                       $event->sheet->setCellValue('A2','Cycle Started At');
                       $event->sheet->setCellValue('B2',$this->spoint);
                        $event->sheet->setCellValue('C2','Cycle Ended At');
                       $event->sheet->setCellValue('D2',$this->epoint);
                        $event->sheet->setCellValue('A3','Total People Transfered');
                       $event->sheet->setCellValue('B3',$this->tpc);
                        $event->sheet->setCellValue('A4','Cycle Status');
                       $event->sheet->setCellValue('B4',$this->cstate);

            },

           

           AfterSheet::class => function(AfterSheet $event) use ($styleArray){

           	$event->sheet->getStyle('A5:K5')->applyFromArray($styleArray);



         



           },

    	];


    }
    	
   
       public function query()
    {
        return transferCyclesInfo::query()->select('ci_id','emp_no','t_ref_id','t_order','name','t_from','t_to','t_reason','s_reason','t_date')->where('c_id',$this->cid)->orderBy('t_order');


    }

    public function headings(): array
    {
        return [
            'Cycle Info Id',
            'Employee Id',
            'T Ref Id',
            'Tranfer Order',
            'Employee Name',
            'Transfered From',
            'Transfered To',
            'Reason For Transfer',
            'Special Reason For Transfer',
            'Transfered Date',
        ];
    }

    	
 }

