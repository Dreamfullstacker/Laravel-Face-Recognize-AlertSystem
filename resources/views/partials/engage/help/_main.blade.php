<?php
$items = array(
    array(
        'icon'        => 'icons/duotune/abstract/abs027.svg',
        'title'       => 'Documentation & Videos',
        'description' => 'From guides and video tutorials, to live demos and code examples to get started.',
        'link'        => theme()->getPageUrl('documentation/getting-started/overview'),
        'color'       => 'warning'
    ),

    array(
        'icon'        => 'icons/duotune/ecommerce/ecm007.svg',
        'title'       => 'Plugins & Components',
        'description' => 'Check out our 300+ in-house components and customized 3rd-party plugins.',
        'link'        => theme()->getPageUrl('https://preview.keenthemes.com/metronic8/demo1/documentation/base/utilities.html'),
        'color'       => 'primary'
    ),

    array(
        'icon'        => 'icons/duotune/art/art006.svg',
        'title'       => 'Layout Builder',
        'description' => 'Build your layout, preview it and export the HTML for server side integration.',
        'link'        => 'https://preview.keenthemes.com/metronic8/laravel/demo1/layout-builder.html',
        'color'       => 'info'
    ),

    array(
        'icon'        => 'icons/duotune/electronics/elc009.svg',
        'title'       => 'What\'s New',
        'description' => 'Latest features and improvements added with our users feedback in mind.',
        'link'        => theme()->getPageUrl('documentation/getting-started/changelog'),
        'color'       => 'danger'
    )
);
?>
<!--begin::Help drawer-->
<div
    id="kt_help"
    class="bg-body"
    data-kt-drawer="true"
    data-kt-drawer-name="help"
    data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'350px', 'md': '525px'}"
    data-kt-drawer-direction="{{ theme()->getOption('layout', 'engage/help/direction') }}"
    data-kt-drawer-toggle="#kt_help_toggle"
    data-kt-drawer-close="#kt_help_close">

    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_help_header">
            <h5 class="card-title fw-bold text-gray-600">
                Learn & Get Inspired
            </h5>

            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
                    {!! theme()->getSvgIcon("icons/duotune/arrows/arr061.svg", "svg-icon-2") !!}
                </button>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body" id="kt_help_body">
            <!--begin::Content-->
            <div
                id="kt_help_scroll"

                class="hover-scroll-overlay-y"

                data-kt-scroll="true"
                data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#kt_help_body"
                data-kt-scroll-dependencies="#kt_help_header"
                data-kt-scroll-offset="5px">

                <!--begin::Support-->
                <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                    <!--begin::Heading-->
                    <h2 class="fw-bolder mb-5">Support at <a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a></h2>
                    <!--end::Heading-->

                    <!--begin::Description-->
                    <div class="fs-5 fw-bold mb-5">
                        <span class="text-gray-500">Join our developers community to find answer to your question and help others.</span>
                        <a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
                    </div>
                    <!--end::Description-->

                    <!--begin::Link-->
                    <a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get Support</a>
                    <!--end::Link-->
                </div>
                <!--end::Support-->

            @foreach($items as $item)
                <!--begin::Link-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-{{ $item['color'] }}">
                            {!! theme()->getSvgIcon($item['icon'], "svg-icon-" . $item['color'] . " svg-icon-2x svg-icon-lg-3x") !!}
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <a href="{{ $item['link'] }}" class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">
                                    {{ $item['title'] }}
                                </a>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-bold fs-7 fs-lg-6">
                                    {{ $item['description'] }}
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            {!! theme()->getSvgIcon('icons/duotune/arrows/arr064.svg', "svg-icon-gray-400 svg-icon-2") !!}
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Link-->
                @endforeach
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Help drawer-->
