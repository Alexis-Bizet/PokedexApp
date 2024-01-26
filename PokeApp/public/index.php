<?php

use App\Controller\ErrorController;
use App\Controller\PokemonController;
use App\Controller\TypeController;


require_once '../vendor/autoload.php';
$router = new AltoRouter();


$router->map(
    'GET',
    '/PokeApp/public/',
    [
        'method' => 'list',
        'controller' => PokemonController::class 
    ],
    'main-home'
);

$router->map(
    'GET',
    '/PokeApp/public/type/',
    [
        'method' => 'list',
        'controller' => TypeController::class 
    ],
    'type-list'
);

$router->map(
    'GET',
    '/PokeApp/public/type/[i:id]',
    [
        'method' => 'listByType',
        'controller' => TypeController::class 
    ],
    'list-by-type'
);

$router->map(
    'GET',
    '/PokeApp/public/pokemon/[i:id]',
    [
        'method' => 'pokemonDetail',
        'controller' => PokemonController::class 
    ],
    'pokemon-detail'
);


$match = $router->match();
$dispatcher = new Dispatcher($match, '\App\Controller\ErrorController::err404');
$dispatcher->dispatch();
?>





