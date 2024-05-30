<section class="pt-0">
	<div class="container">
		<div class="inner-container-small text-center mb-4 mb-sm-6">
			<h2 class="mb-4">فريقنا المحترف </h2>
		</div>
		<div class="row g-4 g-sm-6">
			<!-- Team item -->
			@foreach ($teams as $team)
				<div class="col-sm-6 col-md-4 col-xl-3">
					<div class="card card-img-scale bg-transparent overflow-hidden">
						<!-- Social links -->
						<div class="position-absolute top-0 end-0 z-index-2 m-3">
							<ul class="list-inline mb-0 mb-2 mb-sm-0">
								<li class="list-inline-item"> <a class="btn-icon btn-sm rounded mb-2 bg-instagram-gradient" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
							</ul>
						</div>
						<div class="card-img-scale-wrapper rounded-3">
							<!-- Card Image -->              
							<img src="{{$team->image}}" class="img-scale" alt="card image">
						</div>
						<!-- Card body -->
						<div class="card-body text-center px-0 pb-0">
							<h6 class="mb-0"><a href="#" class="stretched-link">{{$team->title}}</a></h6>
							<small>{{$team->content}}</small>
						</div>
					</div>
				</div>
			@endforeach
		

		</div>
	</div>
</section>