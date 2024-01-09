<?php

namespace App\Livewire\Dashboard;

use App\Models\Judul;
use Livewire\Component;

class ShowJudul extends Component
{
    public $thesis_id;
    public $data_judul;

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
