<?php

$peso = 70;
$altura = 1.85;
$imc = $peso / ($altura * $altura);

if($imc < 18.5){
    echo "Abaixo do  peso";
} else if( $imc >=18.5 && $imc < 24.9){
    echo "Peso normal";
} else if( $imc >=25 && $imc < 29.9){
    echo "Sobrepeso";
} else if( $imc >=30 && $imc < 34.9){
    echo "Obesidade grau I";
} else if( $imc >=35 && $imc < 39.9){
    echo "Obesidade grau II";
} else {
    echo "Obesidade Morbida";
}

echo PHP_EOL;
echo "Seu IMC é de = $imc";