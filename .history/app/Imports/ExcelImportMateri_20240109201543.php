<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Facades\Log;

class ExcelImportMateri implements ToModel
{
    use Importable;

    public function model(array $row)
    {
        $title = $row[0];
        $body = $row[1];
        
        $lesson = new Lesson();
        
    }
}
