<!DOCTYPE html>
<html lang="@yield('lang')" ng-app="myApp">
    <head>
        
        {{-- Meta tags --}}

        <meta http-equiv="Content-Type" content="@yield('Content-Type')">
        <meta http-equiv="x-ua-compatible" content="@yield('x-ua-compatible')">
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="@yield('viewport')">

        {{-- Title --}}

        <title>@yield('title')</title>

        {{-- Links --}}

        {!! Html::favicon('http://demo.bonefishcode.com/veronica/assets/img/favicon.ico') !!}
        {!! Html::style('assets/css/index/fonts.css') !!}
        {!! Html::style('assets/css/index/bootstrap.min.css') !!}
        {!! Html::style('assets/css/index/vendor.css') !!}
        {!! Html::style('assets/css/index/loader.css') !!}
        {!! Html::style('assets/css/index/theme.css') !!}

        {{-- Scripts --}}
        
        {!! Html::script('assets/js/index/modernizr.js') !!}
        {!! Html::script('assets/js/index/jquery.min.js') !!}
        {!! Html::script('assets/js/index/jquery-mask.js') !!}
        {!! Html::script('assets/js/index/jquery.validate.min.js') !!}

        <!--Angular-->
        {!! Html::script('assets/js/index/angular/lib/angular.min.js') !!}
        {!! Html::script('assets/js/index/angular/lib/sanitize.min.js') !!}
        {!! Html::script('assets/js/index/angular/module.js') !!}
        {!! Html::script('assets/js/index/angular/controllers.js') !!}
        {!! Html::script('assets/js/index/angular/factory.js') !!}

        {!! Html::script('assets/js/index/bootstrap.min.js') !!}
        {!! Html::script('assets/js/index/vendor.js') !!}
        {!! Html::script('assets/js/index/main.js') !!}
        <!--Messages of laravel to JS-->
        {!! Html::script('assets/js/messages.js') !!} 
        <!--Own Library-->
        {!! Html::script('assets/js/index/index.js') !!}

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
