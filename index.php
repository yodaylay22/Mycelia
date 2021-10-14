<?php require 'vendor/autoload.php';

use Steampixel\Route;
use Medoo\Medoo;

define('BASEPATH','/');



$GLOBALS["db"] = new Medoo([
  'type' => 'mysql',
  'host' => 'localhost',
  'database' => 'test',
  'username' => 'root',
  'password' => 'root',
]);



Route::add('/', function() {
  echo '<h1 style="text-align: center; padding-top: 40vh;font-family: system-ui;">Hello World 🍄</h1>';
});


Route::add('/api/users', function() use($db){

  $data = $db->select("users", "*");
  echo json_encode($data);

}, ['get','post']);

Route::add('/user/([a-z-0-9-]*)', function($name) use($db){

  include('profile.php');

}, 'get');

Route::add('/user/([a-z-0-9-]*)', function($name) use($db){  

  $data = $db->select("users", "*", [ "name[~]" => $name ]);
  echo json_encode($data);

}, 'post');







Route::pathNotFound(function($path) {

  header('HTTP/1.0 404 Not Found');
  
  echo 'Error 404 :-(<br>';
  echo 'The requested path "'.$path.'" was not found!';
});

Route::methodNotAllowed(function($path, $method) {

  header('HTTP/1.0 405 Method Not Allowed');
  
  echo 'Error 405 :-(<br>';
  echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
});


// Run the Router with the given Basepath
Route::run(BASEPATH);
