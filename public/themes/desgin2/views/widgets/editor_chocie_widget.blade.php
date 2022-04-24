<div class="box_shadow" style="
 -moz-box-shadow: 0px 20px 40px #888;
  -webkit-box-shadow: 0px 20px 40px #888;
  box-shadow: 0px 20px 40px #888;
  -ms-filter: 'progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#888888')';
    filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#444444');

/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,f1f1f1+50,e1e1e1+51,f6f6f6+100;White+Gloss+%231 */
background: rgb(255,255,255); /* Old browsers */
background: -moz-linear-gradient(-45deg,  rgba(255,255,255,1) 0%, rgba(241,241,241,1) 50%, rgba(225,225,225,1) 51%, rgba(246,246,246,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg,  rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg,  rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

 padding: 30px 0; margin-bottom: 40px;">


    <div class="container marginer">
        <div class="widget_wrapper" >
            {{--<div class="widget_header">--}}
                {{--<h3>{!! trans("public.editor_choice") !!}</h3>--}}
            {{--</div>--}}


            @foreach ($posts as $element)


                <div class="relative   col-xs-3" >


                    <div>

                        <a href="{!! route( 'post' , $element->id) !!}"  >
                            <div class=" spec center-block" style="position: relative">
                                {!!   Html::image(PhotosDir($element->getImage(), true, [300,150]) ,  $element->title  , array('width'=>'300','height'=>'150', 'class' => 'img-responsive full_width_image')) !!}
                                <div class="shadow_background" style="position: absolute; bottom:0; ; padding: 10px;">
                                    <div><a style="color: #fff;font-size: 15px;" href="{!! route( 'post' , $element->id) !!}"  class="">{!! $element->title !!}</a></div>

                                </div>
                            </div>
                        </a>
                    </div>



                </div>



            @endforeach
        </div>
    </div>
</div>