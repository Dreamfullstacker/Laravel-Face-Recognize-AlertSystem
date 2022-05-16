<!--begin::Messenger-->
<div class="card" id="kt_chat_messenger">
    <!--begin::Card header-->
    <div class="card-header" id="kt_chat_messenger_header">
        <!--begin::Title-->
        <div class="card-title">
            @if(@$params['group'] === true)
                <!--begin::Users-->
                <div class="symbol-group symbol-hover">
                    @for($i=3; $i < 10; $i++)
                        @php
                            $user = \App\Core\Data::getSampleUserInfo($i);
                            $user['size'] = '35px';
                        @endphp

                        {{ \App\Core\Components::getAvatar($user) }}
                    @endfor

                    <!--begin::All users-->
                    <a href="#" class="symbol symbol-35px symbol-circle" {{ theme()->linkModal('view-users') }}>
                        <span class="symbol-label fs-8 fw-bolder" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">+42</span>
                    </a>
                    <!--end::All users-->
                </div>
                <!--end::Users-->
            @else
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-bold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            @endif
        </div>
        <!--end::Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <div class="me-n3">
                <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="bi bi-three-dots fs-2"></i>
                </button>
                {{ theme()->getView('pages/apps/chat/_partials/__primary-menu') }}
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body" id="kt_chat_messenger_body">
        <!--begin::Messages-->
        <div
            class="scroll-y me-n5 pe-5 h-300px h-lg-auto"

            data-kt-element="messages"

            data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}"
            data-kt-scroll-max-height="auto"
            data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
            data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body"
            data-kt-scroll-offset="5px">

            {{ theme()->getView('pages/apps/chat/_partials/__messages') }}
        </div>
        <!--end::Messages-->
    </div>
    <!--end::Card body-->

    <!--begin::Card footer-->
    <div class="card-footer pt-4" id="kt_chat_messenger_footer">
        <!--begin::Input-->
        <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">

        </textarea>
        <!--end::Input-->

        <!--begin:Toolbar-->
        <div class="d-flex flex-stack">
            <!--begin::Actions-->
            <div class="d-flex align-items-center me-2">
                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon"><i class="bi bi-paperclip fs-3"></i></button>
                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon"><i class="bi bi-upload fs-3"></i></button>
            </div>
            <!--end::Actions-->

            <!--begin::Send-->
            <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
            <!--end::Send-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card footer-->
</div>
<!--end::Messenger-->
