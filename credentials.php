<?php
$GLOBALS['hote'] = "localhost";
$GLOBALS['port'] = "3306";
$GLOBALS['user'] = "root";
$GLOBALS['pass']= "";
$GLOBALS["db_name"] = "marmiton";

class Mysql {
    private static $_instance = NULL;

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$_instance = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$GLOBALS["db_name"].'', $GLOBALS["user"], $GLOBALS["pass"], $pdo_options);
        }
        return self::$_instance;
    }

}
?>
