@extends('layouts.dashboard_app')
@section('styles')
<link href="{{ asset('css/support.css') }}" rel="stylesheet" type="text/css">
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
            <div class="row m-0 p-0 mx-1 out-line">
            <div class="navigation border-none" style="width : 100%">
                <h4>Support</h4>
                <div class="tab" role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#support_ticket" aria-controls="home" role="tab" data-toggle="tab">Raise a Support Ticket</a></li>
                        <li role="presentation"><a href="#error_log" aria-controls="profile" role="tab" data-toggle="tab">Error Logs</a></li>
                        <li role="presentation"><a href="#audit_trail" aria-controls="profile" role="tab" data-toggle="tab">Audit Trail</a></li>
                        <li role="presentation"><a href="#faq" aria-controls="profile" role="tab" data-toggle="tab">FAQs</a></li>
                        <li role="presentation"><a href="#tool" aria-controls="profile" role="tab" data-toggle="tab">Tool</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fade in active show" id="support_ticket">
                            <div class="row d-flex justify-content-between">
                                <div class="col-md-2 ticket ml-5 py-5">
                                    <p class="ft-20 text-center">Basic</p>
                                    <p class="ft-25-b text-center py-5">$</p>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-success">Downgrade</button>
                                    </div>
                                </div>
                                <div class="col-md-2 ticket py-5">
                                    <p class="ft-20 text-center">Plus</p>
                                    <p class="ft-25-b text-center py-5">$</p>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-primary">Current</button>
                                    </div>
                                </div>
                                <div class="col-md-2 ticket py-5">
                                    <p class="ft-20 text-center">Professional</p>
                                    <p class="ft-25-b text-center py-5">$</p>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-success">Upgrade</button>
                                    </div>
                                </div>
                                <div class="col-md-2 ticket mr-5 py-5">
                                    <p class="ft-20 text-center">Premier</p>
                                    <p class="ft-25-b text-center py-5">$</p>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-success">Upgrade</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="error_log">
                            
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="audit_trail">
                            
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="faq">
                            <button class="accordion">Section 1</button>
                            <div class="panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <button class="accordion">Section 2</button>
                            <div class="panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <button class="accordion">Section 3</button>
                            <div class="panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tool">
                            <div class="text-center">
                                <h4>Calculator for hardware</h4>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Camera Height</label>
                                        <input type="text" class="form-control form-control-solid" />
                                    </div>
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Camera Distance</label>
                                        <input type="text" class="form-control form-control-solid" />
                                    </div>
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Camera Angle</label>
                                        <input type="text" class="form-control form-control-solid" />
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
</div>
@endsection

@section('scripts_extend')
<!-- for line & curve chat -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script type="text/javascript" src="{{ asset('js/plugins.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/widgets.js') }}"></script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
        console.log(acc);
    acc[i].addEventListener("click", myFunction);
    }
    function myFunction() {
        console.log("acc");

this.classList.toggle("accordionactive");
var panel = this.nextElementSibling;
if (panel.style.maxHeight) {
panel.style.maxHeight = null;
} else {
panel.style.maxHeight = panel.scrollHeight + "px";
} 
}
</script>
@endsection