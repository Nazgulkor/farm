<?php

require_once './vendor/autoload.php';

use App\Farm\Farm;
use App\Farm\Livestocks\ChickenLivestock;
use App\Farm\Livestocks\CowLivestock;

$farm = new Farm;

for($i = 0; $i < 20; $i++){

    $farm->getBarn()->addLivestock(new ChickenLivestock);
}
for($i = 0; $i < 10; $i++){
    $farm->getBarn()->addLivestock(new CowLivestock);
}
echo "Вывести на экран информацию о количестве каждого типа животных на ферме.\n";
$farm->countAllLivestockUniques();

// 7 раз (неделю) произвести сбор продукции (подоить коров и собрать яйца у кур).
for($i = 0; $i <= 7; $i++){
    $farm->getBarn()->collectProducts();
}
echo "Вывести на экран общее кол-во собранной за неделю продукции каждого типа.\n";
$farm->countAllProducUniques();

// Добавить на ферму ещё 5 кур и 1 корову (съездили на рынок, купили животных).
for($i = 0; $i < 5; $i++){
    $farm->getBarn()->addLivestock(new ChickenLivestock);
}
$farm->getBarn()->addLivestock(new CowLivestock);
echo "Снова вывести информацию о количестве каждого типа животных на ферме.\n";
$farm->countAllLivestockUniques();


echo "Снова 7 раз (неделю) производим сбор продукции и выводим результат на экран.\n";
for($i = 0; $i < 7; $i++){
    $farm->getBarn()->collectProducts();
}
$farm->countAllProducUniques();
