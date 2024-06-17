<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="bg-dark">
  <?php
  session_start();
  if (!isset($_SESSION['id'])) {
    header('Location: login.php');
  }
  ?>
  <nav id="navbarFuncio" class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <div>
        <img src=".//imagens/logoacademia.png" id="imagemAcadem" alt="">
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tabelasuplem.php">Suplementos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tabelacateg.php">Categoria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
      <div id="navSaida">
        <div class="dropdown">
          <button id="dropdown" class="btn btn- dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['nome']; ?>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="verificar/logout.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div id="card" class="d-flex justify-content-around">
    <div id="cardSuplem" class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title d-flex aling-items-center justify-content-center">Tabela Suplemento</h5>
        <a href="tabelasuplem.php" id="entrar" class="btn d-flex aling-items-center justify-content-center">Entrar</a>
        <!-- <a href="tabelasuplem.php" class="card-link">Another link</a> -->
      </div>
    </div>
    <div id="cardCateg" class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title d-flex aling-items-center justify-content-center">Tabela Categoria</h5>
        <a href="tabelacateg.php" id="entrar" class="btn d-flex aling-items-center justify-content-center">Entrar</a>
        <!-- <a href="#" class="card-link">Another link</a> -->
      </div>
    </div>
    <div id="cardInstrut" class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title d-flex aling-items-center justify-content-center">Tabela Instrutor</h5>
        <a href="#" id="entrar" class="btn d-flex aling-items-center justify-content-center">Entrar</a>
        <!-- <a href="#" class="card-link">Another link</a> -->
      </div>
    </div>
  </div>
</body>

</html>