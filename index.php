
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

if(isset($_GET['database_name']))
{
    if($_GET['database_name'] != ""){
        $mysql = Mysql::getInstance();
        $req = $mysql->query('SHOW DATABASES');
        foreach($req->fetchAll() as $database)
            $dbs[] = ($database[0]);
        if(!in_array($_GET['database_name'], $dbs)){
            $req = $mysql->query('CREATE DATABASE ' . $_GET['database_name']);
        }
        header("Location: ?controller=databases&action=show&name=".$_GET['database_name']);
    }
    else
        //header("Location: ?controller=databases&action=show&name=".$_GET['database_name']);
        header("Location: ?controller=databases&action=new");
    // echo "<script>alert('ERROR');</script>";
}
else
    require_once('views/index.php');


?>
