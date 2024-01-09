<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Imports\ExcelImportMateri;
use Maatwebsite\Excel\Facades\Excel;

class Materi extends Component
{
    use WithFileUploads;
    // Modal Import
    public $input_file;
    protected $rules = [
        'input_file' => 'required|mimes:xlsx,xls',
    ];

    public function import()
    {
        $this->validate();

        try {
            DB::beginTransaction();
            $path = $this->input_file->store('temp');
            // $this->emit('consoleLog', Storage::path($path));
            Excel::import(new ExcelImportMateri(), Storage::path($path));
            DB::commit();

            $this->emit('onSuccessStore');
            $this->emit('onSuccessSweetAlert', 'Import Berhasil');
            $this->emit('refreshDatatable');
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
