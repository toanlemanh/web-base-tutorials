<?php 

// based on which controller and which action
$controller = isset($_GET['controller']) ? ucfirst($_GET['controller']): 'Default';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerName = sprintf('%sController', $controller);

$directory = __DIR__."/controllers/{$controllerName}.php";

if (!file_exists($directory)){
    die("Controller file is not exist");
}
require($directory);

$controllerInstance = new $controllerName();
// echo $controllerInstance->{"index"}();
echo $controllerInstance->$action();
   

