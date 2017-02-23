<?php

class recipeController
{
    public function create()
    {
        require_once('models/recipe.php');
        require_once('models/ingredient.php');
        require_once('Utils/Mail.php');
        $uploadfile = $GLOBALS["uploaddir"] . basename($_FILES["recipe_pic"]["name"]);

        if (isset($_POST["ingredients"]) && isset($_POST["author"]) && isset($_POST["recipe"])) {
            $hey = new Recipe($_POST["recipe"]["name"], $_POST["author"]["name"], $_POST["author"]["mail"], $_POST["recipe"]["time"], $_POST["recipe"]["difficulty"]);

            if (isset($uploadfile)) {
                move_uploaded_file($_FILES["recipe_pic"]["tmp_name"], $uploadfile);
                $hey->setPictureId(basename($_FILES["recipe_pic"]["name"]));
            }

            foreach ($_POST["ingredients"] as $ingredient)
                $hey->addIngredient(new Ingredient($ingredient["name"], $ingredient["quantity"], $ingredient["unit"]));


            echo $hey->create()[2];
            $mail = new Mail($_POST["author"]["mail"],
                "megasyl20@gmail.com",
                "Recette acceptée !!",
                "Félicitations, votre recette est desormais accessible à tous sur notre site Maremiton ! <br>A bientôt !");
            $mail->send();
            $datas = $hey;
            require_once('views/pages/details.php');
        } else
            require_once('views/pages/error.php');
    }

    public function details()
    {
        require_once('models/recipe.php');
        require_once('models/ingredient.php');

        $datas = Recipe::findById($_GET["id"]);
        require_once('views/pages/details.php');
    }
}