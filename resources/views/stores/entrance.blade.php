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
            <div class="bg-white mt-5 p-3">
                <div class="d-flex mb-3">
                    <img class="store-img" src="images/source_img/building.png" width=50 height=50 />
                    <div class="ml-3">
                        <p class="ft-16 ft-bold">Store systems status</p>
                        <p class="ft-16 ft-color-grey">Last updated 1 minutes ago </p>
                    </div>
                </div>
                <div class="d-flex">
                    <p class="ft-color-blue ft-16 ft-bold">FAICEALERT</p>
                    <p class="ft-color-grey ft-16 ft-bold">server</p>
                    <img src="images/source_img/lightning.svg" width=25 height=25 />
                    <p class="ft-color-green ft-bold ft-16">Online </p>
                </div>
                <div class="d-flex">
                    <div class="router-online">
                        <img src="images/source_img/lightning.svg" width=25 height=25 >
                        <p class="ft-color-green ft-14">Router online</p>
                    </div>
                    <div class="ups-offline ml-3">
                        <img src="images/source_img/lightning-slash.svg" width=25 height=25 >
                        <p class="ft-color-red ft-14" >UPS offline</p>
                    </div>
                </div>
                <p class="ft-color-grey ft-16 mt-3">Lorem ipsum dolor sit amet,consectetu adipicing elit, Aliquam sit amet venenatis sapien.</p>
            </div>
            <div class="key-store-contacts mt-5" >

                <div class="d-flex justify-content-between mb-3">
                    <p class="ft-18 ft-color-grey" >KEY STORE CONTACTS</p>
                    <a href="#">
                        <img src="images/source_img/three-dots.svg" width=25 height=25  />
                    </a>
                </div>
                <div class="d-flex flex-column mt-3">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <img class="keystore-avatar" src="images/users/100_4.jpg" />
                            <div class="ml-3">
                                <p class="ft-color-grey ft-16 ft-bold">John Smitth</p>
                                <p class="ft-color-grey ft-16">Store Manager</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-end">
                            <p class="ft-color-green ft-14">On duty</p>
                            <img class="mr-2" src="images/source_img/check-mark-green.svg" width=20 height=20 />
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="phone-info">
                            <img src="images/source_img/phone.svg"  width=20 height=20 />
                            <p class="ft-color-grey ft-14">17756 324567</p>
                        </div>
                        <div class="email-info ml-3">
                            <img src="images/source_img/email-box-green.svg"  width=20 height=20 />
                            <p class="ft-color-green ft-14">Send email</p>
                        </div>
                    </div>
                </div>

                
                <div class="d-flex flex-column mt-3">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <img class="keystore-avatar" src="images/users/100_6.jpg" />
                            <div class="ml-3">
                                <p class="ft-color-grey ft-16 ft-bold">William Jones</p>
                                <p class="ft-color-grey ft-16">Assistant Manager</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-end">
                            <p class="ft-color-green ft-14">On duty</p>
                            <img class="mr-2" src="images/source_img/check-mark-green.svg" width=20 height=20 />
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="phone-info">
                            <img src="images/source_img/phone.svg"  width=20 height=20 />
                            <p class="ft-color-grey ft-14">17756 324567</p>
                        </div>
                        <div class="email-info ml-3">
                            <img src="images/source_img/email-box-green.svg"  width=20 height=20 />
                            <p class="ft-color-green ft-14">Send email</p>
                        </div>
                    </div>
                </div>

                
                <div class="d-flex flex-column mt-3">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <img class="keystore-avatar" src="images/users/100_12.jpg" />
                            <div class="ml-3">
                                <p class="ft-color-grey ft-16 ft-bold">Sally Cinnamon</p>
                                <p class="ft-color-grey ft-16">Security Supervisor</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-end">
                            <p class="ft-color-red ft-14">Away</p>
                            <img class="mr-2" src="images/source_img/cross-mark.svg" width=20 height=20 />
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="phone-info">
                            <img src="images/source_img/phone.svg"  width=20 height=20 />
                            <p class="ft-color-grey ft-14">17756 324567</p>
                        </div>
                        <div class="email-info ml-3">
                            <img src="images/source_img/email-box-green.svg"  width=20 height=20 />
                            <p class="ft-color-green ft-14">Send email</p>
                        </div>
                    </div>
                </div>

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
                    <h1 class="ft-color-grey ft-bold"> Stores </h1>
                </div>
                <div class="col-lg-6 justify-content-end">
                    <img class="totalmatchimg" src="images/source_img/search.svg" width=20 height=20 />
                    <input class="totalmatchinput" type="text" placeholder="Type something to search..." />
                </div>
            </div>
            <div class="row mt-3 justify-content-between">
                <div class="col-lg-6 tm-switch-pan m-3">
                    <a class="tm-switch" href="{{ route('stores') }}">
                        <p class="ft-18 ft-color-grey ft-bold">Analysis</p>
                    </a>
                    <a class="tm-switch active" href="{{ route('manage') }}">
                        <p class="ft-18 ft-color-grey ft-bold">Manage</p>
                    </a>
                    <a class="tm-switch" href="{{ route('total-matches') }}">
                        <p class="ft-18 ft-color-grey ft-bold">Add New</p>
                    </a>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class=" m-3">
                    <h2 class="ft-color-black ft-bold">Knutsford</h2>
                    <p class="ft-16 ft-color-grey">Stanley Road, Knutsford, Cheshire, WA16 OBS </p>
                </div>
                <div class="m-3">
                    <button class="btn case-file-btn" onclick="alert('this function will come soon');" >
                        <img src="images/source_img/settings.svg" width=20 height=20 style="margin-right: 5px;" /> Configure
                    </button>  
                    <button class="btn case-file-btn" onclick="alert('this function will come soon');" >
                        <img src="images/source_img/supermarket-basket.svg" width=20 height=20 style="margin-right: 5px;" /> Camera Browser
                    </button>                    
                </div>
            </div>

            <div class="row out-line m-3">
                <div class="col-md-3">
                    <div class="row">
                        <p class="ft-16 ft-color-grey">GROUP OF 6 CAMERAS</p>
                    </div>
                    <div class="row">
                        <h3 class="ft-color-black ft-bold">Entrance 1 </h3>
                    </div>
                    <div class="row justify-content-end align-items-center">
                        <p class="filterbytag-danger-p">2</p>
                        <a class="entrance-setting mr-3">
                            <img src="images/source_img/settings-grey.svg" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <img src="images/entrance/Screenshot_1.png" />
                        <div class="d-flex mt-3 ml-3">
                            <img src="images/source_img/play-green.svg" width=20 />
                            <p class="ft-color-grey ft-14"> OPERATIONAL </p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <img src="images/entrance/Screenshot_1.png" />
                        <div class="d-flex mt-3 ml-3">
                            <img src="images/source_img/play-red.svg" width=20 />
                            <p class="ft-color-grey ft-14"> OFFLINE </p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <img src="images/entrance/Screenshot_1.png" />
                        <div class="d-flex mt-3 ml-3">
                            <img src="images/source_img/play-green.svg" width=20 />
                            <p class="ft-color-grey ft-14"> OPERATIONAL </p> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row out-line m-3">
                <div class="col-md-3">
                    <div class="row">
                        <p class="ft-16 ft-color-grey">GROUP OF 6 CAMERAS</p>
                    </div>
                    <div class="row">
                        <h3 class="ft-color-black ft-bold">Entrance 1 </h3>
                    </div>
                    <div class="row justify-content-end align-items-center">
                        <p class="filterbytag-danger-p">2</p>
                        <a class="entrance-setting mr-3">
                            <img src="images/source_img/settings-grey.svg" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <img src="images/entrance/Screenshot_1.png" />
                        <div class="d-flex mt-3 ml-3">
                            <img src="images/source_img/play-green.svg" width=20 />
                            <p class="ft-color-grey ft-14"> OPERATIONAL </p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <img src="images/entrance/Screenshot_1.png" />
                        <div class="d-flex mt-3 ml-3">
                            <img src="images/source_img/play-red.svg" width=20 />
                            <p class="ft-color-grey ft-14"> OFFLINE </p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <img src="images/entrance/Screenshot_1.png" />
                        <div class="d-flex mt-3 ml-3">
                            <img src="images/source_img/play-green.svg" width=20 />
                            <p class="ft-color-grey ft-14"> OPERATIONAL </p> 
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="row out-line m-3">
                <div class="col-md-3">
                    <div class="row">
                        <p class="ft-16 ft-color-grey">GROUP OF 6 CAMERAS</p>
                    </div>
                    <div class="row">
                        <h3 class="ft-color-black ft-bold">Entrance 1 </h3>
                    </div>
                    <div class="row justify-content-end align-items-center">
                        <p class="filterbytag-danger-p">2</p>
                        <a class="entrance-setting mr-3">
                            <img src="images/source_img/settings-grey.svg" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <img src="images/entrance/Screenshot_1.png" />
                        <div class="d-flex mt-3 ml-3">
                            <img src="images/source_img/play-green.svg" width=20 />
                            <p class="ft-color-grey ft-14"> OPERATIONAL </p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <img src="images/entrance/Screenshot_1.png" />
                        <div class="d-flex mt-3 ml-3">
                            <img src="images/source_img/play-red.svg" width=20 />
                            <p class="ft-color-grey ft-14"> OFFLINE </p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <img src="images/entrance/Screenshot_1.png" />
                        <div class="d-flex mt-3 ml-3">
                            <img src="images/source_img/play-green.svg" width=20 />
                            <p class="ft-color-grey ft-14"> OPERATIONAL </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_extend')
<script type="text/javascript" src="{{ asset('js/store-detail.js') }}"></script>

<!-- for curve chat -->
<script type="text/javascript" src="{{ asset('js/plugins.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/widgets.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/curvechat_chartjs.js')}}"></script>




@endsection