<?php

$idade = 16;
$pessoas = 1;

echo "Você só pode entrar se tiver a partir 18 anos" . PHP_EOL ;
echo "Ou a partir de 16 anos acompanhado." . PHP_EOL;


if ($idade >= 18) {
    echo "Sua idade é $idade anos. Pode entrar sozinho";
}else if($idade >= 16 && $pessoas > 1){
    echo "Você possue $idade anos, mas está acompanhado. Pode entrar";
}else{
    echo "Sua idade é $idade anos e você não está acompanhado. Você não possui idade suficiente para entrar.";

}