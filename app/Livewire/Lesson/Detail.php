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
use App\Models\LessonDetailAttachment;

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
                    $filePath = $file->storeAs('lesson_detail_attachments', $fileName, 'public');


                    $lesson_detail_attachment = new LessonDetailAttachment();
                    $lesson_detail_attachment->name = $originalName;
                    $lesson_detail_attachment->file = $fileName;
                    $lesson_detail_attachment->remarks_id = session()->get('user_id');
                    if(AuthHelper::isAdmin()){
                        $lesson_detail_attachment->remarks_type = LessonDetailAttachment::REMARKS_TYPE_ADMIN;
                    }else{
                        $lesson_detail_attachment->remarks_type = LessonDetailAttachment::REMARKS_TYPE_STUDENT;
                    }
                    $lesson_detail_attachment->save();
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
