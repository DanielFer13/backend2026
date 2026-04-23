<?php
$idade = 16;

if ($idade >= 18) { // Verifica se a idade é maior ou igual a 18
    echo "Você é maior de idade.";
} else { // Caso contrário, exibe a mensagem para menores de idade
    echo "Você é menor de idade.";
}
?>

<?php
$hora = 18;

if ($hora < 12) {
    echo "Bom dia!";
} elseif ($hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}
?>

<hr>
<?php

$semaforo = "vermelho";
  
if ($semaforo == "verde") {    //== é o operador de comparação, = é o operador de atribuição
    echo "Pode atravessar.";
} elseif ($semaforo == "amarelo") { //elseif é usado para verificar uma condição adicional caso a primeira condição seja falsa
    echo "Atenção, prepare-se para parar.";
} elseif ($semaforo == "vermelho") {
    echo "Pare, não atravesse.";
} else {
    echo "Sinal de trânsito desconecido."; //a função desse else foi para tratar o caso do valor da variável $semaforo ser diferente dos valores esperados (verde, amarelo, vermelho)
}
?>

<hr> 

<?php
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1: //case e usado para verificar o valor da variável $diaSemana e executar o código correspondente ao valor encontrado
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>

<hr>
<?php

date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para São Paulo
echo date('d/m/Y H:i:s');  // Exibe a data e hora atual do seu pais no formato dia/mês/ano horas:minutos:segundos
?>

<hr> 
<?php
$nome =  "u";
echo "nome = $nome"; 
echo "<br>md5 = " . md5($nome);//md5 é uma função de hash que gera um valor de 32 caracteres a partir de uma string de entrada, nesse caso a string é "uninove"
$hash = password_hash($nome, PASSWORD_DEFAULT); //password_hash é uma função que gera um hash seguro para senhas, usando um algoritmo de hashing forte e um salt aleatório
echo "<br>hash = " . $hash 
?> 
 