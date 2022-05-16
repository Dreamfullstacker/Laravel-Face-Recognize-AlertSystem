@extends('layouts.dashboard_app1')
@section('styles')
<link href="{{ asset('css/totalmatch.css') }}" rel="stylesheet" type="text/css">
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
            <div class="d-flex p-3 justify-content-between align-items-center" >
                <div class="d-flex align-items-center">
                    <p class="ft-15 ft-color-grey">FILTER CRITERIA</p>
                </div>
                <a href="#">
                    <img src="images/source_img/three-dots.svg" width=20 height=20 />
                </a>
            </div>
            <div class="d-flex p-3 align-items-center">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1" class="ft-18 ft-color-grey ft-bold ml-2"> Filter 1</label><br>
            </div>
            <div class="d-flex p-3 align-items-center">
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Bike2">
                <label for="vehicle2" class="ft-18 ft-color-grey ft-bold ml-2"> Filter 2</label><br>
            </div>
            <div class="d-flex p-3 align-items-center">
                <input type="checkbox" id="vehicle3" name="vehicle3" value="Bike3">
                <label for="vehicle3" class="ft-18 ft-color-grey ft-bold ml-2"> Filter 3</label><br>
            </div>
            <div class="d-flex p-3 align-items-center">
                <input type="checkbox" id="vehicle4" name="vehicle4" value="Bike">
                <label for="vehicle4" class="ft-18 ft-color-grey ft-bold ml-2"> Filter 4</label><br>
            </div>
            <div class="d-flex p-3 align-items-center">
                <input type="checkbox" id="vehicle5" name="vehicle5" value="Bike">
                <label for="vehicle5" class="ft-18 ft-color-grey ft-bold ml-2"> Filter 5</label><br>
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
            </div>
            <div class="d-flex p-3 justify-content-between" >
                <a class="d-flex align-items-center" href="#" >
                    <p class="ft-25 ft-color-grey">#</p>
                    <p class="ft-20 ft-color-grey ft-bold">Knife</p>
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

                <div class="col-lg-5 tm-switch-pan m-3">
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


                <div class="col-lg-5 m-3">
                    <div class="row justify-content-end">
                        <a href="#" class="d-flex align-items-center" onclick="alert('this function will come soon');">
                            <img src="images/source_img/three-line-dots.svg" width=20 height=20 />
                            <p class="ft-18 ft-color-grey"> Manage </p>
                        </a>
                        <a href="#" class="d-flex align-items-center ml-3" onclick="alert('this function will come soon');">
                            <img src="images/source_img/app-apps-applications-tiles-svgrepo-com.svg" width=20 height=20 />
                            <p class="ft-18 ft-color-grey"> Add New </p>
                        </a>
                    </div>
                </div>

            </div>
            
            <div class="row justify-content-between">
                <div class=" m-3">
                    <h4 class="ft-color-black ft-bold ">Manage Stores</h4>
                    <p class="ft-16 ft-color-grey" >Manage your stores</p>
                </div>
                <div class="m-3">
                    <select class="items-per-page" id="items_per_page" onchange="itemsPerPage()">
                        <option value="16">16 items per page</option>
                        <option value="12" selected>12 items per page</option>
                        <option value="9">9 items per page</option>
                        <option value="6">6 items per page</option>
                        <option value="4">4 items per page</option>
                    </select>
                </div>
            </div>
            
            <div class="row" id="store_images_albumn" style="height: calc(100vh - 280px); overflow: scroll; ">
                
            </div>

            <div class="row justify-content-between">
                <div  class="d-flex">
                    <a class="page-open" onclick="openfirstpage();">
                        <img src="images/source_img/double-left-arrows.svg" width=20 />
                    </a>
                    <a class="page-open" onclick="openprevpage();">
                        <img src="images/source_img/left-arrow.svg" width=20 />
                    </a>
                    <div class="d-flex" id="page-numbers"></div>
                    <a class="page-open" onclick="opennextpage();">
                        <img src="images/source_img/right-arrow.svg" width=20 />
                    </a>
                    <a class="page-open" onclick="openlastpage();">
                        <img src="images/source_img/double-left-arrows.svg" style="transform: rotate(180deg);" width=20 />
                    </a>
                </div>
                <div class="d-flex">
                    <p class="ft-16 ft-color-grey " id="page-detail-info"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_extend')
<script type="text/javascript" src="{{ asset('js/manage.js') }}"></script>
@endsection