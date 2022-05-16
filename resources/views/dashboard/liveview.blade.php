@extends('layouts.dashboard_app')
@section('styles')
<link href="{{ asset('css/liveview.css') }}" rel="stylesheet" type="text/css">
<!-- for curve area chart -->

@endsection

@section('content')
<div class="container" style="max-width: inherit;">
    
    <div class="row">
        <div class="col-12 col-md-4">
            <p class="liveview-p">Live View</p>
        </div>
        <div class="col-12 col-md-8">
            <div class="row justify-content-between align-items-center mr-3 ml-3">
                <div class="">
                    <img class="support-img" src="images/source_img/search.svg" />
                    <input type="text" class="live-search-input" name="search" value="" placeholder="Enter keyword">
                </div>

                <div class="">
                    <div class="dropdown1">
                    <button class="dropbtn1" style="border-left: 1px solid black;" > <img class="support-img" src="images/source_img/search.svg" /> All Stores <img class="support-img" src="images/source_img/arrow-bottom.svg" /></button>
                    <div class="dropdown-content1">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    </div>
                </div>

                <div class="">
                    <div class="dropdown1">
                    <button class="dropbtn1"> <img class="support-img" src="images/source_img/tag-svgrepo-com.svg" /> All tags <img class="support-img" src="images/source_img/arrow-bottom.svg" /></button>
                    <div class="dropdown-content1">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    </div>
                </div>

                
                <div class="">
                    <div class="dropdown1">
                    <button class="dropbtn1"> <img class="support-img" src="images/source_img/protect.svg" /> All status <img class="support-img" src="images/source_img/arrow-bottom.svg" /></button>
                    <div class="dropdown-content1">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    </div>
                </div>
                <div class="">
                    <button class="btn btn-search"> Search </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 col-md-4">
            <div class=" out-line" id="map"></div>
        </div>
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div id="kt_charts_widget_4_chart" style="height: 90px !important;"></div>
                </div>
            </div>
            <div class="example-box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column align-items-start">
                                    <img src="images/source_img/one-example.png"  style="width: 100%;"/>
                                    <p class="live-p1" > Will Walters </p>
                                    <p class="live-p2" > #Knife </p>
                                    <div class="">
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire4.svg" width=20 height=20 />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column align-items-start">
                                    <img src="images/source_img/one-example2.png" style="width: 100%;" />
                                    <p class="live-p3" > Knutsford store</p>
                                    <p class="live-p4" > Entrance camera 1 </p>
                                    <p class="live-p5" > Match confidence </p>
                                    <p class="live-p6" > High </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column align-items-start">
                                    <img src="images/source_img/one-example.png" style="width: 100%;"/>
                                    <p class="live-p1" > Will Walters </p>
                                    <p class="live-p2" > #Knife </p>
                                    <div class="">
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire4.svg" width=20 height=20 />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column align-items-start">
                                    <img src="images/source_img/one-example2.png" style="width: 100%;" />
                                    <p class="live-p3" > Knutsford store</p>
                                    <p class="live-p4" > Entrance camera 1 </p>
                                    <p class="live-p5" > Match confidence </p>
                                    <p class="live-p6" > High </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column align-items-start">
                                    <img src="images/source_img/one-example.png"  style="width: 100%;"/>
                                    <p class="live-p1" > Will Walters </p>
                                    <p class="live-p2" > #Knife </p>
                                    <div class="">
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire4.svg" width=20 height=20 />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column align-items-start">
                                    <img src="images/source_img/one-example2.png" style="width: 100%;" />
                                    <p class="live-p3" > Knutsford store</p>
                                    <p class="live-p4" > Entrance camera 1 </p>
                                    <p class="live-p5" > Match confidence </p>
                                    <p class="live-p6" > High </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column align-items-start">
                                    <img src="images/source_img/one-example.png" style="width: 100%;"/>
                                    <p class="live-p1" > Will Walters </p>
                                    <p class="live-p2" > #Knife </p>
                                    <div class="">
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire1.svg" width=20 height=20 />
                                        <img src="images/source_img/fire4.svg" width=20 height=20 />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column align-items-start">
                                    <img src="images/source_img/one-example2.png" style="width: 100%;" />
                                    <p class="live-p3" > Knutsford store</p>
                                    <p class="live-p4" > Entrance camera 1 </p>
                                    <p class="live-p5" > Match confidence </p>
                                    <p class="live-p6" > High </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_extend')
<script type="text/javascript" src="{{ asset('js/liveview.js') }}"></script>

<!-- for line & curve chat -->
<script type="text/javascript" src="{{ asset('js/plugins.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/1widgets.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/curvechat_chartjs.js')}}"></script>
@endsection