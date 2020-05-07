<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'curso_php');
//define('DOMAIN', 'http://www.kpinaterrenos.com.br/netWorking2020/');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('"Ops" atenção: não foi possível conectar; administrador sendo contactado em 3.2.1....');