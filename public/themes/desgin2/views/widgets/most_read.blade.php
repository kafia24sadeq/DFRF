<div class="widget_wrapper">
    <div class="widget_header">
        <h3>{!! trans("public.most") !!}</h3>
    </div>
    @php $i = 1; @endphp

    @foreach ($most as $element)
        <div class="row seperator"  >


            <div class="relative" >
                <a href="{!! route( 'post' , $element->id) !!}" >
                    <div>
                        {!!   Html::image(PhotosDir($element->getImage(), true, [300,200]) ,  $element->title  , array(  "width"=>"100%", 'class' => 'img-responsive')) !!}
                    </div>
                </a>

                <div class="shadow_background" >
                    <h1 class="col-xs-2">{!! $i !!}</h1>

                    <h4 class="title_link col-xs-10">
                        <a  href="{!! route( 'post' , $element->id) !!}"  class="">{!! $element->title !!}</a>
                    </h4>
                </div>


            </div>

        </div>


        @php $i++; @endphp

    @endforeach

</div>
