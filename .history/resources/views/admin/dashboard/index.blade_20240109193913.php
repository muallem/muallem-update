<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>:: Lucid HR BS5 :: Expenses</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lucid HR & Project Admin Dashboard Template with Bootstrap 5x">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/dataTables.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
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
                <li class="nav-item flex-fill"><a class="nav-link active" data-bs-toggle="tab" href="#hr_menu" role="tab">HR</a></li>
                <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#project_menu" role="tab">Project</a></li>
                <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#sub_menu" role="tab"><i class="fa fa-th-large"></i></a></li>
                <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#setting_menu" role="tab"><i class="fa fa-cog"></i></a></li>
            </ul>

            <!-- nav tab: content -->
            <div class="tab-content px-0" id="leftTabContent">
                <div class="tab-pane fade show active" id="hr_menu" role="tabpanel" >
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu list-unstyled">
                            <li><a href="index.html"><i class="fa fa-tachometer"></i><span>HR Dashboard</span></a></li>
                            <li><a href="app-holidays.html"><i class="fa fa-list-ul"></i><span>Holidays</span></a></li>
                            <li><a href="app-events.html"><i class="fa fa-calendar"></i><span>Events</span></a></li>
                            <li><a href="app-activities.html"><i class="fa fa-file-text-o"></i><span>Activities</span></a></li>
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
                            <li class="active mm-active">
                                <a href="#Accounts" class="has-arrow"><i class="fa fa-briefcase"></i><span>Accounts</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="acc-payments.html">Payments</a></li>
                                    <li class="active mm-show"><a href="acc-expenses.html">Expenses</a></li>
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
                <div class="tab-pane fade" id="sub_menu" role="tabpanel" >
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
                                <a href="#FileManager" class="has-arrow"><i class="fa fa-folder"></i><span>File Manager</span></a>
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
                            <li>
                                <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>UI Elements</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
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
                            <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Expenses</h2>
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Lucid</a></li>
                                <li class="breadcrumb-item">Accounts</li>
                                <li class="breadcrumb-item active">Expenses</li>
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

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="acc_exp" class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Order by</th>
                                            <th>From</th>
                                            <th>Date</th>
                                            <th>Paid By</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>HP Computer</td>
                                            <td>Marshall Nichols</td>
                                            <td>Amazon</td>
                                            <td>07 March, 2021</td>
                                            <td><img src="../dist/assets/images/paypal.png" class="rounded width45" alt="paypal"></td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>$205</td>
                                        </tr>
                                        <tr>
                                            <td>MacBook Pro</td>
                                            <td>Debra Stewart</td>
                                            <td>Amazon</td>
                                            <td>17 Jun, 2021</td>
                                            <td><img src="../dist/assets/images/mastercard.png" class="rounded width45" alt="paypal"></td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <td>$800</td>
                                        </tr>
                                        <tr>
                                            <td>Dell Monitor 22 inch</td>
                                            <td>Ava Alexander</td>
                                            <td>Flipkart India</td>
                                            <td>21 Jun, 2021</td>
                                            <td><img src="../dist/assets/images/mastercard.png" class="rounded width45" alt="paypal"></td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <td>$205</td>
                                        </tr>
                                        <tr>
                                            <td>Zebronics Desktop</td>
                                            <td>Marshall Nichols</td>
                                            <td>ebay UK</td>
                                            <td>22 July, 2021</td>
                                            <td><img src="../dist/assets/images/paypal.png" class="rounded width45" alt="paypal"></td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>$355</td>
                                        </tr>
                                        <tr>
                                            <td>Logitech USB Mouse, Keyboard</td>
                                            <td>Marshall Nichols</td>
                                            <td>Amazon</td>
                                            <td>28 July, 2021</td>
                                            <td><img src="../dist/assets/images/paypal.png" class="rounded width45" alt="paypal"></td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <td>$40</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
<!-- core js file -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- page js file -->
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    $(document).ready(function () {
        $('#acc_exp')
        .dataTable({
            responsive: true,
        });
    });
</script>
</body>
</html>