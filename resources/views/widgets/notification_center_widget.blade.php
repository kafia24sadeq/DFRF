<div style="        padding: 10px;">
    <h1 style="margin-bottom: 30px;">    <i style="font-size: 30px" class="fa fa-bell-o" aria-hidden="true"></i>     {!! trans("admin.notification") !!}</h1>


    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">    <i class="fa fa-times" aria-hidden="true"></i></a>





    @foreach($logs as $log)
        <div>{!! $log->publisher->name !!} <span style="text-align: left; color: #999; font-size: 12px;"><i class="fa fa-clock-o" aria-hidden="true"></i>
                {!! Mydate($log->created_at) !!}</span></div>

        <div>{!! trans('admin'.str_replace('-','.',strstr($log->action, '-'))).' '.trans('admin.'.strstr($log->action, '-', true)) !!}</div>
        <div>{!! $log->desc !!}</div>
        <hr>
    @endforeach




    {!! link_to_route('userlogs.index',  trans('admin.userlogs'), "", array('class'=>'btn btn-default btn-xs'))  !!}

</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js" ></script>
<script src="/js/bootstrap-notify-master/bootstrap-notify.min.js" ></script>


<script>
    function ajaxCallback() {

        //your code here
        $.notify({
            // options
            title: '{!! trans('admin.error') !!}',

            message: "<p>{!! $userValue1 !!}</p>",
            placement: {
                from: "top",
                align: "left"
            },
        },{
            // settings
            type: 'danger',
            showProgressbar: true,
        });
        };


</script>
