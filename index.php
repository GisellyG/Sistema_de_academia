<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header('Location: login.php');
    }
    ?>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <div>
                <img src=".//imagens/logoacademia.png" id="imagem" alt="">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div id="navSaida">
                    <div class="dropdown">
                        <button id="dropdown" class="btn btn- dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['nome']; ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Inscrição</a></li>
                            <li><a class="dropdown-item" href="verificar/logout.php">Sair</a></li>
                        </ul>
                    </div>
                </div>
    </nav>
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/academia1.png" id="img1" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/academia2.webp" id="img2" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/academia3.avif" id="img3" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="nossEndereç">
        <h2>Nosso Endereço <img id="endereço" src="imagens/endereco.png" alt="endereco"></h2>
        <h3>N°251</h3>
        <h3>Bairro: Centro</h3>
        <h3>Rua: Bruno Epaminondas</h3>
    </div>
    <div id="funcionamento">
        <div id="horaFuncio">
            <h2 id="funcionamento">Horário de Funcionamento <img id="relogio" src="imagens/relogio.png" alt="relogio"></h2>
            <h3>Seg a Sex: <span id="horario">5h ás 22h</span></h3>
            <h3>Sábado: <span id="horario2">9h ás 12h 14h ás 18h</span></h3>
        </div>
    </div>
    <div>
        <div id="planosmensais">
            <h2>Nossos <span id="planos">Planos</span></h2>
            <h3>Plano Mensal: <span id="mensal">R$70,00</span></h3>
            <h3>Plano Diária: <span id="diaria">R$10,00</span></h3>
            <h3>Plano Militar: <span id="militar">R$60,00</span></h3>
            <H3>Plano Trimestral, 3 meses: <span id="trimestral">3x R$60,00</span></H3>
            <h3>Plano Semestral, 6 meses: <span id="semestral">6x R$55,00</span></h3>
        </div>
    </div>
    <!-- <div id="instrutores">
        <h2 id="cabecalhoInst">Instrutores</h2>
        <div class="d-flex justify-content-around">
            <img id="barbara" src="imagens/babi.jpg" alt="">
            <img id="geiza" src="imagens/geeiza.jpg" alt="">
            <img id="thais" src="imagens/thais.jpg" alt="">
            <img id="luiz" src="imagens/luiz.jpg" alt="">
            <img id="leo" src="imagens/leo.jpg" alt="">
        </div>
    </div> -->
</body>
</html>