
<!--begin::Header-->
<div id="kt_header" style="" class="header {{ theme()->printHtmlClasses('header', false) }} align-items-stretch" {{ theme()->printHtmlAttributes('header') }}>
	<!--begin::Container-->
	<div class="{{ theme()->printHtmlClasses('header-container', false) }} d-flex align-items-stretch justify-content-between">
		<!--begin::Aside mobile toggle-->
		@if (theme()->getOption('layout', 'aside/display') === true)
			<div class="d-flex align-items-center d-lg-none ms-n1 me-2" title="Show aside menu">
				<div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
					{!! theme()->getSvgIcon("icons/duotune/abstract/abs015.svg", "svg-icon-2x mt-1") !!}
				</div>
			</div>
		@endif
		<!--end::Aside mobile toggle-->

		<!--begin::Mobile logo-->
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
			<a href="{{ theme()->getPageUrl('') }}" class="d-lg-none">
				<img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'logos/logo-demo6.svg') }}" class="h-30px"/>
			</a>
		</div>
		<!--end::Mobile logo-->

		<!--begin::Wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
			<!--begin::Navbar-->
			@if(theme()->getOption('layout', 'header/left') === 'menu')
				<div class="d-flex align-items-stretch" id="kt_header_nav">
					{{ theme()->getView('layout/header/_menu') }}
				</div>
			@elseif(theme()->getOption('layout', 'header/left') === 'page-title')
				<div class="d-flex align-items-center" id="kt_header_nav">
					{{ theme()->getView('layout/_page-title') }}
				</div>
			@endif
			<!--end::Navbar-->

			<!--begin::Topbar-->
	        <div class="d-flex align-items-stretch flex-shrink-0">
				{{ theme()->getView('layout/topbar/_base') }}
			</div>
			<!--end::Topbar-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Container-->
</div>
<!--end::Header-->
