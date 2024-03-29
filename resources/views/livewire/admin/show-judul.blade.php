
<div class="row g-3 clearfix">
    {{$pass}}
    <div class="col-lg-12 col-md-12">
        <div class="card mb-3 single_post">
            <div class="card-body">
                <h4>{{$data_judul->wp_users->user_login}}</h4>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h6>Judul : </h6>
                <blockquote class="blockquote border border-primary p-3">
                    <p>{{$data_judul->title}}</p>
                </blockquote>
                <hr>
                @if($data_judul->category_id)
                    <div class="w-100">
                        <h6 class="form-label">Feedback</h6>
                        
                        <blockquote class="blockquote border border-primary p-3">
                            <p>
                                {{$data_judul->category->name}}
                            </p>
                        </blockquote>
                    </div>
                @else
                    <div class="w-100">
                        <label class="form-label">Feedback</label>
                        
                        <select class="form-control" id="select_feedback" required>
                            <option value="" selected>Pilih Feedback</option>

                            @foreach ($category_choice as $index => $item)
                                <option value="{{$index}}">{{$item}}</option>
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