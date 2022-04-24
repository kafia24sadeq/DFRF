@if (! ends_with(Route::currentRouteName() , 'password.edit')  )
    <!-- name -->
    <div class ="form-group">
        <fieldset class="form-group" id="name_fieldset">
            {!!  Form::label('name', trans('admin.name'), array('class' => '')) !!}
            <div class ="">
                {!!  Form::text('name' ,old('name'), array('class'=>'form-control') ) !!}
            </div>
        </fieldset>
    </div>


    <!-- email -->
    <div class ="form-group">
        <fieldset class="form-group" id="email_fieldset">
            {!!  Form::label('email', trans('admin.email'), array('class' => '')) !!}
            <div class ="">
                {!!  Form::text('email' ,old('email'), array('class'=>'form-control') ) !!}
            </div>
        </fieldset>
    </div>


    <!-- roles list -->
    <div class ="form-group">
        <fieldset class="form-group" id="role_fieldset">
            {!!  Form::label('role', trans('admin.role'), array('class' => '')) !!}
            <div>
                {!!  Form::select('role',  $roles  ,$selectedRoles, ['class' => 'form-control']) !!}
            </div>
        </fieldset>
    </div>
@endif

@if ( ends_with(Route::currentRouteName() , 'password.edit') || ends_with(Route::currentRouteName() , 'users.create') )
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

@endif

@include('admin.includes.buttons')


{!! Form::close() !!}



@push('scripts')
@include('admin.jquery.ajax')
@endpush
