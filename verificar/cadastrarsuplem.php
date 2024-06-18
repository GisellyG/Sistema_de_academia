<?php

    if (isset($_POST['nome'], $_POST['marca'], $_POST['quantidade'], $_POST['peso'], $_POST['formato'], $_POST['funcao'], $_POST['valor'], $_POST['categoria'])) {
        require '../conexao.php';
        var_dump($_REQUEST);
      
        $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $quantidade = $_POST['quantidade'];
        $peso = $_POST['peso'];
        $formato = $_POST['formato'];
        $funcao = $_POST['funcao'];
        $valor = $_POST['valor'];
        $categoria_id = $_POST['categoria']; 

      
        $sql = "INSERT INTO suplementos (nome, marca, quantidade, peso, formato, funcao, valor, id_categoria) VALUES (:nome, :marca, :quantidade, :peso, :formato, :funcao, :valor, :categoria_id)";
        $resultado = $conn->prepare($sql);
        $resultado->bindValue(":nome", $nome);
        $resultado->bindValue(":marca", $marca);
        $resultado->bindValue(":quantidade", $quantidade);
        $resultado->bindValue(":peso", $peso);
        $resultado->bindValue(":formato", $formato);
        $resultado->bindValue(":funcao", $funcao);
        $resultado->bindValue(":valor", $valor);
        $resultado->bindValue(":categoria_id", $categoria_id);
        $resultado->execute();
        
        header('Location:../tabelasuplem.php?success=Produto cadastrado');
    }


