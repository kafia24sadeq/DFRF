








<!-- name -->
<div class ="form-group">
  <fieldset class="form-group" id="name_fieldset">
    {!!  Form::label('name', trans('admin.name'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('name' ,old('name'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>


<!-- description -->
{{--<div class ="form-group">--}}
  {{--<fieldset class="form-group" id="description_fieldset">--}}
    {{--{!!  Form::label('description', trans('admin.description'), array('class' => '')) !!}--}}
    {{--<div class ="">--}}
      {{--{!!  Form::text('description' ,old('description'), array('class'=>'form-control') ) !!}--}}
    {{--</div>--}}
  {{--</fieldset>--}}
{{--</div>--}}

<!-- keyword -->
{{--<div class ="form-group">--}}
  {{--<fieldset class="form-group" id="keyword_fieldset">--}}
    {{--{!!  Form::label('keyword', trans('admin.keyword'), array('class' => '')) !!}--}}
    {{--<div class ="">--}}
      {{--{!!  Form::text('keyword' ,old('keyword'), array('class'=>'form-control') ) !!}--}}
    {{--</div>--}}
  {{--</fieldset>--}}
{{--</div>--}}



<div class ="form-group">
  <fieldset class="form-group">
    {!!  Form::label('menushow', trans('admin.menushow'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::select('menushow',
        array(
          '0'=> trans('admin.no'),
          '1'=> trans('admin.yes'),

        ), old("menushow"), array('class'=>'form-control') ) !!}
      </div>
    </fieldset>
  </div>


  <div class ="form-group">
    <fieldset class="form-group">
      {!!  Form::label('homeshow', trans('admin.homeshow'), array('class' => '')) !!}
      <div class ="">
        {!!  Form::select('homeshow',
          array(
            '0'=> trans('admin.no'),
            '1'=> trans('admin.yes'),

            ) , old("homeshow"), array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>

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



        @push('scripts')
          @include('admin.jquery.ajax')
        @endpush
