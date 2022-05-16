@extends('layouts.dashboard_app1')
@section('styles')
<link href="{{ asset('css/totalmatch.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/jsuites.css') }}" rel="stylesheet" type="text/css">
<!-- for curve area chart -->

@endsection

@section('content')
<?php
    // Table rows
    $tableRows = array(
        array(
            'image' => 'svg/brand-logos/plurk.svg',
            'info' => array(
                'title' => 'Top Authors',
                'description' => 'Successful Fellas'
            ),
            'progress' => array(
                'value' => '70',
                'color' => 'primary'
            )
        ),

        array(
            'image' => 'svg/brand-logos/telegram.svg',
            'info' => array(
                'title' => 'Popular Authors',
                'description' => 'Most Successful'
            ),
            'progress' => array(
                'value' => '50',
                'color' => 'primary'
            )
        ),

        array(
            'image' => 'svg/brand-logos/vimeo.svg',
            'info' => array(
                'title' => 'New Users',
                'description' => 'Awesome Users'
            ),
            'progress' => array(
                'value' => '80',
                'color' => 'primary'
            )
        ),

        array(
            'image' => 'svg/brand-logos/bebo.svg',
            'info' => array(
                'title' => 'Active Customers',
                'description' => 'Best Customers'
            ),
            'progress' => array(
                'value' => '90',
                'color' => 'primary'
            )
        ),

        array(
            'image' => 'svg/brand-logos/kickstarter.svg',
            'info' => array(
                'title' => 'Bestseller Theme',
                'description' => 'Amazing Templates'
            ),
            'progress' => array(
                'value' => '70',
                'color' => 'primary'
            )
        )
    );
?>
<div class="container" style="max-width: inherit;">
    
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 pt-5" style="background: #f1f3f7; overflow: scroll; height: 100vh;">
            <div class="tm-dashboard">
            <div class="d-flex justify-content-between align-items-center p-3 bg-white">
                <div class="d-flex  align-items-center">
                    <a href="{{ route('home') }}">
                        <img src="images/source_img/home.svg" width=25 height=25/>
                    </a>
                    <a href="{{ route('home') }}">
                        <p class="ft-18 ml-3 ft-bold" style="color: #5F6978;">Dashboard</p>
                    </a>
                </div>
                <a href="">
                    <img src="images/source_img/three-line.svg" />
                </a>
            </div>

            <div class="d-flex p-3 mt-5 justify-content-between" >
                <div class="d-flex align-items-center">
                    <p class="ft-16 ft-color-grey ft-bold">CALENDAR</p>
                </div>
                <a href="#">
                    <img src="images/source_img/three-dots.svg" width=20 height=20 />
                </a>
            </div>

            <div class="d-flex p-2 justify-content-between">
                <div id='calendar' style="width:100%;"></div>
            </div>
            <div class="m-3 p-3">
                <a class="row" style="cursor: pointer;" href="#">
                    <img src="images/source_img/comment.svg" width=25 height=25 />
                    <p class="ft-16 ft-color-grey ft-bold ml-3"> Support </p>
                </a>
                <a class="row mt-5" style="cursor: pointer;" onclick="document.getElementById('logout-form').submit(); event.preventDefault();">
                    <img src="images/source_img/sign-out.svg" width=25 height=25 />
                    <p class="ft-16 ft-color-grey ft-bold ml-3"> Sign Out </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-8">
            <div style="height:100px">
            </div>
            <hr/>
            <div class="row m-3 justify-content-between">
                <div class="col-lg-12">
                    <h4 class="ft-color-black ft-bold ">All Users</h4>
                    <p> Click to View or edit</p>
                </div>
                <div class="col-lg-12" >
                <table class="table container  align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class="w-25px">
                                            <span class="ml-5">
                                                Name
                                            </span>
                                        </th>
                                        <!-- <th class="ps-4 min-w-300px rounded-start"></th> -->
                                        <th class="min-w-125px">Email</th>
                                        <th class="min-w-125px">Status</th>
                                        <th class="min-w-200px">Role</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->

                                <!--begin::Table body-->
                                <tbody>
                                    @foreach($tableRows as $row)
                                    <tr class="table-tr" data-url="http://localhost:8000/poi-user">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="symbol symbol-50px me-5">
                                                    <div>
                                                        <span class="symbol-label bg-light ml-5">
                                                            <img src="{{ asset(theme()->getMediaUrlPath() . $row['image']) }}" class="h-50 align-self-center" style="width: 20px;" alt=""/>
                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $row['info']['title'] }}</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $row['progress']['value'] }}</a>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">On duty</a>
                                        </td>
                                        <td>
                                            <a href="#" class="fw-bolder text-hover-primary d-block mb-1 fs-6 text-success">Administrator</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->

                            </table>
                </div>
            </div>
    </div>
</div>
@endsection

@section('scripts_extend')
<script type="text/javascript" src="{{ asset('js/stores.js') }}"></script>
<script>
$(function() {
  $('table.container').on("click", "tr.table-tr", function() {
    window.location = $(this).data("url");
    //alert($(this).data("url"));
  });
});

</script>
<!-- for line & curve chat -->
<script type="text/javascript" src="{{ asset('js/plugins.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/2widgets.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/curvechat_chartjs.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jsuites.js')}}"></script>
<script>
jSuites.calendar(document.getElementById('calendar'), {
    format: 'YYYY-MM-DD',
});
</script>
@endsection