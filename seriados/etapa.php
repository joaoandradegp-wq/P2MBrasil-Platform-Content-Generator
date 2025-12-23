<html>
<head>
</head>
<title>GERADOR DE CÓDIGO PARA SERIADOS  - WWW.P2MBRASIL.COM</title>
<style type="text/css">
.style1 {
	font-family: Verdana;
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
</style>
<body background="fundo.jpg">
<form name="form2" method="post" action="result.php">
<table width='100%'  border='0' cellspacing='0' cellpadding='0' height='0'>
<tr>
<td>
<p>
<font face="Verdana">
<b>
GERADOR DE CÓDIGO PARA POSTS 2.0 Beta<br>
CATEGORIA: <font color="#FF0000">SERIADOS</font><br>
P2MBRASIL.COM<br>
</b>
<font color="#FF0000" size="1">
Gerador desenvolvido por Phobos
</font>
</p>
<table width="100%"  border="0" cellspacing="0" cellpadding="1" height="38">
  <tr>
    <td bgcolor="#CC3333">
    <div align="center">
    <font face="Verdana" color="white">
    <b>PREENCHA TODOS OS CAMPOS CORRETAMENTE E  APERTE O BOTÃO "GERAR CÓDIGO". <br>COPIE O CÓDIGO GERADO (CTRL+C) E COLE (CTRL+V) NA ÁREA QUE VOCÊ ESCREVE OS POSTS.</b>
    </font>
    </div>
    </td>
  </tr>
</table>
<center>
<table width='50%'  border='0' cellspacing='0' cellpadding='0' height='0'>
<?php
//Abaixo, esta pegando os campos do formulario
$titulo = $_POST['titulo'];
$duracao = $_POST['duracao'];
$nomepisodio = $_POST['nomepisodio'];
$temporada = $_POST['temporada'];
$numepisodio = $_POST['numepisodio'];
$elenco = $_POST['elenco'];
$sinopse = $_POST['sinopse'];
$resoluc = $_POST['resoluc'];
$framerate = $_POST['framerate'];
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
$segmentos = $_POST['segmentos'];
$versao = $_POST['versao'];
$merge = $_POST['merge'];
$poster = $_POST['poster'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$img3 = $_POST['img3'];
$img4 = $_POST['img4'];
$uploader = $_POST['uploader'];

//Abaixo são os mais usados para gerar os campos
$p2m = $_POST['p2mq'];
$id = $_POST['idq'];
$ide = $_POST['ideq'];
$qtas=0;
$mirror_p2m=0;
$mirror_id=0;
$mirror_ide=0;

//Abaixo, é para poder constar na pagina result.php
echo '<input type="hidden" name="titulo" value="'.stripslashes(htmlspecialchars($titulo)).'">';
echo '<input type="hidden" name="nomepisodio" value="'.stripslashes(htmlspecialchars($nomepisodio)).'">';
echo '<input type="hidden" name="numepisodio" value="'.stripslashes(htmlspecialchars($numepisodio)).'">';
echo '<input type="hidden" name="temporada" value="'.stripslashes(htmlspecialchars($temporada)).'">';
echo '<input type="hidden" name="duracao" value="'.stripslashes(htmlspecialchars($duracao)).'">';
echo '<input type="hidden" name="elenco" value="'.stripslashes(htmlspecialchars($elenco)).'">';
echo '<input type="hidden" name="sinopse" value="'.stripslashes(htmlspecialchars($sinopse)).'">';
echo '<input type="hidden" name="comentario" value="'.stripslashes(htmlspecialchars($comentario)).'">';
echo '<input type="hidden" name="tamanho" value="'.stripslashes(htmlspecialchars($tamanho)).'">';
echo '<input type="hidden" name="resoluc" value="'.stripslashes(htmlspecialchars($resoluc)).'">';
echo '<input type="hidden" name="framerate" value="'.stripslashes(htmlspecialchars($framerate)).'">';
echo '<input type="hidden" name="acodec" value="'.stripslashes(htmlspecialchars($acodec)).'">';
echo '<input type="hidden" name="vcodec" value="'.stripslashes(htmlspecialchars($vcodec)).'">';
echo '<input type="hidden" name="segmentos" value="'.stripslashes(htmlspecialchars($segmentos)).'">';
echo '<input type="hidden" name="versao" value="'.stripslashes(htmlspecialchars($versao)).'">';
echo '<input type="hidden" name="merge" value="'.stripslashes(htmlspecialchars($merge)).'">';
echo '<input type="hidden" name="uploader" value="'.stripslashes(htmlspecialchars($uploader)).'">';
echo "<input type='hidden' name='formato' value='$formato'>";
echo "<input type='hidden' name='nota' value='$nota'>";
echo "<input type='hidden' name='idioma' value='$idioma'>";
echo "<input type='hidden' name='poster' value='$poster'>";
echo "<input type='hidden' name='img1' value='$img1'>";
echo "<input type='hidden' name='img2' value='$img2'>";
echo "<input type='hidden' name='img3' value='$img3'>";
echo "<input type='hidden' name='img4' value='$img4'>";
echo "<input type='hidden' name='p2mq' value='$p2m'>";
echo "<input type='hidden' name='idq' value='$id'>";
echo "<input type='hidden' name='ideq' value='$ide'>";
echo "<input type='hidden' name='video' value='$video'>";
echo "<input type='hidden' name='audio' value='$audio'>";
echo "<input type='hidden' name='legenda' value='$legenda'>";


if ($p2m > 0){
   for ($i = 0; $i < 1; $i++){
   $qtas++;
   echo "
       <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       </tr>";

    if ($p2m > 0){
    echo "
    <tr>
    <td align='center'>
    <td><font size='3' color='#008000'><b><i>Peer 2 Mail</i></b>
    </td>
    </font>
    </tr>";

     for ($i2 = 0; $i2 < $p2m; $i2++) {
     $mirror_p2m++;
     echo "
     <td class='style1' height='24' align='right' width='20%'><b>Conta $mirror_p2m</b>:</td>
     <td colspan='2' height='24'>
     <font face='Verdana, Arial, Helvetica, sans-serif'>
     <select name='conta[]' id='conta[]'>
        <option value='Yahoo'>Yahoo</option>
        <option value='Netscape Mail'>Netscape Mail</option>
        <option value='Walla'>Walla</option>
        <option value='Gawab'>Gawab</option>
        <option value='OI'>OI</option>
        <option value='Spymac'>Spymac</option>
        <option value='Gmail'>Gmail</option>
        <option value='Rotomail'>Rotomail</option>
        <option value='o2.pl Mail'>o2.pl Mail</option>
        <option value='Xasamail'>Xasamail</option>
        <option value='Omnilect Mail'>Omnilect Mail</option>
        <option value='Unitedmailsystems'>Unitedmailsystems</option>
        <option value='Hriders'>Hriders</option>
     </select><br>
     </td>
     </tr>
       <tr>
         <td align='right' width='20%' class='style1'>Login:</td>
         <td>
         <input name='login[]' type='text' id='login[]' size='40'>
         </td>
         </tr>
         <tr>
         <td align='right' width='20%' class='style1'>Senha:</td>
         <td>
         <input name='senha[]' type='text' id='senha[]' size='40'>
         </td>
         </tr>";
     }
    }

        if ($id > 0){
        echo "
        <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td align='center' >
        <td>
        <font size='3' color='#0000FF'><b><i>Ilusions Downloader</i></b>
        </td>
        </font>
        </tr>";
        
             for ($i3 = 0; $i3 < $id; $i3++){
             $mirror_id++;
             echo "
             <td class='style1' height='24' align='right' width='20%'><b>Conta $mirror_id</b>:</td>
             <td colspan='2' height='24'>
             <font face='Verdana, Arial, Helvetica, sans-serif'>
             <select name='conta1[]' id='conta1[]'>
             <option value='Yahoo'>Yahoo</option>
             <option value='Netscape Mail'>Netscape Mail</option>
             <option value='Walla'>Walla</option>
             <option value='Gawab'>Gawab</option>
             <option value='OI'>OI</option>
             <option value='Spymac'>Spymac</option>
             <option value='Gmail'>Gmail</option>
             <option value='Rotomail'>Rotomail</option>
             <option value='o2.pl Mail'>o2.pl Mail</option>
             <option value='Xasamail'>Xasamail</option>
             <option value='Omnilect Mail'>Omnilect Mail</option>
             <option value='Unitedmailsystems'>Unitedmailsystems</option>
             <option value='Hriders'>Hriders</option>
             </select><br>
             </td>
             </tr>
             <tr>
              <td align='right' width='20%' class='style1'>Login:</td>
                <td>
                <input name='login1[]' type='text' id='login1[]' size='40'>
                </td>
                </tr>
                <tr>
                <td align='right' width='20%' class='style1'>Senha:</td>
                <td>
                <input name='senha1[]' type='text' id='senha1[]' size='40'>
                </td>
                </tr>";
             }
        }
        
                    if ($ide > 0){
                    echo "
                    <tr>
                    <td>&nbsp;</td>
                    </tr>
                    <tr>
                    <td align='center' >
                    <td>
                    <font size='3' color='#FF9900'><b><i>Iddeias</i></b>
                    </td>
                    </font>
                    </tr>";

                        for ($i4 = 0; $i4 < $ide; $i4++){
                        $mirror_ide++;
                        echo "
                        <td class='style1' height='24' align='right' width='20%'><b>Conta $mirror_ide</b>:</td>
                        <td colspan='2' height='24'>
                        <font face='Verdana, Arial, Helvetica, sans-serif'>
                        <select name='conta2[]' id='conta2[]'>
                        <option value='Yahoo'>Yahoo</option>
                        <option value='Netscape Mail'>Netscape Mail</option>
                        <option value='Walla'>Walla</option>
                        <option value='Gawab'>Gawab</option>
                        <option value='OI'>OI</option>
                        <option value='Spymac'>Spymac</option>
                        <option value='Gmail'>Gmail</option>
                        <option value='Rotomail'>Rotomail</option>
                        <option value='o2.pl Mail'>o2.pl Mail</option>
                        <option value='Xasamail'>Xasamail</option>
                        <option value='Omnilect Mail'>Omnilect Mail</option>
                        <option value='Unitedmailsystems'>Unitedmailsystems</option>
                        <option value='Hriders'>Hriders</option>
                        </select><br>
                        </td>
                        </tr>
                        <tr>
                         <td align='right' width='20%' class='style1'>Login:</td>
                           <td>
                           <input name='login2[]' type='text' id='login2[]' size='40'>
                           </td>
                           </tr>
                           <tr>
                           <td align='right' width='20%' class='style1'>Senha:</td>
                           <td>
                           <input name='senha2[]' type='text' id='senha2[]' size='40'>
                           </td>
                           </tr>";
                        }
                    }
$mirror_p2m=0;
$mirror_id=0;
$mirror_ide=0;
   }
}
?>
</tr>
</td>
</center>
</table>
<table width='50%'  border='0' cellspacing='0' cellpadding='0' height='0'>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<center>
<input type="submit" name="Submit" value="GERAR CÓDIGO">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="clear" value="        LIMPAR          "></td></tr>
</table>
</form>
</body>
</html>
