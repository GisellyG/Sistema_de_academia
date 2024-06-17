<?php
if(isset($_POST['verificardelet'])){
    if(isset($_POST['idCategoria'])){
    require'../conexao.php';
    $idCategoria = $_POST['idCategoria'];
    $nomeCategoria = $_POST['nomeCategoria'];
   

    $sql = "DELETE FROM categorias WHERE id = :idCategoria";
    $resultado = $conn->prepare($sql);
    $resultado->bindValue(":idCategoria",$idCategoria);
    $resultado-> execute();
    header("Location: ../tabelacateg.php?nomedelete=$nomeCategoria&delete=ok");
    exit; 
}}

?>