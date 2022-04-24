@extends('layouts.app')


@section('content')

@section('title',  trans('admin.show').' '.trans('admin.reports') )
@section('PageHeading',  trans('admin.show').' '.trans('admin.reports') )




<h3>{!! trans('admin.count') !!} </h3>
<canvas id="myChartMonth" width="400" height="200" dir=""rtl></canvas>

@push("scripts")

<!--Load the AJAX API-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
<script>
    var ctx = document.getElementById("myChartMonth");

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [{!! $dates !!}],
            datasets: [{
                label: '{!! trans("admin.count") !!}',
                data: [{!! $pageviews !!}],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.8)',
                ],
                ineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                borderWidth: 1,
                fill : true,
                showLines: true

            }]
        },

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
@endpush






<h3>{!! trans('admin.visitors') !!} </h3>
<canvas id="myChartMonth2" width="400" height="200" dir=""rtl></canvas>

@push("scripts")

<!--Load the AJAX API-->
<script>
    var ctx = document.getElementById("myChartMonth2");

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [{!! $dates !!}],
            datasets: [{
                label: '{!! trans("admin.visitors") !!}',
                data: [{!! $visites !!}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                ],
                ineTension: 0.1,
                backgroundColor:'rgba(255, 206, 86, 0.8)',
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                borderWidth: 1,
                fill : true,
                showLines: true

            }]
        },

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
@endpush





<h3>{!! trans('admin.most')."  ".trans('admin.words') ." ".trans('admin.search') !!} </h3>
<canvas id="myChartkeyword" width="400" height="200" dir=""rtl></canvas>

@push("scripts")

<!--Load the AJAX API-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
<script>
    var ctx = document.getElementById("myChartkeyword");

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [{!! $keyword !!}],
            datasets: [{
                label: '{!! trans("admin.count") !!}',
                data: [{!! $keywordSessions !!}],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.8)',
                ],
                ineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                borderWidth: 1,
                fill : true,
                showLines: true

            }]
        },

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
@endpush



<div class="col-lg-12">

    <div class="col-lg-6">

        <h3>{!! trans('admin.browsers') !!} </h3>
        <canvas id="myChartMonth4" width="400" height="500" dir=""rtl></canvas>
    </div>
@push("scripts")

<!--Load the AJAX API-->
    <script>
        var ctx = document.getElementById("myChartMonth4");

        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [{!! $browser !!}],
                datasets: [{
                    label: '{!! trans("admin.visitors") !!}',
                    data: [{!! $browserSessions !!}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)' ,
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)'   ],
                    ineTension: 0.1,
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    borderWidth: 1,
                    fill : true,
                    showLines: true

                }]
            },

            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
    @endpush

    <div class="col-lg-6">
        <h3>{!! trans('admin.systems') !!} </h3>
        <canvas id="myChartMonth5" width="400" height="500" dir=""rtl></canvas>
    </div>
</div>
@push("scripts")

