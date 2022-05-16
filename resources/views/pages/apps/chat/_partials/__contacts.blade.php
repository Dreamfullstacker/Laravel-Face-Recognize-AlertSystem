<!--begin::Contacts-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header pt-7" id="kt_chat_contacts_header">
        <!--begin::Form-->
        <form class="w-100 position-relative" autocomplete="off">
            <!--begin::Icon-->
            {!! theme()->getSvgIcon("icons/duotune/general/gen021.svg", "svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y") !!}
            <!--end::Icon-->

            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid px-15" name="search" value="" placeholder="Search by username or email..."/>
            <!--end::Input-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-5" id="kt_chat_contacts_body">
        <!--begin::List-->
        <div
            class="scroll-y me-n5 pe-5 h-200px h-lg-auto"

            data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}"
            data-kt-scroll-max-height="auto"
            data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header"
            data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body"
            data-kt-scroll-offset="5px">

            @php
                $total = 10;
            @endphp
            @for($i = 1; $i <= $total; $i++)
                @php
                    $user = \App\Core\Data::getSampleUserInfo($i);
                    $user['size'] = '45px';
                    $user['initials']['font-size'] = 'fs-6';
                    $user['initials']['font-weight'] = 'fw-bolder';

                    if ( rand(1, 3) === 2 ) {
                        $user['badge'] = '<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>';
                    }

                    $last_seen_options = array('3 hrs', '5 hrs', '20 hrs', '1 day', '1 week', '2 weeks');

                    $last_seen = $last_seen_options[rand(0, 5)];

                    $label = '';
                    $label_index = rand(1, 12);
                    $label_options = array(
                        array('text' => '3', 'state' => 'success'),
                        array('text' => '5', 'state' => 'danger'),
                        array('text' => '2', 'state' => 'success'),
                        array('text' => '6', 'state' => 'success'),
                        array('text' => '9', 'state' => 'warning')
                    );

                    if (isset($label_options[$label_index])) {
                        $label = $label_options[$label_index];
                    }
                @endphp
                <!--begin::User-->
                <div class="d-flex flex-stack py-4">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                        {{ \App\Core\Components::getAvatar($user) }}

                        <!--begin::Details-->
                        <div class="ms-5">
                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">{{ $user['name'] }}</a>
                            <div class="fw-bold text-muted">{{ $user['email'] }}</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2">
                        <span class="text-muted fs-7 mb-1">{{  $last_seen }}</span>

                        @if(!empty($label))
                            <span class="badge badge-sm badge-circle badge-light-{{ $label['state'] }}">{{ $label['text'] }}</span>
                        @endif
                    </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                @if($i !== $total)
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                @endif
            @endfor
        </div>
        <!--end::List-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Contacts-->
