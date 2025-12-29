<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h1>Contato</h1>

<form id="formContato" action="processa.php" method="post">
    <input type="text" name="nome" id="nome" placeholder="Seu nome">
    <input type="email" name="email" id="email" placeholder="Seu email">
    <textarea name="mensagem" id="mensagem" placeholder="Sua mensagem"></textarea>
    <button type="submit">Enviar</button>
</form>

<script src="script.js"></script>
</body>
</html>