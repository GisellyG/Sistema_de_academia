<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body class="mt-5 bg-dark">
    <div class="d-flex h-100 justify-content-center align-items-center">
        <form action="verificar/logar.php" method="POST" data-parsley-validate>
            <div class="login container-fluid rounded card-body py-5 px-md-5 border border-dark rounded-3 shadow">
                <div class="py-2 px-4 text-center">
                    <img src=".//imagens/logoacademia.png" id="img" alt="logo">
                </div>
                <?php   
                    if(isset($_GET['erro']) ){
                        echo  '<span class="text-danger d-flex justify-content-center text-center">Dados Inválidos</span>';
                    }
                ?>
                <div class="rounded-3 shadow">
                    <div class="py-3 px-3" id="entrada1">
                        <label class="text-white-50" for="">Usuário</label>
                        <label id="obrigatorio" for="">*</label>
                        <input class="m-0" type="text" name="usuario" id="usuario" placeholder="Usuário" required>
                    </div>
                    <div class="py-3 px-3" id="entrada2">
                        <label class="text-white-50" for="">Login</label>
                        <label id="campobrig" for="">*</label>
                        <input class="m-0" type="text" name="login" id="login" placeholder="Login" required>
                    </div>
                    <div class="py-3 px-3" id="entrada3">
                        <label class="text-white-50" for="">Senha</label>
                        <label id="obrig" for="">*</label>
                        <input class="m-0" type="password" name="senha" id="senha" placeholder="Senha" required>
                    </div>
                </div>
                <div class="text-center py-1 px-2 entrar">
                    <input type="submit" name="entrar" id="entrar" value="Entrar">
                </div>
                <div class="d-flex justify-content-center align-items-center m-3">
                    <p class="text-white-50">Não tem conta? <a class="text-white-50" href="cadastro.php">Cadastre-se</a> </p>
                </div>
            </div>
        </form>
    </div>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="./node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
    <link rel="stylesheet" href="node_modules/parsleyjs/src/parsley.css">
</body>
</html>