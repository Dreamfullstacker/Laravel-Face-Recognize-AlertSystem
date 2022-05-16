@extends('layouts.dashboard_app1')
@section('styles')
<link href="{{ asset('css/totalmatch.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/jsuites.css') }}" rel="stylesheet" type="text/css">
<!-- for curve area chart -->

@endsection

@section('content')
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

            <div class="d-flex p-3 justify-content-between" >
                <div class="d-flex align-items-center">
                    <p class="ft-16 ft-color-grey ft-bold">Top Stores</p>
                </div>
                <a href="#">
                    <img src="images/source_img/three-dots.svg" width=20 height=20 />
                </a>
            </div>


            <div class="d-flex p-3" >
                <div id="kt_charts_widget_2_chart" ></div>
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
            <hr/>
            <div class="row justify-content-between">
                <div class=" m-3">
                    <h2 class="ft-color-grey ft-bold ">Analysis</h2>
                </div>
                <div class="m-3">
                    <a class="btn create-report-btn" href="{{route('poi-new')}}">
                        <img src="images/source_img/report.svg" width=20 height=20 style="margin-right: 5px;filter:  brightness(0) invert(1);" />
                        Create report
                    </a>                    
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <h6 class="ft-16 ft-color-grey">Recent match analysis</h6>
                </div>
            </div>

            <div id="kt_charts_widget_3_chart" style="height: 300px"></div>

            <div class="row justify-content-center align-items-center" style="height: 300px;">
                <h2 class="ft-color-black ft-bold" >Agree stats and info</h2>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts_extend')
</script>
<script type="text/javascript" src="{{ asset('js/stores.js') }}"></script>

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