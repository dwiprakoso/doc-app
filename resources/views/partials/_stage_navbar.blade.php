{{--
    ====================================================
    STAGE NAVBAR – Partial Reusable (IMPROVED VERSION)
    ====================================================
    USAGE (include in each stage view):

        @include('partials._stage_navbar', [
            'currentStage'   => 2,               // currently active stage (1–4)
            'completedStages' => [1],             // array of completed stages
            'hospitalName'   => 'RSUP A',         // selected hospital name
            'hospitalCity'   => 'Semarang, Central Java',
        ])

    NOTE: hospitalName & hospitalCity optional (only appears if present).
    ====================================================
--}}

@php
    $currentStage = $currentStage ?? 1;
    $completedStages = $completedStages ?? [];
    $hospitalName = $hospitalName ?? null;
    $hospitalCity = $hospitalCity ?? null;

    /**
     * Stage definition:
     * route  → Laravel route name (match your routes/web.php)
     * label  → short label in navbar
     * desc   → sub-label
     * icon   → KTM icon class
     */
    $stages = [
        1 => [
            'route' => 'project.stage1',
            'label' => 'Hospital Selection',
            'desc' => 'Select Hospital',
            'icon' => 'ki-home-2',
        ],
        2 => [
            'route' => 'project.stage2',
            'label' => 'Canvasing',
            'desc' => 'PAIN / GAIN / JOB',
            'icon' => 'ki-notepad-edit',
        ],
        3 => [
            'route' => 'project.stage3',
            'label' => 'Report',
            'desc' => 'Scoring & Recommendation',
            'icon' => 'ki-chart-simple',
        ],
        4 => [
            'route' => 'project.stage4',
            'label' => 'Event',
            'desc' => 'Presentation / Demo',
            'icon' => 'ki-calendar',
        ],
    ];
@endphp

