@extends('layouts.app')

@section('content')
    <style>
        @media (min-width: 799px) {
            .col-sm-12.col-md-12.col-lg-8.well{
                margin-right: 14% !important;
                margin-top: 7% !important;
            }
        }
    </style>
            <div class="panel panel-default login">
                <div class="panel-heading">{!! trans('admin.login') !!}</div>
                <div class="panel-body">
                  {!! Form::open(array('url' => array('login') , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{!! trans('admin.email') !!}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{!! trans('admin.password') !!}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" style="margin-right: -17px;"> {!! trans('admin.rememberme') !!}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> {!! trans('admin.login') !!}
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">{!! trans('admin.forgetpassword') !!}?</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
@endsection
