<?php
$stats = [
    'Attaque' => $pokemon->getAttack(),
    'Défense' => $pokemon->getDefense(),
    'Attaque spéciale' => $pokemon->getSpe_attack(),
    'Défense spéciale' => $pokemon->getSpe_defense(),
    'Vitesse' => $pokemon->getSpeed(),
    'PV' => $pokemon->getHp(),
];
?>

<div class="flex flex-col  items-center h-screen mt-20">
    <div class="flex flex-col justify-center items-center text-center">
    <p class="text-5xl sm:text-4xl text-white font-bold">
        Détails de <?php echo $pokemon->getName() ?>
    </p>
        <img src="../../img/<?php echo $pokemon->getNumber(); ?>.png" alt="<?php echo $pokemon->getName(); ?>">
    </div>
    <div>
        <div class="flex justify-center items-center flex-wrap">
            <?php foreach ($types as $type): ?>
                <p class=" flex items-center justify-center rounded overflow-hidden shadow-lg text-white font-bold text-center h-16 w-32 m-5" 
                style="background-color: #<?= $type->getColor(); ?>">
                <?php echo $type->getName(); ?>
                </p>
            <?php endforeach; ?>
        </div>
            <p class="text-3xl sm:text-2xl font-bold text-white text-center">Statistiques</p>
        <div class="flex flex-row">
            <div>
                <?php foreach ($stats as $name => $value): ?>
                    <p class="text-white font-bold mt-3 w-64"><?php echo $name; ?></p>
                <?php endforeach; ?>
            </div>
            <div>
                <?php foreach ($stats as $value): ?>
                    <p class="mt-3 text-white font-bold"><?php echo $value; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="hidden sm:block">
                <?php foreach ($stats as $value): ?>
                    <div class="w-64 h-5 bg-black ml-4 mt-4 rounded">
                        <div class="h-full text-center text-xs text-white bg-white rounded" 
                        style="width: <?php echo ($value / 255) * 100; ?>%">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>