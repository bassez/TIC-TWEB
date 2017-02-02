<?php

class Ingredient
{
    /**
     * Ingredient constructor.
     * @param $_name
     * @param $_quantity
     * @param $_unit
     * @param $_recipeId
     */
    public function __construct($_name, $_quantity, $_unit, $_recipeId)
    {
        $this->id = null;
        $this->_name = $_name;
        $this->_quantity = $_quantity;
        $this->_unit = $_unit;
        $this->_recipeId = $_recipeId;
    }

    public static function  getAll () {
        $mysql = Mysql::getInstance();

        $req = $mysql->query("SELECT * FROM Ingredient");

        $list = [];
        foreach($req->fetchAll() as $ingredient) {
            array_push($list, new Ingredient($ingredient["id"], $ingredient["name"], $ingredient["quantity"], $ingredient["unity"], $ingredient["recipeId"]));
        }
        return $list;
    }

    public function  create () {
        $mysql = Mysql::getInstance();
        $sql = "INSERT INTO Ingredient (name, quantity, authorEmail) VALUES ('$this->_name', '$this->_authorName', '$this->_authorEmail')";
        $response = null;
        try {
            $res = $mysql->exec($sql);
            $response = ["success", "Succes", "Ingredient successfully created !"];
        }
        catch( PDOException $Exception ) {
            $response = ["danger", "Error", "Error during ingredient creation :( <br> MySQL said : " . $Exception->getMessage( )];
        }
        return $response;
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
     * @return Ingredient
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
     * @return Ingredient
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }

    /**
     * @param mixed $quantity
     * @return Ingredient
     */
    public function setQuantity($quantity)
    {
        $this->_quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->_unit;
    }

    /**
     * @param mixed $unit
     * @return Ingredient
     */
    public function setUnit($unit)
    {
        $this->_unit = $unit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecipeId()
    {
        return $this->_recipeId;
    }

    /**
     * @param mixed $recipeId
     * @return Ingredient
     */
    public function setRecipeId($recipeId)
    {
        $this->_recipeId = $recipeId;
        return $this;
    }

    private $_id;
    private $_name;
    private $_quantity;
    private $_unit;
    private $_recipeId;



}