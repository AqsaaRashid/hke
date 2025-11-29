@extends('components.layout')
@section('content')
    

       @include('components.home.navbar')
        @include('components.projects.hero-section')
        @include('components.projects.recent')

                @include('components.home.testimonial')

          @include('components.home.footer')






   
 
       
@endsection