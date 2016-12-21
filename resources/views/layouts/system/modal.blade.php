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

              <!--SendLinkPass part-->

              <div ng-show="sendLinkPassButton" clas="row">
                <div class="text-center col-md-12">    
                    <ul style="margin: 0;" class="list-unstyled social-login">
                        <form method="POST" id="sendLinkPassForm" name="sendLinkPassForm" action="{{ url('/password/email') }}">
                          {{ csrf_field() }}
                          <li style="margin: 0;">
                            <div class="col-md-2"></div>
                            <div class="input-group input-group-lg col-md-8">
                                  <input id="email" type="email" style="padding-left: 10px; border: 1px solid #ccc; height: 37px; font-size: 13px;" class="form-control" name="email" placeholder="email" required>
                                  <span style="padding: 0px 9px 0px 8px; font-size: 12px; height: 30px; margin-top: 0px;" class="input-group-addon glyphicon glyphicon-user" id="sizing-addon1"></span>
                            </div>
                            <div class="col-md-2"></div>
                          </li>
                          <li style="margin-top: 10px;">
                            <div class="text-center col-md-12">
                              <button id="sendLinkPassButtonSubmit" class="btn btn-lg btn-pill btn-shadow btn-theme-1" type="button">
                                @lang('messages.ResetPasswordButton')
                              </button>
                            </div>
                          </li>
                        </form>
                        <div style="padding-top: 20px;" class="hidden-sm hidden-md hidden-lg"></div>             
                    </ul>
                </div>
                <!--<div class="divider"><span>Or</span></div>-->
              </div> <!-- fin Button --> <!--fin row-->


            </div><!--//modal-body-->
            <!--
            <div class="modal-footer">
                <p>Already have an account? <a class="login-link" id="login-link" href="http://themes.3rdwavemedia.com/tempo/1.4/#">Log in</a></p>                    
            </div>--><!--//modal-footer-->
        </div><!--//modal-content-->
    </div><!--//modal-dialog col-md-8-->
    <div class="col-md-2"></div>
</div><!--//modal-->
