<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>:: Lucid HR BS5 :: Bootstrap UI</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lucid HR & Project Admin Dashboard Template with Bootstrap 5x">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap5/dist/assets/css/main.css')}}">

    <!-- Just Demo not include in project -->
    <style>
        .highlight {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .highlight pre code {
            font-size: inherit;
            color: #212529;
        }

        .nt {
            color: #2f6f9f;
        }

        .na {
            color: #4f9fcf;
        }

        .s {
            color: #d44950;
        }

        pre.prettyprint {
            background-color: #eee;
            border: 0px;
            margin: 0;
            padding: 20px;
            text-align: left;
        }

        .atv,
        .str {
            color: #05AE0E;
        }

        .tag,
        .pln,
        .kwd {
            color: #3472F7;
        }

        .atn {
            color: #2C93FF;
        }

        .pln {
            color: #333;
        }

        .com {
            color: #999;
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
                    <div class="d-flex">
                        <ul class="nav nav-pills me-4 ms-2 d-none d-lg-block">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu Version</a>
                                <ul class="dropdown-menu shadow-sm">
                                    <li><a class="dropdown-item" href="index.html">Sidebar menu</a></li>
                                    <li><a class="dropdown-item" href="horizontal/index.html">Horizontal menu</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="sidebar-mini/index.html">Sidebar mini</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form id="navbar-search" class="navbar-form search-form position-relative d-none d-md-block">
                            <input value="" class="form-control" placeholder="Search here..." type="text">
                            <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="flex-grow-1">
                        <ul class="nav navbar-nav flex-row justify-content-end align-items-center">
                            <li class="d-none d-sm-block"><a href="app-events.html" class="icon-menu"><i class="fa fa-calendar"></i></a></li>
                            <li class="d-none d-sm-block"><a href="app-chat.html" class="icon-menu"><i class="fa fa-comments"></i></a></li>
                            <li><a href="app-inbox.html" class="icon-menu"><i class="fa fa-envelope"></i><span class="notification-dot"></span></a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle icon-menu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification-dot"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-0 shadow notification">
                                    <ul class="list-unstyled feeds_widget">
                                        <li class="d-flex">
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body flex-grow-1">
                                                <h6 class="mb-1">7 New Feedback <small class="float-end text-muted small">Today</small></h6>
                                                <span class="text-muted">It will give a smart finishing to your site</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body flex-grow-1">
                                                <h6 class="mb-1">New User <small class="float-end text-muted small">10:45</small></h6>
                                                <span class="text-muted">I feel great! Thanks team</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body flex-grow-1">
                                                <h6 class="mb-1 text-warning">Server Warning <small class="float-end text-muted small">10:50</small></h6>
                                                <span class="text-muted">Your connection is not private</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body flex-grow-1">
                                                <h6 class="mb-1 text-danger">Issue Fixed <small class="float-end text-muted small">11:05</small></h6>
                                                <span class="text-muted">WE have fix all Design bug with Responsive</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                            <div class="feeds-body flex-grow-1">
                                                <h6 class="mb-1">7 New Orders <small class="float-end text-muted small">11:35</small></h6>
                                                <span class="text-muted">You received a new oder from Tina.</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- more link -->
                            <li class="dropdown">
                                <a class="dropdown-toggle icon-menu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-sliders"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end p-2 shadow">
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-pencil-square-o"></i> <span>Basic</span></a></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-sliders fa-rotate-90"></i> <span>Preferences</span></a></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-lock"></i> <span>Privacy</span></a></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-bell"></i> <span>Notifications</span></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-credit-card"></i> <span>Payments</span></a></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-print"></i> <span>Invoices</span></a></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-refresh"></i> <span>Renewals</span></a></li>
                                </ul>
                            </li>
                            <li><a href="page-login.html" class="icon-menu"><i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Sidbar menu -->
        <div id="left-sidebar" class="sidebar">
            <div class="user-account p-3 mb-3">
                <div class="d-flex mb-3 pb-3 border-bottom align-items-center">
                    <img src="../dist/assets/images/user.png" class="avatar lg rounded me-3" alt="User Profile Picture">
                    <div class="dropdown flex-grow-1">
                        <span>Welcome,</span>
                        <a href="#" class="dropdown-toggle user-name" data-bs-toggle="dropdown"><strong>Jessica Doe</strong></a>
                        <ul class="dropdown-menu p-2 shadow-sm">
                            <li><a href="page-profile2.html"><i class="fa fa-user me-2"></i>My Profile</a></li>
                            <li><a href="app-inbox.html"><i class="fa fa-envelope-open me-2"></i>Messages</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-cog me-2"></i>Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="page-login.html"><i class="fa fa-power-off me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <h6 class="mb-0">5+</h6>
                        <small class="text-muted">Experience</small>
                    </div>
                    <div class="col">
                        <h6 class="mb-0">400+</h6>
                        <small class="text-muted">Employees</small>
                    </div>
                    <div class="col">
                        <h6 class="mb-0">80+</h6>
                        <small class="text-muted">Clients</small>
                    </div>
                </div>
            </div>
            <!-- nav tab: menu list -->
            <ul class="nav nav-tabs text-center mb-2" role="tablist">
                <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#hr_menu" role="tab">HR</a></li>
                <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#project_menu" role="tab">Project</a></li>
                <li class="nav-item flex-fill"><a class="nav-link active" data-bs-toggle="tab" href="#sub_menu" role="tab"><i class="fa fa-th-large"></i></a></li>
                <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#setting_menu" role="tab"><i class="fa fa-cog"></i></a></li>
            </ul>

            <!-- nav tab: content -->
            <div class="tab-content px-0">
                <div class="tab-pane" id="hr_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu list-unstyled">
                            <li><a href="index.html"><i class="fa fa-tachometer"></i><span>HR Dashboard</span></a></li>
                            <li><a href="app-holidays.html"><i class="fa fa-list-ul"></i><span>Holidays</span></a></li>
                            <li><a href="app-events.html"><i class="fa fa-calendar"></i><span>Events</span></a></li>
                            <li><a href="app-activities.html"><i
                                        class="fa fa-file-text-o"></i>Activities</a>
                            </li>
                            <li><a href="app-social.html"><i class="fa fa-globe"></i><span>HR Social</span></a></li>
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="fa fa-users"></i><span>Employees</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="emp-all.html">All Employees</a></li>
                                    <li><a href="emp-leave.html">Leave Requests</a></li>
                                    <li><a href="emp-attendance.html">Attendance</a></li>
                                    <li><a href="emp-departments.html">Departments</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Accounts" class="has-arrow"><i class="fa fa-briefcase"></i><span>Accounts</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="acc-payments.html">Payments</a></li>
                                    <li><a href="acc-expenses.html">Expenses</a></li>
                                    <li><a href="acc-invoices.html">Invoices</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Payroll" class="has-arrow"><i class="fa fa-credit-card"></i><span>Payroll</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="payroll-payslip.html">Payslip</a></li>
                                    <li><a href="payroll-salary.html">Employee Salary</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Report" class="has-arrow"><i class="fa fa-bar-chart"></i><span>Report</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="report-expense.html">Expense Report</a></li>
                                    <li><a href="report-invoice.html">Invoice Report</a></li>
                                </ul>
                            </li>
                            <li><a href="app-users.html"><i class="fa fa-user"></i><span>Users</span></a></li>
                            <li>
                                <a href="#Authentication" class="has-arrow"><i class="fa fa-lock"></i><span>Authentication</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-lockscreen.html">Lockscreen</a></li>
                                    <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                    <li><a href="page-404.html">Page 404</a></li>
                                    <li><a href="page-403.html">Page 403</a></li>
                                    <li><a href="page-500.html">Page 500</a></li>
                                    <li><a href="page-503.html">Page 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="project_menu" role="tabpanel" >
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu list-unstyled">
                            <li><a href="index2.html"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                            <li><a href="app-inbox.html"><i class="fa fa-envelope-o"></i><span>Inbox App</span></a></li>
                            <li><a href="app-chat.html"><i class="fa fa-comments"></i><span>Chat App</span></a></li>
                            <li>
                                <a href="#Projects" class="has-arrow"><i class="fa fa-list-ul"></i><span>Projects</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="project-add.html">Add Projects</a></li>
                                    <li><a href="project-list.html">Projects List</a></li>
                                    <li><a href="project-grid.html">Projects Grid</a></li>
                                    <li><a href="project-detail.html">Projects Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Clients" class="has-arrow"><i class="fa fa-user"></i><span>Clients</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="client-add.html">Add Clients</a></li>
                                    <li><a href="client-list.html">Clients List</a></li>
                                    <li><a href="client-detail.html">Clients Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="project-team.html"><i class="fa fa-users"></i><span>Team</span></a></li>
                            <li><a href="app-taskboard.html"><i class="fa fa-tag"></i><span>Taskboard</span></a></li>
                            <li><a href="app-tickets.html"><i class="fa fa-ticket"></i><span>Tickets</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane active" id="sub_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu list-unstyled">
                            <li>
                                <a href="#Blog" class="has-arrow"><i class="fa fa-globe"></i><span>Blog</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="blog-dashboard.html">Dashboard</a></li>
                                    <li><a href="blog-post.html">New Post</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-details.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#FileManager" class="has-arrow"><i
                                        class="fa fa-folder"></i><span>File
                                        Manager</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="file-dashboard.html">Dashboard</a></li>
                                    <li><a href="file-documents.html">Documents</a></li>
                                    <li><a href="file-media.html">Media</a></li>
                                    <li><a href="file-images.html">Images</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Widgets" class="has-arrow"><i class="fa fa-puzzle-piece"></i><span>Widgets</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="widgets-statistics.html">Statistics Widgets</a></li>
                                    <li><a href="widgets-data.html">Data Widgets</a></li>
                                    <li><a href="widgets-chart.html">Chart Widgets</a></li>
                                    <li><a href="widgets-weather.html">Weather Widgets</a></li>
                                    <li><a href="widgets-social.html">Social Widgets</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Pages" class="has-arrow"><i class="fa fa-files-o"></i><span>Extra Pages</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-blank.html">Blank Page</a></li>
                                    <li><a href="page-profile2.html">Profile</a></li>
                                    <li><a href="page-gallery.html">Image Gallery <span class="badge bg-secondary float-end">v1</span></a></li>
                                    <li><a href="page-timeline.html">Timeline</a></li>
                                    <li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
                                    <li><a href="page-pricing.html">Pricing</a></li>
                                    <li><a href="page-invoices.html">Invoices</a></li>
                                    <li><a href="page-invoices2.html">Invoices <span class="badge bg-warning float-end">v2</span></a></li>
                                    <li><a href="page-search-results.html">Search Results</a></li>
                                    <li><a href="page-helper-class.html">Helper Classes</a></li>
                                    <li><a href="page-maintenance.html">Maintenance</a></li>
                                    <li><a href="page-testimonials.html">Testimonials</a></li>
                                    <li><a href="page-faq.html">FAQs</a></li>
                                </ul>
                            </li>
                            <li class="active mm-active">
                                <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i>
                                    <span>UI
                                        Elements</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li class="active"><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    <li><a href="ui-icons.html">Icons</a></li>
                                    <li><a href="ui-notifications.html">Notifications</a></li>
                                    <li><a href="ui-colors.html">Colors</a></li>
                                    <li><a href="ui-dialogs.html">Dialogs</a></li>
                                    <li><a href="ui-list-group.html">List Group</a></li>
                                    <li><a href="ui-media-object.html">Media Object</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-nestable.html">Nestable</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-range-sliders.html">Range Sliders</a></li>
                                    <li><a href="ui-treeview.html">Treeview</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms" class="has-arrow"><i class="fa fa-pencil"></i><span>Forms</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="forms-validation.html">Form Validation</a></li>
                                    <li><a href="forms-advanced.html">Advanced Elements</a></li>
                                    <li><a href="forms-basic.html">Basic Elements</a></li>
                                    <li><a href="forms-wizard.html">Form Wizard</a></li>
                                    <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                                    <li><a href="forms-cropping.html">Image Cropping</a></li>
                                    <li><a href="forms-summernote.html">Summernote</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Tables" class="has-arrow"><i class="fa fa-tag"></i><span>Tables</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="table-basic.html">Tables Example<span class="badge bg-info float-end">New</span></a></li>
                                    <li><a href="table-normal.html">Normal Tables</a></li>
                                    <li><a href="table-jquery-datatable.html">Jquery Datatables</a></li>
                                    <li><a href="table-editable.html">Editable Tables</a></li>
                                    <li><a href="table-color.html">Tables Color</a></li>
                                    <li><a href="table-filter.html">Table Filter <span class="badge bg-info float-end">New</span></a></li>
                                    <li><a href="table-dragger.html">Table dragger <span class="badge bg-info float-end">New</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#charts" class="has-arrow"><i class="fa fa-bar-chart"></i><span>Charts</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-morris.html">Morris</a></li>
                                    <li><a href="chart-flot.html">Flot</a></li>
                                    <li><a href="chart-jquery-knob.html">Jquery Knob</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-peity.html">Peity</a></li>
                                    <li><a href="chart-apex.html">Apex Charts</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Maps" class="has-arrow"><i class="fa fa-map-o"></i><span>Maps</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="map-yandex.html">Yandex Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="setting_menu" role="tabpanel" >
                    <div class="px-3">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple" class="mb-2"><div class="purple"></div><span>Purple</span></li>
                        <li data-theme="blue" class="mb-2"><div class="blue"></div><span>Blue</span></li>
                        <li data-theme="cyan" class="active mb-2"><div class="cyan"></div><span>Cyan</span></li>
                        <li data-theme="green" class="mb-2"><div class="green"></div><span>Green</span></li>
                        <li data-theme="orange" class="mb-2"><div class="orange"></div><span>Orange</span></li>
                        <li data-theme="blush" class="mb-2"><div class="blush"></div><span>Blush</span></li>
                    </ul>
                    <hr>
                    <h6>Theme Option</h6>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-1">
                            <div class="form-check form-switch theme-switch">
                                <input class="form-check-input" type="checkbox" id="theme-switch">
                                <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-1">
                            <div class="form-check form-switch theme-high-contrast">
                                <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-1">
                            <div class="form-check form-switch theme-rtl">
                                <input class="form-check-input" type="checkbox" id="theme-rtl">
                                <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-1">
                            <div class="form-check form-switch minisidebar-active">
                                <input class="form-check-input" type="checkbox" id="mini-active">
                                <label class="form-check-label" for="mini-active">Mini Sidebar</label>
                            </div>
                        </li>
                    </ul>
                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                <label class="form-check-label" for="flexCheckDefault1">Email Redirect</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                                <label class="form-check-label" for="flexCheckDefault2">Notifications</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                <label class="form-check-label" for="flexCheckDefault3">Auto Updates</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                <label class="form-check-label" for="flexCheckDefault4">Offline</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                <label class="form-check-label" for="flexCheckDefault5">Location Permission</label>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>

        <div id="main-content">
            <div class="container-fluid">

                <div class="block-header py-lg-4 py-3">
                    <div class="row g-3">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Bootstrap UI</h2>
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Lucid</a></li>
                                <li class="breadcrumb-item">UI Elements</li>
                                <li class="breadcrumb-item active">Bootstrap UI</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-end">
                            <div class="d-inline-flex text-start">
                                <div class="me-2">
                                    <h6 class="mb-0"><i class="fa fa-user"></i> 1,784</h6>
                                    <small>Visitors</small>
                                </div>
                                <span id="bh_visitors"></span>
                            </div>
                            <div class="d-inline-flex text-start ms-lg-3 me-lg-3 ms-1 me-1">
                                <div class="me-2">
                                    <h6 class="mb-0"><i class="fa fa-globe"></i> 325</h6>
                                    <small>Visits</small>
                                </div>
                                <span id="bh_visits"></span>
                            </div>
                            <div class="d-inline-flex text-start">
                                <div class="me-2">
                                    <h6 class="mb-0"><i class="fa fa-comments"></i> 13</h6>
                                    <small>Chats</small>
                                </div>
                                <span id="bh_chats"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Alert Messages</h6>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-primary" role="alert">A simple primary alert—check it out!</div>
                                <div class="alert alert-secondary" role="alert">A simple secondary alert—check it out!</div>
                                <div class="alert alert-success" role="alert">A simple success alert—check it out!</div>
                                <div class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>
                                <div class="alert alert-warning" role="alert">A simple warning alert—check it out!</div>
                                <div class="alert alert-info" role="alert">A simple info alert—check it out!</div>
                                <div class="alert alert-light" role="alert">A simple light alert—check it out!</div>
                                <div class="alert alert-dark" role="alert">A simple dark alert—check it out!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Alert Messages with Link</h6>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-primary" role="alert">A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                <div class="alert alert-secondary" role="alert">A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                <div class="alert alert-success" role="alert">A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                <div class="alert alert-danger" role="alert">A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                <div class="alert alert-warning" role="alert">A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                <div class="alert alert-info" role="alert">A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                <div class="alert alert-light" role="alert">A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                <div class="alert alert-dark" role="alert">A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Alert Messages With Icon</h6>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <i class="fa fa-info-circle"></i> The system is running well
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <i class="fa fa-check-circle"></i> Your settings have been succesfully saved
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <i class="fa fa-warning"></i> Warning, check your permission settings
                                </div>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <i class="fa fa-times-circle"></i> Your account has been suspended
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Labels</h6>
                            </div>
                            <div class="card-body">
                                <p>We restyled the default options for labels and we added the filled class, that can be used in any combination.</p>
                                <span class="badge bg-secondary">Default</span>
                                <span class="badge bg-primary">Primary</span>
                                <span class="badge bg-success">Success</span>
                                <span class="badge bg-info">Info</span>
                                <span class="badge bg-warning">Warning</span>
                                <span class="badge bg-danger">Danger</span>
                                <hr>
<pre class="prettyprint prettyprinted"><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge bg-secondary"</span><span class="tag">&gt;</span><span class="pln">Default</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge bg-primary"</span><span class="tag">&gt;</span><span class="pln">Primary</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge bg-success"</span><span class="tag">&gt;</span><span class="pln">Success</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge bg-info"</span><span class="tag">&gt;</span><span class="pln">Info</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge bg-warning"</span><span class="tag">&gt;</span><span class="pln">Warning</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge bg-danger"</span><span class="tag">&gt;</span><span class="pln">Danger</span><span class="tag">&lt;/span&gt;</span></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Modals</h6>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Large modal</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">Small modal</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">modal with button</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Vertically centered</button>
                
                                <!-- larg modal -->
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4" id="myLargeModalLabel">Large modal</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Woohoo, you're reading this text in a modal!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Small modal -->
                                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4" id="mySmallModalLabel">Small modal</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Woohoo, you're reading this text in a modal!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Modal with btn -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Woohoo, you're reading this text in a modal!</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Vertically centered -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur orbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Accordion</h6>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-lg-6 col-md-12">
                                        <h6>Accordion Link</h6>
                                        <p>
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Link with href
                                            </a>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Button with data-target
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-lg-6 col-md-12">
                                        <h6 class="card-title">Multiple targets Accordion</h6>
                                        <p>
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">
                                                Toggle both elements
                                            </button>
                                        </p>
                                        <div class="row g-3">
                                            <div class="col">
                                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                    <div class="card card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                    <div class="card card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Pagination</h6>
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                                <hr />
                                <h6 class="card-title">Working with icons</h6>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <hr />
                                <h6 class="card-title">Disabled and active states</h6>
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Tooltips</h6>
                            </div>
                            <div class="card-body">
                                <div class="demo-button">
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Tooltip on top</button>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Tooltip on right</button>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">Tooltip on left</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Popovers</h6>
                            </div>
                            <div class="card-body">
                                <div class="demo-button">
                                    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
                                    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on right</button>
                                    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on bottom</button>
                                    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on left</button>
                                    <button type="button" class="btn btn-secondary" data-bs-trigger="hover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on Hover</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Position</h6>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Common values</h6>
                                <figure class="highlight">
<pre class="mb-0"><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"position-static"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"position-relative"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"position-absolute"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"position-fixed"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"position-sticky"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre>
                                </figure>
                                <hr>
                                <h6 class="card-title">Sticky top</h6>
                                <figure class="highlight">
                                    <pre class="mb-0"><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"sticky-top"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre>
                                </figure>
                                <div class="p-3 mb-2 bg-primary text-white sticky-top">.sticky-top</div>
                                <hr>
                                <h6 class="card-title">Fixed top</h6>
                                <figure class="highlight">
                                    <pre class="mb-0"><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fixed-bottom"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre>
                                </figure>
                                <hr>
                                <h6 class="card-title">Fixed bottom</h6>
                                <figure class="highlight">
                                    <pre class="mb-0"><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fixed-bottom"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Borders</h6>
                            </div>
                            <div class="card-body bd-example-border-utils">
                                <div class="d-flex">
                                    <span class="border"></span>
                                    <span class="border-top"></span>
                                    <span class="border-end"></span>
                                    <span class="border-bottom"></span>
                                    <span class="border-start"></span>
                                </div>
                                <hr>
                                <h6 class="card-title">Subtractive</h6>
                                <span class="border-0"></span>
                                <span class="border border-top-0"></span>
                                <span class="border border-end-0"></span>
                                <span class="border border-bottom-0"></span>
                                <span class="border border-start-0"></span>
                                <hr>
                                <h6 class="card-title">Border color</h6>
                                <span class="border border-primary"></span>
                                <span class="border border-secondary"></span>
                                <span class="border border-success"></span>
                                <span class="border border-danger"></span>
                                <span class="border border-warning"></span>
                                <span class="border border-info"></span>
                                <span class="border border-light"></span>
                                <span class="border border-dark"></span>
                                <span class="border border-white"></span>
                                <hr>
                                <h6 class="card-title">Border Width</h6>
                                <span class="border border-1"></span>
                                <span class="border border-2"></span>
                                <span class="border border-3"></span>
                                <span class="border border-4"></span>
                                <span class="border border-5"></span>
                                <hr>
                                <h6 class="card-title">Border-radius</h6>
                                <img src="http://via.placeholder.com/75x75" class="rounded" alt="...">
                                <img src="http://via.placeholder.com/75x75" class="rounded-top" alt="...">
                                <img src="http://via.placeholder.com/75x75" class="rounded-end" alt="...">
                                <img src="http://via.placeholder.com/75x75" class="rounded-bottom" alt="...">
                                <img src="http://via.placeholder.com/75x75" class="rounded-start" alt="...">
                                <img src="http://via.placeholder.com/75x75" class="rounded-circle" alt="...">
                                <img src="http://via.placeholder.com/150x75" class="rounded-pill" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Shadows</h6>
                            </div>
                            <div class="card-body">
                                <div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
                                <div class="shadow-sm p-3 mb-5 bg-white rounded">Small shadow</div>
                                <div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div>
                                <div class="shadow-lg p-3 mb-5 bg-white rounded">Larger shadow</div>
                                <figure class="highlight">
                                    <pre class="mb-0"><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"shadow-none p-3 mb-5 bg-light rounded"</span><span class="nt">&gt;</span>No shadow<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"shadow-sm p-3 mb-5 bg-white rounded"</span><span class="nt">&gt;</span>Small shadow<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"shadow p-3 mb-5 bg-white rounded"</span><span class="nt">&gt;</span>Regular shadow<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"shadow-lg p-3 mb-5 bg-white rounded"</span><span class="nt">&gt;</span>Larger shadow<span class="nt">&lt;/div&gt;</span></code></pre>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<!-- core js file -->
<script src="{{asset('bootstrap5/dist/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('bootstrap5/dist/assets/bundles/sweetalert2.bundle.js')}}"></script>

<!-- page js file -->
<script src="{{asset('bootstrap5/dist/assets/bundles/mainscripts.bundle.js')}}"></script>
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>
</body>
</html>