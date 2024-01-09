<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;

use Maatwebsite\Excel\Facades\Excel;

class Materi extends Component
{

    use WithFileUploads;
    public $thesis_id;

    protected $listeners = [
        'refreshStudentIndex' => '$refresh',
    ];

    public function setFeedback($feedback)
    {
        $data = Judul::find($this->thesis_id);
        $data->group = $feedback;
        if($data->save())
        {
            $this->emit('onSuccessSweetAlert', 'Berhasil Mengirim Feedback !');
        }
        $this->emit('refreshStudentIndex');
    }

    public function render()
    {
        return view('livewire.dashboard.materi');
    }
}
