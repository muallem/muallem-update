
<form wire:submit.prevent='save'>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-2">
                        <label>Email</label>
                        <input type="email" class="form-control" wire:model.lazy='input_email' id="input_email" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-2">
                        <label>Password Baru</label>
                        <input type="text" class="form-control" wire:model.lazy='input_new_password' id="input_new_password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="input-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
</form>