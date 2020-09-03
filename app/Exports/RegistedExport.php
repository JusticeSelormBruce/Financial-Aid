<?php

namespace App\Exports;

use App\Registed;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegistedExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registed::all();
    }
}
