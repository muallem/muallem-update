<?php

namespace App\Livewire\Materi;

use App\Models\Materi;
use Livewire\Component;
use App\Helpers\AuthHelper;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\MateriFeedback;

class Kuan extends Component
{
    use WithFileUploads;


    public $files = [];
    public $kode_materi;
    public $input_feedback;
    public $tab1;
    public $tab2;
    public $data_materi = [];
    public $data_feedback = [];
    public $student_id;

    protected $listeners = [
        'setKodeMateri',
        'refreshData' => '$refresh',
    ];
    public function mount()
    {
        $this->tab1 = 'kuan-bab_1_pendahuluan';
        $this->tab2 = 'kuan-bab_1_pendahuluan-latar_belakang';
        $this->kode_materi = 'kuan-bab_1_pendahuluan-latar_belakang';
        $this->getData();
    } 

    public function getData()
    {
        if(!AuthHelper::isAdmin())
        {
            $this->student_id = session()->get('user_id');
        }
        $query = Materi::where('student_id', $this->student_id)->get();
        $materi = collect($query);
        $grouped = $materi->groupBy('kode_materi')->toArray();
        $this->data_materi = $grouped;

        $query = MateriFeedback::where('student_id', $this->student_id)->get();
        $materi = collect($query);
        $grouped = $materi->groupBy('kode_materi')->toArray();
        $this->data_feedback = $grouped;
    }

    public function setKodeMateri($tab1, $tab2)
    {
        $this->tab1 = $tab1;
        $this->tab2 = $tab2;
        $this->kode_materi = $tab2;
    }
    public function store()
    {
        try {
            // Your existing code for handling file uploads
            if ($this->files) {
                if (!AuthHelper::isAdmin()) {
                    foreach ($this->files as $file) {
                        // Process each uploaded file
                        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                        $originalName = $file->getClientOriginalName();

                        $destinationPath = public_path('muallem_kitabah/assets/files/attachment_materi'); 
                        $file->move($destinationPath, $fileName);
                        // $file->move(public_path('assets/files/attachment_materi'), $fileName);
                        
                        // // $file->move('assets/files/attachment_materi', $fileName);
                        // $path = $request->file('file')->store('muallem_kitabah/assets/files/attachment_materi');

    
                        $materi = new Materi();
                        $materi->file_name = $originalName;
                        $materi->file = $fileName;
                        $materi->kode_materi = $this->kode_materi;
                        $materi->student_id = session()->get('user_id');
                        $materi->save();
                    }

                    $materi_feedback = new MateriFeedback();
                    $materi_feedback->student_id = $materi->student_id;
                    $materi_feedback->kode_materi = $materi->kode_materi;
                    $materi_feedback->materi_id = $materi->id;
                    $materi_feedback->save();
                }
    
                // Reset the form fields
                $this->reset(['files']);
                $this->emit('refreshData');
                // Emit success event
                $this->emit('onSuccessSweetAlert', 'Berhasil Mengirim Data !');
            }
            if($this->input_feedback)
            {
                $materi_feedback = MateriFeedback::where('kode_materi', $this->kode_materi)->where('student_id', $this->student_id)->first();
                $materi_feedback->feedback = $this->input_feedback;
                
                if($materi_feedback->save())
                {
                    // Reset the form fields
                    $this->reset(['input_feedback']);
                    $this->emit('refreshData');
                    // Emit success event
                    $this->emit('onSuccessSweetAlert', 'Berhasil Mengirim Data !');
                }

            }
        } catch (\Exception $e) {
            // Handle the exception, e.g., log the error
            // Emit failure event
            $this->emit('consoleLog', $e->getMessage());
            $this->emit('onFailSweetAlert', $e);
        }
    }
    public function render()
    {
        $this->getData();
        return view('livewire.materi.kuan');
    }
}
