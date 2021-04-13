<?php
// Tipo objeto em JavaScript
// Aqui é um array associativo

// Código e dev
$devs = [
    '038.986.861-24' => [
        'nome' => 'Pedro',
        'idade' => 19,
        'tecnologias' => ['JavaScript', 'React', 'NodeJs']
    ],
    '099.654.861-12' => [
        'nome' => 'Roger',
        'idade' => 18,
        'tecnologias' => ['JavaScript', 'React']
    ],
    '223.358.987-37' => [
        'nome' => 'Lucas',
        'idade' => 20,
        'tecnologias' => ['HTML', 'CSS']
    ],

];

// echo $devs[1]['nome'];

$devs [] = [
    'nome' => 'Luizinha',
    'idade' => 17,
    'tecnologias' => ['photoshop','HTML','CSS']
];

foreach($devs as $cpf => $dev){
    echo $cpf . " ". $dev['nome'] . PHP_EOL;
}