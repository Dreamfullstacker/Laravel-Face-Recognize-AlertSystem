<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-primary fw-bold py-4 fs-6 w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-1">
        <a href="{{ url()->current() . '?mode=light' }}" class="menu-link px-3 {{ theme()->getCurrentMode() === 'light' ? 'active' : '' }}">
            <span class="menu-icon">
                <i class="fonticon-sun fs-2"></i>
            </span>
            <span class="menu-title">
                Light
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-1">
        <a href="{{ url()->current() . '?mode=dark' }}" class="menu-link px-3 {{ theme()->getCurrentMode() === 'dark' ? 'active' : '' }}">
            <span class="menu-icon">
                <i class="fonticon-moon fs-2"></i>
            </span>
            <span class="menu-title">
                Dark
            </span>
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
