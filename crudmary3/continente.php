<?php 

    require('conexao.php');
    $sql = "SELECT * FROM `continentes`";
    $statement = $pdo->query(query: $sql);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     
<form action="continentes_cadastro.php" method="post">

<div class="container"> 
    <div class="container-filho">
    <button onClick="history.back()">Voltar</button>    
    </div>
    <div class="container-filho"> 
       
         <h1> Continentes </h1>     
           
                    <div class="input_box">
                        <label for="nome">Nome
                        <div class="input_field">
                                <input type="text" id="nome" name="nome" placeholder=" ">
                            </div> 
                        </label>
                    </div>

                    <div class="input_box">
                        <label for="populacao">População
                        <div class="input_field">
                                <input type="int" id="populacao" name="populacao" placeholder=" ">
                            </div> 
                        </label>
                    </div>

                    
                    <div class="input_box">
                        <label for="area">Área
                        <div class="input_field">
                                <input type="int" id="area" name="area" placeholder=" ">
                            </div> 
                        </label>
                    </div>

                    
                    <div class="input_box">
                        <label for="total">Total de Países
                        <div class="input_field">
                                <input type="int" id="total" name="total" placeholder=" ">
                            </div> 
                        </label>
                    </div>
 
</div>  
<div class="container-filho">
                    <button type="submit" value="Cadastrar"> Cadastrar </button>          
</div>
 

 <table>
   
    <thead>
        <tr>
            <th>Nome</th>
            <th>Opções</th>
        </tr>
    </thead>

    <tbody>
    <?php  
    foreach ($result as $row):
    ?>

        <tr>
            <td><?= $row['nome'] ?></td>
            <td>
                <a href="continentes_editar.php?id=<?= $row['id_cont'] ?>">Editar</a>
                <a href="continentes_excluir.php?id=<?= $row['id_cont'] ?>">Excluir</a>
                <a href="continentes_.php?id=<?= $row['id_cont'] ?>">Consultar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table> 

</div>

</form>                  
 

</body>
</html>