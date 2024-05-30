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
			@foreach ($projects as $project)
				<div class="col-md-6 mb-5 mb-md-0">
					<div class="card card-img-scale bg-transparent overflow-hidden">
						<!-- Logo -->
						<div class="position-absolute top-0 start-0 z-index-1">
							<img src="{{$project->image}}" class="h-40px m-4" alt="">
						</div>

						<div class="card-img-scale-wrapper rounded-3">
							<!-- Card Image -->              
							<img src="{{$project->image}}" class="img-scale" alt="portfolio-img">
						</div>
						<!-- Card body -->
						<div class="card-body px-0 pb-0">
							<h5 class="mb-0">{{$project->title}}</h5>
							<small>{{$project->description}}</small>
						</div>
					</div>
				</div>
			@endforeach
			


		</div>
		<!-- Portfolio item END -->


	</div>	
</section>



@endsection
