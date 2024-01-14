<div>
    <div class="tab-content px-0">
        @if(\App\Helpers\AuthHelper::isAdmin())
            <div class="tab-pane fade show active" id="student_menu" role="tabpanel" >
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu list-unstyled">
                        @foreach($thesis_admin as $item)
                            <li>
                                <a href="#" class="text-decoration-none text-dark" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                    <span>{{$item['user_login']}}</span> 
                                    {!! ($item['group']) ? '' : '<i class="fa fa-exclamation-circle"></i>' ; !!}

                                    @if($item['materi_count'] > 0 )
                                        <span class="badge rounded-pill bg-primary">
                                            {{ $item['materi_count'] }}
                                        </span>
                                    @endif
                                </a>
                                
                            </li>
                            {{-- {{route('dashboard.materi', ['thesis_id' => $item['id']])}} --}}
                            <li class="ms-5"><a href="{{route('dashboard.judul', ['thesis_id' => $item['id']])}}"><i class="fa fa-file-text"></i> Judul {!! ($item['group']) ? '' : '<i class="fa fa-exclamation-circle"></i>' ; !!}</a></li>
                            @if (!empty($item['category']))
                                <li class="ms-5">
                                    <a href="#" class="has-arrow" aria-expanded="true">
                                        <i class="fa fa-tasks"></i> {{$item['group']}} {!! ($item['materi_count'] > 0) ? "<span class='badge rounded-pill bg-primary'>". $item['materi_count'] ."</span>" : "" ; !!}
                                    </a>
                                    <ul class="list-unstyled mm-collapse" style="height: 0px;">
                                        @foreach ($item['category']['lessons'] as $lesson)
                                        <li><a href="{{route('dashboard.lesson_detail', ['lesson_detail_id' => Crypt::encryptString($lesson['lesson_details'][0]['id']), 'judul_id' => Crypt::encryptString($item['id'])])}}">{{$lesson['chapter']}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                             @endif
                        @endforeach
                    </ul>
                </nav>
            </div>
        @else
            <div class="tab-pane fade show active" id="admin_menu" role="tabpanel" >
                <nav class="sidebar-nav">
                    <ul class="metismenu list-unstyled">
                        <li><a href="{{route('student.index')}}"><i class="fa fa-file-text"></i> Judul</a></li>
                        @if(isset($thesis_student) && $thesis_student->category_id)
                            <li class="ms-5">
                                <a href="#" class="has-arrow" aria-expanded="true">
                                    <i class="fa fa-tasks"></i> {{$thesis_student->category->name}} 
                                </a>
                                    <ul class="list-unstyled mm-collapse" style="height: 0px;">
                                        @foreach ($thesis_student['category']['lessons'] as $lesson)
                                        <li><a href="{{route('student.lesson', ['id' => $lesson['id'], 'judul_id' => $thesis_student['id']])}}">{{$lesson['chapter']}}</a></li>
                                        @endforeach
                                    </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        @endif        
    </div>
</div>

@push('js')
<script>
    document.addEventListener('livewire:load', function () {
        // Set up a timer to trigger Livewire refresh every 10 seconds
        setInterval(function () {
            @this.getKata();
            console.log('kata refresh')
        }, 15000);
    });
</script>
@endpush