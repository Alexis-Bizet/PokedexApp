<div class="w-4/5 mx-auto flex flex-wrap justify-center">
    <?php foreach ($pokemons as $pokemon): ?>
        <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
            <div class="max-w-sm rounded-xl overflow-hidden shadow-lg m-4 bg-red-800">
                <a href="<?=$router->generate('pokemon-detail', ['id' => $pokemon->getId()])?>" >
                <img class="w-3/5 mx-auto mt-2" src="../../img/<?php echo $pokemon->getNumber(); ?>.png">                
                <div class="px-6 py-4 flex justify-center">
                    <div class="font-bold text-xl mr-2">#<?php echo $pokemon->getNumber(); ?></div>
                    <div class="font-bold text-xl"><?php echo $pokemon->getName(); ?></div>
                </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

