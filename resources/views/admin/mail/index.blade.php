@extends('layouts.app')
@section('content')
@section('title',  trans('admin.mail') )

@section('PageHeading',  trans('admin.mail') )

  <div class="">

    {!! $mails->links('vendor.pagination.bootstrap-4') !!}
  </div>


  <table class="table table-striped table-bordered table-hover table-sm" dir="rtl">
    <thead class="thead-inverse">
        <tr>
          <th>{!! trans('admin.ID') !!}</th>
          <th>{!! trans('admin.name') !!}</th>
          <th>{!! trans('admin.email') !!}</th>
          <th>{!! trans('admin.read') !!}</th>
          <th>{!! trans('admin.ip') !!}</th>
          <th>{!! trans('admin.country') !!}</th>
          <th>{!! trans('admin.date') !!}</th>
        </tr>
      </thead>
      <tbody>


  @foreach ($mails as $element)
      @if ($element->status == 1)

          <tr style="background: #a6a6a6;">
              @else
          <tr style="background: white;">
          @endif
    <td>{!!    $element->id !!}</td>
    <td>{!!    $element->name !!}</td>
    <td>{!!    $element->email !!} </td>
    <td>{!!    link_to_route('mail.show',  trans('admin.read').' '. trans('admin.mail'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}</td>
    <td>{!!    BlockedOrNot($element->status) !!}</td>
    <td> <img src="{!!   CP().'img/flags/'.strtolower($element->code).'.gif' !!}" alt="" /> </td>
              <td>{!!    $element->created_at !!} </td>

</tr>
  @endforeach
</tbody>
</table>

<div class="">

  {!! $mails->links('vendor.pagination.bootstrap-4') !!}
</div>

@endsection
