<?php

namespace App\Livewire\Admin;

use App\Models\Judul;
use Livewire\Component;
use App\Models\Category;

class ShowJudul extends Component
{
    public $thesis_id;
    public $data_judul;

    public $category_choice = [];
    protected $listeners = [
        'refreshStudentIndex' => '$refresh',
    ];

    public function mount(){
        $this->category_choice = Category::pluck('id', 'name');
    }

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
