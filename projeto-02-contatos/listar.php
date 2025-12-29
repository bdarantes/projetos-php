<?php
$dados = json_decode(file_get_contents('dados.json'), true);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contatos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h1>Contatos Cadastrados</h1>

<table border="1" cellpadding="5">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Mensagem</th>
        <th>Data</th>
    </tr>

    <?php foreach ($dados as $contato): ?>
        <tr>
            <td><?= htmlspecialchars($contato['nome']) ?></td>
            <td><?= htmlspecialchars($contato['email']) ?></td>
            <td><?= htmlspecialchars($contato['mensagem']) ?></td>
            <td><?= $contato['data'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
    <a href="index.php">Novo contato</a>
</body>
</html>