<!DOCTYPE html>
<html lang="@yield('lang')">
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
        {!! Html::style('assets/css/index.css') !!}
        {!! Html::style('assets/css/index2.css') !!}
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/vendor.css') !!}
        {!! Html::style('assets/css/theme-1.css') !!}
        {!! Html::style('assets/css/space.css') !!}
        {!! Html::style('assets/css/custom.css') !!}

        {{-- Scripts --}}
        
        {!! Html::script('assets/js/modernizr.js') !!}
        {!! Html::script('assets/js/jquery.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/vendor.js') !!}
        {!! Html::script('assets/js/main.js') !!}
        {!! Html::script('assets/js/messages.js') !!} <!--Messages of laravel to JS-->
        {!! Html::script('js/index.js') !!} <!--Own Library-->

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">
                You are using an <strong>outdated</strong> browser.
                Please <a href="http://browsehappy.com/">upgrade your browser</a>
                to improve your experience.
            </p><![endif]-->
    
        <!-- .page-loader-->