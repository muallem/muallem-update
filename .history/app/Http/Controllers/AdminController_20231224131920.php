<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Judul;
use App\Models\Materi;
use App\Models\Thesis;
use App\Helpers\AuthHelper;
use Illuminate\Http\Request;
use App\Models\MateriFeedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
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
    public function index()
    {
        return view('admin.index');
    }
    public function materi(Request $request)
    {
        $thesis = Judul::where('id', $request->thesis_id)->with('user')->first();

        return view('admin.materi', compact('thesis'));
    }
    public function rnd()
    {

        $thesis = Judul::select('juduls.id', 'juduls.group', 'wpjs_users.user_login', DB::raw('COUNT(materi_feedback.id) as materi_count'))
        ->leftJoin('materi_feedback', function ($join) {
            $join->on('juduls.student_id', '=', 'materi_feedback.student_id')
                ->whereNull('materi_feedback.feedback');
        })
        ->leftJoin('wpjs_users', 'juduls.student_id', '=', 'wpjs_users.id')
        ->groupBy('juduls.id', 'juduls.group', 'wpjs_users.user_login')
        ->get();

        return $thesis;

        $data = new MateriFeedback();
        $data->kode_materi = "123";
        $data->student_id = "123";
        $data->materi_id = "123";
        $data->save();

        $data = MateriFeedback::all();
        return $data;
        // $user_id = session()->get('user_id');
        $user_id = 20;
        $materi = Materi::where('student_id', $user_id)->get();
        $data_materi = $materi->groupBy('kode_materi');
        return $data_materi;
        return view('student.rnd');
    }
    public function student()
    {
        return view('student.index');
    }

    public function judul(Request $request)
    {
        return view('admin.judul', [
            'thesis_id' => $request->thesis_id,
        ]);
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
