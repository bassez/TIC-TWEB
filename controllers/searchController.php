<?php

/**
 * Created by PhpStorm.
 * User: sylvainlasjunies
 * Date: 22/02/17
 * Time: 15:54
 */
class searchController
{
    public function search() {
        require_once('models/step.php');
        require_once('models/tag.php');
        require_once ('models/recipe.php');
        require_once ('models/ingredient.php');

        //$name_results = Recipe::getAll();
        $query = urldecode($_GET["query"]);
        if (count($query) > 300) {
            require_once('views/pages/search.php');
            return;
        }
        $name_results = Recipe::findByIngredient($query);

        require_once('views/pages/search.php');
    }
}