<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <!--begin::Sidebar Logo-->
    <div class="app-sidebar-logo flex-shrink-0 d-none d-md-flex align-items-center px-8 py-6" id="kt_app_sidebar_logo">
        <a href="{{ route('dashboard.index') }}" class="d-flex align-items-center">
            <img alt="Logo" src="assets/media/logos/demo42.svg"
                class="h-30px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
            <img alt="Logo" src="assets/media/logos/demo42-dark.svg" class="h-30px h-lg-30px theme-dark-show" />
        </a>
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
            <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                <i class="ki-outline ki-abstract-14 fs-1"></i>
            </div>
        </div>
    </div>
    <!--end::Sidebar Logo-->

    <!--begin::Sidebar Menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5 mx-3"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">

            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold px-1" id="kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">

                <!--begin::Dashboard Menu Item-->
                <div class="menu-item">
                    <a href="{{ route('dashboard.index') }}"
                        class="menu-link @if (request()->routeIs('dashboard.*')) active @endif">
                        <span class="menu-icon">
                            <i class="ki-outline ki-element-11 fs-2"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <!--end::Dashboard Menu Item-->

                <!--begin::Project Menu Item-->
                <div class="menu-item">
                    <a href="{{ route('project.stage1') }}"
                        class="menu-link @if (request()->routeIs('project.*')) active @endif">
                        <span class="menu-icon">
                            <i class="ki-outline ki-folder fs-2"></i>
                        </span>
                        <span class="menu-title">Project</span>
                    </a>
                </div>
                <!--end::Project Menu Item-->

            </div>
        </div>
    </div>
    <!--end::Sidebar Menu-->

    <!--begin::Sidebar Footer-->
    <div class="app-sidebar-footer d-flex align-items-center px-8 pb-10" id="kt_app_sidebar_footer">
        <div class="">
            <!--begin::User info-->
            <div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                <div class="d-flex flex-center cursor-pointer symbol symbol-circle symbol-40px">
                    <img src="assets/media/avatars/300-1.jpg" alt="User Avatar" />
                </div>
                <div class="d-flex flex-column align-items-start justify-content-center ms-3">
                    <span class="text-gray-500 fs-8 fw-semibold">Hello</span>
                    <a href="#" class="text-gray-800 fs-7 fw-bold text-hover-primary">Draeger Staff</a>
                </div>
            </div>
            <!--end::User info-->

            <!--begin::User account menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                data-kt-menu="true">
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <div class="symbol symbol-50px me-5">
                            <img alt="User Avatar" src="assets/media/avatars/300-1.jpg" />
                        </div>
                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">Draeger Staff
                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                            </div>
                            <a href="#"
                                class="fw-semibold text-muted text-hover-primary fs-7">staff@draeger.com</a>
                        </div>
                    </div>
                </div>
                <div class="separator my-2"></div>
                <div class="menu-item px-5">
                    <form method="POST" action="#">
                        @csrf
                        <button type="submit" class="menu-link px-5 border-0 bg-transparent w-100 text-start">
                            Sign Out
                        </button>
                    </form>
                </div>
            </div>
            <!--end::User account menu-->
        </div>
    </div>
    <!--end::Sidebar Footer-->

</div>
<!--end::Sidebar-->

<style>
    /* Active state styling untuk menu items */
    .menu-link.active {
        background-color: rgba(0, 0, 0, 0.05);
        color: #009ef7;
    }

    .menu-link.active i {
        color: #009ef7;
    }

    /* Styling untuk submenu yang aktif */
    .menu-accordion.show .menu-link.active {
        color: #009ef7;
    }

    /* Smooth transition untuk menu items */
    .menu-link {
        transition: all 0.3s ease;
    }

    .menu-link:hover {
        background-color: rgba(0, 0, 0, 0.03);
    }
</style>
