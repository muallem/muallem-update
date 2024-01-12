
<div class="row g-3 clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card mb-3 single_post">
            <div class="card-body">
                <h4>{{$data_judul->wpjs_users->user_login}}</h4>
            </div>
        </div>
        {{var_dump($category_choice)}}
        <div class="card mb-3">
            <div class="card-body">
                <h6>Judul : </h6>
                <blockquote class="blockquote border border-primary p-3">
                    <p>{{$data_judul->title}}</p>
                </blockquote>
                <hr>
                @if($data_judul->group)
                    <div class="w-100">
                        <h6 class="form-label">Feedback</h6>
                        
                        <blockquote class="blockquote border border-primary p-3">
                            <p>
                                @switch($data_judul->group)
                                    @case(\App\Models\Judul::TYPE_KUAN)
                                        Kuantitatif (KUAN)
                                        @break
                                    @case(\App\Models\Judul::TYPE_KUAL)
                                        Kualitatif (KUAL)
                                        @break
                                    @case(\App\Models\Judul::TYPE_RND)
                                        Research And Development (RND)
                                        @break
                                @endswitch
                            </p>
                        </blockquote>
                    </div>
                @else
                    <div class="w-100">
                        <label class="form-label">Feedback</label>
                        
                        <select class="form-control" id="select_feedback">
                            <option value="" selected>Pilih Feedback</option>
                            @foreach (\App\Models\Judul::TYPE_CHOICE as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                @endif
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(() => {
            $('#select_feedback').on('change', async function(e) {
                let feedback = $('#select_feedback').val();
                await @this.call('setFeedback', feedback);
            });
        })
    </script>
@endpush