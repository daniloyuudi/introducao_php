function adicionaTr(nome, cpf, salario, cargo) {
    var tr = document.createElement("tr");

    adicionaTd(tr, nome);
    adicionaTd(tr, cpf);
    adicionaTd(tr, salario);
    adicionaTd(tr, cargo);

    document.querySelector("tbody").appendChild(tr);
}

function adicionaTd(tr, valor) {
    var td = document.createElement("td");
    td.textContent = valor;
    tr.appendChild(td);
}

function pegaTextoCargo(cargo) {
    switch (cargo) {
        case '1':
            return "Desenvolvedor";
        case '2':
            return "Diretor";
        case '3':
            return "Editor de Vídeo";
        case '4':
            return "Gerente";
    }
}

function validaNome(erros, nome) {
    if (nome == "") {
        erros.push("O campo nome não pode ficar vazio!");
    }
    return erros;
}

function validaCpf(erros, cpf) {
    if (cpf == "") {
        erros.push("O campo cpf não pode ficar vazio!");
    }
    return erros;
}

function validaSalario(erros, salario) {
    if (salario == "") {
        erros.push("O campo salário não pode ficar vazio!");
    }
    return erros;
}

function validaCargo(erros, cargo) {
    if (cargo == "") {
        erros.push("O campo cargo não pode ficar vazio!");
    }
    return erros;
}

function adicionaErro(erro) {
    var div_erros = document.querySelector("#div-erros");

    var span = document.createElement("span");
    span.textContent = mensagem;

    var br = document.createElement("br");

    div_erros.appendChild(span);
    div_erros.appendChild(br);
}

function exibeErros(mensagens) {
    for (mensagem of mensagens) {
        adicionaErro(mensagem);
    }
}

function limpaErros() {
    document.querySelector("#div-erros").innerHTML = "";
}

function adicionaFuncionario(event) {
    event.preventDefault();
    var formulario = this;
    var erros = [];

    var nome = formulario.querySelector("#nome").value;
    var cpf = formulario.querySelector("#cpf").value;
    var salario = formulario.querySelector("#salario").value;
    var cargo = formulario.querySelector("#cargo").value;

    salario = new Intl.NumberFormat('pt-br', {style: 'currency', currency: 'BRL'}).format(salario);

    erros = validaNome(erros, nome);
    erros = validaCpf(erros, cpf);
    erros = validaSalario(erros, salario);
    erros = validaCargo(erros, cargo);

    if (erros.length > 0) {
        limpaErros();
        exibeErros(erros);
        return;
    }
    limpaErros();

    var cargoTexto = pegaTextoCargo(cargo);

    adicionaTr(nome, cpf, salario, cargoTexto);
}

var formulario = document.querySelector("form");
formulario.addEventListener("submit", adicionaFuncionario);
