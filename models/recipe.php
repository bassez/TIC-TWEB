<?php

class Recipe
{
    /**
     * Recipe constructor.
     * @param $_name
     * @param $_authorName
     * @param $_authorEmail
     */
    public function __construct($_name, $_authorName, $_authorEmail)
    {
        $this->_id = null;
        $this->_name = $_name;
        $this->_authorName = $_authorName;
        $this->_authorEmail = $_authorEmail;
        $this->_creationDate = null;
        $this->_pictureId = null;
    }

    public static function  getAll () {
        $mysql = Mysql::getInstance();

        $req = $mysql->query("SELECT * FROM Recipe ");

        $list = [];
        foreach($req->fetchAll() as $recipe) {
            array_push($list, new Recipe($recipe["id"], $recipe["name"], $recipe["authorName"], $recipe["authorEmail"], $recipe["creationDate"], $recipe["pictureId"]));
        }
        return $list;
    }

    public function  create () {
        $mysql = Mysql::getInstance();
        $sql = "INSERT INTO Recipe (name, authorName, authorEmail) VALUES ('$this->_name', '$this->_authorName', '$this->_authorEmail')";
        $response = null;
        try {
            $res = $mysql->exec($sql);
            $response = ["success", "Succes", "Recipe successfully created !"];
        }
        catch( PDOException $Exception ) {
            $response = ["danger", "Error", "Error during recipe creation :( <br> MySQL said : " . $Exception->getMessage( )];
        }
        return $response;
    }

    public function  delete () {

    }

    public function update () {

    }

    public static function compareRecipes($a, $b) {

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

    private $_id;
    private $_name;
    private $_authorName;
    private $_authorEmail;
    private $_creationDate;
    private $_pictureId;

}