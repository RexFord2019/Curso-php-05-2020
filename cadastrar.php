<?php 
//Arquivo de cadastro

$nome     = $_POST ['nome'];
$email    = $_POST ['email'];
$senha    = $_POST ['senha'];
$resenha  = $_POST ['repetesenha'];
$lembrete = $_POST ['lembrete'];
$foto     = $_FILES['foto']['name'];
$tipo     = $_FILES['foto']['type'];


echo "nome   :    $nome<br>";
echo "email  :    $email<br>";
echo "senha  :    $senha<br>";
echo "repetição da senha: $resenha<br>";
echo "lembrete  : $lembrete<br>";
echo "foto  :     $foto<br>";
echo "tipo  :     $tipo<br>";


?>