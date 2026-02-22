@extends('layouts.app')

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-5 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Stage 3 – Report & Scoring
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted">Monitoring Project</li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted fw-bold text-gray-700">Stage 3</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <span class="badge badge-light-success fw-bold fs-7 px-4 py-3">
                        <i class="ki-outline ki-check-circle fs-5 text-success me-1"></i> Stage 1 – Completed
                    </span>
                    <span class="badge badge-light-success fw-bold fs-7 px-4 py-3">
                        <i class="ki-outline ki-check-circle fs-5 text-success me-1"></i> Stage 2 – Completed
                    </span>
                    <span class="badge badge-light-warning fw-bold fs-7 px-4 py-3">
                        <i class="ki-outline ki-time fs-5 text-warning me-1"></i> Stage 3 – In Progress
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
                        'currentStage' => 3,
                        'completedStages' => [1, 2],
                        'hospitalName' => 'RSUP A',
                        'hospitalCity' => 'Semarang, Central Java',
                    ])
                </div>
                {{-- ===================== END LEFT COLUMN ===================== --}}


                {{-- ===================== RIGHT COLUMN ===================== --}}
                <div class="col-xl-9">

                    {{-- ===== SECTION 1: SCORING ===== --}}
                    <div class="card card-flush mb-5">
                        <div class="card-header pt-5 pb-0 border-0">
                            <div class="card-title flex-column">
                                <h3 class="fw-bold fs-4 text-gray-900 mb-1">
                                    <i class="ki-outline ki-chart-line-up fs-4 text-primary me-2"></i>
                                    Scoring
                                </h3>
                                <span class="text-muted fw-semibold fs-7">Assessment results based on canvasing
                                    answers</span>
                            </div>
                            <div class="card-toolbar">
                                <span class="badge badge-light-primary fw-bold fs-7 px-4 py-3" data-bs-toggle="tooltip"
                                    title="Scoring is calculated automatically based on the percentage of Yes answers from all PAIN, GAIN, and JOB questions">
                                    <i class="ki-outline ki-information fs-5 text-primary me-1"></i>
                                    Scoring Information
                                </span>
                            </div>
                        </div>

                        <div class="card-body pt-5 pb-6">

                            {{-- Overall Score --}}
                            <div
                                class="d-flex align-items-center justify-content-between mb-6 p-5 rounded bg-light-primary">
                                <div class="d-flex flex-column">
                                    <span class="fw-bold fs-3 text-gray-900">Total Score</span>
                                    <span class="text-muted fw-semibold fs-7">From 30 canvasing questions</span>
                                </div>
                                <div class="d-flex align-items-center gap-4">
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="fw-bold fs-1 text-primary lh-1">86<span class="fs-4">%</span></span>
                                        <span class="badge badge-success fw-bold fs-7 mt-1">High Potential</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Score per Category --}}
                            <div class="row g-5">

                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="ki-outline ki-dislike fs-5 text-danger"></i>
                                                <span class="fw-bold fs-6 text-gray-800">PAIN</span>
                                            </div>
                                            <span class="fw-bold fs-5 text-danger">83%</span>
                                        </div>
                                        <div class="h-8px bg-light-danger rounded">
                                            <div class="bg-danger rounded h-8px" style="width: 83%"></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted fs-8">10 Yes / 12 questions</span>
                                            <span class="text-muted fs-8">Doctor + Mgmt</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="ki-outline ki-like fs-5 text-success"></i>
                                                <span class="fw-bold fs-6 text-gray-800">GAIN</span>
                                            </div>
                                            <span class="fw-bold fs-5 text-success">90%</span>
                                        </div>
                                        <div class="h-8px bg-light-success rounded">
                                            <div class="bg-success rounded h-8px" style="width: 90%"></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted fs-8">9 Yes / 10 questions</span>
                                            <span class="text-muted fs-8">Doctor + Mgmt</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="ki-outline ki-briefcase fs-5 text-info"></i>
                                                <span class="fw-bold fs-6 text-gray-800">JOB</span>
                                            </div>
                                            <span class="fw-bold fs-5 text-info">87%</span>
                                        </div>
                                        <div class="h-8px bg-light-info rounded">
                                            <div class="bg-info rounded h-8px" style="width: 87%"></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted fs-8">7 Yes / 8 questions</span>
                                            <span class="text-muted fs-8">Doctor + Mgmt</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- Scoring Detail Table --}}
                            <div class="mt-7">
                                <div class="separator border-gray-200 mb-5"></div>
                                <h4 class="fw-bold fs-6 text-gray-700 mb-4">Answer Details by Group</h4>
                                <div class="table-responsive">
                                    <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-3">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="text-muted fw-bold fs-7 text-uppercase ps-0 min-w-150px">
                                                    Group</th>
                                                <th class="text-muted fw-bold fs-7 text-uppercase min-w-80px text-center">
                                                    PAIN</th>
                                                <th class="text-muted fw-bold fs-7 text-uppercase min-w-80px text-center">
                                                    GAIN</th>
                                                <th class="text-muted fw-bold fs-7 text-uppercase min-w-80px text-center">
                                                    JOB</th>
                                                <th class="text-muted fw-bold fs-7 text-uppercase text-end pe-0">Total
                                                    Score</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="symbol symbol-30px">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i
                                                                    class="ki-outline ki-profile-user fs-5 text-warning"></i>
                                                            </span>
                                                        </span>
                                                        <span class="fw-bold fs-7 text-gray-800">Doctor</span>
                                                    </div>
                                                </td>
                                                <td class="text-center"><span
                                                        class="badge badge-light-danger fw-bold fs-8">5/6</span></td>
                                                <td class="text-center"><span
                                                        class="badge badge-light-success fw-bold fs-8">5/5</span></td>
                                                <td class="text-center"><span
                                                        class="badge badge-light-info fw-bold fs-8">4/4</span></td>
                                                <td class="text-end pe-0"><span
                                                        class="fw-bold fs-6 text-success">93%</span></td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="symbol symbol-30px">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-outline ki-people fs-5 text-primary"></i>
                                                            </span>
                                                        </span>
                                                        <span class="fw-bold fs-7 text-gray-800">Management</span>
                                                    </div>
                                                </td>
                                                <td class="text-center"><span
                                                        class="badge badge-light-danger fw-bold fs-8">5/6</span></td>
                                                <td class="text-center"><span
                                                        class="badge badge-light-success fw-bold fs-8">4/5</span></td>
                                                <td class="text-center"><span
                                                        class="badge badge-light-info fw-bold fs-8">3/4</span></td>
                                                <td class="text-end pe-0"><span
                                                        class="fw-bold fs-6 text-warning">80%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- ===== END SECTION 1: SCORING ===== --}}


                    {{-- ===== SECTION 2: RECOMMENDATION SOLUTION ===== --}}
                    <div class="card card-flush mb-5">
                        <div class="card-header pt-5 pb-0 border-0">
                            <div class="card-title flex-column">
                                <h3 class="fw-bold fs-4 text-gray-900 mb-1">
                                    <i class="ki-outline ki-shield-tick fs-4 text-success me-2"></i>
                                    Recommendation Solution
                                </h3>
                                <span class="text-muted fw-semibold fs-7">Draeger product recommendations based on scoring
                                    results</span>
                            </div>
                            <div class="card-toolbar">
                                <span class="badge badge-light-success fw-bold fs-7 px-4 py-3" data-bs-toggle="tooltip"
                                    title="Recommendations are generated based on specific hospital needs identified from PAIN, GAIN, and JOB canvasing answers">
                                    <i class="ki-outline ki-information fs-5 text-success me-1"></i>
                                    Recommendation Info
                                </span>
                            </div>
                        </div>

                        <div class="card-body pt-5 pb-6">

                            <div class="row g-5 mb-6">

                                <div class="col-md-4">
                                    <div class="card border border-dashed border-success h-100">
                                        <div class="card-body p-5">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="symbol symbol-45px flex-shrink-0">
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-outline ki-medicine fs-2 text-success"></i>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bold fs-6 text-gray-800">Anesthesia Machine</span>
                                                    <span class="badge badge-light-success fs-8 mt-1 w-fit">Highly
                                                        Recommended</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="ki-outline ki-check-circle fs-6 text-success"></i>
                                                    <span class="text-gray-600 fs-7">Draeger Perseus A500</span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="ki-outline ki-check-circle fs-6 text-success"></i>
                                                    <span class="text-gray-600 fs-7">Draeger Fabius GS Premium</span>
                                                </div>
                                            </div>
                                            <div class="separator border-gray-200 my-4"></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="text-muted fs-8">Relevance from PAIN</span>
                                                <span class="fw-bold text-success fs-7">95%</span>
                                            </div>
                                            <div class="h-5px bg-light-success rounded mt-2">
                                                <div class="bg-success rounded h-5px" style="width: 95%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card border border-dashed border-primary h-100">
                                        <div class="card-body p-5">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="symbol symbol-45px flex-shrink-0">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-outline ki-rescue fs-2 text-primary"></i>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bold fs-6 text-gray-800">ICU Ventilator</span>
                                                    <span class="badge badge-light-primary fs-8 mt-1">Recommended</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="ki-outline ki-check-circle fs-6 text-primary"></i>
                                                    <span class="text-gray-600 fs-7">Draeger Evita Infinity V500</span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="ki-outline ki-check-circle fs-6 text-primary"></i>
                                                    <span class="text-gray-600 fs-7">Draeger Babylog VN500</span>
                                                </div>
                                            </div>
                                            <div class="separator border-gray-200 my-4"></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="text-muted fs-8">Relevance from PAIN</span>
                                                <span class="fw-bold text-primary fs-7">88%</span>
                                            </div>
                                            <div class="h-5px bg-light-primary rounded mt-2">
                                                <div class="bg-primary rounded h-5px" style="width: 88%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card border border-dashed border-warning h-100">
                                        <div class="card-body p-5">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="symbol symbol-45px flex-shrink-0">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-outline ki-devices fs-2 text-warning"></i>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bold fs-6 text-gray-800">Patient Monitor</span>
                                                    <span class="badge badge-light-warning fs-8 mt-1">Consider</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="ki-outline ki-check-circle fs-6 text-warning"></i>
                                                    <span class="text-gray-600 fs-7">Draeger Infinity Delta</span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="ki-outline ki-check-circle fs-6 text-warning"></i>
                                                    <span class="text-gray-600 fs-7">Draeger Infinity Kappa</span>
                                                </div>
                                            </div>
                                            <div class="separator border-gray-200 my-4"></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="text-muted fs-8">Relevance from PAIN</span>
                                                <span class="fw-bold text-warning fs-7">72%</span>
                                            </div>
                                            <div class="h-5px bg-light-warning rounded mt-2">
                                                <div class="bg-warning rounded h-5px" style="width: 72%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- Recommendation Detail Table --}}
                            <div class="mt-2">
                                <div class="separator border-gray-200 mb-5"></div>
                                <h4 class="fw-bold fs-6 text-gray-700 mb-4">Product Recommendation Summary</h4>
                                <div class="table-responsive">
                                    <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-3">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="text-muted fw-bold fs-7 text-uppercase ps-0 min-w-180px">Product
                                                </th>
                                                <th class="text-muted fw-bold fs-7 text-uppercase min-w-120px">Category
                                                </th>
                                                <th class="text-muted fw-bold fs-7 text-uppercase min-w-100px text-center">
                                                    Relevance</th>
                                                <th class="text-muted fw-bold fs-7 text-uppercase min-w-100px text-center">
                                                    Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $recommendations = [
                                                    [
                                                        'product' => 'Draeger Perseus A500',
                                                        'category' => 'Anesthesia',
                                                        'cat_color' => 'success',
                                                        'relevance' => 95,
                                                        'rel_color' => 'success',
                                                        'status' => 'Highly Rec.',
                                                        'status_color' => 'success',
                                                    ],
                                                    [
                                                        'product' => 'Draeger Fabius GS Premium',
                                                        'category' => 'Anesthesia',
                                                        'cat_color' => 'success',
                                                        'relevance' => 90,
                                                        'rel_color' => 'success',
                                                        'status' => 'Highly Rec.',
                                                        'status_color' => 'success',
                                                    ],
                                                    [
                                                        'product' => 'Draeger Evita Infinity V500',
                                                        'category' => 'Ventilator',
                                                        'cat_color' => 'primary',
                                                        'relevance' => 88,
                                                        'rel_color' => 'primary',
                                                        'status' => 'Recommended',
                                                        'status_color' => 'primary',
                                                    ],
                                                    [
                                                        'product' => 'Draeger Babylog VN500',
                                                        'category' => 'Ventilator',
                                                        'cat_color' => 'primary',
                                                        'relevance' => 82,
                                                        'rel_color' => 'primary',
                                                        'status' => 'Recommended',
                                                        'status_color' => 'primary',
                                                    ],
                                                    [
                                                        'product' => 'Draeger Infinity Delta',
                                                        'category' => 'Patient Monitor',
                                                        'cat_color' => 'warning',
                                                        'relevance' => 72,
                                                        'rel_color' => 'warning',
                                                        'status' => 'Consider',
                                                        'status_color' => 'warning',
                                                    ],
                                                ];
                                            @endphp

                                            @foreach ($recommendations as $rec)
                                                <tr>
                                                    <td class="ps-0">
                                                        <span
                                                            class="fw-bold fs-7 text-gray-800">{{ $rec['product'] }}</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge badge-light-{{ $rec['cat_color'] }} fs-8">{{ $rec['category'] }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span
                                                            class="fw-bold fs-7 text-{{ $rec['rel_color'] }}">{{ $rec['relevance'] }}%</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span
                                                            class="badge badge-light-{{ $rec['status_color'] }} fw-bold fs-8">{{ $rec['status'] }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- ===== END SECTION 2: RECOMMENDATION SOLUTION ===== --}}

                    {{-- ===== FOOTER ACTION ===== --}}
                    <div class="d-flex justify-content-between align-items-center py-3 px-1">
                        <div class="d-flex align-items-center gap-2">
                            <i class="ki-outline ki-information fs-5 text-muted"></i>
                            <span class="text-muted fs-7 fw-semibold">
                                Click <strong>Next</strong> to proceed to Stage 4 after scoring & recommendations are
                                verified
                            </span>
                        </div>
                        <a href="{{ route('project.stage4') }}" class="btn btn-primary fw-bold px-8">
                            <i class="ki-outline ki-arrow-right fs-4 me-1"></i> Next
                        </a>
                    </div>
                    {{-- ===== END FOOTER ACTION ===== --}}

                </div>
                {{-- ===================== END RIGHT COLUMN ===================== --}}

            </div>
        </div>
    </div>
    <!--end::Content-->
@endsection

@push('styles')
    <style>
        .table tbody tr {
            transition: background-color 0.15s ease;
        }

        .card.border-dashed {
            transition: box-shadow 0.2s ease, transform 0.2s ease;
        }

        .card.border-dashed:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.07) !important;
        }

        .bg-light-primary.rounded {
            border-left: 4px solid var(--bs-primary);
        }
    </style>
@endpush

@push('scripts')
    <script>
        [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            .forEach(function(el) {
                new bootstrap.Tooltip(el);
            });
    </script>
@endpush
