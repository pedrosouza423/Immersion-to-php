<?php

//Array e loop lista

$idadeList = [19,20,17,10,64];

[$idadePedro, $idadeLucas, $idadeLuizinha] = $idadeList;

echo "A idade de Pedro é $idadePedro" .PHP_EOL;
echo "A idade de Lucas é $idadeLucas" .PHP_EOL;
echo "A idade de Luizinha é $idadeLuizinha" .PHP_EOL;


$idadeList[] = 20;

foreach($idadeList as $idade){
    echo $idade . PHP_EOL;
}

//count(array) conta quantos elementos tem em um array