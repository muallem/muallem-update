<?php

namespace App\Livewire\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Filter extends Component
{   
    public $input_name;

    protected $rules = [
        'input_name' => 'required',
    ];

    public function store()
    {
        $this->validate();
        try {
            DB::beginTransaction();
            
            $category = new Category();
            $category->name = $this->input_name;
            $category->save();

            DB::commit();
            $this->emit('onSuccessSweetAlert', 'Berhasil Menyimpan Data!');
            $this->reset(['input_name']);

        } catch (\Exception $e) {
            $this->emit("consoleLog", $e->getMessage());
            DB::rollBack();
        }
    }

    public function render()
    {
        return view('livewire.dashboard.category.filter');
    }
}
