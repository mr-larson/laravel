@extends('layouts.appFront')

@section('content')
    @include('partial.header')
    @include('partial.sectionHero')
    <main id="main">
        @include('partial.sectionAbout')  
        @include('partial.sectionFeature')
        @include('partial.sectionService')
        @include('partial.sectionPortfolio')
        @include('partial.sectionTestimonial')
        @include('partial.sectionTeam')
        @include('partial.sectionContact')
    </main><!-- End #main -->
    @include('partial.footer')
@endsection