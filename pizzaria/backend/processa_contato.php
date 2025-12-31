<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../contato.php');
    exit;
}

$nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$assunto = trim(filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_SPECIAL_CHARS));
$mensagem = trim(filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

$erros = [];

if(empty($nome)) {
    $erros[] = 'O nome é obrigatório.';
} elseif(strlen($nome) <3) {
    $erros[] = 'O nome deve ter no mínimo 3 caracteres.';
}

if(empty($email)) {
    $erros[] = 'O e-mail é obrigatório.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = 'E-mail inválido.';
}

$assuntosValidos = ['duvida', 'elogio', 'reclamacao', 'parceria'];
if (empty($assunto) || !in_array($assunto, $assuntosValidos)) {
    $erros[] = 'A mensagem deve ter no mínimo 10 caracteres.';
}

if(!empty($erros)) {
    $_SESSION['erros'] = $erros;
    $_SESSION['old'] = [
        'nome' => $nome,
        'email' => $email,
        'assunto' => $assunto,
        'mensagem' => $mensagem
    ];

    header('Location: ../contato.php');
    exit;
}

$_SESSION['sucesso']= 'Mensagem enviada com sucesso! Em breve entraremos em contato.';
header('Location: ../contato.php');