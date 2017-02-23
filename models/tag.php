<?php

class Tag
{
    /**
     * Tag constructor.
     * @param $_tag
     * @param $_value
     * @param $_recipeId
     */
    public function __construct($_tag, $_value)
    {
        $this->_id = null;
        $this->_tag = $_tag;
        $this->_value = $_value;
        $this->_recipeId = null;
    }

    public function  create () {
        $mysql = Mysql::getInstance();
        $sql = "INSERT INTO Tag (`tag`, `value`, `recipeId`) VALUES ('$this->_tag', '$this->_value', '$this->_recipeId')";
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