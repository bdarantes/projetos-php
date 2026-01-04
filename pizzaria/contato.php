<?php 
session_start();
include 'includes/header.php'; 

?>

<main class="container">

<section class="contato">
    <h2>Fale com a gente</h2>
    <p>
        Tem alguma dúvida, sugestão ou elogio?
        Preencha o formulário abaixo e entraremos em contato.
    </p>

    <?php if (!empty($_SESSION['sucesso'])): ?>
        <div class="sucesso">
            <?= htmlspecialchars($_SESSION['sucesso']); ?>
        </div>
        <?php unset($_SESSION['sucesso']); ?>
    <?php endif; ?>

    <?php if(!empty($_SESSION['erros'])): ?>
        <div class="erros">
            <ul>
                <?php foreach ($_SESSION['erros'] as $erro) : ?>
                    <li><?= $erro ?></li>
                    <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="backend/processa_contato.php" method="POST" class="form-contato">

        <div class="campo">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?= $_SESSION['old']['nome'] ?? '' ?>" placeholder="Seu nome completo" required>
        </div>

        <div class="campo">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="<?= $_SESSION['old']['email'] ?? '' ?>" placeholder="seuemail@email.com"required>
        </div>

        <div class="campo">
            <label for="assunto">Assunto</label>
            <select id="assunto" name="assunto" required>
                <option value="">Selecione um assunto</option>
                <option value="elogio" <?= ($_SESSION['old']['assunto'] ?? '') === 'elogio' ? 'selected' : '' ?>>Elogio</option>
                <option value="reclamacao" <?= ($_SESSION['old']['assunto'] ?? '') === 'reclamacao' ? 'selected' : '' ?>>Reclamação</option>
                <option value="parceria" <?= ($_SESSION['old']['assunto'] ?? '') === 'parceria' ? 'selected' : '' ?>>Parceria</option>
            </select>
        </div>

        <div class="campo">
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="5" placeholder="Digite sua mensagem..."required><?= $_SESSION['old']['mensagem'] ?? '' ?></textarea>
        </div>

        <button type="submit" class="">Enviar Mensagem</button>
    </form>
    <?php 
    unset($_SESSION['erros']);
    unset($_SESSION['sucesso']);
    unset($_SESSION['old']);
    ?>
</section>

</main>

<?php include 'includes/footer.php'; ?>