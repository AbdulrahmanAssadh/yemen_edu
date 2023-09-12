<!DOCTYPE html>
<html lang="ar">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>كورسيز | إنشاء دبلوم</title>
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
	</head>

	<body>
		<!-- Start Wrapper -->
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
							<ul class="controls-lv">
								<li>
									<a href="{{route('instructor')}}" title="">المحاضر</a>
								</li>
								<li>
									<a href="my-courses.html" title="">كورساتي</a>
								</li>
								<li class="user-log">
									<div class="user-ac-img">
										<img style="width: 50px;" src="{{asset('assets/images/resources/user-img.png')}}" alt="">
									</div>
									<div class="account-menu">
										<div class="user-ac-img" style="margin-right: 15px; display: flex; align-items: center;">
											<img src="assets/images/resources/user-img.png" alt="">
											<h4 style="font-size: 15px; font-weight: 800;">هشام زهير السقاف
												<p style="font-size: 8px; color: #888; font-weight: 400;">heshamalsaqqaf14@gmail.com</p>
											</h4>
										</div>
										<div class="sd_menu">
											<ul class="mm_menu">
												<li>
													<span>
														<i class="icon-user"></i>
													</span>
													<a href="#" title="">بروفيلي</a>
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
													<a href="#" title="">تسجيل الخروج</a>
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
			<!-- End Side Menu  -->

		<!-- Start Create Courses -->
		<section class="vid-title-sec">
			<h1 class="heading-name-page"><strong style="color: #757575; font-weight: 700;">مرحبا بك أيها الرائع |</strong>
				قم في إنشاء دبلومك الان</h1>
			<form method="post" action="{{route('save-diploma')}}" enctype="multipart/form-data" class="row pl-5 pr-5">
				@csrf
                <input type="file" name="img"  id="inputFile" hidden />
                <div class="col-lg-6">
					<div class="drag-area"
						style="margin: 21px  0px 15px; width: 100%; height: 400px; box-shadow: 0px 0px 12px 10px #ecececd1;">
						<header>
							عزيزي المستخدم الرائع إسحب و أفلت ملف الصورة الخاص بك هنا
						</header>
						<span>أو</span>
						<div>إختيار صورة</div>
{{--						<input type="file" id="inputFile" name="img" hidden />--}}
					</div>
				</div>
				<div class="col-lg-6" style="width: 100%;">
					<section class="vid-title-sec">
						<div class="container" style="padding-left: 0 !important; padding-right: 0 !important;">

							<div class="vid-title">
								<h2 class="title-hd">عنوان الدبلوم </h2>
								<div class="form_field">
									<input type="text"  name="name" placeholder="50 حرف كا أقصى حد">
								</div>
							</div>

							<div class="abt-vidz-pr" style="margin-bottom: -20px;">
								<h2 class="title-hd"> عن الدبلوم </h2>
								<div class="form_field">
									<textarea name="description" placeholder="وصف الدبلوم"></textarea>
								</div>
							</div>

							<div class="abt-tags">
								<div class="row" style="align-items: baseline;">
									<div class="col-lg-5 col-md-5 col-sm-5 col-12">
										<h2 class="title-hd">خصم الدبلوم %</h2>
										<div class="form_field pr">
											<input type="text" name="discount" placeholder="10">
										</div>
									</div>
									<div class="col-lg-7 col-md-7 col-sm-7 col-12">
										<div class="option">
											<h2 class="title-hd">تصنيف الدبلوم </h2>
											<div class="form_field">
												<select name="category" id="categories">

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
									</div>

								</div>
							</div>

							<div class="btn-sbmit">
								<!-- Start Button Create Courses -->

									<button type="submit" style="width: 40%;">إنشاء الدبلوم</button>

							</div>
							<!-- End Button Create Courses -->
							<div class="clearfix"></div>

						</div>
					</section>
				</div>
			</form>
		</section>
		<!-- End Create Courses -->

		</div>
		<!-- End Wrapper -->

		<!-- Start Link Files Script Website -->

        <script type="module" src="{{asset('assets/js/instructor/creatDiploma.js')}}"></script>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/flatpickr.js')}}"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>
        <!-- <script src="assets/js/script-input-tags.js"></script> -->
        <script src="{{asset('assets/js/script-uploads-images.js')}}"></script>

	</body>

</html>
