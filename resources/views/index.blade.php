@extends('layouts.index.master')

  {{-- lang html tag --}}

  @section('lang'){{$lang}}@stop

  {{-- Title Head --}}

  @section('title'){{$title}}@stop

  {{-- Metatag Head --}}

  @section('Content-Type','text/html; charset=UTF-8')
  @section('x-ua-compatible','ie=edge')
  @section('description','')
  @section('viewport','width=device-width, initial-scale=1')

  {{-- Body --}}
  
  @section('content')
    <!-- Content -->
    <div id="content" class="site-content">
      <div id="pageIntro" class="page-intro page-intro-sm page-intro-layout-text md-bg-dark">
        <div data-css-background-image="assets/img/page-intro-bg-img-flat.jpg" class="bg-img bg-img-parallax" style="background-position: 50% 0px; background-image: url(&quot;assets/img/page-intro-bg-img-flat.jpg&quot;);"></div>
        <!-- .bg-img-->
        <div class="page-intro-align">
          <div class="container">
            <div class="row-content row">
              <div class="col-content col-md-8 col-md-offset-2">
                <h1 class="section-title-lg">We build websites that will build your business.</h1>
                <p class="text-lead">We strive to create lasting impressions by establishing a genuine relationship to aid in helping solve our clients both visually and interactively.</p>
                <div class="section-cta"><a href="http://demo.bonefishcode.com/veronica/#" class="btn btn-lg btn-pill btn-shadow btn-theme-1"><i class="icon icon-left fa fa-fw fa-arrow-right"></i> View Demo</a><a href="http://demo.bonefishcode.com/veronica/#" data-mfp-src="https://www.youtube.com/watch?v=LViVa-kKqzA" class="btn btn-lg btn-outline btn-pill btn-shadow btn-default popup-youtube"><i class="icon icon-left fa fa-fw fa-shopping-cart"></i> Purchase</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- .page-intro-->
      <div class="demo-section module md-bg-light">
        <div class="container">
          <div class="row-content row">
            
          </div>
        </div>
      </div>
    @stop
