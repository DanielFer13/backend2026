
<?php
$a=10;
$b=2;
echo "Adição:".($a + $b);//COMENTARIO a saida mostrada é adicao que ira somar as variaveis acima 10 e 2
echo "<br>Subtração:".($a - $b);//COMENTARIO a saida mostrada é subtração que ira subtrair as variaveis acima 10 e 2
echo "<br>Multiplicação:".($a * $b);//COMENTARIO a saida mostrada é multiplicação que ira multiplicar as variaveis acima 10 e 2
echo "<br>Divisão:".($a / $b);//COMENTARIO a saida mostrada é divisão que ira dividir as variaveis acima 10 e 2
echo "<br>Módulo:".($a % $b);/* a saida mostrada é módulo que ira calcular o resto da divisão das variaveis acima 10 e 2
o simbolo de porcentagem  e ele nao me dara o resultado certo apena 1 para resultado par e 0 para resultado impar
*/
echo "<br>Exponenciação:".($a ** $b);//a saida mostrada é exponenciação que ira calcular a potência das variaveis acima 10 e 2
?>
<hr>
<?php
$a=10;//a variavel a recebe o valor 10
$b=2;//a variavel b recebe o valor 2
$a+=$b;//a variavel a recebe o valor dela mesma mais o valor da variavel b ou seja 10 + 2 exemplo a = a + b
$b-=5;//a variavel b recebe o valor dela mesma menos 5 exemplo 2 - 5
echo "a = ".$a;//a saida mostrada é a = 12 que é o resultado da variavel a mais a variavel b exemplo 10 + 2
echo "<br>b = ".$b;//a saida mostrada é b = -3 que é o resultado da variavel b menos 5 exemplo 2 - 5 exemplo b = b - 5
$c=11;
$d=6;
$c%=$d;//a variavel c recebe o valor dela mesma módulo a variavel d exemplo 11 % 6 - //$c=11%6//$c=5
$d+=$a;//a variavel d recebe o valor dela mesma mais a variavel a exemplo 6 + 12 exemplo d = d + a //$d=6+12//$d=18
echo "<br>c = ".$c;//a saida mostrada é c = 5 que é o resultado do módulo de 11 e 6 exemplo 11 % 6
echo "<br>d = ".$d;//a saida mostrada é d = 17 que é o resultado da variavel d mais a variavel a exemplo 6 + 11
?>
<hr>
<?php
$nome="Daniel";
echo $nome. $d;
$c.="cinco";//c = 5. "cinco"//c="5cinco"
echo "<br> c = ".$c;/*a saida mostrada é c = 5 cinco que é o resultado da variavel c mais a string cinco]
 exemplo 5 . cinco*/
?>
<hr>
<?php
$x = 100;//a variavel x recebe o valor 100
echo "x = ".++$x;//a saida mostrada é x = 101 que é o resultado da variavel x mais 1 exemplo 100 + 1 = 101
/*caso eu inverta o ++ com o $x a saida mostrada seria x = 100 porque o incremento é feito depois
 da exibição do valor da variavel x */
//a função do ++ é para incrementar o valor da variavel x ou seja para somar 1 ao valor da variavel x
echo "<br>x final = ".$x;/*a saida mostrada é x final = 101 que é o resultado da variavel x depois
 do incremento exemplo 100 + 1 = 101 caso eu inverta o ++ com o $x a saida mostrada 
 seria x final = 100 porque o incremento é feito depois da exibição do valor da variavel x */
?>
<hr>
<?php
 $i=10;
echo "<br>i = ".$i;//a saida mostrada é i = 10 que é o valor da variavel i
$i++;//11
$i++;//12
++$i;//13
echo "<br>i = ".$i;//13 esse foi o valor da variavel i depois de ser incrementada 3 vezes exemplo 10 + 1 + 1 + 1 = 13
$i--;//12
--$i;//11
echo "<br>i = ".$i;//agora o valor final da variavel sera 11
?>