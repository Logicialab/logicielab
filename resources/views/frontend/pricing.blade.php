@extends('layouts.app')

@section('content')

<!-- **************** MAIN CONTENT START **************** -->
<main class="price-wrap">

<!-- =======================
Main hero START -->
<section class="pt-0">
	<!-- Title and switch -->
	<div class="bg-dark position-relative pt-8 pt-xl-9 pb-7 pb-sm-8 px-4 px-md-0 overflow-hidden">
		<!-- SVG decoration -->
		<figure class="position-absolute top-0 start-0">
			<svg class="opacity-2" width="1859" height="1775" viewBox="0 0 1859 1775" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g filter="url(#filter0_d_391_4)">
				<ellipse cx="929.5" cy="862.5" rx="754.5" ry="719.5" fill="url(#paint0_linear_391_4)" shape-rendering="crispEdges"/>
				</g>
				<g filter="url(#filter1_d_391_4)">
				<ellipse cx="929.5" cy="863" rx="585.5" ry="558" fill="url(#paint1_linear_391_4)" shape-rendering="crispEdges"/>
				</g>
				<g filter="url(#filter2_d_391_4)">
				<ellipse cx="929.5" cy="887.5" rx="909.329" ry="867.5" fill="url(#paint2_linear_391_4)" shape-rendering="crispEdges"/>
				</g>
				<defs>
				<filter id="filter0_d_391_4" x="155" y="123" width="1549" height="1479" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feFlood flood-opacity="0" result="BackgroundImageFix"/>
				<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
				<feOffset/>
				<feGaussianBlur stdDeviation="10"/>
				<feComposite in2="hardAlpha" operator="out"/>
				<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
				<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_391_4"/>
				<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_391_4" result="shape"/>
				</filter>
				<filter id="filter1_d_391_4" x="324" y="285" width="1211" height="1156" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feFlood flood-opacity="0" result="BackgroundImageFix"/>
				<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
				<feOffset/>
				<feGaussianBlur stdDeviation="10"/>
				<feComposite in2="hardAlpha" operator="out"/>
				<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
				<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_391_4"/>
				<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_391_4" result="shape"/>
				</filter>
				<filter id="filter2_d_391_4" x="0.171387" y="0" width="1858.66" height="1775" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feFlood flood-opacity="0" result="BackgroundImageFix"/>
				<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
				<feOffset/>
				<feGaussianBlur stdDeviation="10"/>
				<feComposite in2="hardAlpha" operator="out"/>
				<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
				<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_391_4"/>
				<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_391_4" result="shape"/>
				</filter>
				<linearGradient id="paint0_linear_391_4" x1="929.5" y1="143" x2="929.5" y2="1582" gradientUnits="userSpaceOnUse">
				<stop offset="0.0569271" stop-color="#D9D9D9" stop-opacity="0.09"/>
				<stop offset="0.998202" stop-color="#D9D9D9" stop-opacity="0"/>
				</linearGradient>
				<linearGradient id="paint1_linear_391_4" x1="929.5" y1="305" x2="929.5" y2="1421" gradientUnits="userSpaceOnUse">
				<stop offset="0.0569271" stop-color="#D9D9D9" stop-opacity="0.07"/>
				<stop offset="0.998202" stop-color="#D9D9D9" stop-opacity="0"/>
				</linearGradient>
				<linearGradient id="paint2_linear_391_4" x1="929.5" y1="20" x2="929.5" y2="1755" gradientUnits="userSpaceOnUse">
				<stop offset="0.0569271" stop-color="#D9D9D9" stop-opacity="0.1"/>
				<stop offset="0.998202" stop-color="#D9D9D9" stop-opacity="0"/>
				</linearGradient>
				</defs>
			</svg>
		</figure>

		<div class="inner-container-small text-center position-relative mb-8">
			<!-- Title -->
			<h1 class="text-white mb-5">اختر الخطة المناسبة لعملك</h1>

			<!-- Switch START -->
			<form class="d-flex align-items-center justify-content-center mb-4 mb-xl-0">
				<!-- Label -->
				<span class="fw-semibold text-white">شهريا</span>
				<!-- Switch -->
				<div class="form-check form-switch form-check-lg mx-2 mb-0">
					<input class="form-check-input mt-0 price-toggle" type="checkbox" id="flexSwitchCheckDefault">
				</div>
				<!-- Label -->
				<div class="position-relative">
					<span class="fw-semibold text-white">سنوي</span>
					<span class="badge bg-danger position-absolute top-0 start-100 translate-middle mt-n2 ms-2 ms-md-5">وفر 20%</span>
					
				</div>
			</form>
			<!-- Switch END -->
		</div>
	</div>	

	<!-- Pricing items START -->
	<div class="container mt-n9">
		<!-- Slider START -->
		<div class="swiper" data-swiper-options='{
			"slidesPerView": 1, 
			"spaceBetween": 30,
			"pagination":{
				"el":".swiper-pagination"
			},
			"breakpoints": {
				"576": {"slidesPerView": 1}, 
				"768": {"slidesPerView": 2}, 
				"992": {"slidesPerView": 3}
			}}'>

			<!-- Slider items -->
			<div class="swiper-wrapper align-items-center pt-5">
				<!-- Item -->
				<div class="swiper-slide">
					<div class="card shadow border overflow-hidden p-0">
						<!-- Card header -->
						<div class="card-header border-bottom p-4">
							<!-- Icon -->
							<div class="icon-lg bg-light rounded-circle mb-3">
								<i class="bi bi-lightning-charge-fill fa-lg lh-1 heading-color"></i>
							</div>
							<!-- Title and price -->
							<h6 class="mb-3">الخطة الأساسية</h6>
							<p class="mb-0"> <span class="h2 mb-0 plan-price" data-monthly-price="$25" data-annual-price="$20">$25</span> /month</p>
							<small>Basic feature for up to 10 users</small>
						</div>

						<!-- Card body -->
						<div class="card-body p-4">
							<div class="text-center text-lg-start">
								<!-- Small title -->
								<h6>Quick look at all the features</h6>
		
								<!-- List -->
								<ul class="list-group list-group-borderless mb-2 mb-sm-4">
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Up to 05 users monthly</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Free 5 host domain</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Google docs style editors</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Support for 30+ languages</li>
								</ul>
								<!-- Button -->
								<a /contactref="#" class="btn btn-dark w-100">الحصول على الخدمة</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Item -->
				<div class="swiper-slide">
					<div class="card border border-primary p-0">
						<!-- Badge -->
						<div class="bg-primary text-white rounded position-absolute top-0 start-50 translate-middle px-2 py-1 ">الأكثر طلبا</div>

						<!-- Card header -->
						<div class="card-header bg-primary bg-opacity-10 border-bottom border-primary border-opacity-25 p-4">
							<!-- Icon -->
							<div class="icon-lg bg-primary bg-opacity-10 rounded-circle mb-3">
								<i class="bi bi-rocket-takeoff-fill fa-lg lh-1 text-primary"></i>
							</div>
							<!-- Title and price -->
							<h6 class="mb-3">Standard plan</h6>
							<p class="mb-0"> <span class="h2 mb-0 plan-price" data-monthly-price="$59" data-annual-price="$45">$59</span> /month</p>
							<small>Basic feature for up to 10 users</small>
						</div>

						<!-- Card body -->
						<div class="card-body bg-primary bg-opacity-10 p-4">
							<div class="text-center text-lg-start">
								<h6 class="heading-color">Quick look at all the features</h6>
								<!-- List -->
								<ul class="list-group list-group-borderless mb-2 mb-sm-4">
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg heading-color me-1"></i>Up to 05 users monthly</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg heading-color me-1"></i>Free 5 host domain</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg heading-color me-1"></i>Google docs style editors</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg heading-color me-1"></i>Support for 30+ languages</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg heading-color me-1"></i>Landing pages Web widgets</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg heading-color me-1"></i>Landing pages Web widgets</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg heading-color me-1"></i>24/7 dedicated Support</li>
								</ul>
								<!-- Button -->
								<a href="#"/contactclass="btn btn-primary mb-0 w-100">الحصول على الخدمة</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Item -->
				<div class="swiper-slide">
					<div class="card shadow border p-0">
						<!-- Card header -->
						<div class="card-header border-bottom p-4">
							<!-- Icon -->
							<div class="icon-lg bg-light rounded-circle mb-3">
								<i class="bi bi-send-fill fa-lg lh-1 heading-color"></i>
							</div>
							<!-- Title and price -->
							<h6 class="mb-3">خطة الشركة</h6>
							<p class="mb-0"> <span class="h2 mb-0 plan-price" data-monthly-price="$199" data-annual-price="$145">$199</span> /month</p>
							<small>Basic feature for up to 10 users</small>
						</div>

						<!-- Card body -->
						<div class="card-body p-4">
							<div class="text-center text-lg-start">
								<!-- Small title -->
								<h6>Quick look at all the features</h6>
		
								<!-- List -->
								<ul class="list-group list-group-borderless mb-2 mb-sm-4">
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Up to 05 users monthly</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Free 5 host domain</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Google docs style editors</li>
									<li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Support for 30+ languages</li>
								</ul>
								<!-- Button -->
								<a /contactref="#" class="btn btn-dark w-100">الحصول على الخدمة</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slider Pagination -->
			<div class="swiper-pagination swiper-pagination-primary position-relative mt-4"></div>
		</div>
		<!-- Slider END -->
	</div>
	<!-- Pricing items END -->
