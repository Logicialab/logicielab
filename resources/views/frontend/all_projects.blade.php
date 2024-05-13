@extends('layouts.app')

@section('content')

<section class="pt-lg-8">
	<div class="container pt-4 pt-lg-0">
		<!-- Breadcrumb & title -->
		<div class="inner-container left mb-5">
			<!-- Breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb breadcrumb-dots mb-1">
					<li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
					<li class="breadcrumb-item active" aria-current="page">عرض المشاريع</li>
				</ol>
			</nav>
			<!-- Title -->
			<h1 class="h2">عرض المشاريع</h1>
		</div>

		<!-- Portfolio item START -->
		<div class="row g-sm-6">
			<!-- Item -->
			<div class="col-md-6 mb-5 mb-md-0">
				<div class="card card-img-scale bg-transparent overflow-hidden">
					<!-- Logo -->
					<div class="position-absolute top-0 start-0 z-index-1">
						<img src="assets/images/client/client-white/03.svg" class="h-40px m-4" alt="">
					</div>

					<div class="card-img-scale-wrapper rounded-3">
						<!-- Card Image -->              
						<img src="assets/images/portfolio/showcase/03.jpg" class="img-scale" alt="portfolio-img">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="mb-0"><a href="#" class="heading-color stretched-link">UI/UX Enhancement for SnapMedia</a></h5>
						<small>UI/UX design</small>
					</div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 mb-5 mb-md-0">
				<div class="card card-img-scale bg-transparent overflow-hidden">
					<!-- Logo -->
					<div class="position-absolute top-0 start-0 z-index-1">
						<img src="assets/images/client/client-white/04.svg" class="h-40px m-4" alt="">
					</div>

					<div class="card-img-scale-wrapper rounded-3">
						<!-- Card Image -->              
						<img src="assets/images/portfolio/showcase/02.jpg" class="img-scale" alt="portfolio-img">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="mb-0"><a href="#" class="heading-color stretched-link">Website Optimization for TechWave</a></h5>
						<small>Web design</small>
					</div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-12 mb-5 mb-md-0">
				<div class="card card-img-scale bg-transparent overflow-hidden">
					<!-- Logo -->
					<div class="position-absolute top-0 start-0 z-index-1">
						<img src="assets/images/client/client-white/02.svg" class="h-40px m-4" alt="">
					</div>

					<div class="card-img-scale-wrapper rounded-3">
						<!-- Card Image -->              
						<img src="assets/images/portfolio/showcase/01.jpg" class="img-scale" alt="portfolio-img">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="mb-0"><a href="#" class="heading-color stretched-link">Chasing Dreams and Creating Art</a></h5>
						<small>Branding</small>
					</div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 mb-5 mb-md-0">
				<div class="card card-img-scale bg-transparent overflow-hidden">
					<!-- Logo -->
					<div class="position-absolute top-0 start-0 z-index-1">
						<img src="assets/images/client/client-white/01.svg" class="h-40px m-4" alt="">
					</div>

					<div class="card-img-scale-wrapper rounded-3">
						<!-- Card Image -->              
						<img src="assets/images/portfolio/showcase/05.jpg" class="img-scale" alt="portfolio-img">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="mb-0"><a href="#" class="heading-color stretched-link">The Art of Storytelling</a></h5>
						<small>Graphics design</small>
					</div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 mb-5 mb-md-0">
				<div class="card card-img-scale bg-transparent overflow-hidden">
					<!-- Logo -->
					<div class="position-absolute top-0 start-0 z-index-1">
						<img src="assets/images/client/client-white/05.svg" class="h-40px m-4" alt="">
					</div>

					<div class="card-img-scale-wrapper rounded-3">
						<!-- Card Image -->              
						<img src="assets/images/portfolio/showcase/04.jpg" class="img-scale" alt="portfolio-img">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="mb-0"><a href="#" class="heading-color stretched-link">Transforming Ideas into Reality</a></h5>
						<small>Marketing</small>
					</div>
				</div>
			</div>

		</div>
		<!-- Portfolio item END -->

		<!-- Pagination START -->
		{{-- <div class="row mt-md-7">
			<div class="col-12 mx-auto">
				<ul class="pagination pagination-primary-soft d-flex justify-content-between mb-0">
	        <li>
						<ul class="list-unstyled">
							<li class="page-item disabled">
								<a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left me-2 rtl-flip"></i>Prev</a>
							</li>
						</ul>
					</li>
	        <li>
						<ul class="list-unstyled">
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">..</a></li>
							<li class="page-item"><a class="page-link" href="#">22</a></li>
							<li class="page-item"><a class="page-link" href="#">23</a></li>
						</ul>
					</li>
	        <li>
						<ul class="list-unstyled">
							<li class="page-item">
								<a class="page-link" href="#">Next<i class="fas fa-long-arrow-alt-right ms-2 rtl-flip"></i></a>
							</li>
						</ul>
					</li>
	      </ul>
			</div>
		</div> --}}
		<!-- Pagination END -->

	</div>	
</section>



@endsection
