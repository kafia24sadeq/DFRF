<div class="divide-sm">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 divide-md text-center">
            <img class="img-responsive" src="{!! ThemeHelper() !!}/img/logo.png" width="350px" alt="">
        </div>
    </div>
</div>
<footer id="contact" class="divide-sm">
    <div class="container">
        <div class="row">
            <!-- Email -->
            <div class="col-md-4 col-sm-4 contact-col text-center">
                <div class="row ">
                    <img class="contact-icon email img-responsive" src="{{ ThemeHelper()  }}img/email.png" alt="email">
                    <h3>{!! trans('public.email') !!}</h3>
                </div>
                <div class="row contact-text">
                    <p><a style="color: #fff" class="email-text" href="mailto:support@you-it.com">info@alsalhymed.com</a></p>
                </div>
            </div>
            <!-- Location -->
            <div class="col-md-4 col-sm-4 contact-col text-center">
                <div class="row loc-icon">
                    <img class="contact-icon img-responsive" src="{{ ThemeHelper()  }}img/location.png" alt="location">
                    <h3>{!! trans('public.address') !!}</h3>
                </div>
                <div class="row contact-text">
                    <a href="https://goo.gl/maps/96357MfAs6J2" target="_blank" style="color: #fff">{!! trans('public.location') !!}</a>
                </div>
            </div>
            <!-- Phone contact -->
            <div class="col-md-4 col-sm-4 contact-col text-center">
                <div class="row">
                    <img class="contact-icon img-responsive" src="{{ ThemeHelper()  }}img/phone.png" alt="phone">
                    <h3>{!! trans('public.phones') !!}</h3>
                </div>
                <div class="row contact-text" style="font-family:'TCM';">
                    <p><span>02-397946 (967+)</span></p>
                    <p><span>773803060 (967+)</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 divide-sm text-center">
                <div class="social-icons">
                    <a href=""><img width="30xp" src="{!! ThemeHelper() !!}img/soicalmedia/facebook.png" alt=""></a>
                    <a href=""><img width="30xp" src="{!! ThemeHelper() !!}img/soicalmedia/instgram.png" alt=""></a>
                    <a href=""><img width="30xp" src="{!! ThemeHelper() !!}img/soicalmedia/twitter.png" alt=""></a>
                    <a href=""><img width="30xp" src="{!! ThemeHelper() !!}img/soicalmedia/telegram.png" alt=""></a>

                </div>
            </div>
        </div>
        <div class="row text-center copyright-text">
            <div class="col-sm-12 divide-xs">
                <p><small>{!! trans('public.copyRights') !!} &copy; {{ CopyRightsYear(2018)  }} </small></p>
            </div>
            <div class="col-sm-12 divide-xs">
                <p>
                    <small><b>تصميم و تطوير</b></small><br>
                    <small>يو لتقنية المعلومات</small>
                </p>
                <p>
                    <a href="https://www.facebook.com/youtechnology/" target="">
                        <img style="width: 100px" src="{!! ThemeHelper() !!}/img/youitlogoblack.png" alt=""></a>
                </p>
            </div>
        </div>
    </div>
</footer>
