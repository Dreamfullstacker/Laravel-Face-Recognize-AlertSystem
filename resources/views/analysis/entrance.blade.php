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
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <h2 class="ft-color-grey ft-bold"> Reports </h2>
                    </div>
                    <div class="col-lg-6 justify-content-end">
                        <img class="totalmatchimg" src="images/source_img/search.svg" width=20 height=20 />
                        <input class="totalmatchinput" type="text" placeholder="Type something to search..." />
                    </div>
                </div>
                <div class="row mt-3 justify-content-between">
                    <div class="col-lg-6 tm-switch-pan m-3">
                        <a class="tm-switch tab " href="{{ route('poi') }}">
                            <p class="ft-18 ft-color-grey ft-bold">All reports</p>
                        </a>
                        <a class="tm-switch tab " href="{{ route('poi-manage') }}">
                            <p class="ft-18 ft-color-grey ft-bold">Manage</p>
                        </a>
                        <a class="tm-switch tab " href="{{ route('poi-new') }}">
                            <p class="ft-18 ft-color-grey ft-bold">Add New</p>
                        </a>
                    </div>
                    <div class="col-lg-6 m-3">
                        <div class="row justify-content-end">
                            <a href="#" class="d-flex align-items-center" onclick="alert('this function will come soon');">
                                <img src="images/source_img/three-line-dots.svg" width=20 height=20 />
                                <p class="ft-18 ft-color-grey"> Feed View </p>
                            </a>
                            <a href="#" class="d-flex align-items-center ml-3" onclick="alert('this function will come soon');">
                                <img src="images/source_img/app-apps-applications-tiles-svgrepo-com.svg" width=20 height=20 />
                                <p class="ft-18 ft-color-grey"> Grid View </p>
                            </a>
                        </div>
                    </div>

                </div>

            <div class="row m-3 justify-content-between">
                <div class="col-lg-12">
                    <h4 class="ft-color-black ft-bold ">Latest Reports</h4>
                    <p> Analysis of overall store activity</p>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                            <div class="symbol symbol-circle symbol-25px">
                                <img src="{{url('/images/users/100_4.jpg')}}" class="img-circle" style="width:60px;height:60px;" alt="img" />
                            </div>
                            <div class="editbtn">
                                <span class="badge badge-primary" style="transform:translate(15, 15)" >
                                    <i class="bi bi-pencil-fill fs-5"></i>    
                                </sapn>    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 ">
                        <span><strong> James Brown<strong>
                            <a href="#" style="color: white; background: orange"> Store sequrity </a>
                            19:31PM Edited    
                        <span>
                        <P>
                            Created this report in response to an incident in Kendal store last Friday.
                            please reivew and confirm                            
                        </p>
                        <a href='#'>Match #6758 </a>
                        <a href="#" style="background-color: grey; border-radius: 5px; font: 10px; color: white !important;padding: 4px;">Important </a>

                        <div class="fileupload">
                            <input Type="text"  class="nameinput mt-2" style="width: 200px"/>
                        </div>
                        <div class="row">
                            <div class="symbol symbol-circle symbol-25px m-2">
                                <img src="{{url('/images/stores/Screenshot_1.png')}}" class="img-rounded" alt="img" />
                            </div>
                            <div class="symbol symbol-circle symbol-25px m-2">
                                <img src="{{url('/images/stores/Screenshot_1.png')}}" class="img-rounded" alt="img" />
                            </div>
                        </div>
                        
                   </div>
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