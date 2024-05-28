<?php
    if(isset($_POST['entrar'])){
        if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset ($_POST['login']) && !empty($_POST['login'] && isset($_POST['senha'])&& !empty($_POST['senha']))){
            session_start();
            require'../conexao.php';
            $usuario=$_POST['usuario'];
            $login=$_POST['login'];
            $senha=$_POST['senha'];
            $sql="SELECT * FROM cliente WHERE login = :login AND senha = :senha AND usuario = :usuario";
            $resultado= $conn->prepare($sql);
            $resultado -> bindValue(":usuario", $usuario);
            $resultado -> bindValue(":login", $login);
            $resultado -> bindValue(":senha", $senha);
            $resultado -> execute();

            if($resultado -> rowCount() > 0){
                $dado = $resultado -> fetch();

                $_SESSION['id'] = $dado['id'];
                $_SESSION['nome'] = $dado['login'];
                header('location:../index.php');
            }else{
                header('location:../login.php');
            }
        }
    }
?>