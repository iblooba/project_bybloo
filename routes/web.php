<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('test', function () {
    return view('test');
});
Route::get('step2', function () {
    return view('step2');
});
Route::get('step3', function () {
    return view('step3');
});
Route::get('step3seller', function () {
    return view('step3sel');
});

Route::get('testcurl', function () {
    return view('testCurl');
});
Route::get('session', function () {
    return view('session_t');
});
/*Route::get('redirect', function () {
    return view('redirect');
});

/*Route::get('testpostcurl', function () {
    return view('testcurlpost');
});

Route::get('/payment', function () {
    return view('payment');
});
*/
Route::get('/statusconfirm', function () {
    return view('check_status');
});
Route::get('/pageconfirm', function () {
    return view('buyer_confirm');
});
Route::get('/step1', function () {
    return view('step1');
});
Route::get('/payment', 'CurltController@payment');
Route::post('/step1', 'CurltController@selectcurl');
Route::post('/step2', 'CurltController@step2');
Route::post('/step3', 'CurltController@step3');
Route::post('/step4', 'CurltController@step4');
Route::post('/stepconfirm', 'CurltController@stepconfirm');
Route::post('/contractaddress', 'CurltController@updatecontract');
Route::post('/testpostcurl', 'CurltController@selectcurl');
Route::post('/redirect', 'CurltController@redirect');
Route::post('/insertconfirm', 'CurltController@insertconfirm');


/*
Route::get('/orders', function () {
    return view('backend/orders');
});
Route::get('/totalincome', function () {
    return view('backend/totalincome');
});
Route::get('/orderdetail', function () {
    return view('backend/orderdetail');
});
*/
Route::get('/orders', 'OrdersController@index');
Route::get('/totalincome', 'OrdersController@totalincome');
Route::get('/orderdetail/{id}', 'OrdersController@detail');
Route::get('/header_b', function () {
    return view('backend/header_b');
});
Route::get('/testdate', 'TestController@index');
