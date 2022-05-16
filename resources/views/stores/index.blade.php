@extends('layouts.dashboard_app1')
@section('styles')
<link href="{{ asset('css/totalmatch.css') }}" rel="stylesheet" type="text/css">

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


            <div class="d-flex p-3 justify-content-between" >
                <div class="d-flex align-items-center">
                    <p class="ft-16 ft-color-grey ft-bold">Visitors</p>
                    <p class="percent-stores ft-bold" style="top: 0px;">14.6%</p>
                </div>
                <a href="#">
                    <img src="images/source_img/three-dots.svg" width=20 height=20 />
                </a>
            </div>

            <div class="d-flex p-3 justify-content-start" >
                <div class="d-flex align-items-center">
                    <h2 class="ft-color-black ft-bold">234 matches</h2>
                </div>
            </div>

            
            <div class="d-flex p-3" >
                <div id="kt_charts_widget_1_chart" ></div>
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
            <div class="row mt-3">
                <div class="col-lg-6">
                    <h2 class="ft-color-grey ft-bold"> Stores </h2>
                </div>
                <div class="col-lg-6 justify-content-end">
                    <img class="totalmatchimg" src="images/source_img/search.svg" width=20 height=20 />
                    <input class="totalmatchinput" type="text" placeholder="Type something to search..." />
                </div>
            </div>
            <div class="row mt-3 justify-content-between">
                <div class="col-lg-6 tm-switch-pan m-3">
                    <a class="tm-switch tab " href="{{ route('stores') }}">
                        <p class="ft-18 ft-color-grey ft-bold">Analysis</p>
                    </a>
                    <a class="tm-switch tab " href="{{ route('manage') }}">
                        <p class="ft-18 ft-color-grey ft-bold">Manage</p>
                    </a>
                    <a class="tm-switch tab " href="{{ route('total-matches') }}">
                        <p class="ft-18 ft-color-grey ft-bold">Add New</p>
                    </a>
                </div>
                <div class="col-lg-6 tm-switch-pan m-3">
                    <a class="tm-switch" href="#">
                        <p class="ft-18 ft-color-grey ft-bold">1d</p>
                    </a>
                    <a class="tm-switch active" href="#">
                        <p class="ft-18 ft-color-grey ft-bold">7d</p>
                    </a>
                    <a class="tm-switch" href="#">
                        <p class="ft-18 ft-color-grey ft-bold">1m</p>
                    </a>
                    <a class="tm-switch" href="#">
                        <p class="ft-18 ft-color-grey ft-bold">1y</p>
                    </a>
                    <a class="tm-switch" href="#">
                        <p class="ft-18 ft-color-grey ft-bold">All</p>
                    </a>
                    <a class="tm-switch" href="#">
                        <img src="images/source_img/calendar-31.svg" width=25 height=25 />
                    </a>
                </div>
            </div>
            
            <div class="row justify-content-between">
                <div class=" m-3">
                    <h2 class="ft-color-grey ft-bold ">Analysis</h2>
                </div>
                <div class="m-3">
                    <button class="btn view-report-btn" >
                        <img src="images/source_img/report.svg" width=20 height=20 style="margin-right: 5px;" /> View report
                    </button>                    
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <h6 class="ft-16 ft-color-grey">Analysis of overall store activity</h6>
                </div>
            </div>
            <div class="row justify-content-center align-items-center" style="height: 300px;">
                <h2 class="ft-color-black ft-bold" >Agree stats and info</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_extend')
<script type="text/javascript" src="{{ asset('js/stores.js') }}"></script>

<!-- for line & curve chat -->
<script type="text/javascript" src="{{ asset('js/plugins.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/2widgets.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/curvechat_chartjs.js')}}"></script>
@endsection