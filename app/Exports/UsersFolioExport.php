<?php

namespace App\Exports;

use App\Models\UserFolio;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersFolioExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UserFolio::all();
    }
}
