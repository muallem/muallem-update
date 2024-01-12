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
                            <li class="ms-5">
                                <a href="#" class="has-arrow" aria-expanded="true">
                                    <i class="fa fa-tasks"></i> {{$item['group']}} {!! ($item['materi_count'] > 0) ? "<span class='badge rounded-pill bg-primary'>". $item['materi_count'] ."</span>" : "" ; !!}
                                </a>
                                {{-- <ul class="list-unstyled mm-collapse" style="height: 0px;"> --}}
                                    {{var_dump($item)}}
                                    {{-- @foreach ($item['category'] as $category) --}}
                                        {{-- <li><a href="emp-all.html">{{$category}}</a></li> --}}
                                    {{-- @endforeach --}}
                                {{-- </ul> --}}
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        @else
            <div class="tab-pane fade show active" id="admin_menu" role="tabpanel" >
                <nav class="sidebar-nav">
                    <ul class="metismenu list-unstyled">
                        <li><a href="{{route('student.index')}}"><i class="fa fa-file-text"></i> Judul</a></li>
                        @if($thesis_student)
                            @switch($thesis_student->group)
                                @case(\App\Models\Judul::TYPE_KUAN)
                                    <li><a href="{{route('student.kuan')}}"><i class="fa fa-tasks"></i> Kuan</a></li>
                                    
                                    @break
                                @case(\App\Models\Judul::TYPE_KUAL)
                                    <li><a href="{{route('student.kual')}}"><i class="fa fa-tasks"></i> Kual</a></li>
                                    
                                    @break
                                @case(\App\Models\Judul::TYPE_RND)
                                    <li><a href="{{route('student.rnd')}}"><i class="fa fa-tasks"></i> RND</a></li>
                                    
                                    @break
                            @endswitch
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