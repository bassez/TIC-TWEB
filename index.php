
<link rel="icon" href="favicon.ico">
<title>Marmiton</title>
<meta charset="UTF-8_unicode_ci">
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once('credentials.php');

$pdo = Mysql::getInstance();

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
} else {
    $controller = 'pages';
    $action     = 'home';
}

    require_once('views/index.php');


?>
