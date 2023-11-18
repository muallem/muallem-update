
<div class="card mb-3">
    <div class="card-body">
        @if ($data_judul)
            <h6>Judul : </h6>
            <blockquote class="blockquote border border-primary p-3">
                <p>{{$data_judul->title}}</p>
            </blockquote>
            <hr>
            @if($data_judul->group)

                <h6 class="form-label">Feedback</h6>
                <blockquote class="blockquote border border-primary p-3">
                    <p>
                        @switch($data_judul->group)
                            @case(\App\Models\Judul::TYPE_KUAN)
                                Kuantitatif (KUAN)
                                @break
                            @case(\App\Models\Judul::TYPE_KUAL)
                                Kuanlitatif (KUAL)
                                @break
                            @case(\App\Models\Judul::TYPE_RND)
                                Research And Development (RND)
                                @break
                        @endswitch
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
            }, 15000); 
        });
    </script>
@endpush