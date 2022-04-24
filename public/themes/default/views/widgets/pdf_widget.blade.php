<div class="widget_wrapper">
    <div class="widget_header">
        <h3>{!! trans("public.newspaper")." | ". $pdf->content !!}</h3>
    </div>
    <a href="{!! $pdf->link !!}" target="_blank">{{ Html::image(PhotosDir($pdf->name, true, [300,400]) ,  $pdf->name  , array('width'=>'300','height'=>'400', 'class' => '')) }}
    </a>

    <div>
       <h3><a href="{!! route("pdf") !!}" target="_blank">{!! trans("public.old") !!}</a></h3>
    </div>
</div>