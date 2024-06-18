<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Suplementos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cadastrosuplem.css">
</head>
<body>
    <div class="container-fluid py-5 bg-light">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-dark py-3 rounded-top">
                        <h4 class="text-center text-white mb-0">Cadastro de Suplementos</h4>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <form action="verificar/cadastrarsuplem.php" method="POST" data-parsley-validate>
                            <div class="mb-3">
                                <label for="nome" class="form-label text-secondary">Nome <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="marca" class="form-label text-secondary">Marca <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Informe a marca" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="quantidade" class="form-label text-secondary">Quantidade <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Informe a quantidade" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="peso" class="form-label text-secondary">Peso <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="peso" name="peso" placeholder="Informe o peso" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="formato" class="form-label text-secondary">Formato <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="formato" name="formato" placeholder="Informe o formato" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="funcao" class="form-label text-secondary">Função <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="funcao" name="funcao" placeholder="Informe a função" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="valor" class="form-label text-secondary">Valor <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="valor" name="valor" placeholder="Informe o valor" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-4">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="./node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
</body>
</html>
