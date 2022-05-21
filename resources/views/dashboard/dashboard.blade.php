@extends('layouts.dashboard_app')
@section('styles')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/jsuites.css') }}" rel="stylesheet" type="text/css">
<!-- for line chart & rect area chart -->
<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/rectchat.css') }}" rel="stylesheet" type="text/css">

@endsection
@section('content')
<div class="container" style="max-width: inherit;">
    <div class="row">
        
        <div class="col-12 col-md-4 col-xl-3">
            <div class="navigation">
                <h4>Navigation</h4>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/home.svg" />
                                <p>Home</p>
                            </div>
                            <img class="support-img" src="images/source_img/three-line.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/app-apps-applications-tiles-svgrepo-com.svg" />
                                <p>Galleries</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('identify') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/search-svgrepo-com.svg" />
                                <p>Identify</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('verify') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/exchange.svg" />
                                <p>Verify</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('import') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/import.svg" />
                                <p>Import</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('location') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/location.svg" />
                                <p>Locations</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('alert') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/alert.svg" />
                                <p>Alerts</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/setting-svgrepo-com.svg" />
                                <p>Setting</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li class="ml-5">
                        <a href="{{ route('user') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/user.svg" />
                                <p>User</p>
                            </div>
                        </a>
                    </li>
                    <li class="ml-5">
                        <a href="{{ route('user_group') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/users.svg" />
                                <p>Group of Users</p>
                            </div>
                        </a>
                    </li>
                    <li class="ml-5">
                        <a href="{{ route('permission') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/user_permission.svg" />
                                <p>Access Permissions</p>
                            </div>
                        </a>
                    </li>
                    <li class="ml-5">
                        <a href="{{ route('configuration') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/configuration.png" />
                                <p>Configuration</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('support') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/support.jpg" />
                                <p>Support</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-name="men_users" onclick="document.getElementById('logout-form').submit(); event.preventDefault();">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/sign-out.svg" />
                                <p>Sign out</p>
                            </div>
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <!-- <li>
                        <a href="{{ route('home') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/app-apps-applications-tiles-svgrepo-com.svg" />
                                <p>Dashboards</p>
                            </div>
                            <img class="support-img" src="images/source_img/three-line.svg" />
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="{{ route('stores') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/shopping-basket.svg" />
                                <p>Stores</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="{{ route('poi') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/users.svg" />
                                <p>Persons of Interest</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('poi-all') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/note.svg" />
                                <p>My Reports</p>
                            </div>
                            <img class="support-img" src="images/source_img/three-line.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('poi-other') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/danger-svgrepo-com.svg" />
                                <p>Manage Users</p>
                            </div>
                            <img class="support-img" src="images/source_img/three-line.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/setting-svgrepo-com.svg" />
                                <p>Configuration</p>
                            </div>
                            <img class="support-img" src="images/source_img/three-line.svg" />
                        </a>
                    </li>
                    <div class="clear-fix"></div>
                    <li>
                        <a href="{{ route('home') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/avatar-svgrepo-com.svg" />
                                <p>Will Walters</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/comment.svg" />
                                <p>Edit Profile</p>
                            </div>
                        </a>
                    </li>
                     -->
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-8 col-xl-9">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="navigation">
                        <h4>Most active stores</h4>
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <p class="ft-25-b">46</p>
                                <p class="percent-stores">14.6%</p>
                            </div>
                            <p class="ft-general">Matches this week</p>
                        </div>
                        <ul>
                            <li>
                                <a href="#" class="nav-link" data-name="men_users">
                                    <div class="d-flex">
                                        <span class="green-status store-status"></span>
                                        <p> Longridge </p>
                                    </div>
                                    <p> 43 </p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link" data-name="men_users">
                                    <div class="d-flex">
                                        <span class="purple-status store-status"></span>
                                        <p> Lanncaster </p>
                                    </div>
                                    <p> 34 </p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link" data-name="men_users">
                                    <div class="d-flex">
                                        <span class="orange-status store-status"></span>
                                        <p> Knutsford </p>
                                    </div>
                                    <p> 27 </p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link" data-name="men_users">
                                    <div class="d-flex">
                                        <span class="red-status store-status"></span>
                                        <p> Hale </p>
                                    </div>
                                    <p> 12 </p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link" data-name="men_users">
                                    <div class="d-flex">
                                        <span class="grey-status store-status"></span>
                                        <p> Other stores </p>
                                    </div>
                                    <p> 221 </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class=" out-line" id="map"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="row mt-3">
                        <!-- <div class="col-md-6">
                            <div class="total-matches out-line">
                                <div class="d-flex justify-content-between">
                                    <a class="ft-general" href="{{ route('total-matches') }}">Total Matches</a>
                                    <p class="ft-13">This week</p>
                                </div>
                                <div class="d-flex">
                                    <p class="ft-25-b">324</p>
                                    <p class="percent-stores">14.6%</p>
                                </div>
                                <p class="ft-12">There were an extra  56 this week</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lost-revenue out-line orange-out-line">
                                <div class="d-flex justify-content-between">
                                    <p class="ft-general">Lost Revenue</p>
                                    <p class="ft-13">This week</p>
                                </div>
                                <div class="d-flex">
                                    <p class="ft-25-b">$21,893.97</p>
                                    <p class="percent-stores-danger">4.19%</p>
                                </div>
                                <p class="ft-12">You lost $2,597.46 more than last month</p>
                            </div>
                        </div> -->
                        <div class="col-md-4">
                            <div class="row total-matches out-line mx-0">
                                <div class="col-6 p-0 m-0">
                                <img class="dashboard_mainIcon" src="https://img.freepik.com/free-vector/cctv-icon-vector-security-camera-color-flat-symbol_574806-366.jpg" />
                                </div>
                                <div class="col-6">
                                    <a class="ft-general" href="#">Camera Streams</a>
                                    <p class="ft-25-b">324</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row total-matches out-line mx-0">
                                <div class="col-4 p-0 m-0">
                                    <img class="dashboard_mainIcon" src="images/source_img/location.png" />
                                </div>
                                <div class="col-8">
                                    <a class="ft-general" href="#">Locations Online/Offline</a>    
                                    <p class="ft-25-b">324/123</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row total-matches out-line mx-0">
                                <div class="col-4 p-0 m-0">
                                    <img class="dashboard_mainIcon" src="images/source_img/map.png" />
                                </div>
                                <div class="col-8">
                                    <a class="ft-general" href="{{ route('total-matches') }}">Map Online/Offline</a>    
                                    <p class="ft-25-b">324/234</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="lost-revenue out-line green-out-line">
                                <div class="d-flex justify-content-between">
                                    <p class="ft-general">Services Online/Offline</p>
                                </div>
                                <div class="d-flex">
                                    <p class="ft-25-b">324/125</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lost-revenue out-line orange-out-line">
                                <div class="d-flex justify-content-between">
                                    <p class="ft-general">Errors</p>
                                </div>
                                <div class="d-flex">
                                    <p class="ft-25-b">4161</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="total-incidents out-line">
                                <p class="ft-general">Total Incidents</p>
                                <div class="d-flex">
                                    <p class="ft-25-b">256</p>
                                    <p class="percent-stores-danger">14.6%</p>
                                </div>
                                <div class="d-flex flex-column" id="rect_chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">    
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="verbal-abuse out-line">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <p class="jeng-zhi">#</p>
                                        <div class="ml-2">
                                            <p class="ft-20">VerbalAbuse</p>
                                            <p class="ft-13">Total Matches</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="ft-13">This week</p>
                                        <p class="percent-stores">5%</p>
                                    </div>
                                </div>
                                <canvas id="kt_chartjs_2" style="height: 210px; display: block; box-sizing: border-box; width: 421px;" ></canvas>
                                <p class="ft-12">There were an extra  56 this week</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="total-matches-graph out-line">
                                <div id="kt_charts_widget_3_chart"></div>
                                <div class="d-flex">
                                    <p class="ft-20">324 total matches</p>
                                    <p class="percent-stores bg-none">+15%</p>
                                </div>
                                <p class="ft-12">Rolling total this week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="verbal-abuse out-line">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="dashboard_mainIcon" src="images/source_img/icon_face_recognition.svg">
                                <div class="ml-2">
                                    <p class="ft-20">Faces Processed</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="dropdown1">
                                    <button class="dropbtn1" style="border-left: 1px solid black;" > <img class="support-img" src="images/source_img/search.svg" /> Select Date <img class="support-img" src="images/source_img/arrow-bottom.svg" /></button>
                                    <div class="dropdown-content1">
                                        <a href="#" onclick="select_face_date(1)">last 24 hour</a>
                                        <a href="#" onclick="select_face_date(2)">last 7 days</a>
                                        <a href="#" onclick="select_face_date(3)">last calendar week</a>
                                        <a href="#" onclick="select_face_date(4)">last 30 days</a>
                                        <a href="#" onclick="select_face_date(5)">last calendar month</a>
                                        <a href="#" onclick="select_face_date(6)">select start/end dates</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div id="show_datepicker" style="display : none;">
                            <div class="row d-flex justify-content-between">
                                <div class="col-3 mx-5">
                                    <p class="ft-20 text-center">From</p>
                                    <div id='calendarfrom' class=""></div>
                                </div>
                                <div class="col-3 mx-5">
                                    <p class="ft-20 text-center">To</p>
                                    <div id='calendarto' class="col-3 mx-5"></div>
                                </div>
                            </div>
                        </div>
                        <div class="example-box mt-5">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="d-flex flex-column align-items-start">
                                        <img src="images/source_img/one-example.png" style="width: 100%;" class="pb-5"/>
                                        <p class="live-p3" > <img src="images/source_img/location.png" class="list_location_icon mr-3"/>Knutsford store</p>
                                        <p class="live-p4" > <img src="images/source_img/security-camera-48.png" class="list_camera_icon mr-3"/>Entrance camera 1 </p>
                                        <p class="live-p5" > <img src="images/source_img/fire1.svg" class="list_fire_icon mr-3"/>Match confidence </p>
                                        <p class="live-p6" > <img src="images/source_img/calender.png" class="list_calender_icon mr-3"/>Date 2022/01/23</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="d-flex flex-column align-items-start">
                                        <img src="images/source_img/one-example.png" style="width: 100%;" class="pb-5"/>
                                        <p class="live-p3" > <img src="images/source_img/location.png" class="list_location_icon mr-3"/>Knutsford store</p>
                                        <p class="live-p4" > <img src="images/source_img/security-camera-48.png" class="list_camera_icon mr-3"/>Entrance camera 2 </p>
                                        <p class="live-p5" > <img src="images/source_img/fire1.svg" class="list_fire_icon mr-3"/>Match confidence </p>
                                        <p class="live-p6" > <img src="images/source_img/calender.png" class="list_calender_icon mr-3"/>Date </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="d-flex flex-column align-items-start">
                                        <img src="images/source_img/one-example.png" style="width: 100%;" class="pb-5"/>
                                        <p class="live-p3" > <img src="images/source_img/location.png" class="list_location_icon mr-3"/>Knutsford store</p>
                                        <p class="live-p4" > <img src="images/source_img/security-camera-48.png" class="list_camera_icon mr-3"/>Entrance camera 3 </p>
                                        <p class="live-p5" > <img src="images/source_img/fire1.svg" class="list_fire_icon mr-3"/>Match confidence </p>
                                        <p class="live-p6" > <img src="images/source_img/calender.png" class="list_calender_icon mr-3"/>Date </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="d-flex flex-column align-items-start">
                                        <img src="images/source_img/one-example.png" style="width: 100%;" class="pb-5"/>
                                        <p class="live-p3" > <img src="images/source_img/location.png" class="list_location_icon mr-3"/>Knutsford store</p>
                                        <p class="live-p4" > <img src="images/source_img/security-camera-48.png" class="list_camera_icon mr-3"/>Entrance camera 4 </p>
                                        <p class="live-p5" > <img src="images/source_img/fire1.svg" class="list_fire_icon mr-3"/>Match confidence </p>
                                        <p class="live-p6" > <img src="images/source_img/calender.png" class="list_calender_icon mr-3"/>Date </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="verbal-abuse out-line">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="dashboard_mainIcon" src="images/source_img/error.jpg">
                                <div class="ml-2">
                                    <p class="ft-20">Errors</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="dropdown1">
                                    <button class="dropbtn1" style="border-left: 1px solid black;" > <img class="support-img" src="images/source_img/search.svg" /> Select Date <img class="support-img" src="images/source_img/arrow-bottom.svg" /></button>
                                    <div class="dropdown-content1">
                                        <a href="#" onclick="select_alert_date(1)">last 24 hour</a>
                                        <a href="#" onclick="select_alert_date(2)">last 7 days</a>
                                        <a href="#" onclick="select_alert_date(3)">last calendar week</a>
                                        <a href="#" onclick="select_alert_date(4)">last 30 days</a>
                                        <a href="#" onclick="select_alert_date(5)">last calendar month</a>
                                        <a href="#" onclick="select_alert_date(6)">select start/end dates</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div id="show_alert_datepicker" style="display : none;">
                            <div class="row d-flex justify-content-between">
                                <div class="col-3 mx-5">
                                    <p class="ft-20 text-center">From</p>
                                    <div id='calendarfromAlert' class=""></div>
                                </div>
                                <div class="col-3 mx-5">
                                    <p class="ft-20 text-center">To</p>
                                    <div id='calendartoAlert' class="col-3 mx-5"></div>
                                </div>
                            </div>
                        </div>
                        <div class="example-box mt-5">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="d-flex flex-column align-items-start">
                                        <img src="images/source_img/one-example.png" style="width: 100%;" class="pb-5"/>
                                        <p class="live-p3" > <img src="images/source_img/location.png" class="list_location_icon mr-3"/>Knutsford store</p>
                                        <p class="live-p4" > <img src="images/source_img/security-camera-48.png" class="list_camera_icon mr-3"/>Entrance camera 1 </p>
                                        <p class="live-p5" > <img src="images/source_img/fire1.svg" class="list_fire_icon mr-3"/>Match confidence </p>
                                        <p class="live-p6" > <img src="images/source_img/calender.png" class="list_calender_icon mr-3"/>Date 2022/01/23</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="d-flex flex-column align-items-start">
                                        <img src="images/source_img/one-example.png" style="width: 100%;" class="pb-5"/>
                                        <p class="live-p3" > <img src="images/source_img/location.png" class="list_location_icon mr-3"/>Knutsford store</p>
                                        <p class="live-p4" > <img src="images/source_img/security-camera-48.png" class="list_camera_icon mr-3"/>Entrance camera 2 </p>
                                        <p class="live-p5" > <img src="images/source_img/fire1.svg" class="list_fire_icon mr-3"/>Match confidence </p>
                                        <p class="live-p6" > <img src="images/source_img/calender.png" class="list_calender_icon mr-3"/>Date </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="d-flex flex-column align-items-start">
                                        <img src="images/source_img/one-example.png" style="width: 100%;" class="pb-5"/>
                                        <p class="live-p3" > <img src="images/source_img/location.png" class="list_location_icon mr-3"/>Knutsford store</p>
                                        <p class="live-p4" > <img src="images/source_img/security-camera-48.png" class="list_camera_icon mr-3"/>Entrance camera 3 </p>
                                        <p class="live-p5" > <img src="images/source_img/fire1.svg" class="list_fire_icon mr-3"/>Match confidence </p>
                                        <p class="live-p6" > <img src="images/source_img/calender.png" class="list_calender_icon mr-3"/>Date </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="d-flex flex-column align-items-start">
                                        <img src="images/source_img/one-example.png" style="width: 100%;" class="pb-5"/>
                                        <p class="live-p3" > <img src="images/source_img/location.png" class="list_location_icon mr-3"/>Knutsford store</p>
                                        <p class="live-p4" > <img src="images/source_img/security-camera-48.png" class="list_camera_icon mr-3"/>Entrance camera 4 </p>
                                        <p class="live-p5" > <img src="images/source_img/fire1.svg" class="list_fire_icon mr-3"/>Match confidence </p>
                                        <p class="live-p6" > <img src="images/source_img/calender.png" class="list_calender_icon mr-3"/>Date </p>
                                    </div>
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
<script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>
<!-- for google map -->
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
<!-- for line & curve chat -->
<script type="text/javascript" src="{{ asset('js/plugins.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/widgets.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/linechat_chartjs.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/curvechat_chartjs.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/rectchat_chartjs.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jsuites.js')}}"></script>
<!-- <script type="text/javascript" src="{{ asset('js/jsuites.js')}}"></script> -->
<script>
jSuites.calendar(document.getElementById('calendarfrom'), {
    format: 'YYYY-MM-DD',
});
jSuites.calendar(document.getElementById('calendarto'), {
    format: 'YYYY-MM-DD',
});
jSuites.calendar(document.getElementById('calendarfromAlert'), {
    format: 'YYYY-MM-DD',
});
jSuites.calendar(document.getElementById('calendartoAlert'), {
    format: 'YYYY-MM-DD',
});
</script>
@endsection