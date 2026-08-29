<?php
require('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * from usuarios where email = :email"; // faz o select ocorrer
    $stmt = $pdo->prepare($sql); // pdo é a conexao, essa linha prepara a consulta
    $stmt->execute([ // essa aqui executa
        ':email' => $email
    ]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {

        if ($usuario['bloqueado'] == 1) {
            echo "<script>alert('usuario bloqueado');</script>";
            exit;
        }

        if ($senha == $usuario['senha']) {
            
            $sqlLog = "INSERT INTO logs (acao, usuario, id_usuario)
                        values (:acao, :usuario, :id_usuario)"; 
            
            $stmtLog = $pdo->prepare($sqlLog); // stmt, objeto que representa aquela consulta que você preparou.

            $stmtLog->execute([ // essa aqui executa o log
                ':acao' => "Login Realizado",
                ':usuario' => $usuario['nome'],
                ':id_usuario' => $usuario['id_usuario']
             ]);

            $sql = "update usuarios
                    set tentativas = 0
                    where id_usuario = :id_usuario";

             $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':id_usuario' => $usuario['id_usuario']
            ]);

            echo "<script>alert('Login feito com sucesso!');</script>";

            header("Location: pag1.php");

            exit;


        } else {

            $tentativas = $usuario['tentativas'] + 1;

            $sql = "update usuarios
                    set tentativas = :tentativas
                    where id_usuario = :id_usuario";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':tentativas' => $tentativas,
                ':id_usuario' => $usuario['id_usuario']
            ]);

            echo "<script>alert('Tentativa Falha');</script>";

            if ($tentativas >= 3) {

                 $sql = "update usuarios
                    set bloqueado = 1
                    where id_usuario = :id_usuario";

                $stmt = $pdo->prepare($sql);

                $stmt->execute([
                    ':id_usuario' => $usuario['id_usuario']
                ]);

                echo "usuario bloqueado";
                exit;
            }
        }
    } else {
        echo "Usuário inexistente";
    }

}



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
    

<header>
        <nav class="menu-topo">
            <p>
                 CRUD - Mundo   
            </p>
        </nav>
</header>

<div class="container">
    <div class="container-login">

    <form method="post">
       
                <div class="input_box">
                    <label for="name">Email
                       <div class="input_field">
                             <input type="text" id="email" name="email" placeholder=" ">
                        </div> 
                    </label>
                </div>

                <div class="input_box">
                    <label for="senha">Senha
                       <div class="input_field">
                             <input type="password" id="senha" name="senha" placeholder=" ">
                        </div> 
                    </label>
                </div> <br>
                 <button type="submit">Login</button>
                
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