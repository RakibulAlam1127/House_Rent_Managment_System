<?php

use Phroute\Phroute\Exception\HttpMethodNotAllowedException;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;

require_once 'vendor/autoload.php';

$router = new RouteCollector(new RouteParser());

require_once 'router.php';

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$url =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = str_replace('HouseRentManagmentSystem','',$url);
try{
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$url);
echo $response;
}catch(HttpRouteNotFoundException $exception){
 echo $exception->getMessage();
}catch(HttpMethodNotAllowedException $exception){
 echo $exception->getMessage();
}
