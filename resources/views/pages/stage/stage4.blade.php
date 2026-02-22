@extends('layouts.app')

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-5 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Stage 4 – Event
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted">Monitoring Project</li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted fw-bold text-gray-700">Stage 4</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <span class="badge badge-light-success fw-bold fs-7 px-4 py-3">
                        <i class="ki-outline ki-check-circle fs-5 text-success me-1"></i> Stage 1–3 Completed
                    </span>
                    <span class="badge badge-light-warning fw-bold fs-7 px-4 py-3">
                        <i class="ki-outline ki-time fs-5 text-warning me-1"></i> Stage 4 – In Progress
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
                        'currentStage' => 4,
                        'completedStages' => [1, 2, 3],
                        'hospitalName' => 'RSUP A',
                        'hospitalCity' => 'Semarang, Central Java',
                    ])

                </div>
                {{-- ===================== END LEFT COLUMN ===================== --}}


                {{-- ===================== RIGHT COLUMN ===================== --}}
                <div class="col-xl-9">
                    <div class="card card-flush">

                        <!--begin::Card Header-->
                        <div class="card-header pt-5 pb-0 border-0">
                            <div class="card-title flex-column">
                                <h3 class="fw-bold fs-4 text-gray-900 mb-1">Event Form</h3>
                                <span class="text-muted fw-semibold fs-7">Input presentation or demo/workshop data for the
                                    hospital</span>
                            </div>
                        </div>

                        <!--begin::Tab Nav-->
                        <div class="card-header pt-0 pb-0 border-0">
                            <div class="card-toolbar w-100">
                                <ul
                                    class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold w-100">
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary active pb-4" data-bs-toggle="tab"
                                            href="#tab_presentasi">
                                            <span class="d-flex align-items-center gap-2">
                                                <i class="ki-outline ki-screen fs-4 text-primary"></i>
                                                Presentation
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#tab_demo">
                                            <span class="d-flex align-items-center gap-2">
                                                <i class="ki-outline ki-abstract-26 fs-4 text-info"></i>
                                                Demo / Workshop
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Tab Nav-->

                        <!--begin::Tab Content-->
                        <div class="card-body pt-6">
                            <div class="tab-content">

                                {{-- ===== TAB PRESENTATION ===== --}}
                                <div class="tab-pane fade show active" id="tab_presentasi">

                                    {{-- Request Letter Header --}}
                                    <div
                                        class="d-flex align-items-center justify-content-between mb-6 p-4 rounded bg-light border border-dashed border-gray-300">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="symbol symbol-40px flex-shrink-0">
                                                <span class="symbol-label bg-light-primary">
                                                    <i class="ki-outline ki-document fs-3 text-primary"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold fs-6 text-gray-800">Presentation Request Letter</span>
                                                <span class="text-muted fw-semibold fs-8">Submitted Date</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <span class="text-gray-500 fw-semibold fs-7">:</span>
                                            <input type="date"
                                                class="form-control form-control-solid form-control-sm w-180px fs-7"
                                                id="surat_submitted_date" />
                                            <span class="text-muted fs-8">Select date</span>
                                        </div>
                                    </div>

                                    {{-- Form Fields --}}
                                    <div class="d-flex flex-column gap-5">

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">1.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Presentation Date <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="date" class="form-control form-control-solid fs-7"
                                                    name="tanggal_presentasi" />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">2.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Time</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="time" class="form-control form-control-solid fs-7"
                                                    name="waktu_presentasi" />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">3.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Location</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control form-control-solid fs-7"
                                                    name="lokasi_presentasi"
                                                    placeholder="Enter presentation location..." />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">4.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Number of Audience <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="number" class="form-control form-control-solid fs-7"
                                                    name="jumlah_audience" placeholder="Example: 25" min="1" />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">5.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Topic</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control form-control-solid fs-7"
                                                    name="topic_presentasi" placeholder="Enter presentation topic..." />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">6.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">PIC</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control form-control-solid fs-7"
                                                    name="pic_presentasi" placeholder="Person in charge name..." />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">7.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Need Equipment? <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <div class="d-flex gap-5">
                                                    <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                        <input class="form-check-input w-20px h-20px" type="radio"
                                                            name="butuh_alat" value="yes" id="butuh_alat_ya" />
                                                        <span class="fw-semibold fs-7 text-success">Yes</span>
                                                    </label>
                                                    <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                        <input class="form-check-input w-20px h-20px" type="radio"
                                                            name="butuh_alat" value="no" id="butuh_alat_tidak" />
                                                        <span class="fw-semibold fs-7 text-danger">No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">8.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Competitor?</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control form-control-solid fs-7"
                                                    name="competitor" placeholder="Competitor name if any..." />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">9.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Additional Notes</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <textarea class="form-control form-control-solid fs-7" rows="3" name="catatan_presentasi"
                                                    placeholder="Additional information needed..."></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-flex justify-content-between align-items-center pt-6 border-top mt-6">
                                        <span class="text-muted fs-7 fw-semibold">
                                            <i class="ki-outline ki-information fs-6 me-1"></i>
                                            Input required information
                                        </span>
                                        <div class="d-flex gap-3">
                                            {{-- <button type="button" class="btn btn-light fw-bold">Reset</button> --}}
                                            <a href="{{ route('dashboard.index') }}" class="btn btn-primary fw-bold px-8"
                                                id="btn_lanjut_presentasi">
                                                <i class="ki-outline ki-arrow-right fs-4 me-1"></i> Next
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                {{-- ===== END TAB PRESENTATION ===== --}}


                                {{-- ===== TAB DEMO / WORKSHOP ===== --}}
                                <div class="tab-pane fade" id="tab_demo">

                                    {{-- Request Letter Header --}}
                                    <div
                                        class="d-flex align-items-center justify-content-between mb-6 p-4 rounded bg-light border border-dashed border-gray-300">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="symbol symbol-40px flex-shrink-0">
                                                <span class="symbol-label bg-light-info">
                                                    <i class="ki-outline ki-document fs-3 text-info"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold fs-6 text-gray-800">Demo Request Letter</span>
                                                <span class="text-muted fw-semibold fs-8">Submitted Date</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <span class="text-gray-500 fw-semibold fs-7">:</span>
                                            <input type="date"
                                                class="form-control form-control-solid form-control-sm w-180px fs-7"
                                                id="surat_demo_submitted_date" />
                                            <span class="text-muted fs-8">Select date</span>
                                        </div>
                                    </div>

                                    {{-- Form Fields --}}
                                    <div class="d-flex flex-column gap-5">

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">1.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Demo Date <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="date" class="form-control form-control-solid fs-7"
                                                    name="tanggal_demo" />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">2.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Time</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="time" class="form-control form-control-solid fs-7"
                                                    name="waktu_demo" />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">3.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Location</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control form-control-solid fs-7"
                                                    name="lokasi_demo" placeholder="Enter demo/workshop location..." />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">4.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Number of Audience <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="number" class="form-control form-control-solid fs-7"
                                                    name="jumlah_audience_demo" placeholder="Example: 15"
                                                    min="1" />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">5.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Topic</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control form-control-solid fs-7"
                                                    name="topic_demo" placeholder="Demo/workshop topic..." />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">6.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">PIC</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control form-control-solid fs-7"
                                                    name="pic_demo" placeholder="Demo person in charge name..." />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">7.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Need Equipment? <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <div class="d-flex align-items-center gap-5">
                                                    <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                        <input class="form-check-input w-20px h-20px" type="radio"
                                                            name="butuh_alat_demo" value="yes" id="demo_alat_ya" />
                                                        <span class="fw-semibold fs-7 text-success">Yes</span>
                                                    </label>
                                                    <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                        <input class="form-check-input w-20px h-20px" type="radio"
                                                            name="butuh_alat_demo" value="no" id="demo_alat_tidak" />
                                                        <span class="fw-semibold fs-7 text-danger">No</span>
                                                    </label>
                                                    <button type="button"
                                                        class="btn btn-sm btn-light-info btn-active-info fw-bold fs-7 ms-2"
                                                        id="btn_lihat_alat_demo" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_daftar_alat">
                                                        <i class="ki-outline ki-abstract-26 fs-5 me-1"></i>
                                                        Show Demo Equipment Availability
                                                    </button>
                                                </div>
                                                <span class="text-muted fs-8 mt-2 d-block">
                                                    <i class="ki-outline ki-information fs-7 me-1"></i>
                                                    Click button to view DEMO equipment, location & available dates
                                                </span>
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">8.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Competitor?</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control form-control-solid fs-7"
                                                    name="competitor_demo"
                                                    placeholder="Competitor name if participating in demo..." />
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted fw-semibold fs-7 w-20px">9.</span>
                                                    <label class="fw-bold fs-6 text-gray-700 mb-0">Additional Notes</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-center"><span
                                                    class="text-gray-400 fw-semibold">:</span></div>
                                            <div class="col-md-7">
                                                <textarea class="form-control form-control-solid fs-7" rows="3" name="catatan_demo"
                                                    placeholder="Additional information needed..."></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-flex justify-content-between align-items-center pt-6 border-top mt-6">
                                        <span class="text-muted fs-7 fw-semibold">
                                            <i class="ki-outline ki-information fs-6 me-1"></i>
                                            Input required information
                                        </span>
                                        <div class="d-flex gap-3">
                                            <button type="button" class="btn btn-light fw-bold">Reset</button>
                                            <button type="button" class="btn btn-primary fw-bold px-8">
                                                <i class="ki-outline ki-arrow-right fs-4 me-1"></i> Next
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                {{-- ===== END TAB DEMO ===== --}}

                            </div>
                        </div>
                        <!--end::Tab Content-->

                    </div>
                </div>
                {{-- ===================== END RIGHT COLUMN ===================== --}}

            </div>
        </div>
    </div>
    <!--end::Content-->


    {{-- ===== MODAL: List of DEMO Equipment ===== --}}
    <div class="modal fade" id="kt_modal_daftar_alat" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header border-0 pb-0">
                    <div class="d-flex flex-column">
                        <h3 class="modal-title fw-bold fs-4 text-gray-900">List of Demo Equipment</h3>
                        <span class="text-muted fw-semibold fs-7">Select available equipment based on demo date</span>
                    </div>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                </div>

                <div class="modal-body pt-4">

                    @php
                        $alatDemo = [
                            [
                                'nama' => 'ATLAN 350',
                                'kategori' => 'Anesthesia',
                                'color' => 'success',
                                'lokasi' => 'Jakarta South Warehouse',
                                'kondisi' => 'Good',
                                'cond_color' => 'success',
                                'available' => '15 Feb 2025',
                            ],
                            [
                                'nama' => 'PERSEUS A500',
                                'kategori' => 'Anesthesia',
                                'color' => 'primary',
                                'lokasi' => 'Surabaya Warehouse',
                                'kondisi' => 'Good',
                                'cond_color' => 'success',
                                'available' => '20 Feb 2025',
                            ],
                            [
                                'nama' => 'BABYLOG VN800',
                                'kategori' => 'Ventilator',
                                'color' => 'info',
                                'lokasi' => 'In Use – RS Bandung',
                                'kondisi' => 'In Use',
                                'cond_color' => 'warning',
                                'available' => '28 Feb 2025',
                            ],
                            [
                                'nama' => 'EVITA V500',
                                'kategori' => 'Ventilator',
                                'color' => 'warning',
                                'lokasi' => 'Semarang Warehouse',
                                'kondisi' => 'Needs Service',
                                'cond_color' => 'danger',
                                'available' => '05 Mar 2025',
                            ],
                        ];
                    @endphp

                    <div class="d-flex flex-column gap-4">
                        @foreach ($alatDemo as $alat)
                            <div class="d-flex align-items-center gap-5 p-5 rounded border border-dashed border-gray-300 alat-demo-row"
                                data-nama="{{ $alat['nama'] }}">

                                <div class="symbol symbol-60px flex-shrink-0">
                                    <span class="symbol-label bg-light-{{ $alat['color'] }}">
                                        <i class="ki-outline ki-abstract-26 fs-1 text-{{ $alat['color'] }}"></i>
                                    </span>
                                </div>

                                <div class="d-flex flex-column me-2 flex-shrink-0" style="min-width: 140px;">
                                    <span class="fw-bold fs-5 text-gray-900">{{ $alat['nama'] }}</span>
                                    <span
                                        class="badge badge-light-{{ $alat['color'] }} fs-8 mt-1 w-fit">{{ $alat['kategori'] }}</span>
                                </div>

                                <div class="d-flex flex-column gap-2 flex-grow-1">
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="fw-semibold fs-8 text-muted w-20px">1.</span>
                                        <span class="fw-bold fs-7 text-muted me-1">LOCATION</span>
                                        <span class="text-gray-500 mx-2">=</span>
                                        <span class="fw-semibold fs-7 text-gray-700">{{ $alat['lokasi'] }}</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="fw-semibold fs-8 text-muted w-20px">2.</span>
                                        <span class="fw-bold fs-7 text-muted me-1">CONDITION</span>
                                        <span class="text-gray-500 mx-2">=</span>
                                        <span
                                            class="badge badge-light-{{ $alat['cond_color'] }} fw-bold fs-8">{{ $alat['kondisi'] }}</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="fw-semibold fs-8 text-muted w-20px">3.</span>
                                        <span class="fw-bold fs-7 text-muted me-1">Available Date</span>
                                        <span class="text-gray-500 mx-2">=</span>
                                        <span class="fw-bold fs-7 text-gray-800">
                                            <i class="ki-outline ki-calendar fs-7 text-gray-500 me-1"></i>
                                            {{ $alat['available'] }}
                                        </span>
                                    </div>
                                </div>

                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-primary fw-bold btn-pilih-alat"
                                        data-nama="{{ $alat['nama'] }}" data-lokasi="{{ $alat['lokasi'] }}"
                                        data-available="{{ $alat['available'] }}">
                                        <i class="ki-outline ki-check fs-5 me-1"></i> Select
                                    </button>
                                </div>

                            </div>
                        @endforeach
                    </div>

                </div>

                <div class="modal-footer border-0 pt-0 pb-4">
                    <span class="text-muted fs-8 me-auto">
                        <i class="ki-outline ki-information fs-7 me-1"></i>
                        Shows demo equipment with availability information
                    </span>
                    <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    {{-- ===== END MODAL LIST OF EQUIPMENT ===== --}}
