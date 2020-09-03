<?php


namespace App\classes;




use App\Registed;

class openApplication
{
//open date
//closing date
//academic year


    public function currentAcademicYear()
    {
        $year = date("Y");
        $previousYear = $year - 1;
        return (string)$previousYear . "/" . $year;
    }

    public function hasRegistered($indexNumber,$semester)
    {
          return Registed::where('index_number',$indexNumber)->where('semester',$semester)->where('registered', 1)->count();
    }


}
