<?php
// Tipo objeto em JavaScript
// Aqui é um array associativo

//Inlcuindo funções
require_once 'funcoes.php';

// Código e dev
$devs = [
    '038.986.861-24' => [
        'titular' => 'Pedro',
        'idade' => 19,
        'saldo' => 3500
    ],
    '099.654.861-12' => [
        'titular' => 'Maik',
        'idade' => 18,
        'saldo' => 400
    ],
    '223.358.987-37' => [
        'titular' => 'Fernando',
        'idade' => 20,
        'saldo' => 350
    ],

];

// $devs['223.358.987-37'] = sacar($devs['223.358.987-37'], 1500);
// $devs['038.986.861-24'] = depositar($devs['038.986.861-24'], 12000);
// titularComLetrasMaiusculas($devs['038.986.861-24']);
// unset($devs['099.654.861-12']);

// //Percorrer o array
// echo '<ul>';
// foreach($devs as $cpf => $conta){
//     exibeConta($conta);
// }
// echo '</ul>';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro site em php</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($devs as $cpf => $conta) { ?>
            <dt>
                <h2><?php echo $conta['titular'];?> - <?php echo $cpf;?></h2>
            </dt>
            <dd>
                Saldo: <?php echo $conta['saldo'];?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>