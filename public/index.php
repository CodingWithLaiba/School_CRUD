<?php

require_once __DIR__ . "/../app/core/Route.php";

$url = isset($_GET['url']) ? $_GET['url'] : 'students';

$url = explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));

$controllerName = ucfirst($url[0]) . "Controller"; 
$method = isset($url[1]) ? $url[1] : "index";
$params = array_slice($url, 2);

$controllerPath = __DIR__ . "/../app/controllers/$controllerName.php";

if (!file_exists($controllerPath)) {
    die("Controller not found: " . $controllerName);
}

require_once $controllerPath;

$controller = new $controllerName();

call_user_func_array([$controller, $method], $params);