{{-- ===== HOSPITAL INFO CARD (optional) ===== --}}
@if ($hospitalName)
    <div class="card card-flush mb-5 shadow-sm">
        <div class="card-body p-5">
            <div class="d-flex align-items-start gap-3">
                <div class="symbol symbol-50px flex-shrink-0">
                    <span class="symbol-label bg-light-primary">
                        <i class="ki-outline ki-home-2 fs-2 text-primary"></i>
                    </span>
                </div>
                <div class="d-flex flex-column flex-grow-1">
                    <span class="text-gray-500 fw-semibold fs-8 text-uppercase mb-2">Selected Hospital</span>

                    {{-- Dropdown Hospital Selector (Visual Only) --}}
                    <div class="dropdown hospital-dropdown">
                        <button
                            class="btn btn-light-primary btn-sm fw-bold d-flex align-items-center justify-content-between w-100 text-start px-3 py-2"
                            type="button" id="hospitalDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                            style="max-width: 100%;">
                            <div class="d-flex flex-column flex-grow-1 me-2">
                                <span class="text-gray-900 fw-bold fs-5 mb-1">{{ $hospitalName }}</span>
                                @if ($hospitalCity)
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="ki-outline ki-geolocation fs-7 text-gray-500"></i>
                                        <span class="text-gray-600 fw-semibold fs-7">{{ $hospitalCity }}</span>
                                    </div>
                                @endif
                            </div>
                            <i class="ki-outline ki-down fs-5 text-primary"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end w-100 py-3" aria-labelledby="hospitalDropdown"
                            style="min-width: 280px; max-height: 400px; overflow-y: auto;">

                            {{-- Search Input --}}
                            <li class="px-3 mb-3">
                                <div class="position-relative">
                                    <i
                                        class="ki-outline ki-magnifier fs-5 text-gray-500 position-absolute top-50 translate-middle-y ms-3"></i>
                                    <input type="text" class="form-control form-control-sm ps-10"
                                        placeholder="Search hospital..." id="hospitalSearchInput">
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider my-2">
                            </li>

                            {{-- Active Hospital (Current) --}}
                            <li>
                                <div class="dropdown-item active d-flex align-items-start gap-3 py-3 px-4"
                                    style="pointer-events: none;">
                                    <i class="ki-outline ki-check-circle fs-4 text-success mt-1"></i>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold fs-6 text-gray-900 mb-1">{{ $hospitalName }}</div>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ki-outline ki-geolocation fs-7 text-gray-500"></i>
                                            <span class="text-gray-600 fs-7">{{ $hospitalCity }}</span>
                                        </div>
                                        <span class="badge badge-light-success fs-8 mt-1">Currently Active</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider my-2">
                            </li>
                            <li class="px-3 mb-2"><span class="text-muted fw-bold fs-8 text-uppercase">Other
                                    Hospitals</span></li>

                            {{-- Other Hospitals (Visual Only - No Action) --}}
                            <li>
                                <div
                                    class="dropdown-item hospital-item-visual d-flex align-items-start gap-3 py-3 px-4">
                                    <i class="ki-outline ki-home-2 fs-4 text-gray-400 mt-1"></i>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold fs-6 text-gray-800 mb-1">RSUP B</div>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ki-outline ki-geolocation fs-7 text-gray-500"></i>
                                            <span class="text-gray-600 fs-7">Jakarta, DKI Jakarta</span>
                                        </div>
                                        <span class="badge badge-light-primary fs-8 mt-1">Type A</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div
                                    class="dropdown-item hospital-item-visual d-flex align-items-start gap-3 py-3 px-4">
                                    <i class="ki-outline ki-home-2 fs-4 text-gray-400 mt-1"></i>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold fs-6 text-gray-800 mb-1">RS Siloam Surabaya</div>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ki-outline ki-geolocation fs-7 text-gray-500"></i>
                                            <span class="text-gray-600 fs-7">Surabaya, East Java</span>
                                        </div>
                                        <span class="badge badge-light-info fs-8 mt-1">Type B</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div
                                    class="dropdown-item hospital-item-visual d-flex align-items-start gap-3 py-3 px-4">
                                    <i class="ki-outline ki-home-2 fs-4 text-gray-400 mt-1"></i>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold fs-6 text-gray-800 mb-1">RS Hasan Sadikin</div>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ki-outline ki-geolocation fs-7 text-gray-500"></i>
                                            <span class="text-gray-600 fs-7">Bandung, West Java</span>
                                        </div>
                                        <span class="badge badge-light-primary fs-8 mt-1">Type A</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div
                                    class="dropdown-item hospital-item-visual d-flex align-items-start gap-3 py-3 px-4">
                                    <i class="ki-outline ki-home-2 fs-4 text-gray-400 mt-1"></i>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold fs-6 text-gray-800 mb-1">RS Premier Jatinegara</div>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ki-outline ki-geolocation fs-7 text-gray-500"></i>
                                            <span class="text-gray-600 fs-7">Jakarta, DKI Jakarta</span>
                                        </div>
                                        <span class="badge badge-light-warning fs-8 mt-1">Type C</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div
                                    class="dropdown-item hospital-item-visual d-flex align-items-start gap-3 py-3 px-4">
                                    <i class="ki-outline ki-home-2 fs-4 text-gray-400 mt-1"></i>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold fs-6 text-gray-800 mb-1">RSUD Yogyakarta City</div>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ki-outline ki-geolocation fs-7 text-gray-500"></i>
                                            <span class="text-gray-600 fs-7">Yogyakarta, Special Region</span>
                                        </div>
                                        <span class="badge badge-light-info fs-8 mt-1">Type B</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider my-2">
                            </li>
                        </ul>
                    </div>
                    {{-- End Dropdown --}}

                </div>
            </div>
        </div>
    </div>
@endif
{{-- ===== END HOSPITAL CARD ===== --}}


