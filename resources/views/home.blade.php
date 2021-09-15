<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>مسؤول النظام | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- new  -->

    <!--   -->
  </head>

  <body class="nav-md">
    <div class="container body" >
      <div class="main_container" >
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>مسؤول النظام</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
              <img src="../img/logo.png" alt="" width="100px" height="auto">
              </div>
              <br>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>COCOON</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a  href="{{route('dashboard2')}}"><i class="fa fa-home"></i> الرئيسية <span class="fa fa-chevron-down"></span></a>
                    
                  </li>
                  <li><a><i class="fa fa-user"></i>  المشتركين <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                     
                      <li><a href="{{route('seeusers')}}">ادارة المشتركين </a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> ادارة الخدمات و الباقات <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="{{route('add.product')}}"">اضافة خدمة</a></li>
                      <li><a href="{{route('show.desine')}}">تعديل الخدمة</a></li>
                      <li><a href="{{route('add.baqa')}}"">اضافة شعار و هوية بصرية</a></li>
                      <li><a href="{{route('show.baqa')}}">تعديل شعار و هوية بصرية</a></li>
                      <li><a href="{{route('add.prog')}}"">  اضافة تصميم و برمجة  </a></li>
                      <li><a href="{{route('show.prog')}}">تعديل  تصميم و برمجة</a></li>
                      <li><a href="{{route('add.tas')}}"">  اضافة تسويق</a></li>
                      <li><a href="{{route('show.tas')}}">تعديل  تسويق</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> ادارة   الفيديو التعريفي <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="{{route('add.v')}}"">اضافة فيديو</a></li>
                      <li><a href="{{route('show.v')}}">تعديل الفيديو</a></li>
                      </ul>
                  </li>
                  <li><a><i class="fa fa-clock-o" ></i> ادارة الحجوزات <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                   
                    <li><a href="{{route('show.talab')}}">تعديل الحجز</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-envelope"></i> ادارة الرسائل <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('show.contact')}}">ادارة الوارد</a></li>
                      <li><a href="{{route('send.email')}}">ارسال للجميع</a></li>
                     
                    </ul>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li><a href="{{route('user.exit')}}"><i class="fa fa-sign-out"></i>خروج من النظام <span class="fa fa-chevron-down"></span></a>
                   
                  </li>
                </ul>
              </div>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
       
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row" style="display: inline-block;">
            <div class=" top_tiles" style="margin: 10px 0;">
              
            
              <div class="col-md-4 col-sm-4  tile">
                <span>عدد المشتركين اليومي</span>
                <h2>{{$sumd}}</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-4 col-sm-4  tile">
                <span>عدد المشتركين الامس </span>
                <h2>{{$sumy}}</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 125px;"></canvas>
                  </span> 
              </div>
              <div class="col-md-4 col-sm-4  tile">
                <span>عدد المشتركين الشهري </span>
                <h2>{{$sum}}</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
            </div>
          </div>
          
            <br>


            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="dashboard_graph x_panel">
                  <div class="x_title">
                    <div class="col-md-6">
                      <h3>Users Counter  <small>Graph </small></h3>
                    </div>
                   
                  </div>
                  <div class="x_content">
                    <div class="demo-container" style="height:250px">
                      <div id="chart_plot_03" class="demo-placeholder"></div>
                    </div>
                  </div>
                </div>
              </div>
              </div> 


            <br>
              
            <div class=" top_tiles" style="margin: 10px 0;">
              <div class="col-md-4 col-sm-4  tile">
                <span>عدد الحجوزات اليومي</span>
                <h2>{{$sumd1}}</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-4 col-sm-4  tile">
                <span>عدد الحجوزات الامس </span>
                <h2>{{$sumy1}}</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 125px;"></canvas>
                  </span> 
              </div>
              <div class="col-md-4 col-sm-4  tile">
                <span>عدد الحجوزات الشهري </span>
                <h2>{{$sum1}}</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              </div>
          
        <!-- /page content -->

        <!-- footer content -->
        <footer>
         
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>