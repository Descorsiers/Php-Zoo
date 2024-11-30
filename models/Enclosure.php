<?php 
namespace Zoo\models;

use Zoo\models\Database;

class Enclos extends Database{
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
    
}





















?>