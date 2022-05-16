<!--begin::Aside menu-->
@php
    $menu = bootstrap()->getAsideMenu();
    \App\Core\Adapters\Menu::filterMenuPermissions($menu->items);
@endphp

<div
    id="kt_aside_menu_wrapper" class="w-100 hover-scroll-overlay-y scroll-ps d-flex"

    data-kt-scroll="true"
    data-kt-scroll-height="auto"
    data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
    data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu"
    data-kt-scroll-offset="0"
>
    <div
        id="kt_aside_menu"
        class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-bold fs-6"
        data-kt-menu="true">
        {!! $menu->build() !!}
    </div>
</div>
<!--end::Aside menu-->
