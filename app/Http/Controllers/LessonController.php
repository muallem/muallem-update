<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Judul;
use App\Models\Lesson;
use App\Models\Thesis;
use App\Helpers\AuthHelper;
use App\Models\LessonDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class LessonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($lesson_detail_id, $judul_id)
    {
        $lesson_detail = LessonDetail::where('id', Crypt::decryptString($lesson_detail_id))->first();
        $lesson = Lesson::where('id', Crypt::decryptString($lesson_detail->lesson_id))->with('lesson_details', 'category')->first();
        $judul = Judul::where('id', Crypt::decryptString($judul_id))->with('user')->first();
        return view('lesson.index', compact('lesson_detail', 'lesson', 'judul'));
    }

    // public function show($student_id, $lesson_detail_id)
    // {
    //     $lesson_detail_id = $lesson_detail_id;
    //     $lesson_detail = LessonDetail::where('id', Crypt::decryptString($lesson_detail_id))->with('lesson')->first();
    //     $lesson = Lesson::where('id', $lesson_detail->lesson->id)->with('lesson_details', 'category')->first();
    //     $student = User::
    //     return view('admin.lesson', compact('lesson_detail_id', 'lesson', 'lesson_detail'));
    // }
}
