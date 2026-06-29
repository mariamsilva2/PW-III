   <?php 

    require('conexao.php');
    $sql = "SELECT * FROM `governantes`";
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




<form action="governantes_processar.php" method="post">


<div class="container"> 
    <div class="container-filho">
    <button onClick="history.back()">Voltar</button>    
    </div>
    <div class="container-filho"> 
       
         <h1> Governantes </h1>     
           
                    <div class="input_box">
                        <label for="nome">Nome
                        <div class="input_field">
                                <input type="text" id="nome" name="nome" placeholder=" ">
                            </div> 
                        </label>
                    </div>

                    <div class="input_box">
                        <label for="idade">Idade
                        <div class="input_field">
                                <input type="int" id="idade" name="idade" placeholder=" ">
                            </div> 
                        </label>
                    </div>

                    
                    <div class="input_box">
                        <label for="partido">Partido
                        <div class="input_field">
                                <input type="text" id="partido" name="partido" placeholder=" ">
                            </div> 
                        </label>
                    </div>

                    
                    <div class="input_box">
                        <label for="datanasc">Data de Nascimento
                        <div class="input_field">
                                <input type="date" id="datanasc" name="datanasc" placeholder=" ">
                            </div> 
                        </label>
                    </div>

                    
                    <div class="input_box">
                        <label for="datainicio">Data Inicio do Mandato
                        <div class="input_field">
                                <input type="date" id="datainicio" name="datainicio" placeholder=" ">
                            </div> 
                        </label>
                    </div> 

                    <div class="input_box">
                        <label for="datafinal">Data Final do Mandato
                        <div class="input_field">
                                <input type="date" id="datafinal" name="datafinal" placeholder=" ">
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
                <a href="governantes_editar.php?id=<?= $row['id_gov'] ?>">Editar</a>
                <a href="governantes_d.php?id=<?= $row['id_gov'] ?>">Excluir</a>
                <a href="governantes_c.php?id=<?= $row['id_gov'] ?>">Consultar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table> 

</div>

</form>                  


<br>


</body>
</html>