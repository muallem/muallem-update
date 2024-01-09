<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;

class Materi extends Component
{
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
        $this->data_judul = Judul::where('id', $this->thesis_id)->with('user')->first();
        return view('livewire.admin.show-judul');
    }
}
