{!!  Form::select('status',
  array(
    '0'=>  trans('admin.online')  ,
    '1'=>  trans('admin.offline') ,
    '2'=>  trans('admin.deleted') ,
    '4'=>  trans('admin.draft') ,

  ),null, ['class' => 'form-control'] ) !!}
