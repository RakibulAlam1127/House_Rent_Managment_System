<?php

use App\Controllers\Backend\DashboardController;
use App\Controllers\Frontend\LoginController;
use App\Controllers\Frontend\RegistrationController;

$router->controller('/login',LoginController::class);
$router->controller('/',RegistrationController::class);
$router->controller('/dashboard',DashboardController::class);
