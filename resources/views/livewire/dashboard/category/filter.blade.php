
<div class="row">
    <div class="col-sm-12 mb-3">
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#importModal">
            <i class="fa fa-plus"></i>
            Tambah Kategori
        </button>
    </div>

    {{-- Import Modal --}}

    <div class="modal fade show" id="importModal" tabindex="-1" aria-labelledby="importModal" style="display: block;" aria-modal="true" role="dialog" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form wire:submit.prevent="store">
                    <div class="modal-body import_modal">
                        <div class="form-group mb-2">
                            <label>Nama Kategori</label>
                            <input type="text" wire:model.lazy="name" class="form-control" required>
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
