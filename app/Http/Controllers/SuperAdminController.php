<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Judul;
use App\Models\Lesson;
use App\Models\Materi;
use App\Models\Thesis;
use App\Helpers\AuthHelper;
use App\Models\LessonDetail;
use Illuminate\Http\Request;
use App\Models\MateriFeedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class SuperAdminController extends Controller
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
    public function materi()
    {
        return view('superadmin.dashboard.materi.index');
    }
    public function category()
    {
        return view('superadmin.dashboard.category.index');
    }
    public function index()
    {
        // return LessonDetail::get();
        // return Lesson::with([
        //     'lesson_titles' => function($query){
        //         return $query->select('id', 'lesson_id', 'lesson_title');
        //     },
        //     'lesson_titles.lesson_details'
        // ])->get();
        return view('superadmin.index');
    }
    public function show($id)
    {
        $lesson = Lesson::where('id', $id)->with('lesson_details', 'category')->first();
        return view('superadmin.dashboard.materi.detail', compact('lesson'));
    }
    public function materi_old(Request $request)
    {
        $thesis = Judul::where('id', $request->thesis_id)->with('user')->first();

        return view('superadmin.materi', compact('thesis'));
    }
    public function coba(){
        return Thesis::select('id', 'title', 'group', 'student_id')->with('user')->get();
    }
    public function materi_detail($lesson_detail_id)
    {
        $lesson_detail = LessonDetail::where('id', Crypt::decryptString($lesson_detail_id))->first();
        $lesson = Lesson::where('id', $lesson_detail->lesson_id)->with('lesson_details', 'category')->first();
        return view('lesson.index', compact('lesson_detail', 'lesson'));
    }
}
