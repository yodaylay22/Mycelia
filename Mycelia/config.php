<?php
require 'vendor/autoload.php';
use Medoo\Medoo;

$PROJECT_NAME = "Mycelia";
$PROJECT_VERSION = "1.1";
$DEBUG = false;

# DB Help => https://medoo.in/api/new
$GLOBALS["db"] = [];
// $GLOBALS["db"] =  new Medoo([
// 	// [required]
// 	'type' => 'mysql',
// 	'host' => 'localhost',
// 	'database' => 'mycelia',
// 	'username' => 'root',
// 	'password' => 'root',
// ]);