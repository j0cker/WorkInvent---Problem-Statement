        <div id="siteFooter" class="site-footer md-bg-dark site-footer-layout-1">
            <aside id="siteFooterTop" class="site-footer-top module module-sm">
            <div class="container">
                <div class="row-content row">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="list-social list-inline">
                    <li><a href="https://facebook.com/{{Config::get('app.name')}}" target="_blank" class="btn btn-circle btn-shadow btn-facebook"><i class="icon fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/{{Config::get('app.name')}}" target="_blank" class="btn btn-circle btn-shadow btn-twitter"><i class="icon fa fa-twitter"></i></a></li>
                    <li><a href="https://www.google.com/+{{Config::get('app.name')}}" target="_blank" class="btn btn-circle btn-shadow btn-google-plus"><i class="icon fa fa-google-plus"></i></a></li>
                    </ul>
                    <p class="text-lead">@Lang('messages.SubscribeTxt')</p>
                    <form id="siteFooterSubscribeForm" data-action="assets/php/mailchimp.php" novalidate="novalidate" class="form">
                    <div class="input-group input-group-lg">
                        <label for="siteFooterSubscribeFormEmail" class="sr-only">Email</label>
                        <input id="siteFooterSubscribeFormEmail" type="email" placeholder="Enter your email" name="email" class="form-control"><span class="input-group-btn">
                        <button type="submit" class="btn btn-theme-1">@Lang('messages.Subscribe')</button></span>
                    </div><span class="form-notify help-block text-primary"><i class="form-notify-icon-info"></i> @Lang('messages.privacy')</span>
                    </form>
                </div>
                </div>
            </div>
            </aside>
            <div class="site-footer-bottom module module-mini">
            <div data-css-opacity=".12" class="cover-absolute bg-black" style="opacity: 0.12;"></div>
            <div class="container">
                <p class="mb-0">@Lang('messages.Copyright')</p>
            </div>
            </div>
        </div>
    
    </body>
</html>