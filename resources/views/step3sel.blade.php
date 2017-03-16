<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8000",
  CURLOPT_URL => "http://124.109.0.101:8000/api/v1/contract/6/call/6",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
   CURLOPT_POSTFIELDS => "data=0x0000000000000000000000004bfbc331ba5f1ab37bf266c3289a7de2c5a17196",
   CURLOPT_HTTPHEADER => array(
   "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBmNTRjNjk1MGY5ZDQ4OGUyY2E5MzIyOWFmNmI0ZmNiMDA2MzY4YWZjMWE5MmQ4ZjczYWNhNTJiMTBkZTMzMWUyY2Y1ZmYwOTE2ODQ5ZDU5In0.eyJhdWQiOiIxIiwianRpIjoiMGY1NGM2OTUwZjlkNDg4ZTJjYTkzMjI5YWY2YjRmY2IwMDYzNjhhZmMxYTkyZDhmNzNhY2E1MmIxMGRlMzMxZTJjZjVmZjA5MTY4NDlkNTkiLCJpYXQiOjE0ODg2MTI1NzIsIm5iZiI6MTQ4ODYxMjU3MiwiZXhwIjoxODA0MTQ1MzcyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.f10cZPkfe4snZChYnhSa3nEayL_fRC1nXkrBCdZO0PiCSFYCs7M9sfZ0sLIGOxTISAvzxleMyXIj4UrrrLcVUMsgah_LHax37SHAXFHqBRObPrv1soAGujxMkqbyeZ389JEnxr-o6xL9fprexblQ_6Mcmj_j7sI5GbR1X-gX78vNL17jeDi81mCXNKmtFXQHr6a1PmF3LKvnXAixUuBf3XERvFw8pB9YhKOnkY_iwIraVYdZpCmBWWQtvKbA_r1h3nIrqCH-PJe7LY8gAHDuy3br7hnZy37q9QJ1PhE9v2o9CKluRhBSTtTHS0uPsDPrhLgaA9jaUNj2Bk-C7IuKiqEkmmBRWfHdbZno91MYJbuScBNoTAId5s3DUiFJGIqsMIMifhNtLcGNNlUyby-XOej71CFg5HSZaYhV8QMZrL8QBCQaGE7I9N9Aa0q8e8udrEeC0SlRj43ivK3Q0cns1iZZOFT8ytIZfffadJzj93JDCowcMLmGP0L1m9JpOFzU7qXr-V-LBQRZvq4v4gxy8gIAnSR0IYaZQFjkUb9NFbShil5ZY5wF0tEJNa58S8UKI3yz3d6la3Qi8QYdEOITDFwQdaCjjcrbtSpSYhNdVIWJyCsuyFBsR4CjovJR8FUU_-KO8lCC5udgmbUmeIiJYxWixq7OvmSgeEluuxPEP_I",
    "cache-control: no-cache",
    "content-type: application/form-data",
    "postman-token: b113b244-9f93-a1d8-5e28-1864077970a1"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>
