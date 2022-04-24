<div class="widget_wrapper">
    <div class="widget_header">
        <h3><a href="{!! route("cat" , $articles[0]->categories->id) !!}">{!! $articles[0]->categories->name !!}</a></h3>
    </div>
    <div class="container-fluid">
        @foreach($articles as $element)
            <div class="row seperator" >

                <div class="col-xs-4">

                    <a  href="{!! route( 'post' , $element->id) !!}">
                        {!!   Html::image(PhotosDir($element->getImage(), true, [100,100]) ,  $element->writers->name  , array('width'=>'100','height'=>'100', 'class' => 'img-responsive full_width_image')) !!}
                    </a>
                </div>


                <div class="col-xs-8">
                        <h5 class="introductory"><a href="{!! route("writer", $element->writers->id) !!}">{!! $element->writers->name !!}</a></h5>
                    <h3 class="title_link"><a title="" href="{!! route( 'post' , $element->id) !!}">{!! $element->title !!}</a></h3>

                </div>

            </div>
        @endforeach
    </div>

</div>
<div class="ads_widgets">
    {!! $after_artcles_list !!}
</div>