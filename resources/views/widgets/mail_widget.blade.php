
@if ($mails->isEmpty())

@else
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{!! trans('admin.mail') !!} </h3>
  </div>
  <div class="panel-body">




    <div class="table-responsive">

      <table class="table table-striped table-bordered table-hover table-sm" dir="rtl">
        <thead class="thead-inverse">
          <tr>
            <th>{!! trans('admin.name') !!}</th>
            <th>{!! trans('admin.read') !!}</th>
            <th>{!! trans('admin.country') !!}</th>
          </tr>
        </thead>
        <tbody>


          @foreach ($mails as $element)
            <tr>
              <td>{!!    $element->name !!}</td>
              <td>{!!    link_to_route('mail.show',  trans('admin.read').' '. trans('admin.mail'), $element->id, array('class'=>'btn btn-default btn-xs'))  !!}</td>
              <td> <img src="{!!   CP().'img/flags/'.strtolower($element->code).'.gif' !!}" alt="" /> </td>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    {!! link_to_route('mail.index',  trans('admin.read').' '. trans('admin.mail'),array(),  array('class'=>'btn btn-primary btn-xs'))  !!}

  </div>
</div>
</div>
@endif
