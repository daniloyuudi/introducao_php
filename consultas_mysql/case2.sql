SELECT NOME, CASE
	WHEN YEAR(DATA_DE_NASCIMENTO) < 1990 THEN 'VELHO'
    WHEN YEAR(DATA_DE_NASCIMENTO) >= 1990 AND YEAR(DATA_DE_NASCIMENTO) <= 1995 THEN 'JOVEM'
    ELSE 'CRIANÇA'
END AS CLASSIFICACAO
FROM tabela_de_clientes;