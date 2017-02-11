<?php

class recipeController
{
    public function create() {
        require_once ('models/recipe.php');
        require_once ('models/ingredient.php');
        require_once ('Utils/Mail.php');

        if (isset($_POST["ingredients"]) && isset($_POST["author"]) && isset($_POST["recipe"]))  {

            $hey = new Recipe($_POST["recipe"]["name"], $_POST["author"]["name"], $_POST["author"]["email"]);

            foreach ($_POST["ingredients"] as $ingredient) {
                $hey->addIngredient(
                    new Ingredient($ingredient["name"], $ingredient["quantity"], $ingredient["unite"]));
            }

            var_dump($hey->create());
            $mail = new Mail($_POST["author"]["email"],
                             "megasyl20@gmail.com",
                             "Recette acceptée !!",
                             "Félicitations, votre recette est desormais accessible à tous sur notre site Maremiton ! <br>A bientôt !");
            $mail->send();
            require_once('views/pages/home.php');
        }
        else
        require_once ('views/pages/error.php');
    }
}