<!--Load the AJAX API-->
<script>
    var ctx = document.getElementById("myChartMonth5");

    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [{!! $system !!}],
            datasets: [{
                label: '{!! trans("admin.visitors") !!}',
                data: [{!! $systemSessions !!}],
                backgroundColor: [
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)' ,
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)'   ],
                ineTension: 0.1,
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                borderWidth: 1,
                fill : true,
                showLines: true

            }]
        },

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
@endpush

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{!! trans('admin.most').'  '.trans('admin.posts') !!} </h3>
    </div>
    <div class="panel-body">




        <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">{!! trans("admin.today") !!}</a></li>
                <li role="presentation"><a href="#week" aria-controls="week" role="tab" data-toggle="tab">{!! trans("admin.week") !!}</a></li>
                <li role="presentation"><a href="#month" aria-controls="month" role="tab" data-toggle="tab">{!! trans("admin.month") !!}</a></li>
                <li role="presentation"><a href="#alltime" aria-controls="alltime" role="tab" data-toggle="tab">{!! trans("admin.alltime") !!}</a></li>
            </ul>


            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="today">


                    @if ($today->isEmpty())
                        <p> </p>
                    @else
                        <div id="no-more-tables" class=" nmt">
                            <table class ="table table-striped table-bordered table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>{!!  trans('admin.ID')  !!}</th>
                                    <th>{!!  trans('admin.title')  !!}</th>
                                    <th>{!!  trans('admin.section')  !!}</th>
                                    <th>{!!  trans('admin.user')  !!}</th>
                                    <th>{!!  trans('admin.created_at')  !!}</th>
                                    <th>{!! trans('admin.count') !!}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($today as $post)
                                    <tr>
                                        <td data-title="{!!  trans('admin.ID')  !!}">{!! $post->id !!}</td>
                                        <td data-title="{!!  trans('admin.title')  !!}">{!! $post->title !!}</td>
                                        <td data-title="{!!  trans('admin.category   ')  !!}">{!! $post->categories->name !!}</td>
                                        <td data-title="{!!  trans('admin.user')  !!}">{!! $post->publisher->name !!}</td>

                                        <td data-title="{!!  trans('admin.created_at')  !!}">{!! Mydate($post->created_at) !!}</td>
                                        <td data-title="{!! trans('admin.count') !!}">{!! $post->count !!}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>



                <div role="tabpanel" class="tab-pane" id="week">
                    @if ($week->isEmpty())
                        <p> </p>
                    @else
                        <div id="no-more-tables" class=" nmt">
                            <table class ="table table-striped table-bordered table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>{!!  trans('admin.ID')  !!}</th>
                                    <th>{!!  trans('admin.title')  !!}</th>
                                    <th>{!!  trans('admin.section')  !!}</th>
                                    <th>{!!  trans('admin.user')  !!}</th>
                                    <th>{!!  trans('admin.created_at')  !!}</th>
                                    <th>{!! trans('admin.count') !!}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($week as $post)
                                    <tr>
                                        <td data-title="{!!  trans('admin.ID')  !!}">{!! $post->id !!}</td>
                                        <td data-title="{!!  trans('admin.title')  !!}">{!! $post->title !!}</td>
                                        <td data-title="{!!  trans('admin.category   ')  !!}">{!! $post->categories->name !!}</td>
                                        <td data-title="{!!  trans('admin.user')  !!}">{!! $post->publisher->name !!}</td>

                                        <td data-title="{!!  trans('admin.created_at')  !!}">{!! Mydate($post->created_at) !!}</td>
                                        <td data-title="{!! trans('admin.count') !!}">{!! $post->count !!}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
                <div role="tabpanel" class="tab-pane" id="month">
                    @if ($month->isEmpty())
                        <p> </p>
                    @else
                        <div id="no-more-tables" class=" nmt">
                            <table class ="table table-striped table-bordered table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>{!!  trans('admin.ID')  !!}</th>
                                    <th>{!!  trans('admin.title')  !!}</th>
                                    <th>{!!  trans('admin.section')  !!}</th>
                                    <th>{!!  trans('admin.user')  !!}</th>
                                    <th>{!!  trans('admin.created_at')  !!}</th>
                                    <th>{!! trans('admin.count') !!}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($month as $post)
                                    <tr>
                                        <td data-title="{!!  trans('admin.ID')  !!}">{!! $post->id !!}</td>
                                        <td data-title="{!!  trans('admin.title')  !!}">{!! $post->title !!}</td>
                                        <td data-title="{!!  trans('admin.category   ')  !!}">{!! $post->categories->name !!}</td>
                                        <td data-title="{!!  trans('admin.user')  !!}">{!! $post->publisher->name !!}</td>

                                        <td data-title="{!!  trans('admin.created_at')  !!}">{!! Mydate($post->created_at) !!}</td>
                                        <td data-title="{!! trans('admin.count') !!}">{!! $post->count !!}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
                <div role="tabpanel" class="tab-pane" id="alltime">
                    @if ($alltime->isEmpty())
                        <p> </p>
                    @else
                        <div id="no-more-tables" class=" nmt">
                            <table class ="table table-striped table-bordered table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>{!!  trans('admin.ID')  !!}</th>
                                    <th>{!!  trans('admin.title')  !!}</th>
                                    <th>{!!  trans('admin.section')  !!}</th>
                                    <th>{!!  trans('admin.user')  !!}</th>
                                    <th>{!!  trans('admin.created_at')  !!}</th>
                                    <th>{!! trans('admin.count') !!}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($alltime as $post)
                                    <tr>
                                        <td data-title="{!!  trans('admin.ID')  !!}">{!! $post->id !!}</td>
                                        <td data-title="{!!  trans('admin.title')  !!}">{!! $post->title !!}</td>
                                        <td data-title="{!!  trans('admin.category   ')  !!}">{!! $post->categories->name !!}</td>
                                        <td data-title="{!!  trans('admin.user')  !!}">{!! $post->publisher->name !!}</td>

                                        <td data-title="{!!  trans('admin.created_at')  !!}">{!! Mydate($post->created_at) !!}</td>
                                        <td data-title="{!! trans('admin.count') !!}">{!! $post->count !!}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>



            </div>
        </div>
    </div>
</div>


@push("sidebar")

<div>
    @widget('StatisticsWidget')
</div>

@endpush


@endsection
