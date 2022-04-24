<!DOCTYPE html>
<html>
    <head>
        {!! MetaTags( settings('websiteName'), excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';

            }
        </style>
    </head>
    <body>
    <div class="error_bg"></div>


    <style>
        .error_bg {
            background-image: url("{!! ThemeHelper() !!}img/404.png");
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-position: 50%;
            display: block;
        }
    </style>
    </body>
</html>
