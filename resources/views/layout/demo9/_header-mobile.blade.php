
<!--begin::Header tablet and mobile-->
<div class="header-mobile py-3">
	<!--begin::Container-->
	<div class="container d-flex flex-stack">
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ theme()->getPageUrl('') }}">
                <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'logos/logo-demo9.svg') }}" class="h-35px"/>
            </a>
        </div>
        <!--end::Mobile logo-->

        <!--begin::Aside toggle-->
        <button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
            {!! theme()->getSvgIcon("icons/duotune/abstract/abs015.svg", "svg-icon-2x me-n1") !!}
        </button>
        <!--end::Aside toggle-->
	</div>
	<!--end::Container-->
</div>
<!--end::Header tablet and mobile-->
