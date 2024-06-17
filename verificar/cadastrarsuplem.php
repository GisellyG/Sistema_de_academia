<?php
if (isset($_POST['cadastrar'])) {
    if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['marca']) && !empty($_POST['marca']) && isset($_POST['quantidade']) && !empty($_POST['quantidade']) && isset($_POST['peso']) && !empty($_POST['peso']) && isset($_POST['formato']) && !empty($_POST['formato']) && isset($_POST['funcao']) && !empty($_POST['funcao'])  && isset($_POST['valor']) && !empty($_POST['valor'])) {
        require '../conexao.php';
        $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $quantidade = $_POST['quantidade'];
        $peso = $_POST['peso'];
        $formato = $_POST['formato'];
        $funcao = $_POST['funcao'];
        $valor = $_POST['valor'];

        $sql = "INSERT INTO suplementos(nome,marca,quantidade,funcao,valor) VALUES (:nome,:marca,:quantidade,:funcao,:valor)";
        $resultado = $conn->prepare($sql);
        $resultado->bindValue(":nome", $nome);
        $resultado->bindValue(":marca", $marca);
        $resultado->bindValue(":quantidade", $quantidade);
        $resultado->bindValue(":funcao", $funcao);
        $resultado->bindValue(":valor", $valor);
        $resultado->execute();
        header('Location:../tabelasuplem.php?success=Produtocadastrado');
    }
}
