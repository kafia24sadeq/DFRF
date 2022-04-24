/*

Template Name: Myway
Template Demo: http://awerest.com/demo/myway

Purchase: http://themeforest.net/item/myway-onepage-bootstrap-parallax-retina-template/4058880?ref=awerest

Author: Awerest

Description: Onepage Bootstrap Multi-Purpose Parallax Retina Template
Tags: Responsive, Mobile First, Retina, Bootstrap 3, One Page, Multi Page, Multi-Purpose, Agency, Clean, Creative, Minimal, Components, Photography, Portfolio, Business, Corporate, White, Modern

Version: 2.5

---------------

Table of Contents:

1) Fix for Internet Explorer 10 in Windows 8 and Windows Phone 8
2) Animated elements
3) Carousels
	- Intro slider
	- Works slider
4) Intro section height
5) Contact form
6) SVG icons
7) Google map
	- Marker image and position
	- Map position
8) Collapse menu on tap/select
9) Smooth scroll on anchors
10) Gallery lightbox
11) Preloader
12) Href # fix for demo

---------------

*/
$(window).on('load', function () {
    $(".se-pre-con").fadeOut("slow");
});

$(document).ready(function() {
	'use strict';

/* ==== 1) Fix for Internet Explorer 10 in Windows 8 and Windows Phone 8 ==== */

	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		var msViewportStyle = document.createElement("style")
		msViewportStyle.appendChild(
			document.createTextNode(
				"@-ms-viewport{width:auto!important}"
			)
		)
		document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
	}

/* ==== 2) Animated elements ==== */

/* After all images are loaded, and if it's no-touch device, run script */
    //
	// imagesLoaded(document.body, function(){
	// 	if ($('.no-touch').length) {
	// 		skrollr.init({
	// 			smoothScrolling: false,
	// 			easing: 'sqrt',
	// 			forceHeight: false
	// 		});
	// 	}
	// });


    var top1 = $('#about').offset().top-80;
    var top5 = $('#works').offset().top-200;
    var top4 = $('#products').offset().top;
    var top6 = $('#partners').offset().top;
    var top7 = $('#contact').offset().top-80;


    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("active");
    });


    $('.links li a').click(function(){
        $('li a').removeClass("active");
        $(this).addClass("active");
    });

    // close menu in mobile

    $(function() {
        $('.navbar-nav').on('click', function(){
            if($('.navbar-header .navbar-toggle').css('display') !='none'){
                $(".navbar-header .navbar-toggle").trigger( "click" );
            }
        });
    });

    // close modal
    $(function() {
        $('#contactShow').on('click', function () {
            $('#projectModal').modal('hide');
            $('#contactModal').modal('show');
        });
    });



    // smooth scroll to sections

    $(document).on("scroll", onScroll);

    $('.links li a[href^="#"]').on('click',function (e) {

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });

    });

    function onScroll(event){
        var scrollPos = $(document).scrollTop();
        $('.links a').each(function () {

            var currLink = $(this);
            var refElement = $(currLink.attr('href'));

            // if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            //     // $('.links li a').removeClass("active");
            //     currLink.addClass("active");
            // }
            // else{
            //     currLink.removeClass("active");
            // }

        });
    }

/* ==== 3) Carousels ==== */

/* Intro text slider */

	// $('#carousel-intro').carousel({
	// 	interval: 3500,
// 	// 	pause: "false"
// 	// })
//
// /* Works sliders */
//
// 	$('#carousel-1, #carousel-2, #carousel-3').carousel({
// 		interval: false
// 	})
//
// /* ==== 4) Make intro section height of viewport / Minimum height is set to 445px in style.css ==== */
//
// 	$(function(){
// 		$('#intro2').css({'height':($(window).height())+'px'});
// 		$(window).resize(function(){
// 		$('#intro2').css({'height':($(window).height())+'px'});
// 		});
// 	});

