@extends('layouts.app')
@section('content')
@section('title',  trans('admin.mail').' - '.$mail->name  )

@section('PageHeading',  trans('admin.mail').' - '.$mail->name  )

  <div class="panel panel-default">
    <div class="panel-body">
      {!! link_to_route('mail.index',  trans('admin.all').' '. trans_choice('admin.message' , 2),array(), array('class'=>'btn btn-primary ')) !!}

    </div>
  </div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"><h1>{!! $mail->name !!}</h1>
</h3>
  </div>




  <div class="panel-body">
    <div class="well">

      <table class="table table-striped table-bordered table-hover table-sm" dir="rtl">
        <thead class="thead-inverse">
            <tr>
              <th>{!! trans('admin.ID') !!}</th>
              <th>{!! trans('admin.name') !!}</th>
              <th>{!! trans('admin.email') !!}</th>
              <th>{!! trans('admin.ip') !!}</th>
              <th>{!! trans('admin.created_at') !!}</th>
              <th>{!! trans('admin.country') !!}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{!!    $mail->id !!}</td>
              <td>{!!    $mail->name !!}</td>
              <td>{!!    $mail->email !!} </td>
              <td>{!!    $mail->ip !!} </td>
              <td>{!! MyDate($mail->created_at) !!}
              <td> <img src="{!!   CP().'img/flags/'.strtolower($mail->code).'.gif' !!}" alt="" /> </td>
          </td>
          </tr>
        </tbody>
        </table>


    </div>
    <p>{!! $mail->message !!}</p>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    {!! link_to_route('mail.index',  trans('admin.all').' '. trans_choice('admin.message' , 2),array(), array('class'=>'btn btn-primary ')) !!}

  </div>
</div>

@endsection
