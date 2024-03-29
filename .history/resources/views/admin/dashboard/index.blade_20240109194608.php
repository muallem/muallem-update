<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kitabah</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Menjadi seorang pendidik merupakan profesi yang sangat mulia, persiapan maksimal sangat dibutuhkan agar proses mengajar kita berhasil dengan sempurna, tingkatkan potensi mengajar diri anda bersama mentor Muallem">
    <meta name="author" content="muhammadyunus1072@gmail.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('Logo.jpg')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('bootstrap5/dist/assets/css/sweetalert2.min.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap5/dist/assets/css/main.css')}}">
    @livewireStyles
    <style>
        /* Default styles for the tabs */
        .nav-tabs-new2 .nav-item a.nav-link {
            font-size: 23px;
            background-color: #2eacb3; /* Default background color */
            color: white; /* Default text color */
        }

        /* Styles for active tabs */
        .nav-tabs-new2 .nav-item a.nav-link.active {
            background-color: #59d7f0; /* Background color for active tab */
            color: rgb(22, 85, 70); /* Text color for active tab */
        }
        .nav-tabs-new2 .nav-item a.nav-link:hover {
            color: white; /* Text color on hover */
        }
        @media only screen and (min-width: 769px) {
            .tab-content {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>

<div id="layout" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper text-center">
        <div class="loader">
            <svg class="p-3 bg-light rounded" width="120px" viewBox="0 0 85 25">
                <path d="M12.3,7.2l1.5-3.7l8.1,19.4H19l-2.4-5.7H8.2l1.1-2.5h6.1L12.3,7.2z M14.8,20.2l1,2.7H0L9.5,0h3.1L4.3,20.2H14.8
                z M29,18.5v-14h1.6v12.6h6.2v1.5H29V18.5z M49.6,4.5v9.1c0,1.6-0.5,2.9-1.5,3.8s-2.3,1.4-4,1.4s-3-0.5-3.9-1.4s-1.4-2.2-1.4-3.8V4.5
                h1.6v9.1c0,1.2,0.3,2.1,1,2.7c0.6,0.6,1.6,0.9,2.8,0.9s2.1-0.3,2.7-0.9c0.6-0.6,1-1.5,1-2.7V4.5H49.6z M59.4,5.7
                c-1.5,0-2.8,0.5-3.7,1.5s-1.3,2.4-1.3,4.2s0.4,3.3,1.3,4.3c0.9,1,2.1,1.5,3.7,1.5c1,0,2.1-0.2,3.4-0.5v1.4c-1,0.4-2.2,0.5-3.6,0.5
                c-2.1,0-3.7-0.6-4.8-1.9s-1.7-3-1.7-5.4c0-1.4,0.3-2.7,0.8-3.8c0.5-0.9,1.3-1.8,2.3-2.4s2.2-0.9,3.6-0.9c1.5,0,2.8,0.3,3.9,0.8
                l-0.7,1.4C61.5,6,60.4,5.7,59.4,5.7z M65.8,18.5v-14h1.6v14.1h-1.6V18.5z M82.5,11.3c0,2.3-0.6,4.1-1.9,5.3s-3.1,1.8-5.4,1.8h-3.9
                V4.5h4.3c2.2,0,3.9,0.6,5.1,1.8S82.5,9.2,82.5,11.3z M80.8,11.4c0-1.8-0.5-3.2-1.4-4.1s-2.3-1.4-4.1-1.4h-2.4v11.2h2
                c1.9,0,3.4-0.5,4.4-1.4S80.8,13.3,80.8,11.4z" />
            </svg>
            <div class="h5 fw-light mt-3">Please wait</div>
        </div>
    </div>
    
            <!-- Overlay For Sidebars -->
        
            <div id="wrapper">
                <!-- top navbar -->
                <nav class="navbar navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-btn">
                            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                        </div>
        
                        <div class="navbar-brand ps-2">
                            <a href="index.html" class="d-flex">
                                <svg width="85px" viewBox="0 0 85 25">
                                    <path class="fill-primary" d="M12.3,7.2l1.5-3.7l8.1,19.4H19l-2.4-5.7H8.2l1.1-2.5h6.1L12.3,7.2z M14.8,20.2l1,2.7H0L9.5,0h3.1L4.3,20.2H14.8
                                    z M29,18.5v-14h1.6v12.6h6.2v1.5H29V18.5z M49.6,4.5v9.1c0,1.6-0.5,2.9-1.5,3.8s-2.3,1.4-4,1.4s-3-0.5-3.9-1.4s-1.4-2.2-1.4-3.8V4.5
                                    h1.6v9.1c0,1.2,0.3,2.1,1,2.7c0.6,0.6,1.6,0.9,2.8,0.9s2.1-0.3,2.7-0.9c0.6-0.6,1-1.5,1-2.7V4.5H49.6z M59.4,5.7
                                    c-1.5,0-2.8,0.5-3.7,1.5s-1.3,2.4-1.3,4.2s0.4,3.3,1.3,4.3c0.9,1,2.1,1.5,3.7,1.5c1,0,2.1-0.2,3.4-0.5v1.4c-1,0.4-2.2,0.5-3.6,0.5
                                    c-2.1,0-3.7-0.6-4.8-1.9s-1.7-3-1.7-5.4c0-1.4,0.3-2.7,0.8-3.8c0.5-0.9,1.3-1.8,2.3-2.4s2.2-0.9,3.6-0.9c1.5,0,2.8,0.3,3.9,0.8
                                    l-0.7,1.4C61.5,6,60.4,5.7,59.4,5.7z M65.8,18.5v-14h1.6v14.1h-1.6V18.5z M82.5,11.3c0,2.3-0.6,4.1-1.9,5.3s-3.1,1.8-5.4,1.8h-3.9
                                    V4.5h4.3c2.2,0,3.9,0.6,5.1,1.8S82.5,9.2,82.5,11.3z M80.8,11.4c0-1.8-0.5-3.2-1.4-4.1s-2.3-1.4-4.1-1.4h-2.4v11.2h2
                                    c1.9,0,3.4-0.5,4.4-1.4S80.8,13.3,80.8,11.4z" />
                                </svg>
                            </a>
                        </div>
        
                        <div class="d-flex flex-grow-1 align-items-center">
        
                            <div class="flex-grow-1">
                                <ul class="nav navbar-nav flex-row justify-content-end align-items-center">
                                    <li><a href="{{route('logout')}}" class="icon-menu"> <span class="text-danger pe-2"> LOG OUT</span> <i class="fa fa-sign-out"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
        

                <div id="left-sidebar" class="sidebar">
                    
                    <!-- Sidbar menu -->
                    <div>
                        <div class="user-account p-3 mb-3">
                            <div class="d-flex mb-3 pb-3 border-bottom align-items-center">
                                <div class="dropdown flex-grow-1">
                                    <span>Welcome,</span>
                                    <a href="#" class="dropdown-toggle user-name" data-bs-toggle="dropdown"><strong>{{Session::get('user_name')}}</strong></a>
                                    <ul class="dropdown-menu p-2 shadow-sm">
                                        <li><a href="{{route('logout')}}"><i class="fa fa-power-off me-2"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- nav tab: menu list -->
                        <ul class="nav nav-tabs text-center mb-2" role="tablist">
                            
                                <li class="nav-item flex-fill"><a class="nav-link active" data-bs-toggle="tab" href="#admin_menu" role="tab">Admin</a></li>
                            
                                <li class="nav-item flex-fill"><a class="nav-link active" id="student_menu_nav_link" data-bs-toggle="tab" href="#student_menu" role="tab">Student</a></li>
                            
                        </ul>
                        @livewire('coba.index')
                    </div> 
                </div>  
        
                <div id="main-content">
                    @yield('content')
                </div>
        
            </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

        <!-- core js file -->
        <script src="{{asset('bootstrap5/dist/assets/bundles/libscripts.bundle.js')}}"></script>
        <script src="{{asset('bootstrap5/dist/assets/bundles/sweetalert2.bundle.js')}}"></script>
        
        <!-- page js file -->
        <script src="{{asset('bootstrap5/dist/assets/bundles/mainscripts.bundle.js')}}"></script>
        @livewireScripts

        <script>
            
            window.livewire.on('onSuccessSweetAlert', (message) => {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: message,
                });
            });
            window.livewire.on('consoleLog', (message) => {
                console.log(message)
            });

            window.livewire.on('onFailSweetAlert', (message) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: message,
                });
            });

            window.livewire.on('openNewTab', (url) => {
                window.open(url, '_blank');
            });
            window.livewire.on('closeTab', () => {
                window.close();
            });
        </script>
        @stack('js')
</body>
</html>