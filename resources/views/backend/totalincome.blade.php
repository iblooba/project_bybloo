<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Backend | ยอดรวมรายได้</title>

    <!-- Bootstrap -->
    <link href="{{asset('/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('/assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="{{asset('/assets/build/css/custom.min.css')}}" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
            @include('backend/menuleft')        
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          @include('backend/header_b')
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ยอดรวมรายได้</h3>
              </div>
            </div>
            <?php
              $summmm = ($orders_cp * 4)/100 ;
            ?>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                        <div class="col-xs-12">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:80%"><button class="btn btn-success pull-left btn-xs">
                                    <i class="fa fa-check"></i></button>รายการสั่งซื้อ "อนุมัติ" :</th>
                                  <td>{{ number_format($orders_cp,2, '.', ',') }} บาท</td>
                                </tr>
                                <tr>
                                  <th><button class="btn btn-warning  pull-left btn-xs">
                                    <i class="fa fa-repeat"></i></button> รายการสั่งซื้อ "รอคอนเฟิร์ม" :</th>
                                  <td>{{ number_format($orders_wa,2, '.', ',') }}  บาท</td>
                                </tr>
                                <tr>
                                  <th><button class="btn btn-warning  pull-left btn-xs">
                                    <i class="fa fa-exclamation-triangle"></i></button> รายการสั่งซื้อ "ที่อาจจะถูกปฎิเสธภายหลัง" :</th>
                                  <td>{{ number_format($orders_ho,2, '.', ',') }}  บาท</td>
                                </tr>
                                <tr>
                                  <th><button class="btn btn-danger pull-left btn-xs">
                                    <i class="fa fa-close"></i></button> รายการสั่งซื้อ "ถูกปฎิเสธ" :</th>
                                  <td>{{ number_format($orders_ns,2, '.', ',') }}  บาท</td>
                                </tr>
                                <tr>
                                  <th></th>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>

                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:80%"><button class="btn btn-primary pull-left btn-xs"><i class="fa fa-credit-card"></i></button>
                                    <span class="red">หักค่าธรรมเนียม 4.00% (รวมภาษีมูลค่าเพิ่ม) : </span></th>
                                  <td><b><span class="red">{{ number_format($summmm,2, '.', ',') }}  บาท</span></b></td>
                                </tr>
                                <tr>
                                  <th style="width:80%"></th>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:80%"><button class="btn btn-primary pull-left btn-xs"><i class="fa fa-money"></i></button>
                                    <span class="green">ยอดเงินรายได้ร้านค้าสุทธิ : </span></th>
                                  <td><b><span class="green">{{ number_format($orders_cp - $summmm,2, '.', ',') }}  บาท </span></b></td>
                                </tr>
                                <tr>
                                  <th style="width:80%"></th>
                                  <td></td>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('/assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('/assets/vendors/nprogress/nprogress.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('/assets/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('/assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('/assets/build/js/custom.min.js')}}"></script>
  </body>
</html>
