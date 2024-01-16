
<div class="row">
    <div class="col-sm-12 mb-3">
        <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#importModal">
            <i class="fa fa-download"></i>
            Import Materi
        </button>
    </div>

    <div class="col-md-4 mb-2">
        <label class="form-label">Kategori</label>
        <select class="form-control" wire:model="filter_category">
            <option value="">Seluruh</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    {{-- Import Modal --}}
    <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="myLargeModalLabel">Import Materi</h5>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form wire:submit.prevent="import">
                    <div class="modal-body import_modal">
                        <div class="form-group mb-2">
                            <label>Nama Materi</label>
                            <input type="text" wire:model.lazy="input_name" class="form-control" placeholder="Nama Materi" required>
                        </div>
                        
                        <select class="form-control mb-2" wire:model="input_category" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $key => $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                            @endforeach
                        </select>

                        <div class="form-group mb-2">
                            <label>File Lampiran</label>
                            <input type="file" wire:model.lazy="input_file" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled"
                            wire:target='input_file'>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@push('js')
    <script>
        document.addEventListener('livewire:load', function() {
            window.livewire.on('onSuccessStore', (message) => {
                $('#importModal').modal('hide');
            });
        });
    </script>
@endpush
