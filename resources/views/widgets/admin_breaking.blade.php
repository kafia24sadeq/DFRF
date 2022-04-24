
<div class="panel panel-default">
    <div class="panel-body">
        <button class="btn btn-info" data-toggle="collapse" style="margin: 20px 0" data-target="#breaking">{!! trans("admin.breaking") !!}</button>
        <div id="breaking" class="collapse">
            <div style="background: #efefef; padding: 15px;margin-bottom: 20px;">

                @include('admin.ads.form_partial')
                {!! link_to_route('ads.create',  trans('admin.add').' '. trans('admin.breaking'),array(), array('class'=>'btn btn-default  ')) !!}
                {!! link_to_route('ads.index',  trans('admin.all').' '. trans('admin.ads'),array(), array('class'=>'btn btn-default  ')) !!}
            </div>
        </div>
    </div>