</section>
<!-- =======================
Main hero END -->

<!-- =======================
Feature START -->
<section class="pt-0">
	<div class="container">
		<div class="inner-container-small text-center mb-4 mb-sm-6">
			<h2 class="mb-4">الميزات المضمنة في كل خطة</h2>
			<p class="mb-0">إن شغفنا بالتميز مع العملاء هو أحد الأسباب التي تجعلنا رائدين في السوق. لقد عملنا دائمًا بجد لنمنح عملائنا أفضل تجربة.</p>
		</div>

	
		<!-- Table START -->
		<div class="table-responsive-xl mt-5">
			<table class="table table-border align-middle">
				<!-- Head START -->
					<thead class="align-top">
						<tr>
							<th scope="col"></th>

							<th scope="col">
								<div class="text-center p-3">
									<span class="mb-3 heading-color">الخطة الأساسية</span>
									<p class="mb-3"> <span class="h2 mb-0 plan-price" data-monthly-price="$25" data-annual-price="$20">$25</span> /شهريا</p>
									<a href="/contact" class="btn btn-sm btn-dark mb-0">الحصول على الخدمة</a>
								</div>
							</th>

							<th scope="col">
								<div class="text-center p-3">
									<span class="mb-3 heading-color">Standard plan</span>
									<p class="mb-3"> <span class="h2 mb-0 plan-price" data-monthly-price="$56" data-annual-price="$45">$56</span> /شهريا</p>
									<a href="/contact" class="btn btn-sm btn-dark mb-0">الحصول على الخدمة</a>
								</div>
							</th>

							<th scope="col">
								<div class="text-center p-3">
									<span class="mb-3 heading-color">الخطة الأساسية</span>
									<p class="mb-3"> <span class="h2 mb-0 plan-price" data-monthly-price="$99" data-annual-price="$145">$99</span> /شهريا</p>
									<a href="/contact" class="btn btn-sm btn-dark mb-0">الحصول على الخدمة</a>
								</div>
							</th>
						</tr>
					</thead>
				<!-- Head END -->

				<!-- Body START -->
				<tbody class="border-top-0">
					<!-- Item -->
					<tr>
						<th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">مساحة التخزين</span></th>
						<td class="text-center"> 40GB </td>
						<td class="text-center"> 60GB </td>
						<td class="text-center"> غير محدود</td>
					</tr>

					<!-- Item -->
					<tr>
						<th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">الاستضافة السحابية</span></th>
						<td class="text-center"> نعم </td>
						<td class="text-center"> نعم </td>
						<td class="text-center"> نعم </td>
					</tr>

					<!-- Item -->
					<tr>
						<th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">أدوات الترميز</span></th>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
					</tr>

					<!-- Item -->
					<tr>
						<th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">التصحيح المسبق</span></th>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
					</tr>

					<!-- Item -->
					<tr>
						<th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">خدمات تطبيقات الجوال
						</span></th>
						<td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i></td>
					</tr>

					<!-- Item -->
					<tr>
						<th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">أدوات الويب</span></th>
						<td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i></td>
					</tr>

					<!-- Item -->
					<tr>
						<th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">التحكم في الإصدار</span></th>
						<td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
					</tr>

					<!-- Item -->
					<tr>
						<th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">الحماية</span></th>
						<td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
						<td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
					</tr>

					<!-- Item -->
					<tr>
						<th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">وصول للفريق</span></th>
						<td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
						<td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
						<td class="text-center text-primary"> <i class="bi bi-check-circle fa-lg"></i> </td>
					</tr>

				</tbody>
				<!-- Body END -->
			</table>
		</div>
		<!-- Table END -->

	</div>
</section>
<!-- =======================
Feature END -->

<!-- =======================
CTA START -->
<section class="position-relative z-index-2 pt-0">
	
</section>
<!-- =======================
CTA END -->



</main>
<!-- **************** MAIN CONTENT END **************** -->


@endsection