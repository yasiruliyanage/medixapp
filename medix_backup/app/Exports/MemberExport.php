<?php

namespace App\Exports;

use App\pendingUsers;
use Maatwebsite\Excel\Concerns\FromCollection;

class MemberExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pendingUsers::all();
    }
}
