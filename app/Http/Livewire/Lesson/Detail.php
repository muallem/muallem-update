<?php

namespace App\Http\Livewire\Lesson;

use App\Models\Judul;
use App\Models\Materi;
use Livewire\Component;
use App\Helpers\AuthHelper;
use Illuminate\Support\Str;
use App\Models\LessonDetail;
use Livewire\WithFileUploads;
use App\Models\MateriFeedback;
use App\Models\LessonDetailStatus;
use Illuminate\Support\Facades\Crypt;
use App\Models\LessonDetailAttachment;

class Detail extends Component
{
    use WithFileUploads;

    public $lesson_detail;
    public $lesson_detail_id;
    public $student_id;
    public $judul;
    public $files = [];
    public $ori_lesson_detail;
    public $attachments;

    protected $listeners = [
        'getData',
    ];
    public function mount($lesson_detail, $judul)
    {
        $this->ori_lesson_detail = $lesson_detail;
        $this->judul = $judul;
        $this->lesson_detail_id = $lesson_detail->id;
        $this->student_id = $judul->student_id;
        $this->getData();
    } 

    public function closeLesson($lesson_detail_id, $student_id)
    {
        $lesson_detail_status = new LessonDetailStatus();
        $lesson_detail_status->lesson_detail_id = $lesson_detail_id;
        $lesson_detail_status->student_id = $student_id;
        $lesson_detail_status->name = LessonDetailStatus::STATUS_SELESAI;
        $lesson_detail_status->save();

        $this->getData();
    }
    public function getData()
    {
        $this->lesson_detail = LessonDetail::select('lesson_details.*', 'lesson_detail_statuses.name as status_name')
        ->leftJoin('lesson_detail_statuses', function ($join) {
            $join->on('lesson_details.id', '=', 'lesson_detail_statuses.lesson_detail_id')
                ->where('lesson_detail_statuses.student_id', $this->student_id);
        })
        ->where('lesson_details.id', $this->lesson_detail_id)
        ->first();
        $this->attachments = LessonDetailAttachment::where('lesson_detail_id', $this->lesson_detail_id)
        ->where('student_id', $this->student_id)
        ->get();
    }

    public function store()
    {
        try {
            if ($this->files) {
                foreach ($this->files as $file) {
                    // Process each uploaded file
                    $status = LessonDetailStatus::where('lesson_detail_id', $this->lesson_detail_id)
                    ->where('student_id', $this->student_id)
                    ->first();
                    if($status && $status->name === LessonDetailStatus::STATUS_SELESAI){
                        return;
                    }
                    $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                    $originalName = $file->getClientOriginalName();

                    $filePath = $file->storeAs('lesson_detail_attachments', $fileName, 'public');
                    
                    $lesson_detail_attachment = new LessonDetailAttachment();
                    $lesson_detail_attachment->lesson_detail_id = $this->lesson_detail_id;
                    $lesson_detail_attachment->name = $originalName;
                    $lesson_detail_attachment->file = $fileName;
                    $lesson_detail_attachment->student_id = $this->student_id;
                    $lesson_detail_attachment->remarks_id = session()->get('user_id');
                    if(AuthHelper::isAdmin()){
                        $lesson_detail_attachment->remarks_type = LessonDetailAttachment::REMARKS_TYPE_ADMIN;
                    }else{
                        $lesson_detail_attachment->remarks_type = LessonDetailAttachment::REMARKS_TYPE_STUDENT;
                    }
                    $this->emit('consoleLog', $lesson_detail_attachment);
                    $lesson_detail_attachment->save();
                }
                // Reset the form fields
                $this->reset(['files']);
                $this->emit('getData');
                // Emit success event
                $this->emit('onSuccessSweetAlert', 'Berhasil Mengirim Data !');
            }
        } catch (\Throwable $th) {
            $this->emit('onFailSweetAlert', 'Gagal Mengirim Data !');
        }

        $this->getData();
    }
    public function render()
    {
        return view('livewire.lesson.detail');
    }
}
