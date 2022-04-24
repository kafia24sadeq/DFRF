<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <!-- Encoding -->
    <meta charset="utf-8">

    <link rel="canonical" href="<?php echo $metaURL; ?>">

    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <!-- IE compatibility modes -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="google-site-verification" content="Sm6tjf3RpRQfdffwa2f9cGNixheuvXgXTTX9mN1J2uc" />
    <!-- Set the title of you site -->

    <!-- Set the descritpion of your site -->


    <script src="<?php echo ThemeHelper(); ?>js/modernizr.js"></script>
    <!-- Main Bootstrap styling -->




    <link rel="stylesheet" href="/owl/css/owl.carousel.css">
    <link rel="stylesheet" href="/owl/css/owl.theme.default.css">
    <link
            href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
            rel="stylesheet"  type='text/css'>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom styling -->

    <link href="<?php echo ThemeHelper(); ?>css_styles/css/app.css" rel="stylesheet">
    <link href="<?php echo ThemeHelper(); ?>css/bootstrap_rtl.min.css" rel="stylesheet">
    <link href="<?php echo ThemeHelper(); ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo ThemeHelper(); ?>css/style_icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel='shortcut icon' type='image/x-icon' href="<?php echo ThemeHelper(); ?>img/icons/logo.png" />
    <!-- Iconic font - FontAwesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


    <style>
        /* @font-face{
            font-family: "AlfFont";
            src: url("/themes/default/fonts/dubai.ttf");
        } */
        body{
            /* font-family: AlfFont !important; */
            font-family: arial !important;
        }
        .about-tile{
            /* font-family: AlfFont !important; */
            font-family: arial !important;
        }
    </style>

    <script src="<?php echo ThemeHelper(); ?>js/respond.min.js"></script>






    


    
    <?php echo @settings('analytics'); ?>

    <?php echo @settings('gWebmaster'); ?>

    <?php echo @settings('bing'); ?>

    <?php echo @settings('facebookCode'); ?>

    <?php echo @settings('other'); ?>

    
    <title><?php echo $metaTitle; ?></title>

    
    <meta name="description" content='<?php echo $metaDescription; ?>'>
    <meta name="keywords" content='<?php echo $metaKeywords; ?>'>
    <meta name="author" content='<?php echo $metaAuthor; ?>'>
    

    
    <meta property="og:title"              content='<?php echo $metaTitle; ?>' />
    <meta property="og:url"                content='<?php echo $metaURL; ?>' />
    <meta property="og:type"               content="website" />
    <meta property="og:site_name" content="<?php echo settings("websiteName"); ?>">
    <meta property="og:description"        content='<?php echo $metaDescription; ?>' />



    <meta property="og:image" content="<?php echo $metaImage; ?>" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />


    


    
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content='<?php echo '@'.settings('twitter'); ?>' />
    <meta name="twitter:title" content='<?php echo $metaTitle; ?>' />
    <meta name="twitter:description" content='<?php echo $metaDescription; ?>' />
    <meta name="twitter:image" content='<?php echo $metaImage; ?>' />
    
</head>

<body style="position: relative">

<!-- Start preloader -->






<?php echo app('arrilot.widget')->run('NavWidget'); ?>

<?php if( Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\HomeController@index' ||
 Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\ProgramsController@show'): ?>
    <?php echo $__env->yieldContent('content'); ?>
<?php elseif(Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\PagesController@show'): ?>
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

<?php else: ?>
    <div class="">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

<?php endif; ?>



<?php echo app('arrilot.widget')->run('FooterNavWidget'); ?>








    
        
            
            
            
            
            
        
    



<div class="">
    
</div>



</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="/owl/js/jquery-3.4.1.min.js"></script>
<script src="/owl/js/owl.carousel.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="<?php echo ThemeHelper(); ?>/js/bootstrap.min.js" ></script>



<!-- Main Bootstrap js -->



<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="<?php echo ThemeHelper(); ?>js/imagesloaded.min.js"></script>

<script src="<?php echo ThemeHelper(); ?>js/jquery.scrollto.min.js"></script>
<script src="<?php echo ThemeHelper(); ?>js/jquery.easing.js"></script>
<script src="<?php echo ThemeHelper(); ?>js/jquery.localscroll.min.js"></script>

<script src="<?php echo ThemeHelper(); ?>js/ekko-lightbox.min.js"></script>
<!-- Contact form and google map -->
<script src="<?php echo ThemeHelper(); ?>js/jquery.form.js"></script>
<script src="<?php echo ThemeHelper(); ?>js/jquery.flowuplabels.js"></script>
<!-- Custom scripts and triggers -->
<script src="<?php echo ThemeHelper(); ?>js/custom.js"></script>

<script src="<?php echo ThemeHelper(); ?>js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

    
        
            
            
        
    
    


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script !src="">

    $('img[data-enlargable]').addClass('img-enlargable').click(function(){
        var src = $(this).attr('src');
        $('<div>').css({
            background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
            backgroundSize: 'contain',
            width:'100%', height:'100%',
            position:'fixed',
            zIndex:'10000',
            top:'0', left:'0',
            cursor: 'zoom-out'
        }).click(function(){
            $(this).remove();
        }).appendTo('body');
    });
</script>


    <script !src="">
        $('#stickThis').css({"display": "none !important"});

        $(window).on('scroll', function () {
            if ($(window).scrollTop() >= $('.show-nav').offset.top + $('.show-nav').outerHeight() - window.innerHeight) {

                $('#stickThis').addClass("show");
                // alert('Hellew');

            } else {
                $('#stickThis').removeClass("show");
            }
        });


    </script>


<?php echo $__env->yieldPushContent('scripts'); ?>


<!-- End scripts -->

</html>
