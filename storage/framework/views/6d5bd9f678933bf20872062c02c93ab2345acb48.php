<?php echo MetaTags( settings("websiteName"), excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" ,
settings("metaKeywors") , settings("websiteName") ); ?>



<?php $__env->startSection('content'); ?>
    <section id="about">
        <div class="container">
            <div class="row" style="height:600px">
                <div class="col">
                    <div class="card" style="padding: 20px;">
                       
                        <div class="row">
                            <div class="col-lg-8 box-right"  >
                                <div class="about-right">
                                   <p class="about-content"><?php echo isset($about->content)? strip_tags(\Illuminate\Support\Str::limit($about->content,150,'...')) : "لايوجد محتوى حالياً"; ?>

                                       تاريخ التأسيس
                                   </p>
                                   <p style="text-align: right;font-weight:bold;margin-top:-11px"> 22/8/2018 .</p>
                             
                                   <div class="about-title" >
                                       <img  src="<?php echo ThemeHelper(); ?>img/our_vision.png" alt="">
                                       <p><?php echo e($vision->title); ?></p>
                                   </div>
                                   <p style="margin-top:-20px"><?php echo strip_tags(str_limit($vision->content,120,'...')); ?></p>

                                   <div class="about-title" >
                                       <img  src="<?php echo ThemeHelper(); ?>img/message (2).png" alt="">
                                       <p><?php echo e($message->title); ?></p>
                                   </div>
                                   <p style="margin-top:-20px"><?php echo isset($about->content)? strip_tags(\Illuminate\Support\Str::limit($message->content,400,'...')) : "لايوجد محتوى حالياً"; ?></p>
                                   <a  href="<?php echo e('/pages/1'); ?>">
                                       <div class="read" style="display: flex;justify-content: left;">
                                           <p style="color: #DE7778;">إقرأ المزيد</p>
                                           <img style="height: 20px; transform: rotate(180deg);margin-top: 5px;
                                           margin-right: 10px;" class="img-responsive"
                                            src="<?php echo ThemeHelper(); ?>/img/read.png">
                                       </div>
                                   
                                   </a>
                                   
                                   
                                </div>
                               
                       

                           </div>

                           <div class="col-lg-4 hide">
                            
                        </div>

                        </div>

                       
                      </div>
                      <div class="left-card">
                       <div class="about-left ">
                            <div class="left-title">
                                  <div class="circle"></div>
                                  <div  style="color:#1F3669;font-size:30px;font-weight: bold; ">من نحن </div>
                                  <div class="circle"></div>
                            </div>
                        </div> 
                        <div class="left-box">
                            <img style="height:200px;width:200px " class="img-responsive"
                                    src="<?php echo ThemeHelper(); ?>/img/icons/logo.png">
                        </div>
                      
                      </div>
                </div>
            </div>
          </div>
    </section>
    
 
  <?php if(!empty($post)): ?>
    <section id="latest">
      
            <div class="our_impact_header lates-header">
               <img class="img-fluid" src="/photos/Group_604.png" alt="">
               <h3>اخر الاخبار</h3>
               <img class="img-fluid" src="/photos/Group_604.png" alt="">
            </div>
        <div class="container">
            <div class="latest-content" style="display:flex">
            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
            <div class="card card-lates" style="width:12rem;height:328px" id="carlates">
                <img src="/photos/<?php echo e($element->image_name); ?>" style="width: 100%;height:100%;position: relative;" />
              

             <div style="position: 
             absolute;margin-top:-117px;font-family:dubai;
             padding-right:20px; padding-top:10px;z-index: 100;margin-top:202px;">

                <p style="" class="pro" ><?php echo strip_tags(str_limit($element->title,85,'...')); ?></p>
                <a href="/news/<?php echo e($element->id); ?>" class="hyber-link news-readmore" style="margin-right: 201px;" >
                    <small style="color: #DE7778;font-size: 117%;">قراءة المزيد</small><img style="height: 15px; transform: rotate(180deg);margin-top: 5px;
                        margin-right: 10px; border-radius:0" 
                         src="<?php echo ThemeHelper(); ?>/img/read.png">
                </a>
                
             </div>
              </div>
              
           
              
          
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
       
        </div>
        <div style="display: flex;" class="SeeMor">
            <a href="/news" class="text-center">
               <p style="display: inline;color:#717070">رؤية المزيد</p>
               <img style="height: 15px;border-radius:0;transform: rotate(179deg);margin-top: 6px;" 
                src="<?php echo ThemeHelper(); ?>/img/Group_598.png">
            </a>
        </div>
        
        
        <?php $__env->startPush('scripts'); ?>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function()
                {
                    $(".card-lates:first").addClass("card-active");
                    $(".card-lates:first.news-readmore").css("display","inline!important");
                    $(".card-lates").on("click",function(){
                       $(".card.card-lates").removeClass("card-active");
                       $(this).addClass("card-active");
                       });

                    

                    
                });
            </script>
              <style>
                     .card-active{
                        width:24rem !important;
                     }
                     .card-active p{
                        width:24rem !important;
                        padding-left: 034px !important;
                     }
              </style>
        <?php $__env->stopPush(); ?>

        <?php $__env->startPush('scripts'); ?>
         <script>
            // var card=document.getElementById("carlates").offsetWidth;//192
            // alert(card);

         </script>
        <script>

            </script>

        <?php $__env->stopPush(); ?>
    </section>
    <?php endif; ?> 
    

