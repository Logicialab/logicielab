@extends('layouts.app')

@section('content')


<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
about Us Banner START -->
	<x-section.about-us />
<!-- =======================
about Us Banner END -->

<!-- =======================
why we -->
	<x-section.why-we />
<!-- =======================
why we -->


{{-- our teams  --}}
	<x-section.teams />
{{-- our teams  --}}


<!-- =======================
Testimonials START -->
	<x-section.testimonials />
<!-- =======================
Testimonials END -->


<!-- =======================


</main>
<!-- **************** MAIN CONTENT END **************** -->

@endsection
