<!-- Login Modal -->
<div class="modal modal-signup" id="modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="margin: 30px auto; padding-top: 30px; padding-bottom: 30px;">
        <div class="modal-content" style="overflow-y: auto; ">
            <div class="modal-header">
                <button style="float: left; color: red; opacity: 1;" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" style="text-align: center; color: #a3a3a3;"></h3>
                <!--<p class="intro text-center">It only takes 3 minutes!</p>-->
                <p></p>
            </div>
            <div style="height: 400px;" class="modal-body col-md-12">
              <div ng-show="loginButton" clas="row">
                <div class="text-center col-md-12">                        
                    <ul style="margin: 0;" class="list-unstyled social-login">
                        <li style="margin: 0;">
                            <button style="margin-top: 10px; margin-bottom: 10px;" onclick="window.location='facebook/redirect.php?liberar=1'" class="btn-facebook btn-lg btn-pill">
                            <img style="margin-left: 0px; margin-top: 4px; float: left; width: 10px; margin-right: 1em;" src="assets/img/index/f.png" />@lang('messages.logfacebook')</button>
                        </li>
                        <li style="margin: 0;">
                          <div class="col-md-2"></div>
                          <div class="text-center input-group input-group-lg col-md-8">
                                <input id="nameISForm" style="padding-left: 10px; border: 1px solid #ccc; height: 37px; font-size: 13px;" type="text" class="form-control" placeholder="@lang('messages.userormail')" aria-describedby="sizing-addon1">
                                <span style="padding: 0px 9px 0px 8px; font-size: 12px; height: 30px; margin-top: 0px;" class="input-group-addon glyphicon glyphicon-user" id="sizing-addon1"></span>
                          </div>
                          <div class="col-md-2"></div>
                        </li>
                        <li style="padding-top: 10px;">
                          <div class="col-md-2"></div>
                          <div class="input-group input-group-lg col-md-8">
                                <input id="passwordISForm" style="padding-left: 10px; border: 1px solid #ccc; height: 37px; font-size: 13px;" type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
                                <span style="padding: 0px 9px 0px 8px; font-size: 12px; height: 30px; margin-top: 0px;" class="input-group-addon glyphicon glyphicon-lock" id="sizing-addon1"></span>
                          </div>
                          <div class="col-md-2"></div>
                        </li>
                        <li>
                          <div style="margin-top: 10px;" class="text-center col-md-12">
                            <button class="btn btn-lg btn-pill btn-shadow btn-theme-1" type="button">@lang('messages.login')</button>
                          </div>
                        </li>
                        <div style="padding-top: 20px;" class="hidden-sm hidden-md hidden-lg"></div>                      
                        <p style="text-align: center;" class="note">@lang('messages.permisosredes')</p>
                
                    </ul>
                </div>
                <!--<div class="divider"><span>Or</span></div>-->
              </div> <!-- fin loginButton --> <!--fin row-->

              <div ng-show="registerButton" clas="row">
                <div class="text-center col-md-12">    
                    <ul style="margin: 0;" class="list-unstyled social-login">
                        <form id="registerForm" name="registerForm" action="pene.php">
                          <li style="margin: 0;">
                            <div class="col-md-2"></div>
                            <div class="input-group input-group-lg col-md-8">
                                  <input name="nameForm" id="nameForm" style="padding-left: 10px; border: 1px solid #ccc; height: 37px; font-size: 13px;" type="text" class="form-control" placeholder="{{ Lang::get('messages.user') }}" aria-describedby="sizing-addon1">
                                  <span style="padding: 0px 9px 0px 8px; font-size: 12px; height: 30px; margin-top: 0px;" class="input-group-addon glyphicon glyphicon-user" id="sizing-addon1"></span>
                            </div>
                            <div class="col-md-2"></div>
                          </li>
                          <li style="margin-top: 10px;">
                            <div class="col-md-2"></div>
                            <div class="input-group input-group-lg col-md-8">
                                  <input name="mailForm" id="mailForm" style="padding-left: 10px; border: 1px solid #ccc; height: 37px; font-size: 13px;" type="email" class="form-control" placeholder="Mail" aria-describedby="sizing-addon1">
                                  <span style="padding: 0px 9px 0px 8px; font-size: 12px; height: 30px; margin-top: 0px;" class="input-group-addon glyphicon glyphicon-envelope" id="sizing-addon1"></span>
                            </div>
                            <div class="col-md-2"></div>
                          </li>
                          <li style="margin-top: 10px;">
                            <div class="col-md-2"></div>
                            <div class="input-group input-group-lg col-md-8">
                                  <input name="passwordForm" id="passwordForm" style="padding-left: 10px; border: 1px solid #ccc; height: 37px; font-size: 13px;" type="password" class="form-control" placeholder="{{ Lang::get('messages.password') }}" aria-describedby="sizing-addon1">
                                  <span style="padding: 0px 9px 0px 8px; font-size: 12px; height: 30px; margin-top: 0px;" class="input-group-addon glyphicon glyphicon-lock" id="sizing-addon1"></span>
                            </div>
                            <div class="col-md-2"></div>
                          </li>
                          <li style="margin-top: 10px;">
                            <div class="col-md-2"></div>
                            <div class="input-group input-group-lg col-md-8">
                                  <input name="passwordConfForm" id="passwordConfForm" style="padding-left: 10px; border: 1px solid #ccc; height: 37px; font-size: 13px;" data-rule-equalTo="#passwordForm" type="password" class="form-control" placeholder="{{ Lang::get('messages.confPassword') }}" aria-describedby="sizing-addon1">
                                  <span style="padding: 0px 9px 0px 8px; font-size: 12px; height: 30px; margin-top: 0px;" class="input-group-addon glyphicon glyphicon-lock" id="sizing-addon1"></span>
                            </div>
                            <div class="col-md-2"></div>
                          </li>
                          <li style="margin-top: 10px;">
                            <div class="text-center col-md-12">
                              <button id="registerButtonSubmit" class="btn btn-lg btn-pill btn-shadow btn-theme-1" type="button">@lang('messages.register')</button>
                            </div>
                          </li>
                        </form>
                        <div style="padding-top: 20px;" class="hidden-sm hidden-md hidden-lg"></div>                      
                        <p style="text-align: center;" class="note">@lang('messages.permisosredes')</p>
                    </ul>
                </div>
                <!--<div class="divider"><span>Or</span></div>-->
              </div> <!-- fin registerButton --> <!--fin row-->


            </div><!--//modal-body-->
            <!--
            <div class="modal-footer">
                <p>Already have an account? <a class="login-link" id="login-link" href="http://themes.3rdwavemedia.com/tempo/1.4/#">Log in</a></p>                    
            </div>--><!--//modal-footer-->
        </div><!--//modal-content-->
    </div><!--//modal-dialog col-md-8-->
    <div class="col-md-2"></div>
</div><!--//modal-->
