<?php 
namespace Zoo\models;

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
}




































?>