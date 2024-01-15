<?php

namespace App\Livewire\Dashboard\Materi;

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
    public $lesson_detail_body;
    public $lesson_detail_id;
    public $student_id;
    public $judul;

    public function mount($lesson_detail, $judul)
    {
        $this->lesson_detail_id = $lesson_detail->id;
        $this->lesson_detail = LessonDetail::find($this->lesson_detail_id);
        $this->lesson_detail_body = $this->lesson_detail->body;
    } 

    public function save()
    {
        try {
                $insert_data = LessonDetail::find($this->lesson_detail_id);
                $insert_data->body = $this->lesson_detail_body;
                $insert_data->save();
                // Emit success event
                $this->emit('onSuccessSweetAlert', 'Berhasil Menyimpan Data !');
            
        } catch (\Throwable $th) {
            $this->emit('onFailSweetAlert', 'Gagal Menyimpan Data !');
        }

        $this->getData();
    }
    public function render()
    {
        return view('livewire.dashboard.materi.detail');
    }
}
