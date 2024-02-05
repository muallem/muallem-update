<?php

namespace App\Http\Livewire\Dashboard\Materi;

use App\Models\Lesson;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Imports\ExcelImportMateri;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class Filter extends Component
{
    use WithFileUploads;
    // Modal Import
    public $input_file;
    public $input_category;
    public $filter_category;
    public $input_name;
    public $categories = [];
    protected $rules = [
        'input_name' => 'required',
        'input_category' => 'required',
        'input_file' => 'required|mimes:xlsx,xls',
    ];

    public function mount(){
        $this->categories = Category::all();
    }

    public function import()
    {
        $this->validate();
        try {
            DB::beginTransaction();
            $fileName = Str::random(20) . '.' . $this->input_file->getClientOriginalExtension();
            $path = $this->input_file->storeAs('lessons', $fileName, 'public');
            $lesson = new Lesson();
            $lesson->chapter = $this->input_name;
            $lesson->category_id = $this->input_category;
            if($lesson->save()){
                Excel::import(new ExcelImportMateri($lesson->id), Storage::path('public/'.$path));
            }
            DB::commit();
            $this->emit('onSuccessSweetAlert', 'Berhasil Menyimpan Data!');
            $this->emit('refreshDatatable');
            $this->emit('onSuccessStore');
            $this->reset(['input_name', 'input_file', 'input_category']);

        } catch (\Exception $e) {
            $this->emit("consoleLog", $e->getMessage());
            DB::rollBack();
        }
    }
    public function updated()
    {
        $this->emit('addFilter', [
            'filter_category' => $this->filter_category,
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.materi.filter');
    }
}
