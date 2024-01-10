<?php

namespace App\Livewire\Dashboard\Materi;

use App\Models\Lesson;
use Livewire\Component;
use App\Traits\WithDatatable;
use Illuminate\Database\Eloquent\Builder;

class Datatable extends Component
{
    use WithDatatable;

    // Filter
    public $end_date;
    public $start_date;
    public $filter_jenis;
    public $filter_payor;


    protected $listeners = [
        'addFilter',
        'refreshDatatable' => '$refresh'
    ];

    public function onMount()
    {
        $this->sortDirection = 'asc';
    }

    public function addFilter($filter)
    {
        foreach ($filter as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getColumns(): array
    {
        return [
            [
                'key' => 'id',
                'name' => 'Data',
                'render' => function ($item) {
                    return $item;
                },
            ],
        ];
    }

    public function getQuery(): Builder
    {

        $query = Lesson::with('lesson_details');

        return $query;
    }

    public function getView(): string
    {
        return 'livewire.dashboard/materi.datatable';
    }
}
