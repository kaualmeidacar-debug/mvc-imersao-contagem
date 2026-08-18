<?php

//A resposta será enviada em formato JSON
header("Content-Type: application/json; charset=utf-8");

//Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405); //405 - método não permitido

    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Método não permitido, esperava POST"
    ]);

    exit;
}

// Recebe os dados enviados pelo formulário
$titulo = trim($_POST['titulo']);
$categoria = trim($_POST['categoria']);
$descricao = trim($_POST['descricao']);
$imagem = trim($_POST['imagem']);
$data = trim($_POST['data']);
$horario = trim($_POST['horario']);
$local = trim($_POST['local']);
$endereco = trim($_POST['endereco']);
$telefone = trim($_POST['telefone']);
$email = trim($_POST['email']);

// Valida os campos obrigatórios 
if ($titulo === "" || $categoria === "" || $descricao === "" || $imagem === "" || $data === "" || $horario === "" || $local === "" || $endereco === "" || $telefone === "" || $email === "") {
    http_response_code(400);

    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Preencha todos os campos"
    ]);

    exit;
}

// -------->>> TODO: Aqui seria o banco de dados 

//Simulando  retornar  sucesso 
http_response_code(200);

echo json_encode([
    "sucesso" => true,
    "mensagem" => "Cliente cadastrado com sucesso!",
    "cliente" => [
        "titulo" => $titulo,
        "categoria" => $categoria,
        "descricao" => $descricao,
        "imagem" => $imagem,
        "data" => $data,
        "horario" => $horario,
        "local" => $local,
        "endereco" => $endereco,
        "telefone" => $telefone,
        "email" => $email,
    ]
]);
