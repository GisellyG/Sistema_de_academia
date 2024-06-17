<?php
if(isset($_POST['verificardelet'])){
    if(isset($_POST['idSuplemento'])){
    require'../conexao.php';
    $idSuplemento = $_POST['idSuplemento'];
    $nomeSuplemento = $_POST['nomeSuplemento'];
   

    $sql = "DELETE FROM suplementos WHERE id = :idSuplemento";
    $resultado = $conn->prepare($sql);
    $resultado->bindValue(":idSuplemento",$idSuplemento);
    $resultado-> execute();
    header("Location: ../tabelasuplem.php?nomedelete=$nomeSuplemento&delete=ok");
    exit; 
}}

?>