@php
    $pageTitleDisplay = (theme()->getOption('layout', 'page-title/display') && theme()->getOption('layout', 'header/left') !== 'page-title');
@endphp

<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="{{ theme()->printHtmlClasses('toolbar-container', false) }} d-flex align-items-center">
        @if ($pageTitleDisplay)
            <!--begin::Page title-->
            <div class="flex-grow-1 flex-shrink-0 me-5">
                {{ theme()->getView('layout/_page-title') }}
            </div>
            <!--end::Page title-->
        @endif

        <!--begin::Action group-->
        <div class="d-flex {{ $pageTitleDisplay ? 'align-items-center' : 'flex-stack flex-grow-1' }} flex-wrap">
            <!--begin::Wrapper-->
            <div class="flex-shrink-0 me-2">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light active fw-bold fs-7 px-4 me-1" data-bs-toggle="tab" href="#">Day</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-bold fs-7 px-4 me-1" data-bs-toggle="tab" href="">Week</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-bold fs-7 px-4" data-bs-toggle="tab" href="#">Year</a>
                    </li>
                </ul>
            </div>
            <!--end::Wrapper-->

            <!--begin::Wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Daterangepicker-->
                <a href="#" class="btn btn-sm btn-bg-light btn-color-gray-500 btn-active-color-primary me-2" id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover" title="Select dashboard daterange">
                    <span class="fw-bold me-1" id="kt_dashboard_daterangepicker_title">Range:</span>
                    <span class="fw-bolder" id="kt_dashboard_daterangepicker_date">
                        {{ date('F j') }}
                    </span>
                </a>
                <!--end::Daterangepicker-->

                <!--begin::Actions-->
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light btn-active-color-primary">
                        {!! theme()->getSvgIcon("icons/duotune/files/fil005.svg", "svg-icon-2x") !!}
                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Action group-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
