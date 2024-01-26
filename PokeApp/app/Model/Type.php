<?php

namespace App\Model;
use App\Utils\Database;
use App\Model\Pokemon;
use PDO;

class Type 
{

    private $id;
    private $name;
    private $color;

    public static function findAll(){
        $database = new Database();
        $pdo = $database->getPDO();        
        $sql = 'SELECT * FROM `type`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
    }

    public static function find($id){
        $database = new Database();
        $pdo = $database->getPDO();        
        $sql = 'SELECT * FROM `type` WHERE `id` = ' . $id;
        $pdoStatement = $pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public function getPokemonsByType() {
        $database = new Database();
        $pdo = $database->getPDO();
    
        $sql = 'SELECT pokemon.* FROM pokemon
                JOIN pokemon_type ON pokemon.number = pokemon_type.pokemon_number
                WHERE pokemon_type.type_id = ' . $this->id;
    
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Pokemon::class);
            return $results;
    }


    //getter 
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;
    }
}