{{-- ===== STAGE NAVBAR CARD ===== --}}
<div class="card card-flush shadow-sm">
    <div class="card-header pt-6 pb-4 border-0">
        <div class="card-title">
            <h3 class="fw-bold fs-5 text-gray-900 mb-0">
                <i class="ki-outline ki-menu fs-4 text-primary me-2"></i>
                Project Stages
            </h3>
        </div>
    </div>
    <div class="card-body pt-0 pb-6">

        {{-- ===== STAGE LIST ===== --}}
        <div class="stage-timeline">
            @foreach ($stages as $stageNum => $stage)
                @php
                    $isDone = in_array($stageNum, $completedStages);
                    $isActive = $stageNum === $currentStage;
                    $isLocked = !$isDone && !$isActive;

                    // Color & style per condition
                    if ($isDone) {
                        $itemClass = 'stage-item-done';
                        $symbolBg = 'bg-success';
                        $iconClass = 'ki-check text-white';
                        $labelClass = 'text-gray-800';
                        $descClass = 'text-gray-600';
                        $badgeClass = 'badge-light-success';
                        $badgeText = 'Completed';
                        $lineColor = 'bg-success';
                    } elseif ($isActive) {
                        $itemClass = 'stage-item-active';
                        $symbolBg = 'bg-primary';
                        $iconClass = $stage['icon'] . ' text-white';
                        $labelClass = 'text-gray-900';
                        $descClass = 'text-gray-700';
                        $badgeClass = 'badge-warning';
                        $badgeText = 'In Progress';
                        $lineColor = 'bg-primary';
                    } else {
                        $itemClass = 'stage-item-locked';
                        $symbolBg = 'bg-gray-200';
                        $iconClass = $stage['icon'] . ' text-gray-400';
                        $labelClass = 'text-gray-500';
                        $descClass = 'text-gray-400';
                        $badgeClass = 'badge-light';
                        $badgeText = 'Locked';
                        $lineColor = 'bg-gray-200';
                    }
                @endphp

                <div class="stage-item {{ $itemClass }}">
                    {{-- Stage Content --}}
                    <a href="{{ $isDone || $isActive ? route($stage['route']) : '#' }}"
                        class="stage-link {{ $isLocked ? 'disabled' : '' }}"
                        @if ($isLocked) onclick="return false;" 
                            title="Complete the previous stage first"
                            data-bs-toggle="tooltip" 
                            data-bs-placement="right" @endif>

                        {{-- Left: Icon & Timeline Line --}}
                        <div class="stage-icon-wrapper">
                            <div class="symbol symbol-45px">
                                <span class="symbol-label {{ $symbolBg }}">
                                    <i class="ki-outline {{ $iconClass }} fs-2x"></i>
                                </span>
                            </div>
                            @if ($stageNum < count($stages))
                                <div class="stage-line {{ $lineColor }}"></div>
                            @endif
                        </div>

                        {{-- Right: Content --}}
                        <div class="stage-content">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="fw-bold fs-5 {{ $labelClass }}">
                                    Stage {{ $stageNum }} – {{ $stage['label'] }}
                                </span>
                                <span class="badge {{ $badgeClass }} fw-bold fs-8">
                                    {{ $badgeText }}
                                </span>
                            </div>
                            <p class="fs-7 {{ $descClass }} mb-0">{{ $stage['desc'] }}</p>
                        </div>

                    </a>
                </div>
            @endforeach
        </div>
        {{-- ===== END STAGE LIST ===== --}}

        {{-- ===== PROGRESS INFO ===== --}}
        <div class="mt-7 pt-5 border-top border-gray-200">
            @php
                $totalDone = count($completedStages);
                $totalStages = count($stages);
                $progressPercent = round(($totalDone / $totalStages) * 100);
            @endphp

            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center gap-2">
                    <i class="ki-outline ki-chart-line-up fs-4 text-primary"></i>
                    <span class="fw-bold fs-6 text-gray-800">Overall Progress</span>
                </div>
                <span class="fw-bolder fs-3 text-primary">{{ $progressPercent }}%</span>
            </div>

            <div class="progress h-8px bg-light-primary rounded">
                <div class="progress-bar bg-primary rounded" role="progressbar"
                    style="width: {{ $progressPercent }}%" aria-valuenow="{{ $progressPercent }}" aria-valuemin="0"
                    aria-valuemax="100">
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-3">
                <span class="text-gray-600 fw-semibold fs-7">
                    {{ $totalDone }} of {{ $totalStages }} stages completed
                </span>
                @if ($totalDone === $totalStages)
                    <div class="d-flex align-items-center gap-1">
                        <i class="ki-outline ki-check-circle fs-5 text-success"></i>
                        <span class="text-success fw-bold fs-7">All Complete!</span>
                    </div>
                @else
                    <span class="text-gray-500 fs-8">Stage {{ $currentStage }} in progress</span>
                @endif
            </div>
        </div>
        {{-- ===== END PROGRESS INFO ===== --}}

    </div>
