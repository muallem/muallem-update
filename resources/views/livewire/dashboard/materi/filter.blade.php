
<form wire:submit.prevent="import">
    <div class="modal-body import_modal">
        <div class="form-group mb-2">
            <label>Nama Materi</label>
            <input type="text" wire:model.lazy="name" class="form-control" required>
        </div>
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
