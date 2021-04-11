<?php

for($a = 1; $a <=15; $a++){
    if($a == 13){
        continue;
    }
    echo "#$a" . PHP_EOL;
}

// $a = 1;
// while($a<=15){
//     echo "#$a" . PHP_EOL;
//     $a++;
// }