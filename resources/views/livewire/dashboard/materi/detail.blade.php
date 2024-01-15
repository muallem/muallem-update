
<div class="card">
    <div class="card-body">
        <h4>{{$lesson_detail->title}}</h4>
        <div class="mt-3">
            {!! $lesson_detail_body !!}
        </div>
        <hr class="my-2">
        <textarea class="form-control mt-3 w-100" rows="10" wire:model="lesson_detail_body"></textarea>
    </div>
    <div class="card-footer">
        <div class="input-group">
            <button type="button" class="btn btn-success w-100" wire:click="save">Simpan</button>
        </div>
    </div>
</div>