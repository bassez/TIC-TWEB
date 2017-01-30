<?php

class Ingredient
{
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