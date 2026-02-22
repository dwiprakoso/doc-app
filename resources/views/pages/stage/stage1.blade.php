@extends('layouts.app')

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-5 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Stage 1 – Hospital Selection
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted">Monitoring Project</li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted fw-bold text-gray-700">Stage 1</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <span class="badge badge-light-warning fw-bold fs-7 px-4 py-3">
                        <i class="ki-outline ki-time fs-5 text-warning me-1"></i> Stage 1 – In Progress
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="row g-5 g-xl-10">

                {{-- ===================== LEFT COLUMN ===================== --}}
                <div class="col-xl-3">
                    @include('partials._stage_navbar', [
                        'currentStage' => 1,
                        'completedStages' => [],
                        'hospitalName' => 'RSUP A',
                        'hospitalCity' => 'Semarang, Central Java',
                    ])
                </div>
                {{-- ===================== END LEFT COLUMN ===================== --}}


                {{-- ===================== RIGHT COLUMN ===================== --}}
                <div class="col-xl-9">

                    {{-- SECTION 1: Hospital Info --}}
                    <div class="card card-flush mb-5">
                        <div class="card-header pt-5 pb-0 border-0">
                            <div class="card-title">
                                <h3 class="fw-bold fs-5 text-gray-900 mb-0">
                                    <i class="ki-outline ki-information-2 fs-4 text-primary me-2"></i>
                                    Hospital Information
                                </h3>
                            </div>
                        </div>
                        <div class="card-body pt-4 pb-5">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex flex-column gap-3">
                                        <div class="d-flex align-items-center">
                                            <span class="text-muted fw-semibold fs-7 w-100px flex-shrink-0">Name</span>
                                            <span class="text-gray-400 me-2">:</span>
                                            <span class="fw-bold fs-6 text-gray-800">RSUP A</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-muted fw-semibold fs-7 w-100px flex-shrink-0">Type</span>
                                            <span class="text-gray-400 me-2">:</span>
                                            <span class="badge badge-light-primary fw-bold">Type A</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-muted fw-semibold fs-7 w-100px flex-shrink-0">Province</span>
                                            <span class="text-gray-400 me-2">:</span>
                                            <span class="fw-semibold fs-7 text-gray-700">Central Java</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column gap-3">
                                        <div class="d-flex align-items-center">
                                            <span class="text-muted fw-semibold fs-7 w-100px flex-shrink-0">Ownership</span>
                                            <span class="text-gray-400 me-2">:</span>
                                            <span class="badge badge-light-info fw-bold">Pemerintah</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-muted fw-semibold fs-7 w-100px flex-shrink-0">City</span>
                                            <span class="text-gray-400 me-2">:</span>
                                            <span class="fw-semibold fs-7 text-gray-700">Semarang</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-muted fw-semibold fs-7 w-100px flex-shrink-0">Province</span>
                                            <span class="text-gray-400 me-2">:</span>
                                            <span class="fw-semibold fs-7 text-gray-700">Central Java</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END SECTION 1 --}}

                    {{-- SECTION 2: BED & Doctor --}}
                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <div class="card card-flush h-100">
                                <div class="card-header pt-5 pb-0 border-0">
                                    <div class="card-title">
                                        <h3 class="fw-bold fs-5 text-gray-900 mb-0">
                                            <i class="ki-outline ki-some-files fs-4 text-success me-2"></i>
                                            Bed Capacity
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body pt-4 pb-5">
                                    <div class="d-flex flex-column gap-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="bullet bullet-dot bg-primary h-8px w-8px"></span>
                                                <span class="text-gray-600 fw-semibold fs-7">ICU Beds</span>
                                            </div>
                                            <span class="badge badge-light-primary fw-bold fs-7">24</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="bullet bullet-dot bg-info h-8px w-8px"></span>
                                                <span class="text-gray-600 fw-semibold fs-7">NICU Beds</span>
                                            </div>
                                            <span class="badge badge-light-info fw-bold fs-7">12</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="bullet bullet-dot bg-warning h-8px w-8px"></span>
                                                <span class="text-gray-600 fw-semibold fs-7">PICU Beds</span>
                                            </div>
                                            <span class="badge badge-light-warning fw-bold fs-7">8</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="bullet bullet-dot bg-success h-8px w-8px"></span>
                                                <span class="text-gray-600 fw-semibold fs-7">OR Rooms</span>
                                            </div>
                                            <span class="badge badge-light-success fw-bold fs-7">6</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-flush h-100">
                                <div class="card-header pt-5 pb-0 border-0">
                                    <div class="card-title">
                                        <h3 class="fw-bold fs-5 text-gray-900 mb-0">
                                            <i class="ki-outline ki-profile-user fs-4 text-warning me-2"></i>
                                            Number of Doctors
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body pt-4 pb-5">
                                    <div class="d-flex flex-column gap-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="bullet bullet-dot bg-primary h-8px w-8px"></span>
                                                <span class="text-gray-600 fw-semibold fs-7">ICU Doctors</span>
                                            </div>
                                            <span class="badge badge-light-primary fw-bold fs-7">5</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="bullet bullet-dot bg-info h-8px w-8px"></span>
                                                <span class="text-gray-600 fw-semibold fs-7">NICU Doctors</span>
                                            </div>
                                            <span class="badge badge-light-info fw-bold fs-7">3</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="bullet bullet-dot bg-warning h-8px w-8px"></span>
                                                <span class="text-gray-600 fw-semibold fs-7">PICU Doctors</span>
                                            </div>
                                            <span class="badge badge-light-warning fw-bold fs-7">2</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="bullet bullet-dot bg-success h-8px w-8px"></span>
                                                <span class="text-gray-600 fw-semibold fs-7">OR Doctors</span>
                                            </div>
                                            <span class="badge badge-light-success fw-bold fs-7">4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END SECTION 2 --}}

                    {{-- SECTION 3: IB Competitor --}}
                    <div class="card card-flush mb-5">
                        <div class="card-header pt-5 pb-3 border-0">
                            <div class="card-title">
                                <h3 class="fw-bold fs-5 text-gray-900 mb-0">
                                    <i class="ki-outline ki-chart-line-up fs-4 text-danger me-2"></i>
                                    Installed Base – Competitor
                                </h3>
                            </div>
                        </div>
                        <div class="card-body pt-2 pb-5">
                            <div class="row row-cols-5 g-4">
                                @foreach ([['label' => 'IB Anesthesia', 'icon' => 'ki-capsule', 'color' => 'danger'], ['label' => 'IB Ventilator', 'icon' => 'ki-rescue', 'color' => 'warning'], ['label' => 'IB MSIT', 'icon' => 'ki-devices', 'color' => 'info'], ['label' => 'IB TNV', 'icon' => 'ki-element-7', 'color' => 'primary'], ['label' => 'IB WPI', 'icon' => 'ki-chart-pie-4', 'color' => 'success']] as $ib)
                                    <div class="col">
                                        <div class="card border border-dashed border-gray-300 shadow-none cursor-pointer ib-card ib-card-competitor"
                                            data-label="{{ $ib['label'] }}" data-color="{{ $ib['color'] }}"
                                            title="View {{ $ib['label'] }} Competitor details">
                                            <div class="card-body px-3 py-4 text-center">
                                                <div class="symbol symbol-40px mx-auto mb-3">
                                                    <span class="symbol-label bg-light-{{ $ib['color'] }}">
                                                        <i
                                                            class="ki-outline {{ $ib['icon'] }} fs-3 text-{{ $ib['color'] }}"></i>
                                                    </span>
                                                </div>
                                                <span
                                                    class="fw-bold fs-7 text-gray-800 d-block lh-sm">{{ $ib['label'] }}</span>
                                                <span
                                                    class="text-{{ $ib['color'] }} fw-bold fs-8 d-block mb-2">Competitor</span>
                                                <span class="badge badge-light-{{ $ib['color'] }} fs-8">3 units</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- END SECTION 3 --}}

                    {{-- SECTION 4: IB Draeger --}}
                    <div class="card card-flush mb-5">
                        <div class="card-header pt-5 pb-3 border-0">
                            <div class="card-title">
                                <h3 class="fw-bold fs-5 text-gray-900 mb-0">
                                    <i class="ki-outline ki-shield-tick fs-4 text-primary me-2"></i>
                                    Installed Base – Draeger
                                </h3>
                            </div>
                        </div>
                        <div class="card-body pt-2 pb-5">
                            <div class="row row-cols-5 g-4">
                                @foreach ([['label' => 'IB Anesthesia', 'icon' => 'ki-capsule', 'color' => 'primary'], ['label' => 'IB Ventilator', 'icon' => 'ki-rescue', 'color' => 'primary'], ['label' => 'IB MSIT', 'icon' => 'ki-devices', 'color' => 'primary'], ['label' => 'IB TNV', 'icon' => 'ki-element-7', 'color' => 'primary'], ['label' => 'IB WPI', 'icon' => 'ki-chart-pie-4', 'color' => 'primary']] as $ib)
                                    <div class="col">
                                        <div class="card border border-dashed border-primary shadow-none cursor-pointer ib-card ib-card-draeger"
                                            data-label="{{ $ib['label'] }}"
                                            title="View {{ $ib['label'] }} Draeger details">
                                            <div class="card-body px-3 py-4 text-center">
                                                <div class="symbol symbol-40px mx-auto mb-3">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-outline {{ $ib['icon'] }} fs-3 text-primary"></i>
                                                    </span>
                                                </div>
                                                <span
                                                    class="fw-bold fs-7 text-gray-800 d-block lh-sm">{{ $ib['label'] }}</span>
                                                <span class="text-primary fw-bold fs-8 d-block mb-2">Draeger</span>
                                                <span class="badge badge-light-primary fs-8">5 units</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- END SECTION 4 --}}

                    {{-- FOOTER ACTION --}}
                    <div class="d-flex justify-content-between align-items-center py-3 px-1">
                        <span class="text-muted fs-7 fw-semibold">
                            <i class="ki-outline ki-information fs-6 me-1"></i>
                            Click IB cards to view unit details, Type, Install Date &amp; Quantity
                        </span>
                        <a href="{{ route('project.stage2') }}" class="btn btn-primary fw-bold px-8">
                            <i class="ki-outline ki-arrow-right fs-4 me-1"></i> Next
                        </a>
                    </div>
                    {{-- END FOOTER ACTION --}}

                </div>
                {{-- ===================== END RIGHT COLUMN ===================== --}}

            </div>
        </div>
    </div>
    <!--end::Content-->


    {{-- ============================================================ --}}
    {{-- MODAL 1: IB COMPETITOR                                       --}}
    {{-- ============================================================ --}}
    <div class="modal fade" id="kt_modal_ib_competitor" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">

                <!--begin::Header-->
                <div class="modal-header border-0">
                    <div class="d-flex align-items-center gap-3">
                        <div class="symbol symbol-50px flex-shrink-0">
                            <span class="symbol-label bg-light-danger">
                                <i class="ki-outline ki-chart-line-up fs-2 text-danger"></i>
                            </span>
                        </div>
                        <div>
                            <h3 class="modal-title fw-bolder fs-3 text-gray-900 mb-1" id="modal_competitor_title">
                                IB Details – Competitor
                            </h3>
                            <span class="text-muted fw-semibold fs-6" id="modal_competitor_subtitle">
                                <i class="ki-outline ki-hospital fs-6 me-1"></i>RSUP A • Semarang
                            </span>
                        </div>
                    </div>
                    <div class="btn btn-sm btn-icon btn-active-color-danger" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-2"></i>
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-row-dashed align-middle gs-0 gy-4" id="table_competitor">
                            <thead>
                                <tr>
                                    <th class="text-muted fw-bold fs-6 text-uppercase ps-4 w-60px">No</th>
                                    <th class="text-muted fw-bold fs-6 text-uppercase min-w-200px">Unit Name</th>
                                    <th class="text-muted fw-bold fs-6 text-uppercase min-w-180px">Type / Brand</th>
                                    <th class="text-muted fw-bold fs-6 text-uppercase min-w-140px">Install Date</th>
                                    <th class="text-muted fw-bold fs-6 text-uppercase text-center pe-4 w-100px">Qty</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_competitor">
                                {{-- Filled via JS --}}
                            </tbody>
                        </table>
                    </div>

                    {{-- Summary footer --}}
                    <div class="summary-box summary-box-competitor">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="symbol symbol-40px">
                                    <span class="symbol-label bg-danger bg-opacity-10">
                                        <i class="ki-outline ki-information fs-4 text-danger"></i>
                                    </span>
                                </div>
                                <span class="fw-bold fs-5 text-gray-800">Total Competitor Units Installed</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="fw-bolder fs-2 text-danger" id="total_competitor_units">– units</span>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end::Body-->

                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-light-danger fw-bold px-6" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-4 me-1"></i>Close
                    </button>
                </div>

            </div>
        </div>
    </div>
    {{-- ============================================================ --}}
    {{-- END MODAL 1                                                   --}}
    {{-- ============================================================ --}}


    {{-- ============================================================ --}}
    {{-- MODAL 2: IB DRAEGER                                          --}}
    {{-- ============================================================ --}}
    <div class="modal fade" id="kt_modal_ib_draeger" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">

                <!--begin::Header-->
                <div class="modal-header border-0">
                    <div class="d-flex align-items-center gap-3">
                        <div class="symbol symbol-50px flex-shrink-0">
                            <span class="symbol-label bg-light-primary">
                                <i class="ki-outline ki-shield-tick fs-2 text-primary"></i>
                            </span>
                        </div>
                        <div>
                            <h3 class="modal-title fw-bolder fs-3 text-gray-900 mb-1" id="modal_draeger_title">
                                IB Details – Draeger
                            </h3>
                            <span class="text-muted fw-semibold fs-6" id="modal_draeger_subtitle">
                                <i class="ki-outline ki-hospital fs-6 me-1"></i>RSUP A • Semarang
                            </span>
                        </div>
                    </div>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-2"></i>
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-row-dashed align-middle gs-0 gy-4" id="table_draeger">
                            <thead>
                                <tr>
                                    <th class="text-muted fw-bold fs-6 text-uppercase ps-4 w-60px">No</th>
                                    <th class="text-muted fw-bold fs-6 text-uppercase min-w-200px">Unit Name</th>
                                    <th class="text-muted fw-bold fs-6 text-uppercase min-w-180px">Type / Model</th>
                                    <th class="text-muted fw-bold fs-6 text-uppercase min-w-140px">Install Date</th>
                                    <th class="text-muted fw-bold fs-6 text-uppercase text-center pe-4 w-100px">Qty</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_draeger">
                                {{-- Filled via JS --}}
                            </tbody>
                        </table>
                    </div>

                    {{-- Summary footer --}}
                    <div class="summary-box summary-box-draeger">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="symbol symbol-40px">
                                    <span class="symbol-label bg-primary bg-opacity-10">
                                        <i class="ki-outline ki-shield-tick fs-4 text-primary"></i>
                                    </span>
                                </div>
                                <span class="fw-bold fs-5 text-gray-800">Total Draeger Units Installed</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="fw-bolder fs-2 text-primary" id="total_draeger_units">– units</span>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end::Body-->

                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-light-primary fw-bold px-6" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-4 me-1"></i>Close
                    </button>
                </div>

            </div>
        </div>
    </div>
    {{-- ============================================================ --}}
    {{-- END MODAL 2                                                   --}}
    {{-- ============================================================ --}}
