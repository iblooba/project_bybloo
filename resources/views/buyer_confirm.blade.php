<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>confirm | status</title>
    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('/assets/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/plugins/selectbox/select_option1.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/plugins/rs-plugin/css/settings.css')}}" rel="stylesheet"  media="screen">
    <link href="{{asset('/assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet"  media="screen">
    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <!-- CUSTOM CSS -->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/options/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/options/optionswitch.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/colors/default.css')}}" rel="stylesheet" id="option_color">
    <link href="{{asset('/assets/css/parley.css')}}" rel="stylesheet">
</head>
    <body class="body-wrapper version3">
      <!--=== option Switcher ===-->
      <div class="main-wrapper">
        <!-- HEADER -->
        <div class="header clearfix headerV2">
          @include('header')    <!-- TOPBAR -->
        </div>
      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix stepsWrapper">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="innerWrapper clearfix stepsPage">
                <div class="row progress-wizard" style="border-bottom:0;">
                  <form action="/stepconfirm" class="row" method="post" role="form">
                    <div class="col-xs-12">
                      <div class="page-header">
                        <h4>กรอก id</h4>
                      </div>
                    </div>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group col-sm-12 col-xs-12">
                      <label for=""></label>
                      <input type="text" class="form-control" name="contract_id">
                    </div>
                    <div class="col-xs-12">
                      <div class="well well-lg clearfix">
                        <ul class="pager">
                            <input type="submit" value="Continute" class = "btn btn-primary">
                        </ul>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

        <script src="{{asset('/assets/ajax/libs/jquery/1.11.3/jquery.min.js')}}"></script>
        <script src="{{asset('/assets/plugins/jquery-ui/jquery-ui.js')}}"></script>
        <script src="{{asset('/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
        <script src="{{asset('/assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}"></script>
        <script src="{{asset('/assets/plugins/countdown/jquery.syotimer.js')}}"></script>
        <script src="{{asset('/assets/options/optionswitcher.js')}}"></script>
        <script src="{{asset('/assets/js/custom.js')}}"></script>
        <script src="{{asset('/assets/js/parsley.min.js')}}"></script>

  </body>
</html>
