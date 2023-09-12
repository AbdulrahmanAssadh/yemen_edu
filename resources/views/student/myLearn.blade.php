<!DOCTYPE html>
<html lang="ar">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>كورس | كورساتي</title>
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
		<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
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

			<!-- Start Filters -->
		{{--	<section class="filter-sec">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
							<div class="filter">
								<h3 class="fl-head"><i class="icon-filter"></i> فلترة</h3>

							</div><!--filter end-->
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
							<div class="filter">
								<h3 class="fl-head"><i class="icon-calender"></i> تاريخ الرفع</h3>
								<ul class="lnks">
									<li><a href="#" title="">اخر ساعة</a></li>
									<li><a href="#" title="">اليوم</a></li>
									<li><a href="#" title="">هذا الأسبوع</a></li>
									<li><a href="#" title="">هذا الشهر</a></li>
									<li><a href="#" title="">هذة السنة</a></li>
								</ul>
							</div><!--filter end-->
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
							<div class="filter">
								<h3 class="fl-head"><ion-icon name="person-outline" style="margin-left: 6px;"></ion-icon> المحاضر</h3>
								<ul class="lnks">
									<li><a href="#" title="">هشام السقاف <i class="icon-cancel"></i></a></li>
									<li><a href="#" title="">عبدالرحمن السادة</a></li>
									<li><a href="#" title="">إسحاق قاسم</a></li>
									<li><a href="#" title="">محمود الحلقي</a></li>
									<li><a href="#" title="" style="color: #b0b0b0;">عرض الكل<ion-icon
												name="chevron-up-outline"></ion-icon></a></li>
								</ul>
							</div><!--filter end-->
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
							<div class="filter">
								<h3 class="fl-head"><i class="icon-star"></i> الترتيب بواسطة</h3>
								<ul class="lnks">
									<li><a href="#" title="">تلقائي </a></li>
									<li><a href="#" title="">تاريخ الرفع</a></li>
									<li><a href="#" title="">عدد المشاهدات</a></li>
									<li><a href="#" title="">التقيم</a></li>
								</ul>
							</div><!--filter end-->
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
							<div class="filter">
								<h3 class="fl-head"><i class="icon-watch_later"></i>التصنيف</h3>
								<ul class="lnks">
									<li><a href="#" title="">تقنية </a></li>
									<li><a href="#" title="">طبية</a></li>
									<li><a href="#" title="">هندسية</a></li>
									<li><a href="#" title="">جرافيكس</a></li>
									<li><a href="#" title="" style="color: #b0b0b0;">عرض الكل<ion-icon
												name="chevron-up-outline"></ion-icon></a></li>
								</ul>
							</div><!--filter end-->
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-6 full_wdth">
							<div class="filter">
								<h3 class="fl-head"
									style="font-weight: bold; color: white; background-color: rgba(4, 4, 4, 0.936); padding: 5px 10px; text-align: center; border-radius: 3px;">
									إلغاء الفلترة</h3>
							</div><!--filter end-->
						</div>

					</div>
				</div>
			</section>--}}
			<!--End Filters -->

			<!-- Start Tabs -->
			<div class="history-lst tbY">
				<div class="container">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="videos_taab" data-toggle="tab" href="#vvideo_tabz" role="tab"
								aria-controls="videos_taab" aria-selected="true">الكورسات </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="playlist-tab" data-toggle="tab" href="#playlist_tab" role="tab"
								aria-controls="playlist-tab" aria-selected="false">الدبلومات</a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- End Tabs -->

			<!-- Start Content Featured Videos  -->
			<div class="tab-content p-0" id="myTabContent">
				<div class="tab-pane fade show active" id="vvideo_tabz" role="tabpanel" aria-labelledby="videos_taab">
					<div class="videso_tb_details">
						<div class="container">
							<div class="vidz_sec">
								<h3>كورساتي</h3>
								<a href="#" title="">عرض الكل<i class="icon-sort_by"></i></a>
								<div class="clearfix"></div>
								<div class="vidz_list">
									<div class="row">
                                        @foreach($sub_courses as $sub)
                                        <?php $course=$sub->courses ?>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                                <div class="videoo">
                                                    <a href="{{route('view-video',$course->id)}}"
                                                       title="">
                                                    <div class="vid_thumbainl">
                                                        <div>
                                                            <img src="{{asset($course->img)}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="video_info">
                                                        <h3>{{$course->name}}</a>
                                                        </h3>
                                                        <h4>
															<span><strong
                                                                    style="color: #1596fc; font-weight: bold;"> ${{$course->price}}</strong> دولار</span>
                                                            <span class="verify_ic">
																		<i class="icon-tick"></i>
																	</span>
                                                        </h4>
                                                        <span
                                                            style="display: flex; justify-content: space-between; margin-top: 8px;">
																	<small class="subscribe-date-courses-diploma">
																		<i class="icon-user"
                                                                           style="color: #3268a6;"></i> 686K المشتركين
																	</small>
																	<small
                                                                        class="posted_dt subscribe-date-courses-diploma">
																		<i class="icon-watch_later_fill"
                                                                           style="color: #4a90e2;"></i> {{ date(' d/m/Y  ', strtotime($course->created_at)) }}</small>
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
				</div>
				<div class="tab-pane" id="playlist_tab" role="tabpanel" aria-labelledby="playlist-tab">
					<div class="playlist_tab">
						<div class="viddz">
							<div class="container">
                                <div class="vidz_sec">
                                    <h3 style="color: #1596fc; cursor: pointer;">دبلومات <strong
                                            style="color: #000;"></strong></h3>
                                    <div class="clearfix"></div>

                                    <div class="vidz_list">
                                        <div class="row">
                                            @foreach($sub_diplomas as $sub_d)
                                                    <?php $diploma=$sub_d->diplomas; ?>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                                    <div class="videoo">
                                                        <div class="vid_thumbainl">
                                                            <div>
                                                                <img src="{{asset($diploma->img)}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="video_info">
                                                            <h3><a href=""
                                                                   title="">{{$diploma->name}}</a></h3>
                                                            <div
                                                                style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                                                <h4>
																				<span><strong
                                                                                        style="color: #1596fc; font-weight: bold;">%{{$diploma->discount*100}}</strong>
																					الخصم</span>
                                                                </h4>
                                                                <h4
                                                                    style="text-align: center; padding: 0 5px 0 0; border-radius: 4px; background-color: #1598fc; color: #FFF;">
                                                                            <span
                                                                                style="font-size: 12px;"> 8 كورسات</span>
                                                                    <span class="verify_ic">
																					<i class="icon-playlist"
                                                                                       style="color: #FFF;"></i>
																				</span>
                                                                </h4>
                                                            </div>
                                                            <span
                                                                style="display: flex; justify-content: space-between;">
																			<small>
																				<i class="icon-user"
                                                                                   style="color: #3268a6;"></i> 686K المشتركين
																			</small>
																			<small class="posted_dt">
																				<i class="icon-watch_later_fill"
                                                                                   style="color: #4a90e2;"></i> {{date('d/m/y',strtotime($diploma->created_at))}}</small>
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



					</div>
				</div>
			</div>
			<!-- Start Content Featured Videos  -->

			<!-- Start Icon Top Pages -->
			<section class="more_items_sec mgt-50 text-center">
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
			<!-- End Icon Top Pages -->

		</div>
		<!-- Start Link Files Script Website -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/flatpickr.js')}}"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>
        <script src="{{asset('assets/js/script-uploads-images.js')}}"></script>
	</body>

</html>
