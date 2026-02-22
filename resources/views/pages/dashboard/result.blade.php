@extends('layouts.app')

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-5 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Monitoring Project Dashboard - Result
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard.index') }}" class="text-muted text-hover-primary">Monitoring Project
                                Dashboard</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted">Result</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <span class="badge badge-light-success fw-bold fs-7 px-4 py-3">
                        <i class="ki-outline ki-check-circle fs-5 text-success me-1"></i> All Stages Completed
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">

            {{-- ===== HEADER CARD ===== --}}
            <div class="card card-flush mb-6 bg-light-primary border-0">
                <div class="card-body p-6">
                    <div class="row align-items-center g-5">
                        <div class="col-md-8">
                            <div class="d-flex flex-column gap-2">
                                <h2 class="fw-bold fs-2 text-gray-900">RSUP A</h2>
                                <div class="d-flex align-items-center gap-3">
                                    <span class="text-gray-700 fw-semibold fs-6">
                                        <i class="ki-outline ki-geolocation fs-5 text-primary me-2"></i>
                                        Semarang, Central Java
                                    </span>
                                    <span class="badge badge-light-primary fw-bold fs-7">Type A</span>
                                    <span class="badge badge-light-info fw-bold fs-7">Pemerintah</span>
                                </div>
                                <span class="text-muted fw-semibold fs-7 mt-1">
                                    Start At: <strong>01 Feb 2025</strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-end">
                                <div class="d-flex align-items-baseline gap-2 mb-2">
                                    <span class="fw-bold fs-1 text-primary lh-1">86<span class="fs-5">%</span></span>
                                    <span class="badge badge-success fw-bold fs-8">High Potential</span>
                                </div>
                                <span class="text-muted fw-semibold fs-7">Overall Scoring Result</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ===== TIMELINE ===== --}}
            <div class="card card-flush mb-6">
                <div class="card-header pt-5 pb-0 border-0">
                    <div class="card-title">
                        <h3 class="fw-bold fs-4 text-gray-900 mb-1">Monitoring Timeline</h3>
                    </div>
                </div>

                <div class="card-body pt-5">
                    <div class="timeline timeline-vertical">

                        {{-- Stage 1 --}}
                        <div class="timeline-item">
                            <div class="timeline-icon" data-kt-element="bullet">
                                <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <h4 class="fw-bold fs-5 text-gray-900">Stage 1 – Hospital Selection</h4>
                                        <span class="badge badge-light-success fw-bold fs-7">Completed</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-8 mb-3">
                                    <div class="d-flex flex-column">
                                        <span class="text-muted fw-semibold fs-7 mb-1">
                                            <i class="ki-outline ki-calendar fs-6 text-gray-500 me-1"></i> Period
                                        </span>
                                        <span class="fw-bold fs-6 text-gray-800">01 Feb 2025 – 10 Feb 2025</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-muted fw-semibold fs-7 mb-1">
                                            <i class="ki-outline ki-clock fs-6 text-gray-500 me-1"></i> Duration
                                        </span>
                                        <span class="fw-bold fs-6 text-gray-800">10 days</span>
                                    </div>
                                </div>
                                <div class="bg-light rounded p-4">
                                    <div class="d-flex flex-column gap-2">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-gray-600 fw-semibold fs-7">Hospital Information</span>
                                            <span class="badge badge-light-primary fs-8">Available</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-gray-600 fw-semibold fs-7">Bed & Doctor Capacity</span>
                                            <span class="badge badge-light-primary fs-8">24 ICU, 12 NICU, 8 PICU, 6
                                                OR</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-gray-600 fw-semibold fs-7">Installed Base Data</span>
                                            <span class="badge badge-light-info fs-8">Competitor: 3 unit, Draeger: 5
                                                unit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Stage 2 --}}
                        <div class="timeline-item">
                            <div class="timeline-icon" data-kt-element="bullet">
                                <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <h4 class="fw-bold fs-5 text-gray-900">Stage 2 – Canvasing</h4>
                                        <span class="badge badge-light-success fw-bold fs-7">Completed</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-8 mb-3">
                                    <div class="d-flex flex-column">
                                        <span class="text-muted fw-semibold fs-7 mb-1">
                                            <i class="ki-outline ki-calendar fs-6 text-gray-500 me-1"></i> Period
                                        </span>
                                        <span class="fw-bold fs-6 text-gray-800">11 Feb 2025 – 20 Feb 2025</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-muted fw-semibold fs-7 mb-1">
                                            <i class="ki-outline ki-clock fs-6 text-gray-500 me-1"></i> Duration
                                        </span>
                                        <span class="fw-bold fs-6 text-gray-800">10 days</span>
                                    </div>
                                </div>
                                <div class="bg-light rounded p-4">
                                    <div class="d-flex flex-column gap-2">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-gray-600 fw-semibold fs-7">Total Questions</span>
                                            <span class="badge badge-light-info fs-8">30 questions</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-gray-600 fw-semibold fs-7">Respondents</span>
                                            <span class="badge badge-light-success fs-8">Doctor (5) + Management (5)</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-gray-600 fw-semibold fs-7">PAIN-GAIN-JOB Category</span>
                                            <span class="badge badge-light-primary fs-8">100% Answered</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Stage 3 --}}
                        <div class="timeline-item">
                            <div class="timeline-icon" data-kt-element="bullet">
                                <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <h4 class="fw-bold fs-5 text-gray-900">Stage 3 – Report & Scoring</h4>
                                        <span class="badge badge-light-success fw-bold fs-7">Completed</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-8 mb-3">
                                    <div class="d-flex flex-column">
                                        <span class="text-muted fw-semibold fs-7 mb-1">
                                            <i class="ki-outline ki-calendar fs-6 text-gray-500 me-1"></i> Period
                                        </span>
                                        <span class="fw-bold fs-6 text-gray-800">21 Feb 2025 – 22 Feb 2025</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-muted fw-semibold fs-7 mb-1">
                                            <i class="ki-outline ki-clock fs-6 text-gray-500 me-1"></i> Duration
                                        </span>
                                        <span class="fw-bold fs-6 text-gray-800">2 days</span>
                                    </div>
                                </div>
                                <div class="bg-light rounded p-4">
                                    <div class="d-flex flex-column gap-3">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-gray-600 fw-semibold fs-7">Overall Score</span>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fw-bold fs-6 text-primary">86%</span>
                                                <span class="badge badge-light-success fs-8">High Potential</span>
                                            </div>
                                        </div>
                                        <div class="separator border-gray-200"></div>
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="text-gray-600 fw-semibold fs-8">PAIN</span>
                                                    <span class="fw-bold fs-7 text-danger">83%</span>
                                                </div>
                                                <div class="h-6px bg-light-danger rounded mt-1">
                                                    <div class="bg-danger rounded h-6px" style="width: 83%"></div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="text-gray-600 fw-semibold fs-8">GAIN</span>
                                                    <span class="fw-bold fs-7 text-success">90%</span>
                                                </div>
                                                <div class="h-6px bg-light-success rounded mt-1">
                                                    <div class="bg-success rounded h-6px" style="width: 90%"></div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="text-gray-600 fw-semibold fs-8">JOB</span>
                                                    <span class="fw-bold fs-7 text-info">87%</span>
                                                </div>
                                                <div class="h-6px bg-light-info rounded mt-1">
                                                    <div class="bg-info rounded h-6px" style="width: 87%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Stage 4 --}}
                        <div class="timeline-item">
                            <div class="timeline-icon" data-kt-element="bullet">
                                <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <h4 class="fw-bold fs-5 text-gray-900">Stage 4 – Event</h4>
                                        <span class="badge badge-light-success fw-bold fs-7">Completed</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-8 mb-3">
                                    <div class="d-flex flex-column">
                                        <span class="text-muted fw-semibold fs-7 mb-1">
                                            <i class="ki-outline ki-calendar fs-6 text-gray-500 me-1"></i> Period
                                        </span>
                                        <span class="fw-bold fs-6 text-gray-800">23 Feb 2025 – 28 Feb 2025</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-muted fw-semibold fs-7 mb-1">
                                            <i class="ki-outline ki-clock fs-6 text-gray-500 me-1"></i> Duration
                                        </span>
                                        <span class="fw-bold fs-6 text-gray-800">6 days</span>
                                    </div>
                                </div>
                                <div class="bg-light rounded p-4">
                                    <div class="d-flex flex-column gap-2">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-gray-600 fw-semibold fs-7">Presentation</span>
                                            <span class="badge badge-light-primary fs-8">25 Feb 2025 • 25 Audience</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-gray-600 fw-semibold fs-7">Demo / Workshop</span>
                                            <span class="badge badge-light-info fs-8">28 Feb 2025 • 15 Audience</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-gray-600 fw-semibold fs-7">Demo Equipment</span>
                                            <span class="badge badge-light-warning fs-8">PERSEUS A500 + EVITA V500</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- ===== RECOMMENDATION SECTION ===== --}}
            <div class="card card-flush mb-6">
                <div class="card-header pt-5 pb-0 border-0">
                    <div class="card-title">
                        <h3 class="fw-bold fs-4 text-gray-900 mb-1">
                            <i class="ki-outline ki-shield-tick fs-4 text-success me-2"></i>
                            Recommendation Solution
                        </h3>
                    </div>
                </div>

                <div class="card-body pt-5 pb-6">
                    <div class="row g-5">

                        <div class="col-md-4">
                            <div class="card border border-dashed border-success h-100">
                                <div class="card-body p-5">
                                    <div class="d-flex align-items-center gap-3 mb-4">
                                        <div class="symbol symbol-45px flex-shrink-0">
                                            <span class="symbol-label bg-light-success">
                                                <i class="ki-outline ki-capsule fs-2 text-success"></i>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bold fs-6 text-gray-800">PERSEUS A500</span>
                                            <span class="badge badge-light-success fs-8 mt-1 w-fit">Anesthesia</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-2 mb-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-outline ki-check-circle fs-6 text-success"></i>
                                            <span class="text-gray-600 fs-7">Advanced Anesthesia Management</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-outline ki-check-circle fs-6 text-success"></i>
                                            <span class="text-gray-600 fs-7">Real-time Monitoring Integration</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-outline ki-check-circle fs-6 text-success"></i>
                                            <span class="text-gray-600 fs-7">HIS Compatible</span>
                                        </div>
                                    </div>
                                    <div class="separator border-gray-200 mb-3"></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="text-muted fs-8">Relevance</span>
                                        <span class="fw-bold text-success fs-7">95%</span>
                                    </div>
                                    <div class="h-5px bg-light-success rounded mt-2 mb-3">
                                        <div class="bg-success rounded h-5px" style="width: 95%"></div>
                                    </div>
                                    <span class="badge badge-light-success fw-bold fs-7 w-100 text-center">Highly
                                        Recommended</span>
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
                                            <span class="fw-bold fs-6 text-gray-800">EVITA V500</span>
                                            <span class="badge badge-light-primary fs-8 mt-1">Ventilator</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-2 mb-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-outline ki-check-circle fs-6 text-primary"></i>
                                            <span class="text-gray-600 fs-7">Advanced ICU Ventilation</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-outline ki-check-circle fs-6 text-primary"></i>
                                            <span class="text-gray-600 fs-7">Adaptive Algorithms</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-outline ki-check-circle fs-6 text-primary"></i>
                                            <span class="text-gray-600 fs-7">Local Training & Support</span>
                                        </div>
                                    </div>
                                    <div class="separator border-gray-200 mb-3"></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="text-muted fs-8">Relevance</span>
                                        <span class="fw-bold text-primary fs-7">88%</span>
                                    </div>
                                    <div class="h-5px bg-light-primary rounded mt-2 mb-3">
                                        <div class="bg-primary rounded h-5px" style="width: 88%"></div>
                                    </div>
                                    <span
                                        class="badge badge-light-primary fw-bold fs-7 w-100 text-center">Recommended</span>
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
                                            <span class="fw-bold fs-6 text-gray-800">INFINITY DELTA</span>
                                            <span class="badge badge-light-warning fs-8 mt-1">Patient Monitor</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-2 mb-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-outline ki-check-circle fs-6 text-warning"></i>
                                            <span class="text-gray-600 fs-7">Central Station Monitoring</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-outline ki-check-circle fs-6 text-warning"></i>
                                            <span class="text-gray-600 fs-7">Data Integration Ready</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-outline ki-check-circle fs-6 text-warning"></i>
                                            <span class="text-gray-600 fs-7">Scalable Solution</span>
                                        </div>
                                    </div>
                                    <div class="separator border-gray-200 mb-3"></div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="text-muted fs-8">Relevance</span>
                                        <span class="fw-bold text-warning fs-7">72%</span>
                                    </div>
                                    <div class="h-5px bg-light-warning rounded mt-2 mb-3">
                                        <div class="bg-warning rounded h-5px" style="width: 72%"></div>
                                    </div>
                                    <span class="badge badge-light-warning fw-bold fs-7 w-100 text-center">Consider</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- ===== KEY INSIGHTS SECTION ===== --}}
            <div class="row g-5 mb-6">

                <div class="col-md-6">
                    <div class="card card-flush">
                        <div class="card-header pt-5 pb-0 border-0">
                            <div class="card-title">
                                <h3 class="fw-bold fs-5 text-gray-900 mb-0">
                                    <i class="ki-outline ki-chart-pie-4 fs-4 text-primary me-2"></i>
                                    Key Insights
                                </h3>
                            </div>
                        </div>
                        <div class="card-body pt-4 pb-5">
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex align-items-start gap-3">
                                    <span class="badge badge-light-primary fw-bold fs-7 pt-1">1</span>
                                    <div class="d-flex flex-column gap-1">
                                        <span class="fw-bold fs-7 text-gray-800">Strong Doctor Support</span>
                                        <span class="text-muted fs-8">93% scoring from doctor respondents indicates a
                                            strong
                                            technology need</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-3">
                                    <span class="badge badge-light-primary fw-bold fs-7 pt-1">2</span>
                                    <div class="d-flex flex-column gap-1">
                                        <span class="fw-bold fs-7 text-gray-800">Budget Approval Status</span>
                                        <span class="text-muted fs-8">Management has approved the budget for medical
                                            equipment
                                            upgrade in 2025</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-3">
                                    <span class="badge badge-light-primary fw-bold fs-7 pt-1">3</span>
                                    <div class="d-flex flex-column gap-1">
                                        <span class="fw-bold fs-7 text-gray-800">Decision Timeline</span>
                                        <span class="text-muted fs-8">Average procurement process takes 3-4 months,
                                            targeted
                                            bid opening Q2 2025</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-3">
                                    <span class="badge badge-light-primary fw-bold fs-7 pt-1">4</span>
                                    <div class="d-flex flex-column gap-1">
                                        <span class="fw-bold fs-7 text-gray-800">Competitor Presence</span>
                                        <span class="text-muted fs-8">3 competitors have already conducted presentations
                                            but no demo
                                            units yet</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-flush">
                        <div class="card-header pt-5 pb-0 border-0">
                            <div class="card-title">
                                <h3 class="fw-bold fs-5 text-gray-900 mb-0">
                                    <i class="ki-outline ki-target fs-4 text-warning me-2"></i>
                                    Next Actions
                                </h3>
                            </div>
                        </div>
                        <div class="card-body pt-4 pb-5">
                            <div class="d-flex flex-column gap-3">

                                <div class="d-flex align-items-center gap-3 p-3 rounded bg-light-success">
                                    <i class="ki-outline ki-check-circle fs-4 text-success flex-shrink-0"></i>
                                    <div class="d-flex flex-column gap-1 flex-grow-1">
                                        <span class="fw-bold fs-7 text-gray-800">Presentation Completed</span>
                                        <span class="text-muted fs-8">25 Feb 2025 – 25 Participants</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center gap-3 p-3 rounded bg-light-info">
                                    <i class="ki-outline ki-check-circle fs-4 text-info flex-shrink-0"></i>
                                    <div class="d-flex flex-column gap-1 flex-grow-1">
                                        <span class="fw-bold fs-7 text-gray-800">Demo Completed</span>
                                        <span class="text-muted fs-8">28 Feb 2025 – 15 Participants, 2 Demo Units</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center gap-3 p-3 rounded bg-light-warning">
                                    <i class="ki-outline ki-arrow-right fs-4 text-warning flex-shrink-0"></i>
                                    <div class="d-flex flex-column gap-1 flex-grow-1">
                                        <span class="fw-bold fs-7 text-gray-800">Follow-up Meeting</span>
                                        <span class="text-muted fs-8">Target: 05-10 Mar 2025 with management team</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center gap-3 p-3 rounded bg-light-primary">
                                    <i class="ki-outline ki-arrow-right fs-4 text-primary flex-shrink-0"></i>
                                    <div class="d-flex flex-column gap-1 flex-grow-1">
                                        <span class="fw-bold fs-7 text-gray-800">Proposal Submission</span>
                                        <span class="text-muted fs-8">Target: Before official bid opening</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- ===== FOOTER ACTION ===== --}}
            <div class="d-flex justify-content-between align-items-center py-3 px-1">
                <span class="text-muted fs-7 fw-semibold">
                    <i class="ki-outline ki-information fs-6 me-1"></i>
                    Complete monitoring project summary with timeline, scoring, and recommendations
                </span>
                <div class="d-flex gap-3">
                    <button type="button" class="btn btn-light fw-bold" onclick="window.print()">
                        <i class="ki-outline ki-printer fs-4 me-1"></i> Print
                    </button>
                    <a href="{{ route('dashboard.index') }}" class="btn btn-primary fw-bold px-8">
                        <i class="ki-outline ki-arrow-left fs-4 me-1"></i> Back to Dashboard
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!--end::Content-->
@endsection

@push('styles')
    <style>
        /* Timeline Styling */
        .timeline {
            position: relative;
            padding: 0;
        }

        .timeline-item {
            display: flex;
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-line {
            position: absolute;
            left: 19px;
            top: 50px;
            height: calc(100% - 50px);
            width: 2px;
            background: var(--bs-gray-300);
        }

        .timeline-item:last-child .timeline-line {
            display: none;
        }

        .timeline-icon {
            position: relative;
            z-index: 2;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: 2px solid var(--bs-gray-300);
            border-radius: 50%;
            margin-right: 1.5rem;
        }

        .timeline-content {
            flex-grow: 1;
            padding-top: 0.5rem;
        }

        /* Card hover effects */
        .card.border-dashed {
            transition: box-shadow 0.2s ease, transform 0.2s ease;
        }

        .card.border-dashed:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.07) !important;
        }

        /* Print styling */
        @media print {

            .btn,
            .btn-primary,
            .btn-light {
                display: none !important;
            }

            .card {
                page-break-inside: avoid;
            }
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
