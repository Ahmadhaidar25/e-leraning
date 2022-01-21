<?php

namespace App\Exports;

use App\Models\peresensi;
use Maatwebsite\Excel\Concerns\FromCollection;

class presensi implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return peresensi::all();
    }
}
