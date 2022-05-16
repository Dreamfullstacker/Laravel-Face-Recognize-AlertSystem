<!--begin::Aside-->
<div
	id="kt_aside"
	class="aside pb-5 pt-5 pt-lg-0 {{ theme()->printHtmlClasses('aside', false) }}"
	data-kt-drawer="true"
	data-kt-drawer-name="aside"
	data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'80px', '300px': '100px'}"
	data-kt-drawer-direction="start"
	data-kt-drawer-toggle="#kt_aside_mobile_toggle"
	>

    <!--begin::Brand-->
    <div class="aside-logo  py-8" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{ theme()->getPageUrl('') }}" class="d-flex align-items-center">
            <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'logos/logo-demo6.svg') }}" class="h-45px logo"/>
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->

    <!--begin::Aside menu-->
	<div class="aside-menu flex-column-fluid" id="kt_aside_menu">
		{{ theme()->getView('layout/aside/_menu') }}
    </div>
    <!--end::Aside menu-->

    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto" id="kt_aside_footer">
		<!--begin::Menu-->
		<div class="d-flex justify-content-center">
			<button type="button" class="btn btm-sm btn-icon btn-active-color-primary"
				data-kt-menu-trigger="click"
				data-kt-menu-overflow="true"
				data-kt-menu-placement="top-start"

				data-bs-toggle="tooltip"
				data-bs-placement="right"
				data-bs-dismiss="click"

				title="Quick actions">

				{!! theme()->getSvgIcon("icons/duotune/general/gen008.svg", "svg-icon-1") !!}
			</button>
			{{ theme()->getView('partials/menus/_menu-2') }}
		</div>
		<!--end::Menu-->
	</div>
    <!--end::Footer-->
</div>
<!--end::Aside-->
