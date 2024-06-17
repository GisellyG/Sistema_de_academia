<?php
if (isset($_POST['cadastrar'])) {
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        require '../conexao.php';
        $nome = $_POST['nome'];

        $sql = "INSERT INTO categorias(nome) VALUES(:nome)";
        $resultado = $conn->prepare($sql);
        $resultado->bindValue(":nome", $nome);
        $resultado->execute();
        header('Location:../tabelacateg.php?success=Produtocadastrado');
    }
}