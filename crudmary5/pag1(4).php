
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD - Mundo</title>

    <!-- CSS do projeto -->
    <link rel="stylesheet" href="style.css">

    <!-- CSS do Leaflet -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    >

</head>

<body>

    <!-- CABEÇALHO -->
    <header>
        <nav class="menu-topo">
            <p>CRUD - Mundo</p>
        </nav>
    </header>


    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container">

        <div class="container-filho">

            <!-- BOTÃO CONTINENTE -->
            <form action="continente.php" method="post">
                <button type="submit">
                    Continente
                </button>
            </form>


            <!-- BOTÃO PAÍSES -->
            <form action="paises.php" method="post">
                <button type="submit">
                    Países
                </button>
            </form>


            <!-- BOTÃO GOVERNANTES -->
            <form action="governantes.php" method="post">
                <button type="submit">
                    Governantes
                </button>
            </form>


            <!-- BOTÃO CIDADES -->
            <form action="cidades.php" method="post">
                <button type="submit">
                    Cidades
                </button>
            </form>


            <!-- MAPA -->
            <div class="mapa-container">

                <h2>Explore o mundo</h2>

                <div id="mapa"></div>

            </div>

        </div>

    </div>


    <!-- RODAPÉ -->
    <footer>

        <div class="footer-container">

            <div class="footer-column">

                <h4>Créditos aos autores:</h4>

                <p>
                    <a href="https://wallpapercave.com/world-map-background">
                        wallpapercave.com/world-map-background
                    </a>
                </p>

            </div>


            <div class="footer-column">

                <h4>Contato</h4>

                <p>Email: mariamsilva281120@gmail.com</p>

            </div>

        </div>

    </footer>


    <!-- BIBLIOTECA LEAFLET -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>


    <!-- JAVASCRIPT DO MAPA -->
    <script>

        // Inicializa o mapa
        const mapa = L.map('mapa').setView([20, 0], 2);


        // Adiciona o mapa-múndi
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {

            attribution: '&copy; OpenStreetMap'

        }).addTo(mapa);


        // Função para carregar os países
        async function carregarPaises() {

            try {

                // Consulta a API REST Countries
                const resposta = await fetch(
                    'https://restcountries.com/v3.1/all?fields=name,capital,continents,flags,latlng,cca3'
                );


                // Verifica se a resposta foi bem-sucedida
                if (!resposta.ok) {

                    throw new Error('Erro ao buscar países');

                }


                // Transforma a resposta em JSON
                const paises = await resposta.json();


                // Percorre todos os países
                paises.forEach(pais => {


                    // Verifica se existem coordenadas
                    if (pais.latlng && pais.latlng.length === 2) {

                        const latitude = pais.latlng[0];

                        const longitude = pais.latlng[1];


                        // Cria o marcador no mapa
                        const marcador = L.marker([latitude, longitude])
                            .addTo(mapa);


                        // Informações do país
                        const nome = pais.name.common;

                        const capital = pais.capital
                            ? pais.capital[0]
                            : 'Não informada';

                        const continente = pais.continents
                            ? pais.continents.join(', ')
                            : 'Não informado';

                        const bandeira = pais.flags.png || '';


                        // Cria o conteúdo do popup
                        const informacoes = `

                            <div style="text-align: center;">

                                <img
                                    src="${bandeira}"
                                    width="80"
                                    alt="Bandeira de ${nome}"
                                >

                                <h3>${nome}</h3>

                                <p>
                                    <strong>Capital:</strong>
                                    ${capital}
                                </p>

                                <p>
                                    <strong>Continente:</strong>
                                    ${continente}
                                </p>

                                <p>
                                    <strong>Código:</strong>
                                    ${pais.cca3}
                                </p>

                            </div>

                        `;


                        // Exibe informações ao clicar no marcador
                        marcador.bindPopup(informacoes);

                    }

                });


            } catch (erro) {

                console.error('Erro ao carregar países:', erro);

                document.getElementById('mapa').innerHTML =
                    'Não foi possível carregar o mapa. Tente novamente.';

            }

        }


        // Executa a função
        carregarPaises();

    </script>

</body>

</html>
