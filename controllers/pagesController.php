<?php

class PagesController
{
    public function home()
    {
        require_once('models/step.php');
        require_once('models/tag.php');
        require_once('models/recipe.php');
        require_once('models/ingredient.php');

        $recents = Recipe::findRecent();

        require_once('views/pages/home.php');
    }

    public function error()
    {
        require_once('views/pages/error.php');
    }
}

?>
