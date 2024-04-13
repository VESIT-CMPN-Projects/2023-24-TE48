<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Main-->
    <div class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 d-flex flex-column"
        id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_main" data-kt-scroll-offset="5px">
        <!--begin::Sidebar menu-->
        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
            class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('dashboard') }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
                <!--end:Menu link-->
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('alphabets.index') }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-some-files fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Alphabets</span>
                </a>
                <!--end:Menu link-->

                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('drawingBoard') }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-some-files fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Drawing Board</span>
                </a>
                <!--end:Menu link-->

                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('numbers.index') }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-some-files fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Numbers</span>
                </a>
                <!--end:Menu link-->
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('shapes.index') }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-some-files fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Shapes</span>
                </a>
                <!--end:Menu link-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion hover show">
                    <span class="menu-link py-2"><span class="menu-title">Animals</span><span
                            class="menu-arrow"></span></span>
                    <div class="menu-sub menu-sub-accordion show" kt-hidden-height="65" style="">

                        <div class="menu-item"><a class="menu-link py-2"
                                href="{{ route('domestic-animal.index')}}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Domestic Animals</span></a></div>
                        <div class="menu-item"><a class="menu-link py-2"
                                href="{{ route('wild-animal.index')}}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Wild Animals</span></a></div>
                    </div>
                </div>
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('vegetables.index') }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-some-files fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Vegetables</span>
                </a>
                <!--end:Menu link-->
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('poems.index') }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-some-files fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Poems</span>
                </a>
                <!--end:Menu link-->
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('quizzes.show', 1) }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-some-files fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Quiz</span>
                </a>
                <!--end:Menu link-->

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion hover show">
                    <span class="menu-link py-2"><span class="menu-title">Augmented Reality</span><span
                            class="menu-arrow"></span></span>
                    <div class="menu-sub menu-sub-accordion show" kt-hidden-height="65" style="">

                        <div class="menu-item"><a class="menu-link py-2"
                                href="{{ route('AR.show', 1)}}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Yeti</span></a></div>
                        <div class="menu-item"><a class="menu-link py-2"
                                href="{{ route('AR.show', 2)}}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Vegetables</span></a></div>

                        <div class="menu-item"><a class="menu-link py-2"
                            href="{{ route('AR.show', 3)}}"><span
                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                class="menu-title">Animals</span></a></div>
                    </div>
                </div>
            </div>
            <!--end:Menu item-->
        </div>
        <!--end::Sidebar menu-->
    </div>
    <!--end::Main-->
</div>
