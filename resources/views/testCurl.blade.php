<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8000",
  CURLOPT_URL => "http://124.109.0.101:8000/api/me",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjExZjk0MDdhODA1ZWY1ODk2ZDU2NWMxNWM0Yzc3NGExZjA0MjcxOTE2ZWZjMjIyNGEwNjc5YTJjOTU2MWMyMDAxYTRiNjdkMjg5NDI0MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiMTFmOTQwN2E4MDVlZjU4OTZkNTY1YzE1YzRjNzc0YTFmMDQyNzE5MTZlZmMyMjI0YTA2NzlhMmM5NTYxYzIwMDFhNGI2N2QyODk0MjQxODAiLCJpYXQiOjE0ODYyNzI1MjIsIm5iZiI6MTQ4NjI3MjUyMiwiZXhwIjoxODAxODA1MzIyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.lAC_DXO-y4Dx7saggKN7GAvrJ68WeNxHmbiamOhwXAkoqNaaYgJ_f1kJjB3o5h7xznf2t-NOi6AHw3Jt1HJpoNFRYsySflhNUppNcxzFsBK-kJ2Un3mtjCV76rGzfSi-5jOB0WcSSOx78WYjgpXjqOVPLZONNfQ6aSpO-PXB4rgKH20wkWm2dH5NsMSJ1eP5_O6I-M_xz2wzbA7vr-9ajZYCRdD54OLsnAylFp9t9FthxqpG3ONzFyTL7klXv1dOwx1GDvm6Tm-64c2WvYQVVt_WqC2KOr1iW3-8bE8hXITSGNQAQsVuqQr3ydK6IvpXnq1iyqpoNFG8r8kPj-sh5QMtYeEhnMjwSnhncEJ7a2DWcQdYF5IFWXiTWWZacbW5GuMLxUyM29HFb846J4gl-ROL1O9efChY4val8qq8zmAqstW32MwmKCEri9WlQmK7KIf8tffSBlRgOpWKeHIXH0-5BG2fJ-qc7H1JjGjyEehytnu6YygM7E2XtPG0zR2BuAyWkYM32QuhTHUsQN-EleqDmh_B47N8Zj4kvnObG685mKjSj350D7fRuAWNokDTbOXf-9TRhShEsaFMbOwxSyRAldWt-TO7O9DwDx_puISNj6EZBdikEBnY1hd0e2-dMDrcrNwyLeYJizhTiWNt_Kh662MZNMJzVDODEU80pas",
    "cache-control: no-cache",
    "postman-token: e8a335b3-f142-2165-cd6d-e5bc18a08342"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {

echo  $response;

//echo  json_encode($response);

}
?>
