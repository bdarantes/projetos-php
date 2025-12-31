<?php include 'includes/header.php'; ?>

<main class="container">

<section class="contato">
    <h2>Fale com a gente</h2>
    <p>
        Tem alguma dúvida, sugestão ou elegio?
        Preencha o formulário abaixo e entraremos em contato.
    </p>

    <form action="backend/processa_contato.php" method="POST" class="form-contato">

        <div class="campo">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
        </div>

        <div class="campo">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="seuemail@email.com"required>
        </div>

        <div class="campo">
            <label for="assunto">Assunto</label>
            <select id="assunto" name="assunto" required>
                <option value="">Selecione um assunto</option>
                <option value="elogio">Elogio</option>
                <option value="reclamacao">Reclamação</option>
                <option value="parceria">Parceria</option>
            </select>
        </div>

        <div class="campo">
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="5" placeholder="Digite sua mensagem..."required></textarea>
        </div>

        <button type="submit" class="btn">Enviar Mensagem</button>
    </form>
</section>

</main>

<?php include 'includes/footer.php'; ?>