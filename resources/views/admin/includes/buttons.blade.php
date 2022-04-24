{{ Form::hidden('action',  '' , array('id'=>'action') ) }}


<div class="" style="margin-bottom:40px;">
  {!!  Form::button(trans('admin.save') , array('class'=>'btn btn-primary','id'=>'save')) !!}

  {{--@if ( starts_with(Route::currentRouteName(), 'admin.posts') )--}}
    {{--{!!  Form::button(trans('admin.draft') , array('class'=>'btn btn-primary', 'id'=>'draft')) !!}--}}
  {{--@endif--}}

  @if ( ends_with(Route::currentRouteName(), 'edit') )
      
    {!!  Form::button(trans('admin.delete') , array('class'=>'btn btn-danger pull-left', 'id'=>'delete')) !!}
  @endif
</div>
