<?php

namespace App\Exports;

use App\Models\Suivi;
use Maatwebsite\Excel\Concerns\FromCollection;

class SuivisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Suivi::all();
    }
}
