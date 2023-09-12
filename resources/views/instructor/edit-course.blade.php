<!DOCTYPE html>
<html lang="ar">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>كورسيز | تعديل الكورس</title>
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
		<header style="color: #000; text-align: center; display: flex; justify-content: center; margin: 50px 0 25px;
										font-size: 25px; font-weight: 800;">
			سوف يتم تعديل بيانات الكورس في حالة تم الضغط على زر تعديل
		</header>


		<div class="row pl-5 pr-5"
			style="background-image: url(./assets/images/footer-bg.png); background-repeat: repeat; background-size: contain; margin-bottom: 20px; ">
			<div class="col-11" style="margin-right: 50px;">
				<div class="wrapper" style="padding: 20px; box-shadow: 0px 0px 15px 2px #e7e7e7;
    border-radius: 12px;">
					<!-- Start Create Courses -->
					<section class="vid-title-sec pl-1 pr-1">
						<form action="{{route('update-course')}}" method="post" enctype="multipart/form-data" class="row pl-5 pr-5">
							@csrf
                            <input type="number" name="course_id" value="{{$course->id}}" hidden>
                            <div class="col-lg-7" style="width: 100%;">
								<section class="vid-title-sec">
									<div class="container" style="padding-left: 0 !important; padding-right: 0 !important;">

										<div class="vid-title">
											<h2 class="title-hd">عنوان الكورس </h2>
											<div class="form_field">
												<input class="color-input-forms" name="name" type="text" value="{{$course->name}}" placeholder="50 حرف كا أقصى حد">
											</div>
										</div>

										<div class="abt-vidz-pr" style="margin-bottom: -20px;">
											<h2 class="title-hd"> عن الكورس </h2>
											<div class="form_field">
												<textarea class="color-input-forms" name="description" placeholder="وصف الكورس">{{$course->description}}</textarea>
											</div>
										</div>

										<div class="abt-tags">
											<div class="row" style="align-items: baseline;">
												<div class="col-lg-3 col-md-5 col-sm-5 col-12">
													<h2 class="title-hd">سعر الكورس</h2>
													<div class="form_field pr">
														<input class="color-input-forms" name="price" value="{{$course->price}}" type="text" placeholder="1,000">
													</div>
												</div>
												<div class="col-lg-4 col-md-7 col-sm-7 col-12">
													<div class="option">
														<h2 class="title-hd">تصنيف الكورس </h2>
														<div class="form_field">
															<select id="category" name="category" class="color-input-forms">
																@foreach($categories as $cat)
                                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                                @endforeach

															</select>
															<div class="arw_vz">
																<svg width="24" height="26" viewBox="0 0 24 26" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" clip-rule="evenodd"
																		d="M19.9394 7.51447L22.0607 9.63579L12 19.6964L1.93936 9.63579L4.06068 7.51447L12 15.4538L19.9394 7.51447Z"
																		fill="#9494A0"></path>
																</svg>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-5 col-md-12 col-sm-12 col-12">
													<div class="option">
														<h2 class="title-hd" style="font-size: 13px; font-weight: bold; margin-top: 15px;"> إضافة

															إلى دبلوم<span style="color: red; font-size: 13px; font-weight: bold;"> إختياري *
															</span>
														</h2>
														<div class="form_field">
															<select id="diplomas" name="diploma" class="color-input-forms">
                                                                <option value="-1">لايوجد لديك دبلومات</option>
                                                            @foreach($diplomas as $diploma)
                                                                <option value="{{$diploma->id}}"> {{$diploma->name}}</option>
                                                                @endforeach
															</select>
															<div class="arw_vz">
																<svg width="24" height="26" viewBox="0 0 24 26" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
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


										<!-- Start Button Create Courses -->
										<div class="btn-sbmit">
											<a href="">
												<button type="submit" style="width: 50%;">تعديل بيانات الكورس</button>
											</a>
										</div>
										<!-- End Button Create Courses -->
										<div class="clearfix"></div>
									</div>
								</section>
							</div>
                            <input type="file"  name="img" id="inputFile" hidden>
							<div class="col-lg-5">
								<div class="drag-area color-input-forms"
									style="margin: 21px  0px 15px; width: 100%; height: 400px; box-shadow: 0px 0px 12px 10px #ecececd1;">
									<header>
										عزيزي المستخدم الرائع إسحب و أفلت ملف الصورة الخاص بك هنا
									</header>
									<span>أو</span>
									<div>إختيار صورة</div>
									<input type="file" hidden />
								</div>
							</div>

						</form>
					</section>
					<!-- End Create Courses -->
				</div>
			</div>

		</div>

		<a href="index.html">
			<div class="d-grid gap-2" style="display: flex; justify-content: center;">
				<button style="width: 20%; padding: 10px;" type="button" name="" id="" class="btn btn-primary">العودة الى الصفحة الرئيسية</button>
			</div>
		</a>

		<!-- End Wrapper -->

		<!-- Start Link Files Script Website -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/popper.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/flatpickr.js')}}"></script>
		<script src="{{asset('assets/js/script.js')}}"></script>
		<script src="{{asset('assets/js/script-uploads-images.js')}}"></script>

    <script>
        let cat=document.querySelector('#category');
        cat.value={{$course->category_id}};

        console.log({{$course->diploma}});
        let dip=document.querySelector('#diplomas');
        dip.value={{count($course->diploma)>0?$course->diploma->id:-1}};
    </script>

	</body>

</html>
