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
    public $files = [];

    protected $listeners = [
        'refreshData' => '$refresh',
    ];
    public function mount($lesson_detail_id)
    {
        // $this->judul = Judul::where('id', $judul_id)->with('user')->first();
        $this->lesson_detail = LessonDetail::where('id', Crypt::decryptString($lesson_detail_id))->with('attachments', 'status')->first();
    } 

    public function store()
    {
        try {
            if ($this->files) {
                    foreach ($this->files as $file) {
                        // Process each uploaded file
                        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                        $originalName = $file->getClientOriginalName();
                        $filePath = $file->storeAs('attachments', $fileName, 'public');


                        $materi = new Materi();
                        $materi->file_name = $originalName;
                        $materi->file = $fileName;
                        $materi->kode_materi = $this->kode_materi;
                        $materi->student_id = session()->get('user_id');
                        $materi->save();

                    if (!AuthHelper::isAdmin()) {
                    }

                    $materi_feedback = new MateriFeedback();
                    $materi_feedback->student_id = $materi->student_id;
                    $materi_feedback->kode_materi = $materi->kode_materi;
                    $materi_feedback->materi_id = $materi->id;
                    $materi_feedback->save();
                }


                // Reset the form fields
                $this->reset(['files']);
                $this->emit('refreshData');
                // Emit success event
                $this->emit('onSuccessSweetAlert', 'Berhasil Mengirim Data !');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function render()
    {
        return view('livewire.lesson.detail');
    }
}
