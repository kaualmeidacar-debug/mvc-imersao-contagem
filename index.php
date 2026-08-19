<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Cadastros</title>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <header class="bg-dark text-white py-3">
    </header>

    <main class="flex-grow-1">

        <?php
        require __DIR__ . "/routes.php";
        ?>

    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">

        <p class="mb-0">
            Sistema MVC de Cadastros
        </p>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="config/constants.js"></script>

    <script src="js/helpers.js"></script>

</body>

</html>