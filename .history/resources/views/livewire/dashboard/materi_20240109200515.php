<div class="card">
    <form wire:submit.prevent="store">
        <div class="modal-body import_modal">
            <div class="form-group mb-2">
                <label>File Lampiran</label>
                <input type="file" wire:model.lazy="input_file" class="form-control">
                @error('input_file')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled"
                wire:target='input_file'>Simpan</button>
        </div>
    </form>
</div>