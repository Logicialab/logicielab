@extends('layouts.app')

@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
        Main Banner START -->
            <x-widget.breadcrumb />
        <!-- =======================
        Main Banner END -->

        <!-- =======================
        Services START -->
            <x-pages.services />
        <!-- =======================
        Services END -->

        <!-- =======================
        Core feature START -->
            <x-widget.feature />
        <!-- =======================
        Core feature END -->

       
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
