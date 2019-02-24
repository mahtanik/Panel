<!DOCTYPE html>

    <html data-brackets-id="1970" lang="fa" dir="rtl">
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="/HUB/public/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="/HUB/public/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="/HUB/public/css/nprogress.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
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
        <script src="/HUB/public/js/Chart.min.js"></script>
        <!-- jQuery Sparklines -->
        <script src="/HUB/public/js/jquery.sparkline.min.js"></script>
        <!-- morris.js -->
        <script src="/HUB/public/js/raphael.min.js"></script>
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
        <!--<script src="build/js/custom.min.js"></script>-->
        <script src="/HUB/public/js/echarts.min.js"></script>
        <script src="/HUB/public/js/world.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="/HUB/public/js/morris.min.js"></script>

    </head>
    <body data-brackets-id="1982" class="nav-sm" style="padding-right: 0px;">
    <div data-brackets-id="1983" class="container body">
        <div data-brackets-id="1984" class="main_container">
            <div data-brackets-id="1985" class="col-md-3  left_col">
                <div data-brackets-id="1986" class="left_col scroll-view">
                    <div data-brackets-id="1987" class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <br data-brackets-id="1988">
                    <br data-brackets-id="1989">
                    <div data-brackets-id="1990" class="profile clearfix">
                        <div data-brackets-id="1991" class="profile_pic">
                            <img data-brackets-id="1992" src="/HUB/public/images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div data-brackets-id="1993" class="profile_info">
                            <span data-brackets-id="1994" style="font-style: italic">  خوش آمدید ،</span>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br data-brackets-id="1996">
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
                    <div data-brackets-id="2009" class="sidebar-footer hidden-small">
                        <a data-brackets-id="2010" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                            <span data-brackets-id="2011" class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-brackets-id="2012" data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
                            <span data-brackets-id="2013" class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-brackets-id="2014" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                            <span data-brackets-id="2015" class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-brackets-id="2016" data-toggle="tooltip" data-placement="top" title="" href="http://127.0.0.1:57677/login.html" data-original-title="Logout">
                            <span data-brackets-id="2017" class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div data-brackets-id="2018" class="top_nav">
                <div data-brackets-id="2019" class="nav_menu">
                    <nav data-brackets-id="2020">
                        <div data-brackets-id="2021" class="nav toggle">
                            <a data-brackets-id="2022" id="menu_toggle"><i data-brackets-id="2023" class="fa fa-bars"></i></a>
                        </div>
                        <ul data-brackets-id="2024" class="nav navbar-nav navbar-right">
                            <li data-brackets-id="2025" class="">
                                <a data-brackets-id="2026" href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img data-brackets-id="2027" src="/HUB/public/images/img.jpg" alt="">John Doe
                                    <span data-brackets-id="2028" class=" fa fa-angle-down"></span>
                                </a>
                                <ul data-brackets-id="2029" class="dropdown-menu dropdown-usermenu pull-right">
                                    <li data-brackets-id="2033"><a data-brackets-id="2034" href="login"><i data-brackets-id="2035" class="fa fa-sign-out pull-right"></i> خروج</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div data-brackets-id="2078" class="right_col" role="main" style="min-height: 593.998px;">
                <div data-brackets-id="2079" class="row">
                    <div data-brackets-id="2080" class="row x_title">
                        <div data-brackets-id="2081" class="col-md-6">
                            <!--                            <h3 data-brackets-id="2082">Network Activities <small data-brackets-id="2083">Graph title sub-title</small></h3>-->
                        </div>
                        <div data-brackets-id="2084" class="col-md-6"></div>
                    </div>


                    <div data-brackets-id="2085">
                        <div data-brackets-id="2086" class="x_panel">
                            <div data-brackets-id="2087" class="x_title">
                                <div data-brackets-id="2088" class="col-md-6" style="float: right">
                                    <div data-brackets-id="2089" id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i data-brackets-id="2090" class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span data-brackets-id="2091"></span> <b data-brackets-id="2092" class="caret"></b>
                                    </div>
                                    <br>
                                    <br>
                                    <form>انتخاب کنید :
                                        <select id="selectService">
                                            @foreach( $services as $service)
                                                <option> {{ $service->service_name }} </option>
                                            @endforeach
                                        </select>
                                    </form>
                                    <br>
                                    <h2 dir='rtl' data-brackets-id="2098" style="font-style: italic; float: right">  تغییرات اخیر و نمودار میله ای در سرویس
                                        <b id="selected"></b>
                                        <small data-brackets-id="2099" style="font-style: italic"> شارژ ها و کاربران جدید برحسب زمان میزان  </small></h2>
                                </div>
                                <div data-brackets-id="2100" class="clearfix"></div>
                            </div>
                            <div data-brackets-id="2101" class="row tile_count" style="text-align: center">
                                <div data-brackets-id="2102" class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                    <span data-brackets-id="2103" class="count_top"><i data-brackets-id="2104" class="fa fa-user"></i> تعداد کل کربران</span>
                                    <div id="total" class="count">0
                                    </div>
                                </div>
                                <div data-brackets-id="2109" class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                    <span data-brackets-id="2110" class="count_top"><i data-brackets-id="2111" class="fa fa-clock-o"></i> تعداد کل شارژها</span>
                                    <div id="totalcharges" class="count">0</div>

                                </div>
                                <div data-brackets-id="2116" class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                    <span data-brackets-id="2117" class="count_top"><i data-brackets-id="2118" class="fa fa-user"></i> تعداد کاربران جدید</span>
                                    <div id="subs" class="count green">0</div>

                                </div>
                                <div data-brackets-id="2123" class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                    <span data-brackets-id="2124" class="count_top"><i data-brackets-id="2125" class="fa fa-user"></i> تعداد کاربرانی که انصراف داده اند</span>
                                    <div id="unsubs" class="count">0</div>
                                </div>
                                <div data-brackets-id="2130" class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                    <span data-brackets-id="2131" class="count_top"><i data-brackets-id="2132" class="fa fa-user"></i> تعداد شارژ خودکار</span>
                                    <div id="autocharges" class="count">0</div>
                                </div>
                            </div>
                            <div  class="x_content2">
                                <div id="graphx" width="400" height="400" class="charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $('#selectService').on('change', function() {

            var selected = this.value;
            document.getElementById('selected').innerHTML = selected;

            var d = new Date();
            var month = d.getMonth();
            var year = d.getFullYear();

            console.log(year);

            $.ajax({
                type: 'get',
                url: 'servicesDiagrams3',

                data: {
                    's' : selected ,
                    'mm' : '3' ,
                    'y' : '2018'
                },

                success: function (data) {

                    $('.charts').empty();

                    document.getElementById('total').innerHTML = data['total'];
                    document.getElementById('subs').innerHTML = data['subs'];
                    document.getElementById('totalcharges').innerHTML = data['totalcharges'];
                    document.getElementById('unsubs').innerHTML = data['unsubs'];
                    document.getElementById('autocharges').innerHTML = data['autocharges'];

                    console.log(data['bar_subs'])

                    if ($('#graphx').length ){
                        var sub_array = Object.values(data['bar_subs']);
                        var unsub_array = Object.values(data['bar_unsubs']);
                        var total_array = Object.values(data['bar_total']);
                        var chart_data_array = [];

                        console.log(data['months'])

                        for (var i = 0; i< 3 ; i++) {
                            var keys = ['y', 'z', 'a', 'x'];
                            var values1 = [sub_array[i],unsub_array[i],total_array[i],data['months'][i]];
                            var result1 = {};
                            keys.forEach((key, i) => result1[key] = values1[i]);

                            chart_data_array[i] = result1;
                        }
                        console.log(chart_data_array);

                        Morris.Bar({
                            element: 'graphx',
                            data: chart_data_array,
                            xkey: 'x',
                            ykeys: ['y', 'z', 'a'],
                            barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB' , '#ACADAC'],
                            hideHover: 'auto',
                            labels: [ 'فعالسازی'  ,   'غیرفعالسازی' , 'تمام مشترکین'],
                            resize: true
                        }).on('click', function (i, row) {
                            console.log(i, row);
                        });
                    }

                }
            })
        });

    </script>
    <script src="/HUB/public/js/custom.js"></script>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>--}}

    </body>
</html>
