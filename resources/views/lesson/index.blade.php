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
                                                            
                                                            <a style="font-size: 23px;" class="nav-link {{(preg_replace('/\s+/', '_', $item->title . '-' . $item->id) === preg_replace('/\s+/', '_', $lesson_detail->title . '-' . $lesson_detail->id)) ? 'active show' : ''}}" href="{{route('lesson_detail', ['lesson_detail_id' => Crypt::encryptString($item->id)])}}" aria-selected="true" role="tab" >
                                                                {{$item->title}}
                                                            </a>
                                                        </li>

                                                    @endforeach
                                                </ul>
                                                    
                                
                                                
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @livewire('lesson.detail', ['lesson_detail' => $lesson_detail, 'judul' => $judul])
            </div>
        </div>

    </div>
@endsection