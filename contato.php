<!DOCTYPE html>
<html>
<head>
    <title>Site em php</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
    <div id="geral">
        
            <div id="topo">
                <?php include "topo.php";?>
            </div>
            <div id="menu">
                <?php include "menu.php";?>
            </div>
            <div id="conteudo">
            <div id="conteudo_principal">                
                <img width="55px;" height="55px" class="logo_contato" src="https://a23.vn/wp-content/uploads/2014/11/L%E1%BB%A3i-%C3%ADch-khi-s%E1%BB%AD-d%E1%BB%A5ng-SMS-Marketing.png">
                <form action="cad_contato.php" method="POST">
                    <label class="legenda">Nome:</label><br>
                    <input type="text" name="nome" class="campos" placeholder="Seu nome Completo" required><br>
                    <label class="legenda">E-mail:</label><br>
                    <input type="email" name="email" class="campos" placeholder="Seu E-mail Válido" required><br>
                    <label class="legenda">Assunto:</label><br>
                    <input type="text" name="assunto" class="campos" placeholder="Sobre qual assunto?" required><br>
                    <label class="legenda">Conteudo:</label><br>
                    <textarea name="conteudo" class="campo2" placeholder="Digite aqui seu texto, só obsserve o português por gentileza." maxlength="200" required></textarea><br>
                    <input type="submit" value="Enviar" class="bt_enviar">    
                </form>
                
            </div>
            <div id="rodape">
                <?php include "rodape.php";?>
            </div>

    </div>
 </body>
</html>