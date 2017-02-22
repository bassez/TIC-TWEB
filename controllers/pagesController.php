<?php

class PagesController
{
    public function home()
    {
        require_once('models/ingredient.php');
        var_dump(Ingredient::getAll());
        //require_once('views/pages/home.php');
    }

    public function error()
    {
        require_once('views/pages/error.php');
    }
}

?>
