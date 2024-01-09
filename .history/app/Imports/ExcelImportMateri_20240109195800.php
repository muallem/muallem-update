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
        $chapter = $row[0];
        $title = $row[1];
        $body = $row[2];
        Log::error('Materi: ' . $e->getMessage());
    }
}
