@extends('frontend.frontend_dashboard')
@section('main')

@section('title')
  Gestion de vos inventaires et employés en ligne
@endsection

        <!-- banner-section -->
         @include('frontend.home.banner')
         <!-- banner-section end -->
 

 
<!-- category-section -->
  @include('frontend.home.category')
<!-- category-section end -->


        <!-- feature-section -->

        <!-- feature-section end -->


        <!-- video-section -->
         @include('frontend.home.video')
        <!-- video-section end -->


        <!-- deals-section -->

        <!-- deals-section end -->


        <!-- testimonial-section end -->
      @include('frontend.home.testimonial')
        <!-- testimonial-section end -->


        <!-- chooseus-section -->
         @include('frontend.home.chooseus')
        <!-- chooseus-section end -->


        <!-- place-section -->

        <!-- place-section end -->


        <!-- team-section -->

        <!-- team-section end -->


        <!-- cta-section -->
      @include('frontend.home.cta')
        <!-- cta-section end -->


        <!-- news-section -->
       @include('frontend.home.news')
        <!-- news-section end -->


        <!-- download-section -->
       @include('frontend.home.download')
        <!-- download-section end -->

@endsection
