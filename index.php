<?php
include('config/development.php');
spl_autoload_register(function ($class) {
    require_once 'models/' . $class . '.php';
});

$dbc = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);

switch($_GET['action']):
    case 'admin/coffee':
        include('controllers/coffeeController.php');
        break;
    case 'admin/coffee/edit':
        include('controllers/coffeeEditController.php');
        break;
endswitch;