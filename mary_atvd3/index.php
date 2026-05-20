<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<form action="page2.php" method="post">
    <div class="container"> 
        
        <div class="font">
            <h2>Para o professor</h2>
        </div>

    <div class="input3">
        <label for="">Insira o nome da turma</label>
            <input type="text" name="nt" value="" size="35">
        <label for="">Insira a quantidade de alunos</label>
            <input type="int" name="qa" value="" size="35">
    </div>

    <div class="font">
        <h2>Para os alunos</h2>
    </div>

    <div class="input1">
    
        <label for="">Insira o nome do aluno</label>
            <input type="text" name="nma" value="" size="35">
        <label for="">Insira a nota da prova 1</label>
            <input type="int" name="no1" value="" size="35">
        <label for="">Insira a nota da prova 2</label>
            <input type="int" name="no2" value="" size="35">
        <label for="">Insira a nota do trabalho</label>
            <input type="int" name="tra" value="" size="35"> <br>
    </div>
    
     
    <button type="submit">Exibir resultados</button>
     

    </div>
</form>
</body>
</html>