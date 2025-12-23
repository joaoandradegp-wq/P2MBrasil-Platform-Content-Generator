<html>
<head>
</head>
<title>CÓDIGO GERADO - WWW.P2MBRASIL.COM</title>
<style type="text/css">
.style1 {
    color: #FF0000;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
    color: #FF0000;
	font-weight: bold;
	font-family: Verdana;
	font-size: 16px;
}
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style4 {
    color: #000000;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
</style>
<body background="fundo.jpg">
<?php
$titulo = $_POST['titulo'];
$nomcap = $_POST['nomcap'];
$saga = $_POST['saga'];
$episodio = $_POST['episodio'];
$duracao = $_POST['duracao'];
$sinopse = $_POST['sinopse'];
$resoluc = $_POST['resoluc'];
$vcodec = $_POST['vcodec'];
$acodec = $_POST['acodec'];
$video = $_POST['video'];
$audio = $_POST['audio'];
$legenda = $_POST['legenda'];
$comentario = $_POST['comentario'];
$tamanho = $_POST['tamanho'];
$formato = $_POST['formato'];
$nota = $_POST['nota'];
$idioma = $_POST['idioma'];
$idioma2 = $_POST['idioma2'];
$segmentos = $_POST['segmentos'];
$versao = $_POST['versao'];
$merge = $_POST['merge'];
$poster = $_POST['poster'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$img3 = $_POST['img3'];
$img4 = $_POST['img4'];
$uploader = $_POST['uploader'];
$p2m = $_POST['p2mq'];
$id = $_POST['idq'];
$ide = $_POST['ideq'];
$tipo = $_POST['tipo'];
$login = $_POST['login'];
$conta = $_POST['conta'];
$senha = $_POST['senha'];
$login1 = $_POST['login1'];
$conta1 = $_POST['conta1'];
$senha1 = $_POST['senha1'];
$login2 = $_POST['login2'];
$conta2 = $_POST['conta2'];
$senha2 = $_POST['senha2'];
if (($img1 == "") or ($img1 == "http://")){ $img1="http://www.p2mbrasil.com/forum/gerador/shot.gif"; }
if (($img2 == "") or ($img2 == "http://")){ $img2="http://www.p2mbrasil.com/forum/gerador/shot.gif"; }
if (($img3 == "") or ($img3 == "http://")){ $img3="http://www.p2mbrasil.com/forum/gerador/shot.gif"; }
if (($img4 == "") or ($img4 == "http://")){ $img4="http://www.p2mbrasil.com/forum/gerador/shot.gif"; }
if($titulo == "") { $titulo="N/A"; }
if($genero == "") { $genero="N/A"; }
if($saga == "") { $saga="N/A"; }
if($episodio == "") { $episodio="N/A"; }
if($nomcap == "") { $nomcap="N/A"; }
if($formato == "DVDRip") { $formato="<font color=red>DVDRip</font>"; }
if($legenda == "Indisponível") { $legenda="<font color='#B0B0B0'><center>Indisponível</center></font>"; }
if($comentario == "") { $comentario="<font color='#B0B0B0'><center>Não há comentários</center></font>"; }
if($sinopse == "") { $sinopse="<font color='#B0B0B0'><center>Indisponível</center></font>"; }
if($tamanho == "") { $tamanho="N/A";}
if($nota == "Excelente") { $nota="<font color=red>Excelente</font>"; }
if($segmentos == "") { $segmentos="N/A"; }
if($resoluc == "") { $resoluc="N/A"; }
if($duracao == "") { $duracao="N/A"; }
if($acodec == "") { $acodec="N/A"; }
if($vcodec == "") { $vcodec="N/A"; }
if($segmentos == "") { $segmentos="N/A"; }
if($versao == "") { $versao="N/A"; }
if($uploader == "") { $uploader="www.p2mbrasil.com"; }
if($merge == "") { $merge="<font color='#B0B0B0'><center>O arquivo não possui senha</center></font>"; }
if($merge != "") { $merge="<center>$merge</center>"; }
?>
<center><span class="style1">CÓDIGO GERADO: <?=stripslashes(htmlspecialchars($titulo))?></span>
<p><span class="style1">Certifique-se de ter copiado o código INTEIRO antes de postar.</span></p>
<p><textarea name="textarea" cols="100" rows="25">
[dohtml]
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<th bgcolor="F4F6FB" scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
<th width="48%" valign="top" scope="col"><table width="70%" border="0" cellpadding="0" cellspacing="1" bgcolor="#000000">
<tr>
<td background="http://www.p2mbrasil.com/forum/gerador/bkg1.jpg" scope="col"><div align="center" class="style2" width="350" height="511">Capa</div></td>
</tr>
<tr><td valign="top" bgcolor="#F4F6FB"><div align="center">
<?php
if (($poster == "") or ($poster == "http://")) {
echo  "<img src='http://www.p2mbrasil.com/forum/gerador/shot.gif' width='350' height='511'>";
}
else {
echo "<img src='$poster' width='350' height='511'>";
}
?>
</div>
</td>
</tr>
<tr>
<td valign="top" background="http://www.p2mbrasil.com/forum/gerador/bkg1.jpg" bgcolor="#F4F6FB" class="style2">
<div align="center">Cenas</div>
</td>
</tr>
<tr>
<td valign="top" bgcolor="#F4F6FB"><table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<th scope="col" width="173" height="131"><a href="<?PHP echo $img1; ?>" target="_blank"><img src="<?PHP echo $img1; ?>" width="173" height="131"></a></th>
<th scope="col" width="173" height="131"><a href="<?PHP echo $img2; ?>" target="_blank"><img src="<?PHP echo $img2; ?>" width="173" height="131"></a></th>
</tr>
<tr>
<th scope="col" width="173" height="131"><a href="<?PHP echo $img3; ?>" target="_blank"><img src="<?PHP echo $img3; ?>" width="173" height="131"></a></th>
<th scope="col" width="173" height="131"><a href="<?PHP echo $img4; ?>" target="_blank"><img src="<?PHP echo $img4; ?>" width="173" height="131"></a></th>
</tr>
</table>
</td>
</tr>
</table>
</th>
<th width="51%" valign="top" scope="col">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<td></td>
</tr>
<tr>
<tr>
<td background="http://www.p2mbrasil.com/forum/gerador/bkg2.jpg" scope="col">
Ficha Técnica:
<div align="left">
</div>
</td>
</tr>
<tr>
<td bgcolor="#000000"><table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr bgcolor="#F4F6FB">
<th width="48%" scope="col">
<div align="center">Nome:</div></th>
<td width="52%" scope="col">
<div align="center"><?=stripslashes(htmlspecialchars($titulo))?></div></td>
</tr>
<tr bgcolor="#F4F6FB">
<td bgcolor="#F4F6FB"><div align="center"><strong>Saga:</strong></div></td>
<td><div align="center"><?=stripslashes(htmlspecialchars($saga))?></div></td>
</tr>
<tr bgcolor="#F4F6FB">
<td bgcolor="#F4F6FB"><div align="center"><strong>Nome do Episódio:</strong></div></td>
<td><div align="center"><?=stripslashes(htmlspecialchars($nomcap))?></div></td>
</tr>
<tr bgcolor="#F4F6FB">
<td bgcolor="#F4F6FB"><div align="center"><strong>Número:</strong></div></td>
<td><div align="center"><?=stripslashes(htmlspecialchars($episodio))?></div></td>
</tr>
<tr bgcolor="#F4F6FB">
<td bgcolor="#F4F6FB"><div align="center"><strong>Tempo de Duração:</strong></div></td>
<td><div align="center"><?=stripslashes(htmlspecialchars($duracao))?></div></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>&amp;nbsp;</td>
</tr>
<tr>
<td background="http://www.p2mbrasil.com/forum/gerador/bkg2.jpg">Descrição do Episódio:</td>
</tr>
<tr>
<td bgcolor="#000000"><table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td bgcolor="#F4F6FB" scope="col" align="justify"><?=stripslashes(htmlspecialchars(nl2br(($sinopse))))?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>&amp;nbsp;</td>
</tr>
<tr>
<td background="http://www.p2mbrasil.com/forum/gerador/bkg2.jpg">Comentários do Uploader:</td>
</tr>
<tr>
<td bgcolor="#000000"><table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td bgcolor="#F4F6FB" scope="col"><?=stripslashes(htmlspecialchars(nl2br(($comentario))))?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>&amp;nbsp;</td>
</tr>
<tr>
<td background="http://www.p2mbrasil.com/forum/gerador/bkg2.jpg">Características:</td>
</tr>
<tr>
<td bgcolor="#000000"><table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr bgcolor="#F4F6FB">
<th width="49%" scope="col"><div align="center">Tamanho:</div></th>
<td width="51%" scope="col"><div align="center"><?=stripslashes(htmlspecialchars(strtoupper(($tamanho))))?></div>
</td>
</tr>
<tr bgcolor="#F4F6FB">
<td><div align="center"><strong>Resolução:</strong></div>
</td>
<td><div align="center"><?=stripslashes(htmlspecialchars(($resoluc)))?></div>
</td>
</tr>
<tr bgcolor="#F4F6FB">
<td><div align="center"><strong>Formato:</strong></div>
</td>
<td><div align="center"><?PHP echo $formato; ?></div>
</td>
</tr>
<tr bgcolor="#F4F6FB">
<td><div align="center"><strong>Qualidade de Áudio:</strong></div>
</td>
<td><div align="center"><?PHP echo $audio; ?></div>
</td>
</tr>
<tr bgcolor="#F4F6FB">
<td><div align="center"><strong>Qualidade de Vídeo:</strong></div>
</td>
<td><div align="center"><?PHP echo $video; ?></div>
</td>
</tr>
<tr bgcolor="#F4F6FB">
<td><div align="center"><strong>Vídeo Codec:</strong></div>
</td>
<td><div align="center"><?=stripslashes(htmlspecialchars(($vcodec)))?></div>
</td>
</tr>
<tr bgcolor="#F4F6FB">
<td><div align="center"><strong>Áudio Codec:</strong></div>
</td>
<td><div align="center"><?=stripslashes(htmlspecialchars(($acodec)))?></div>
</td>
</tr>
<tr bgcolor="#F4F6FB">
<td><div align="center"><strong>Idioma:</strong></div>
</td>
<td><div align="center">
<?PHP
if($idioma2 == "---------------"){
echo $idioma;}
else{
echo "$idioma / $idioma2";}
?>
</div>
</td>
</tr>
<tr bgcolor="#F4F6FB">
<td><div align="center"><strong>Número de Segmentos:</strong></div>
</td>
<td><div align="center"><?=stripslashes(htmlspecialchars(strtoupper((($segmentos)))))?></div>
</td>
</tr>
<tr bgcolor="#F4F6FB">
<td><div align="center"><strong>Nota do Uploader:</strong></div>
</td>
<td><div align="center"><?PHP echo $nota; ?></div>
</td>
</tr>
<tr bgcolor="#F4F6FB">
<td><div align="center"><strong>Versão do Peer2Mail:</strong></div>
</td>
<td><div align="center"><?=stripslashes(htmlspecialchars(($versao)))?></div>
</td>
</tr>
</table></td>
</tr>
<tr>
<td>&amp;nbsp;</td>
</tr>
<tr>
<td background="http://www.p2mbrasil.com/forum/gerador/bkg2.jpg" class="style6">Legenda:</td>
</tr>
<tr>
<td bgcolor="#000000"><table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<th bgcolor="#F4F6FB" class="style6" scope="col"><center><?PHP echo $legenda; ?></center></th>
</tr>
</table></td>
</tr>
<tr>
<td>&amp;nbsp;</td>
</tr>
<tr>
<td background="http://www.p2mbrasil.com/forum/gerador/bkg2.jpg" class="style6">Senha para o merge:</td>
</tr>
<tr>
<td bgcolor="#000000"><table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<th bgcolor="#F4F6FB" class="style6" scope="col"><?=stripslashes(htmlspecialchars(($merge)))?></th>
</tr>
</table>
</td>
</tr>
<tr>
<td>&amp;nbsp;</td>
</tr>
<?php

$compaP2M=(count($conta)/(1));
$i2=0;

$compaID=(count($conta1)/(1));
$i4=0;

$compaIDE=(count($conta2)/(1));
$i6=0;

$p2mconta=0;
$p2mlogin=0;
$p2msenha=0;

$idconta=0;
$idlogin=0;
$idsenha=0;

$idsconta=0;
$idslogin=0;
$idssenha=0;

    //Peer2Mail
    for ($i = 0; $i < 1; $i++){
    $auxP2M=$compaP2M+$i2;
    echo"
    <tr>
    <td background='http://www.p2mbrasil.com/forum/gerador/bkg2.jpg' class='style6'>Download: (P2M)</td>
    </tr>
    <tr>
    <td bgcolor='#000000'><div align='center'>
    <table width='100%' border='0' cellspacing='1' cellpadding='0'>
    <tr bgcolor='#F4F6FB'>
    <th width='20%' bgcolor='#FFFFFF' scope='col'>Conta</th>
    <th width='37%' bgcolor='#FFFFFF' scope='col'>Login</th>
    <th width='43%' bgcolor='#FFFFFF' scope='col'>Senha</th>
    </tr>";

    for (; $i2 < $auxP2M; $i2++){
    $p2mconta=stripslashes(htmlspecialchars(($conta[$i2])));
    $p2mlogin=stripslashes(htmlspecialchars(($login[$i2])));
    $p2msenha=stripslashes(htmlspecialchars(($senha[$i2])));
    echo "
    <tr bgcolor='#F4F6FB'>
    <td><div align='center'><font color='green'><b>&amp;nbsp;$p2mconta&amp;nbsp;</font></b></div></td>
    <td><div align='center'><font color='green'><b>&amp;nbsp;$p2mlogin&amp;nbsp;</font></b></div></td>
    <td><div align='center'><font color='green'><b>&amp;nbsp;$p2msenha&amp;nbsp;</font></b></div></td>
    </tr>";}

    echo "
    </table>
    </div></td>
    </tr>
    <td></td>
    </tr>
    <tr>
    <td>&amp;nbsp;</td>";
    }
    //Fim Peer2Mail
    
  //Ilusions Downloader
  if ($id > 0){
  
    for ($i3 = 0; $i3 < 1; $i3++){
    $auxID=$compaID+$i4;
    echo"
    <tr>
    <td background='http://www.p2mbrasil.com/forum/gerador/bkg2.jpg' class='style6'>Download: (ID)</td>
    </tr>
    <tr>
    <td bgcolor='#000000'><div align='center'>
    <table width='100%' border='0' cellspacing='1' cellpadding='0'>
    <tr bgcolor='#F4F6FB'>
    <th width='20%' bgcolor='#FFFFFF' scope='col'>Conta</th>
    <th width='37%' bgcolor='#FFFFFF' scope='col'>Login</th>
    <th width='43%' bgcolor='#FFFFFF' scope='col'>Senha</th>
    </tr>";

    for (; $i4 < $auxID; $i4++){
    $idconta=stripslashes(htmlspecialchars(($conta1[$i4])));
    $idlogin=stripslashes(htmlspecialchars(($login1[$i4])));
    $idsenha=stripslashes(htmlspecialchars(($senha1[$i4])));
    echo "
    <tr bgcolor='#F4F6FB'>
    <td><div align='center'><font color='blue'><b>&amp;nbsp;$idconta&amp;nbsp;</font></b></div></td>
    <td><div align='center'><font color='blue'><b>&amp;nbsp;$idlogin&amp;nbsp;</font></b></div></td>
    <td><div align='center'><font color='blue'><b>&amp;nbsp;$idsenha&amp;nbsp;</font></b></div></td>
    </tr>";}

    echo "
    </table>
    </div></td>
    </tr>
    <td></td>
    </tr>
    <tr>
    <td>&amp;nbsp;</td>";
    }
  }
  //Fim Ilusions Downloader
  
  //Iddeias
  if ($ide > 0){

    for ($i5 = 0; $i5 < 1; $i5++){
    $auxIDE=$compaIDE+$i6;
    echo"
    <tr>
    <td background='http://www.p2mbrasil.com/forum/gerador/bkg2.jpg' class='style6'>Download: (IDS)</td>
    </tr>
    <tr>
    <td bgcolor='#000000'><div align='center'>
    <table width='100%' border='0' cellspacing='1' cellpadding='0'>
    <tr bgcolor='#F4F6FB'>
    <th width='20%' bgcolor='#FFFFFF' scope='col'>Conta</th>
    <th width='37%' bgcolor='#FFFFFF' scope='col'>Login</th>
    <th width='43%' bgcolor='#FFFFFF' scope='col'>Senha</th>
    </tr>";

    for (; $i6 < $auxIDE; $i6++){
    $idsconta=stripslashes(htmlspecialchars(($conta2[$i6])));
    $idslogin=stripslashes(htmlspecialchars(($login2[$i6])));
    $idssenha=stripslashes(htmlspecialchars(($senha2[$i6])));
    echo "
    <tr bgcolor='#F4F6FB'>
    <td><div align='center'><font color='#FF9900'><b>&amp;nbsp;$idsconta&amp;nbsp;</font></b></div></td>
    <td><div align='center'><font color='#FF9900'><b>&amp;nbsp;$idslogin&amp;nbsp;</font></b></div></td>
    <td><div align='center'><font color='#FF9900'><b>&amp;nbsp;$idssenha&amp;nbsp;</font></b></div></td>
    </tr>";}
    
    echo "
    </table>
    </div></td>
    </tr>
    <td></td>
    </tr>
    <tr>
    <td>&amp;nbsp;</td>";
    }
  }
  //Fim Iddeias
?>
</tr>
</div></td>
</tr>
<td></td>
</tr>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
</tr>
<tr>
<td background="http://www.p2mbrasil.com/forum/gerador/bkg2.jpg" bgcolor="#000000">Uploader:</td>
</tr>
<tr>
<td bgcolor="#000000"><table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<th bgcolor="#F4F6FB" scope="col"><div align="center"><applet code="ticker.class" align="absMiddle" width="100%" height="44">
      <param name="LEDSize" value="1">
      <param name="Text1"value="IN:YRINWARD;OUT:YRINWARD;PAUSE:1500;COLOR:255,255,0;STRING:Upload by:">
      <param name="Text2" value="IN:YRINWARD;OUT:YRINWARD;PAUSE:1500;COLOR:255,255,255;STRING:<?=stripslashes(htmlspecialchars(($uploader)))?>">
      <param name="Text3"value="IN:YRINWARD;OUT:YRINWARD;PAUSE:1500;FLASH:500,10,500;COLOR:140,255,0;STRING:<?PHP echo "www.p2mbrasil.com" ?>">
      <param name="code" value="ticker.class">
      <param name="align" value="absMiddle">
      <param name="width" value="100%">
      <param name="height" value="42">
      <param name="codeBase" value="http://acestgratuit.free.fr/">
</applet>
</div>
</th>
</tr>
</table>
</td>
</tr>
</table>
</th>
</tr>
</table>
</th>
</tr>
</table>
[/dohtml]
</textarea>
<br>
<br>
<span class="style4">Gerador p2mbrasil.com 2.0 Beta</span>
</p>
</center>
</body>
</html>
