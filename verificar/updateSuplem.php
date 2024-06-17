<?php
    if(isset($_POST['idSuplemento'])){
    require'../conexao.php';
    $idSuplemento = $_POST['idSuplemento'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $quantidade = $_POST['quantidade'];
    $peso = $_POST['peso'];
    $formato = $_POST['formato'];
    $funcao = $_POST['funcao'];
    $valor = $_POST['valor'];

   

    $sql = "UPDATE suplementos SET nome = :nome, marca = :marca, quantidade = :quantidade, peso = :peso, formato = :formato, funcao = :funcao, valor = :valor WHERE id= :idSuplemento;";
    $resultado = $conn->prepare($sql);
    $resultado->bindValue(":idSuplemento",$idSuplemento);
    $resultado->bindValue(":nome", $nome);
    $resultado->bindValue(':marca', $marca);
    $resultado->bindValue(":quantidade", $quantidade);
    $resultado->bindValue(":peso", $peso);
    $resultado->bindValue(":formato", $formato);
    $resultado->bindValue(":funcao", $funcao);
    $resultado->bindValue(":valor", $valor);
    $resultado-> execute();
    header("Location: ../tabelasuplem.php?Atualizado=$idSuplemento&atualizar=ok");
    exit; 
} 
?>