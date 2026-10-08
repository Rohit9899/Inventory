<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/assets/img/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/icons/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/tabler-icons/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/flatpickr/flatpickr.min.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/tom-select/tom-select.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
</head>

<body>

<div id="global-loader" style="display: none;">
    <div class="page-loader"></div>
</div>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">
        <div class="main-header">

            <div class="header-left">
                <a href="{{ route('admin.dashboard') }}" class="logo">
                    <img src="{{  asset('admin/assets/img/logo.svg') }}" alt="Logo">
                </a>
                <a href="{{ route('admin.dashboard') }}" class="dark-logo">
                    <img src="{{  asset('admin/assets/img/logo-white.svg') }}" alt="Logo">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="starter.html#sidebar">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
            </a>

            <div class="header-user">
                <div class="nav user-menu nav-list">

                    <div class="me-auto d-flex align-items-center" id="header-search">
                        <a id="toggle_btn" href="javascript:void(0);" class="btn btn-menubar me-2">
                            <i class="ti ti-arrow-bar-to-left"></i>
                        </a>


                    </div>



                    <div class="d-flex align-items-center">

                        <div class="dropdown profile-dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
                               data-bs-toggle="dropdown">
									<span class="avatar avatar-md online">
										<img src="assets/img/profiles/avatar-12.jpg" alt="Img"
                                             class="img-fluid rounded-circle">
									</span>
                            </a>
                            <div class="dropdown-menu shadow-none">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
												<span class="avatar avatar-lg me-2 avatar-rounded">
													<img src="assets/img/profiles/avatar-12.jpg" alt="img">
												</span>
                                            <div>
                                                <h5 class="mb-0">Kevin Larry</h5>
                                                <p class="fs-12 fw-medium mb-0">warren@example.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a class="dropdown-item d-inline-flex align-items-center p-0 py-2"
                                           href="profile.html">
                                            <i class="ti ti-user-circle me-1"></i>My Profile
                                        </a>
                                        <a class="dropdown-item d-inline-flex align-items-center p-0 py-2"
                                           href="business-settings.html">
                                            <i class="ti ti-settings me-1"></i>Settings
                                        </a>

                                        <a class="dropdown-item d-inline-flex align-items-center p-0 py-2"
                                           href="profile-settings.html">
                                            <i class="ti ti-circle-arrow-up me-1"></i>My Account
                                        </a>
                                        <a class="dropdown-item d-inline-flex align-items-center p-0 py-2"
                                           href="knowledgebase.html">
                                            <i class="ti ti-question-mark me-1"></i>Knowledge Base
                                        </a>
                                    </div>
                                    <div class="card-footer">
                                        <a class="dropdown-item d-inline-flex align-items-center p-0 py-2"
                                           href="login.html">
                                            <i class="ti ti-login me-2"></i>Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                   aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="profile-settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
            <!-- /Mobile Menu -->

        </div>
    </div>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <!-- Logo -->
        <div class="sidebar-logo">
            <a href="{{ route('admin.dashboard') }}" class="logo logo-normal">
                <img src="assets/img/logo.svg" alt="Logo">
            </a>
            <a href="{{ route('admin.dashboard') }}" class="logo-small">
                <img src="assets/img/logo-small.svg" alt="Logo">
            </a>
            <a href="{{ route('admin.dashboard') }}" class="dark-logo">
                <img src="assets/img/logo-white.svg" alt="Logo">
            </a>
        </div>
        <!-- /Logo -->
        <div class="modern-profile p-3 pb-0">
            <div class="text-center rounded bg-light p-3 mb-4 user-profile">
                <div class="avatar avatar-lg online mb-3">
                    <img src="{{ asset('admin/assets/img/profiles/avatar-02.jpg') }}" alt="Img" class="img-fluid rounded-circle">
                </div>
                <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                <p class="fs-10">System Admin</p>
            </div>
            <div class="sidebar-nav mb-3">
                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent"
                    role="tablist">
                    <li class="nav-item"><a class="nav-link active border-0" href="starter.html#">Menu</a></li>
                    <li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
                    <li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
                </ul>
            </div>
        </div>
        <div data-simplebar class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title"><span>MAIN MENU</span></li>
                    <li>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:">
                                    <i class="ti ti-sparkles"></i><span>AI Center</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="ai-attendance-insights.html">AI Attendance Insights</a></li>
                                    <li><a href="ai-payroll-forecast.html">AI Payroll Forecast</a></li>
                                    <li><a href="ai-hiring-forecast.html">AI Hiring Forecast</a></li>
                                    <li><a href="ai-team-performance-insights.html">AI Team Performance Insights</a></li>
                                    <li><a href="ai-configuration.html">AI Settings</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="layout-horizontal.html">
                                    <i class="ti ti-layout-navbar"></i><span>Horizontal</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->






    <!-- Page Wrapper -->
    <div class="page-wrapper vh-100 d-flex flex-column justify-content-between">
        <div class="content flex-fill h-100">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Starter </h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Pages
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Starter </li>
                        </ol>
                    </nav>
                </div>
                <div class="head-icons ms-2">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                       data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
            <!-- /Breadcrumb -->

        </div>
        <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
            <p class="mb-0">2014 - 2026 &copy; SmartHR.</p>
            <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
        </div>
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->

<!-- Bootstrap Core JS -->
<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Feather Icon JS -->
<script src="{{ asset('admin/assets/js/feather.min.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('admin/assets/plugins/simplebar/simplebar.min.js') }}"></script>

<!-- Sticky Sidebar JS -->

<!-- Select2 JS -->

<!-- Bootstrap Tagsinput JS -->

<!-- Custom JS -->
<script src="{{ asset('admin/assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/tom-select/tom-select.complete.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/script.js') }}"></script>

</body>

</html>
