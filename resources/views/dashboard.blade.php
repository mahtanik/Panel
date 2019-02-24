<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="/HUB/public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/HUB/public/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/HUB/public/css/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/HUB/public/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="/HUB/public/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/HUB/public/css/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/HUB/public/css/custom.min.css" rel="stylesheet">
        <style>
            .isDisabled {
                color: currentColor;
                cursor: not-allowed;
                opacity: 0.5;
                text-decoration: none;
                pointer-events: none;
            }
        </style>
        <!-- jQuery -->
        <script src="/HUB/public/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="/HUB/public/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="/HUB/public/js/fastclick.js"></script>
        <!-- NProgress -->
        <script src="/HUB/public/js/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="/HUB/public/js/dist/Chart.min.js"></script>
        <!-- jQuery Sparklines -->
        <script src=/HUB/public/js/jquery.sparkline.min.js"></script>
        <!-- morris.js -->
        <script src="/HUB/public/js/raphael.min.js"></script>
        <script src="/HUB/public/js/morris.min.js"></script>
        <!-- gauge.js -->
        <script src="/HUB/public/js/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="/HUB/public/js/bootstrap-progressbar.min.js"></script>
        <!-- Skycons -->
        <script src="/HUB/public/js/skycons.js"></script>
        <!-- Flot -->
        <script src="/HUB/public/js/jquery.flot.js"></script>
        <script src="/HUB/public/js/jquery.flot.pie.js"></script>
        <script src="/HUB/public/js/jquery.flot.time.js"></script>
        <script src="/HUB/public/js/jquery.flot.stack.js"></script>
        <script src="/HUB/public/js/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="/HUB/public/js/jquery.flot.orderBars.js"></script>
        <script src="/HUB/public/js/jquery.flot.spline.min.js"></script>
        <script src="/HUB/public/js/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="/HUB/public/js/date.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="/HUB/public/js/moment.min.js"></script>
        <script src="/HUB/public/js/daterangepicker.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="/HUB/public/js/echarts.min.js"></script>
        <script src="/HUB/public/js/world.js"></script>
        <script src="/HUB/public/js/Chart.js"></script>
    </head>
    <body class="nav-md" lang="fa">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3  left_col hidden-print">
                <div class="left_col scroll-view">
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <!--<img src="public/images/logo-basic-horizontal.png" style="margin-left: 10px;">-->
                    <br/>
                    <br/>
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="/HUB/public/images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span style="font-style: italic">خوش آمدید</span>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br/>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu" style="padding-right: 0px;" >
                                <li>
                                    <a href="dashboard" style="font-style: italic"><i class="fa fa-home"></i> داشبورد</a>
                                </li>
                                <li>
                                    <a style="font-style: italic"><i class="fa fa-bar-chart-o"></i>    نمودار <span class="fa fa-chevron-down"></span></a>
                                    <ul dir="rtl" class="nav child_menu">
                                        <li><a href="servicesDiagrams"> سرویس ها </a></li>
                                        <li><a class="isDisabled" href="campaignesDiagrams">کمپین ها</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a style="font-style: italic"><i class="fa fa-table"></i>جدول ها  <span class="fa fa-chevron-down"></span></a>
                                    <ul dir="rtl" class="nav child_menu">
                                        <li><a href="servicesSummary">گزارش مجتمع</a></li>
                                        <li><a href="services">گزارش عملکرد سرویس ها</a></li>
                                        <li><a href="usersPage">گزارش عملکرد کاربران</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="isDisabled" href="campaignes" style="font-style: italic"; ><i class="fa fa-tags"></i>کمپین ها  </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav hidden-print">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="/HUB/public/images/img.jpg" alt="">John Doe
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="login"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">

                <div class="row tile_count" style="text-align: center">
                    <div data-brackets-id="2080" class="row x_title">
                        <div data-brackets-id="2081" class="col-md-6">
                            <h3 data-brackets-id="2082"> <small data-brackets-id="2083"></small></h3>
                        </div>
                        <div data-brackets-id="2084" class="col-md-6"></div>
                    </div>
                    <div data-brackets-id="2100" class="clearfix"></div>
                    <div class="x_panel">
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> تعداد کل کربران</span>
                            <div class="count green" lang="fa">{{$total}}</div>
                            {{--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> ٪۴   </i>   از هقته گذشته</span>--}}
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-clock-o"></i> تعداد کل شارژها</span>
                            <div class="count green">{{$totalcharge}}</div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> تعداد کاربران جدید</span>
                            <div class="count green">{{$subs}}</div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="width: 30%">
                            <span class="count_top" ><i class="fa fa-user"></i> تعداد کاربرانی که انصراف داده اند</span>
                            <div class="count">{{$unsubs}}</div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> تعداد شارژ خودکار</span>
                            <div class="count green" lang="fa"> {{ $autocharges }} </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <br/>
                            <br/>
                            <br/>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2 style="font-style: italic; float: right">نموار میله ای  <small style="font-style: italic"> میزان شارژ و کاربران جدید </small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <canvas id="mybar"></canvas>
                                </div>
                            </div>
                        </div>
                        <span id="topfour">
                            <?php
                                $tops = $topfour;
                                $tops_json =  json_encode($tops);

                                $all_users = $total_users;
                                $all_users_json =  json_encode($total_users);

                                $all_charges = $total_charges;
                                $all_charges_json =  json_encode($total_charges);

                                ?>
                        </span>

                        <div class="col-md-6 col-sm-6 col-xs-2">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2 style="font-style: italic; float: right">نمودار دایره ای <small style="font-style: italic">سهم درآمد هر سرویس در حال حاضر</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div id="echart_donut" class="graphCanvas" style="height:350px;" ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    <script>

        var topfour = JSON.parse('<?= $tops_json; ?>');

        var totalcharges = Object.values(JSON.parse('<?= $all_charges_json; ?>'));

        var totalusers = Object.values(JSON.parse('<?= $all_users_json; ?>'));

        console.log(topfour);
        console.log(totalcharges);
        console.log(totalusers);

        if ($('#echart_donut').length ){

            var theme = {
                color: [
                    '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
                    '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
                ]};

            var echartPie = echarts.init(document.getElementById('echart_donut'), theme);

            echartPie.setOption({

                legend: {
                    	  x: 'center',
                    	  y: 'bottom',
                    	  data: topfour
                    	}
                ,
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                calculable: true,
                series: [{
                    name: 'فعالسازی ها و شارژها',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%', '48%'],
                    data: topfour
                }]
            });
        }


        if ($('#mybar').length ){

            var ctx = document.getElementById("mybar");
            var mybar = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["فروردین", "اردیبهشت", "خرداد","تیر", "مرداد", "شهریور" ,"مهر", "آبان", "آذر", "دی" , "بهمن" , "اسفند"],
                    datasets: [{
                        label: 'شارژ',
                        backgroundColor: "#26B99A",
                        data: totalcharges
                    }, {
                        label: ' کاربران',
                        backgroundColor: "#03586A",
                        data: totalusers
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }
    </script>

    <!-- Custom Theme Scripts -->
    <script src="/HUB/public/js/custom.js"></script>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>--}}
    </body>
</html>
