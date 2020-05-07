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
    			<h1 style="margin-left: 120px; margin-top: 25px; color: #59f;">Fazer -Login</h1>

                <form action="cadastrar.php" method="POST" enctype="multpart/form-data">
                
                <input type="email" name="email " placeholder="Digite o email cadastrado" required="ops" class="campos_cad">

                <input type="password" name="senha" placeholder="Digite a senha cadastrada" required="ops" class="campos_cad">
                
                
                <input type="submit" name="login" value="logar" class="bt_cad">

                <input type="reset" name="limpar" value="limpar" class="bt_cad">
                </form>
    		</div>
    		<div id="rodape">
    			<?php include "rodape.php";?>
    		</div>

    </div>
 </body>
</html>