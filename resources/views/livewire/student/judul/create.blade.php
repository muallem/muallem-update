<div>
    <div class="card-header">
        <h6 class="card-title">Kirim Tanggapan</h6>
        <small>Tunggu Feedback dari Dosen setelah anda mengirim tanggapan !</small>
    </div>
    <div class="card-body">
        <form class="row" wire:submit.prevent='store'>
            <div class="col-12">
                <label for="formFileMultiple" class="form-label">Tanggapan</label>
                <input class="form-control" type="text" wire:model.lazy="input_title" placeholder="Ketik Judul Disini ...">
                @error('input_title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-block btn-primary">KIRIM</button>
            </div>
        </form>
    </div>
</div>

@push('js')
    <script>
        document.addEventListener('livewire:load', function() {
            $("#editModal").on('hide.bs.modal', function() {
                @this.call('resetInput');
            });

            window.livewire.on('onSuccessStore', (message) => {
                $('#editModal').modal('hide');
            });

        });
    </script>
@endpush