</div>
{{-- ===== END STAGE NAVBAR CARD ===== --}}


{{-- ===== STYLES ===== --}}
@once
    @push('styles')
        <style>
            /* ===== HOSPITAL DROPDOWN ===== */
            .hospital-dropdown .dropdown-toggle {
                border-radius: 10px;
                transition: all 0.2s ease;
                border: 2px solid transparent;
            }

            .hospital-dropdown .dropdown-toggle:hover {
                background-color: #e8f2ff !important;
                border-color: rgba(54, 153, 255, 0.2);
                box-shadow: 0 2px 8px rgba(54, 153, 255, 0.1);
            }

            .hospital-dropdown .dropdown-toggle:focus,
            .hospital-dropdown .dropdown-toggle:active {
                background-color: #e8f2ff !important;
                border-color: rgba(54, 153, 255, 0.3) !important;
                box-shadow: 0 4px 12px rgba(54, 153, 255, 0.15) !important;
            }

            .hospital-dropdown .dropdown-menu {
                border-radius: 12px;
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
                border: 1px solid #e9ecef;
                margin-top: 8px;
            }

            .hospital-dropdown .dropdown-item {
                border-radius: 8px;
                margin: 2px 4px;
                transition: all 0.2s ease;
            }

            /* Visual Only - Hover effect but not clickable */
            .hospital-dropdown .dropdown-item.hospital-item-visual {
                cursor: default;
            }

            .hospital-dropdown .dropdown-item.hospital-item-visual:hover {
                background-color: #f8f9fa;
                transform: translateX(4px);
            }

            .hospital-dropdown .dropdown-item.active {
                background: linear-gradient(135deg, #edfaf1 0%, #e0f7ea 100%);
                border: 1px solid rgba(80, 205, 137, 0.2);
            }

            /* Search Input Styling */
            #hospitalSearchInput {
                border-radius: 8px;
                border: 1px solid #e9ecef;
                transition: all 0.2s ease;
            }

            #hospitalSearchInput:focus {
                border-color: #3699ff;
                box-shadow: 0 0 0 3px rgba(54, 153, 255, 0.1);
            }

            /* Custom Scrollbar */
            .hospital-dropdown .dropdown-menu::-webkit-scrollbar {
                width: 6px;
            }

            .hospital-dropdown .dropdown-menu::-webkit-scrollbar-track {
                background: #f1f3f5;
                border-radius: 10px;
            }

            .hospital-dropdown .dropdown-menu::-webkit-scrollbar-thumb {
                background: #ced4da;
                border-radius: 10px;
            }

            .hospital-dropdown .dropdown-menu::-webkit-scrollbar-thumb:hover {
                background: #adb5bd;
            }

            /* ===== STAGE TIMELINE ===== */
            .stage-timeline {
                position: relative;
            }

            .stage-item {
                position: relative;
                margin-bottom: 0;
            }

            .stage-link {
                display: flex;
                align-items: flex-start;
                gap: 1rem;
                padding: 1.25rem;
                border-radius: 12px;
                text-decoration: none;
                transition: all 0.2s ease;
                border: 2px solid transparent;
            }

            .stage-link:not(.disabled):hover {
                background-color: #f8f9fa;
                transform: translateX(3px);
            }

            .stage-link.disabled {
                cursor: not-allowed;
                opacity: 0.6;
            }

            /* Icon Wrapper with Timeline Line */
            .stage-icon-wrapper {
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                flex-shrink: 0;
            }

            .stage-line {
                width: 2px;
                height: 30px;
                margin-top: 8px;
                opacity: 0.3;
            }

            /* Stage Content */
            .stage-content {
                flex: 1;
                padding-top: 8px;
            }

            /* Stage States */
            .stage-item-done .stage-link:not(.disabled):hover {
                background-color: #edfaf1;
                border-color: rgba(80, 205, 137, 0.2);
            }

            .stage-item-active .stage-link {
                background: linear-gradient(135deg, #f0f7ff 0%, #e8f2ff 100%);
                border-color: rgba(54, 153, 255, 0.3);
                box-shadow: 0 2px 8px rgba(54, 153, 255, 0.08);
            }

            .stage-item-active .stage-link:hover {
                box-shadow: 0 4px 12px rgba(54, 153, 255, 0.12);
            }

            /* Progress Bar Animation */
            .progress-bar {
                transition: width 0.8s ease;
            }

            /* Badge Styling */
            .badge {
                padding: 0.4rem 0.75rem;
                font-weight: 600;
                border-radius: 6px;
            }

            .badge-warning {
                background-color: #fff8e6;
                color: #d68910;
            }

            /* Symbol Enhancement */
            .symbol-label {
                border-radius: 10px;
            }

            /* Responsive */
            @media (max-width: 767.98px) {
                .stage-link {
                    padding: 1rem;
                }

                .stage-content {
                    padding-top: 4px;
                }

                .symbol.symbol-45px {
                    width: 40px !important;
                    height: 40px !important;
                }

                .symbol.symbol-45px .symbol-label i {
                    font-size: 1.25rem !important;
                }

                .hospital-dropdown .dropdown-menu {
                    max-width: 100% !important;
                }
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Hospital Search Functionality
            document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('hospitalSearchInput');

                if (searchInput) {
                    searchInput.addEventListener('keyup', function(e) {
                        const searchText = e.target.value.toLowerCase();
                        const dropdownItems = document.querySelectorAll('.hospital-dropdown .dropdown-item');

                        dropdownItems.forEach(function(item) {
                            // Skip search input container and dividers
                            if (item.closest('li').classList.contains('px-3') ||
                                item.parentElement.querySelector('.dropdown-divider')) {
                                return;
                            }

                            const hospitalName = item.querySelector('.fw-bold')?.textContent
                                .toLowerCase() || '';
                            const hospitalCity = item.querySelector('.text-gray-600')?.textContent
                                .toLowerCase() || '';

                            if (hospitalName.includes(searchText) || hospitalCity.includes(
                                    searchText)) {
                                item.parentElement.style.display = '';
                            } else {
                                item.parentElement.style.display = 'none';
                            }
                        });
                    });
                }

                // Clear search when dropdown closes
                const dropdownEl = document.getElementById('hospitalDropdown');
                if (dropdownEl) {
                    dropdownEl.addEventListener('hidden.bs.dropdown', function() {
                        if (searchInput) {
                            searchInput.value = '';
                            // Show all items
                            document.querySelectorAll('.hospital-dropdown .dropdown-item').forEach(function(
                                item) {
                                item.parentElement.style.display = '';
                            });
                        }
                    });
                }

                // Prevent click action on visual-only items
                document.querySelectorAll('.hospital-item-visual').forEach(function(item) {
                    item.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        return false;
                    });
                });
            });
        </script>
    @endpush
@endonce
