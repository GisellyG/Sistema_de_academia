<?php
session_start();
require 'conexao.php';
if (!isset($_SESSION['id'])) {
  header('Location: login.php');
}
$sql = "SELECT * FROM categorias";
$resultado = $conn->prepare($sql);
$resultado->execute();
$categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/tabelaCateg.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    .container {
      margin-top: 50px;
    }
  </style>
</head>

<body>
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
  <div class="container">
    <div class="row">
      <div class="container-fluid">
        <div class="row justify-content-end">
          <div class="col-md-auto text-md-right">
            <a href="cadastrocateg.php" id="botaoCadast" class="btn btn-primary" style="height:35px; width:105px;">Cadastrar</a>
          </div>
        </div>
      </div>
      <?php
      if (count($categorias) > 0) {
      ?>
    </div>
    <div class="tabela row mt-5 d-flex d-flex justify-content-start">
      <div class="col-md-6">
        <h2>Categorias</h2>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($categorias as $categoria) {
              echo "<tr>";
              echo "<td>" . $categoria['id'];
              echo "<td>" . $categoria['nome'];
              echo "<td>
                <div class='d-flex'>
                  <form method='POST' action='verificar/deleteCateg.php'>
                    <input name='idCategoria' type='hidden' value='" . $categoria['id'] . "'>
                    <input name='nomeCategoria' type='hidden' value='" . $categoria['nome'] . "'>
                    <button class='btn border-danger text-danger me-2' type='button' data-bs-toggle='modal' data-bs-target='#verificardelet" . $categoria['id'] . "'>Excluir</button>
                    <div class='modal fade' id='verificardelet" . $categoria['id'] . "' tabindex='-1' aria-labelledby='verificardeletLabel" . $categoria['id'] . "' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h5 class='modal-title' id=verificardeletLabel" . $categoria['id'] . "'>Verificar</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                          </div>
                          <div class='modal-body'>
                            Você realmente gostaria de excluir esse suplemento? \"" . $categoria['nome'] . "\"?
                          </div>
                          <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                            <button name='verificardelet' type='submit' class='btn btn-danger'  data-bs-dismiss='modal'>Excluir</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                    <form method='POST' action='formCateg.php'>
                    <input name='idCategoria' type='hidden' value='" . $categoria['id'] . "'>
                    <input name='idNome' type='hidden' value='" . $categoria['nome'] . "'>
                    <button class='btn border-primary text-primary me-2' type='submit' data-bs-toggle='modal' data-bs-target='verificarupdate" . $categoria['id'] . "'>Atualizar</button>
                    <div class='modal fade' id='verificarupdate" . $categoria['id'] . "' tabindex='-1' aria-labelledby='verificarupdateLabel" . $categoria['id'] . "' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h5 class='modal-title' id=verificarupdateLabel" . $categoria['id'] . "'>Verificar</h5>
                          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                          Você realmente gostaria de atualizar esse suplemento? \"" . $categoria['nome'] . "\"?
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                          <button name='verificarupdate' type='submit' class='btn btn-primary'  data-bs-dismiss='modal'>Excluir</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>
                      </td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    <?php } else {
        echo '<h1>Nenhum produto cadastrado!</h1>';
      }
    ?>
    </div>
  </div>
</body>

</html>