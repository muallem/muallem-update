<?php

namespace App\Livewire\Student;

use App\Models\Judul;
use Livewire\Component;

class Index extends Component
{
    public $data_judul;

    protected $listeners = [
        'refreshData' => '$refresh',
    ];

    public function render()
    {
        $student_id = session()->get('user_id');
        $this->data_judul = Judul::where('student_id', $student_id)->first();
        return view('livewire.student.index');
    }
}
