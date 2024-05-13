@extends('layouts.app')

@section('content')

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main hero START -->
<section class="pt-7 pt-md-8">
	<div class="container pt-4 pt-md-0">
		<div class="row justify-content-between">

			<div class="col-lg-6 mb-6 mb-lg-0">
				<div class="d-flex flex-column h-100">
					<!-- Title -->
					<h1 class="mb-3">تواصل معنا للحصول على المزيد من المعلومات</h1>
					<p class="mb-0">يمكنك الوصول إلينا في أي وقت عبر <a href="#">example@gmail.com</a></p>

					<!-- Social button -->
					<div class="d-sm-flex gap-3 align-items-center my-5">
						{{-- <h6 class="mb-3 mb-sm-0">Follow us on:</h6> --}}
						<ul class="list-inline flex-wrap mb-0">
							<li class="list-inline-item">
								<a href="#" class="btn btn-icon btn-light text-facebook rounded-circle"><i class="bi bi-facebook"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-icon btn-light text-instagram rounded-circle"><i class="bi bi-instagram"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-icon btn-light text-dribbble rounded-circle"><i class="bi bi-dribbble"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-icon btn-light text-twitter rounded-circle"><i class="bi bi-twitter"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-icon btn-light text-youtube rounded-circle"><i class="bi bi-youtube"></i></a>
							</li>
						</ul>
					</div>

					<!-- Client slider START -->
					<div class="mt-md-auto">
						<div class="swiper swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden" data-swiper-options="{
							&quot;loop&quot;: false, 
							&quot;slidesPerView&quot;: 2, 
							&quot;spaceBetween&quot;: 40,
							&quot;breakpoints&quot;: { 
								&quot;576&quot;: {&quot;slidesPerView&quot;: 3},
								&quot;768&quot;: {&quot;slidesPerView&quot;: 4}
							}}">

							<!-- Slider items -->
							<div class="swiper-wrapper align-items-center" id="swiper-wrapper-92395a77119d9e30" aria-live="off" style="transition-duration: 0ms; transform: translate3d(330px, 0px, 0px); transition-delay: 0ms;">
								<!-- Image -->
								<div class="swiper-slide" style="width: 125px; margin-left: 40px;" role="group" aria-label="1 / 7">
									<img src="assets/images/client/05.svg" alt="client-img">
								</div>
								<!-- Image -->
								<div class="swiper-slide swiper-slide-prev" style="width: 125px; margin-left: 40px;" role="group" aria-label="2 / 7">
									<img src="assets/images/client/01.svg" alt="client-img">
								</div>
								<!-- Image -->
								<div class="swiper-slide swiper-slide-active" style="width: 125px; margin-left: 40px;" role="group" aria-label="3 / 7">
									<img src="assets/images/client/02.svg" alt="client-img">
								</div>
								<!-- Image -->
								<div class="swiper-slide swiper-slide-next" style="width: 125px; margin-left: 40px;" role="group" aria-label="4 / 7">
									<img src="assets/images/client/03.svg" alt="client-img">
								</div>
								<!-- Image -->
								<div class="swiper-slide" style="width: 125px; margin-left: 40px;" role="group" aria-label="5 / 7">
									<img src="assets/images/client/04.svg" alt="client-img">
								</div>
								<!-- Image -->
								<div class="swiper-slide" style="width: 125px; margin-left: 40px;" role="group" aria-label="6 / 7">
									<img src="assets/images/client/06.svg" alt="client-img">
								</div>
								<!-- Image -->
								<div class="swiper-slide" role="group" aria-label="7 / 7" style="width: 125px; margin-left: 40px;">
									<img src="assets/images/client/07.svg" alt="client-img">
								</div>
							</div>
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
					</div>
					<!-- Client slider END -->
				</div>	
			</div>

			<div class="col-lg-6 col-xl-5">
				<div class="card card-body shadow border p-sm-5">
					<!-- SVG decoration -->
					<figure class="position-absolute top-100 start-0 translate-middle mt-n5">
						<svg width="225.3px" height="168.1px" viewBox="0 0 225.3 168.1" style="enable-background:new 0 0 225.3 168.1;" xml:space="preserve">
							<path class="fill-primary opacity-5" d="M147,129.9c1.9-1,9.2-2.2,4.2,2.3c-1,0.9-3.4,0.9-4.7,1.2c-3,0.8-5.8,2-8.6,3.3c0.9,0.3,1.8,0.7,2.7,1 c-1.2-3.3-3.5-6.4-3.7-9.9c-0.1-1.3,0-5,1.2-5.8c3.2-2.1,5.9,3.8,4.8,4.6c0.9-0.3,1.9-0.5,2.8-0.8c-2.4-0.9-4.6-3.7-5-6.1 c-1.2,0.9-2.4,1.8-3.7,2.8c1,0.4,1.7,1,2.1,1.9c0.2,0.8,0.4,1.7,0.5,2.5c0.8-0.1,1.5-0.2,2.3-0.4c-1.3-0.4-2.5-1.7-3.3-2.7 c-1.3-1.5-4.3-0.3-4.4,1.7c-0.4,4.4,3.1,8.4,5.1,12c1.1,1.9,5-0.2,4.4-2.2c-0.6-2.2-1.8-4.7-1.9-7c-0.5,0.8-0.9,1.6-1.4,2.4 c-0.8,0.5,3,1.7,3.3,1.7c1.2,0.2,1.9,0.2,2.9-0.3c0.7-0.3,2.9-1.8,2.4-1.9c-0.8-0.3-5.4,1.1-6.6,1.1c-2.3,0-4.7,4-1.7,4 c3.5,0,7.5-0.4,10.6-2.2c2.1-1.2,4.4-4.4,2.5-6.7c-2-2.4-4.9,0-6.8,1c-2.1,1.1-3.1,0.1-5.4-0.3c-1.3-0.2-2-0.1-3.1,0.6 c-0.9,0.5-1.4,1.4-1.4,2.4c0.1,2.3,1.3,4.8,1.9,7c1.5-0.7,3-1.4,4.4-2.2c-1.5-2.6-5.1-6.9-4.8-10c-1.5,0.6-3,1.1-4.4,1.7 c2.2,2.6,6.1,6.1,8.8,2.1c2.5-3.6,0.2-8.3-3.4-9.9c-1.6-0.7-3.9,1.1-3.7,2.8c0.5,3.4,5.1,10.1,9.2,7.9c3.9-2.1,1.8-8.6-0.6-11 c-3.5-3.6-8.5-1.7-10.5,2.4c-1.3,2.6-2.2,5.7-2,8.6c0.2,3.7,2.5,6.7,3.8,10.2c0.4,1.1,1.6,1.5,2.7,1c4-1.9,8-2.9,12.1-4.2 c2.5-0.8,6-2.3,6.9-5.1c0.7-2.4-1.2-6.1-3.5-7c-3-1.1-6.5,1.3-9,2.6C142.3,128.2,144.3,131.3,147,129.9L147,129.9z"/>
							<path class="fill-mode" d="M3,0.9C3,1,3,1.2,3.1,1.4c0.1,0.1,0.2,0.2,0.4,0.3c2.8,4.7,5.4,9.5,7.9,14.4c9.2,18,16.3,36.9,21.4,56.4 c0.1,0.3,0.4,0.4,0.7,0.3c0,0.3,0.4,0.6,0.7,0.4c2.7-1.8,5.1-4.2,7.7-6.2c2.5-1.9,5-3.7,7.6-5.5c0.8-0.5,1.6-1.1,2.3-1.6 c0,0.1,0,0.2,0.1,0.3c1.5,2.3,4,4.3,6.1,6.1c1.1,0.9,2.2,1.9,3.3,2.7c1,0.8,2,1.7,3.2,2.2c0.3,0.1,0.5-0.2,0.4-0.5c0,0,0,0,0,0 c2.4-8.3,4.5-16.8,6-25.4c0.2,0,0.3-0.2,0.3-0.4c7.6-3.5,14.4-9,20.4-14.8c0.2-0.2,0.2-0.4,0.1-0.6c0.1-0.2,0.1-0.6-0.2-0.7 c-6.4-2.4-13-4.3-19.5-6.5C49.3,15,26.6,7.5,3.8,0.2c0,0,0,0-0.1,0c0,0-0.1,0-0.1-0.1C3.2-0.3,2.7,0.5,3,0.9z M70.6,44.2 c-4.6-3.4-9.5-6.4-14.3-9.5C39.8,23.8,23.2,12.9,6.7,2.1c5.3,1.8,10.7,3.6,16,5.3l34,11.1c5.8,1.9,11.5,3.8,17.3,5.7 c5.6,1.8,11.1,3.9,16.8,5.4c-3,2.9-6.3,5.7-9.7,8.2c-3.3,2.4-6.7,4.4-10.2,6.5C70.8,44.2,70.7,44.2,70.6,44.2z M64.8,67.5 c-0.3-5.7-0.5-11.4-1-17.1c0-0.4-0.4-0.6-0.7-0.5c-0.1-0.2-0.4-0.4-0.6-0.4c-0.1,0-0.2-0.1-0.3-0.1c-0.7-0.8-1.6-1.5-2.4-2.2 c-1.1-1-2.3-1.9-3.4-2.9c-2.1-1.8-4.3-3.5-6.4-5.3c-7.8-6.5-15.5-12.9-23.3-19.4c-3.9-3.2-7.8-6.5-11.6-9.7C13.1,8.3,11.2,6.7,9.3,5 l8.8,5.8c8.8,5.8,17.5,11.5,26.3,17.3c4.4,2.9,8.8,5.8,13.2,8.7c4.2,2.8,8.4,5.7,12.8,8.3C68.6,52.6,66.9,60,64.8,67.5z M52.3,59.6 c1.6-1.1,3.2-2.3,4.7-3.5c1.2-1,2.4-1.9,3.5-2.9c0.7-0.6,1.8-1.3,2.2-2.2c0,6.2,0.6,12.5,1.1,18.6c-0.7-0.6-1.6-1.1-2.3-1.7 c-1-0.8-2.1-1.7-3.1-2.6c-1-0.9-2-1.8-2.9-2.7c-1-1-1.9-2.1-3-3C52.5,59.7,52.4,59.6,52.3,59.6z M6.1,4c3.3,2.9,6.9,5.6,10.3,8.4 c7.7,6.4,15.4,12.8,23.1,19.2c3.8,3.2,7.6,6.3,11.4,9.5c2,1.6,4,3.3,5.9,4.9c1.7,1.4,3.4,3.3,5.5,4.2c0,0,0,0,0,0 c0.1,0.1,0.1,0.1,0.2,0.1c-1.1,0.3-2,1.6-2.9,2.3c-1.1,0.9-2.2,1.9-3.4,2.8c-2.6,2-5.3,3.9-8,5.7c-2.6,1.8-5.1,3.6-7.6,5.6 c-2.3,1.8-4.9,3.5-6.9,5.7c0,0,0,0,0-0.1c-1.4-5.6-3-11.1-4.7-16.5C23.2,37.8,15.5,20.4,6.1,4z"/>
							<path class="fill-mode" d="M67.3,70.8c2.2,6.3,5.5,12.1,9.9,17.3c2.2,2.6,4.7,5,7.4,7.2c1.8,1.5,3.8,2.9,6.1,3.7c0.3,1.1,0.9,2.2,1.4,3.2 c1.5,2.8,3.4,5.5,5.2,8.1c3.7,5.2,7.8,10,12.6,14.2c7.2,6.2,16.3,10.9,25.8,12.2c0.4,0.9,0.8,1.8,1.2,2.6 c5.7,10.5,18.1,16.3,29.6,11.9c5.3-2,10-6.1,12.2-11.4c0.3-0.7,0.5-1.4,0.7-2.2c0.8,0.3,1.5,0.5,2.3,0.7c6.6,2,13.7,1.9,20.3-0.2 c12.2-3.8,21.5-14.8,23.3-27.4c0.1-0.5-0.6-0.7-0.7-0.2c-2.1,11.7-10,22-21.2,26.2c-5.4,2-11.2,2.6-16.9,1.7 c-2.3-0.3-4.6-0.9-6.8-1.8c0.4-2.1,0.3-4.4-0.5-6.4c-0.8-2-2.8-3.7-4.8-2.1c-1.9,1.5-1.9,4.1-0.5,5.9c1.2,1.5,2.9,2.5,4.8,3.2 c-0.5,2-1.4,3.9-2.6,5.5c-2.8,4.1-7.2,6.9-11.9,8.2c-10,2.7-20.1-2.1-25.5-10.7c-0.7-1.1-1.3-2.3-1.9-3.5c2.6,0.3,5.2,0.3,7.9,0.1 c4.3-0.4,9.8-2.5,9.6-7.7c-0.1-1.8-0.9-3.6-2.5-4.4c-2-0.9-4-0.1-5.8,1c0.4-1.5,0-3.3-1.1-4.5c-1.8-2.1-5-2-7.2-0.5 c-4.9,3.2-4.2,9.8-2.3,15c-0.2,0-0.3,0-0.5-0.1c-10.4-1.7-19.8-7.3-27.3-14.6c-3.7-3.6-6.9-7.5-9.9-11.7c-1.5-2.1-2.9-4.2-4.2-6.4 c-0.7-1.2-1.5-2.6-2-4c0.5,0.1,1,0.2,1.5,0.2c2.2,0.1,4.2-0.7,5.5-2.6c1-1.4,1.4-3.4,0.5-5c-2.2-3.9-7.6-0.9-8.5,2.4 c-0.3,1.2-0.3,2.4,0,3.6c-2.1-0.8-4.2-2.3-5.7-3.4c-7.7-6.2-13.6-14.4-17-23.7C67.6,70.5,67.2,70.5,67.3,70.8z M178.7,136.3 C178.7,136.3,178.7,136.2,178.7,136.3c-2.6-1.1-6.6-3.5-4.6-6.7c1.3-2.1,3.3-0.9,4.1,0.9c0.6,1.4,0.7,2.9,0.6,4.4 C178.9,135.4,178.8,135.8,178.7,136.3z M136.3,135.8c-1.6-3.9-2.4-8.3-0.5-11.9c1.2-2.4,4.5-4.5,7.1-3.1c2.1,1.1,3.1,4.3,1.3,6 c-0.3,0.3,0.1,1,0.5,0.7c2.2-1.7,6.2-4.1,8.1-0.7c1.2,2.2,0.5,5-1.3,6.6c-2.1,1.9-5.1,2.4-7.9,2.6 C141.2,136.2,138.7,136.1,136.3,135.8z M91.2,98.1c-0.3-1.1-0.4-2.2-0.1-3.4c0.4-2.1,2.5-4.1,4.7-4.1c2.7,0,3.5,2.8,2.4,4.9 C96.6,98.7,93.9,98.9,91.2,98.1z"/>
						</svg>
					</figure>

					<form class="row g-4">
						<div class="col-md-6">
							<label class="form-label heading-color">الاسم بالكامل *</label>
							<input type="text" class="form-control form-control-lg" placeholder="الاسم بالكامل">
						</div>

						<div class="col-md-6">
							<label class="form-label heading-color">بريدك الالكتروني  *</label>
							<input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="بريدك الالكتروني ">
						</div>

						<div class="col-md-6">
							<label class="form-label heading-color">  رقم الهاتف *</label>
							<input type="text" class="form-control form-control-lg" placeholder="(xxx) xx xxxx">
						</div>

						<div class="col-md-6">
							<label class="form-label heading-color"> الموضوع  *</label>
							<input type="text" class="form-control form-control-lg" placeholder=" الموضوع  ">
						</div>

						<div class="col-12">
							<label class="form-label heading-color">  رسالتك   *</label>
							<textarea class="form-control" placeholder=" أدخل رسالتك هنا " id="floatingTextarea2" style="height: 150px"></textarea>
						</div>
						<!-- Button -->
						<button class="btn btn-lg btn-primary mb-0">إرسال الطلب</button>
					</form>
				</div>	
			</div>

		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Main hero END -->

<!-- =======================



</main>
<!-- **************** MAIN CONTENT END **************** -->
@endsection
