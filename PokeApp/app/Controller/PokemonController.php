<?php

namespace App\Controller;
use App\Model\Pokemon;

class PokemonController extends CoreController
{
    public function list(){
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAll();
        $this->show('main/home' , [
            'pokemons' => $pokemons
        ]);
    }

    public function pokemonDetail($id) {

        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->find($id);
        $pokemon = $pokemons[0];
        
        $types = $pokemon->getTypesByPokemon();

        $this->show('pokemon/detail'
        , [
            'pokemon' => $pokemon,
            'types' => $types,
        ]);
    }
}