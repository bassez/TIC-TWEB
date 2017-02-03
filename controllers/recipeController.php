<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/02/17
 * Time: 01:26
 */
class recipeController
{
    public function create() {
        require_once ('models/recipe.php');
        require_once ('models/ingredient.php');

        if (isset($_POST["ingredients"]) && isset($_POST["author"]) && isset($_POST["recipe"]))  {

            $hey = new Recipe($_POST["recipe"]["name"], $_POST["author"]["name"], $_POST["author"]["email"]);

            foreach ($_POST["ingredients"] as $ingredient) {
                $hey->addIngredient(
                    new Ingredient($ingredient["name"], $ingredient["quantity"], $ingredient["unit"]));
            }

            var_dump($hey->create());
            require_once('views/pages/home.php');
        }
        else
        require_once ('views/pages/error.php');
        var_dump($_POST);
    }
}