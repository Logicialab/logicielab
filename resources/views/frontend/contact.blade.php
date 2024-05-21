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
						<!-- Social buttons -->
						<x-inc.footer.icons />
						<!-- Social buttons -->

					</div>

					<!-- Client slider START -->
						<x-section.client-sliders />
					<!-- Client slider END -->
				</div>	
			</div>

			{{-- form contact --}}
				<x-section.form-contact />
			{{-- form contact --}}


		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Main hero END -->

<!-- =======================



</main>
<!-- **************** MAIN CONTENT END **************** -->
@endsection
