<?php

namespace App\Model;
use App\Utils\Database;
use App\Model\Type;
use PDO;

class Pokemon 
{

    private $id;
    private $name;
    private $hp;
    private $attack;
    private $defense;
    private $spe_attack;
    private $spe_defense;
    private $speed;
    private $number;

    public static function findAll(){
        $database = new Database();
        $pdo = $database->getPDO();        
        $sql = 'SELECT * FROM `pokemon`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
    }

    public static function find($id){
        $database = new Database();
        $pdo = $database->getPDO();        
        $sql = 'SELECT * FROM `pokemon` WHERE `id` = ' . $id;
        $pdoStatement = $pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public function getTypesByPokemon() {
        $database = new Database();
        $pdo = $database->getPDO();
    
        $sql = 'SELECT type.* FROM type
                JOIN pokemon_type ON type.id = pokemon_type.type_id
                WHERE pokemon_type.pokemon_number = ' . $this->number;
    
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Type::class);
        return $results;
    }

    //getter 
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getHp(){
        return $this->hp;
    }
    public function getAttack(){
        return $this->attack;
    }
    public function getDefense(){
        return $this->defense;
    }
    public function getSpe_attack(){
        return $this->spe_attack;
    }
    public function getSpe_defense(){
        return $this->spe_defense;
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function getNumber(){
        return $this->number;
    }
}