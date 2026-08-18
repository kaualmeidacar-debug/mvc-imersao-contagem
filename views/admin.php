<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastrar Evento</title>

    <!-- Bootstrap 5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/admin.css">


</head>


<body>


    <!-- MENU LATERAL -->

    <div class="sidebar custom-navbar">

        <div class="logo-area ms-3 my-4">

            <h3>
                IMERSÃO CONTAGEM
            </h3>

            <span>
                Painel Administrativo
            </span>

        </div>

        <a href="#">Dashboard </a>





        <a data-bs-toggle="collapse" href="#menuEventos" role="button">

            Eventos

            <span>
                <i class="bi bi-chevron-down"></i>
            </span>

        </a>


        <div class="collapse show" id="menuEventos">


            <a href="#" class="ms-3 submenu">
                Todos eventos
            </a>


            <a href="#" class="ms-3 submenu ativo">
                Cadastrar evento


            </a>


            <a href="#" class="ms-3 submenu">
                Categorias
            </a>


        </div>



        <a href="#">Usuários</a>

        <a href="#">Organizadores</a>

        <a href="#">Locais</a>

        <a href="#">Relatórios</a>

        <a href="#">Configurações</a>

    </div>




    <!-- CONTEÚDO -->

    <div class="content">


        <!-- HEADER -->

        <header class="header custom-navbar">

            <button id="btnMenu" class="btn text-white">
                <i class="bi bi-list fs-4"></i>
            </button>



            <div class="text-white">
                <button id="btnMenu" class="btn text-white"><a href="./inicio.php" class="btn text-white">
                        <i class="bi bi-house fs-4"></i>
                    </a>
                </button>
                <button id="btnMenu" class="btn text-white">
                    <div class="dropdown">

                        <a href="#"
                            class="d-flex align-items-center text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown">

                            <img src="https://i.pravatar.cc/45?img=12"
                                class="rounded-circle border border-2 border-light"
                                width="45"
                                height="45"
                                alt="Usuário">

                            <div class="ms-2 text-start">

                                <strong class="text-white d-block">
                                    João Silva
                                </strong>

                                <small class="text-light">
                                    Administrador
                                </small>

                            </div>

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end shadow">

                            <li>
                                <a class="dropdown-item" href="perfil.html">
                                    <i class="bi bi-person-circle me-2"></i>
                                    Meu Perfil
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="admin.html">
                                    <i class="bi bi-calendar-plus me-2"></i>
                                    Cadastrar Eventos
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="meus-eventos.html">
                                    <i class="bi bi-calendar-check me-2"></i>
                                    Meus Eventos
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="configuracoes.html">
                                    <i class="bi bi-gear me-2"></i>
                                    Configurações
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item text-danger" href="logout.html">
                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    Sair
                                </a>
                            </li>

                        </ul>
                    </div>

            </div>
            </button>
    </div>

    </header>




    <main id="fundo" class="container-fluid p-4">


        <h2>
            Cadastrar evento
        </h2>

        <p class="text-muted">
            Início / Eventos / Cadastrar
        </p>



        <!-- FORMULÁRIO -->

        <div class="card-form mt-4">
            <h4 class="mb-4">
                Informações do evento
            </h4>

            <div class="alert alert-success d-none" id="alerta" role="alert">
                Seu cadastro foi concluído com sucesso.
            </div>

            <form id="formEvento">
                <div class="row g-3">

                    <!-- titulo -->
                    <div class="col-md-6">
                        <label class="form-label">
                            Título do evento
                        </label>
                        <input id="titulo" name="titulo" type="text" class="form-control">
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"></div>
                    </div>

                    <!-- categoria -->
                    <div class="col-md-3">
                        <label class="form-label">
                            Categoria
                        </label>
                        <select id="categoria" name="categoria" class="form-select">
                            <option value="">Escolha</option>
                            <option>Música</option>
                            <option>Cultura</option>
                        </select>
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"></div>
                    </div>

                    <!-- Descrição -->
                    <div class="col-md-6">
                        <label class="form-label">
                            Descrição completa
                        </label>
                        <textarea id="descricao" name="descricao" class="form-control"></textarea>
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"></div>
                    </div>

                    <!-- imagem -->
                    <div class="col-md-6">
                        <label class="form-label">
                            Imagem de capa
                        </label>
                        <input id="imagem" name="imagem" type="file" class="form-control">
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"></div>
                    </div>

                    <!-- data -->
                    <div class="col-md-3">
                        <label class="form-label">
                            Data
                        </label>
                        <input id="data" name="data" type="date" class="form-control">
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"></div>
                    </div>

                    <!-- hora -->
                    <div class="col-md-3">
                        <label class="form-label">
                            Horário
                        </label>
                        <input id="horario" name="horario" type="time" class="form-control">
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"></div>
                    </div>

                    <!-- local -->
                    <div class="col-md-6">
                        <label class="form-label">
                            Local do evento
                        </label>
                        <input id="local" name="local" class="form-control">
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"></div>
                    </div>

                    <!-- Endereço -->
                    <div class="col-md-6">
                        <label class="form-label">
                            Endereço
                        </label>
                        <input id="endereco" name="endereco" class="form-control">
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"></div>
                    </div>

                    <!-- Telefone -->
                    <div class="col-md-4">
                        <label class="form-label">
                            Telefone
                        </label>
                        <input id="telefone" name="telefone" class="form-control">
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"></div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-4">
                        <label class="form-label">
                            Email
                        </label>
                        <input id="email" name="email" type="email" class="form-control">
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"></div>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <button type="button" class="btn btn-outline-secondary">Cancelar</button>
                    <button class="btn btn-purple">Publicar evento</button>
                </div>
            </form>
            <div id="mensagem" class="alert d-none mt-3"></div>
        </div>
    </main>

    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- jQuery Validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <!-- jQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/admin.js"></script>
    
    <script>
        const btnMenu = document.getElementById("btnMenu");

        const sidebar = document.querySelector(".sidebar");

        const content = document.querySelector(".content");


        btnMenu.addEventListener("click", () => {


            sidebar.classList.toggle("fechado");


            content.classList.toggle("expandido");


        });
    </script>


</body>

</html>
