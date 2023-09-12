<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>كورس | كورس الويب</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/uploads-video.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-video-player.css')}}">
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

                        <a href="/" title="" class="logo">
                            <!-- <img src="assets/images/logo.png" alt=""> -->
                            <h1 style="
						                      font-size: 15px;
						                      background-color: black;
						                      color: white;
						                      padding: 0 10px;
						                      border-radius: 4px;
						                    ">
                                تعلم
                            </h1>
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
            </div>
        </div>
    </header>
    <!-- End Header -->



    <!-- Start Body Page -->
    <section class="mn-sec full_wdth_single_video">
        <div class="row gap_remove">

            <!-- Start Video Playing Preview -->
            <div class="col-lg-9">
                <div class="vid-pr">
                    <!-- Start Custom Video Player -->
                    <div id="video_player" style="direction: ltr;">
                        <div class="loader"></div>
                        <video preload="metadata" id="main-video">
                            <source src="{{asset($videos[0]->video??'')}}" size="480" type="video/mp4">
                            <source src="{{asset($videos[0]->video??'')}}" size="720" type="video/mp4">
                        </video>
                        <p class="caption_text"></p>
                        <div class="progressAreaTime">0:00</div>
                        <div class="controls">
                            <div class="progress-area">
                                <canvas class="bufferedBar"></canvas>
                                <div class="progress-bar">
                                    <span></span>
                                </div>
                            </div>

                            <div class="controls-list">
                                <div class="controls-left">
											<span class="icon">
												<i class="material-icons fast-rewind">replay_10</i>
											</span>

                                    <span class="icon">
												<i class="material-icons play_pause">play_arrow</i>
											</span>

                                    <span class="icon">
												<i class="material-icons fast-forward">forward_10</i>
											</span>

                                    <span class="icon">
												<i class="material-icons volume">volume_up</i>

												<input type="range" min="0" max="100" class="volume_range"/>
											</span>

                                    <div class="timer">
                                        <span class="current">0:00</span>
                                        <span class="duration">0:00</span>
                                    </div>
                                </div>

                                <div class="controls-right">
											<span class="icon">
												<i class="material-icons auto-play"></i>
											</span>

                                    <span class="icon">
												<i class="material-icons captionsBtn">closed_caption</i>
											</span>

                                    <span class="icon">
												<i class="material-icons settingsBtn">settings</i>
											</span>

                                    <span class="icon">
												<i class="material-icons picture_in_picutre">picture_in_picture_alt</i>
											</span>

                                    <span class="icon">
												<i class="material-icons fullscreen">fullscreen</i>
											</span>
                                </div>
                            </div>
                        </div>
                        <div id="settings">
                            <div data-label="settingHome">
                                <ul>
                                    <li data-label="speed">
                                        <span> Speed </span>
                                        <span class="material-symbols-outlined icon">
													arrow_forward_ios
												</span>
                                    </li>
                                    <li data-label="quality">
                                        <span> Quality </span>
                                        <span class="material-symbols-outlined icon">
													arrow_forward_ios
												</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="playback" data-label="speed" hidden>
										<span>
											<i class="icon back_arrow" data-label="settingHome"></i>
											<i class="material-symbols-outlined icon arrow back"
                                               data-label="settingHome">
												arrow_back
											</i>
											<span>Playback Speed </span>
										</span>
                                <ul>
                                    <li data-speed="0.25">0.25</li>

                                    <li data-speed="0.5">0.5</li>

                                    <li data-speed="0.75">0.75</li>

                                    <li data-speed="1" class="active">Normal</li>

                                    <li data-speed="1.25">1.25</li>

                                    <li data-speed="1.5">1.5</li>

                                    <li data-speed="1.75">1.75</li>

                                    <li data-speed="2">2</li>
                                </ul>
                            </div>
                            <div data-label="quality" hidden>
										<span>
											<i class="material-symbols-outlined icon back_arrow"
                                               data-label="settingHome">
												arrow_back
											</i>
											<span>Playback Quality </span>
										</span>
                                <ul>
                                    <li data-quality="auto" class="active">auto</li>
                                </ul>
                            </div>
                        </div>
                        <div id="captions">
                            <div class="caption">
                                <span>Select Subtitle</span>
                                <ul>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom Video Player -->
                </div>
            </div>
            <!-- End Video Playing Preview -->

            <!-- Start PlayList Videos -->
            <div class="col-lg-3">
                <div class="playlist_view">
                   {{-- <h3 style="margin-right: 30px; font-weight: 800;">فيديو رقم <span>2 / 76</span></h3>--}}
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <ul class="videos_lizt mCustomScrollbar" data-mcs-theme="dark">

                        @if(count($videos)>0)
                            <?php $index=1; ?>
                            @foreach($videos as $video)

                                <li>
                                    <div class="vidz_row">
                                        <span class="vid_num">{{$index++}}</span>
                                        <div class="vidz_img">
                                            <div title="">
                                                <img src="{{asset($video->img)}}" alt="" width="100%"
                                                     style="height: 80px;">
                                            </div>
                                            <span class="watch_later">
												<i class="icon-playlist"
                                                   style="font-size: 20px; margin-top: -35px; display: block;"></i>
											</span>
                                        </div>
                                        <div class="video_info">
                                            <h3><a href="#" title="">{{$video->name}} </a>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <li>لا يوجد فيديوهات في هذا الكورس</li>
                        @endif

                    </ul><!--videos_lizt end-->
                </div>
            </div>
            <!-- End PlayList Videos -->
        </div>

        <!-- Start Information Video All  -->
        <div class="container" style="max-width: 1330px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mn-vid-sc single_video">

                        <div class="vid-1">
                            <div class="vid-info">
                                <h3 id="vName">{{$videos[0]->name??''}}</h3>
                                <div class="info-pr">
                                    {{--                                    <span>60,723,169 مشاهدة</span>--}}
                                    <div class="clearfix"></div>
                                </div><!--info-pr end-->
                            </div>
                        </div>

                        <div class="abt-mk">
                            <div class="info-pr-sec">
                                <div class="vcp_inf cr">
                                    <div class="vc_hd">
                                        <img src="{{asset('assets/images/resources/th5.png')}}" alt="">
                                    </div>
                                    <div class="vc_info pr">
                                        <h4><a href="#" title="">{{$instructor->name}}</a></h4>
                                        <span>أنشئت في Oct 4, 2023</span>
                                    </div>
                                </div><!--vcp_inf end-->
                                {{--<ul class="chan_cantrz">
                                    <li>
                                        <a href="#" title="" class="donate">إشترك</a>
                                    </li>
                                    <li>
                                        <a href="#" title="" class="subscribe">عدد المشتركين <strong>13M</strong></a>
                                    </li>
                                </ul>--}}
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <!--Start Some Courses Hesham Alsaqqaf -->
                      {{--  <div class="vidz-row viddz">
                            <div class="container">
                                <div class="vidz_sec">
                                    <h3>كورسات هشام السقاف</h3>
                                    <div class="clearfix"></div>
                                    <div class="vidz_list">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                                <div class="videoo">
                                                    <div class="vid_thumbainl">
                                                        <div>
                                                            <img src="assets/images/0x0.jpg" alt="">
                                                            <div class="watch_later view-model">
                                                                تعديل بيانات الكورس
                                                                <i class="icon-watch_later_fill"
                                                                   style="background-color: #1596fc; border-radius: 8px; padding: 0 5px; margin-left: 3px;"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="video_info">
                                                        <h3><a href="single_video_playlist.html" title="">برمجة ويب:
                                                                إنشاء الصفحات الإلكترونية
                                                                بواسطة اطار لارافل 10</a></h3>
                                                        <h4>
                                                            <span><strong style="color: #1596fc; font-weight: bold;">$20,000</strong> ريال يمني</span>
                                                            <span class="verify_ic">
																		<i class="icon-tick"></i>
																	</span>
                                                        </h4>
                                                        <span
                                                            style="display: flex; justify-content: space-between; margin-top: 8px;">
																	<small>
																		<i class="icon-user"
                                                                           style="color: #3268a6;"></i> 686K المشتركين
																	</small>
																	<small class="posted_dt">
																		<i class="icon-watch_later_fill"
                                                                           style="color: #4a90e2;"></i> 1 منذ
																		إسبوع</small>
																</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--vidz_list end-->
                                </div>
                                <!--vidz_videos end-->
                            </div>
                        </div>--}}
                        <!--End Some Courses Hesham Alsaqqaf -->

                        <!-- Start Add Quations Video -->
                        <div class="cmt-bx">
                            <ul class="cmt-pr">
                                <li> الأسئلة <span>{{count($questions)}}</span></li>
                                <li>
                                    <span><i class="icon-sort_by"></i><a href="#" title="">الترتيب بواسطة</a></span>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                            <div class="vcp_inf pc">
                                <div class="vc_hd">
                                    <img src="assets/images/resources/th1.png" alt="">
                                </div>
                                <form id="formQuestion" action="{{route('question-save')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <input type="number" name="course_id" value="{{$course->id}}" hidden>
                                    <input name="question" id="bodyQ" type="text" placeholder="إضافة سؤال هنا">
                                    <button id="submitQuestion" type="submit">سؤال</button>
                                </form>
                                <div class="clearfix"></div>
                                <div class="rt-cmt">
                                    <a href="#" title="">
                                        <i class="icon-cancel"></i>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                                <!--vcp_inf end-->
                            </div>
                            <!--cmt-bx end-->
                            <ul class="cmn-lst">
                                @if(count($questions)>0)
                                    @foreach($questions as $q)
                                    <li>
                                        <div class="vcp_inf">
                                            <div class="vc_hd">
                                                <img src="{{asset('assets/images/resources/th2.png')}}" alt="">
                                            </div>
                                            <div class="coments">
                                                <h2 class="color_blue"> {{$q->user->name}} | <small class="posted_dt">{{ date(' d/m/Y  ', strtotime($q->created_at)) }} </small></h2>
                                                <p>{{$q->question}}</p>
                                                <!-- Start إجابة السؤال  -->

                                                <div class="coments style-form-answear-qouetions">
                                                    <div class="vc_hd" style="margin-left: 30px;">
                                                        <img src="assets/images/resources/th2.png" alt="">
                                                    </div>
                                                    <h2 class="color_blue"> mahmod | <small class="posted_dt"> قبل
                                                            18
                                                            ساعة</small></h2>
                                                    <p style="width: 100%;">كل ما تراه أمامك على متصفح الويب من أزرار و
                                                        قوائم وغيرها هي في
                                                        الحقيقةبيانات مخزنة في قواعد كل ما تراه أمامك على متصفح الويب من
                                                        أزرار و قوائم وغيرها
                                                    </p>
                                                </div>
                                                <!-- Start Button Click Show All Ask Qustions -->
                                                <div style="margin: 10px 15px 20px; color: #1596fc;">إظهار جميع 170
                                                    الردود
                                                </div>
                                                <!-- End Button Click Show All Ask Qustions -->

                                                <!-- End إجابة السؤال  -->
                                                <!-- Start Form Send Answear Qouetion -->
                                                <div class="vcp_inf pc">
                                                    <form id="formAnswer"  style="float: right;">
                                                        @csrf
                                                        <input name="answer" style="color: #000;" type="text"
                                                               placeholder="إضافة الإجابة هنا">
                                                        <button id="submitAnswer" type="submit" style="background-color: #1596fc;">الإجابة
                                                        </button>
                                                    </form>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <!-- Start Form Send Answear Qouetion -->
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                @else
                                    <li>لا يوجد اي اسئلة بعد</li>
                                @endif
                            </ul>
                            <!--comment list end-->
                        </div>
                        <!-- End Add Quations Video -->

                    </div>
                </div>
            </div>
            <!-- End Information Video All  -->
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
    <!-- End Icons Top Page -->
</div>
<!-- Start Link Files Script Website -->
<script type="module" src="{{asset('assets/js/instructor/Q_Acode.js?x='.time())}}" ></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.js')}}"></script>
<script src="{{asset('assets/js/script-video-player.js')}}"></script>
<script src="{{asset('assets/js/script-uploads-video.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>
