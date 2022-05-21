@extends('layouts.dashboard_app1')
@section('styles')
<link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">

@endsection
@section('content')
<div class="container" style="max-width: inherit; height : 90vh">
    <div class="row d-flex justify-content-center pt-5 mt-5">
        <div class="d-flex justify-content-center">
            <img src="images/source_img/logo.png"/>
        </div>
    </div>
    <div id="first">
        <div class="row d-flex justify-content-center mt-5" id="first">
            <div class="col-3">
                <div class="mb-3" style="width : 100%">
                    <label class="required form-label">Username</label>
                    <input type="email" class="form-control form-control-solid" placeholder=""/>
                </div>
                <div class="mb-3">
                    <label class="required form-label">Password</label>
                    <input type="email" class="form-control form-control-solid" placeholder=""/>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success px-3" onclick="continue_btn()">Continue</button>
                </div>
            </div>
        </div>
    </div>
    <div  id="second" style="display : none">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-3">
                <p class="text-center">
                    A One Time Passcord has been sent to the mobile number ending in 7049
                </p>
                <p class="text-center">
                    Enter it below within 2 minutes
                </p>
                <div class="row mb-2">
                    <div class="col-2 p-2">
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-2 p-2">
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-2 p-2">
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-2 p-2">
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-2 p-2">
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-2 p-2">
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-success px-4" href="{{ route('home') }}">Log in</a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row d-flex justify-content-center" style="height : 100vh">
        <img src="images/source_img/logo.png" style="width : fit-content; height : fit-content; margin : auto"/>
    </div> -->
    <div style="position : absolute; bottom : 2rem; left : 3rem; cursor : pointer" class="d-flex">
        <img class="support-img mr-3" src="images/source_img/comment.svg" /><p class="ft-20">Support</p>
    </div>
</div>
@endsection

@section('scripts_extend')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script>
    function continue_btn(){
        // console.log("next");
        document.getElementById("first").style.display = "none";
        document.getElementById("second").style.display = "block";
    }
</script>
@endsection