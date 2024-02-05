<?php

namespace App\Http\Livewire\Component;
use App\Models\Judul;
use Livewire\Component;
use App\Helpers\AuthHelper;
use Illuminate\Support\Facades\DB;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.component.sidebar');
    }
}
