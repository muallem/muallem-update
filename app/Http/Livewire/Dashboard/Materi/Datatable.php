<?php

namespace App\Http\Livewire\Dashboard\Materi;

use App\Models\Lesson;
use Livewire\Component;
use App\Traits\WithDatatable;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Builder;

class Datatable extends Component
{
    use WithDatatable;

    // Filter
    public $filter_category;


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
        $item = Lesson::find($id);
        $item->delete();
        $this->emit('onSuccessSweetAlert', 'Data Berhasil Dihapus!');
    }

    public function getColumns(): array
    {
        return [
            [
                'key' => 'chapter',
                'name' => 'Nama Materi',
                'render' => function ($item) {
                    return $item->chapter;
                },
            ],
            [
                'key' => 'category_id',
                'searchable' => false,
                'name' => 'Nama Kategori',
                'render' => function ($item) {
                    return $item->category->name;
                },
            ],

            [
                'name' => 'Aksi',
                'sortable' => false,
                'searchable' => false,
                'render' => function ($item) {
                    $route = route('superadmin.materi_detail', ['lesson_detail_id' => Crypt::encryptString($item->lesson_details[0]->id)]);
                    $showHtml = "<div class='col-auto'>
                        <a type='button' class='btn btn-info' href='$route' target='_blank'>
                            <i class='fa fa-eye'></i>
                            Lihat
                        </a>
                    </div>";

                    $destroyHtml = "<form wire:submit.prevent=\"destroy('$item->id')\" class='col-auto'>"
                        . method_field('DELETE') . csrf_field() .
                        "<button type='submit' class='btn btn-danger'
                            onclick=\"return confirm('Delete Data?')\">
                            <i class='fa fa-trash mr-2'></i> Hapus
                        </button>
                    </form>";

                    $html = "<div class='row'>
                        $showHtml
                        $destroyHtml                 
                    </div>";

                    return $html;
                },
            ],
        ];
    }

    public function getQuery(): Builder
    {

        $query = Lesson::with('category', 'lesson_details')
            ->when($this->filter_category, function ($query) {
                $query->where('category_id', $this->filter_category);
            });
        return $query;
    }

    public function getView(): string
    {
        return 'livewire.dashboard.materi.datatable';
    }
}
