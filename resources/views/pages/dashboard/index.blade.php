@extends('layouts.app')

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-5 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Monitoring Project Dashboard
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">Monitoring Project Dashboard</li>
                    </ul>
                </div>
                <!--end::Page title-->
            </div>
        </div>
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">

            <!--begin::Summary Cards-->
            <div class="row g-5 mb-6">
                <!--begin::Card - Total Project-->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush h-lg-100">
                        <div class="card-header pt-5">
                            <div class="card-title d-flex flex-column">
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">24</span>
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Projects</span>
                            </div>
                        </div>
                        <div class="card-body pt-2 pb-4 d-flex align-items-center">
                            <span class="badge badge-light-primary fs-7 fw-bold">
                                <i class="ki-outline ki-folder fs-5 text-primary me-1"></i> All Stages
                            </span>
                        </div>
                    </div>
                </div>
                <!--end::Card-->

                <!--begin::Card - On Progress-->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush h-lg-100">
                        <div class="card-header pt-5">
                            <div class="card-title d-flex flex-column">
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">12</span>
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">In Progress</span>
                            </div>
                        </div>
                        <div class="card-body pt-2 pb-4 d-flex align-items-center">
                            <span class="badge badge-light-warning fs-7 fw-bold">
                                <i class="ki-outline ki-time fs-5 text-warning me-1"></i> In Stage
                            </span>
                        </div>
                    </div>
                </div>
                <!--end::Card-->

                <!--begin::Card - Completed-->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush h-lg-100">
                        <div class="card-header pt-5">
                            <div class="card-title d-flex flex-column">
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">8</span>
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Completed</span>
                            </div>
                        </div>
                        <div class="card-body pt-2 pb-4 d-flex align-items-center">
                            <span class="badge badge-light-success fs-7 fw-bold">
                                <i class="ki-outline ki-check-circle fs-5 text-success me-1"></i> Done
                            </span>
                        </div>
                    </div>
                </div>
                <!--end::Card-->

                <!--begin::Card - Overdue-->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush h-lg-100">
                        <div class="card-header pt-5">
                            <div class="card-title d-flex flex-column">
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">4</span>
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Overdue</span>
                            </div>
                        </div>
                        <div class="card-body pt-2 pb-4 d-flex align-items-center">
                            <span class="badge badge-light-danger fs-7 fw-bold">
                                <i class="ki-outline ki-warning-2 fs-5 text-danger me-1"></i> Needs Attention
                            </span>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Summary Cards-->

            <!--begin::Main Table Card-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold fs-4 text-gray-900 mb-1">Project List</h3>
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end align-items-center gap-3">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative">
                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                <input type="text" class="form-control form-control-solid w-250px ps-12 fs-7"
                                    placeholder="Search project..." />
                            </div>
                            <!--end::Search-->
                            <!--begin::Filter-->
                            <select class="form-select form-select-solid w-175px fs-7" data-control="select2"
                                data-placeholder="All Stage" data-hide-search="true">
                                <option value="">All Stage</option>
                                <option value="1">Stage 1 – Hospital Selection</option>
                                <option value="2">Stage 2 – Canvasing</option>
                                <option value="3">Stage 3 – Report & Scoring</option>
                                <option value="4">Stage 4 – Event</option>
                            </select>
                            <!--end::Filter-->
                        </div>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body py-4">
                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4"
                            id="kt_project_monitoring_table">
                            <!--begin::Thead-->
                            <thead>
                                <tr class="border-0">
                                    <th class="p-0 min-w-300px ps-4">
                                        <span class="text-muted fw-bold fs-7 text-uppercase">Hospital Name</span>
                                    </th>
                                    <th class="p-0 min-w-400px">
                                        <span class="text-muted fw-bold fs-7 text-uppercase">Project Status</span>
                                    </th>
                                    <th class="p-0 min-w-150px text-end pe-4">
                                        <span class="text-muted fw-bold fs-7 text-uppercase">Detail</span>
                                    </th>
                                </tr>
                            </thead>
                            <!--end::Thead-->

                            <!--begin::Tbody-->
                            <tbody>

                                {{-- EXAMPLE ROW 1 --}}
                                <tr>
                                    <td class="ps-4 py-5">
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="symbol symbol-45px symbol-light-warning flex-shrink-0">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-document fs-2 text-warning"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6 mb-1">Kariadi,
                                                    RSUP</a>
                                                <span class="text-muted fw-semibold fs-7">DOC-2026-001</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-5">
                                        <div class="d-flex flex-column gap-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="badge badge-light-warning fw-bold fs-7 px-3 py-2">Stage 3 –
                                                    Report & Scoring</span>
                                                <span class="text-muted fs-7 fw-semibold">3 / 4 Stage</span>
                                            </div>
                                            <div class="h-6px bg-light-warning rounded">
                                                <div class="bg-warning rounded h-6px" style="width: 60%"></div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="ki-outline ki-calendar fs-7 text-gray-400"></i>
                                                <span class="text-gray-500 fs-7">Lead Time: <span
                                                        class="fw-bold text-gray-700">45 days</span> since created</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-5 text-end pe-4">
                                        <a href="{{ route('dashboard.result') }}"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px"
                                            data-bs-toggle="tooltip" title="View Details">
                                            <i class="ki-outline ki-arrow-right fs-4"></i>
                                        </a>
                                    </td>
                                </tr>

                                {{-- EXAMPLE ROW 2 --}}
                                <tr>
                                    <td class="ps-4 py-5">
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="symbol symbol-45px symbol-light-success flex-shrink-0">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-document fs-2 text-success"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6 mb-1">Brebes,
                                                    RSUD</a>
                                                <span class="text-muted fw-semibold fs-7">DOC-2026-002</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-5">
                                        <div class="d-flex flex-column gap-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="badge badge-light-success fw-bold fs-7 px-3 py-2">Stage 4 –
                                                    Event</span>
                                                <span class="text-muted fs-7 fw-semibold">4 / 4 Stage</span>
                                            </div>
                                            <div class="h-6px bg-light-success rounded">
                                                <div class="bg-success rounded h-6px" style="width: 100%"></div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="ki-outline ki-calendar fs-7 text-gray-400"></i>
                                                <span class="text-gray-500 fs-7">Lead Time: <span
                                                        class="fw-bold text-gray-700">30 days</span> since created</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-5 text-end pe-4">
                                        <a href="{{ route('dashboard.result') }}"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px"
                                            data-bs-toggle="tooltip" title="View Details">
                                            <i class="ki-outline ki-arrow-right fs-4"></i>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                            <!--end::Tbody-->
                        </table>
                    </div>

                    <!--begin::Pagination-->
                    <div class="d-flex flex-stack flex-wrap pt-5 border-top">
                        <div class="fs-6 fw-semibold text-gray-700">
                            Showing 1 – 10 of 24 projects
                        </div>
                        <ul class="pagination">
                            <li class="page-item previous disabled">
                                <a href="#" class="page-link"><i class="previous"></i></a>
                            </li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item next">
                                <a href="#" class="page-link"><i class="next"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--end::Pagination-->

                </div>
                <!--end::Card body-->
            </div>
            <!--end::Main Table Card-->

        </div>
    </div>
    <!--end::Content-->
@endsection

@push('styles')
    <style>
        #kt_project_monitoring_table tbody tr {
            transition: background-color 0.15s ease;
        }

        #kt_project_monitoring_table tbody tr:hover {
            background-color: var(--bs-gray-100);
        }

        #kt_project_monitoring_table thead tr th {
            padding-top: 12px;
            padding-bottom: 12px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Initialize Select2 for filter dropdown
        $('[data-control="select2"]').select2();

        // Initialize Bootstrap tooltip for detail button
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.forEach(function(el) {
            new bootstrap.Tooltip(el);
        });
    </script>
@endpush
