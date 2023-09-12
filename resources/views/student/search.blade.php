<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>كورس | البحث عن</title>
    <!-- Start Icons Website -->
    <link rel="icon" href="{{asset('assets/images/Favicon.png')}}">
    <!-- Start Link Files Style Website -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontello.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontello-codes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/thumbs-embedded.css')}}">
    <!-- Start Custom Style File -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color.css')}}">
</head>

<body>
<div class="wrapper hp_1">
    <!-- Start Header -->
    <header>
        <div class="top_bar">
            <div class="container">
                <div class="top_header_content">
                    <div class="menu_logo">
                        <a href="/" title="" class="logo">
                            <!-- <img src="assets/images/logo.png" alt=""> -->
                            <h1
                                style="font-size: 15px; background-color: black; color: white; padding: 0 10px; border-radius: 4px;">
                                تعلم</h1>
                        </a>
                    </div>
                    <ul class="controls-lv">
                        <li>
                            <a href="{{route('myLearn')}}" title="">كورساتي</a>
                        </li>
                        @if(Auth::check())
                            <li class="user-log">
                                <div class="user-ac-img">
                                    <img style="width: 50px;" src="{{asset('assets/images/resources/user-img.png')}}" alt="">
                                </div>
                                <div class="account-menu">
                                    <div class="user-ac-img"
                                         style="margin-right: 15px; display: flex; align-items: center;">
                                        <img src="{{asset('assets/images/resources/user-img.png')}}" alt="">
                                        <h4 style="font-size: 15px; font-weight: 800;">{{Auth::user()->name}}
                                            <p style="font-size: 8px; color: #888; font-weight: 400;">
                                                {{Auth::user()->email}}</p>
                                        </h4>
                                    </div>
                                    <div class="sd_menu">
                                        <ul class="mm_menu">
                                            <li>
												<span>
													<i class="icon-user"></i>
												</span>
                                                <a href="{{ route('profile.show') }}" title="">بروفيلي</a>
                                            </li>
                                            <li>
												<span>
													<i class="icon-settings"></i>
												</span>
                                                <a href="#" title="">الإعدادات</a>
                                            </li>
                                            <li>
												<span>
													<i class="icon-logout"></i>
												</span>

                                                <form method="POST" action="{{ route('logout') }}" x-data>
                                                    @csrf

                                                    <span href="{{ route('logout') }}" @click.prevent="$root.submit();">
														{{ __('تسجيل الخروج') }}
													</span>
                                                </form>

                                            </li>
                                        </ul>
                                    </div>
                                    <!--sd_menu end-->
                                    <div class="sd_menu scnd">
                                        <ul class="mm_menu">
                                            <li>
												<span>
													<i class="icon-light"></i>
												</span>
                                                <a href="#" title="">الوضع الليلي</a>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <b class="slider round"></b>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="{{route('login')}}" title="" class="btn-default">تسجيل الدخول</a>
                            </li>
                            <li>
                                <a href="{{route('register')}}" title="" class="btn-default">إنشاء حساب</a>
                            </li>
                        @endif
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start Images pages -->

    <!-- End Images pages -->


    <!-- Start Link Pages In -->
    {{-- <div class="container">
       <div class="row" style="display: flex; justify-content: flex-start; margin-top: 20px;">
         <nav class="breadcrumb" style="display: flex; flex-direction: row; background-color: transparent;">
           <a class="breadcrumb-item text-secondary" href="#">كورسات </a>
           <span class="breadcrumb-item active text-primary" aria-current="page">برمجة ويب</span>
         </nav>
       </div>
     </div>--}}
    <!-- End Link Pages In -->


    <!--Start Main Section-->
    <section class="vds-main">
        @if(count($courses)>0&&count($diplomas)>0)
            <div class="container">
                <h3></h3>
            </div>
            <!-- Start Category 1 Courses -->
            <div class="vidz-row viddz">
                <div class="container">

                    <div class="vidz_sec">
                        <h3>كورسات  </h3>
                        <div class="clearfix"></div>
                        <div class="vidz_list">
                            <div class="row">
                                @foreach($courses as $course)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                    <div class="videoo">
                                        <div class="vid_thumbainl">
                                            <div>
                                                <img src="{{asset($course->img)}}" alt="">
                                            </div>
                                        </div>
                                        <div class="video_info">
                                            <h3><a href="{{route('details-course',[$course->id,$course->name])}}" title="">{{$course->name}}</a></h3>
                                            <h4>
                                                <span><strong
                                                        style="color: #1596fc; font-weight: bold;"> ${{$course->price}}</strong> دولار</span>
                                                <span class="verify_ic">
                            <i class="icon-tick"></i>
                          </span>
                                            </h4>
                                            <span
                                                style="display: flex; justify-content: space-between; margin-top: 8px;">
                          <small>
                            <i class="icon-user" style="color: #3268a6;"></i>  المشتركين  {{count($course->subscribtion_confirm)}}
                          </small>
                          <small class="posted_dt">
                            <i class="icon-watch_later_fill" style="color: #4a90e2;"></i>{{ date(' d/m/Y  ', strtotime($course->created_at)) }}</small>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Category 1 Courses -->

            <!-- Start New Deploma -->
            <div class="vidz-row viddz">
                <div class="container">
                    <div class="vidz_sec">
                        <h3>دبلومات برمجة الويب</h3>
                        <div class="clearfix"></div>
                        <div class="vidz_list">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                    <div class="videoo">
                                        <div class="vid_thumbainl">
                                            <div>
                                                <img src="assets/images/0x0.jpg" alt="">
                                                <div class="watch_later">
                                                    تعديل بيانات الكورس
                                                    <i class="icon-watch_later_fill"
                                                       style="background-color: #1596fc; border-radius: 8px; padding: 0 5px; margin-left: 3px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="video_info">
                                            <h3><a href="single_video_page.html" title="">برمجة ويب: إنشاء الصفحات
                                                    الإلكترونية
                                                    بواسطة اطار لارافل 10</a></h3>
                                            <div
                                                style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                                <h4>
                            <span><strong style="color: #1596fc; font-weight: bold;">$20,000</strong>
                              دولار</span>
                                                </h4>
                                                <h4 style="text-align: center; padding: 0 5px 0 0; border-radius: 4px; background-color: #1598fc; color: #FFF;">
                                                    <span style="font-size: 12px;"> 8 كورسات</span>
                                                    <span class="verify_ic">
                              <i class="icon-playlist" style="color: #FFF;"></i>
                            </span>
                                                </h4>
                                            </div>
                                            <span style="display: flex; justify-content: space-between;">
                          <small>
                            <i class="icon-user" style="color: #3268a6;"></i> 686K المشتركين
                          </small>
                          <small class="posted_dt">
                            <i class="icon-watch_later_fill" style="color: #4a90e2;"></i> 1 منذ
                            إسبوع</small>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                    <div class="videoo">
                                        <div class="vid_thumbainl">
                                            <div>
                                                <img src="assets/images/0x0.jpg" alt="">
                                                <div class="watch_later">
                                                    تعديل بيانات الكورس
                                                    <i class="icon-watch_later_fill"
                                                       style="background-color: #1596fc; border-radius: 8px; padding: 0 5px; margin-left: 3px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="video_info">
                                            <h3><a href="single_video_page.html" title="">برمجة ويب: إنشاء الصفحات
                                                    الإلكترونية
                                                    بواسطة اطار لارافل 10</a></h3>
                                            <div
                                                style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                                <h4>
                            <span><strong style="color: #1596fc; font-weight: bold;">$20,000</strong>
                              دولار</span>
                                                </h4>
                                                <h4 style="text-align: center; padding: 0 5px 0 0; border-radius: 4px; background-color: #1598fc; color: #FFF;">
                                                    <span style="font-size: 12px;"> 8 كورسات</span>
                                                    <span class="verify_ic">
                              <i class="icon-playlist" style="color: #FFF;"></i>
                            </span>
                                                </h4>
                                            </div>
                                            <span style="display: flex; justify-content: space-between;">
                          <small>
                            <i class="icon-user" style="color: #3268a6;"></i> 686K المشتركين
                          </small>
                          <small class="posted_dt">
                            <i class="icon-watch_later_fill" style="color: #4a90e2;"></i> 1 منذ
                            إسبوع</small>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                    <div class="videoo">
                                        <div class="vid_thumbainl">
                                            <div>
                                                <img src="assets/images/0x0.jpg" alt="">
                                                <div class="watch_later">
                                                    تعديل بيانات الكورس
                                                    <i class="icon-watch_later_fill"
                                                       style="background-color: #1596fc; border-radius: 8px; padding: 0 5px; margin-left: 3px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="video_info">
                                            <h3><a href="single_video_page.html" title="">برمجة ويب: إنشاء الصفحات
                                                    الإلكترونية
                                                    بواسطة اطار لارافل 10</a></h3>
                                            <div
                                                style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                                <h4>
                            <span><strong style="color: #1596fc; font-weight: bold;">$20,000</strong>
                              دولار</span>
                                                </h4>
                                                <h4 style="text-align: center; padding: 0 5px 0 0; border-radius: 4px; background-color: #1598fc; color: #FFF;">
                                                    <span style="font-size: 12px;"> 8 كورسات</span>
                                                    <span class="verify_ic">
                              <i class="icon-playlist" style="color: #FFF;"></i>
                            </span>
                                                </h4>
                                            </div>
                                            <span style="display: flex; justify-content: space-between;">
                          <small>
                            <i class="icon-user" style="color: #3268a6;"></i> 686K المشتركين
                          </small>
                          <small class="posted_dt">
                            <i class="icon-watch_later_fill" style="color: #4a90e2;"></i> 1 منذ
                            إسبوع</small>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                    <div class="videoo">
                                        <div class="vid_thumbainl">
                                            <div>
                                                <img src="assets/images/0x0.jpg" alt="">
                                                <div class="watch_later">
                                                    تعديل بيانات الكورس
                                                    <i class="icon-watch_later_fill"
                                                       style="background-color: #1596fc; border-radius: 8px; padding: 0 5px; margin-left: 3px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="video_info">
                                            <h3><a href="single_video_page.html" title="">برمجة ويب: إنشاء الصفحات
                                                    الإلكترونية
                                                    بواسطة اطار لارافل 10</a></h3>
                                            <div
                                                style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                                <h4>
                            <span><strong style="color: #1596fc; font-weight: bold;">$20,000</strong>
                              دولار</span>
                                                </h4>
                                                <h4 style="text-align: center; padding: 0 5px 0 0; border-radius: 4px; background-color: #1598fc; color: #FFF;">
                                                    <span style="font-size: 12px;"> 8 كورسات</span>
                                                    <span class="verify_ic">
                              <i class="icon-playlist" style="color: #FFF;"></i>
                            </span>
                                                </h4>
                                            </div>
                                            <span style="display: flex; justify-content: space-between;">
                          <small>
                            <i class="icon-user" style="color: #3268a6;"></i> 686K المشتركين
                          </small>
                          <small class="posted_dt">
                            <i class="icon-watch_later_fill" style="color: #4a90e2;"></i> 1 منذ
                            إسبوع</small>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End New Deploma -->

            <!-- Start Number pages -->
            <div class="container" style="display: flex; justify-content: center;">
                <div class="row pl-5 pr-5">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Number pages -->
          @else
            <h4>لاتوجد نتائج بهذا البحث</h4>
        @endif
    </section>
    <!--End Main Section-->




</div>


<!-- Start Link Files Script Website -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>
