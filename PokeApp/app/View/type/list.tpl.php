<div class="w-4/5 mx-auto flex flex-wrap justify-center mt-5">
    <?php foreach ($types as $type): ?>
        <div class="w-full sm:w-1/2 lg:w-1/3 p-4 mt-5">
            <a href="<?=$router->generate('list-by-type', ['id' => $type->getId()])?>" 
            class="max-w-sm rounded-xl overflow-hidden shadow-lg m-4 px-6 py-4 flex justify-center font-bold text-xl" style="background-color: #<?= $type->getColor(); ?>">
                <?= $type->getName(); ?>
            </a>  
        </div>
    <?php endforeach; ?>
</div>

