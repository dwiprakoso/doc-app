<!--begin::Header-->
<div id="kt_app_header" class="app-header">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-center justify-content-between flex-stack"
        id="kt_app_header_container">
        <!--begin::Sidebar toggle-->
        <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-outline ki-abstract-14 fs-2"></i>
            </div>
            <!--begin::Logo image-->
            <a href="{{ route('dashboard.index') }}" class="d-flex align-items-center justify-content-center">
                <img alt="Logo" src="assets/media/draeger/logo.jpeg" class="h-60px" />
            </a>
            <!--end::Logo image-->
        </div>
        <!--end::Sidebar toggle-->

        <!--begin::Page Title-->
        <div class="d-flex align-items-center justify-content-center flex-grow-1">
            <h1 class="page-title fw-bold text-gray-900 fs-4">Dashboard DOC Tracker</h1>
        </div>
        <!--end::Page Title-->

        <!--begin::Toolbar (spacer untuk desktop view)-->
        <div class="d-none d-lg-flex"></div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->
