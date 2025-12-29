<?php

$arquivo = 'dados.json';

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email' ?? '']);
$mensagem = trim($_POST['mensagem'] ?? '');

if ($nome === '' || $email === '' || $mensagem === '') {
    echo 'Dados inválidos';
    exit;
}

$dados = json_decode(file_get_contents($arquivo), true);

$dados[] = [
    'nome' => $nome,
    'email' => $email,
    'mensagem' => $mensagem,
    'data' => date('d/m/Y H:i')
];

file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));

header('Location: listar.php');
exit;