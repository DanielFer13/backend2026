<?php
echo "<h1>Recebe</h1>";
echo "<pre>";
print_r($_POST); echo "</pre>"; //COMENTARIO serve para deixar dados recentes salvos na caixa de login, senha e etc...
$login=$_POST["login"];
$senha=$_POST["senha"];

echo"login: <b>$login</b><br>";
echo"senha: <b>$senha</b><br>";  
?>