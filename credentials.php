<?php
$GLOBALS['hote'] = "localhost";
$GLOBALS['port'] = "3306";
$GLOBALS['user'] = "root";
$GLOBALS['pass']= "root";
$GLOBALS["db_name"] = "marmiton";

class Mysql {
    public static $instance = NULL;

    private function __construct() {}
    private function __clone() {}

    public static function deconnexion() {
        $GLOBALS['hote'] = " ";
        $GLOBALS['user'] = " ";
        $GLOBALS['pass'] = " ";
        $GLOBALS['port'] = " ";
        echo '<script language="Javascript">document.location.replace("views/pages/login.php");</script>';
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$GLOBALS["db_name"].'', $GLOBALS["user"], $GLOBALS["pass"], $pdo_options);
        }
        return self::$instance;
    }

}
?>
