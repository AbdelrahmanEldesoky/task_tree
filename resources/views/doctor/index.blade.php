@extends('doctor.layouts.admin')
@section('title','Dashboard')
@push('cs')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css/plugins/charts/chart-apex.css')}}">
@endpush
@section('content')
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success GreenColor">
                                <div class="inner" style="color:white!important">
                                    <h3 id="txtAllSessionCount" class="">{{$appointment_count}}</h3>
                                    <p>Total Appointment</p>
                                </div>
                                <div class="icon">
                                    <i class="font-medium-5 fa fa-user-md"></i>
                                </div>
                                <a href="{{ route('doctors.appointment.index' )}}" onclick="LoadAllSessions()" class="small-box-footer"
                                   style="color: #fff!important;">Reload
                                    <i class="fas fa-sync-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('assets/admin/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/js/scripts/charts/chart-apex.js')}}"></script>

    <script>

var flatPicker = $('.flat-picker'),
    isRtl = $('html').attr('data-textdirection') === 'rtl',
    chartColors = {
      column: {
        series1: '#826af9',
        series2: '#d2b0ff',
        bg: '#f8d3ff'
      },
      success: {
        shade_100: '#7eefc7',
        shade_200: '#06774f'
      },
      donut: {
        series1: '#ffe700',
        series2: '#00d4bd',
        series3: '#826bf8',
        series4: '#2b9bf4',
        series5: '#FFA1A1'
      },
      area: {
        series3: '#a4f8cd',
        series2: '#60f2ca',
        series1: '#2bdac7'
      }
    }

         var areaChartEl = document.querySelector('#line-area-chart'),
    areaChartConfig = {
      chart: {
        height: 400,
        type: 'area',
        parentHeightOffset: 0,
        toolbar: {
          show: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: false,
        curve: 'straight'
      },
      legend: {
        show: true,
        position: 'top',
        horizontalAlign: 'start'
      },
      grid: {
        xaxis: {
          lines: {
            show: true
          }
        }
      },
      colors: [chartColors.area.series3, chartColors.area.series2, chartColors.area.series1],
      series: [
        {
          name: 'Complete',

        },
        {
          name: 'In progress',

        },
        {
          name: 'Canceled',

        }
      ],
      xaxis: {
        categories: [
          '1/12',
          '2/12',
          '3/12',
          '4/12',
          '5/12',
          '6/12',
          '7/12',
          '8/12',
          '9/12',
          '10/12',
          '11/12',
          '12/12',
        ]
      },
      fill: {
        opacity: 1,
        type: 'solid'
      },
      tooltip: {
        shared: false
      },
      yaxis: {
        opposite: isRtl
      }
    };
  if (typeof areaChartEl !== undefined && areaChartEl !== null) {
    var areaChart = new ApexCharts(areaChartEl, areaChartConfig);
    areaChart.render();
  }
    </script>
@endpush
