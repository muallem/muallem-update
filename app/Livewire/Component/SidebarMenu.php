<?php

namespace App\Livewire\Component;


use App\Models\Judul;
use Livewire\Component;
use App\Helpers\AuthHelper;
use Illuminate\Support\Facades\DB;

class SidebarMenu extends Component
{
    public $thesis_admin;
    public $thesis_student;

    public function mount()
    {
        $this->getSidebar();
    }

    public function getSidebar()
    {
        $this->thesis_admin = [];
        $this->thesis_student = [];
            $thesis = Judul::select('juduls.id', 'juduls.group', 'wpjs_users.user_login', DB::raw('COUNT(materi_feedback.id) as materi_count'))
            ->leftJoin('materi_feedback', function ($join) {
                $join->on('juduls.student_id', '=', 'materi_feedback.student_id')
                    ->whereNull('materi_feedback.feedback');
            })
            ->leftJoin('wpjs_users', 'juduls.student_id', '=', 'wpjs_users.id')
            ->groupBy('juduls.id', 'juduls.group', 'wpjs_users.user_login')
            ->get()->toArray();
            $this->thesis_admin = $thesis;
        
            $thesis_student = session()->get('user_id');
            // $thesis_student = Judul::where('student_id', session()->get('user_id'))->first();
            $this->thesis_student = $thesis_student;
        
        // $this->dispatchBrowserEvent('consoleLog', ['message' => $this->thesis]);
    }
    public function render()
    {
        return view('livewire.component.sidebar-menu');
    }
}