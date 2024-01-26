<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PokédexApp</title>
</head>
<body class="bg-red-500" style="background-color: #<?php echo $bgColor; ?>;">
<div>
<div class="bg-white w-4/5 h-16 mx-auto mt-5 flex justify-between items-center rounded-xl">
    <h1 class="text-red-500 font-bold text-3xl ml-5">Pokedex</h1>
    <div class="flex space-x-2 sm:space-x-4 mr-5 text-red-400 text-xl sm:text-2xl font-bold">
        <a href="<?=$router->generate("main-home")?>">Liste</a>
        <a href="<?=$router->generate("type-list")?>">Types</a>
    </div>
</div>