@if(theme()->getDemo() != 'demo2')
    <!--begin::Heading-->
    <div class="d-flex flex-wrap flex-stack mb-6">
        <!--begin::Title-->
        <h3 class="fw-bolder my-2">
            My Contacts
            <span class="fs-6 fw-bold ms-1">(59)</span>
        </h3>
        <!--end::Title-->

        <!--begin::Controls-->
        <div class="d-flex my-2">
            <!--begin::Select-->
            <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm {{ theme()->isPageBgWhite() ? 'form-select-solid' : 'border-body bg-body' }} w-125px">
                <option value="Online" selected>Online</option>
                <option value="Pending">Pending</option>
                <option value="Declined">Declined</option>
                <option value="Accepted">Accepted</option>
            </select>
            <!--end::Select-->
        </div>
        <!--end::Controls-->
    </div>
    <!--end::Heading-->
@endif

<!--begin::Contacts-->
<div class="row g-6 g-xl-9">
    {{ theme()->getView('pages/apps/chat/drawer/_cards') }}
</div>
<!--end::Contacts-->

{{ theme()->getView('partials/general/_pagination') }}
