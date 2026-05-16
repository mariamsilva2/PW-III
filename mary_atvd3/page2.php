<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php
        $nomet = $_POST["nt"];
	    $qua = $_POST["qa"];
	    $nomea=$_POST["nma"];
	    $nota1=$_POST["no1"];
	    $nota2=$_POST["no2"];
        $notat=$_POST["tra"];

        $media = ($nota1 + $nota2 + $notat) / 3;
        $raiz = sqrt($nota1 + $nota2 + $notat);

       

     ?>
    <div class="container">

    <h2>Resultados</h2>

    <div class="echo">
    <?php
        echo "Nome da turma: $nomet";
        echo "\n <br>Nome do aluno: $nomea";
        echo "\n <br> A média do aluno é $media \n";  
        echo "\n <br> A raiz quadrada da soma das notas do aluno é $raiz"; 
        
        echo "\n <br> <br> Situação acadêmica do aluno:";  

        if ($media >= 7) {
            echo "<br> Aprovado!";
        }

        else if ($media >= 5 && $media < 6.9) {
            echo "<br> Recuperação!";
        }

        else {
            echo "<br> Reprovado!";
        }

            
    ?>

    
    </div>
        <button type="button" onClick="history.back()">Voltar</button>
    </div>
</body>
</html>