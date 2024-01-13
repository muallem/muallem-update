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
    public function show($id)
    {
        $id = $id;
        $lesson_detail = LessonDetail::where('id', Crypt::decryptString($id))->with('lesson')->first();
        $lesson = Lesson::where('id', $lesson_detail->lesson->id)->with('lesson_details', 'category')->first();
        return view('admin.lesson', compact('id', 'lesson', 'lesson_detail'));
    }
}
