<!--begin::Header-->
<div id="kt_header" style="" class="header {{ theme()->printHtmlClasses('header', false) }} align-items-stretch" {{ theme()->printHtmlAttributes('header') }}>
    <!--begin::Brand-->
    <div class="header-brand">
        <!--begin::Logo-->
        <a href="{{ theme()->getPageUrl('') }}">
            <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'logos/logo-1-dark.svg') }}" class="h-25px h-lg-25px"/>
        </a>
        <!--end::Logo-->

        @if (theme()->getOption('layout', 'aside/minimize') === true)
            <!--begin::Aside minimize-->
            <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize"
                data-kt-toggle="true"
                data-kt-toggle-state="active"
                data-kt-toggle-target="body"
                data-kt-toggle-name="aside-minimize"
                >

                {!! theme()->getSvgIcon("icons/duotune/arrows/arr092.svg", "svg-icon-1 me-n1 minimize-default") !!}

                {!! theme()->getSvgIcon("icons/duotune/arrows/arr076.svg", "svg-icon-1 minimize-active") !!}
            </div>
            <!--end::Aside minimize-->
        @endif

        <!--begin::Aside toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
            <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                {!! theme()->getSvgIcon("icons/duotune/abstract/abs015.svg", "svg-icon-1") !!}
            </div>
        </div>
        <!--end::Aside toggle-->
    </div>
    <!--end::Brand-->

    <div class="toolbar">
        {{ theme()->getView('layout/header/_toolbar') }}
    </div>
</div>
<!--end::Header-->
