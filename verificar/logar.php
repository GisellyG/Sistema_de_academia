<?php
    if(isset($_POST['entrar'])){
        if(isset ($_POST['login']) && !empty($_POST['login'] && isset($_POST['senha'])&& !empty($_POST['senha']))){
            session_start();
            require'../conexao.php';
            $login=$_POST['login'];
            $senha=$_POST['senha'];
            $sql="SELECT * FROM funcionários WHERE login = :login AND senha = :senha";
            $resultado= $conn->prepare($sql);
            $resultado -> bindValue(":login", $login);
            $resultado -> bindValue(":senha", $senha);
            $resultado -> execute();

            if($resultado -> rowCount() > 0){
                $dado = $resultado -> fetch();

                $_SESSION['id'] = $dado['id'];
                $_SESSION['nome'] = $dado['login'];
                header('location:../index.php');
            }else{
                header('location:../login.php?erro');
            }
        }
    }
?>