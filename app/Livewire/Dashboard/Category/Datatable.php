<?php

namespace App\Livewire\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;
use App\Traits\WithDatatable;
use Illuminate\Database\Eloquent\Builder;

class Datatable extends Component
{
    use WithDatatable;

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
                'key' => 'name',
                'name' => 'Nama Kategori',
                'render' => function ($item) {
                    return $item->name;
                },
            ],
        ];
    }

    public function getQuery(): Builder
    {

        $query = Category::query();

        return $query;
    }

    public function getView(): string
    {
        return 'livewire.dashboard.category.datatable';
    }
}
