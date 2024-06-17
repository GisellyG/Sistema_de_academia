<?php
    if(isset($_POST['idCategoria'])){
    require'../conexao.php';
    $idCategoria = $_POST['idCategoria'];
    $nome = $_POST['nome'];

   

    $sql = "UPDATE categorias SET nome = :nome WHERE id= :idCategoria;";
    $resultado = $conn->prepare($sql);
    $resultado->bindValue(":idCategoria",$idCategoria);
    $resultado->bindValue(":nome", $nome);
    $resultado-> execute();
    header("Location: ../tabelacateg.php?Atualizado=$idCategoria&atualizar=ok");
    exit; 
} 
?>