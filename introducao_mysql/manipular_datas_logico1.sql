use sucos;

alter table tbCliente add primary key (CPF);

alter table tbCliente add column (DATA_NASCIMENTO DATE);

insert into tbCliente (
	CPF, NOME, ENDERECO1, ENDERECO2, BAIRRO, CIDADE, ESTADO, CEP, IDADE, SEXO,
    LIMITE_CREDITO, VOLUME_COMPRA, PRIMEIRA_COMPRA, DATA_NASCIMENTO)
    VALUES (
    '00388934505', 'João da Silva', 'Rua projetada A número 10', '',
    'VILA ROMAN', 'CARATINGA', 'AMAZONAS', '2222222', 30, 'M', 10000, 2000,
    0, '1989-10-05');
    
select * from tbCliente;