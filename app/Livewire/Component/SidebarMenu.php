<?php

namespace App\Http\Livewire\Component;


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
        if(AuthHelper::isAdmin()){
            $theses = Judul::select(
                'juduls.id',
                'juduls.category_id', 
                'wp_users.user_login', 
                DB::raw('COUNT(lesson_detail_attachments.id) as attachment_count'), 
                'categories.name as group')
                ->leftJoin('lesson_detail_attachments', function ($join) {
                    $join->on('juduls.student_id', '=', 'lesson_detail_attachments.student_id')
                    ->on('lesson_detail_attachments.created_at', '>', 'juduls.last_seen');
                })
                ->with('category', 'category.lessons', 'category.lessons.lesson_details')
                ->leftJoin('wp_users', 'juduls.student_id', '=', 'wp_users.id')
                ->leftJoin('categories', 'juduls.category_id', '=', 'categories.id')
                ->groupBy('juduls.id', 'juduls.category_id', 'wp_users.user_login', 'categories.name')
                ->orderBy('attachment_count', 'DESC')
                ->get();
    
            foreach ($theses as $thesis) {
                $thesis->updateLastSeen();
            }
            $this->thesis_admin = $theses->toArray();
        }else{
            $thesis_student = Judul::where('student_id', session()->get('user_id'))->with('category', 'category.lessons', 'category.lessons.lesson_details')->first();
            $this->thesis_student = $thesis_student;
        }
        $this->emit('getData');
    }

    
    public function render()
    {
        return view('livewire.component.sidebar-menu');
    }
}