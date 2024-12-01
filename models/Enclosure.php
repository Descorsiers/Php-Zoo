<?php 
namespace Zoo\models;

use PDO;
use Zoo\models\Database;

class Enclosure extends Database{
    private $id;
    private $name;
    private $description;
    private $created_at;

    /**
     * Function that return the enclosure's id 
     * @return number
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Function that change the enclosure's id 
     * @return number
     * @param number $id
     */
    public function setId($id){
        if(empty($id)) throw new \Exception('L\'id est obligatoire !');
        if (!is_numeric($id)) throw new \Exception('L\'id de l\'enclos doit être un entier');
        $id = intval($id);
        if ($id <= 0) throw new \Exception('L\'id de l\'enclos doit être supérieur à 0');

        $this->id = $id;
    }

    /**
     * Function that return the enclosure's name 
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * Function that change the enclosure's name 
     * @param string $name
     */
    public function setName($name){
        if (empty($name)) throw new \Exception('Le nom de l\'enclos est obligatoire');
        // if (strlen($name) < 3) throw new \Exception('Le nom de l\'enclos doit contenir au moins 3 caractères');

        $this->name = $name;
    }

    /**
     * Function that return the enclosure's description 
     * @return number
     */
    public function getDescription(){
        return $this->description;
    }

    /**
     * Function that change the enclosure's description 
     * @param string $description
     */
    public function setDescription($description){
        if (empty($description)) throw new \Exception('L\'a description de l\'enclos est obligatoire');

        $this->description = $description;
    }

    /**
     * Function that return the enclosure's creation date
     * @return date
     */
    public function getCreated_at(){
        return $this->created_at;
    }

    /**
     * Function that get all existing enclosure in the database
     * @return PDOStatement
     */
    
    public function getAll(){
        $sql = 'SELECT * FROM `enclos`';
        $stmt = $this->db->query($sql);
        $enclosures = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $enclosures;
    }

    /**
     * Function that get one existing enclosure in the database by an id
     * @return PDOStatement
     */

    public function getOne(){
        $sql = 'SELECT * FROM `enclos` WHERE `id` = :id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->execute();
        $enclosure = $stmt->fetch(PDO::FETCH_OBJ);
        return $enclosure;
    }

    /**
     * Update an enclosure's information on database
     * @return PDOStatement
     */

    public function update(){
        $sql = 'UPDATE `enclos` SET `name`= :name, `description`= :description WHERE `id` = :id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }

    /**
     * Add a new enclosure to the database
     * @return PDOStatement
     */

    public function create(){
        $sql = 'INSERT INTO `enclos`(`name`, `description`) VALUES (:name,:description)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }

    public function delete(){
        $sql = 'DELETE FROM `enclos` WHERE `id` = :id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }
}





















?>