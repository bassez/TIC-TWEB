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
        require_once ('models/recipe.php');
        require_once ('models/ingredient.php');

        //$name_results = Recipe::getAll();
        $name_results = Recipe::findByIngredient("tomate, zizi");

        require_once('views/pages/search.php');
    }
}