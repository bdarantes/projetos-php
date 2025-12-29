<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Contatos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Novo Contato</h1>

<form action="salvar.php" method="post">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="mensagem" placeholder="Mensagem" required></textarea>
    <button type="submit">Salvar</button>
</form>

<a href="listar.php">Ver contatos cadastrados</a>

<script src="script.js"></script>
    
</body>
</html>