<?php //php open tag
include('name.php'); include 'name.php'; //include a file, when is not find emit E_WARNING
require 'somefile.php';//include a file, when is not find emit fatal E_COMPILE_ERROR
namespace Symfony\Component\HttpFoundation; //first word define a producent, order of namespace should be the same as a directory structure
use Symfony\Component\HttpFoundation\Response; //key word, inform PHP  which class we want to use 
use Symfony\Component\HttpFoundation\Response as Res; //make key word alias from used classes, PHP deafult as alias call last word
use func NameSpaces\ElementName; //import function or constant value named "ElementName"
$name = value;
$this-> value;
var_dump();
filter_var(variable, filter, options)//

new
require_once
explode('sign', value);
__DIR__ . 
map('method', '/', 'path', 'value');
//DONE CODE LINES
$this->match = $router->match();
require_once __DIR__ . '/../app/routing/routes.php';
if(isset($var)){...};//run cody only when $var is exist
if(!isset($_SESSION)) session_start();//start session if not already started
new \App\RouteDispatcher($router);
var_dump($user->toArray());
define('BASE_PATH', realpath(__DIR__.'/../../'));
explode('@', $this->match['target']);
$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');
$phpsql = $query-.("SELECT * FROM `users`");//performs a query on a database
DB::query()//performs a query on a database
if(filter_var($email, FILTER_VALIDATE_EMAIL)){...}//validate email

//OOP
class
public //public allow variable
private
protected
public function __construct()
public function do_something()
public function __destruct()
$object_name = new class_name()
$object_name -> do_something()//run function called do_something()

    
//TOOLS
//composer
//brew
//LIBRARIES
//composer require vlucas/phpdotenv
//composer require altorouter/altorouter
//composer require philo/laravel-blade
//composer require phpmailer/phpmailer
//composer require illuminate/database