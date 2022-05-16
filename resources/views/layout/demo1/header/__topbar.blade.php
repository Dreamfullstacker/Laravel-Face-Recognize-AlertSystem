@php
    $itemClass = "ms-1 ms-lg-3";
    $btnClass = "btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px";
    $userAvatarClass = "symbol-30px symbol-md-40px";
    $btnIconClass = "svg-icon-1";
@endphp

<!--begin::Toolbar wrapper-->
<div class="d-flex align-items-stretch flex-shrink-0">
    <!--begin::Search-->
    <div class="d-flex align-items-stretch {{ $itemClass }}">
        {{ theme()->getView('partials/search/_base') }}
    </div>
    <!--end::Search-->

    <!--begin::Activities-->
    <div class="d-flex align-items-center {{ $itemClass }}">
        <!--begin::Drawer toggle-->
        <div class="{{ $btnClass }}" id="kt_activities_toggle">
            {!! theme()->getSvgIcon("icons/duotune/general/gen032.svg", $btnIconClass) !!}
        </div>
        <!--end::Drawer toggle-->
    </div>
    <!--end::Activities-->

    <!--begin::Notifications-->
    <div class="d-flex align-items-center {{ $itemClass }}">
        <!--begin::Menu- wrapper-->
        <div class="{{ $btnClass }}" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            {!! theme()->getSvgIcon("icons/duotune/general/gen022.svg", $btnIconClass) !!}
        </div>
    {{ theme()->getView('partials/topbar/_notifications-menu') }}
    <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->

    <!--begin::Chat-->
    <div class="d-flex align-items-center {{ $itemClass }}">
        <!--begin::Menu wrapper-->
        <div class="{{ $btnClass }} position-relative" id="kt_drawer_chat_toggle">
            {!! theme()->getSvgIcon("icons/duotune/communication/com012.svg", $btnIconClass) !!}

            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
            </span>
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Chat-->

    <!--begin::Quick links-->
    <div class="d-flex align-items-center {{ $itemClass }}">
        <!--begin::Menu wrapper-->
        <div class="{{ $btnClass }}" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            {!! theme()->getSvgIcon("icons/duotune/general/gen025.svg", $btnIconClass) !!}
        </div>
    {{ theme()->getView('partials/topbar/_quick-links-menu') }}
    <!--end::Menu wrapper-->
    </div>
    <!--end::Quick links-->

    <!--begin::Theme mode-->
    <div class="d-flex align-items-center {{ $itemClass }}">
        {{ theme()->getView('partials/theme-mode/_main', compact('btnClass')) }}
    </div>
    <!--end::Theme mode-->

    @if (auth()->check())
        <!--begin::User menu-->
        <div class="d-flex align-items-center {{ $itemClass }}" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="cursor-pointer symbol {{ $userAvatarClass }}" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="{{ (theme()->isRtl() ? "bottom-start" : "bottom-end") }}">
                <img src="{{ auth()->user()->avatarUrl }}" alt="user"/>
            </div>
            {{ theme()->getView('partials/topbar/_user-menu') }}
            <!--end::Menu wrapper-->
        </div>
        <!--end::User menu-->
    @endif

    <!--begin::Header menu toggle-->
    @if(theme()->getOption('layout', 'header/left') === 'menu')
        <div class="d-flex align-items-center d-lg-none ms-2 me-n3" data-bs-toggle="tooltip" title="Show header menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                {!! theme()->getSvgIcon("icons/duotune/text/txt001.svg", "svg-icon-1") !!}
            </div>
        </div>
    @endif
<!--end::Header menu toggle-->
</div>
<!--end::Toolbar wrapper-->
