<?php

namespace App\Imports;

use App\Models\Suivi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Carbon;

class SuivisImport implements ToModel
{
    /**
 * Transform a date value into a Carbon object.
 *
 * @return \Carbon\Carbon|null
 */
public function transformDate($value, $format = 'Y-m-d')
{
    try {
        return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
    } catch (\ErrorException $e) {
        return \Carbon\Carbon::createFromFormat($format, $value);
    }
}
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new Suivi([
            'id'     => $row[0],
            'date'     => $this->transformDate($row[1]),
            // 'date' => Carbon::parse($row[0]),
            'libelle'    => $row[2],
            'entree'    => $row[3],
            'sortie'    => $row[4],
            // 'solde'    => $row[4],
                // 'id'     => $row[0],
                // 'date'     => $this->transformDate($row[1]),
                // // 'date' => Carbon::parse($row[0]),
                // 'libelle'    => $row[2],
                // 'solde initial'    => $row[3],
                // 'entree'    => $row[4],
                // 'sortie'    => $row[5],
                // 'solde final'    => $row[6],
        ]);
    }
}
