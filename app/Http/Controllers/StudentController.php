<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Judul;
use App\Models\Lesson;
use App\Models\Thesis;
use App\Helpers\AuthHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
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
    public function lesson($id, $judul_id)
    {
        $lesson = Lesson::where('id', $id)->with('lesson_details', 'category')->first();
        $judul = Judul::where('id', $judul_id)->with('user')->first();
        return redirect()->route('lesson_detail', ['id' => Crypt::encryptString($lesson->lesson_details[0]->id)]);
        // return view('admin.lesson', compact('lesson', 'judul'));
    }
    public function index()
    {
        return view('student.index');
    }
    public function kual()
    {
        return view('student.kual');
    }
    public function kuan()
    {
        return view('student.kuan');
    }
    public function rnd()
    {
        return view('student.rnd');
    }
    public function student()
    {
        return view('student.index');
    }
    public function coba(){
        return Thesis::select('id', 'title', 'group', 'student_id')->with('user')->get();
    }
    public function get_session(){
        $allData = Session::all();
        $data = [];

        // Loop through the session data
        foreach ($allData as $key => $value) {
            // Access individual session items
            $data[] = "Key: $key, Value: " . json_encode($value);
        }

        return $data;
    }
}
