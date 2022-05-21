@extends('layouts.dashboard_app')
@section('styles')
<link href="{{ asset('css/verify.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css">

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
                <div class="col-12 col-md-12 col-lg-4">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <!-- <div class="preview-zone hidden">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                    <div><b>Preview</b></div>
                                    </div>
                                    <div class="box-body"></div>
                                </div>
                            </div> -->
                            <div class="dropzone-wrapper">
                                <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p>Drag & drop a jpeg or png file here, or click to select the file</p>
                                </div>
                                <input type="file" name="img_logo" class="dropzone">
                            </div>
                        </div>
                    </form>
                    <div class="navigation border-none">
                        <div class="tab" role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#person1avatar" aria-controls="home" role="tab" data-toggle="tab">PHOTO</a></li>
                                <li role="presentation"><a href="#person1info" aria-controls="profile" role="tab" data-toggle="tab">DETAILS</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade in active show" id="person1avatar">
                                    <img class="identify_avatar" src="images/users/100_4.jpg" />
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="person1info">
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Photo Quality</p>
                                        <p>0.99970</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Has Mask</p>
                                        <p>No</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Has Glasses</p>
                                        <p>No</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Yaw</p>
                                        <p>35.25814</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Pitch</p>
                                        <p>16.66146</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Roll</p>
                                        <p>-7.80174</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3">
                                        <p>Eye Distance</p>
                                        <p>121</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success identify-btn"><img class="support-img mx-3 high-lignt-icon" src="images/source_img/flashlight-48.png" />TOGGLE HIGHLIGHT</button>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="row d-flex justify-content-center">
                        <div class="col-9">
                            <div class="d-flex justify-content-center">
                                <div class="percentage_back d-flex justify-content-center">
                                    <div class="percentage_main text-center">
                                        <p class="ft-25-b p-0 m-0 pt-5">Confidence</p>
                                        <p class="ft-25-b">99.3%</p>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success verify_btn my-5">VERIFY</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <!-- <div class="preview-zone hidden">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                    <div><b>Preview</b></div>
                                    </div>
                                    <div class="box-body"></div>
                                </div>
                            </div> -->
                            <div class="dropzone-wrapper">
                                <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p>Drag & drop a jpeg or png file here, or click to select the file</p>
                                </div>
                                <input type="file" name="img_logo" class="dropzone">
                            </div>
                        </div>
                    </form>
                    <div class="navigation border-none">
                        <div class="tab" role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#person2avatar" aria-controls="home" role="tab" data-toggle="tab">PHOTO</a></li>
                                <li role="presentation"><a href="#person2info" aria-controls="profile" role="tab" data-toggle="tab">DETAILS</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade in active show" id="person2avatar">
                                    <img class="identify_avatar" src="images/users/100_4.jpg" />
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="person2info">
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Photo Quality</p>
                                        <p>0.99970</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Has Mask</p>
                                        <p>No</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Has Glasses</p>
                                        <p>No</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Yaw</p>
                                        <p>35.25814</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Pitch</p>
                                        <p>16.66146</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 divider">
                                        <p>Roll</p>
                                        <p>-7.80174</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-3">
                                        <p>Eye Distance</p>
                                        <p>121</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn identify-btn"><img class="support-img mx-3 high-lignt-icon" src="images/source_img/flashlight-48.png" />TOGGLE HIGHLIGHT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_extend')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script type="text/javascript" src="{{ asset('js/verify.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/widgets.js') }}"></script>

@endsection