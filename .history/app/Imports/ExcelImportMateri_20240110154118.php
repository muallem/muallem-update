<?php

namespace App\Imports;

use App\Models\Lesson;
use App\Models\LessonDetail;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class ExcelImportMateri implements ToModel
{
    use Importable;

    private $lesson_id;

    public function __construct($lesson_id)
    {
        $this->lesson_id = $lesson_id;
    }

    public function model(array $row)
    {
        $title = $row[0];
        $body = $row[1];

        $lesson_detail = new LessonDetail();
        $lesson_detail->lesson_id = $this->lesson_id;
        $lesson_detail->lesson_title = $title;
        $lesson_detail->lesson_body = $body;
        $lesson_detail->save();
        
        return null;
    }
}
