@extends('layouts.cms')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title"> Reports </h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Reports</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Index</a>
            </li>
        </ul>
    </div>
    <div class="row">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="xd-flex Xalign-items-center">

                        <!-- <h4 class="card-title">List of Users</h4> -->
                    </div>
                </div>
                <div class="card-body">
                    <h2>Posts Report</h2>
                    <div class="form-group">
                        <label for="year">Select Year:</label>
                        <select class="form-control" id="year" name="year">
                            @foreach($years as $year)
                            <option value="{{ $year }}" {{ $selectedYear == $year ? 'selected' : '' }}>{{ $year }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <a href="{{ route('reports.download.csv') }}" class="btn btn-primary">Download CSV</a>

                    </div>

                    <canvas id="myChart" height="100"></canvas>


                </div>
                <!-- .card-body -->
            </div>
        </div>
    </div>
</div>
<!-- .page-inner -->

@endsection


@push('scripts')


<script>
    const selectedYear = $('#year').val();
    $(document).ready(function() {
        $('#year').change(function() {
            var year = $(this).val();
            window.location.href = '{{ route("reports.index") }}?year=' + year;
        });


    });

    var data = {!! json_encode($chartData) !!};

    var labels = [];
    var values = [];
    for (var key in data) {
        labels.push(key);
        values.push(data[key]);
    }

    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Post Count',
                data: values,
                borderColor: "#1d7af3",
                pointBorderColor: "#FFF",
                pointBackgroundColor: "#1d7af3",
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                backgroundColor: 'transparent',
                fill: true,
                borderWidth: 2,
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Post Count by Month for Year ' + selectedYear
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

@endpush