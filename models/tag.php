<?php

class Tag
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
     * @return Tag
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->_tag;
    }

    /**
     * @param mixed $tag
     * @return Tag
     */
    public function setTag($tag)
    {
        $this->_tag = $tag;
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
     * @return Tag
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
     * @return Tag
     */
    public function setRecipeId($recipeId)
    {
        $this->_recipeId = $recipeId;
        return $this;
    }

    private $_id;
    private $_tag;
    private $_value;
    private $_recipeId;
}