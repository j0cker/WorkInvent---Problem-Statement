<!DOCTYPE html>
<html lang="@yield('lang')" ng-app="myApp">
    <head>
        
        {{-- Meta tags --}}

        <meta http-equiv="Content-Type" content="@yield('Content-Type')">
        <meta http-equiv="x-ua-compatible" content="@yield('x-ua-compatible')">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="@yield('author')">
        <meta name="viewport" content="@yield('viewport')">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Title --}}

        <title>@yield('title')</title>

        {{-- Links --}}

        {!! Html::favicon('http://demo.bonefishcode.com/veronica/assets/img/favicon.ico') !!}
        {!! Html::style('assets/css/system/fonts.css') !!}
        {!! Html::style('assets/css/system/bootstrap.min.css') !!}
        {!! Html::style('assets/css/system/vendor.css') !!}
        {!! Html::style('assets/css/system/loader.css') !!}
        {!! Html::style('assets/css/system/theme.css') !!}
        {!! Html::style('assets/css/system/toastr.css') !!}

        {{-- Scripts --}}

        <!--Functions Library-->
        {!! Html::script('assets/js/system/functions.js') !!}
        
        {!! Html::script('assets/js/system/modernizr.js') !!}
        {!! Html::script('assets/js/system/jquery.min.js') !!}
        {!! Html::script('assets/js/system/jquery-migrate-1.2.1.js') !!}
        {!! Html::script('assets/js/system/jquery-mask.js') !!}
        {!! Html::script('assets/js/system/jquery.validate.min.js') !!}
        {!! Html::script('assets/js/system/toastr.min.js') !!}

        <!--Angular-->
        {!! Html::script('assets/js/system/angular/lib/angular.min.js') !!}
        {!! Html::script('assets/js/system/angular/lib/sanitize.min.js') !!}
        {!! Html::script('assets/js/system/angular/module.js') !!}
        {!! Html::script('assets/js/system/angular/controllers.js') !!}
        {!! Html::script('assets/js/system/angular/factory.js') !!}

        {!! Html::script('assets/js/system/bootstrap.min.js') !!}

        <!--Messages of laravel to JS-->
        {!! Html::script('assets/js/messages.js') !!} 

        <!--Own Library-->
        {!! Html::script('assets/js/system/index.js') !!}

        <!--CSRF Protection-->
        <script>window.Laravel = {"csrfToken":"{{ csrf_token() }}"}</script>

        <!--Alerts-->
        <script>
            $( document ).ready(function() {

                @foreach ($errors->all() as $error)
                    {{ Log::error("[Index][Forms][Errors]") }}
                    {{ Log::error($error) }}
                @endforeach
                

                @if ($errors->has('email'))
                    toastr.error('{{ $errors->first("email") }}', 'Error:');
                @endif

                @if ($errors->has('password'))
                    toastr.error('{{ $errors->first("password") }}', 'Error:');
                @endif

                @if ($errors->has('password_confirmation'))
                    toastr.error('{{ $errors->first("password_confirmation") }}', 'Error:');
                @endif

                @if (session('status'))
                    toastr.success('{{ session("status") }}', '');
                @endif
            });
        </script>

    </head>
    <body ng-controller="ctrl">
        <!--[if lt IE 8]>
            <p class="browserupgrade">
                You are using an <strong>outdated</strong> browser.
                Please <a href="http://browsehappy.com/">upgrade your browser</a>
                to improve your experience.
            </p><![endif]-->
    
        <!-- .page-loader-->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section"></div>
        </div> 
