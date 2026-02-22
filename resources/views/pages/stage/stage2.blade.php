@extends('layouts.app')

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-5 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Stage 2 – Canvasing
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted">Monitoring Project</li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted fw-bold text-gray-700">Stage 2</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <span class="badge badge-light-success fw-bold fs-7 px-4 py-3">
                        <i class="ki-outline ki-check-circle fs-5 text-success me-1"></i> Stage 1 – Completed
                    </span>
                    <span class="badge badge-light-warning fw-bold fs-7 px-4 py-3">
                        <i class="ki-outline ki-time fs-5 text-warning me-1"></i> Stage 2 – In Progress
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
                {{-- Stage 2 --}}
                <div class="col-xl-3">
                    @include('partials._stage_navbar', [
                        'currentStage' => 2,
                        'completedStages' => [1],
                        'hospitalName' => 'RSUP A',
                        'hospitalCity' => 'Semarang, Central Java',
                    ])
                </div>
                {{-- ===================== END LEFT COLUMN ===================== --}}


                {{-- ===================== RIGHT COLUMN ===================== --}}
                <div class="col-xl-9">
                    <div class="card card-flush">

                        <!--begin::Card Header with Tabs-->
                        <div class="card-header pt-5 pb-0 border-0">
                            <div class="card-title flex-column">
                                <h3 class="fw-bold fs-4 text-gray-900 mb-1">Canvasing Form</h3>
                                <span class="text-muted fw-semibold fs-7">Complete questions based on hospital visit
                                    results</span>
                            </div>
                        </div>

                        <!--begin::Tab Nav-->
                        <div class="card-header pt-0 pb-0 border-0">
                            <div class="card-toolbar w-100">
                                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold w-100"
                                    id="canvasing_tabs">
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary active pb-4" data-bs-toggle="tab"
                                            href="#tab_pain">
                                            <span class="d-flex align-items-center gap-2">
                                                <i class="ki-outline ki-dislike fs-4 text-danger"></i>
                                                PAIN
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#tab_gain">
                                            <span class="d-flex align-items-center gap-2">
                                                <i class="ki-outline ki-like fs-4 text-success"></i>
                                                GAIN
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#tab_job">
                                            <span class="d-flex align-items-center gap-2">
                                                <i class="ki-outline ki-briefcase fs-4 text-info"></i>
                                                JOB
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Tab Nav-->

                        <!--begin::Card Body with Tab Content-->
                        <div class="card-body pt-5">
                            <div class="tab-content">

                                {{-- ===== TAB PAIN ===== --}}
                                <div class="tab-pane fade show active" id="tab_pain">
                                    <div class="canvasing-scroll-area"
                                        style="max-height: 520px; overflow-y: auto; padding-right: 8px;">

                                        {{-- GROUP: Doctor --}}
                                        <div class="mb-8">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="symbol symbol-35px flex-shrink-0">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-outline ki-profile-user fs-4 text-warning"></i>
                                                    </span>
                                                </div>
                                                <span class="fw-bold fs-5 text-gray-800">Doctor</span>
                                                <span class="badge badge-light-warning fs-8">5 questions</span>
                                            </div>

                                            <div class="d-flex flex-column gap-3">

                                                @php
                                                    $doctorPainQuestions = [
                                                        'Do doctors experience difficulties using current anesthesia equipment?',
                                                        'How frequently do ventilator technical issues occur in the ICU?',
                                                        'Are there complaints regarding patient monitoring equipment performance?',
                                                        'What is the current condition of OR equipment, any need for replacement?',
                                                        'Are there challenges with calibration or routine equipment maintenance?',
                                                    ];
                                                @endphp

                                                @foreach ($doctorPainQuestions as $idx => $question)
                                                    <div
                                                        class="d-flex align-items-start gap-3 py-3 px-4 rounded bg-light canvasing-question-row">
                                                        <span
                                                            class="text-muted fw-semibold fs-7 w-20px flex-shrink-0 pt-1">{{ $idx + 1 }}.</span>
                                                        <span
                                                            class="fw-semibold fs-7 text-gray-700 flex-grow-1">{{ $question }}</span>
                                                        <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                                            <!--begin::Yes-->
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input class="form-check-input w-20px h-20px border-success"
                                                                    type="radio" name="pain_doctor_{{ $idx }}"
                                                                    value="yes" />
                                                                <span class="text-success fw-bold fs-8">Yes</span>
                                                            </label>
                                                            <!--end::Yes-->
                                                            <!--begin::No-->
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input class="form-check-input w-20px h-20px border-danger"
                                                                    type="radio" name="pain_doctor_{{ $idx }}"
                                                                    value="no" />
                                                                <span class="text-danger fw-bold fs-8">No</span>
                                                            </label>
                                                            <!--end::No-->
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        {{-- END GROUP Doctor --}}

                                        {{-- GROUP: Management --}}
                                        <div class="mb-6">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="symbol symbol-35px flex-shrink-0">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-outline ki-people fs-4 text-primary"></i>
                                                    </span>
                                                </div>
                                                <span class="fw-bold fs-5 text-gray-800">Management</span>
                                                <span class="badge badge-light-primary fs-8">5 questions</span>
                                            </div>

                                            <div class="d-flex flex-column gap-3">

                                                @php
                                                    $mgmtPainQuestions = [
                                                        'Has medical equipment procurement budget been approved for this year?',
                                                        'Is there a plan to replace equipment that has exceeded its useful life?',
                                                        'What is the priority level of ICU equipment investment in the hospital roadmap?',
                                                        'Have there been issues in previous equipment procurement or tender processes?',
                                                        'Does the hospital have accreditation targets requiring equipment upgrades?',
                                                    ];
                                                @endphp

                                                @foreach ($mgmtPainQuestions as $idx => $question)
                                                    <div
                                                        class="d-flex align-items-start gap-3 py-3 px-4 rounded bg-light canvasing-question-row">
                                                        <span
                                                            class="text-muted fw-semibold fs-7 w-20px flex-shrink-0 pt-1">{{ $idx + 1 }}.</span>
                                                        <span
                                                            class="fw-semibold fs-7 text-gray-700 flex-grow-1">{{ $question }}</span>
                                                        <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input class="form-check-input w-20px h-20px border-success"
                                                                    type="radio" name="pain_mgmt_{{ $idx }}"
                                                                    value="yes" />
                                                                <span class="text-success fw-bold fs-8">Yes</span>
                                                            </label>
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input class="form-check-input w-20px h-20px border-danger"
                                                                    type="radio" name="pain_mgmt_{{ $idx }}"
                                                                    value="no" />
                                                                <span class="text-danger fw-bold fs-8">No</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        {{-- END GROUP Management --}}

                                    </div>
                                    {{-- END SCROLL AREA --}}

                                    <!--begin::Footer Action-->
                                    <div class="d-flex justify-content-between align-items-center pt-5 border-top mt-5">
                                        <span class="text-muted fs-7 fw-semibold">
                                            <i class="ki-outline ki-information fs-6 me-1"></i>
                                            Ensure all questions are answered before saving
                                        </span>
                                        <a href="{{ route('project.stage3') }}" class="btn btn-primary fw-bold px-8"
                                            id="btn_simpan_pain">
                                            <i class="ki-outline ki-check fs-4 me-1"></i> Save
                                        </a>
                                    </div>
                                    <!--end::Footer Action-->
                                </div>
                                {{-- ===== END TAB PAIN ===== --}}

                                {{-- ===== TAB GAIN ===== --}}
                                <div class="tab-pane fade" id="tab_gain">
                                    <div class="canvasing-scroll-area"
                                        style="max-height: 520px; overflow-y: auto; padding-right: 8px;">

                                        {{-- GROUP: Doctor --}}
                                        <div class="mb-8">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="symbol symbol-35px flex-shrink-0">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-outline ki-profile-user fs-4 text-warning"></i>
                                                    </span>
                                                </div>
                                                <span class="fw-bold fs-5 text-gray-800">Doctor</span>
                                                <span class="badge badge-light-success fs-8">5 questions</span>
                                            </div>
                                            <div class="d-flex flex-column gap-3">
                                                @php
                                                    $doctorGainQuestions = [
                                                        'Are doctors interested in real-time monitoring features on new equipment?',
                                                        'Is ease of operation a primary consideration for doctors?',
                                                        'Is integration of equipment data with the hospital HIS system desired?',
                                                        'Do doctors want specialized training for new equipment?',
                                                        'Is automatic alarm feature considered important by doctors?',
                                                    ];
                                                @endphp
                                                @foreach ($doctorGainQuestions as $idx => $question)
                                                    <div
                                                        class="d-flex align-items-start gap-3 py-3 px-4 rounded bg-light canvasing-question-row">
                                                        <span
                                                            class="text-muted fw-semibold fs-7 w-20px flex-shrink-0 pt-1">{{ $idx + 1 }}.</span>
                                                        <span
                                                            class="fw-semibold fs-7 text-gray-700 flex-grow-1">{{ $question }}</span>
                                                        <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input
                                                                    class="form-check-input w-20px h-20px border-success"
                                                                    type="radio" name="gain_doctor_{{ $idx }}"
                                                                    value="yes" />
                                                                <span class="text-success fw-bold fs-8">Yes</span>
                                                            </label>
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input class="form-check-input w-20px h-20px border-danger"
                                                                    type="radio" name="gain_doctor_{{ $idx }}"
                                                                    value="no" />
                                                                <span class="text-danger fw-bold fs-8">No</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        {{-- GROUP: Management --}}
                                        <div class="mb-6">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="symbol symbol-35px flex-shrink-0">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-outline ki-people fs-4 text-primary"></i>
                                                    </span>
                                                </div>
                                                <span class="fw-bold fs-5 text-gray-800">Management</span>
                                                <span class="badge badge-light-success fs-8">5 questions</span>
                                            </div>
                                            <div class="d-flex flex-column gap-3">
                                                @php
                                                    $mgmtGainQuestions = [
                                                        'Is the hospital interested in equipment leasing or rental schemes?',
                                                        'Is long-term warranty an important added value?',
                                                        'Is local after-sales service considered a competitive advantage?',
                                                        'Does the hospital want periodic equipment performance reports?',
                                                        'Is vendor CSR program a consideration in equipment selection?',
                                                    ];
                                                @endphp
                                                @foreach ($mgmtGainQuestions as $idx => $question)
                                                    <div
                                                        class="d-flex align-items-start gap-3 py-3 px-4 rounded bg-light canvasing-question-row">
                                                        <span
                                                            class="text-muted fw-semibold fs-7 w-20px flex-shrink-0 pt-1">{{ $idx + 1 }}.</span>
                                                        <span
                                                            class="fw-semibold fs-7 text-gray-700 flex-grow-1">{{ $question }}</span>
                                                        <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input
                                                                    class="form-check-input w-20px h-20px border-success"
                                                                    type="radio" name="gain_mgmt_{{ $idx }}"
                                                                    value="yes" />
                                                                <span class="text-success fw-bold fs-8">Yes</span>
                                                            </label>
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input class="form-check-input w-20px h-20px border-danger"
                                                                    type="radio" name="gain_mgmt_{{ $idx }}"
                                                                    value="no" />
                                                                <span class="text-danger fw-bold fs-8">No</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-5 border-top mt-5">
                                        <span class="text-muted fs-7 fw-semibold">
                                            <i class="ki-outline ki-information fs-6 me-1"></i>
                                            Ensure all questions are answered before saving
                                        </span>
                                        <button type="button" class="btn btn-primary fw-bold px-8">
                                            <i class="ki-outline ki-check fs-4 me-1"></i> Save
                                        </button>
                                    </div>
                                </div>
                                {{-- ===== END TAB GAIN ===== --}}

                                {{-- ===== TAB JOB ===== --}}
                                <div class="tab-pane fade" id="tab_job">
                                    <div class="canvasing-scroll-area"
                                        style="max-height: 520px; overflow-y: auto; padding-right: 8px;">

                                        {{-- GROUP: Doctor --}}
                                        <div class="mb-8">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="symbol symbol-35px flex-shrink-0">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-outline ki-profile-user fs-4 text-warning"></i>
                                                    </span>
                                                </div>
                                                <span class="fw-bold fs-5 text-gray-800">Doctor</span>
                                                <span class="badge badge-light-info fs-8">4 questions</span>
                                            </div>
                                            <div class="d-flex flex-column gap-3">
                                                @php
                                                    $doctorJobQuestions = [
                                                        'Is the doctor responsible for selecting equipment specifications?',
                                                        'Is the doctor involved in the hospital equipment procurement committee?',
                                                        'Does the doctor conduct periodic equipment evaluation?',
                                                        'Does the doctor have authority to recommend specific equipment brands?',
                                                    ];
                                                @endphp
                                                @foreach ($doctorJobQuestions as $idx => $question)
                                                    <div
                                                        class="d-flex align-items-start gap-3 py-3 px-4 rounded bg-light canvasing-question-row">
                                                        <span
                                                            class="text-muted fw-semibold fs-7 w-20px flex-shrink-0 pt-1">{{ $idx + 1 }}.</span>
                                                        <span
                                                            class="fw-semibold fs-7 text-gray-700 flex-grow-1">{{ $question }}</span>
                                                        <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input
                                                                    class="form-check-input w-20px h-20px border-success"
                                                                    type="radio" name="job_doctor_{{ $idx }}"
                                                                    value="yes" />
                                                                <span class="text-success fw-bold fs-8">Yes</span>
                                                            </label>
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input class="form-check-input w-20px h-20px border-danger"
                                                                    type="radio" name="job_doctor_{{ $idx }}"
                                                                    value="no" />
                                                                <span class="text-danger fw-bold fs-8">No</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        {{-- GROUP: Management --}}
                                        <div class="mb-6">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="symbol symbol-35px flex-shrink-0">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-outline ki-people fs-4 text-primary"></i>
                                                    </span>
                                                </div>
                                                <span class="fw-bold fs-5 text-gray-800">Management</span>
                                                <span class="badge badge-light-info fs-8">4 questions</span>
                                            </div>
                                            <div class="d-flex flex-column gap-3">
                                                @php
                                                    $mgmtJobQuestions = [
                                                        'Does the hospital have a specific SOP for medical equipment procurement?',
                                                        'Who is the primary decision maker in the procurement process?',
                                                        'Has the hospital discussed with other vendors for the same requirement?',
                                                        'What is the average timeframe from proposal to contract in this hospital?',
                                                    ];
                                                @endphp
                                                @foreach ($mgmtJobQuestions as $idx => $question)
                                                    <div
                                                        class="d-flex align-items-start gap-3 py-3 px-4 rounded bg-light canvasing-question-row">
                                                        <span
                                                            class="text-muted fw-semibold fs-7 w-20px flex-shrink-0 pt-1">{{ $idx + 1 }}.</span>
                                                        <span
                                                            class="fw-semibold fs-7 text-gray-700 flex-grow-1">{{ $question }}</span>
                                                        <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input
                                                                    class="form-check-input w-20px h-20px border-success"
                                                                    type="radio" name="job_mgmt_{{ $idx }}"
                                                                    value="yes" />
                                                                <span class="text-success fw-bold fs-8">Yes</span>
                                                            </label>
                                                            <label class="d-flex align-items-center gap-2 cursor-pointer">
                                                                <input class="form-check-input w-20px h-20px border-danger"
                                                                    type="radio" name="job_mgmt_{{ $idx }}"
                                                                    value="no" />
                                                                <span class="text-danger fw-bold fs-8">No</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-5 border-top mt-5">
                                        <span class="text-muted fs-7 fw-semibold">
                                            <i class="ki-outline ki-information fs-6 me-1"></i>
                                            Ensure all questions are answered before saving
                                        </span>
                                        <button type="button" class="btn btn-primary fw-bold px-8">
                                            <i class="ki-outline ki-check fs-4 me-1"></i> Save
                                        </button>
                                    </div>
                                </div>
                                {{-- ===== END TAB JOB ===== --}}

                            </div>
                        </div>
                        <!--end::Card Body-->

                    </div>
                </div>
                {{-- ===================== END RIGHT COLUMN ===================== --}}

            </div>
        </div>
    </div>
    <!--end::Content-->
