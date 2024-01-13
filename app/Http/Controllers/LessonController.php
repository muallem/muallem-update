<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Judul;
use App\Models\Lesson;
use App\Models\Thesis;
use App\Helpers\AuthHelper;
use Illuminate\Http\Request;
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
        return enc($id);
        $lesson = Lesson::where('id', $id)->with('lesson_details', 'category')->first();
        $judul = Judul::where('id', $judul_id)->with('user')->first();
        return view('admin.lesson', compact('lesson', 'judul'));
    }
}