@endsection

@push('styles')
    <style>
        .alat-demo-row {
            transition: all 0.2s ease;
        }

        .alat-demo-row:hover {
            background-color: var(--bs-gray-100) !important;
            border-color: var(--bs-primary) !important;
        }

        .alat-demo-row.selected {
            background-color: #e8f3ff !important;
            border-color: var(--bs-primary) !important;
        }

        .nav-line-tabs .nav-link.active {
            border-bottom: 2px solid var(--bs-primary) !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Select demo equipment → close modal & fill field
        $('.btn-pilih-alat').on('click', function() {
            var nama = $(this).data('nama');
            var lokasi = $(this).data('lokasi');
            var available = $(this).data('available');

            $('.alat-demo-row').removeClass('selected');
            $(this).closest('.alat-demo-row').addClass('selected');

            setTimeout(function() {
                $('#kt_modal_daftar_alat').modal('hide');
                $('#selected_alat_info').remove();
                var info =
                    '<div id="selected_alat_info" class="alert alert-dismissible bg-light-primary d-flex gap-3 p-4 mt-3 rounded">' +
                    '<i class="ki-outline ki-check-circle fs-2 text-primary flex-shrink-0"></i>' +
                    '<div class="d-flex flex-column">' +
                    '<span class="fw-bold fs-7 text-gray-800">Selected equipment: <strong>' + nama +
                    '</strong></span>' +
                    '<span class="text-muted fs-8">Location: ' + lokasi + ' &nbsp;|&nbsp; Available: ' +
                    available + '</span>' +
                    '</div>' +
                    '<button type="button" class="btn btn-sm btn-icon ms-auto" onclick="$(\'#selected_alat_info\').remove()">' +
                    '<i class="ki-outline ki-cross fs-3 text-gray-500"></i></button></div>';
                $('[name="butuh_alat_demo"][value="yes"]').closest('.row').after(info);
            }, 300);
        });

        // Tooltip
        [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            .forEach(function(el) {
                new bootstrap.Tooltip(el);
            });

        // Next button handler
        $('#btn_lanjut_presentasi').on('click', function() {
            Swal.fire({
                icon: 'success',
                title: 'Saved!',
                text: 'Presentation data has been saved successfully.',
                confirmButtonText: 'Continue to Stage 5',
                customClass: {
                    confirmButton: 'btn btn-primary'
                }
            });
        });
    </script>
@endpush
