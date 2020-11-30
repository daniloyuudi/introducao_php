

var campoFiltro = document.querySelector("#filtrar-lista");

campoFiltro.addEventListener("input", function(event) {
	var cursos = document.querySelectorAll(".curso");

	if (this.value.length > 0) {
		for (var i = 0; i < cursos.length; i++) {
			var curso = cursos[i];
			var liNome = curso.querySelector(".info-nome");
			var nome = liNome.textContent;
			var expressao = new RegExp(this.value);
			if (!expressao.test(nome)) {
				curso.classList.add("invisivel");
			} else {
				curso.classList.remove("invisivel");
			}
		}
	} else {
		for (var i = 0; i < cursos.length; i++) {
			var curso = cursos[i];
			curso.classList.remove("invisivel");
		}
	}
})