@extends('layouts.dashboard_app1')
@section('styles')
<link href="{{ asset('css/totalmatch.css') }}" rel="stylesheet" type="text/css">
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
                <div class="d-flex p-3 justify-content-between align-items-center" >
                    <div class="d-flex align-items-center">
                        <p class="ft-15 ft-color-grey">FILTER CRITERIA</p>
                    </div>
                    <a href="#">
                        <img src="images/source_img/three-dots.svg" width=20 height=20 />
                    </a>
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
                    <h2 class="ft-color-grey ft-bold"> Persons of interest </h2>
                </div>
                <div class="col-lg-6 justify-content-end">
                    <img class="totalmatchimg" src="images/source_img/search.svg" width=20 height=20 />
                    <input class="totalmatchinput" type="text" placeholder="Type something to search..." />
                </div>
            </div>
            <div class="row mt-3 justify-content-between">

                <div class="col-lg-6 tm-switch-pan m-3">
                    <a class="tm-switch tab " href="{{ route('poi') }}">
                        <p class="ft-18 ft-color-grey ft-bold">Analysis</p>
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
                        <a href="#" class="d-flex align-items-center ml-3 savebtn" onclick="alert('this function will come soon');">
                            <p class="ft-18 ft-color-green"> Save </p>
                        </a>
                        <a href="#" class="d-flex align-items-center ml-3 activebtn" onclick="alert('this function will come soon');">
                            <p class="ft-18 ft-color-green"> Save & Activate </p>
                        </a>
                    </div>
                </div>

            </div>
            
            <div class="row justify-content-between">
                <div class=" m-3">
                    <h4 class="ft-color-black ft-bold ">Add new POI</h4>
                    <p class="ft-16 ft-color-grey" >Add a new POI to the database</p>
                </div>
            </div>

            <div class="row m-3 justify-content-between">
                <div class="col-lg-7">
                    <h4 class="ft-color-black ft-bold ">Reference number</h4>
                    <input class="totalmatchinput" type="number" placeholder="Type something to search..." required/>
                </div>
                <div class="col-lg-4">
                    <h4 class="ft-color-black ft-bold">
                         Add enrolment images
                    </h4>
                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
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
                        <!--end::User-->
                    </div>
                </div>
            </div>
            <div class="row m-3 justify-content-between">
                <div class="col-lg-8">
                    <h4 class="ft-color-black ft-bold ">Full name if required</h4>
                    <div class="row">
                        <div class="col-lg-5">
                            <input class="nameinput" type="text"  placeholder="First Name" required/>
                        </div>
                        <div class="col-lg-5">
                            <input class="nameinput" type="text"  placeholder="Last Name" required/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="ft-color-black ft-bold ">Select image type</h4>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="radioinput" type="radio" name="img" /> 
                                </div>
                                <div class="col-lg-6 p-0">
                                    <span>Image</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="radioinput" type="radio" name="img" checked /> 
                                </div>
                                <div class="col-lg-6 p-0">
                                    <span>Video</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="row">
                                <div class="col-lg-5">
                                    <input class="radioinput" type="radio" name="img" /> 
                                </div>
                                <div class="col-lg-7 p-0">
                                    <span>CCTV video</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="row m-3 justify-content-between">
                <div class="col-lg-8">
                    <h4 class="ft-color-black ft-bold ">Select gender</h4>
                    <div class="row">
                    <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="radioinput" type="radio" name="gender" /> 
                                </div>
                                <div class="col-lg-6 p-0">
                                    <span>Male</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="radioinput" type="radio" name="gender" checked/> 
                                </div>
                                <div class="col-lg-6 p-0">
                                    <span>Female</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="radioinput" type="radio" name="gender" /> 
                                </div>
                                <div class="col-lg-6 p-0">
                                    <span>None-binary</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="ft-color-black ft-bold ">Add stores to monitor</h4>
                    <div class="row">
                         <div class="col-lg-6">
                            <input class="radioinput" type="checkbox" checked /> 
                        </div>
                        <div class="col-lg-6 p-0">
                            <span>All Stores</span>
                        </div>
                    </div>
                </div>
            </div>

           
            <div class="row m-3 justify-content-between">
                <div class="col-lg-8">
                    <h4 class="ft-color-black ft-bold ">Address</h4>
                    <div class="row">
                        <div class="col-lg-4">
                            <select value="Cumbria" class="nameinput">
                                <option>Cumbria</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select value="Knutsford" disabled class="nameinput">
                                <option>Knutsford</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select value="WA16 QQB" disabled class="nameinput">
                                <option>WA16 QQB</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <input class="nameinput" type="text" placeholder="Street" /> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <select name="sel" class="nameinput">
                            <option value="">Or select....</option>
                            <option value="barrowford">Barrowford</option>
                            <option value="burscough">Burscough</option>
                            <option value="carnforth">Carnforth</option>
                            <option value="chorley">Chorley</option>
                            <option value="chitheroe">Chitheroe</option>
                            <option value="fulwood">Fulwood</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row m-3 justify-content-between">
                <div class="col-lg-8">
                    <h4 class="ft-color-black ft-bold ">Start typing to tag with threat types</h4>
                    <div class="row ml-1">
                        <input class="nameinput" type="text"  placeholder="Enter tag..."/>
                    </div>
                </div>
            </div>

            <div class="row m-3 justify-content-between">
                <div class="col-lg-8">
                    <h4 class="ft-color-black ft-bold ">Status of POI</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- <input class="nameinput" type="text" /> -->
                            <div class="row customstate">
                                <div class="col-lg-6">
                                    <input class="radioinput" type="radio" name="state" checked/> 
                                </div>
                                <div class="col-lg-6 p-0">
                                    <span>Known</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row customstate">
                                <div class="col-lg-6">
                                    <input class="radioinput" type="radio" name="state" /> 
                                </div>
                                <div class="col-lg-6 p-0">
                                    <span>Offender</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-6">
                            <div class="row customstate">
                                <div class="col-lg-6">
                                    <input class="radioinput" type="radio" name="state" /> 
                                </div>
                                <div class="col-lg-6 p-0">
                                    <span>Previous problems</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row customstate">
                                <div class="col-lg-6">
                                    <input class="radioinput" type="radio" name="state" /> 
                                </div>
                                <div class="col-lg-6 p-0">
                                    <span>Other thing</span>
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
<script type="text/javascript" src="{{ asset('js/poinew.js') }}"></script>
@endsection