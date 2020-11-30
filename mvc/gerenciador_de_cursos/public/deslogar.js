var sair = document.querySelector("#sair");
sair.addEventListener("click", function() {
    if (confirm("Deseja realmente sair?")) {
        document.location.href = this.getAttribute("url");
    }
})