<?php if(!empty($statistics)): ?>

<section id="our_impact"> 
    <div class="container">
         <div class="our_impact_header">
            <img class="img-fluid" src="/photos/Group_604.png" alt="">
            <h3>تأثيرنا</h1>
            <img class="img-fluid" src="/photos/Group_604.png" alt="">
         </div>
    </div>
<div class="container">
    <div class="row" style="margin-top: 80px">
        <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="our_impact_info">
            <h4>فوق <?php echo e($statistics->applicants_num); ?></h4>
            <img src="photos/4.png">
            <p>حالات حلها</p>
           </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="our_impact_info">
            <h4>فوق <?php echo e($statistics->trainees_num); ?></h4>
            <img src="photos/3.png">
            <p>تم الإفراج عن سجناء</p>
           </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="our_impact_info">
                <h4>فوق <?php echo e($statistics->centers_num); ?></h4>
                <img src="photos/2.png">
                <p>تمت حماية النساء من العنف</p>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="our_impact_info ">
               
                <h4>فوق <?php echo e($statistics->courses_no); ?></h4>
                <img src="photos/1.png">
                <p>اطفال تم إنقاذها من الجوع</p>


            </div>
        </div>
    </div>
</div>
</section> 
<?php endif; ?>
<?php if(!empty($videos)): ?>
       <section id="video-section" data-aos="fade-up">
            </div> 
            <?php $__env->startPush('scripts'); ?>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
                <script>
                   
                    $('.vide').magnificPopup({
                        type: 'iframe',
                        iframe: {
                            patterns: {
                                dailymotion: {

                                    index: 'youtube.com',
                                    id: function(url) {
                                        var m = url.match(/^.+youtube.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
                                        if (m !== null) {
                                            if(m[4] !== undefined) {

                                                return m[4];
                                            }
                                            return m[2];
                                        }
                                        return null;
                                    },

                                    src: 'https://www.dailymotion.com/embed/video/%id%'

                                }
                            }
                        }


                    });
                </script>

                <script src="/OwlCarousel-master/owl-carousel/owl.carousel.js"></script>

                <script>
                    $(document).ready(function () {
                        $(".owl-partners").owlCarousel({
                            navigation: false,
                            margin: 10,
                            loop: true,
                            autoWidth: true,
                            items: 3,
                            rtl: true,
                            center: true,
                            autoPlay: true

                        });
                    });
                </script>
                <style>
                    #partners-slider {
                        direction: ltr;
                        /*background: white;*/
                    }

                    #companies-slider {
                        direction: ltr;
                    }

                    /*.owl-item.active {*/
                    /*    transform: scale(1.1, 1.2);*/
                    /*}*/


                    .owl-partners .item2 {
                        padding: 30px 0px;
                        /*height : 300px;*/
                        margin: 26px;
                        /*color: #FFF;*/
                        -webkit-border-radius: 3px;
                        -moz-border-radius: 3px;
                        border-radius: 3px;
                    }

                    .owl-partners .item2 img {
                        margin: 0 auto;
                        display: block;
                    }
                </style>

            <?php $__env->stopPush(); ?>

        </section>
    <?php endif; ?>

    <style>

    </style>
<?php $__env->startPush('scripts'); ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?php $__env->stopPush(); ?>
    

    <section style=" margin-top:70px; margin-bottom: 70px" id="partner" data-aos="fade-up">
        <?php $__env->startPush('scripts'); ?>
            <script src="/OwlCarousel-master/owl-carousel/owl.carousel.js"></script>

           
            <style>
                #partners-slide {
                    direction: ltr;
                    background: white;
                    margin-top: 20px;
                }

                .owl-partner .item2 {
                    padding: 30px 0px;
                    height: 200px;
                    margin: 10px;
                    color: #FFF;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    border-radius: 3px;
                }

                .owl-partner .item2 img {
                    margin: 0 auto;
                    display: block;
                }
            </style>

        <?php $__env->stopPush(); ?>
    </section>

    

    

    

                
                            
                        

                
                                

                            

            </div>
        </div>

    </section>
    




    

    



    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo ThemeHelper(); ?>js/jquery.waypoints.min.js"></script>
        <script src="<?php echo ThemeHelper(); ?>js/jquery.animateNumber.min.js"></script>
        <script>
            var waypoint = new Waypoint({
                element: document.getElementById('projectcounter'),
                handler: function (direction) {
                    $('.projectcounter1').animateNumber(
                        {
                            number: "<?php echo e($project->applicants_num); ?>",
                        },
                        5000
                    );
                    $('.projectcounter2').animateNumber({
                            number: "<?php echo e($project->trainees_num); ?>",
                        },
                        5000);
                    $('.projectcounter3').animateNumber({
                        number: "<?php echo e($project->centers_num); ?>",
                    }, 5000);
                    $('.projectcounter4').animateNumber({
                            number: "<?php echo e($project->courses_no); ?>",
                        },
                        5000);
                    this.destroy()
                },
                offset: 300,
            });
        </script>
    <?php $__env->stopPush(); ?>
    



    <!-- Start partenrs section -->

    
            
                
                <?php if(session('status')): ?>
                    
                <?php endif; ?>
                
                <div>
                    
                
                
            
            
                
            

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    

<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>