/* ==== 5) Contact form ==== */

	// $('.flowuplabels').FlowupLabels({
	// 	feature_onInitLoad: false,
	// 	class_focused: 'focused',
	// 	class_populated: 'populated'
	// });
    //
	// var options = {
	// 	target: '.message .alert',
	// 	beforeSubmit: showRequest,
	// 	success: showResponse
	// };
    //
	// $('#contactForm').ajaxForm(options);
	// function showRequest(formData, jqForm, options) {
	// 	var queryString = $.param(formData);
	// 		return true;
	// 	}
	// function showResponse(responseText, statusText) {
	// 	}

/* ==== 6) SVG icons ==== */
	// var url ='http://nahdamakers.app/themes/default/js/streamline-icons.svg';
	// var c=new XMLHttpRequest(); c.open('GET', url, false); c.setRequestHeader('Content-Type', 'text/xml'); c.send();
	// document.body.insertBefore(c.responseXML.firstChild, document.body.firstChild)
    //
	// var url ='http://nahdamakers.app/themes/default/js/simpleline-icons.svg';
	// var c=new XMLHttpRequest(); c.open('GET', url, false); c.setRequestHeader('Content-Type', 'text/xml'); c.send();
	// document.body.insertBefore(c.responseXML.firstChild, document.body.firstChild)
    //
	// var url ='http://nahdamakers.app/themes/default/js/social-icons.svg';
	// var c=new XMLHttpRequest(); c.open('GET', url, false); c.setRequestHeader('Content-Type', 'text/xml'); c.send();
	// document.body.insertBefore(c.responseXML.firstChild, document.body.firstChild)

/* Add your set / See documentation */

/*
	var url ='css/your-file-name.svg';
	var c=new XMLHttpRequest(); c.open('GET', url, false); c.setRequestHeader('Content-Type', 'text/xml'); c.send();
	document.body.insertBefore(c.responseXML.firstChild, document.body.firstChild)
*/

/* ==== 7) Google map ==== */

    // var map;
    // var myCenter =new google.maps.LatLng(12.808045,45.040105);
    // var marker=new google.maps.Marker({
    //     position:myCenter
    // });
    //
    //
    // function initialize() {
    //     var mapProp = {
    //         center:myCenter,
    //         zoom: 18,
    //         draggable: false,
    //         scrollwheel: false,
    //         mapTypeId:google.maps.MapTypeId.ROADMAP
    //     };
    //
    //     map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);
    //     marker.setMap(map);
    //
    //     google.maps.event.addListener(marker, 'click', function() {
    //
    //         infowindow.setContent(contentString);
    //         infowindow.open(map, marker);
    //
    //     });
    // };
    // google.maps.event.addDomListener(window, 'load', initialize);
    //
    // google.maps.event.addDomListener(window, "resize", resizingMap());
    //
    // $('#myMapModal').on('show.bs.modal', function() {
    //     //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)
    //     resizeMap();
    // })
    //
    // function resizeMap() {
    //     if(typeof map =="undefined") return;
    //     setTimeout( function(){resizingMap();} , 400);
    // }
    //
    // function resizingMap() {
    //     if(typeof map =="undefined") return;
    //     var center = map.getCenter();
    //     google.maps.event.trigger(map, "resize");
    //     map.setCenter(center);
    // }


});

$(window).load(function() {
	'use strict';

/* ==== 8) Collapse menu on tap/select on mobile and tablet devices ==== */

	if ($('.navbar-toggle:visible').length) {
		$('.navbar a').click(function () { $(".navbar-collapse").collapse("hide") });
	}

/* ==== 9) Smooth scroll on anchors ==== */

/* Add your anchor parent element class or ID */

	$.localScroll.hash();
	$('.navtop, .navbar-header, footer, #intro , #products').localScroll({
		target: 'body',
		queue: true,
		duration: 1000,
		hash: false,
		offset: -60,
		easing: 'easeInOutExpo'
	});

/* ==== 10) Gallery lightbox ==== */

	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	});

/* ==== 11) Preloader ==== */

	$('.spinner').fadeOut('slow');
	$('.preloader').delay(350).fadeOut('slow');

/* ==== 12) Href # fix for demo ==== */

	// $('a[href="#"]').click(function() {
	// 	return false;
	// });

});