@endsection

@push('styles')
    <style>
        .ib-card {
            transition: all 0.2s ease;
            border-radius: 10px;
            min-height: 130px;
        }

        .ib-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08) !important;
            border-color: var(--bs-primary) !important;
        }

        .ib-card-competitor:hover {
            border-color: var(--bs-danger) !important;
        }

        /* Modal Custom Styling */
        .modal-content {
            border: none;
            border-radius: 16px;
            overflow: hidden;
        }

        .modal-header {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            padding: 1.75rem 2rem;
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-footer {
            background-color: #f8f9fa;
            padding: 1rem 2rem;
        }

        /* Table Styling */
        .table-responsive {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.04);
        }

        #table_competitor,
        #table_draeger {
            margin-bottom: 0;
        }

        #table_competitor thead,
        #table_draeger thead {
            background: linear-gradient(135deg, #f1f3f5 0%, #e9ecef 100%);
        }

        #table_competitor thead th,
        #table_draeger thead th {
            padding: 1rem 1.25rem;
            border: none;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        #table_competitor tbody tr,
        #table_draeger tbody tr {
            transition: all 0.2s ease;
        }

        #table_competitor tbody tr:hover,
        #table_draeger tbody tr:hover {
            background-color: #f8f9fa;
            transform: scale(1.01);
        }

        #table_competitor tbody td,
        #table_draeger tbody td {
            padding: 1.25rem 1.25rem;
            vertical-align: middle;
            border-color: #f1f3f5;
        }

        /* Summary Box Styling */
        .summary-box {
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            margin-top: 1.5rem;
            border: 2px solid;
            transition: all 0.3s ease;
        }

        .summary-box-competitor {
            background: linear-gradient(135deg, #fff5f5 0%, #ffe0e0 100%);
            border-color: #ffc9c9;
        }

        .summary-box-draeger {
            background: linear-gradient(135deg, #f0f7ff 0%, #e0f0ff 100%);
            border-color: #b3d9ff;
        }

        .summary-box:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
        }

        /* Badge enhancements */
        .badge {
            padding: 0.5rem 1rem;
            font-weight: 600;
            border-radius: 8px;
        }

        /* Icon styling */
        .modal-header .symbol-label {
            width: 50px;
            height: 50px;
            border-radius: 12px;
        }

        /* Close button */
        .btn-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            transition: all 0.2s ease;
        }

        .btn-icon:hover {
            background-color: #f8f9fa;
            transform: rotate(90deg);
        }

        /* Table row numbers */
        .row-number {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #e9ecef 0%, #f8f9fa 100%);
            border-radius: 8px;
            font-weight: 700;
            color: #495057;
        }

        /* QTY Badge */
        .qty-badge {
            min-width: 45px;
            padding: 0.5rem 1rem;
            font-size: 0.95rem;
            font-weight: 700;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // ================================================================
        // Ensure script runs after DOM is ready
        // ================================================================
        document.addEventListener('DOMContentLoaded', function() {

            // ================================================================
            // DATA
            // ================================================================
            const ibCompetitorData = {
                'IB Anesthesia': [{
                        unit: 'Anesthesia Machine Pro X1',
                        type: 'GE Carestation 650',
                        type_color: 'danger',
                        install_date: '12 Jan 2020',
                        qty: 1
                    },
                    {
                        unit: 'Anesthesia Workstation Elite',
                        type: 'Mindray WATO EX-65',
                        type_color: 'warning',
                        install_date: '08 Mar 2021',
                        qty: 1
                    },
                    {
                        unit: 'Anesthesia Machine Compact',
                        type: 'GE Carestation 450',
                        type_color: 'danger',
                        install_date: '20 Jul 2022',
                        qty: 1
                    },
                ],
                'IB Ventilator': [{
                        unit: 'Ventilator ICU Advanced',
                        type: 'Medtronic Puritan',
                        type_color: 'warning',
                        install_date: '05 Feb 2019',
                        qty: 2
                    },
                    {
                        unit: 'Ventilator Neonatal',
                        type: 'Hamilton GALILEO',
                        type_color: 'info',
                        install_date: '14 Jun 2021',
                        qty: 1
                    },
                ],
                'IB MSIT': [{
                        unit: 'Patient Monitor Central',
                        type: 'Philips IntelliVue',
                        type_color: 'info',
                        install_date: '22 Nov 2020',
                        qty: 2
                    },
                    {
                        unit: 'Bedside Monitor Portable',
                        type: 'Mindray BeneView',
                        type_color: 'success',
                        install_date: '30 Sep 2022',
                        qty: 1
                    },
                ],
                'IB TNV': [{
                        unit: 'Transport Ventilator',
                        type: 'Vyaire LTV 2200',
                        type_color: 'primary',
                        install_date: '11 Apr 2021',
                        qty: 2
                    },
                    {
                        unit: 'Neonatal Ventilator',
                        type: 'SLE 6000',
                        type_color: 'warning',
                        install_date: '03 Jan 2023',
                        qty: 1
                    },
                ],
                'IB WPI': [{
                        unit: 'Infusion Pump Multi Channel',
                        type: 'BD Alaris',
                        type_color: 'success',
                        install_date: '18 Aug 2020',
                        qty: 2
                    },
                    {
                        unit: 'Syringe Pump Advanced',
                        type: 'Fresenius Kabi',
                        type_color: 'info',
                        install_date: '25 May 2022',
                        qty: 1
                    },
                ],
            };

            const ibDraegerData = {
                'IB Anesthesia': [{
                        unit: 'Perseus A500',
                        type: 'Perseus A500',
                        type_color: 'primary',
                        install_date: '10 Jan 2019',
                        qty: 2
                    },
                    {
                        unit: 'Fabius GS Premium',
                        type: 'Fabius GS',
                        type_color: 'primary',
                        install_date: '15 Jun 2021',
                        qty: 2
                    },
                    {
                        unit: 'Atlan A350',
                        type: 'Atlan A350',
                        type_color: 'primary',
                        install_date: '22 Mar 2023',
                        qty: 1
                    },
                ],
                'IB Ventilator': [{
                        unit: 'Evita Infinity V500',
                        type: 'Evita V500',
                        type_color: 'primary',
                        install_date: '08 Apr 2020',
                        qty: 3
                    },
                    {
                        unit: 'Babylog VN500',
                        type: 'Babylog VN500',
                        type_color: 'info',
                        install_date: '30 Nov 2021',
                        qty: 2
                    },
                ],
                'IB MSIT': [{
                        unit: 'Infinity Delta',
                        type: 'Infinity Delta',
                        type_color: 'primary',
                        install_date: '14 Feb 2020',
                        qty: 3
                    },
                    {
                        unit: 'Infinity Kappa',
                        type: 'Infinity Kappa',
                        type_color: 'primary',
                        install_date: '05 Aug 2022',
                        qty: 2
                    },
                ],
                'IB TNV': [{
                        unit: 'Babylog 8000+',
                        type: 'Babylog 8000+',
                        type_color: 'primary',
                        install_date: '17 Jul 2019',
                        qty: 2
                    },
                    {
                        unit: 'Oxylog 3000+',
                        type: 'Oxylog 3000+',
                        type_color: 'info',
                        install_date: '28 Oct 2022',
                        qty: 3
                    },
                ],
                'IB WPI': [{
                        unit: 'Volumed uVP 7000',
                        type: 'Volumed uVP 7000',
                        type_color: 'primary',
                        install_date: '03 Mar 2021',
                        qty: 3
                    },
                    {
                        unit: 'Perfusor Space',
                        type: 'Perfusor Space',
                        type_color: 'primary',
                        install_date: '19 Dec 2022',
                        qty: 2
                    },
                ],
            };

            // ================================================================
            // HELPER: render table rows + calculate total
            // ================================================================
            function renderRows(data, tbodyId, totalElId, accentColor) {
                const tbody = document.getElementById(tbodyId);
                const totalEl = document.getElementById(totalElId);

                if (!tbody || !totalEl) {
                    console.error('Element not found:', tbodyId, totalElId);
                    return;
                }

                tbody.innerHTML = '';
                let total = 0;
                let no = 1;

                data.forEach(function(row) {
                    total += row.qty;
                    const tr = document.createElement('tr');
                    tr.innerHTML =
                        '<td class="ps-4">' +
                        '<span class="row-number">' + no++ + '</span>' +
                        '</td>' +
                        '<td>' +
                        '<div class="d-flex flex-column">' +
                        '<span class="fw-bold fs-5 text-gray-900 mb-1">' + row.unit + '</span>' +
                        '</div>' +
                        '</td>' +
                        '<td>' +
                        '<span class="badge badge-light-' + row.type_color + ' fw-bold fs-6 px-3 py-2">' +
                        row.type + '</span>' +
                        '</td>' +
                        '<td>' +
                        '<div class="d-flex align-items-center gap-2">' +
                        '<div class="symbol symbol-30px">' +
                        '<span class="symbol-label bg-light">' +
                        '<i class="ki-outline ki-calendar fs-5 text-gray-600"></i>' +
                        '</span>' +
                        '</div>' +
                        '<span class="text-gray-800 fs-6 fw-semibold">' + row.install_date + '</span>' +
                        '</div>' +
                        '</td>' +
                        '<td class="text-center">' +
                        '<span class="badge badge-light-' + accentColor + ' qty-badge">' + row.qty +
                        '</span>' +
                        '</td>';
                    tbody.appendChild(tr);
                });

                totalEl.textContent = total + ' units';
            }

            // ================================================================
            // TOOLTIP — manual init
            // ================================================================
            const tooltipTriggerList = document.querySelectorAll('.ib-card[title]');
            tooltipTriggerList.forEach(function(el) {
                new bootstrap.Tooltip(el, {
                    trigger: 'hover'
                });
            });

            // ================================================================
            // CLICK — Competitor
            // ================================================================
            document.querySelectorAll('.ib-card-competitor').forEach(function(el) {
                el.addEventListener('click', function() {
                    const label = this.getAttribute('data-label');
                    const rows = ibCompetitorData[label] || [];
                    const modalEl = document.getElementById('kt_modal_ib_competitor');

                    if (!modalEl) {
                        console.error('Competitor modal not found!');
                        return;
                    }

                    // Update title
                    const titleEl = document.getElementById('modal_competitor_title');
                    const subtitleEl = document.getElementById('modal_competitor_subtitle');

                    if (titleEl) titleEl.textContent = label + ' (Competitor) – Details';
                    if (subtitleEl) subtitleEl.textContent = 'RSUP A • Semarang';

                    // Render data
                    renderRows(rows, 'tbody_competitor', 'total_competitor_units', 'danger');

                    // Show modal
                    const modalInstance = new bootstrap.Modal(modalEl);
                    modalInstance.show();
                });
            });

            // ================================================================
            // CLICK — Draeger
            // ================================================================
            document.querySelectorAll('.ib-card-draeger').forEach(function(el) {
                el.addEventListener('click', function() {
                    const label = this.getAttribute('data-label');
                    const rows = ibDraegerData[label] || [];
                    const modalEl = document.getElementById('kt_modal_ib_draeger');

                    if (!modalEl) {
                        console.error('Draeger modal not found!');
                        return;
                    }

                    // Update title
                    const titleEl = document.getElementById('modal_draeger_title');
                    const subtitleEl = document.getElementById('modal_draeger_subtitle');

                    if (titleEl) titleEl.textContent = label + ' (Draeger) – Details';
                    if (subtitleEl) subtitleEl.textContent = 'RSUP A • Semarang';

                    // Render data
                    renderRows(rows, 'tbody_draeger', 'total_draeger_units', 'primary');

                    // Show modal
                    const modalInstance = new bootstrap.Modal(modalEl);
                    modalInstance.show();
                });
            });

        }); // End DOMContentLoaded
    </script>
@endpush
