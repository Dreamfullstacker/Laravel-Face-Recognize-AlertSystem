<!--begin::Toolbar-->
<div class="{{ theme()->printHtmlClasses('header-container', false) }} py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
    {{ theme()->getView('layout/_page-title') }}

    <!--begin::Action group-->
    <div class="d-flex align-items-center overflow-auto pt-3 pt-lg-0">
        <!--begin::Action wrapper-->
        <div class="d-flex align-items-center">
            <!--begin::Label-->
            <span class="fs-7 fw-bolder text-gray-700 pe-4 text-nowrap d-none d-xxl-block">Sort By:</span>
            <!--end::Label-->

            <!--begin::Select-->
            <select class="form-select form-select-sm form-select-solid w-100px w-xxl-125px" data-control="select2" data-placeholder="Latest" data-hide-search="true">
                <option value=""></option>
                <option value="1" selected>Latest</option>
                <option value="2">In Progress</option>
                <option value="3">Done</option>
            </select>
            <!--end::Select-->
        </div>
        <!--end::Action wrapper-->

        <!--begin::Action wrapper-->
        <div class="d-flex align-items-center">
            <!--begin::Separartor-->
            <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
            <!--end::Separartor-->

            <!--begin::Label-->
            <span class="fs-7 text-gray-700 fw-bolder d-none d-sm-block">Impact <span class="d-none d-xxl-inline">Level</span>:</span>
            <!--end::Label-->

            <!--begin::NoUiSlider-->
            <div class="d-flex align-items-center ps-4" id="kt_toolbar">
                <div id="kt_toolbar_slider" class="noUi-target noUi-target-primary w-75px w-xxl-150px noUi-sm"></div>

                <span id="kt_toolbar_slider_value" class="d-flex flex-center bg-light-primary rounded-circle w-35px h-35px ms-4 fs-7 fw-bolder text-primary"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Set impact level">
                </span>
            </div>
            <!--end::NoUiSlider-->

            <!--begin::Separartor-->
            <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
            <!--end::Separartor-->
        </div>
        <!--end::Action wrapper-->

        <!--begin::Action wrapper-->
        <div class="d-flex align-items-center">
            <!--begin::Label-->
            <span class="fs-7 text-gray-700 fw-bolder pe-3 d-none d-xxl-block">Quick Tools:</span>
            <!--end::Label-->

            <!--begin::Actions-->
            <div class="d-flex">
                <!--begin::Action-->
                <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                    {!! theme()->getSvgIcon("icons/duotune/communication/com006.svg", "svg-icon-1") !!}
                </a>
                <!--end::Action-->

                <!--begin::Notifications-->
                <div class="d-flex align-items-center">
                    <!--begin::Menu- wrapper-->
                    <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                        {!! theme()->getSvgIcon("icons/duotune/general/gen022.svg", "svg-icon-1") !!}
                    </a>
                    {{ theme()->getView('partials/topbar/_notifications-menu')  }}
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Notifications-->

                <!--begin::Quick links-->
                <div class="d-flex align-items-center">
                    <!--begin::Menu wrapper-->
                    <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                        {!! theme()->getSvgIcon("icons/duotune/general/gen008.svg", "svg-icon-1") !!}
                    </a>
                    {{ theme()->getView('partials/topbar/_quick-links-menu')  }}
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Quick links-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Action wrapper-->
    </div>
    <!--end::Action group-->
</div>
<!--end::Toolbar-->
