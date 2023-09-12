<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>كورس | الرئيسية</title>
    <!-- Start Icons Website -->
    <link rel="icon" href="{{asset('assets/images/Favicon.png')}}">
    <!-- Start Link Files Style Website -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontello.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontello-codes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/thumbs-embedded.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
<div class="wrapper hp_1">
    <!-- Start Header -->
    <header>
        <div class="top_bar">
            <div class="container">
                <div class="top_header_content">
                    <div class="menu_logo">
                        <a href="#" title="" class="menu">
                            <i class="icon-menu"></i>
                        </a>
                        <a href="/" title="" class="logo">
                            <!-- <img src="assets/images/logo.png" alt=""> -->
                            <h1
                                style="font-size: 15px; background-color: black; color: white; padding: 0 10px; border-radius: 4px;">
                                تعلم</h1>
                        </a>
                    </div>
                    <!--menu_logo end-->
                    <div class="search_form">
                        <form action="{{route('search')}}" method="get" >
                            <input type="text" name="search" placeholder="إبحث عن أي شي">
                            <button type="submit">
                                <i class="icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <!--search_form end-->
                    <ul class="controls-lv">
                        <li>
                            <a href="{{route('instructor')}}" title="">المحاضر</a>
                        </li>
                        <li>
                            <a href="{{route('myLearn')}}" title="">كورساتي</a>
                        </li>

                        @if(Auth::check())
                            <li class="user-log">
                                <div class="user-ac-img">
                                    <img style="width: 50px;" src="assets/images/resources/user-img.png" alt="">
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
                    <!--controls-lv end-->
                    <div class="clearfix"></div>
                </div>
                <!--top_header_content end-->
            </div>
        </div>
        <!--header_content end-->

        <div class="btm_bar">
            <div class="container">
                <div class="btm_bar_content">
                    <nav>
                        <ul>
                            @foreach($data['category'] as $cat)
                                <li><a href="{{route('category-courses',$cat->name)}}" title="">{{$cat->name}}</a>
                                    <div class="mega-menu">
                                        <ul>
                                            @foreach($cat->sub_category as $sub_cat)
                                                <li>
                                                    <a href="{{route('subcategory-courses',[$cat->name,$sub_cat->name])}}"
                                                       title="">{{$sub_cat->name}}</a></li>
                                            @endforeach
                                        </ul>

                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            @endforeach


                        </ul>
                    </nav>
                    <!--navigation end-->

                    <ul class="vid_thums">
                        <li>
                            <a class="active" href="#" title=""><i class="icon-grid"></i></a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px" viewBox="0 0 108 108" xml:space="preserve">
										<rect width="63" height="45"/>
                                    <rect x="81" width="27" height="45"/>
                                    <rect x="45" y="63" width="63" height="45"/>
                                    <rect y="63" width="27" height="45"/>
									</svg>
                            </a>
                        </li>
                    </ul>
                    <!--vid_status end-->
                    <div class="clearfix"></div>
                </div>
                <!--btm_bar_content end-->
            </div>
        </div>
        <!--btm_bar end-->
    </header>
    <!-- End Header -->

    <!-- Start Side Menu -->
    <div class="side_menu">
        <div class="form_dvv">
            <a href="#" title="" class="login_form_show" style="background-color: #1596fc;">تسجيل الدخول</a>
            <a href="#" title="" class="login_form_show">إنشاء حساب</a>
        </div>
        <div class="sd_menu">
            <ul class="mm_menu">
                <li>
						<span>
							<i class="icon-home"></i>
						</span>
                    <a href="#" title="">الرئيسية</a>
                </li>
                <li>
						<span>
							<i class="icon-fire"></i>
						</span>
                    <a href="#" title="">الرائجة</a>
                </li>
                <li>
						<span>
							<i class="icon-subscriptions"></i>
						</span>
                    <a href="#" title="">الإشتراكات</a>
                </li>
            </ul>
        </div>
        <!--sd_menu end-->
        <div class="sd_menu">
            <h3>المكتبة</h3>
            <ul class="mm_menu">
                <li>
						<span>
							<i class="icon-history"></i>
						</span>
                    <a href="#" title="">السجل</a>
                </li>
                <li>
						<span>
							<i class="icon-watch_later"></i>
						</span>
                    <a href="#" title="">المشاهدات الأخيرة</a>
                </li>
                <li>
						<span>
							<i class="icon-like"></i>
						</span>
                    <a href="#" title="">الفيديوهات المعجبة</a>
                </li>
            </ul>
        </div>
        <!--sd_menu end-->
        <div class="sd_menu subs_lst">
            <h3>الإشتراكات</h3>
            <ul class="mm_menu">
                <li>
						<span class="usr_name">
							<img src="assets/images/resources/th1.png" alt="">
						</span>
                    <a href="#" title="">هشام السقاف</a>
                    <small>3</small>
                </li>
                <li>
						<span class="usr_name">
							<img src="assets/images/resources/th2.png" alt="">
						</span>
                    <a href="#" title="">عبد الرحمن السادة</a>
                    <small>6</small>
                </li>
                <li>
						<span class="usr_name">
							<img src="assets/images/resources/th3.png" alt="">
						</span>
                    <a href="#" title="">إسحاق قاسم</a>
                    <small>2</small>
                </li>
                <li>
						<span class="usr_name">
							<img src="assets/images/resources/th4.png" alt="">
						</span>
                    <a href="#" title="">محمد الشرجبي</a>
                    <small>11</small>
                </li>
                <li>
						<span class="usr_name">
							<img src="assets/images/resources/th5.png" alt="">
						</span>
                    <a href="#" title="">محمود الحلقي</a>
                    <small>3</small>
                </li>
                <li>
						<span class="usr_name">
							<img src="assets/images/resources/sn.png" alt="">
						</span>
                    <a href="#" title="">هشام السقاف</a>
                    <small>20</small>
                </li>
            </ul>
            <a href="#" title="" class="more-ch"><i class="icon-arrow_below"></i> إظهار الباقي 14</a>
        </div>
        <!--sd_menu end-->
        <div class="sd_menu m_linkz">
            <ul class="mm_menu">
                <li><a href="#">ماذا عنا</a></li>
                <li><a href="#">سياسة الخصوصية</a></li>
                <li><a href="#">تواصل معنا </a></li>
                <li><a href="#">الرئيسية</a></li>
                <li><a href="#">الأسئلة</a></li>
            </ul>
            <span>هشام & عبد الرحمن</span>
        </div>
        <!--sd_menu end-->
        <div class="sd_menu bb-0">
            <ul class="social_links">
                <li>
                    <a href="#" title="">
                        <i class="icon-facebook-official"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="icon-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="icon-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="icon-telegram"></i>
                    </a>
                </li>
            </ul>
            <!--social_links end-->
        </div>
        <!--sd_menu end-->
        <div class="dd_menu"></div>
    </div>
    <!-- End Side Menu -->

    <!-- Start Banner Images Section  -->
    <section class="banner-section">
        <div class="container">
            <div class="parent">
                <div class="images">
                    <img src="{{asset('assets/images/hero-banner.png')}}" alt="" width=100%>
                </div>
                <div class="banner-text">
                    <h2>Watch share and upload with friends and unevercity</h2>

                </div>
            </div>
            <!--banner-text end-->
            <h3 class="headline">قم بمشاركة علمك للناس <a href="#" title="">منصة تعلم اليمنية</a></h3>
        </div>
    </section>
    <!-- End Banner Images Section -->

    <!--Start Main Section-->
    <section class="vds-main">
        <!-- ==================================================== -->
        <!-- Start New Courses -->
        {{--<div class="vidz-row viddz">
            <div class="container">
                <div class="vidz_sec">
                    <h3>الكورسات الجديدة</h3>
                    <a href="#" title="">عرض الكل</a>
                    <div class="clearfix"></div>
                    <div class="vidz_list">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="assets/images/resources/vide1.png" alt="">
                                            <!-- <span class="vid-time">كورس</span> -->
                                            <span class="watch_later">
													<i class="icon-play_list"></i>
												</span>
                                        </a>

                                    </div>

                                    <!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">برمجة ويب: إنشاء الصفحات
                                                الإلكترونية
                                                بواسطة اطار لارافل 10</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">هشام السقاف</a> <span
                                                class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span><i class="icon-playlist" style="color: #4a90e2;"></i> 686K مشاهدات
												<small class="posted_dt"> <i class="icon-watch_later_fill"
                                                                             style="color: #4a90e2;"></i> 1 منذ
													إسبوع</small></span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="assets/images/resources/vide1.png" alt="">
                                            <span class="watch_later">
													<i class="icon-play_list"></i>
												</span>
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">برمجة ويب: إنشاء الصفحات
                                                الإلكترونية
                                                بواسطة اطار لارافل 10</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">هشام السقاف</a> <span
                                                class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span><i class="icon-playlist" style="color: #4a90e2;"></i> 686K مشاهدات
												<small class="posted_dt"> <i class="icon-watch_later_fill"
                                                                             style="color: #4a90e2;"></i> 1 منذ
													إسبوع</small></span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="assets/images/resources/vide3.png" alt="">
                                            <span class="watch_later">
													<i class="icon-play_list"></i>
												</span>
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">تحليل البيانات في مرحلة
                                                المبيعات السنوية لعام 2023
                                            </a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">فهد الأغبري</a> <span
                                                class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span><i class="icon-playlist" style="color: #4a90e2;"></i> 686K مشاهدات
												<small class="posted_dt"> <i class="icon-watch_later_fill"
                                                                             style="color: #4a90e2;"></i> 1 منذ
													إسبوع</small></span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="assets/images/resources/vide3.png" alt="">
                                            <span class="watch_later">
													<i class="icon-play_list"></i>
												</span>
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">تحليل البيانات في مرحلة
                                                المبيعات السنوية لعام 2023
                                            </a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">فهد الأغبري</a> <span
                                                class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span><i class="icon-playlist" style="color: #4a90e2;"></i> 686K مشاهدات
												<small class="posted_dt"> <i class="icon-watch_later_fill"
                                                                             style="color: #4a90e2;"></i> 1 منذ
													إسبوع</small></span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                        </div>
                    </div>
                    <!--vidz_list end-->
                </div>
                <!--vidz_videos end-->
            </div>
        </div>--}}
        <!-- End New Courses -->

        @foreach($category as $cat)
            @if(count($cat->courses)>0)
                <!-- Start Category 1 Courses -->
                <div class="vidz-row viddz">
                    <div class="container">
                        <div class="vidz_sec">
                            <h3>{{$cat->name}}</h3>
                            <a href="#" title="">عرض الكل</a>
                            <div class="clearfix"></div>
                            <div class="vidz_list">
                                <div class="row">
                                    @foreach($cat->courses as $course)
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                            <div class="videoo">
                                                <div class="vid_thumbainl">
                                                    <a href="{{route('details-course',[$course->id,$course->name])}}"
                                                       title="">
                                                        <img src="{{$course->img}}" alt="">
                                                        <!-- <span class="vid-time">كورس</span> -->
                                                        <span class="watch_later">
													<i class="icon-play_list"></i>
												</span>
                                                    </a>
                                                </div>
                                                <!--vid_thumbnail end-->
                                                <div class="video_info">
                                                    <h3>
                                                        <a href="{{route('details-course',[$course->id,$course->name])}}"
                                                           title="">{{$course->name}}</a></h3>
                                                    <h4><a href="{{route('details-course',[$course->id,$course->name])}}"
                                                           title="">{{$course->user->name}}</a> <span
                                                            class="verify_ic"><i class="icon-tick"></i></span></h4>
                                                    <span><i class="icon-playlist" style="color: #4a90e2;"></i> مشاهدات  {{count($course->subscribtion_confirm)}}
												<small class="posted_dt"> <i class="icon-watch_later_fill"
                                                                             style="color: #4a90e2;"></i>{{ date(' d/m/Y  ', strtotime($course->created_at)) }}</small></span>
                                                </div>
                                            </div>
                                            <!--videoo end-->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--vidz_list end-->
                        </div>
                        <!--vidz_videos end-->
                    </div>
                </div>
                <!-- End Category 1 Courses -->
            @endif
        @endforeach

        <!-- ==================================================== -->

        <!-- ==================================================== -->


        @foreach($diplomas as $diploma)
            @if(count($diploma->diploma)>0)
            <!-- Start Category 1 Deploma -->
            <div class="vidz-row viddz">
                <div class="container">
                    <div class="vidz_sec">
                        <h3> دبلومات {{$diploma->name}}</h3>
                        <a href="#" title="">عرض الكل</a>
                        <div class="clearfix"></div>
                        <div class="vidz_list">
                            <div class="row">
                                @foreach($diploma->diploma as $d )
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                    <div class="videoo">
                                        <div class="vid_thumbainl">
                                            <a href="{{route('details-course',[$d->id,$d->name])}}" title="">
                                                <img src="{{$d->img}}" alt="">
                                                <span class="vid-time">دبلوم</span>
                                                <span class="watch_later">
													<i class="icon-subscriptions"></i>
												</span>
                                            </a>

                                        </div>

                                        <!--vid_thumbnail end-->
                                        <div class="video_info">
                                            <h3><a href="{{route('details-course',[$d->id,$d->name])}}" title="">
                                                   {{$d->name}}</a></h3>
                                            <h4><a href="{{route('details-course',[$d->id,$d->name])}}" title="">{{$d->user->name}}</a> <span
                                                    class="verify_ic"><i class="icon-tick"></i></span></h4>
                                            <span><i class="icon-playlist" style="color: #4a90e2;"></i>   مشاهدات  {{count($d->subscribtion_confirm)}}
												<small class="posted_dt"> <i class="icon-watch_later_fill"
                                                                             style="color: #4a90e2;"></i>{{ date(' d/m/Y  ', strtotime($d->created_at)) }}</small></span>
                                        </div>
                                    </div>
                                    <!--videoo end-->
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!--vidz_list end-->
                    </div>
                    <!--vidz_videos end-->
                </div>
            </div>
            <!-- End Category 1 Deploma -->
            @endif
        @endforeach
        <!-- ==================================================== -->
        <!-- Start Categores -->
   {{--     <div class="vidz-row pop_channels">
            <div class="container">
                <div class="vidz_sec">
                    <h3>تصنيفات الكورسات</h3>
                    <div class="vidz_list">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a></h3>
                                        <span>230K عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a></h3>
                                        <span>191K عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a> <span
                                                class="verify_ic"><i class="icon-tick"></i></span></h3>
                                        <span>12M عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a> <span
                                                class="verify_ic"><i class="icon-tick"></i></span></h3>
                                        <span>48M عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a></h3>
                                        <span>954K عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a></h3>
                                        <span>1.3M عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a></h3>
                                        <span>1.3M عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a></h3>
                                        <span>1.3M عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a></h3>
                                        <span>1.3M عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a></h3>
                                        <span>1.3M عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a></h3>
                                        <span>1.3M عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="Single_Channel_Home.html" title="">
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info categores">
                                        <h3><a href="Single_Channel_Home.html" title="">برمجة الويب</a></h3>
                                        <span>1.3M عدد الكورسات</span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                        </div>
                    </div>
                    <!--vidz_list end-->
                </div>
                <!--vidz_videos end-->
            </div>
        </div>--}}
        <!-- End Categores -->
        <!-- ==================================================== -->


        <!-- ==================================================== -->


    </section>
    <!--End Main Section-->

    <!-- Start Icon Top Pages -->
    <section class="more_items_sec text-center">
        <div class="container">
            <a href="#" title="">
                <svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.1618 24.0001H0.838235C0.374412 24.0001 0 23.6261 0 23.1628V5.86052C0 5.39727 0.374412 5.02332 0.838235 5.02332H18.1618C18.6256 5.02332 19 5.39727 19 5.86052V23.1628C19 23.6261 18.6256 24.0001 18.1618 24.0001ZM1.67647 22.3256H17.3235V6.69773H1.67647V22.3256Z"
                        fill="#9494A0"/>
                    <g opacity="0.25">
                        <path opacity="0.25"
                              d="M13.1324 4.18605C12.6685 4.18605 12.2941 3.81209 12.2941 3.34884V1.67442H6.70589V3.34884C6.70589 3.81209 6.33148 4.18605 5.86765 4.18605C5.40383 4.18605 5.02942 3.81209 5.02942 3.34884V0.83721C5.02942 0.373954 5.40383 0 5.86765 0H13.1324C13.5962 0 13.9706 0.373954 13.9706 0.83721V3.34884C13.9706 3.81209 13.5962 4.18605 13.1324 4.18605Z"
                              fill="#9494A0"/>
                    </g>
                    <path
                        d="M9.50001 19.3479C9.28487 19.3479 9.06972 19.267 8.90766 19.1024L5.92634 16.1275C5.59942 15.801 5.59942 15.2707 5.92634 14.9442C6.25325 14.6177 6.78413 14.6177 7.11104 14.9442L9.50001 17.3275L11.8862 14.9442C12.2131 14.6177 12.744 14.6177 13.0709 14.9442C13.3978 15.2707 13.3978 15.801 13.0709 16.1275L10.0924 19.1024C9.93031 19.267 9.71516 19.3479 9.50001 19.3479Z"
                        fill="#9494A0"/>
                    <path
                        d="M9.49999 18.4186C9.03617 18.4186 8.66176 18.0447 8.66176 17.5814V10.3256C8.66176 9.86236 9.03617 9.4884 9.49999 9.4884C9.96382 9.4884 10.3382 9.86236 10.3382 10.3256V17.5814C10.3382 18.0447 9.96382 18.4186 9.49999 18.4186Z"
                        fill="#9494A0"/>
                    <g opacity="0.5">
                        <path opacity="0.5"
                              d="M15.6471 6.69764C15.1832 6.69764 14.8088 6.32369 14.8088 5.86043V4.18601H4.19118V5.86043C4.19118 6.32369 3.81677 6.69764 3.35294 6.69764C2.88912 6.69764 2.51471 6.32369 2.51471 5.86043V3.34881C2.51471 2.88555 2.88912 2.5116 3.35294 2.5116H15.6471C16.1109 2.5116 16.4853 2.88555 16.4853 3.34881V5.86043C16.4853 6.32369 16.1109 6.69764 15.6471 6.69764Z"
                              fill="#9494A0"/>
                    </g>
                </svg>
            </a>
        </div>
    </section>
    <!-- End Icon Top Pages -->

</div>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/flatpickr.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script type="module" src="{{asset('assets/js/student/index.js')}}"></script>
</body>

</html>
