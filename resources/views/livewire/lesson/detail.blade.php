
<div class="card">
    <div class="card-body">
        <h4>{{$lesson_detail->title}}</h4>
        <div class="mt-3">
            {!! $lesson_detail->body !!}
        </div>
    </div>
    <div class="chat_app d-flex justify-content-center">
        <div class="chat">
            <div class="chat-header d-flex justify-content-between align-items-center p-3 border-bottom">
                <div class="left d-flex">
                    <div class="chat-about ps-2">
                        @if(\App\Helpers\AuthHelper::isAdmin())
                            {{-- <h6 class="mb-0">{{$judul->user->user_login}}</h6> --}}
                            <h6 class="mb-0">{{$judul->user->user_login}}</h6>
                        @else
                            <h6 class="mb-0">Admin</h6>
                        @endif
                    </div>
                </div>
            </div>
            <div class="chat-history p-3">
                <ul class="list-unstyled mb-0">
                    @foreach ($attachments as $attachment)
                        
                        @if (\App\Helpers\AuthHelper::isAdmin())
                            @if ($attachment->remarks_type === \App\Models\LessonDetailAttachment::REMARKS_TYPE_ADMIN)
                                <li class="clearfix">
                                    <div class="message-data text-end mb-3 me-3">
                                        <span class="small text-muted me-2">{{Carbon\Carbon::parse($attachment->created_at)->format('d F Y H:i:s')}}</span>
                                    </div>
                                    <div class="message other-message d-inline-block float-end"> 
                                        <a href="{{ asset("storage/app/public/lesson_detail_attachments/$attachment->file") }}"
                                            class="text-decoration-none text-info "
                                            download="{{ $attachment->name }}"
                                        >
                                        <i class="fa fa-book"></i>
                                            {{ $attachment->name }}
                                        </a>
                                    </div>
                                </li>
                            @else

                                <li class="clearfix">
                                    <div class="message-data mb-3">
                                        <span class="small text-muted me-3">{{Carbon\Carbon::parse($attachment->created_at)->format('d F Y H:i:s')}}</span>
                                    </div>
                                    <div class="message my-message d-inline-block">
                                        <a href="{{ asset("storage/app/public/lesson_detail_attachments/$attachment->file") }}"
                                            class="text-decoration-none text-white "
                                            download="{{ $attachment->name }}"
                                        >
                                        <i class="fa fa-book"></i>
                                            {{ $attachment->name }}
                                        </a>
                                    </div>
                                </li>
                            @endif
                        @else
                            @if ($attachment->remarks_type === \App\Models\LessonDetailAttachment::REMARKS_TYPE_ADMIN)
                                <li class="clearfix">
                                    <div class="message-data mb-3">
                                        <span class="small text-muted me-3">{{Carbon\Carbon::parse($attachment->created_at)->format('d F Y H:i:s')}}</span>
                                    </div>
                                    <div class="message my-message d-inline-block">
                                        <a href="{{ asset("storage/app/public/lesson_detail_attachments/$attachment->file") }}"
                                            class="text-decoration-none text-white "
                                            download="{{ $attachment->name }}"
                                        >
                                        <i class="fa fa-book"></i>
                                            {{ $attachment->name }}
                                        </a>
                                    </div>
                                </li>
                            @else
                                <li class="clearfix">
                                    <div class="message-data text-end mb-3 me-3">
                                        <span class="small text-muted me-2">{{Carbon\Carbon::parse($attachment->created_at)->format('d F Y H:i:s')}}</span>
                                    </div>
                                    <div class="message other-message d-inline-block float-end"> 
                                        <a href="{{ asset("storage/app/public/lesson_detail_attachments/$attachment->file") }}"
                                            class="text-decoration-none text-info "
                                            download="{{ $attachment->name }}"
                                        >
                                        <i class="fa fa-book"></i>
                                            {{ $attachment->name }}
                                        </a>
                                    </div>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="chat-message p-3 border-top">

                
                @if (
                    ($lesson_detail->status_name === \App\Models\LessonDetailStatus::STATUS_SELESAI)
                     && !\App\Helpers\AuthHelper::isAdmin())
                    
                    <div class="w-100">
                        <blockquote class="blockquote border border-primary p-3">
                            <p>
                                Lanjut ke tahap selanjutnya !
                            </p>
                        </blockquote>
                    </div>
                @elseif($lesson_detail->status_name != \App\Models\LessonDetailStatus::STATUS_SELESAI)

                    <form wire:submit.prevent='store'>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                            <input wire:model="files" class="form-control" type="file" id="fileInput" multiple required>
                            <button type="submit" class="btn btn-info text-white">Kirim</button>
                        </div>
                    </form>
                    @if (\App\Helpers\AuthHelper::isAdmin())
                        <div class="input-group">
                            <button type="button" class="btn btn-success w-100" wire:click="closeLesson('{{$lesson_detail->id}}', '{{$student_id}}')">Selesai</button>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>