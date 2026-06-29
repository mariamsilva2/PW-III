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
    $idade = filter_input(type: INPUT_POST, var_name:  'idade', filter: FILTER_DEFAULT);
    $partido = filter_input(type: INPUT_POST, var_name:  'partido', filter: FILTER_DEFAULT);
    $datansc = filter_input(type: INPUT_POST, var_name:  'datanasc', filter: FILTER_DEFAULT);
    $datainicio = filter_input(type: INPUT_POST, var_name:  'datainicio', filter: FILTER_DEFAULT);
    $datafinal = filter_input(type: INPUT_POST, var_name: 'datafinal', filter: FILTER_DEFAULT);

    try {
        $sql = "INSERT INTO `governantes`(nome, idade, partido, datanasc, datainicio, datafinal) VALUES ('$nome', '$idade', '$partido', '$datansc', '$datainicio', '$datafinal')";
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