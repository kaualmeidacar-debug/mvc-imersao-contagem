<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Imersão Contagem</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>

    <!-- Removi a div .container para evitar que as margens do Bootstrap quebrassem o flexbox centralizado do body -->
    <div class="row" id="uni">

        <!-- Lado Esquerdo (Banner) -->
        <div class="col-md-6 lado-esquerdo">
            <img src="../assets/img/logo.png" alt="Logo" class="logo mb-5">
            <h1>Imersão Contagem</h1>
            <p>Conectando pessoas, eventos e oportunidades através da tecnologia.</p>
        </div>

        <!-- Lado Direito (Formulário) -->
        <div class="col-md-6 lado-direito">
            <div class="text-center mb-4">
                <i class="bi bi-person-circle user-icon"></i>
                <h2 class="mt-3">Entrar</h2>
                <p class="text-muted">Faça login para continuar</p>
            </div>

            <form action="inicio.php">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Digite seu email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" id="senha" class="form-control" placeholder="Digite sua senha" required>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lembrar">
                        <label class="form-check-label" for="lembrar">Lembrar-me</label>
                    </div>
                    <a href="#">Esqueci minha senha</a>
                </div>

                <button type="submit" class="btn btn-login w-100">Entrar</button>
            </form>

            <hr class="my-4">

            <p class="text-center mb-0">
                Não possui conta? <a href="#">Cadastre-se</a>
            </p>
        </div>

    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- jQuery Validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <!-- jQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>