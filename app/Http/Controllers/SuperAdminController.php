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
     * Show the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function materi()
    {
        return Judul::select(
            'juduls.id',
            'juduls.category_id', 
            'wpjs_users.user_login', 
            DB::raw('COUNT(lesson_detail_attachments.id) as attachment_count'), 
            'categories.name as group')
            ->leftJoin('lesson_detail_attachments', function ($join) {
                $join->on('juduls.student_id', '=', 'lesson_detail_attachments.student_id')
                ->where('lesson_detail_attachments.created_at', '>', 'juduls.last_seen');
            })
            ->with('category', 'category.lessons', 'category.lessons.lesson_details')
            ->leftJoin('wpjs_users', 'juduls.student_id', '=', 'wpjs_users.id')
            ->leftJoin('categories', 'juduls.category_id', '=', 'categories.id')
            ->groupBy('juduls.id', 'juduls.category_id', 'wpjs_users.user_login', 'categories.name')
            ->get()->toArray();
        
        return view('superadmin.materi.index');
    }
    public function category()
    {
        return view('superadmin.category.index');
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
        return view('superadmin.materi.detail', compact('lesson'));
    }
    public function coba(){
        return Thesis::select('id', 'title', 'group', 'student_id')->with('user')->get();
    }
    public function materi_detail($lesson_detail_id)
    {
        $lesson_detail = LessonDetail::where('id', Crypt::decryptString($lesson_detail_id))->first();
        $lesson = Lesson::where('id', $lesson_detail->lesson_id)->with('lesson_details', 'category')->first();
        return view('superadmin.materi.show', compact('lesson_detail', 'lesson'));
    }
}
