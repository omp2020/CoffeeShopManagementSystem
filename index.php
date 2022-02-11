<?php


/**
 * 
 * Require files 
 * 
 */
require_once __DIR__ . '\config\__init.php';

$request = $_SERVER['REQUEST_URI'];
$router = str_replace('/miniproject','', $request);

// echo $router;
switch ($router) {
    case '/' :
        require __DIR__ . '/views/login.php';
        break;
    case '' :
        require __DIR__ . '/views/login.php';
        break;
    case '/logout' :
        require __DIR__ . '/views/logout.php';
        break;
    case '/changePass' :
        require __DIR__ . '/views/changePass.php';
        break;
    case '/register' :
        require __DIR__ . '/views/register.php';
        break;
    case '/api' :
        require __DIR__ . '/api.php';
        break;
    case '/admin' :
        require __DIR__ . '/views/admin/index.php';
        break;
    case '/admin/addemp' :
        require __DIR__ . '/views/admin/addemp.php';
        break;
    case '/admin/addprod' :
        require __DIR__ . '/views/admin/addprod.php';
        break;
    case '/admin/addorder' :
        require __DIR__ . '/views/admin/addorder.php';
        break;
    case '/admin/addcust' :
        require __DIR__ . '/views/admin/addcust.php';
        break;
    case '/admin/listorder' :
        require __DIR__ . '/views/admin/listorder.php';
        break;
    case '/admin/listemp' :
        require __DIR__ . '/views/admin/listemp.php';
        break;
    case '/admin/updateemp' :
        require __DIR__ . '/views/admin/updateemp.php';
        break;
    case '/admin/listcust' :
        require __DIR__ . '/views/admin/listcust.php';
        break;
    case '/admin/listprod' :
        require __DIR__ . '/views/admin/listprod.php';
        break;
    case '/admin/updateprod' :
        require __DIR__ . '/views/admin/updateprod.php';
        break;
    case '/admin/updatecust' :
        require __DIR__ . '/views/admin/updatecust.php';
        break;
    case '/employee' :
        require __DIR__ . '/views/employee/index.php';
        break;
    case '/customer' :
        require __DIR__ . '/views/customer/index.php';
        break;
    default:
        // http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}