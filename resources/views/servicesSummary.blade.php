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
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>--}}
        <style>
            .isDisabled {
                color: currentColor;
                cursor: not-allowed;
                opacity: 0.5;
                text-decoration: none;
                pointer-events: none;
            }
        </style>
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
    <body class="nav-md">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color: #985f0d">لیست کاربران</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped" id="user_detail_table">
                            <thead dir="rtl">
                                <tr>
                                    <th style="text-align: center"> شماره موبایل</th>
                                    <th style="text-align: center">اقدام</th>
                                </tr>
                            </thead>
                            <tbody id="user_table_body">
                               <tr>
                                   <td></td>
                                   <td></td>
                               </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class = modal-footer>
                        <button type="button" class="close" data-dismiss="modal">ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3  left_col">
                    <div class="left_col scroll-view">
                        <!--
                                                <div class="navbar nav_title" style="border: 0;">
                                                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                                                </div>
                        -->
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
                    <div class="">
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <div data-brackets-id="2088" class="col-md-6" style="float: right">
                                            <div data-brackets-id="2089" id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                                <i data-brackets-id="2090" class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                <span id="DatePicker" data-brackets-id="2091"></span> <b data-brackets-id="2092" class="caret"></b>
                                            </div>
                                            <br/>
                                            <span id="serviceId" style="display: none">{{$id}}</span>
                                            <br>
                                            <form>انتخاب کنید :
                                                <select name="selectService">
                                                    @foreach( $services as $service)
                                                        <option> {{ $service->service_name }} </option>
                                                    @endforeach
                                                </select>
                                                <input type='submit' name='submit' placeholder='اعمال'>
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                        <i class="fa-circle"></i><strong style="color: #985f0d">سرویس  {{$selectedService}}</strong>
                                        <b id="selected"></b>
                                    </div>
                                    <div class="x_content">
                                        <br>
                                        <p><b style="border : 3px;border-style:solid; border-color: #3d4852; padding: 1em;">
                                            تعداد کل کاربران فعال سرویس :
                                                {{$allusers}}
                                            </b></p>
                                        <br>
                                        <table id="datatable-buttons" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>تاریخ</th>
                                                    <th>تعداد شارژ</th>
                                                    <th>تعداد فعالسازی </th>
                                                    <th>تعداد غیرفعال سازی</th>
                                                    <th>لیست کاربران</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach( $details as $detail)
                                                    <tr>
                                                        {{--@if ($detail->serviceId == $id)--}}
                                                            <td class="date">{{$detail->CreatedOn}}</td>
                                                            <td> {{$detail->AUTO_CHARGE}} </td>
                                                            <td> {{$detail->SUBSCRIPTION}} </td>
                                                            <td> {{$detail->UNSUBSCRIPTION}} </td>
                                                            <td><a data-toggle="modal" href="#myModal" ><i class="fa fa-external-link use-address" ></i></a></td>
                                                        {{--@endif--}}
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>

            $(".use-address").click(function() {

                var serviceId = $('#serviceId').text();

                var $row = $(this).closest("tr");    // Find the row
                var $date = $row.find(".date").text(); // Find the text

                console.log('date: '+ $date)
                console.log('s: '+serviceId)

                $.ajax({
                    type: 'get',
                    url: 'serviceSummary2',
                    data: {
                        'dd': $date ,
                        'ss' : serviceId
                    },

                    success: function (data) {
                        var tablebody = document.getElementById("user_table_body");


                        $('#user_table_body').empty();

                        for( var i = 0 ; i< data['user_number'].length ; i++){
                            var tr = document.createElement('TR');

                            var td1 = document.createElement('TD');
                            td1.appendChild(document.createTextNode(data['user_action'][i]));

                            var td2 = document.createElement('TD');
                            td2.appendChild(document.createTextNode(data['user_number'][i]));

                            tr.appendChild(td2);
                            tr.appendChild(td1);

                            tablebody.appendChild(tr);

                        }
                    }

                })
            });


            // $(document).ready(function() {
            //     var table = $('#user_detail_table').DataTable({
            //         dom: 'Bfrtip',
            //         buttons: [
            //             {
            //                 extend: 'excel',
            //                 text: 'Export excel',
            //                 className: 'exportExcel',
            //                 filename: 'Export excel',
            //                 exportOptions: {
            //                     modifier: {
            //                         page: 'all'
            //                     }
            //                 }
            //             },
            //             {
            //                 extend: 'copy',
            //                 text: 'Copy',
            //                 className: 'exportExcel',
            //                 key: {
            //                     key: 'c',
            //                     altKey: true
            //                 }
            //             }]
            //     });
            //
            // });

        </script>

        <!-- jQuery -->
        <script src="/HUB/public/js/custom.min.js"></script>
    </body>
</html>
