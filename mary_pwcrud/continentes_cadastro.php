<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
    <div class="container-filho">
        <h2>Cadastro efetivado com sucesso! </h2>
        <button onClick="history.back()">Voltar</button>
</div>
</div>

<?php

    require('conexao.php');

    $nome = filter_input(type: INPUT_POST, var_name: 'nome', filter: FILTER_DEFAULT);
    $populacao = filter_input(type: INPUT_POST, var_name:  'populacao', filter: FILTER_DEFAULT);
    $area = filter_input(type: INPUT_POST, var_name:  'area', filter: FILTER_DEFAULT);
    $total = filter_input(type: INPUT_POST, var_name:  'total', filter: FILTER_DEFAULT);

    try {
        $sql = "INSERT INTO `continentes`(nome, populacao, area, total) VALUES ('$nome', '$populacao', '$area', '$total')";
        // faz a inserção
        $statement = $pdo->query(query: $sql); //executa a query  
    } catch (PDOException $e) //serve caso haja algum erro na conexão
    {
        echo 'Ops, algo deu errado:' . $e->getMessage();
        exit;
        // echo e getMessage() para mostrar o erro
    }  

?>

</body>
</html>