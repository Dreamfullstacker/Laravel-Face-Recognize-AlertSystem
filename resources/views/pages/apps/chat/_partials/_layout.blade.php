<!--begin::Layout-->
<div class="d-flex flex-column flex-lg-row">
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
        {{ theme()->getView('pages/apps/chat/_partials/__contacts') }}
    </div>
    <!--end::Sidebar-->

    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
        {{ theme()->getView('pages/apps/chat/_partials/__messenger', @$params) }}
    </div>
    <!--end::Content-->
</div>
<!--end::Layout-->
