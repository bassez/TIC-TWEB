<?php

class Recipe
{
    /**
     * Recipe constructor.
     * @param $_name
     * @param $_authorName
     * @param $_authorEmail
     * @param $_cooking_time
     * @param $_difficulty
     */
    public function __construct($_name, $_authorName, $_authorEmail, $_cooking_time, $_difficulty)
    {
        $this->_id = null;
        $this->_name = $_name;
        $this->_authorName = $_authorName;
        $this->_authorEmail = $_authorEmail;
        $this->_creationDate = null;
        $this->_pictureId = "default_picture";
        $this->_ingredients = [];

        $this->_cooking_time = $_cooking_time;
        $this->_difficulty = $_difficulty;
    }

    public static function findByIngredient($ingredients)
    {
        $ingredients_parsed = explode(", ", $ingredients);
        if (count($ingredients_parsed) == 0)
            return;
        $mysql = Mysql::getInstance();

        $sql = "SELECT * FROM Ingredient WHERE ";
        $i = false;
        foreach ($ingredients_parsed as $ingredient) {
            if ($i)
                $sql .= " AND ";
            $i = true;
            $sql .= " name LIKE '%" . $ingredient. "%'";
        }
        $sql .= ";";
        echo $sql;
        $req = $mysql->query($sql);
        self::fetchDatas($mysql, $req);

    }

    public static function findById($id)
    {
        $mysql = Mysql::getInstance();
        $req = $mysql->query("SELECT * FROM Recipe WHERE id = $id;");

        $recipe = $req->fetch();

        $rid = $recipe["id"];
        $ireq = $mysql->query("SELECT * FROM Ingredient WHERE recipeId='$rid';");
        $new_recipe = new Recipe($recipe["name"], $recipe["authorName"], $recipe["authorEmail"], $recipe["cooking_time"] , $recipe["difficulty"]);
        $new_recipe->setCreationDate(date('d/m/Y',strtotime($recipe["creationDate"])));
        $new_recipe->setPictureId($recipe["pictureId"]);
        $new_recipe->setId($rid);
        foreach ($ireq->fetchAll() as $ingredient) {
            echo "I";
            $in = new Ingredient($ingredient["name"], $ingredient["quantity"], $ingredient["unity"]);
            $in->setId($ingredient["id"])->setRecipeId($ingredient["recipeId"]);
            $new_recipe->addIngredient($in);
        }

        return $new_recipe;
    }

    public static function getById ($id) {

    }

    public static function getAll()
    {
        $mysql = Mysql::getInstance();

        $req = $mysql->query("SELECT * FROM Recipe;");

        $list = [];
        foreach ($req->fetchAll() as $recipe) {
            $rid = $recipe["id"];
            $ireq = $mysql->query("SELECT * FROM Ingredient WHERE recipeId='$rid';");
            $new_recipe = new Recipe($recipe["name"], $recipe["authorName"], $recipe["authorEmail"], $recipe["cooking_time"] , $recipe["difficulty"]);
            $new_recipe->setCreationDate(date('d/m/Y',strtotime($recipe["creationDate"])));
            $new_recipe->setPictureId($recipe["pictureId"]);
            $new_recipe->setId($rid);
            foreach ($ireq->fetchAll() as $ingredient) {
                echo "I";
                $in = new Ingredient($ingredient["name"], $ingredient["quantity"], $ingredient["unity"]);
                $in->setId($ingredient["id"])->setRecipeId($ingredient["recipeId"]);
                $new_recipe->addIngredient($in);
            }

            array_push($list, $new_recipe);
        }
        return $list;

    }

    public function create()
    {
        $mysql = Mysql::getInstance();
        $sql = "INSERT INTO Recipe (name, authorName, authorEmail, pictureId, cooking_time, difficulty) VALUES ('$this->_name', '$this->_authorName', '$this->_authorEmail', '$this->_pictureId', '$this->_cooking_time', '$this->_difficulty')";
        $response = null;
        try {
            $res = $mysql->exec($sql);
            $this->_id = $mysql->lastInsertId();
            foreach ($this->_ingredients as $ingredient) {
                $ingredient->setRecipeId($this->_id);
                var_dump($ingredient->create());
            }
            $response = ["success", "Succes", "Recipe $this->_id successfully created !"];
        } catch (PDOException $Exception) {
            $response = ["danger", "Error", "Error during recipe creation :( <br> MySQL said : " . $Exception->getMessage()];
        }
        return $response;
    }

    public function delete()
    {

    }

    public function update()
    {

    }

    public static function compare($a, $b)
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     * @return Recipe
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     * @return Recipe
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->_authorName;
    }

    /**
     * @param mixed $authorName
     * @return Recipe
     */
    public function setAuthorName($authorName)
    {
        $this->_authorName = $authorName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorEmail()
    {
        return $this->_authorEmail;
    }

    /**
     * @param mixed $authorEmail
     * @return Recipe
     */
    public function setAuthorEmail($authorEmail)
    {
        $this->_authorEmail = $authorEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->_creationDate;
    }

    /**
     * @param mixed $creationDate
     * @return Recipe
     */
    public function setCreationDate($creationDate)
    {
        $this->_creationDate = $creationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictureId()
    {
        return $this->_pictureId;
    }

    /**
     * @param mixed $pictureId
     * @return Recipe
     */
    public function setPictureId($pictureId)
    {
        $this->_pictureId = $pictureId;
        return $this;
    }

    /**
     * @param Ingredient $ingredient
     * @return Recipe
     */
    public function addIngredient($ingredient)
    {
        array_push($this->_ingredients, $ingredient);
        return $this;
    }

    /**
     * @return array
     */
    public function getIngredients()
    {
        return $this->_ingredients;
    }

    /**
     * @return int
     */
    public function getCookingTime()
    {
        return $this->_cooking_time;
    }

    /**
     * @param int $cooking_time
     * @return Recipe
     */
    public function setCookingTime($cooking_time)
    {
        $this->_cooking_time = $cooking_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getDifficulty()
    {
        return $this->_difficulty;
    }

    /**
     * @param string $difficulty
     * @return Recipe
     */
    public function setDifficulty($difficulty)
    {
        $this->_difficulty = $difficulty;
        return $this;
    }

    private $_id;
    private $_name;
    private $_authorName;
    private $_authorEmail;
    private $_creationDate;
    private $_pictureId;
    private $_ingredients;
    private $_cooking_time;
    private $_difficulty;
}