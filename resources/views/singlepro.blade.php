@extends('components.layout')
@section('content')
    

       @include('components.home.navbar')
        @include('components.project.hero-section')
        @include('components.project.card')
        @include('components.project.overview')
        @include('components.project.testimonial')
        @include('components.project.gallery')


        @include('components.home.footer')






   
 
       
@endsection