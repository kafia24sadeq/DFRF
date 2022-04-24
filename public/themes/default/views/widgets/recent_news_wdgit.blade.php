<div class="widget_wrapper">
    <div class="widget_header">
        <h3>{!! trans('public.latest')   !!}</h3>
    </div>
    @foreach ($posts as $element)
        <div>
            <h3 class="title_link" style="padding-right: 10px; padding-left: 10px; border-right: 3px solid #ccc"><a href="{!! route( 'post' , $element->id) !!}">{!! $element->title !!}</a></h3>
        </div>
    @endforeach
</div>
