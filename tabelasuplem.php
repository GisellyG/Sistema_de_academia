<?php
    session_start();
    require 'conexao.php';
    if (!isset($_SESSION['id'])) {
        header('Location: login.php');
    }
$sql = "SELECT * FROM suplementos";
$resultado = $conn->prepare($sql);
$resultado -> execute();
$suplementos = $resultado -> fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title> 
  <link rel="stylesheet" href="css/tabelaSuplem.css">
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
      <a href="cadastrosuplem.php" id="botaoCadast" class="btn btn-primary" style="height:35px; width:105px;">Cadastrar</a>
    </div>
  </div>
</div>
    <?php
    if(count($suplementos) > 0){
    ?>
  <div class="row mt-5">
    <div class="col-md-6">
      <h2>Suplementos</h2>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Quantidade</th>
            <th>Peso</th>
            <th>Formato</th>
            <th>Função</th>
            <th>Valor</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($suplementos as $suplemento){
                echo "<tr>";
                echo "<td>".$suplemento['id'];
                echo "<td>".$suplemento['nome'];
                echo "<td>".$suplemento['marca'];
                echo "<td>".$suplemento['quantidade'];
                echo "<td>".$suplemento['peso'];
                echo "<td>".$suplemento['formato'];
                echo "<td>".$suplemento['funcao'];
                echo "<td>".$suplemento['valor'];
                echo "<td>
                <div class='d-flex'>
                  <form method='POST' action='verificar/delete.php'>
                    <input name='idSuplemento' type='hidden' value='" . $suplemento['id'] . "'>
                    <input name='nomeSuplemento' type='hidden' value='" . $suplemento['nome'] . "'>
                    <button class='btn border-danger text-danger me-2' type='button' data-bs-toggle='modal' data-bs-target='#verificardelet" . $suplemento['id'] . "'>Excluir</button>
                    <div class='modal fade' id='verificardelet" . $suplemento['id'] . "' tabindex='-1' aria-labelledby='verificardeletLabel" . $suplemento['id'] . "' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h5 class='modal-title' id=verificardeletLabel" . $suplemento['id'] . "'>Verificar</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                          </div>
                          <div class='modal-body'>
                            Você realmente gostaria de excluir esse suplemento? \"" . $suplemento['nome'] . "\"?
                          </div>
                          <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                            <button name='verificardelet' type='submit' class='btn btn-danger'  data-bs-dismiss='modal'>Excluir</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                    <form method='POST' action='formSuplem.php'>
                      <input name='idSuplemento' type='hidden' value='" . $suplemento['id'] . "'>
                      <input name='idNome' type='hidden' value='" . $suplemento['nome'] . "'>
                      <input name='idMarca' type='hidden' value='" . $suplemento['marca'] . "'>
                      <input name='idQuantidade' type='hidden' value='" . $suplemento['quantidade'] . "'>
                      <input name='idPeso' type='hidden' value='" . $suplemento['peso'] . "'>
                      <input name='idFormato' type='hidden' value='" . $suplemento['formato'] . "'>
                      <input name='idFuncao' type='hidden' value='" . $suplemento['funcao'] . "'>
                      <input name='idValor' type='hidden' value='" . $suplemento['valor'] . "'>
                      <button class='btn border-primary text-primary me-2' type='submit' data-bs-toggle='modal' data-bs-target='verificarupdate" . $suplemento['id'] . "'>Atualizar</button>
                      <div class='modal fade' id='verificarupdate" . $suplemento['id'] . "' tabindex='-1' aria-labelledby='verificarupdateLabel" . $suplemento['id'] . "' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h5 class='modal-title' id=verificarupdateLabel" . $suplemento['id'] . "'>Verificar</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                          </div>
                          <div class='modal-body'>
                            Você realmente gostaria de atualizar esse suplemento? \"" . $suplemento['nome'] . "\"?
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
