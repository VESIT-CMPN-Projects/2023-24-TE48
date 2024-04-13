<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>AcademIQ</title>
		<meta content="" name="description">
		<meta content="" name="keywords">
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor css-->
		@yield('vendor-css')
		<!--end::Vendor css-->
		<!--begin::Page level css-->
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet">
		@yield('page-level-styles')
        <style>
			.navbar-brand {
				font-size: 30px;
				line-height: 30px;
			}
            #main, #footer {
                margin-left: 0px;
            }
            .hero-banner {
				height: 100vh;
				display: flex;
				align-items: center;
                padding: 0;
            }
			.btn-primary {
				--bs-btn-hover-color: #0d6efd;
				--bs-btn-hover-bg: #fff;
				--bs-btn-hover-border-color: #0d6efd;
			}
        </style>
		<!--end::Page level css-->
	</head>
	<body id="kt_body" class="app-blank">
		<!-- ======= Header ======= -->
		<header id="header" class="header fixed-top d-flex align-items-center p-0">
            <!-- End Search Bar -->
            <nav class="navbar" style="width: 100%; background-color:#FFF; z-index:9999">
                <div class="container">
                    <a class="navbar-brand" href="{{route('home')}}">AcademIQ</a>
                    <div class="d-flex">
						<div class="me-0">
							<button class="btn btn-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								Sign Up
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="{{route('teacher.register')}}" class="menu-link px-3">As Teacher</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="{{route('student.register')}}" class="menu-link px-3">As Student</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
						</div>
                        <a href="{{route('login')}}" class="btn btn-outline-primary btn-active-color-white">Sign In</a>
                    </div>
                </div>
			</nav>
            <!-- End Icons Navigation -->
        </header>
		<!-- End Header -->
		<main id="main" class="main">
            <div class="hero-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 style="font-size: 80px">Welcome to <span class="text-primary">AcademIQ</span>. Prepare with confidence</h2>
                            <h4>Excel every exam with our high yeild <span class="text-primary">MCQ's</span></h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="img-responsive">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</main>
		<!-- End #main -->
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendor js-->
		@yield('vendor-js')
		<!--end::Vendor js-->
		<!--begin::Page level scripts-->
		<script src="{{asset('frontend/assets/js/main.js')}}"></script>
		@yield('page-level-scripts')
		<!--end::Page level scripts-->
	</body>
</html>
