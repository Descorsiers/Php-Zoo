<?php 
namespace Zoo\models;

class Database {
    static private $instance = null;

    protected $db;

    public function __construct()
    {
        try {
            if(self::$instance === null){
                self::$instance = new \PDO('mysql:dbname=zoo;charset=utf8', 'root', '');
            }
            $this->db = self::$instance;
        } catch (\Throwable $th) {
            throw('Erreur : ' . $th = 'Erreur');
        }
    }
}





































?>