<?php

namespace App\Exports;

use App\Models\Respuesta;
use Maatwebsite\Excel\Concerns\FromCollection;


class RespuestasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Respuesta::all();
    }
}
