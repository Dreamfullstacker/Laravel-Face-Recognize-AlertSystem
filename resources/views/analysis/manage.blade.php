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
                <div class="d-flex p-3 align-items-center">
                    <input type="radio" id="vehicle1" name="sex" value="All">
                    <label for="vehicle1" class="ft-18 ft-color-grey ft-bold ml-2"> All</label><br>
                </div>
                <div class="d-flex p-3 align-items-center">
                    <input type="radio" id="vehicle2" name="sex" value="Male">
                    <label for="vehicle2" class="ft-18 ft-color-grey ft-bold ml-2"> Male</label><br>
                </div>
                <div class="d-flex p-3 align-items-center">
                    <input type="radio" id="vehicle3" name="sex" value="Female">
                    <label for="vehicle3" class="ft-18 ft-color-grey ft-bold ml-2"> Female</label><br>
                </div>

                <div class="d-flex p-3 justify-content-between align-items-center" >
                    <div class="d-flex align-items-center">
                        <p class="ft-15 ft-color-grey">THREAT LEVEL</p>
                    </div>
                    <a href="#">
                        <img src="images/source_img/three-dots.svg" width=20 height=20 />
                    </a>
                </div>
                <div class="d-flex p-3 justify-content-between" >
                    <a class="d-flex align-items-center checked" href="#" >
                        <img src="images/source_img/fire1.svg" width="20" height="20">
                    </a>
                    <a class="d-flex align-items-center checked" href="#" >
                        <img src="images/source_img/fire1.svg" width="20" height="20">
                    </a>
                    <a class="d-flex align-items-center checked" href="#" >
                        <img src="images/source_img/fire1.svg" width="20" height="20">
                    </a>
                    <a class="d-flex align-items-center checked" href="#" >
                        <img src="images/source_img/fire1.svg" width="20" height="20">
                    </a>
                    <a class="d-flex align-items-center checked" href="#" >
                        <img src="images/source_img/fire1.svg" width="20" height="20">
                    </a>
                </div>
                <div class="d-flex p-3 justify-content-between align-items-center" >
                    <div class="d-flex align-items-center">
                        <p class="ft-15 ft-color-grey">MATCH FREQUENCY</p>
                    </div>
                    <a href="#">
                        <img src="images/source_img/three-dots.svg" width=20 height=20 />
                    </a>
                </div>
                <div class="d-flex p-3 justify-content-between" >
                    <div class="d-flex align-items-center">
                        <p class="ft-15 ft-color-grey">FILTER BY TAG</p>
                    </div>
                    <a href="#">
                        <img src="images/source_img/three-dots.svg" width=20 height=20 />
                    </a>
                </div>
                <div class="d-flex p-3 justify-content-between" >
                    <a class="d-flex align-items-center" href="#" >
                        <p class="ft-25 ft-color-grey">#</p>
                        <p class="ft-20 ft-color-grey ft-bold">VerbalAbuse</p>
                    </a>
                    <a href="#">
                        <p class="filterbytag-p">5</p>
                    </a>
                </div>
                <div class="d-flex p-3 justify-content-between" >
                    <a class="d-flex align-items-center" href="#" >
                        <p class="ft-25 ft-color-grey">#</p>
                        <p class="ft-20 ft-color-grey ft-bold">Knife</p>
                    </a>
                    <a href="#">
                        <p class="filterbytag-p">5</p>
                    </a>
                </div>
                <div class="d-flex p-3 justify-content-between" >
                    <a class="d-flex align-items-center" href="#" >
                        <p class="ft-25 ft-color-grey">#</p>
                        <p class="ft-20 ft-color-grey ft-bold">Violent</p>
                    </a>
                    <a href="#">
                        <p class="filterbytag-p">5</p>
                    </a>
                </div>
                <div class="d-flex p-3 justify-content-between" >
                    <a class="d-flex align-items-center" href="#" >
                        <p class="ft-25 ft-color-grey">#</p>
                        <p class="ft-20 ft-color-grey ft-bold">Theft</p>
                    </a>
                    <a href="#">
                        <p class="filterbytag-p">5</p>
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

                <div class="col-lg-5 tm-switch-pan m-3">
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


                <div class="col-lg-5 m-3">
                    <div class="row justify-content-end">
                        <a href="#" class="d-flex align-items-center" onclick="alert('this function will come soon');">
                            <img src="images/source_img/three-line-dots.svg" width=20 height=20 />
                            <p class="ft-18 ft-color-grey"> Table View </p>
                        </a>
                        <a href="#" class="d-flex align-items-center ml-3" onclick="alert('this function will come soon');">
                            <img src="images/source_img/app-apps-applications-tiles-svgrepo-com.svg" width=20 height=20 />
                            <p class="ft-18 ft-color-grey"> Grid View </p>
                        </a>
                    </div>
                </div>

            </div>
            
            <div class="row justify-content-between">
                <div class=" m-3">
                    <h4 class="ft-color-black ft-bold ">Manage</h4>
                    <p class="ft-16 ft-color-grey" >Search all active POIs</p>
                </div>
                <div class="m-3">
                    <select class="items-per-page" id="items_per_page" onchange="itemsPerPage()">
                        <option value="" selected>Action</option>
                        <option value="">12 items per page</option>
                        <option value="9">9 items per page</option>
                        <option value="6">6 items per page</option>
                        <option value="4">4 items per page</option>
                    </select>    
                    <select class="items-per-page" id="items_per_page" onchange="itemsPerPage()">
                        <option value="16">16 items per page</option>
                        <option value="12" selected>12 items per page</option>
                        <option value="9">9 items per page</option>
                        <option value="6">6 items per page</option>
                        <option value="4">4 items per page</option>
                    </select>
                </div>
            </div>
            
            <div class="row" style="height: calc(100vh - 100px); overflow: scroll; " data-kt-menu-dismiss="true">
                    <!--begin::Body-->
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class="w-25px">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
                                                
                                            </div>
                                            <span class="ml-5">
                                                Name
                                            </span>
                                        </th>
                                        <!-- <th class="ps-4 min-w-300px rounded-start"></th> -->
                                        <th class="min-w-125px">Matchs</th>
                                        <th class="min-w-125px">Enrolled</th>
                                        <th class="min-w-200px">Biodotrix</th>
                                        <th class="min-w-150px">Threat level</th>
                                        <th class="min-w-200px text-end rounded-end">Threat types</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->

                                <!--begin::Table body-->
                                <tbody>
                                    @foreach($tableRows as $row)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="symbol symbol-50px me-5">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                                                    </div>
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
                                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">01-03-21</a>
                                        </td>
                                        <td>
                                            <a href="#" class="fw-bolder text-hover-primary d-block mb-1 fs-6 text-success">0.2993</a>
                                        </td>
                                        <td>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <img src="images/source_img/fire1.svg" width="20" height="20">
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <img src="images/source_img/fire1.svg" width="20" height="20">
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <img src="images/source_img/fire1.svg" width="20" height="20">
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <img src="images/source_img/fire1.svg" width="20" height="20">
                                                </div>
                                                <div class="rating-label me-2">
                                                    <img src="images/source_img/fire1.svg" width="20" height="20">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn-sm px-4 me-2">
                                                <span class="badge badge-light-success bg-success">
                                                        Kinfe
                                                    </span>
                                            </a>
                                            <a href="#" class="btn-sm px-4 me-2">
                                                <span class="badge badge-light-success bg-danger">
                                                    Violent
                                                </span>
                                            </a>
                                            <a href="#" class="btn-sm px-4 me-2">
                                                <span class="badge badge-light-success bg-primary">
                                                VerbalAbuse
                                                    </span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->

                            </table>
                            <!--end::Table-->
                <!--endW::Tables Widget 1-->
                    <div class="container footerend">
                        <div class="ml-4 first">
                                << &nbsp; < &nbsp; 1 &nbsp; 2 &nbsp;  3 &nbsp; > &nbsp;   >>
                        </div>
                        <div class="mr-4 second">
                            1-12 out of 56 items
                        </div>
                    </div>
            </div>
            
        </div>
        
    </div>
</div>
@endsection

@section('scripts_extend')
@endsection