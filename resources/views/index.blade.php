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
        <div data-css-background-image="assets/img/index/background.jpg" class="bg-img bg-img-parallax" style="background-position: 50% 0px; background-image: url(&quot;assets/img/page-intro-bg-img-flat.jpg&quot;);"></div>
        <!-- .bg-img-->
        <div class="page-intro-align">
          <div class="container">
            <div class="row-content row">
              <div class="col-content col-md-8 col-xs-8 col-sm-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                <h1 class="section-title-lg">@Lang('messages.UVP')</h1>
                <p class="text-lead">Gracias a ésta plataforma podrás controlar tu inventario, reducir riesgos de escape de dinero y predecir crecimientos de tu inventario.</p>
                
                <p class="section-title-lg">PROXIMAMENTE</p>

                <p class="text-lead">Porporciónanos un correo electrónico para ponernos en contacto contigo.</p>
                <form id="siteFooterSubscribeForm" class="form">
                    {{ csrf_field() }}
                    <input id="url" type="hidden" value="{{ url('/subscribe') }}">
                    <div class="input-group input-group-lg">
                        <input id="siteFooterSubscribeFormEmail" type="email" placeholder="@Lang('messages.mailForm')" name="email" class="form-control" required>
                        <span class="input-group-btn">
                            <button id="subscribeSubmit" class="btn btn-theme-1">@Lang('messages.Subscribe')</button>
                        </span>
                    </div>
                    <span class="form-notify help-block text-primary"><i class="form-notify-icon-info"></i> @Lang('messages.privacy')</span>
                </form>
                
                <!--
                <div class="section-cta">
                  <a id="loginButton" class="btn btn-lg btn-pill btn-shadow btn-theme-1">
                    <i class="icon icon-left fa fa-fw fa-arrow-right"></i>
                    @lang('messages.login')
                  </a>
                  <a data-mfp-src="https://www.youtube.com/watch?v=LViVa-kKqzA" class="btn btn-lg btn-outline btn-pill btn-shadow btn-default popup-youtube">
                    <i class="icon icon-left fa fa-fw fa-shopping-cart"></i> 
                    Purchase
                  </a>
                </div>
                -->
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- .page-intro-->
      <!--
      <div class="demo-section module md-bg-light">
        <div class="container">
          <div class="row-content row">
            
          </div>
        </div>
      </div>
      -->
    @stop
