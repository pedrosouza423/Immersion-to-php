<?php

//Array e loop lista

$idadeList = [19,20,17];

$idadeList[] = 20;

foreach($idadeList as $idade){
    echo $idade . PHP_EOL;
}

//count(array) conta quantos elementos tem em um array