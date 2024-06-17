<?php
if (isset($_POST['idCategoria']) && isset($_POST['idNome'])) {
    $idCategoria = $_POST['idCategoria'];
    $idNome = $_POST['idNome'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cadastrosuplementos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div>
        <form action="verificar/updateCateg.php" method="POST" data-parsley-validate>
            <div class="login container-fluid rounded card-body py-5 px-md-5 border border-dark rounded-3 shadow">
                <div class="rounded-3 shadow">
                    <input value="<?php echo $idCategoria; ?>" class="m-0" type="hidden" name="idCategoria" id="idCategoria" placeholder="Nome" required>
                    <div class="py-3 px-3" id="entrada1">
                        <label class="text-white-50" for="">Nome</label>
                        <label id="obrigatorio" for="">*</label>
                        <input value="<?php echo $idNome; ?>" class="m-0" type="text" name="nome" id="nome" placeholder="Nome" required>
                    </div>
                    <div class="text-center py-1 px-2 atualiza">
                        <input type="submit" name="atualizar" id="atualizar" value="Atualizar">
                    </div>
                </div>
        </form>
    </div>
    </div>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="./node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
    <link rel="stylesheet" href="node_modules/parsleyjs/src/parsley.css">
</body>

</html>