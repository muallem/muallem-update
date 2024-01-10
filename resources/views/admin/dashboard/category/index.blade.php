@extends('layouts.dashboard')


@section('content')

<div class="container-fluid">

    <div class="block-header py-lg-4 py-3">
        <div class="row g-3">
            <div class="col-md-6 col-sm-12">
                <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Kitabah</h2>
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Materi</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Modal Default Size</h6>
                </div>
                <div class="card-body">
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="img-thumbnail img-fluid" src="../dist/assets/images/model1.jpg" alt="User">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Modal Large Size</h6>
                </div>
                <div class="card-body">
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#largeModal">
                        <img class="img-thumbnail img-fluid" src="../dist/assets/images/model1.jpg" alt="User">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Modal Small Size</h6>
                </div>
                <div class="card-body">
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#smallModal">
                        <img class="img-thumbnail img-fluid" src="../dist/assets/images/model3.jpg" alt="User">
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
 <!-- Modal Dialogs ========= -->
    <!-- Default Size -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc
                    nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Large Size -->
    <div class="modal fade" id="largeModal" tabindex="-1" aria-labelledby="largeModal" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc
                    nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Small Size -->
    <div class="modal fade" id="smallModal" tabindex="-1" aria-labelledby="smallModal" aria-hidden="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc
                    nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container-fluid">
            
        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Kitabah</h2>
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-3 clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card mb-3 single_post">
                    <div class="card">
                        <div class="card-header">
                            @livewire('dashboard.category.filter')
                        </div>
                        <div class="card-body">
                            @livewire('dashboard.category.datatable')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection