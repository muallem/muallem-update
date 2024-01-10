<?php

namespace App\Imports;

use App\Models\Lesson;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class ExcelImportMateri implements ToModel
{
    use Importable;

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function model(array $row)
    {
        $title = $row[0];
        $body = $row[1];
        
        $lesson = new Lesson();
        $lesson->lesson_chapter = $title;
        $lesson->save();
        return null;
    }
}
