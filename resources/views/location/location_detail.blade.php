@extends('layouts.dashboard_app')
@section('styles')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/location_detail.css') }}" rel="stylesheet" type="text/css">

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
                                <img class="support-img" src="images/source_img/exchange.svg" />
                                <p>Import</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('location') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/exchange.svg" />
                                <p>Locations</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('alert') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/exchange.svg" />
                                <p>Alerts</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
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
                    <li>
                        <a href="{{ route('stores') }}" class="nav-link" data-name="men_users">
                            <div class="d-flex">
                                <img class="support-img" src="images/source_img/shopping-basket.svg" />
                                <p>Stores</p>
                            </div>
                            <img class="support-img" src="images/source_img/comment.svg" />
                        </a>
                    </li>
                    <li>
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
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-8">
            <div class="row justify-content-between">
                <div class=" m-3">
                    <h2 class="ft-color-black ft-bold">Knutsford</h2>
                    <p class="ft-16 ft-color-grey">Address : Stanley Road, Knutsford, Cheshire, WA16 OBS </p>
                </div>
                <!-- <div class="m-3">
                    <button class="btn case-file-btn" onclick="alert('this function will come soon');" >
                        <img src="images/source_img/settings.svg" width=20 height=20 style="margin-right: 5px;" /> Configure
                    </button>  
                    <button class="btn case-file-btn" onclick="alert('this function will come soon');" >
                        <img src="images/source_img/supermarket-basket.svg" width=20 height=20 style="margin-right: 5px;" /> Store Overview
                    </button>                    
                </div> -->
            </div>

            <div class="row justify-content-around">                
                <div class="col-md-3 out-line">
                    <div class="row">
                        <div class="col-6">
                            <p class="ft-16 ft-color-grey" > Associated User</p>
                            <p class="ft-20 ft-color-black">Masimka</p>
                        </div>
                        <div class="col-6">
                            <img class="associated_user" src="images/users/100_4.jpg" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 out-line">
                    <p class="ft-16 ft-color-grey" >Location ID</p>
                    <h1 class="ft-color-black">234834852</h1>
                </div>                
                <div class="col-md-3 out-line">
                    <p class="ft-16 ft-color-grey" >Phone</p>
                    <h3 class="ft-color-black">84318355214523</h3>
                </div>
            </div>

            <div class="row out-line mt-3">
                <div class="col-md-8">
                    <div class="tab">
                        <button class="tablinks active" onclick="openCity(event, 'Ground')">Ground</button>
                        <button class="tablinks" onclick="openCity(event, '1st')">1st floor</button>
                        <button class="tablinks" onclick="openCity(event, '2nd')">2nd floor</button>
                        <button class="tablinks" onclick="openCity(event, '3rd')">3rd floor</button>
                        <button class="tablinks" onclick="openCity(event, '4th')">4th floor</button>
                    </div>

                    <div id="Ground" class="tabcontent" style="display: block;">
                        <h3>Ground</h3>
                        <img src="images/store-details/Screenshot_5.png" style="width: 50%;" />
                    </div>

                    <div id="1st" class="tabcontent">
                        <h3>1st floor</h3>
                        <img src="images/store-details/Screenshot_1.png" style="width: 50%;" />
                    </div>

                    <div id="2nd" class="tabcontent">
                        <h3>2nd floor</h3>
                        <img src="images/store-details/Screenshot_2.png" style="width: 50%;" />
                    </div>

                    
                    <div id="3rd" class="tabcontent">
                        <h3>3rd floor</h3>
                        <img src="images/store-details/Screenshot_3.png" style="width: 50%;" />
                    </div>

                    
                    <div id="4th" class="tabcontent">
                        <h3>4th floor</h3>
                        <img src="images/store-details/Screenshot_4.png" style="width: 50%;" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column">
                        <h1 class="ft-color-black ft-bold" style="padding-bottom: 10px; border-bottom: 1px solid #ECEDEF; ">Camera status</h1>

                        <a href="{{ route('entrance') }}" class="d-flex justify-content-between align-items-center camera-status">
                            <div class="d-flex align-items-center">
                                <img src="images/source_img/video-camera.svg" width=25 />
                                <div class="d-flex flex-column ml-3">
                                    <p class="ft-color-grey ft-18">Entrance 1</p>
                                    <p class="ft-16 ft-color-grey">3 cameras </p>
                                </div>
                            </div>
                            <div class=""><p class="filterbytag-danger-p">2</p></div>
                        </a>

                        <div class="d-flex justify-content-between align-items-center camera-status">
                            <div class="d-flex align-items-center">
                                <img src="images/source_img/video-camera.svg" width=25 />
                                <div class="d-flex flex-column ml-3">
                                    <p class="ft-color-grey ft-18">Entrance 2</p>
                                    <p class="ft-16 ft-color-grey">4 cameras </p>
                                </div>
                            </div>
                            <div class=""><p class="filterbytag-p">2</p></div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center camera-status">
                            <div class="d-flex align-items-center">
                                <img src="images/source_img/video-camera.svg" width=25 />
                                <div class="d-flex flex-column ml-3">
                                    <p class="ft-color-grey ft-18">Emerggency Exit</p>
                                    <p class="ft-16 ft-color-grey">3 cameras </p>
                                </div>
                            </div>
                            <div class=""><p class="filterbytag-p">2</p></div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center camera-status">
                            <div class="d-flex align-items-center">
                                <img src="images/source_img/video-camera.svg" width=25 />
                                <div class="d-flex flex-column ml-3">
                                    <p class="ft-color-grey ft-18">Goods Entrance</p>
                                    <p class="ft-16 ft-color-grey">6 cameras </p>
                                </div>
                            </div>
                            <div class=""><p class="filterbytag-p">2</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row out-line mt-3">
                <div class="table-responsive p-3">
                    <h1 class="ft-color-black ft-bold">Cameras</h1>
                    
                </div>
            </div> -->
            <div class="row out-line mt-3">
                <!--begin::Table container-->
                <div class="table-responsive p-3">
                    <h1 class="ft-color-black ft-bold">Alerts</h1>
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th class="w-25px">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" style="position : relative"/>
                                    </div>
                                </th>
                                <th class="min-w-200px">Title</th>
                                <th class="min-w-150px">Content</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        Warning
                                    </div>
                                </td>
                                <td>
                                    This is alert for wrong person
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>
                                    Error
                                </td>
                                <td>
                                    This is alert for very wrong person
                                </td>
                            </tr>
                            
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_extend')
<script type="text/javascript" src="{{ asset('js/store-detail.js') }}"></script>




@endsection