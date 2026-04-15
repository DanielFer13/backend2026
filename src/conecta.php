<?php
$host = 'db'; $db = 'app_db'; $user = 'app_user'; $pass = 'app_pass';
//host seria o local onde seu banco de dados esta.
//app_db é o nome do banco de dados criado
//app_user é o nome do usuário criado para acessar o banco de dados
//app_pass é a senha do usuário criado para acessar o banco de dados
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
//dsn é a string de conexão que o PDO usa para se conectar ao banco de dados. Ela inclui o tipo de banco de dados (mysql), o host, o nome do banco de dados e a codificação de caracteres.
//charset=utf8mb4 é importante para garantir que o banco de dados suporte caracteres Unicode, como emojis e caracteres acentuados.
try { 
    //try é um bloco de código que tenta executar a conexão com o banco de dados. Se ocorrer um erro, ele será capturado pela cláusula catch.
    $pdo = new PDO($dsn, $user, $pass, [ 
        //pdo é a classe do PHP que representa a conexão com o banco de dados. O construtor recebe a string de conexão, o nome de usuário, a senha e um array de opções.
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         //pdo::ATTR_ERRMODE é uma opção que define o modo de tratamento de erros do PDO. PDO::ERRMODE_EXCEPTION faz com que o PDO lance uma exceção (PDOException) quando ocorrer um erro, em vez de apenas emitir um aviso ou retornar false.
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        //pdo::ATTR_DEFAULT_FETCH_MODE é uma opção que define o modo de busca padrão para as consultas. PDO::FETCH_ASSOC faz com que as consultas retornem um array associativo, onde as chaves são os nomes das colunas do banco de dados.
    ]);
} catch (PDOException $e) {//catch é uma cláusula que captura a exceção lançada pelo try. PDOException é a classe de exceção específica para erros do PDO. $e é a variável que armazena a exceção capturada.
    die("Erro de conexão: " . $e->getMessage());
} 