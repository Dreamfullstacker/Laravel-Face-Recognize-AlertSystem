<!--begin::Charts Widget 7-->
<div class="card {{ $class ?? '' }}">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bolder fs-3 mb-1">Recent Users</span>

			<span class="text-muted fw-bold fs-7">More than 500 new users</span>
		</h3>

        <!--begin::Toolbar-->
        <div class="card-toolbar" data-kt-buttons="true">
            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_7_year_btn">Year</a>

            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_7_month_btn">Month</a>

            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_7_week_btn">Week</a>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Chart-->
        <div id="kt_charts_widget_7_chart" style="height: 350px" class="card-rounded-bottom"></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>
<!--end::Charts Widget 7-->
