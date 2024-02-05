<?php

namespace App\Http\Livewire\Student\Judul;

use Carbon\Carbon;
use App\Models\Judul;
use Livewire\Component;

class Create extends Component
{
    public $input_title;
    public $group_type;
    public function store()
    {

        $validatedData = $this->validate(
            [
                'input_title' => 'required|string|max_words:20',
            ],
            [
                'input_title.max_words' => 'Judul tidak boleh lebih dari 20 kata !',
            ],
        );
        Judul::create([
            'title' => $this->input_title,
            "student_id" => session()->get('user_id'),
            "last_seen" => Carbon::now(),
        ]);
    
        $this->emit('onSuccessSweetAlert', "Berhasil", 'Berhasil Membuat Judul !');
        $this->emit('refreshData');
        $this->emit('refreshStudentIndex');
    }
    public function render()
    {
        return view('livewire.student.judul.create');
    }
}