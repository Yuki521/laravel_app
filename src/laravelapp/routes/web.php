<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{msg?}/{id?}',function($msg='no message',$id='root'){

$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size: 16pt; color: #999; }
h1 { font-size: 100pt; text-align: right;}
</style>
<body>
    <h1>hello</h1>
    <p>これはサンプル</p>
    <p>これは{$id}</p>
    <p>{$msg}</p>
</body>
</html>
EOF;


    return $html;
});
