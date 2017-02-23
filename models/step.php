<?php

/**
 * Created by PhpStorm.
 * User: sylvainlasjunies
 * Date: 23/02/17
 * Time: 22:42
 */
class Step
{
    private $_id;
    private $_value;

    /**
     * step constructor.
     * @param $_value
     */
    public function __construct($_value)
    {
        $this->_id = null;
        $this->_value = $_value;
        $this->_recipeId = null;
    }

    public function  create () {
        $mysql = Mysql::getInstance();
        $sql = "INSERT INTO Step (`value`, `recipeId`) VALUES ('$this->_value', '$this->_recipeId')";
        $response = null;
        try {
            $res = $mysql->exec($sql);
            $this->_id = $mysql->lastInsertId();
            $response = ["success", "Succes", "Tag $this->_id successfully created !"];
        }
        catch( PDOException $Exception ) {
            $response = ["danger", "Error", "Error during Tag creation :( <br> MySQL said : " . $Exception->getMessage( )];
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
     * @return step
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * @param mixed $value
     * @return step
     */
    public function setValue($value)
    {
        $this->_value = $value;
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
     * @return step
     */
    public function setRecipeId($recipeId)
    {
        $this->_recipeId = $recipeId;
        return $this;
    }
    private $_recipeId;

}