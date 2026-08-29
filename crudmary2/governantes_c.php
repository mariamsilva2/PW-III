<?php
require('conexao.php');

$id_gov = filter_input(type:INPUT_GET, var_name: 'id_gov', filter: FILTER_DEFAULT);

// filter_input pega o valor do id_gov 

$sql = "SELECT * FROM `governantes` WHERE id_gov = :id";
$statement = $pdo->prepare(query: $sql);

// o prepare é usado para preparar a consulta SQL, e o execute é usado para executar a consulta com os parâmetros fornecidos.

$statement->execute([':id' => $id_gov]);
$result = $statement->fetch(mode: PDO::FETCH_ASSOC);

// diferente do fetchAll, o fetch busca apenas um resultado.
 
 

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container"> 
    <div class="container-filho">
  
    <button><a href="governantes.php">Voltar</a></button>

    <p><b>Nome:</b> <\?= $result['nome'] ?></p>
    <p><b>Partido:</b> <\?= $result['partido'] ?></p>
    <p><b>Idade:</b> <\?= $result['idade'] ?></p>
    <p><b>Data de Nascimento:</b> <\?= $result['datanasc'] ?></p>
    <p><b>Data de Início:</b> <\?= $result['datainicio'] ?></p>
    <p><b>Data de Término:</b> <\?= $result['datafinal'] ?></p>

</div>
</div>
    
</body>
</html>