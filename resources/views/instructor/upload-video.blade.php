<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>كورس | رفع دبلوم</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-video-player.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-btn.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/uploads-video.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color.css')}}">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
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
                    <ul class="controls-lv">
                        <li>
                            <a href="{{route('instructor')}}" title="">
                                المحاضر
                            </a>
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

    <!-- Start Side Menu -->
    <div class="side_menu">
        <div class="form_dvv">
            <a href="#" title="" class="login_form_show" style="background-color: #1596fc;">
                تسجيل الدخول
            </a>
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
        <div class="sd_menu subs_lst">
            <h3>الإشتراكات</h3>
            <ul class="mm_menu">
                <li>
							<span class="usr_name">
								<img src="assets/images/resources/th1.png" alt="" />
							</span>
                    <a href="#" title="">هشام السقاف</a>
                    <small>3</small>
                </li>
                <li>
							<span class="usr_name">
								<img src="assets/images/resources/th2.png" alt="" />
							</span>
                    <a href="#" title="">عبد الرحمن السادة</a>
                    <small>6</small>
                </li>
                <li>
							<span class="usr_name">
								<img src="assets/images/resources/th3.png" alt="" />
							</span>
                    <a href="#" title="">إسحاق قاسم</a>
                    <small>2</small>
                </li>
                <li>
							<span class="usr_name">
								<img src="assets/images/resources/th4.png" alt="" />
							</span>
                    <a href="#" title="">محمد الشرجبي</a>
                    <small>11</small>
                </li>
                <li>
							<span class="usr_name">
								<img src="assets/images/resources/th5.png" alt="" />
							</span>
                    <a href="#" title="">محمود الحلقي</a>
                    <small>3</small>
                </li>
                <li>
							<span class="usr_name">
								<img src="assets/images/resources/sn.png" alt="" />
							</span>
                    <a href="#" title="">هشام السقاف</a>
                    <small>20</small>
                </li>
            </ul>
            <a href="#" title="" class="more-ch">
                <i class="icon-arrow_below"></i>
                إظهار الباقي 14
            </a>
        </div>
        <div class="sd_menu m_linkz">
            <ul class="mm_menu">
                <li><a href="#">ماذا عنا</a></li>
                <li><a href="#">سياسة الخصوصية</a></li>
                <li><a href="#">تواصل معنا</a></li>
                <li><a href="#">الرئيسية</a></li>
                <li><a href="#">الأسئلة</a></li>
            </ul>
            <span>هشام & عبد الرحمن</span>
        </div>
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
        </div>
        <div class="dd_menu"></div>
    </div>
    <!-- End Side Menu -->



    <!-- Start Enter Data In Video In This Uploaded -->
    <section class="vid-title-sec">
        <div class="container">
            <form action="{{route('save-video')}}" method="post" enctype="multipart/form-data" id="formData">
                @csrf
                <input id="inputFile" name="video" type="file" hidden>
                <section class="upload-detail">
                    <div class="container">
                        <h3 style="font-weight: 800;">منطقة رفع الفيديو</h3>
                        <div id="drag" class="vid_thumbainl tr drag-area">

                            <header>
                                عزيزي المستخدم الرائع إسحب و أفلت ملف الفيديو الخاص بك هنا
                            </header>
                            <span>أو</span>
                            <div>إختيار الفيديو</div>

                        </div>
                        <div class="video_info sr">
                            <div class="vid-title">
                                <h2 class="title-hd">عنوان الفيديو</h2>
                                <div class="form_field">
                                    <input type="text" name="name" id="name" placeholder="أضف هنا (99 حرف كاأقصى حد)" />
                                </div>
                            </div>
                            <div class="cls-vidz" style="margin-top: 20px;">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="option">
                                            <h2 class="title-hd">إضافة إلى قائمة </h2>
                                            <div class="form_field">
                                                <select id="courses" name="course">

                                                </select>
                                                <div class="arw_vz">
                                                    <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M19.9394 7.51447L22.0607 9.63579L12 19.6964L1.93936 9.63579L4.06068 7.51447L12 15.4538L19.9394 7.51447Z"
                                                              fill="#9494A0"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!--option end-->
                                    </div>
                                </div>
                            </div>

                            <button type="submit"   class="btn" id="upload">
                                <div class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>إكتمل الرفع</span>
                                </div>

                                <div class="download">
                                    <i class="fas fa-download"></i>
                                    <span id="upload">رفع الفيديو</span>
                                </div>
                            </input>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
            </form>
        </div>
    </section>
    <!-- End Enter Data In Video In This Uploaded -->
    <video controls src="" class="vid_thumbainl tr drag-area" id="video" width="600px" height="250px" hidden ></video>
    <canvas id="canvas" width="600px" height="250px" hidden >canvas</canvas>
    <!-- Start Footer -->
    <footer style="margin-top: 100px;">
        <div class="container">
            <div class="bottom-strip">
                <p>
                    © Hesham & Obad
                    <i class="icon-like"></i>
                    Made in Yemen
                </p>
                <ul class="social-links">
                    <li>
                        <a href="#" title=""><i class="icon-facebook-official"></i></a>
                    </li>
                    <li>
                        <a href="#" title=""><i class="icon-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" title=""><i class="icon-instagram"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!--bottom-strip end-->
        </div>
    </footer>
    <!-- End Footer -->
</div>
<!--wrapper end-->

{{--<form id="fileUploadForm" method="post" action="{{route('try')}}" enctype="multipart/form-data">--}}

{{--    <input type="file" name="n">--}}
{{--    <input type="submit" value="sdgfsdg">--}}
{{--</form>--}}



<!-- Start Link Files Script Website -->

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/flatpickr.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/script-uploads-video.js')}}"></script>
<script type="module" src="{{asset('assets/js/instructor/video.js?x='.time())}}"></script>
<script src="{{asset('assets/js./jquery.form.min.js')}}"  crossorigin="anonymous"></script>

<script>
    $(function () {
        $(document).ready(function () {
            $('#formData').ajaxForm({
                beforeSend: function () {
                    var percentage = '0';
                    $('#upload').addClass('active');
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    var percentage = percentComplete;
                    $('#upload').css("width", percentage+'%', function() {
                        return $(this).attr("aria-valuenow", percentage) + "%";
                    })
                    console.log(percentage);
                },
                complete: function (xhr) {
                    $('#upload').removeClass('active');
                    console.log('File has uploaded');
                }
            });
        });
    });
</script>
<!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> -->
</body>

</html>
