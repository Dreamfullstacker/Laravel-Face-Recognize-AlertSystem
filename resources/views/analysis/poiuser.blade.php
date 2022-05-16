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
            <div class="row mt-3">
                <div class="col-lg-6">
                    <h2 class="ft-color-grey ft-bold"> Manages Users </h2>
                </div>
                <div class="col-lg-6 justify-content-end">
                    <img class="totalmatchimg" src="images/source_img/search.svg" width=20 height=20 />
                    <input class="totalmatchinput" type="text" placeholder="Type something to search..." />
                </div>
            </div>
            <div class="row mt-3 justify-content-between">

                <div class="col-lg-6 tm-switch-pan m-3">
                    <a class="tm-switch tab " href="{{ route('poi-manage') }}">
                        <p class="ft-18 ft-color-grey ft-bold">Manage</p>
                    </a>
                    <a class="tm-switch tab " href="{{ route('poi-new') }}">
                        <p class="ft-18 ft-color-grey ft-bold">Add New</p>
                    </a>
                </div>


                <div class="col-lg-6 m-3">

                    <div class="row justify-content-end">
                        <a href="#" class="d-flex align-items-center ml-3 savebtn" onclick="alert('this function will come soon');">
                            <p class="ft-18 ft-color-green"> Save </p>
                        </a>
                        <a href="#" class="d-flex align-items-center ml-3 activebtn" onclick="alert('this function will come soon');">
                            <p class="ft-18 ft-color-green"> Save & Activate </p>
                        </a>
                    </div>
                </div>

            </div>
            
            <div class="row m-3 justify-content-between">
                <div class="col-lg-7">
                    <h4 class="ft-color-black ft-bold ">User Information</h4>
                    <p>
                        Make change and then save
                    </p>
                    <div style="height:300px; text-align:center;padding-top: 150px;">
                        <p>Log of events ? <p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h4 class="ft-color-black ft-bold">
                         Contact Information
                    </h4>
                    <div class="symbol-group symbol-hover  flex-nowrap flex-grow-1 min-w-100px">
																		<!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                            <img src="{{url('/images/users/100_4.jpg')}}" class="img-circle" alt="img" />
                            
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="editbtn">
                            <span class="badge badge-primary editbtn " >
                                <i class="bi bi-pencil-fill fs-5"></i>    
                            </sapn>    
                        </div>
                            <p>
                            <strong>Will Walters<br/><strong>
                                    Administrator
                            </p>    
                        <!--end::User-->
                    </div>
                    <div class="row">
                        <div class="col-lg-3" style="border:1px solid grey;text-align:center;">
                            <a href="#" ><i class="bi bi-telephone-fill fs-5 "></i>
                        </div>

                        <div class="col-lg-3 ml-2" style="border:1px solid grey;text-align:center;">
                            <a href="#" ><i class="bi bi-messenger fs-5"></i>
                        </div>
                    </div>
                    <div class="row basefont">
                        Username
                    </div>
                    <div class="row">
                        @willwaters                        
                    </div>
                    <div class="row basefont">
                        Mobile
                    </div>
                    <div class="row basefont">
                        077 445567876
                    </div>
                    <div class="row basefont">
                        NOTES
                    </div>
                    <div class="row basefont">
                        Will is in charge
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-lg-6 basefont">
                            <i class="bi bi-alarm-fill"> </i>  Notification
                        </div>
                        <div class="col-lg-6">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 basefont">
                        <img src="images/source_img/fire1.svg" width="20" height="20">  Starred
                        </div>
                        <div class="col-lg-6">
                            <span class="badge badge-primary">14</span>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-lg-8">
                            Roles
                        </div>
                        <div class="col-lg-4">
                            <a href="#">Add new+
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <input type="checkbox" class="radioinput" checked/> 
                        </div>
                        <div class="col-lg-6 p-0">
                            Superadmin
                        </div>
                        
                    </div>
                    <div class="row">
                    <div class="col-lg-2">
                            <input type="checkbox" class="radioinput"/> 
                        </div>
                        <div class="col-lg- p-0">
                            <span>Admin</span>
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