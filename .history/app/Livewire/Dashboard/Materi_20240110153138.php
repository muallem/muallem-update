<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Imports\ExcelImportMateri;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

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
            Log::error('Chapter: ' . $this->name);
            $fileName = Str::random(20) . '.' . $this->input_file->getClientOriginalExtension();
            $path = $this->input_file->storeAs('lessons', $fileName, 'public');

            Excel::import(new ExcelImportMateri(), Storage::path('public/'.$path));
            DB::commit();
            $this->emit('onSuccessSweetAlert', 'Berhasil Menyimpan Data!');

        } catch (\Exception $e) {
            $this->emit("consoleLog", $e->getMessage());
            DB::rollBack();
        }
    }

    public function render()
    {
        return view('livewire.dashboard.materi');
    }
}
