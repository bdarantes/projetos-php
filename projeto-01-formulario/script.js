document.getElementById('formContato').addEventListener('submit', function (e) {
    const nome = document.getElementById('nome').value.trim();
    const email = document.getElementById('email').value.trim();
    const mensagem = document.getElementById('mensagem').value.trim();

    if(!nome || !email || !mensagem) {
        alert('Preencha todos os campos');
        e.preventDefault();
    }

});