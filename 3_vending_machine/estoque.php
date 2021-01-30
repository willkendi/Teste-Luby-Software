<?php
require 'Classes/maquina.php';

$maquina = new Maquina;

$maquina->conectar();
$lista = $maquina->exibirEstoque();



?>

<html lang = "pt-br">
<head>
<meta charset="utf-8">
</head>
<body>

<table border = "1">
            <thead>
                <tr class="active">
                    <th>Descrição</th>
                    <th>Quantidade</th>
                   
                </tr>
            </thead>
            <tbody>
               <?php foreach($lista as $listas) : ?>
                   <tr>
                     <td><?=$listas['nome']?></td>
                     <td><?=$listas['quantidade']?></td>
                   </tr>
               <?php endforeach; ?>
            </tbody>
            </table>
            <a href = "index.php">Voltar</a>
 </body>
</html>



