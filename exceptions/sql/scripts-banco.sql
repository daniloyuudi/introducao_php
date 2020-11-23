DROP TABLE funcionario;

CREATE TABLE funcionario (
    nome VARCHAR(150) NOT NULL,
    cpf VARCHAR(14) NOT NULL PRIMARY KEY,
    salario INT NOT NULL,
    tipo CHAR(1) NOT NULL
);

INSERT INTO funcionario (nome, cpf, salario, tipo) VALUES (
        "Osvaldo Bento Leandro Pinto",
        "598.994.685-68",
        1000, "1"
    );
    
INSERT INTO funcionario VALUES (
        "Vitor Caleb Sérgio da Cruz",
        "445.859.686-10",
        100000, "2"
    );
    
INSERT INTO funcionario VALUES (
	"Lucas André da Silva",
	"799.218.117-46",
        20000, "3");
        
INSERT INTO funcionario VALUES ("Eduarda Lorena Carolina Gomes",
        "497.845.844-76", 200, "3");
    
INSERT INTO funcionario VALUES ("Ryan Murilo Manuel Brito",
        "314.234.460-89", 1000, "0");
        
INSERT INTO funcionario VALUES ("L",
	"123.456.789-10", 200000000, "1");
    
DELETE FROM funcionario WHERE cpf = "123.456.789-10";

SELECT * FROM funcionario;