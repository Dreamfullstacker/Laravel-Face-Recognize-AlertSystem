@extends('layouts.dashboard_app')
@section('styles')
<link href="{{ asset('css/configuration.css') }}" rel="stylesheet" type="text/css">
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
                <h4>Configuration</h4>
                <div class="tab" role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#server_conf" aria-controls="home" role="tab" data-toggle="tab">
                                <img class="tablist_icon" src="https://previews.123rf.com/images/rastudio/rastudio1601/rastudio160100402/49889691-server-with-gear-line-icon-for-web-mobile-and-infographics-vector-white-icon-on-the-light-blue-circl.jpg">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#camera_conf" aria-controls="profile" role="tab" data-toggle="tab">
                                <img class="tablist_icon" src="images/source_img/camera.svg">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#face_detect_conf" aria-controls="profile" role="tab" data-toggle="tab">
                                <img class="tablist_icon" src="images/source_img/icon_face_image_enhance.svg">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#face_mask_conf" aria-controls="profile" role="tab" data-toggle="tab">
                                <img class="tablist_icon" src="images/source_img/icon_face_mask.svg">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#face_recog_conf" aria-controls="profile" role="tab" data-toggle="tab">
                                <img class="tablist_icon" src="images/source_img/icon_face_recognition.svg">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#face_tract_conf" aria-controls="profile" role="tab" data-toggle="tab" style="width : 90px;">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" data-name="Layer 1" viewBox="0 0 2989.09 2990.14"><defs><linearGradient id="New_Gradient_Swatch_1" x1="373.32" y1="3153.32" x2="3103.67" y2="422.98" gradientUnits="userSpaceOnUse"><stop offset="0.1" stop-color="#c6192e"/><stop offset="0.9" stop-color="#13b3b6"/></linearGradient><linearGradient id="New_Gradient_Swatch_1-2" x1="113.34" y1="2893.34" x2="2843.69" y2="162.99" xlink:href="#New_Gradient_Swatch_1"/><linearGradient id="New_Gradient_Swatch_1-3" x1="85.62" y1="2865.62" x2="2815.97" y2="135.27" xlink:href="#New_Gradient_Swatch_1"/></defs><title>rdw_real_user_monitoring2_icon</title><path d="M2662.2,2999c-2.49-.89-5-1.81-7.47-2.67-13.58-4.67-21.93-15.31-22.73-29.61-.81-14.58-1-29.19-2-43.75-5-70.41-22.71-136.77-63.43-195.54-20.83-30.07-46.16-55.67-77.89-74.42-13.81-8.16-29.33-12.38-44.17-18.09q-119.42-46-239.06-91.46c-42.5-16.2-85.33-31.56-127.57-48.39-65.72-26.17-132.59-49.09-199.08-73.11-43.22-15.61-82.4-38.57-115.79-70.44-26.29-25.09-46.26-54.64-58.68-89a81.65,81.65,0,0,1-4.93-28.26q.22-132.49.07-265c0-3.85.69-7.84-1.09-11.91-4.27.46-6.74,3.35-9.55,5.45q-93,69.38-186,138.81c-38.62,28.77-81.66,47.61-129.72,51.91-70.68,6.32-135.35-10.49-190.42-56.85-55.61-46.81-110.53-94.44-165.76-141.7-1.94-1.66-3.68-3.84-7.15-3.71-1.85,3.77-1.09,7.78-1.09,11.61-.05,75-.59,150.09.27,225.12.31,27.65-7.66,52.35-20.15,76.05-31.16,59.1-80.56,97.61-141,123.43-15.59,6.67-31.75,11.74-47.79,17.17q-114.6,38.88-227.63,82.15c-110.57,42.6-221.83,83.44-332,127.12-33.95,13.47-61.42,35.23-84.94,62.51C115.38,2723,93.48,2778,82.2,2837.65a471.53,471.53,0,0,0-8.37,93.07c0,1,0,2,0,3-.62,15-5.74,27.54-20.43,33.65-15.08,6.28-29.23,4.33-41.53-7.11-1.21-1.12-2.57-2.09-3.86-3.12v-55.8c2.94-7.21,2.93-14.91,3.64-22.48,7.42-79,29.63-153,75.25-218.85a334.43,334.43,0,0,1,95.26-92.24c14.4-9.23,30.26-15.08,46-21.19,45.82-17.75,91.87-34.93,137.46-53.26,122-49,245.23-94.87,368.71-140,25.25-9.23,50.89-17.4,76.27-26.3,36.22-12.72,68.84-31.26,95.3-59.65a165.72,165.72,0,0,0,31.1-47.17,87.28,87.28,0,0,0,7.41-35.71q-.45-141.48,0-282.95c0-8.29-2.48-13.59-8.84-19.39-36.13-32.95-61.29-73-74.8-120.2a275.47,275.47,0,0,1-10.22-70.76c-.2-10.26-1.3-20.53-2.32-30.76-.67-6.78-2.59-8.21-9.92-8.07s-14.39,1.88-21.82,1c-29-3.41-48.32-20.3-62.76-44.11-6.08-10-9.32-21.11-11.29-32.74-11.92-70.71-24.23-141.34-36.17-212-5.91-35,4.3-64.33,31.83-87.14,11.82-9.79,25.85-14.8,40.8-17.3,12.53-2.1,12.56-2.49,7.44-14.45-29.17-68-59.13-135.78-86.59-204.56-15-37.61-30.42-75.16-40.07-114.63-19.36-79.22-7.69-152.42,45-216.57,27.21-33.16,63-53.41,104.29-64.29a132.77,132.77,0,0,1,16.5-3.72c5.74-.75,8-3.93,8.55-9.16.58-5.61,1-11.25,1.91-16.8C841.13,584.69,853,555.9,867.32,528c4.69-9.16,9.78-18.12,14.31-27.36,12.5-25.55,32.21-44.32,55.35-60.07,30.42-20.7,63.43-36.08,97.84-48.69,56.39-20.66,114.68-33.13,174-41.67,62.07-8.94,124.51-10.22,186.83-7.09,118.37,5.95,232.77,30.84,341.75,78.45,47.9,20.92,93.78,45.72,136.41,76,31.38,22.28,61.93,45.87,89.86,72.47,45.13,43,74.87,95.19,90.9,155.3,8.07,30.26,12.45,61,14.18,92.33,4.24,76.75-7.61,151.52-26.81,225.44-18.16,70-43.13,137.44-73.36,203-6.5,14.1-6.62,14.05,7.8,20.12,35.1,14.79,56.87,52.86,50.83,90.38-7.28,45.23-15.25,90.34-22.92,135.51-5.06,29.78-9.94,59.59-15.24,89.32-6.5,36.48-31.52,62.16-67.7,69.73a77,77,0,0,1-13.85,1.18c-5.64.14-11.29-.28-16.93-.17-7.86.14-8.6.56-9.48,8.25-1.43,12.52-2.93,25.07-3.44,37.65-2.42,58.53-22.56,110-60.31,154.74-13,15.38-27.91,28.46-43.79,40.44-7.54,5.69-9.91,12-9.88,21.06.27,89.66.17,179.33.18,269,0,11.29.69,22.64-.16,33.86-1.18,15.45,4.23,28.59,11.83,41.35,19.07,32,46.37,55.15,78.5,73.14,19.21,10.77,39.79,18.27,60.46,25.6,104.84,37.2,208.88,76.54,312.81,116.16,88.1,33.59,175.92,67.91,264,101.5,29,11.07,54.27,27.76,77.3,48.19,63.13,56,100.34,126.93,119.64,208.12a533.89,533.89,0,0,1,14.22,130.34c-.24,19.6-7.77,29.74-26.66,35.83-1.25.41-2.44,1-3.65,1.56ZM1352.43,2080.38c42.2-.28,80.32-12.66,114.16-38.06,91.88-69,184-137.66,275.6-207,41.36-31.33,64.64-73.91,73.12-124.94,2-11.88,1.1-23.86,2.71-35.7q9.39-69.08,18.69-138.14,12.87-95.71,25.65-191.44c2-14.81,4-29.62,2.17-44.64-2.78-23.07-5.6-46.13-9.85-69-8.36-44.93-20.52-88.62-42.25-129.2-18.54-34.63-43.93-63.12-76.56-85-27.31-18.28-57.47-30.3-89-39-61-16.79-123.6-20.87-186.32-23.2-54.4-2-108.88,0-163.33-1.86-37.15-1.3-74.3-1.88-111.43-4-43.11-2.51-86-6.12-128.62-13.63-9-1.59-10.51-.32-10.6,9.09-.21,23.29-2.68,46.38-6.18,69.36-6,39.47-14.43,78.47-28.51,115.88C984.47,1202.6,945,1268.5,896,1328.71c-3.94,4.85-5.08,9.53-4.45,15.52,1.42,13.52,2.34,27.1,3.39,40.66,1.55,19.85,3,39.71,4.55,59.56,2.45,31.09,5,62.18,7.45,93.27,1.55,19.51,3,39,4.53,58.56,1.8,22.82,3.23,45.68,5.62,68.44,1.8,17.18,1.21,34.48,3.73,51.62,5,34.23,17.12,65.37,39,92.46,4.68,5.81,9.65,10.36,17.73,11.51,16.61,2.35,26.74,12.6,30.48,28.74,1.22,5.3,3.93,8.87,7.89,12.12,70.52,58,140.86,116.2,211.57,174C1263.72,2064.7,1305.48,2079.89,1352.43,2080.38Zm567-886c1.79-3.51,2.62-4.9,3.23-6.39,31.17-75.72,56.64-153.17,71.11-234a643.35,643.35,0,0,0,10.14-103.92,399.77,399.77,0,0,0-5.62-73.35c-11.2-65.3-38.78-121.19-89.91-165.17-54-46.49-113.59-84.15-177.38-115.21-39.77-19.36-81.59-33.72-124.17-45.75-67.38-19-136.16-29.75-206-33.58-43.45-2.38-87-1.14-130.37,2.19A804.52,804.52,0,0,0,1144.67,439c-49.56,11.88-97.89,27.27-142.56,52.43-21.94,12.36-41.2,27.91-55.56,48.92-6,8.77-12.26,17.4-17.64,26.54-11.67,19.81-21.9,40.23-25,63.52-1.08,8.27-.63,15.72,4.8,22.57,4.2,5.3,6,11.84,7.21,18.4,1.93,10.61-1.09,19.8-9.27,26.92a36.43,36.43,0,0,1-24.5,9.51,241.11,241.11,0,0,0-42.57,4c-28.8,5.19-54.83,16.52-75.24,37.94-32.45,34-43.42,76-42,121.78.83,26.46,8.11,51.71,16.56,76.63,13.33,39.33,28.55,77.93,44.4,116.3,25.35,61.38,52.23,122.09,79.84,182.48.69,1.49,1.18,3.11,3.09,3.87,3.35-1.11,4.67-4.43,6.57-7,38.61-51.7,66-108.86,82.86-171.09a515.13,515.13,0,0,0,17-96.94c2-26.88,2.58-53.68-.22-80.51a47.87,47.87,0,0,1,5.33-27.95c9-17.13,27.4-23.53,44.92-15.3,6,2.84,12,5.66,18.46,7.38a369.43,369.43,0,0,0,47.89,9.17c30.28,3.89,60.68,6.42,91.14,8.66,37.76,2.76,75.57,3.78,113.36,4.86,56.74,1.63,113.54-.44,170.28,2.49,13.91.72,27.85,1.24,41.73,2.46,34.05,3,68,6.89,101.61,13.34,50.8,9.75,100,24.12,145.86,48.72,35.26,18.92,65.85,43.55,91.2,74.5,30.14,36.82,49.55,79.19,62.85,124.53C1911.4,1162.7,1914.92,1177.49,1919.38,1194.42ZM827.11,1580.2c8.29.07,9.71-1.58,9-10.12q-1.85-22.3-3.57-44.62c-1.48-18.85-2.9-37.7-4.4-56.55q-3.72-46.61-7.52-93.21c-1.25-15.2-2.62-30.4-3.87-45.6-.29-3.41-1.17-5.84-5.39-5.14-9.16,1.51-18.35,2.88-27.52,4.35-4.8.77-7.44,3.94-9.05,8.28s-1.43,8.45-.68,12.76q2.76,15.68,5.47,31.38,15.79,92.22,31.58,184.45C812.89,1576.18,817.41,1580.13,827.11,1580.2Zm1135.38-228.92c.18-10.49-5.08-17.29-14.51-19.64-1.93-.48-3.9-.82-5.87-1.14-7.22-1.18-8-.76-9.11,6.42q-3.95,26.07-7.56,52.2-9.81,71-19.48,142c-1.88,13.81-3.67,27.63-5.54,41.44-.42,3.07-.87,6,3,7.33,10.79,3.69,23.58-4,25.35-15.18q13.51-85.54,27.13-171.07C1958.2,1379.22,1960.4,1364.78,1962.49,1351.28Z" transform="translate(-7.97 -8.82)" style="fill:url(#New_Gradient_Swatch_1)"/><path d="M2016.4,475.72c2.38-114.14,50.7-232.19,148.86-327.91,94.67-92.31,210.06-139.74,341.86-139,278.84,1.62,491.3,225.82,489.94,493.4-1.38,270.24-220.7,489.67-493.15,488.14C2234,988.85,2016.36,770.3,2016.4,475.72ZM2506.57,61.65c-235.11-2.94-438,192.29-438.08,437.7-.12,241.6,196.9,438.65,437.54,439,241.71.39,438.84-196.85,439-438.46C2945.3,254.57,2742.43,58.5,2506.57,61.65Z" transform="translate(-7.97 -8.82)" style="fill:url(#New_Gradient_Swatch_1-2)"/><path d="M2775.52,357.59a14.15,14.15,0,0,1-3.29,7.15c-2,2.24-4,4.4-6.14,6.52q-166.47,166.68-333,333.35c-13.6,13.62-16.46,13.64-29.83.28q-78.55-78.51-157.07-157.06c-13.11-13.13-13.11-16.15-.18-29.12,4.22-4.24,8.4-8.51,12.68-12.67,8.06-7.84,11.82-7.84,20,.3q33.53,33.39,66.92,66.9l63.39,63.39c1.65,1.64,3.37,3.21,4.95,4.91,2.95,3.15,5.68,2.71,8.47-.25,2-2.17,4.23-4.21,6.34-6.33l299.13-299.54a97.38,97.38,0,0,1,7.91-7.57c5.54-4.41,10.94-4.57,16.2.23,7.11,6.48,13.74,13.48,20.47,20.37A10.55,10.55,0,0,1,2775.52,357.59Z" transform="translate(-7.97 -8.82)" style="fill:url(#New_Gradient_Swatch_1-3)"/></svg>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#access_control" aria-controls="profile" role="tab" data-toggle="tab">
                                <img class="tablist_icon" src="images/source_img/security-png-285474.png">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#demographic" aria-controls="profile" role="tab" data-toggle="tab">
                                <img class="tablist_icon" src="images/source_img/demographic.jpg">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#license_conf" aria-controls="profile" role="tab" data-toggle="tab">
                                <img class="tablist_icon" src="images/source_img/license.webp">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#alert_conf" aria-controls="profile" role="tab" data-toggle="tab">
                                <img class="tablist_icon" src="images/source_img/alert.png">
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fade in active show text" id="server_conf">
                            <div class="text-center">
                                <h4>Server Configuration</h4>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="camera_conf">
                            <div class="text-center">
                                <h4>Camera Configuration</h4>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="face_detect_conf">
                            <div class="text-center">
                                <h4>Face Detection Module configuration</h4>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="face_mask_conf">
                            <div class="text-center">
                                <h4>Face Mask Module configuration</h4>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="face_recog_conf">
                            <div class="text-center">
                                <h4>Face Recognition Module configuration</h4>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="face_tract_conf">
                            <div class="text-center">
                                <h4>Face Tracker Box Module configuration</h4>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="access_control">
                            <div class="text-center">
                                <h4>Access Control</h4>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="demographic">
                            <div class="text-center">
                                <h4>Demographic Module Configuration</h4>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="license_conf">
                            <div class="text-center">
                                <h4>License Plate Module Configuration</h4>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="alert_conf">
                            <div class="text-center">
                                <h4>Alert Configuration</h4>
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