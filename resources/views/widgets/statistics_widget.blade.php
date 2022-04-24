<h3>{!! trans("admin.stats")." ".trans("admin.today") !!}</h3>

<div style="color: #fff;margin-bottom: 30px;">
    <div class="col-lg-6" style="background: #FF829D">
        <h3><i class="fa fa-users fa-3" aria-hidden="true"></i> {!! trans("admin.visitors") !!}</h3>
        <h1 style="font-size: 50px">  {!! $visitorsAndPageViews[1]['visitors'] !!}</h1>
        <div>{!! trans("admin.yesterday")." ".$visitorsAndPageViews[0]['visitors'] !!} </div>

    </div>


    <div class="col-lg-6" style="background: #5EB5EF">
        <h3><i class="fa fa-clone fa-3" aria-hidden="true"></i>{!! trans("admin.count") !!}</h3>
        <h1 style="font-size: 50px">  {!! $visitorsAndPageViews[1]['pageViews'] !!}</h1>

        <div>{!! trans("admin.yesterday")." ".$visitorsAndPageViews[0]['pageViews'] !!} </div>


    </div>
</div>



<div style="color: #fff;margin-bottom: 30px;">
    <div class="col-lg-6" style="background: #6FCDCD">
        <h3><i class="fa fa-newspaper-o fa-3" aria-hidden="true"></i> {!! trans("admin.number")." ".trans("admin.posts") !!}</h3>
        <h1 style="font-size: 50px">  {!! $newsNumber !!}</h1>
        <div>{!! trans("admin.yesterday")." ".$newsNumberYes !!} </div>

    </div>


    <div class="col-lg-6" style="background: #FFB266">
        <h3><i class="fa fa-pencil-square-o  fa-3" aria-hidden="true"></i> {!! trans("admin.number")." ".trans("admin.articles") !!}</h3>
        <h1 style="font-size: 50px">{!! $articlesNumber !!}</h1>
        <div>{!! trans("admin.yesterday")." ".$articlesNumberYes !!} </div>


    </div>
</div>


<h3>{!! trans('admin.categories') !!} </h3>
<canvas id="myChart" width="400" height="400" dir=""rtl></canvas>

@push("scripts")

<!--Load the AJAX API-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [{!! $names !!}],
            datasets: [{
                label: '{!! trans("admin.posts") !!}',
                data: [{!! $counts !!}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)'
                ],

                borderWidth: 1
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



<h3>{!! trans('admin.users') !!} </h3>
<canvas id="myChart2" width="400" height="400" dir=""rtl></canvas>

@push("scripts")

<script>
    var ctx = document.getElementById("myChart2");
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [{!! $user !!}],
            datasets: [{
                label: '{!! trans("admin.count") !!}',
                data: [{!! $counts_user !!}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)'
                ],

                borderWidth: 1
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











<h3>{!! trans('admin.countries') !!} </h3>
<div id="regions_div" class="chart" ></div>
<table class ="table table-striped table-bordered table-hover table-sm">
    <thead>
    <tr>
        <th>{!!  trans('admin.name')  !!}</th>
        <th>{!!  trans('admin.count')  !!}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($analyticsData2 as $value)

        <tr>
            <td>{!! $value['country'] !!}</td>
            <td>{!! $value['pageviews'] !!}</td>


        </tr>
    @endforeach
    </tbody>
</table>

@push("scripts")


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('upcoming', {'packages':['geochart']});
    google.charts.setOnLoadCallback(drawRegionsMap);

    function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
            ['Country', 'Popularity'],
            {!! $country !!}

        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
    }
</script>
</head>


<style>
    .chart {
        width: 100%;
        min-height: 200px;
    }
</style>




@endpush


<h3>{!! trans('admin.most')." ".trans('admin.sources') !!} </h3>

<table class ="table table-striped table-bordered table-hover table-sm">
    <thead>
    <tr>
        <th>{!!  trans('admin.name')  !!}</th>
        <th>{!!  trans('admin.count')  !!}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($Referrers as $value)
        <tr>
            <td>{!! $value['url'] !!}</td>
            <td>{!! $value['pageViews'] !!}</td>


        </tr>
    @endforeach
    </tbody>
</table>