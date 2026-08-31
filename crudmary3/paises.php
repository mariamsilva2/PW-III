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
<br> <br> <br> <br> <br>
<div class="container">
    <div class="container-filho">
        <button onClick="history.back()">Voltar</button>
                  <div class="input_box">
                    <label for="name">Nome
                       <div class="input_field">
                             <input type="text" id="name" name="name" placeholder=" ">
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
                        <label for="area">Id Continente
                        <div class="input_field">
                                <input type="int" id="idcont" name="idcont" placeholder=" ">
                            </div> 
                        </label>
                </div>

                <div class="input_box">
                        <label for="area">Clima
                        <div class="input_field">
                                <input type="int" id="clima" name="clima" placeholder=" ">
                            </div> 
                        </label>
                </div>

                 <div class="input_box">
                        <label for="area">Id Governante
                        <div class="input_field">
                                <input type="int" id="idgov" name="idgov" placeholder=" ">
                            </div> 
                        </label>
                </div>

                 <div class="input_box">
                        <label for="area">Moeda
                        <div class="input_field">
                                <input type="text" id="moeda" name="moeda" placeholder=" ">
                            </div> 
                        </label>
                </div>
    </div>

    <div class="container-filho">
                    <button type="submit" value="Cadastrar"> Cadastrar </button>          
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