<!DOCTYPE html>
<html>
<head>
	<title>Site em php</title>
	<link rel="stylesheet" type="text/css" href="css/cad_log.css">
    
</head>
<body oncontextmenu="return false;">
    <div id="geral">
    	
            <div id="topo">
    			<?php include "topo.php";?>
    		</div>
    		<div id="menu">
    			<?php include "menu.php";?>
    		</div>
    		<div id="conteudo">
                <h1 style="margin-left: 120px; margin-top: 25px; color: #59f;">Cadastre - se</h1>
    			<form action="cadastrar.php" method="POST" c>
                <input type="text" name="nome" placeholder="Digite o seu nome Completo" required="ops" class="campos_cad">
                <input type="email" name="email" placeholder="Digite um e-mail válido" required="ops" class="campos_cad">
                <input type="password" name="senha" placeholder="atenção escolher uma senha segura" required="ops" class="campos_cad">
                <input type="password" name="repetesenha" placeholder="repetir a senha com atenção" required="ops" class="campos_cad">
                <input type="text" name="lembrete" placeholder="Digite um lembrete para sua senha" required="ops" class="campos_cad">
                <input type="file" name="foto" class="campos_cad">
                <input type="submit"  value="cadastrar" class="bt_cad">
                <input type="reset"  value="limpar" class="bt_cad">
                </form>
            </div>
    		<div id="rodape">
    			<?php include "rodape.php";?>
    		</div>

    </div>
 </body>
</html>