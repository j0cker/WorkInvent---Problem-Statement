@extends('layouts.system.master')

  {{-- lang html tag --}}

  @section('lang'){{$lang}}@stop

  {{-- Title Head --}}

  @section('title'){{$title}}@stop

  {{-- Metatag Head --}}

  @section('Content-Type','text/html; charset=UTF-8')
  @section('x-ua-compatible','ie=100s')
  @section('description','')
  @section('author','Manlio Emiliano Terán Ramos')
  @section('viewport','width=device-width, initial-scale=1')

  {{-- Body --}}
  
  @section('content')

<body style="background-color: #f3f3f3;">

<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section"></div>
</div>
        <section id="main">
            <aside id="sidebar" class="">
                <div class="sidebar-inner c-overflow" tabindex="1" style="overflow: hidden; outline: none;">
                  <ul class="main-menu">
                        <li style="text-align: center;">
                          <button style="background-color: #26A8FF;" class="btn waves-effect waves-light" type="submit" name="action">Botón
                            <span class="fa fa-plus"></span>
                          </button>
                        </li>
                        <li id="tableSys1" style="padding-top: 10px;">
                            <a href="" style="cursor: pointer;"><i class="fa fa-home"></i> Inicio</a>
                        </li>
                        <li id="tableSys2">
                            <a href="" style="cursor: pointer;"><i class="fa fa-pencil"></i> Escribir una publicación nueva</a>
                        </li>
                        <li id="tableSys3">
                            <a href="" style="cursor: pointer;"><i class="fa fa-calendar"></i> Ver calendario de publicaciones</a>
                        </li>
                        <li id="tableSys4">
                            <a href="" style="cursor: pointer;"><i class="fa fa-envelope"></i> Mis mensajes</a>
                        </li>
                        <li id="tableSys12">
                            <a href="stats.php" style="cursor: pointer;" id="tableSys5"><i class="icon-stats-dots"></i> Mis estadísticas</a>
                        </li>
                        <li id="tableSys13">
                          <div style="cursor: pointer;" class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="" style="cursor: pointer; padding: 14px 20px 14px 52px; display: block; color: #4C4C4C; font-weight: 500; position: relative;"><i class="fa fa-shopping-cart" style="position: absolute; left: 16px; font-size: 20px; top: 0; width: 25px; text-align: center; padding: 13px 0;"></i> Pagar</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li id="tableSys11"><a style="cursor: pointer;" href="">Pagar por MercadoPago</a></li>
                                <li style="text-align: center; cursor: default;">ó</li>
                                <li style="text-align: center;">Pagar por PayPal
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="89NRE5J3DZDCL">
                                        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </li>  
                            </ul>
                          </div>
                        </li>
                        <li>
                            <a href="" style="cursor: pointer;" id="tableSys7"><i class="fa fa-cogs"></i> Herramientas</a>
                        </li>
                        <li id="tableSys8">
                            <a href="" style="cursor: pointer;"><i class="fa fa-question-circle"></i> Necesito ayuda</a>
                        </li>
                        <li>
                            <a href="" style="cursor: pointer;" id="tableSys9"><i class="icon-subirpremium"></i> Conviértete a GOLD</a>
                        </li>
                        <li id="tableSys10">
                            <a href="{{ url('/logout') }}" style="cursor: pointer;"><i class="icon-salir"></i> Salir de {{Config::get('app.name')}}</a>
                        </li>
                  </ul>
                </div>
            </aside>
        </section>
        <section id="body">
          <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                <div class="card">
                    <div class="card-content">
                      <img onerror="this.src='{{ url('assets/img/system/perfil_default.png') }}'" src="{{Auth::user()->X_UFOTO}}" style="width: 100px; height: 100px; display: inline-block;">
                      <p style="padding-left: 50px; font-size: 20px; display: inline-block;">@Lang('messages.welcome') {{Auth::user()->name}}</p>
                      <p style="padding-right: 50px; font-size: 20px; display: inline-block;" class="pull-right hidden-xs">
                        <button style="background-color: #26A8FF; margin-left: 50px;" class="btn waves-effect waves-light" type="submit" name="action">Botón
                            <span class="fa fa-plus"></span>
                        </button>    
                      </p>
                    </div>
                </div>
              </div>
            <div class="col-md-2">
            </div>
          </div>
          
          <div id="bloques" class="row" style="margin:0;">

            <div class="row">

              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                <div class="col-md-4">
                  <a href="escribir.php">
                    <div class="card" style="background-color: #76BC12;">
                    
                        <div class="card-content" style="height: 140px; padding-top: 12px;">
                          <span style="color: white; font-size: 50px;" class="fa fa-pencil"></span>
                          <p style="color: white; font-size: 20px; padding-top: 10px;">Escribe una publicación nueva</p>
                        </div>
                        
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="calendario.php">
                    <div class="card" style="background-color: #274565;">
                        
                        <div class="card-content" style="height: 140px; padding-top: 12px;">
                          <span style="color: white; font-size: 50px;" class="fa fa-calendar"></span>
                          <p style="color: white; font-size: 20px; padding-top: 10px;">Ver calendario de publicaciones</p>
                        </div>
                        
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="responder.php">
                    <div class="card" style="background-color: #2EBEB5;">
                    
                        <div class="card-content" style="height: 140px; padding-top: 12px;">
                          <span style="color: white; font-size: 50px;" class="fa fa-envelope"></span>
                          <p style="color: white; font-size: 20px; padding-top: 10px;">Mis mensajes</p>
                        </div>
                        
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-2">
              </div>

            </div>
          
            <div class="row">
            
              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                <div class="col-md-4">
                  <a href="stats.php">
                    <div class="card" style="background-color: #F68921;">
                    
                        <div class="card-content" style="height: 140px; padding-top: 12px;">
                          <span style="color: white; font-size: 50px;" class="icon-stats-dots"></span>
                          <p style="color: white; font-size: 20px; padding-top: 10px;">Mis estadísticas</p>
                        </div>
                        
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href=""> 
                    <div class="card" style="background-color: #4C7AD8;">
                        
                        <div class="card-content" style="height: 140px; padding-top: 12px;">
                          <span style="color: white; font-size: 50px;" class="fa fa-newspaper-o"></span>
                          <p style="color: white; font-size: 20px; padding-top: 10px;">Descubre contenidos</p>
                        </div>
                        
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="">
                    <div class="card" style="background-color: #1F8984;">
                    
                        <div class="card-content" style="height: 140px; padding-top: 12px;">
                          <span style="color: white; font-size: 50px;" class="fa fa-cogs"></span>
                          <p style="color: white; font-size: 20px; padding-top: 10px;">Herramientas</p>
                        </div>
                        
                    </div>
                  </a>
                </div>
                <div class="col-md-2">
                </div>

              </div>

            </div>
          
        </section>

@stop