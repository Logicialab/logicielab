

@extends('layouts.app')

@section('content')
	
<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main Banner START -->
	<x-section.main />
<!-- =======================
Main Banner END -->


<!-- =======================
Client START -->
<x-section.brands />
<!-- =======================
Client END -->

<!-- =======================
About START -->
<x-pages.about />
<!-- =======================
About END -->

<!-- =======================
Services START -->
<x-section.services />
<!-- =======================
Services END -->

<!-- =======================
Projects START -->
{{-- <x-projects /> --}}

<x-section.project />

<!-- =======================
Projects END -->

<!-- =======================
Contact Us START -->
<x-widget.paragraph-contact />
<!-- =======================
Contact Us END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@endsection

