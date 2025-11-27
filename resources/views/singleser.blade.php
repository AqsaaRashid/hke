@extends('components.layout')
@section('content')
    

       @include('components.home.navbar')
        @include('components.service.hero-section')
        @include('components.service.services')
        @include('components.service.offer')
        @include('components.service.choose')



          @include('components.service.faq')
          @include('components.home.testimonial')
          
          @include('components.home.footer')






   
 
       
@endsection