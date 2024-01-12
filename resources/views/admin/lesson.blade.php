@extends('layouts.app')

@push('sidebar')

    <div id="left-sidebar" class="sidebar">
        @livewire('component.sidebar')    
    </div>  
@endpush

@section('content')
    <div class="container-fluid">
            
        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Kitabah</h2>
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                        <li class="breadcrumb-item active">Kual</li>
                    </ul>
                </div>
            </div>
        </div>

        
        <div class="row g-3">
            <div class="col-lg-12 col-md-12">
                <div class="card mb-3 single_post">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <div class="position-relative">
                                    <div wire:loading.block>
                                        <div class="position-absolute w-100 h-100">
                                            <div class="w-100 h-100 bg-primary" style="background-color: grey; opacity:0.2"></div>
                                        </div>
                                        <h5 class="position-absolute shadow bg-white p-2 rounded"
                                            style="top: 50%;left: 50%;transform: translate(-50%, -50%);">Loading...</h5>
                                    </div>
                                    <div class="card">
                                        
                                        <div class="card-body">
                                            {{-- <form class="chat-input px-3" wire:submit.prevent='store'> --}}
                                                <ul class="nav nav-tabs nav-tabs-new2 d-flex justify-content-start" role="tablist">
                                                    @foreach ($lesson->lesson_details as $index => $item)
                                                        <li class="nav-item my-1" role="presentation" >
                                                            <a style="font-size: 23px;" class="nav-link {{($index == 0) ? 'active show' : ''}}" data-bs-toggle="tab" href="#{{preg_replace('/\s+/', '_', $item->title . '-' . $item->id)}}" aria-selected="true" role="tab" >
                                                                {{$item->title}}
                                                            </a>
                                                        </li>

                                                    @endforeach
                                                </ul>
                                                <div class="tab-content mt-3">
                                                    
                                                    @foreach ($lesson->lesson_details as $index => $item)
                                                        <div class="tab-pane {{($index == 0) ? 'active show' : ''}}" id="{{preg_replace('/\s+/', '_', $item->title . '-' . $item->id)}}" role="tabpanel">
                                                            <h4>{{$item->title}}</h4>
                                                            <p style="text-align: justify;" class="mt-3">
                                                                {{$item->body}}
                                                            </p>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                    
                                
                                                
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="chat_app d-flex justify-content-center">
                        <div class="chat">
                            <div class="chat-header d-flex justify-content-between align-items-center p-3 border-bottom">
                                <div class="left d-flex">
                                    <div class="chat-about ps-2">
                                        <h6 class="mb-0">Aiden Chavez</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-history p-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="clearfix">
                                        <div class="message-data text-end mb-3 me-3">
                                            <span class="small text-muted me-2">10:10 AM, Today</span>
                                            <img class="avatar sm rounded-circle" src="../dist/assets/images/xs/avatar7.jpg" alt="avatar">
                                        </div>
                                        <div class="message other-message d-inline-block float-end"> Hi Aiden, how are you? How is the project coming along?</div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data mb-3">
                                            <span class="small text-muted me-3">10:12 AM, Today</span>
                                        </div>
                                        <div class="message my-message d-inline-block">Are we meeting today?
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data mb-3">
                                            <span class="small text-muted me-3">10:15 AM, Today</span>
                                        </div>
                                        <div class="message my-message d-inline-block">Project has been already finished and I have results to show you.</div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data text-end mb-3 me-3">
                                            <span class="small text-muted me-2">10:10 AM, Today</span>
                                            <img class="avatar sm rounded-circle" src="../dist/assets/images/xs/avatar7.jpg" alt="avatar">
                                        </div>
                                        <div class="message other-message d-inline-block float-end"> Hi Aiden, how are you? How is the project coming along?</div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data mb-3">
                                            <span class="small text-muted me-3">10:12 AM, Today</span>
                                        </div>
                                        <div class="message my-message d-inline-block">Are we meeting today?
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-message p-3 border-top">
                                @if ($judul->is_done && !\App\Helpers\AuthHelper::isAdmin())
                                    
                                    <div class="w-100">
                                        <blockquote class="blockquote border border-primary p-3">
                                            <p>
                                                Lanjut ke tahap selanjutnya !
                                            </p>
                                        </blockquote>
                                    </div>
                                @elseif(!$judul->is_done && \App\Helpers\AuthHelper::isAdmin())
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter text here..." aria-label="Enter text here...">
                                    </div>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success w-100">Selesai</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection