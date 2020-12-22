use sucos;

update tbProduto set EMBALAGEM = 'Lata', PRECO_LISTA = 2.46
	WHERE PRODUTO = '544931';
    
update tbProduto set EMBALAGEM = 'Garrafa'
	WHERE PRODUTO = '1078680';
    
select * from tbProduto;