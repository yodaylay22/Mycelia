<?php
require 'vendor/autoload.php';
use Steampixel\Route;

$headers = [
    'Access-Control-Allow-Origin'      => '*',
    'Access-Control-Allow-Methods'     => 'POST, GET, OPTIONS, PUT, DELETE',
    'Access-Control-Allow-Credentials' => 'true',
    'Access-Control-Max-Age'           => '86400',
    'Access-Control-Allow-Headers'     => 'Origin, X-Requested-With, Content-Type, Accept, Authorization, Cache-Control'
];

Route::add('/', function() use($db) {

    include('pages/startpage.php');

}, ['GET']);

Route::add('/api', function() use($db, $headers) {
    foreach ($headers as $header => $value) { header($header . ': ' . $value, false); }

    $data = ['New', 'Age', 'Of', 'Mycelia'];

    echo json_encode($data);

}, ['POST', 'GET', 'OPTIONS']);




