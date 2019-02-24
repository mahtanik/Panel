<html lang="fa" dir="rtl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
        {{--<link rel="stylesheet" href="HUB/public/css/persian.datepicker.css"/>--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        {{--<script src="HUB/public/js/persian.date.js"></script>--}}
        {{--<script src="HUB/public/js/persian.datepicker.js"></script>--}}
        <script src="/HUB/public/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="/HUB/public/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="/HUB/public/js/fastclick.js"></script>
        <!-- NProgress -->
        <script src="/HUB/public/js/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="/HUB/public/js/Chart.min.js"></script>
        <script src="/HUB/public/js/dist/Chart.js"></script>
        <!-- jQuery Sparklines -->
        <script src="/HUB/public/js/jquery.sparkline.min.js"></script>
        <!-- morris.js -->
        <script src="/HUB/public/js/raphael.min.js"></script>
        <script src="/HUB/public/js/morris.min.js"></script>
        <!-- gauge.js -->
        <script src="/HUB/public/js/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="/HUB/public/js/bootstrap-progressbar.min.js"></script>
        <!-- Skycons -->
        <script src="/HUB/public/js/skycons/skycons.js"></script>
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

        <script src="/HUB/public/js/icheck.min.js"></script>
        <!-- Datatables -->
        <script src="/HUB/public/js/jquery.dataTables.min.js"></script>
        <script src="/HUB/public/js/dataTables.bootstrap.min.js"></script>
        <script src="/HUB/public/js/dataTables.buttons.min.js"></script>
        <script src="/HUB/public/js/buttons.bootstrap.min.js"></script>
        <script src="/HUB/public/js/buttons.flash.min.js"></script>
        <script src="/HUB/public/js/buttons.html5.min.js"></script>
        <script src="/HUB/public/js/buttons.print.min.js"></script>
        <script src="/HUB/public/js/dataTables.fixedHeader.min.js"></script>
        <script src="/HUB/public/js/dataTables.keyTable.min.js"></script>
        <script src="/HUB/public/js/dataTables.responsive.min.js"></script>
        <script src="/HUB/public/js/responsive.bootstrap.js"></script>
        <script src="/HUB/public/js/dataTables.scroller.min.js"></script>
        <script src="/HUB/public/js/jszip.min.js"></script>
        <script src="/HUB/public/js/pdfmake.min.js"></script>
        <script src="/HUB/public/js/vfs_fonts.js"></script>
    </head>
    <style>
        .isDisabled {
            color: currentColor;
            cursor: not-allowed;
            opacity: 0.5;
            text-decoration: none;
            pointer-events: none;
        }
    </style>
    <body class="nav-md">

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3  left_col">
                <div class="left_col scroll-view">
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <br/>
                    <br/>
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="/HUB/public/images/img.jpg" alt="..." class="img-circle profile_img" style="background-color: transparent">
                        </div>
                        <div class="profile_info">
                            <span style="font-style: italic">خوش آمدید ، </span>
                            <h2></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
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
                                        <li><a class="isDisabled">کمپین ها</a></li>
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
                                    <a class="isDisabled"style="font-style: italic"; ><i class="fa fa-tags"></i>کمپین ها  </a>
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
            <div class="top_nav">
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
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <div data-brackets-id="2088" class="col-md-6" style="float: right">
                                    </div>
                                </div>
                                <div class="x_content">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>کاربر</th>
                                                <th>تاریخ</th>
                                                <th>سرویس</th>
                                                <th>اقدام</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $arrlength = count($service_id); ?>
                                        @for ( $i = 2 ; $i < $arrlength ; $i++)
                                            <tr>
                                                <td>{{$user_msisdn[$i]}}</td>
                                                <td>{{$action_date[$i]}}</td>
                                                <td>{{$service_id[$i]}}</td>
                                                <td style="display: inline">{{$user_action[$i]}}</td>
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

        <script>
        </script>

    <!-- jQuery -->
        <script src="/HUB/public/js/custom.min.js"></script>
    </body>
</html>
