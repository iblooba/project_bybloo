<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8000",
  CURLOPT_URL => "http://124.109.0.101:8000/api/v1/contract/$contract_id/send/workSuccess",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
   "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBmNTRjNjk1MGY5ZDQ4OGUyY2E5MzIyOWFmNmI0ZmNiMDA2MzY4YWZjMWE5MmQ4ZjczYWNhNTJiMTBkZTMzMWUyY2Y1ZmYwOTE2ODQ5ZDU5In0.eyJhdWQiOiIxIiwianRpIjoiMGY1NGM2OTUwZjlkNDg4ZTJjYTkzMjI5YWY2YjRmY2IwMDYzNjhhZmMxYTkyZDhmNzNhY2E1MmIxMGRlMzMxZTJjZjVmZjA5MTY4NDlkNTkiLCJpYXQiOjE0ODg2MTI1NzIsIm5iZiI6MTQ4ODYxMjU3MiwiZXhwIjoxODA0MTQ1MzcyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.f10cZPkfe4snZChYnhSa3nEayL_fRC1nXkrBCdZO0PiCSFYCs7M9sfZ0sLIGOxTISAvzxleMyXIj4UrrrLcVUMsgah_LHax37SHAXFHqBRObPrv1soAGujxMkqbyeZ389JEnxr-o6xL9fprexblQ_6Mcmj_j7sI5GbR1X-gX78vNL17jeDi81mCXNKmtFXQHr6a1PmF3LKvnXAixUuBf3XERvFw8pB9YhKOnkY_iwIraVYdZpCmBWWQtvKbA_r1h3nIrqCH-PJe7LY8gAHDuy3br7hnZy37q9QJ1PhE9v2o9CKluRhBSTtTHS0uPsDPrhLgaA9jaUNj2Bk-C7IuKiqEkmmBRWfHdbZno91MYJbuScBNoTAId5s3DUiFJGIqsMIMifhNtLcGNNlUyby-XOej71CFg5HSZaYhV8QMZrL8QBCQaGE7I9N9Aa0q8e8udrEeC0SlRj43ivK3Q0cns1iZZOFT8ytIZfffadJzj93JDCowcMLmGP0L1m9JpOFzU7qXr-V-LBQRZvq4v4gxy8gIAnSR0IYaZQFjkUb9NFbShil5ZY5wF0tEJNa58S8UKI3yz3d6la3Qi8QYdEOITDFwQdaCjjcrbtSpSYhNdVIWJyCsuyFBsR4CjovJR8FUU_-KO8lCC5udgmbUmeIiJYxWixq7OvmSgeEluuxPEP_I",
   "cache-control: no-cache",
    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
    "postman-token: b113b244-9f93-a1d8-5e28-1864077970a1"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
//  echo $response;
$jsonDecode = json_decode($response, true);
 $transactionHash =  $jsonDecode['transactionHash'];
 $id =  $jsonDecode['id'];
?>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <section class="mainContent clearfix stepsWrapper">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="innerWrapper clearfix stepsPage">
            <h4>  data :  <?php echo $response; ?> </h4>
            <h4>  id for customer confirm :  <?php echo $id; ?> </h4>

              </div>
            </div>
          </div>
        </div>
      </section>
      <form  name="frmMain" action="/insertconfirm" method="POST">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <input type="hidden" class="form-control" name="transactionHash" value="0xdbfa3232a620002025faa15eb0c841ac4ace7970edb7cbf6b18bcdbba1c74ae6">
      <input type="hidden" class="form-control" name="id" value="39">
      <br/>
      <input type="submit" value="กลับหน้าหลัก" class = "btn btn-primary">
        </div>
      </div>
      </form>
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
<?php
  }
?>
