<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use App\Imports\ExcelImportMateri;
use Maatwebsite\Excel\Facades\Excel;

class Materi extends Component
{
    use WithFileUploads;
    // Modal Import
    public $input_file;
    public $name;
    protected $rules = [
        'name' => 'required',
        'input_file' => 'required|mimes:xlsx,xls',
    ];

    public function import()
    {
        $this->validate();
        try {
            // DB::beginTransaction();
            Log::error('Chapter: ' . $name);
            $path = $this->input_file->store('temp');
            $this->emit('consoleLog', $this->input_file);
            Excel::import(new ExcelImportMateri(), Storage::path($path));
            // DB::commit();

        } catch (\Exception $e) {
            // $this->emit("consoleLog", $e->getMessage());
            // DB::rollBack();
        }
    }

    public function render()
    {
        return view('livewire.dashboard.materi');
    }
}
