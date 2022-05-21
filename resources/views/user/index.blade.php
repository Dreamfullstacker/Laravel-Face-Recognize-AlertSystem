@extends('layouts.dashboard_app')
@section('styles')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css">

@endsection
@section('content')
<?php
    // Table rows
    $tableRows = array(
        array(
            'image' => '100_4.jpg',
            'username' => 'AAA',
            'jobtitle' => 'AAAJob',
            'company' => 'TOSHIBA',
            'email' => 'AAA@gmail.com',
            'phone' => '123456789'
        ),

        array(
            'image' => '100_6.jpg',
            'username' => 'BBB',
            'jobtitle' => 'AAAJob',
            'company' => 'TOSHIBA',
            'email' => 'AAA@gmail.com',
            'phone' => '123456789'
        ),

        array(
            'image' => '100_12.jpg',
            'username' => 'AAA',
            'jobtitle' => 'AAAJob',
            'company' => 'TOSHIBA',
            'email' => 'AAA@gmail.com',
            'phone' => '123456789'
        ),
    );
?>
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
                            <div clamg class="support-img" src="images/source_img/comment.svg" />
                                <p>Edit Profile</p>
                            </div>
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-8 col-xl-9">
            <div class="row mx-2 out-line">
                <div class="col-12 col-md-12 p-0">
                    <div class="d-flex justify-content-between p-3">
                        <h1 style = "border : none;">Users</h1>
                        <div>
                            <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#kt_modal_1">Add New User</button>
                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add New User</h5>

                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <span class="svg-icon svg-icon-2x"></span>
                                            </div>
                                            <!--end::Close-->
                                        </div>

                                        <div class="modal-body">
                                            <div class="d-flex justify-content-center">
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="images/source_img/user.svg" alt="img" class="img-circle" style="width : 50px">
                                                </div> 
                                            </div>
                                            <div class="mb-10">
                                                <label for="exampleFormControlInput1" class="required form-label">User Name</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="Insert user name please..."/>
                                            </div>
                                            <div class="mb-10">
                                                <label for="exampleFormControlInput1" class="required form-label">Job Title</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="Insert job title please..."/>
                                            </div>
                                            <div class="mb-10">
                                                <label for="exampleFormControlInput1" class="required form-label">Company</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="Insert company name please..."/>
                                            </div>
                                            <div class="mb-10">
                                                <label for="exampleFormControlInput1" class="required form-label">Email</label>
                                                <input type="email" class="form-control form-control-solid" placeholder="Insert Email please"/>
                                            </div>
                                            <div class="mb-10">
                                                <label for="exampleFormControlInput1" class="required form-label">Phone</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="Insert phone number please"/>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bolder text-muted bg-light">
                            <th></th>
                            <th class="w-25px">User Name</th>
                            <!-- <th class="ps-4 min-w-300px rounded-start"></th> -->
                            <th class="min-w-125px">Job Title</th>
                            <th class="min-w-125px">Company</th>
                            <th class="min-w-200px">Email</th>
                            <th class="min-w-150px">Mobile</th>
                            <th class="min-w-200px text-end rounded-end">Action</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                        @foreach($tableRows as $row)
                        <tr>
                            <td>
                                <img src="{{'images/users/'.  $row['image'] }}" class="h-50 align-self-center" style="width: 50px;" alt=""/>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $row['username'] }}</a>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $row['jobtitle'] }}</a>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">01-03-21</a>
                            </td>
                            <td>
                                <a href="#" class="fw-bolder text-hover-primary d-block mb-1 fs-6 text-success">0.2993</a>
                            </td>
                            <td>
                                <a href="#" class="fw-bolder text-hover-primary d-block mb-1 fs-6 text-success">0.2993</a>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn px-4 me-2">
                                    <span class="btn btn-danger">
                                        Delete
                                    </span>
                                </a>
                                <a href="#" class="btn px-4 me-2">
                                    <span class="btn btn-primary">
                                        Edit
                                    </span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!--end::Table body-->

                </table>
                <!--end::Table-->
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_extend')
<!-- for line & curve chat -->
<script type="text/javascript" src="{{ asset('js/plugins.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/widgets.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/linechat_chartjs.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/curvechat_chartjs.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/rectchat_chartjs.js')}}"></script>
@endsection