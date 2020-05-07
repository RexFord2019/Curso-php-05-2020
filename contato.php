<!DOCTYPE html>
<html>
<head>
    <title>Site em php</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                    <textarea name="conteudo" class="campo2" placeholder="Digite aqui seu texto, só obsserve o português por gentileza." maxlength="200"></textarea><br>
                    <input type="submit" value="Enviar" class="bt_enviar">    
                </form>
                <br>
                <?php echo "__________________"; ?>
                
                <SCRIPT LANGUAGE="JAVASCRIPT">
<!--

var now = new Date();
var mName = now.getMonth() +1 ;
var dName = now.getDay() +1;
var dayNr = now.getDate();
var yearNr=now.getYear();
if(dName==1) {Day = "Domingo";}
if(dName==2) {Day = "Segunda-feira";}
if(dName==3) {Day = "Terça-feira";}
if(dName==4) {Day = "Quarta-feira";}
if(dName==5) {Day = "Quinta-feira";}
if(dName==6) {Day = "Sexta-feira";}
if(dName==7) {Day = "Sábado";}
if(mName==1){Month = "Janeiro";}
if(mName==2){Month = "Fevereiro";}
if(mName==3){Month = "Março";}
if(mName==4){Month = "Abril";}
if(mName==5){Month = "Maio";}
if(mName==6){Month = "Junho";}
if(mName==7){Month = "Julho";}
if(mName==8){Month = "Agosto";}
if(mName==9){Month = "Setembro";}
if(mName==10){Month = "Outubro";}
if(mName==11){Month = "Novembro";}
if(mName==12){Month = "Dezembro";}
if(yearNr < 2000) {Year = 1900 + yearNr;}
else {Year = yearNr;}
var todaysDate =(" " + Day + ", " + dayNr + "/" + Month + "/" + Year);

document.write('  '+todaysDate);

//-->
</SCRIPT>

  
<SPAN ID="Clock">00:00:00</SPAN>

<SCRIPT LANGUAGE="JavaScript">
<!--
  var Elem = document.getElementById("Clock");
  function Horario(){ 
    var Hoje = new Date(); 
    var Horas = Hoje.getHours(); 
    if(Horas < 10){ 
      Horas = "0"+Horas; 
    } 
    var Minutos = Hoje.getMinutes(); 
    if(Minutos < 10){ 
      Minutos = "0"+Minutos; 
    } 
    var Segundos = Hoje.getSeconds(); 
    if(Segundos < 10){ 
      Segundos = "0"+Segundos; 
    } 
    Elem.innerHTML = Horas+":"+Minutos+":"+Segundos; 
    } 
    window.setInterval("Horario()",1000);
//-->
</SCRIPT>   <br><br><br><br> 
            </div>
            <div id="recentes">
    
    <h1 class="titulos" style="margin-left: 50px; margin-top: 25px; color: #59f;">O que podemos fazer</h1>
    <h1 class="titulos"><a href="#">nossos Contatos:</a></h1>
    <span></span>
   <span class="data">05/05/2020</span>
    
</div>
            <div id="rodape">
                <?php include "rodape.php";?>
            </div>

    </div>
 </body>
</html>