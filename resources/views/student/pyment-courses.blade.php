<!DOCTYPE html>
<html lang="ar">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>كورس | تفاصيل الكورس </title>
    <!-- Start Icons Website -->
      <link rel="icon" href="{{asset('assets/images/Favicon.png')}}">
      <!-- Start Link Files Style Website -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flatpickr.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontello.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontello-codes.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/thumbs-embedded.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/uploads-video.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color.css')}}">
    <!-- Start Link Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body>
    <div class="wrapper">
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
                    {{--    <div class="search_form">
                            <form>
                                <input type="text" name="search" placeholder="إبحث عن أي شي">
                                <button type="submit">
                                    <i class="icon-search"></i>
                                </button>
                            </form>
                        </div>--}}
                        <!--search_form end-->
                        <ul class="controls-lv">
                            <li>
                                <a href="{{route('instructor')}}" title="">المحاضر</a>
                            </li>
                            <li>
                                <a href="my-courses.html" title="">كورساتي</a>
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


            <!--btm_bar end-->
        </header>
        <!-- End Header -->


        <!-- Start Body Page -->
      <section class="mn-sec full_wdth_single_video">
        <div class="row" style="background-color: #191919 !important; color: #FFF; height: 80vh;">
          <div class="row">
            <div class="col-lg-3" style="
            padding: 0;
            color: #FFF;
            height: 80%;
            margin: 50px 130px 80px 0;
            box-shadow: 0px 0px 10px 0px rgb(45, 45, 45);
            border-radius: 10px;
            ">
              <img src="{{asset($course->img)}}" alt="" width="100%" style="height: 50%; object-fit: fill;">
              <ul style="
              margin: 20px 30px 5px 0;
              ">
                <li><i class="bi bi-universal-access" style="margin-left: 10px; font-size: 20px;"></i>وصول مدى الحياة
                </li>
                <li><i class="bi bi-arrow-down-left-square-fill" style="margin-left: 10px; font-size: 20px;"></i>إمكانية
                  تحميل ملفات الكورس</li>
                <li><i class="bi bi-trophy" style="margin-left: 10px; font-size: 20px;"></i>الحصول على الشهادة عند
                  الإتمام</li>
              </ul>
              <div style="display: flex; justify-content: center; margin-top: 30px;">
                <button class="btn btn-primary" type="button" style="width: 70%;">شراء الكورس</button>
              </div>
            </div>
            <div class="col-lg-6" style="padding: 25px;">
              <div style="margin-right: 70px;">
                <h1 style="margin-bottom: 15px; margin-top: 70px;">{{$course->name}}</h1>
                <p style="color: #888;">{{$course->description}}</p>
                <div style="display: flex; justify-content: space-evenly; align-items: center;">
                  <ul style="
                              margin: 20px 30px 5px 0;
                              ">
                    <li><i class="icon-user" style="margin-left: 10px; font-size: 20px;"></i>{{$course->user->name}}</li>
                    <li><i class="icon-light" style="margin-left: 10px; font-size: 20px;"></i>{{$course->category->name}}
                    </li>
                    <li><i class="icon-settings" style="margin-left: 10px; font-size: 20px;"></i>{{$course->price}}</li>
                  </ul>
                  <ul style="
                              margin: 20px 30px 5px 0;
                              ">
                    <li>
                      <i class="icon-subscriptions" style="margin-left: 10px; font-size: 20px;"></i> الطلاب المشتركين {{count($course->subscribtion_confirm)}}
                    </li>
                    <li>
                      <i class="icon-history" style="margin-left: 10px; font-size: 20px;"></i>
                      {{ date(' d/m/Y  ', strtotime($course->created_at)) }}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Body Page -->

      <!-- Start Icons Top Page -->
      <section class="more_items_sec text-center">
        <div class="container">
          <a href="#" title="">
            <svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M18.1618 24.0001H0.838235C0.374412 24.0001 0 23.6261 0 23.1628V5.86052C0 5.39727 0.374412 5.02332 0.838235 5.02332H18.1618C18.6256 5.02332 19 5.39727 19 5.86052V23.1628C19 23.6261 18.6256 24.0001 18.1618 24.0001ZM1.67647 22.3256H17.3235V6.69773H1.67647V22.3256Z"
                fill="#9494A0" />
              <g opacity="0.25">
                <path opacity="0.25"
                  d="M13.1324 4.18605C12.6685 4.18605 12.2941 3.81209 12.2941 3.34884V1.67442H6.70589V3.34884C6.70589 3.81209 6.33148 4.18605 5.86765 4.18605C5.40383 4.18605 5.02942 3.81209 5.02942 3.34884V0.83721C5.02942 0.373954 5.40383 0 5.86765 0H13.1324C13.5962 0 13.9706 0.373954 13.9706 0.83721V3.34884C13.9706 3.81209 13.5962 4.18605 13.1324 4.18605Z"
                  fill="#9494A0" />
              </g>
              <path
                d="M9.50001 19.3479C9.28487 19.3479 9.06972 19.267 8.90766 19.1024L5.92634 16.1275C5.59942 15.801 5.59942 15.2707 5.92634 14.9442C6.25325 14.6177 6.78413 14.6177 7.11104 14.9442L9.50001 17.3275L11.8862 14.9442C12.2131 14.6177 12.744 14.6177 13.0709 14.9442C13.3978 15.2707 13.3978 15.801 13.0709 16.1275L10.0924 19.1024C9.93031 19.267 9.71516 19.3479 9.50001 19.3479Z"
                fill="#9494A0" />
              <path
                d="M9.49999 18.4186C9.03617 18.4186 8.66176 18.0447 8.66176 17.5814V10.3256C8.66176 9.86236 9.03617 9.4884 9.49999 9.4884C9.96382 9.4884 10.3382 9.86236 10.3382 10.3256V17.5814C10.3382 18.0447 9.96382 18.4186 9.49999 18.4186Z"
                fill="#9494A0" />
              <g opacity="0.5">
                <path opacity="0.5"
                  d="M15.6471 6.69764C15.1832 6.69764 14.8088 6.32369 14.8088 5.86043V4.18601H4.19118V5.86043C4.19118 6.32369 3.81677 6.69764 3.35294 6.69764C2.88912 6.69764 2.51471 6.32369 2.51471 5.86043V3.34881C2.51471 2.88555 2.88912 2.5116 3.35294 2.5116H15.6471C16.1109 2.5116 16.4853 2.88555 16.4853 3.34881V5.86043C16.4853 6.32369 16.1109 6.69764 15.6471 6.69764Z"
                  fill="#9494A0" />
              </g>
            </svg>
          </a>
        </div>
      </section>
      <!-- End Icons Top Page -->
    </div>
    <!-- Start Link Files Script Website -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/flatpickr.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- <script src="assets/js/script-input-tags.js"></script> -->
    <script src="{{asset('assets/js/script-uploads-images.js')}}"></script>
  </body>

</html>
