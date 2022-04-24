<!-- password -->
<div class ="form-group">
    <fieldset class="form-group" id="password_fieldset">
        {!!  Form::label('password', trans('admin.password'), array('class' => '')) !!}
        <div class ="">
            <input type="password" class="form-control" value="" name="password" id="password" autocomplete='off'>
        </div>
    </fieldset>
</div>


<!-- password_confirmation -->
<div class ="form-group">
    <fieldset class="form-group" id="password_confirmation_fieldset">
        {!!  Form::label('password_confirmation', trans('admin.password_confirmation'), array('class' => '')) !!}
        <div class ="">
            <input type="password" class="form-control" value="{!! old("password") !!}" name="password_confirmation" id="password_confirmation" >

        </div>
    </fieldset>
</div>


@include('admin.includes.buttons')


{!! Form::close() !!}



@push('scripts')
@include('admin.jquery.ajax')
@endpush
