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
use Illuminate\Support\Facades\Crypt;

class Detail extends Component
{
    use WithFileUploads;

    public $lesson_detail;
    public $judul;

    protected $listeners = [
        'refreshData' => '$refresh',
    ];
    public function mount($lesson_detail_id)
    {
        // $this->judul = Judul::where('id', $judul_id)->with('user')->first();
        $this->lesson_detail = LessonDetail::where('id', Crypt::decryptString($lesson_detail_id))->with('status')->first();
    } 
    public function render()
    {
        return view('livewire.lesson.detail');
    }
}
