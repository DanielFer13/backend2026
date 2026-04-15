<?php
require_once 'conecta.php';
$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT DEFAULT 0 
)";
//in default 0, a quantidade será 0 se não for especificada durante a inserção de um novo produto
//exec é um método do PDO que executa uma consulta SQL que não retorna resultados, como CREATE TABLE, INSERT, UPDATE ou DELETE. Ele retorna o número de linhas afetadas pela consulta, ou false em caso de erro.
$pdo->exec($sql);
echo "<h1>Tabela criada com sucesso!</h1>";
//header("Location: relatorio.php?msg=tabela_pronta");