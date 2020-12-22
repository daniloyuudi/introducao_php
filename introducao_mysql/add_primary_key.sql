use sucos;

alter table tbProduto add primary key (PRODUTO);

select * from tbProduto;

insert into tbProduto (
	PRODUTO, NOME, EMBALAGEM, TAMANHO, SABOR, PRECO_LISTA
) VALUES (
	'1078680', 'Frescor do Verão - 470 ml - Manga', 'Lata', '470 ml', 'Manga', 5.18
);

update tbProduto set EMBALAGEM = 'Garrafa'
	WHERE PRODUTO = '1078680';