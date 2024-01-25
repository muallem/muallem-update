
<div class="card mb-3">
    <div class="card-body">
        @if ($data_judul)
            <h6>Judul : </h6>
            <blockquote class="blockquote border border-primary p-3">
                <p>{{$data_judul->title}}</p>
            </blockquote>
            <hr>
            @if($data_judul->category_id)

                <h6 class="form-label">Feedback</h6>
                <blockquote class="blockquote border border-primary p-3">
                    <p>
                        {{$data_judul->category->name}}
                    </p>
                </blockquote>
            @else
                <div class="alert alert-warning" role="alert">Tunggu Feedback dari Dosen !</div>
            @endif
            
        @else
            @livewire('student.judul.create')
        @endif
    </div>
</div>

@push('js')
    <script>
        document.addEventListener('livewire:load', function() {
            setInterval(function () {
                Livewire.emit('refreshData'); 
            }, 30000); 
        });
    </script>
@endpush