<!DOCTYPE html>
<html>
<head>
	<title>Site em php</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
    			<div id="conteudo_principal">
                <div class="postagens">
                 <h1 class="titulos">Douglas Pereira Lacerda</h1>
                    <img src="imagem/composing-5026654_960_720.jpg">
                    <p class="paragrafo">paragrafo provisório...</p>
                    <span class="data">05/05/2020</span>
                </div>                
    		</div>
            <div id="postagens_recentes">
                    <h1 class="titulos">Trabalhos recentes</h1>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQXGGYPg6UMrQmHsiSe1H0gsSwCqwM2y6Y42j32JA0HArUWGfoO&usqp=CAU" class="imagem">
                    <h1 class="titulos"><a href="#">Titulo dos arquivos recentes</a></h1>
                    <span>ok</span>
                    <span class="data">05/05/2020</span>
                </div>
            </div>
    		<div id="rodape">
    			<?php include "rodape.php";?>
    		</div>

    </div>
 </body>
</html>
