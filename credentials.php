<?php
$GLOBALS['hote'] = "localhost";
$GLOBALS['port'] = "3306";
$GLOBALS['user'] = "root";
$GLOBALS['pass']= "";

class Mysql {
    public static $instance = NULL;

    private function __construct() {}
    private function __clone() {}
    public static function connexion($hote, $user, $pass, $port) {
        $GLOBALS['hote'] = $hote;
        $GLOBALS['user'] = $user;
        $GLOBALS['pass'] = $pass;
        $GLOBALS['port'] = $port;
        if(mysqli_connect($GLOBALS['hote'].":".$GLOBALS["port"], $GLOBALS['user'], $GLOBALS['pass']))  {
            echo "<script language='Javascript'>document.location.replace('../../index.php?controller=pages&action=home');</script>";

        }
        else
            echo "Connexion Refused";
    }

    public static function deconnexion() {
        $GLOBALS['hote'] = " ";
        $GLOBALS['user'] = " ";
        $GLOBALS['pass'] = " ";
        $GLOBALS['port'] = " ";
        echo '<script language="Javascript">document.location.replace("views/pages/login.php");</script>';
    }

    public static function checkConnexion() {
        if(!mysqli_connect($GLOBALS['hote'].":".$GLOBALS["port"], $GLOBALS['user'], $GLOBALS['pass']))
            header('Location: views/pages/login.php');
    }
    public static function getInstance() {

        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].'', $GLOBALS["user"], $GLOBALS["pass"], $pdo_options);
            // else{
            //   self::$instance = new PDO('mysql:host=localhost;dbname=mysql', 'root', '', $pdo_options);
            //   echo("ELSE YEAH");
            // }
        }
        return self::$instance;
    }

    public static function getDb($db_name) {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$db_name.'', $GLOBALS["user"], $GLOBALS["pass"], $pdo_options);
            // $fichier = 'fichier.php3?var='.$var.'&data='.$data;
        }
        return self::$instance;
    }

}
?>
