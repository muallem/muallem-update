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

    public function import()
    {
        $this->validate();

        try {
            DB::beginTransaction();
            $path = $this->input_file->store('temp');
            // $this->emit('consoleLog', Storage::path($path));
            Excel::import(new ExcelImportPetaTarifTindakanEklaim(), Storage::path($path));
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