@endsection

@push('styles')
    <style>
        .canvasing-nav {
            transition: background-color 0.15s ease;
            border-radius: 8px;
        }

        .canvasing-nav:hover {
            background-color: var(--bs-gray-100) !important;
        }

        .canvasing-nav.active {
            background-color: #e8f3ff !important;
        }

        /* Scroll area custom scrollbar */
        .canvasing-scroll-area::-webkit-scrollbar {
            width: 6px;
        }

        .canvasing-scroll-area::-webkit-scrollbar-track {
            background: var(--bs-gray-100);
            border-radius: 10px;
        }

        .canvasing-scroll-area::-webkit-scrollbar-thumb {
            background: var(--bs-gray-400);
            border-radius: 10px;
        }

        .canvasing-scroll-area::-webkit-scrollbar-thumb:hover {
            background: var(--bs-gray-500);
        }

        /* Question row hover */
        .canvasing-question-row {
            transition: background-color 0.15s ease;
        }

        .canvasing-question-row:hover {
            background-color: #f1f3f4 !important;
        }

        /* Radio button styling */
        .form-check-input:checked.border-success {
            background-color: var(--bs-success);
            border-color: var(--bs-success);
        }

        .form-check-input:checked.border-danger {
            background-color: var(--bs-danger);
            border-color: var(--bs-danger);
        }

        /* Tab nav underline style */
        .nav-line-tabs .nav-link.active {
            border-bottom: 2px solid var(--bs-primary) !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Sync left nav with Bootstrap tab
        $('.canvasing-nav').on('click', function() {
            var tab = $(this).data('tab');
            $('.canvasing-nav').removeClass('active bg-light-primary');
            $(this).addClass('active bg-light-primary');
            // Trigger Bootstrap tab
            $('a[href="#tab_' + tab + '"]').tab('show');
        });

        // Sync Bootstrap tab with left nav
        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
            var tabId = $(e.target).attr('href').replace('#tab_', '');
            $('.canvasing-nav').removeClass('active bg-light-primary');
            $('.canvasing-nav[data-tab="' + tabId + '"]').addClass('active bg-light-primary');
        });

        // Save handler (PAIN)
        $('#btn_simpan_pain').on('click', function() {
            // TODO: collect form data and send via AJAX
            Swal.fire({
                icon: 'success',
                title: 'Saved!',
                text: 'PAIN answers have been saved successfully.',
                confirmButtonText: 'OK',
                customClass: {
                    confirmButton: 'btn btn-primary'
                }
            });
        });
    </script>
@endpush
