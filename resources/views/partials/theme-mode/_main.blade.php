<?php
    $iconClass = isset($params['toggle-btn-icon-class']) ? $params['toggle-btn-icon-class'] : 'fs-2';
?>

<!--begin::Menu toggle-->
<a href="#" class="{{ $btnClass }}"
   data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
    @if (theme()->getCurrentMode() === 'dark')
        <i class="fonticon-moon {{ $iconClass }}"></i>
    @else
        <i class="fonticon-sun {{ $iconClass }}"></i>
    @endif
</a>
<!--begin::Menu toggle-->

{{ theme()->getView('partials/theme-mode/__menu') }}
