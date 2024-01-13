<?php

namespace App\Livewire\Lesson;

use App\Models\Judul;
use App\Models\Materi;
use Livewire\Component;
use App\Helpers\AuthHelper;
use Illuminate\Support\Str;
use App\Models\LessonDetail;
use Livewire\WithFileUploads;
use App\Models\MateriFeedback;

class Detail extends Component
{
    use WithFileUploads;

    public $lesson_detail;
    public $judul;

    protected $listeners = [
        'refreshData' => '$refresh',
    ];
    public function mount($id)
    {
        // $this->judul = Judul::where('id', $judul_id)->with('user')->first();
        $this->lesson_detail = LessonDetail::find($id);
    } 
    public function render()
    {
        $this->getData();
        return view('livewire.lesson.detail');
    }
}
