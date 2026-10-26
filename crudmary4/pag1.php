<!DOCTYPE html>
<html lang="pt-BR">
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
    <div class="container-filho">
        <form action="continente.php" method="post">
        <button type="submit">
            Continente
        </button>   
        </form>
        <form action="paises.php" method="post">
        <button type="submit">
            Paises
        </button>   
        </form>
        <form action="governantes.php" method="post">
        <button type="submit">
            Governantes
        </button>   
        </form>
        <form action="cidades.php" method="post">
        <button type="submit">
            Cidades
        </button>   
        </form>

        <div class="mapa-container">
        <h2>Explore o mundo</h2>
        <div id="mapa"></div>
</div>
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


<script>
    async function initMap() {
        const { Map } = await google.maps.importLibrary("maps");

        const mapa = new Map(document.getElementById("mapa"), {
            center: { lat: 0, lng: 0 },
            zoom: 2,
            mapTypeControl: true,
            streetViewControl: false
        });
    }
</script>

<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqAYa1dgPC7Z70vvcYnVsVL9jB3kMmx0g&loading=async&callback=initMap&v=weekly">
</script>
</body>
</html>