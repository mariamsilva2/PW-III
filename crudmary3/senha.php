<?php
require('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $usuariodigitado = $_POST['usuario'];
   $senhanov = $_POST['senhanov'];
   $senhacon = $_POST['senhacon'];

   $sql = "SELECT * from usuarios where usuario = :usuariodigitado"; // faz o select ocorrer
   $stmt = $pdo->prepare($sql); // pdo é a conexao, essa linha prepara a consulta
   $stmt->execute([ // essa aqui executa
        ':usuariodigitado' => $usuariodigitado
    ]);

    $usuariobanco = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($usuariobanco) {

        echo'Usuário encontrado';

        if ($senhanov == $senhacon) {
            
            
            $sql = "update usuarios
                    set senha = :senhanov
                    where usuario = :usuariodigitado";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':senhanov' => $senhanov,
                ':usuariodigitado' => $usuariodigitado
            ]); 

            echo "<script>alert('Senha alterada com sucesso!');</script>";

        } else { 
            echo "<script>alert('Tentativa Falha, As senhas não coincidem');</script>";
        }

    }   else {

        echo "<script>alert('Usuário não encontrado');</script>";

    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


<div class="container">
    <div class="container-login">

    <form method="post">
        <br>
                <div class="input_box">
                    <label for="usuario">Nome de usuário
                       <div class="input_field">
                             <input type="text" id="usuario" name="usuario" placeholder=" ">
                        </div> 
                    </label>
                </div>

                <div class="input_box">
                    <label for="senhanov">Senha nova
                       <div class="input_field">
                             <input type="password" id="senhanov" name="senhanov" placeholder=" ">
                        </div> 
                    </label> <br>
                </div> <br>

                
                <div class="input_box">
                    <label for="senhacon">Confirmação de senha
                       <div class="input_field">
                             <input type="password" id="senhacon" name="senhacon" placeholder=" ">
                        </div> 
                    </label> <br>
                </div> <br>

                <Center> <button type="submit">Confirmar</button></Center>
                
            </form>
    </div>
</div>





<footer>
        <div class="footer-container">
            <div class="footer-column">
                <h4>Créditos aos autores:</h4>
                <p><a href="https://wallpapercave.com/world-map-background"> wallpapercave.com/world-map-background</a></p>
            </div>
            <div class="footer-column">
                <h4>Contato</h4>
                <p>Email: mariamsilva281120@gmail.com</p>
            </div>
        </div>
    </footer>


</body>
</html>