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
    public function destroy($id)
    {
        $item = Category::find($id);
        $item->delete();
        $this->emit('onSuccessSweetAlert', 'Data Berhasil Dihapus!');
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

            [
                'name' => 'Aksi',
                'sortable' => false,
                'searchable' => false,
                'render' => function ($item) {
                    $destroyHtml = "<form wire:submit.prevent=\"destroy('$item->id')\">"
                        . method_field('DELETE') . csrf_field() .
                        "<button type='submit' class='btn btn-danger'
                            onclick=\"return confirm('Delete Data?')\">
                            <i class='fa fa-trash mr-2'></i> Hapus
                        </button>
                    </form>";

                    $html = "<div class='row'>
                        $destroyHtml                 
                    </div>";

                    return $html;
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
