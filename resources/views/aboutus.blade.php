@extends('components.layout')
@section('content')
    

       @include('components.home.navbar')
        @include('components.about.hero-section')
         @include('components.home.about')
         @include('components.about.about')
          @include('components.about.cards')
           @include('components.about.team')

          @include('components.home.testimonial')



         
          @include('components.home.footer')






   
 
       
@endsection