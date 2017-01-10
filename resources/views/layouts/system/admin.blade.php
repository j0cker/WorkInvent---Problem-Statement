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
  
  {{-- angular Controller Name --}}
  @section('angularController','profile')

  {{-- Body --}}
  
  @section('content')
        <section id="body">

          <div class="row">

              <div class="col-md-2">
              </div>     

              <div class="col-md-8">
                <div style="background-color: #f9f9f9;" class="card">
                    <div class="card-content">
                      <!-- <p style="color: #175780; padding-left: 50px; font-size: 15px; display: inline-block;">
                         <a class="underline" href="system.php">Inicio</a> > <a class="underline" href="">Mi perfil</a>
                      </p><br /> -->
                      <!-- <p style="padding-right: 50px; font-size: 20px; display: inline-block;" class="pull-right hidden-xs">
                        <button onclick="abrirSignUpModal();" style="background-color: #26A8FF; margin-left: 50px;" class="btn waves-effect waves-light" type="submit" name="action">Agrega otra red social<span class="fa fa-plus"></span>
                        </button>    
                      </p> -->
                      <p style="color: #14446d; padding-left: 50px; font-size: 28px; display: inline-block;">@Lang('messages.adminTitle')</p><br />
                      <p style="color: #929292; padding-left: 50px; font-size: 18px; display: inline-block;">@Lang('messages.headTitleAdmin')</p>
                    </div>
                </div>
              </div>

             <div class="col-md-2">
             </div>

          </div>  
        </section>

        <section id="body">
            <!-- <div class="row">
   
              <div class="col-md-2">
              </div>

              <div class="col-md-8">

                <div class="card">
                    <div class="card-content">
                      <img src="" style="display: inline-block;">
                      <p style="padding-left: 50px; font-size: 20px; display: inline-block;"></p>
                    </div>
                </div>
              </div>

              <div class="col-md-2">
              </div>

          </div> -->


         <div class="row">

          <div class="row">
           <div class="col-md-2">
           </div>
            
           <div class="col-md-8">
             <ul class="tabs">
               <li class="tab col-md-4"><a class="active" href="#tab1">@Lang('messages.homeTab')</a></li>
               <li class="tab col-md-4"><a href="#tab2">@Lang('messages.mailsTab')</a></li>
               <li class="tab col-md-4"><a href="#tab3">@Lang('messages.rolesTab')</a></li>
             </ul>
           </div>
         
           <div class="col-md-2">
           </div>
          </div>

          <div class="col-md-2">
          </div> 

           <div class="col-xs-12 col-md-8">
             <div class="card">
               <div class="card-content">

                 <div id="tab1" class="col s12">
          
                  <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center; padding: 0;">
                    @Lang('messages.homeDescription')

                    <div style="margin-top: 10px;" class="row">
                      <div class="col-md-12">

                        <div class="col-md-4">
                          <a href="escribir.php">
                            <div class="card" style="background-color: #76BC12;">
                            
                                <div class="card-content" style="height: 140px; padding-top: 12px;">
                                  <span style="color: white; font-size: 50px;">-</span>
                                  <p style="color: white; font-size: 20px; padding-top: 10px;">Total Users</p>
                                </div>
                                
                            </div>
                          </a>
                        </div>

                        <div class="col-md-4">
                          <a href="calendario.php">
                            <div class="card" style="background-color: #274565;">
                                
                                <div class="card-content" style="height: 140px; padding-top: 12px;">
                                  <span style="color: white; font-size: 50px;">-</span>
                                  <p style="color: white; font-size: 20px; padding-top: 10px;">Total mails verified</p>
                                </div>
                                
                            </div>
                          </a>
                        </div>

                        <div class="col-md-4">
                          <a href="responder.php">
                            <div class="card" style="background-color: #2EBEB5;">
                            
                                <div class="card-content" style="height: 140px; padding-top: 12px;">
                                  <span style="color: white; font-size: 50px;">-</span>
                                  <p style="color: white; font-size: 20px; padding-top: 10px;">Total Idioms</p>
                                </div>
                                
                            </div>
                          </a>
                        </div>

                      </div><!--col-md-8-->
                    </div><!--row-->

                    <div style="margin-top: 10px;" class="row">
                      <div class="col-md-12">

                        <div class="col-md-4">
                          <a href="escribir.php">
                            <div class="card" style="background-color: #F68921;">
                            
                                <div class="card-content" style="height: 140px; padding-top: 12px;">
                                  <span style="color: white; font-size: 50px;">-</span>
                                  <p style="color: white; font-size: 20px; padding-top: 10px;">Total users paying</p>
                                </div>
                                
                            </div>
                          </a>
                        </div>

                        <div class="col-md-4">
                          <a href="calendario.php">
                            <div class="card" style="background-color: #4C7AD8;">
                                
                                <div class="card-content" style="height: 140px; padding-top: 12px;">
                                  <span style="color: white; font-size: 50px;">-</span>
                                  <p style="color: white; font-size: 20px; padding-top: 10px;">Total Time Zone's</p>
                                </div>
                                
                            </div>
                          </a>
                        </div>

                        <div class="col-md-4">
                          <a href="responder.php">
                            <div class="card" style="background-color: #1F8984;">
                            
                                <div class="card-content" style="height: 140px; padding-top: 12px;">
                                  <span style="color: white; font-size: 50px;">-</span>
                                  <p style="color: white; font-size: 20px; padding-top: 10px;">Total Roles</p>
                                </div>
                                
                            </div>
                          </a>
                        </div>

                      </div><!--col-md-8-->
                    </div><!--row-->

                  </div><!--col-xs-12 col-sm-12 col-md-12-->

                 </div> <!-- FIN TAB 1 -->

                 <div id="tab2" class="col s12"> 
                 </div> <!-- FIN tab2 -->

                 <div id="tab3" class="col s12">
                 </div><!--fin tab 3-->

               </div> <!-- final card-content -->
             </div> <!-- final card -->
           </div> <!-- final col-md-8 -->

              <div class="col-md-2">
              </div> 
               
              </div>
            </div>
          </div>
    
            
        </section>

@stop