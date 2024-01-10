
<div class="row">
    <div class="col-sm-12 mb-3">
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-plus"></i>
            Tambah Kategori
        </button>
    </div>

    {{-- Import Modal --}}

    <div class="modal fade" id="exampleModal" tabindex="99999" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc
                    nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori</h5>
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
    </div> --}}
</div>
