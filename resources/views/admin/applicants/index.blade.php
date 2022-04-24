@extends('layouts.app')

@section('content')

@section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.applicants') )
@section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.applicants') )

<table class ="table table-striped table-bordered table-hover table-sm">
    <thead>
    <tr>
        <th>{!!  trans('admin.ID')  !!}</th>
        <th>{!!  trans('admin.name')  !!}</th>
        <th>{!!  trans('admin.email')  !!}</th>
        <th>{!!  trans('admin.source')  !!}</th>
        <th>{!!  trans('public.govern')  !!}</th>
        <th>{!! trans('admin.whatsapp') !!}</th>
        <th>{!! trans('admin.type') !!}</th>
        <th>{!!  trans('admin.date_of_applicant')  !!}</th>
        <th>{!!  trans('admin.show')  !!}</th>
        <th>{!!  trans('admin.delete')  !!}</th>
{{--        <td><a class="btn btn-info" href="{{ route('applicants.export') }}">{{ trans('admin.exportToExcel') }}</a></td>--}}
    </tr>
    </thead>
    <tbody>


    @foreach($applicants as $element)
        <tr>
            <td>{!! $element->id !!}</td>
            <td>{!! $element->name !!}</td>
            <td>{!! $element->email !!}</td>
            <td>{!! $element->source !!}</td>
            <td>{!! $element->governorate !!}</td>

            <td>{!! $element->whatsapp !!}</td>
            <td>{!! $element->type !!}</td>
            <td>{!! Mydate($element->created_at) !!}</td>
            <td><a class="btn btn-info" href="/admin/applicants/{{ $element->id }}">عرض</a></td>
            <td>
                {{ Form::open(array('url' => '/admin/applicants/' . $element->id, 'class' => '')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
