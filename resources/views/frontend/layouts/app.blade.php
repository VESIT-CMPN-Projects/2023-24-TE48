<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Saul
Product Version: 1.0.0
Upgrade to Pro: https://keenthemes.com/products/saul-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>KIDS MAINA</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:title" content="KIDS MAINA" />

        <!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->

        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
        <script src="https://code.responsivevoice.org/responsivevoice.js?key=MQjmCaLF"></script>

        <!--begin::Vendor css-->
        @yield('vendor-css')
        <!--end::Vendor css-->

        <!--begin::Custom css-->
        @yield('custom-css')
        <!--end::Custom css-->

		@stack('child-css')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" data-kt-app-aside-enabled="true" data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true" data-kt-app-aside-push-footer="true" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on" class="app-default">
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
                @include('frontend.layouts.partials._header')
                <!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					@include('frontend.layouts.partials._sidebar')
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar pt-5">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
									<!--begin::Toolbar wrapper-->
									<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
										<!--begin::Page title-->
										<div class="page-title d-flex flex-column gap-1 me-3 mb-2">
											<!--begin::Breadcrumb-->
											@yield('breadcrumb')
											<!--end::Breadcrumb-->
											<!--begin::Title-->
											<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">@yield('title', 'Dashboard')</h1>
											<!--end::Title-->
										</div>
										<!--end::Page title-->
										<!--begin::Actions-->
                                        @yield('action')
										<!--end::Actions-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							@yield('content')
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						@include('frontend.layouts.partials._footer')
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
					<!--begin::aside-->
                    @include('frontend.layouts.partials._side-menu')
					<!--end::aside-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->

		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>

        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>

        <script>
            function speakText(text) {
                responsiveVoice.speak(text, "Hindi Female");
            }
        </script>
        <!--end::Global Javascript Bundle-->

		@stack('child-scripts')

        <!--begin::Vendor scripts-->
        @yield('vendor-js')
        <!--end::Vendor scripts-->

		<!--begin::Custom scripts-->
        @yield('custom-js')
		<!--end::Custom scripts-->

		@stack('child-scripts')
	</body>
	<!--end::Body-->
</html>
