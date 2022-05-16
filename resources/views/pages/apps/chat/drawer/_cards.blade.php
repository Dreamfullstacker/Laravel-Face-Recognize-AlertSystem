@php
    $total = 12;
@endphp

@for ($i = 0; $i < $total; $i++)

    @php
        $user = \App\Core\Data::getSampleUserInfo($i);
        $user['size'] = '75px';
        $user['circle'] = true;
        $user['initials']['font-size'] = 'fs-5';
        $user['initials']['font-weight'] = 'fw-bolder';

        if ($user['online'] === true) {
            $user['badge'] = '<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>';
        }
    @endphp

    <!--begin::Col-->
    <div class="col-md-6 col-xxl-4">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body d-flex flex-center flex-column p-9">
                <!--begin::Wrapper-->
                <div class="mb-5">
                    {{ \App\Core\Components::getAvatar($user) }}
                </div>
                <!--end::Wrapper-->

                <!--begin::Name-->
                <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{ $user['name'] }}</a>
                <!--end::Name-->

                <!--begin::Position-->
                <div class="fw-bold text-gray-400 mb-6">{{ $user['position'] }}</div>
                <!--end::Position-->

                <!--begin::Info-->
                <div class="d-flex flex-center flex-wrap mb-5">
                    <!--begin::Stats-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
                        <div class="fs-6 fw-bolder text-gray-700">$14,560</div>
                        <div class="fw-bold text-gray-400">Avg. Earnings</div>
                    </div>
                    <!--end::Stats-->

                    <!--begin::Stats-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
                        <div class="fs-6 fw-bolder text-gray-700">$236,400</div>
                        <div class="fw-bold text-gray-400">Total Sales</div>
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->

                <!--begin::Link-->
                <button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">
                    Send Message
                </button>
                <!--end::Link-->
            </div>
            <!--begin::Card body-->
        </div>
        <!--begin::Card-->
    </div>
    <!--end::Col-->
@endfor
