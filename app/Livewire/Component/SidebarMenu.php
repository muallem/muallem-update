<?php

namespace App\Livewire\Component;


use App\Models\Judul;
use Livewire\Component;
use App\Helpers\AuthHelper;
use Illuminate\Support\Facades\DB;

class SidebarMenu extends Component
{
    public $kata = 0;
    public $thesis_admin;
    public $thesis_student;

    public function mount()
    {
        $this->getKata();
    }

    public function getKata()
    {

        $this->kata += 1;
        $thesis = Judul::select('juduls.id', 'juduls.category_id', 'wpjs_users.user_login', DB::raw('COUNT(materi_feedback.id) as materi_count'), 'categories.name as group')
            ->leftJoin('materi_feedback', function ($join) {
                $join->on('juduls.student_id', '=', 'materi_feedback.student_id')
                    ->whereNull('materi_feedback.feedback');
            })
            ->with('category', 'category.lessons', 'category.lessons.lesson_details')
            ->leftJoin('wpjs_users', 'juduls.student_id', '=', 'wpjs_users.id')
            ->leftJoin('categories', 'juduls.category_id', '=', 'categories.id')
            ->groupBy('juduls.id', 'juduls.category_id', 'wpjs_users.user_login', 'categories.name')
            ->get()->toArray();
            $this->thesis_admin = $thesis;
        
            $this->thesis_student = Judul::where('student_id', session()->get('user_id'))->with('category', 'category.lessons')->first();
            $this->emit('contentUpdated');
    }
    public function render()
    {
        return view('livewire.component.sidebar-menu');
    }
}