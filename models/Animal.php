<?php 
namespace Zoo\models;

use PDO;
use Zoo\models\Database;

class Animal extends Database{
    private $id;
    private $name;
    private $description;
    private $species;
    private $created_at;
    private $id_enclosure;

    /**
     * Function that return the animal's id 
     * @return number
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Function that change the animal's id 
     * @return number
     * @param number $id
     */
    public function setId($id){
        if(empty($id)) throw new \Exception('L\'id est obligatoire !');
        if (!is_numeric($id)) throw new \Exception('L\'id de l\'animal doit être un entier');
        $id = intval($id);
        if ($id <= 0) throw new \Exception('L\'id de l\'animal doit être supérieur à 0');

        $this->id = $id;
    }

    /**
     * Function that return the animal's name 
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * Function that change the animal's name 
     * @param string $name
     */
    public function setName($name){
        if (empty($name)) throw new \Exception('Le nom de l\'animal est obligatoire');

        $this->name = $name;
    }

    /**
     * Function that return the animal's description 
     * @return number
     */
    public function getDescription(){
        return $this->description;
    }

    /**
     * Function that change the animal's description 
     * @param string $description
     */
    public function setDescription($description){
        if (empty($description)) throw new \Exception('L\'a description de l\'animal est obligatoire');

        $this->description = $description;
    }

    /**
     * Function that return the animal's creation date
     * @return date
     */
    public function getCreated_at(){
        return $this->created_at;
    }

    /**
     * Function that return the animal's species 
     * @return number
     */
    public function getSpecies(){
        return $this->species;
    }

    /**
     * Function that change the animal's species 
     * @param string $species
     */

    public function setspecies($species){
        if (empty($species)) throw new \Exception('L\'espèce de l\'animal est obligatoire');

        $this->species = $species;
    }

    /**
     * Function that return the enclosure's id  where the animal is in;
     * @return number
     */

    public function getId_enclosure(){
        return $this->id_enclosure;
    }

    /**
     * Function that change the enclosure's id of the animal
     * @return number
     * @param number $id_enclosure
     */
    public function setId_enclosure($id_enclosure){
        if(empty($id_enclosure)) throw new \Exception('L\'id de l\'enclos  est obligatoire !');
        if (!is_numeric($id_enclosure)) throw new \Exception('L\'id de l\'enclos de l\'animal doit être un entier');
        $id_enclosure = intval($id_enclosure);
        if ($id_enclosure <= 0) throw new \Exception('L\'id de l\'enclos de l\'animal doit être supérieur à 0');

        $this->id_enclosure = $id_enclosure;
    }

    /**
     * Function that get all existing animals in the database
     * @return PDOStatement
     */ 
    
    public function getAll(){
        $sql = 'SELECT * FROM `animal` WHERE `id_enclos` = :id_enclosure';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id_enclosure', $this->id_enclosure, PDO::PARAM_STR);
        $stmt->execute();
        $animals = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $animals;
    }

    /**
     * Function that get one existing animal in the database by it's id
     * @return PDOStatement
     */

    public function getOne(){
        $sql = 'SELECT * FROM `animal` WHERE `id` = :id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->execute();
        $animal = $stmt->fetch(PDO::FETCH_OBJ);
        return $animal;
    }

    /**
     * Update an animal's information on database
     * @return PDOStatement
     */

    public function update(){
        $sql = 'UPDATE `animal` SET `name`= :name, `description`= :description, `species` = :species, `id_enclos` = :id_enclosure  WHERE `id` = :id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindValue(':species', $this->species, PDO::PARAM_STR);
        $stmt->bindValue(':id_enclosure', $this->id_enclosure, PDO::PARAM_STR);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }

    /**
     * Add a new animal to the actual enclosure in the database
     * @return PDOStatement
     */

    public function create(){
        $sql = 'INSERT INTO `animal`(`name`, `description`, `species`, `id_enclos`) VALUES (:name,:description,:species,:id_enclosure)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindValue(':species', $this->species, PDO::PARAM_STR);
        $stmt->bindValue(':id_enclosure', $this->id_enclosure, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }

    /**
     * Delete an animal of the actual enclosure in the database by it's id
     * @return PDOStatement
     */

    public function delete(){
        $sql = 'DELETE FROM `animal` WHERE `id` = :id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }

}




































?>