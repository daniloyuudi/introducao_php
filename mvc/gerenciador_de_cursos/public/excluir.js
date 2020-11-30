var botoesExcluir = document.querySelectorAll('.excluir');

for (botao of botoesExcluir) {
    botao.addEventListener('click', function(event) {
        event.preventDefault();
        if (confirm('Deseja mesmo excluir esse curso?')) {
            document.location.href = this.getAttribute('url');
        }
    })
}