SELECT CONCAT('O cliente ', C.NOME, ' faturou R$ ',
ROUND(SUM(INF.QUANTIDADE * INF.PRECO), 2), ' no ano de 2016')
AS FATURAMENTO
FROM tabela_de_clientes C
LEFT JOIN notas_fiscais NF
ON C.CPF = NF.CPF
INNER JOIN itens_notas_fiscais INF
ON NF.NUMERO = INF.NUMERO
WHERE YEAR(NF.DATA_VENDA) = 2016
GROUP BY C.CPF;