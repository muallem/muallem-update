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

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function model(array $row)
    {
        // $title = $row[0];
        // $body = $row[1];
        
        // $lesson = new Lesson();
        // $lesson->lesson_chapter = $this->name;
        // if($lesson->save())
        // {
        //     $lesson_detail = new LessonDetail();
        //     $lesson_detail->lesson_id = $lesson->id;
        //     $lesson_detail->lesson_title = $title;
        //     $lesson_detail->lesson_body = $body;
        //     $lesson_detail->save();
        // }
        // return null;
    }
}
