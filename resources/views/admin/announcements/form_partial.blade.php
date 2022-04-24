{{--@if(isset($model))--}}
  {{--{!! Form::model($model, array('route' => array('announcements.update', $model->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}--}}

{{--@else--}}
  {{--{!! Form::open(array('url' => '/admin/announcements/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}--}}

{{--@endif--}}

@yield('image_insert')

<!-- hidden image field -->

{{ Form::hidden('image_name', old('image_name')  , array('id'=>'image') ) }}



<div class="">
  <!-- title -->
  <div class ="form-group">
    <fieldset class="form-group" id="title_fieldset">
      {!!  Form::label('title', trans('admin.title'), array('class' => '')) !!}
      <div class ="">
        {!!  Form::text('title' ,old('title'), array('class'=>'form-control') ) !!}
      </div>
    </fieldset>
  </div>

    {{--<div class ="form-group">--}}
        {{--<fieldset class="form-group" id="importance_fieldset">--}}
            {{--{!!  Form::label('type', trans('admin.type'), array('class' => '')) !!}--}}
            {{--<div>--}}
                {{--{!!  Form::select('type',--}}
                  {{--array(--}}
                    {{--'1'=> trans("admin.jobs"),--}}
                    {{--'2'=> trans("admin.tenders"),--}}
                  {{--),null, ['class' => 'form-control'] ) !!}--}}
            {{--</div>--}}
        {{--</fieldset>--}}
    {{--</div>--}}


    <!-- link -->
  <div class ="form-group">
    <fieldset class="form-group" id="link_fieldset">
      {!!  Form::label('link', trans('admin.desc'), array('class' => '')) !!}
      <div class ="">
        {!!  Form::textarea('link' ,old('link'), array('class'=>'form-control') ) !!}
      </div>
    </fieldset>
  </div>


  <div class ="form-group">
    <fieldset class="form-group" id="importance_fieldset">
      {!!  Form::label('period', trans('admin.period'), array('class' => '')) !!}
      <div>
        {!!  Form::select('period',
        /* period calculated in Hours per a day */
          array(
            '24'=>"يوم",
            '48'=>"يومين",
            '72'=>"ثلاثة أيام",
            '120'=>"خمسة أيام",
            '168'=>"أسبوع",
            '336'=>"أسبوعين",
            '504'=>"ثلاثة أسابيع",
            '720'=>"شهر",
          ),null, ['class' => 'form-control'] ) !!}
      </div>
    </fieldset>
  </div>



  <!-- status -->
  <div class ="form-group">
    <fieldset class="form-group">
      {!!  Form::label('status', trans('admin.status'), array('class' => '')) !!}
      <div>
        @include('admin.includes.status')

      </div>
    </fieldset>
  </div>


  @include('admin.includes.buttons')

  {!! Form::close() !!}

  @include('admin.includes.uploadimagemodal')


  @push('scripts')
  @include('admin.jquery.ajax')
  @endpush
</div>