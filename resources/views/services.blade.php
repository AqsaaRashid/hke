@extends('components.layout')
@section('content')
    

       @include('components.home.navbar')
        @include('components.services.hero-section')
        @include('components.services.services')



          @include('components.home.whychooseus')
          @include('components.services.choose')

          @include('components.home.testimonial')
          @include('components.home.footer')






   
 
       
@endsection