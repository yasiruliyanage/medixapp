<?php

namespace App\Imports;

use App\registerPendingUsers;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\WithStartRow;
//,WithStartRow
class MemberImport implements ToModel,WithStartRow

   
{

    //use Importable,SkipsErrors;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int
    {
        return 2;
    }
	
    public function model(array $data)
    {
      /*  return new registerPendingUsers([
            'employee_id' =>$row[0],
             'union_id'=>$row[1],
             'isregistered'=>0,
        ]);*/

   // foreach($data as $row) {
         $checkrecord = DB::select('select * from register_pending_users where  reg_id=?',[$data[0]]);

        if(empty($checkrecord)){
              return new registerPendingUsers([
             'reg_id' =>$data[0],
             'nic'=>$data[1],
             'isregistered'=>0,
        ]);
        }

        
      // $data = registerPendingUsers::find($row['employee_id']);

         //dd($data);
        // dd($checkrecord);
     /*  if (empty($checkrecord)) {
          return new registerPendingUsers([
            'employee_id' =>$row[0],
             'union_id'=>$row[1],
             'isregistered'=>0,
        ]);
       } */
   // }
}

/*    public function rules(): array
{
    return [
        '0' => Rule::unique('register_pending_users', 'employee_id'),
        '1' => Rule::unique('register_pending_users', 'union_id'), // Table name, field in your db
    ];
}

public function customValidationMessages()
{
    return [
        'employee_id.unique' => 'Employ Id Cant be repeat',
        'union_id.unique' => 'Union Id Cant be repeat',
    ];
}*/

}
