<?php

namespace App\Controller;
use App\Model\Type;

class TypeController extends CoreController
{
    public function list(){
    
        $typeModel = new Type();
        $types = $typeModel->findAll();
        $this->show('type/list' , [
            'types' => $types
        ]);
    }
    
    public function listByType($id) {

        $typeModel = new Type();
        $types = $typeModel->find($id);
        $type = $types[0];
        
        $pokemons = $type->getPokemonsByType();

        $this->show('type/listByType'
        , [
            'type' => $type,
            'pokemons' => $pokemons,
            'bgColor' => $type->getColor()
        ]);
    }
}
