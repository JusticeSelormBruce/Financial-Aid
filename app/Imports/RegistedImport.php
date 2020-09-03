<?php

namespace App\Imports;

use App\Registed;
use Maatwebsite\Excel\Concerns\ToModel;

class RegistedImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Registed([
            'student_name'     => $row[0],
            'gender'     => $row[1],
            'program'    => $row[2],
            'level'    => $row[3],
            'index_number'    => $row[4],
            'registered'    => $row[5],
            'cgpa'    => $row[6],
            'password' => $row[7],
            'registered' => $row[8],
            'semester'  => $row[9]

        ]);
    }
}
