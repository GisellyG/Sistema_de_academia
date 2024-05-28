<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])){
            require '../conexao.php';
            $usuario=$_POST['usuario'];
            $login=$_POST['login'];
            $senha=$_POST['senha'];

            $sql="INSERT INTO cliente(usuario,login,senha) VALUES (:usuario,:login,:senha)";
            $resultado=$conn-> prepare($sql);
            $resultado -> bindValue("usuario",$usuario);
            $resultado -> bindValue("login",$login);
            $resultado -> bindValue("senha",$senha);
            $resultado -> execute();
            header('Location:../login.php');
        }

    }
?>