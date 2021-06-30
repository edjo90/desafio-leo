<?php
function RetornaNiverDia()
{

SQL();
	global $sql;
	$month = date("m");
	$day = date("d");
	$aniversariante = "";
	//$sqlcmd = "select nome, data_niver from Acionamento..TB_SINIVER_ANIVERARIANTES_ONLINE where usuario = '$usuario'";

	$sqlcmd = $sql->prepare("select nome as nom, LEFT(nome, CHARINDEX(' ',nome)-1)+' '+RIGHT(nome, CHARINDEX(' ',REVERSE(nome))-1) AS nome, coorde, tipoFunc
				from Acionamento..TB_SINIVER_ANIVERARIANTES_ONLINE
				where datepart(month, data_niver) = '$month' AND datepart(day, data_niver) = '$day' AND divulgar = 'S' AND status <>'DEC' AND data_niver is not null 
				ORDER BY data_niver");
			$sqlcmd->execute();
	
	
			while ($row = $sqlcmd->fetch( PDO::FETCH_ASSOC))
			{ 
						$nom = $row['nom'];
						$nome = $row['nome'];
     				 	$coord = $row['coorde'];
     				 	$empresa = $row['tipoFunc'];

     			$aniversariante = $aniversariante.	"<i class='fa fa-gift fa-2x' style='color:#0039BA;'></i> <font style='font-family: Arial !important; font-size: 130% !important; color:#FF6D00; font-weight: 900;'>".$nom."</font> <p class='small text-muted' style='font-size: 85% !important; text-indent: 25px; font-weight: 900;'>".$coord." - ".$empresa."</p></br>";
			}	

			if ($aniversariante == '') 
			{
		 		$aniversariante ="<p class='small text-muted' style='color:#FF6D00;'>N&atilde;o h&aacute; Aniversariante</p></br>";
			}

	return $aniversariante;
}

function Nome($usuario){
	global $sql;
	$sqlcmd = $sql->prepare("select nome from Acionamento..TB_SINIVER_ANIVERARIANTES_ONLINE where usuario = '$usuario'");
	$sqlcmd->execute();
	
	while ($row = $sqlcmd->fetch( PDO::FETCH_ASSOC))
	{ 
		$nome = $row['nome'];
		return $nome;
	}	
	
	
}
/////////////////////////////////////////////Função Quadros /////////////////////////////
function ConvData($dataH){
		$dia	= substr($dataH,8,2);
		$mes	= substr($dataH,5,2);
		$ano	= substr($dataH,0,4);
		
		$hora	= substr($dataH,11,2);
		$minu	= substr($dataH,14,2);
		$segu	= substr($dataH,17,2);	

    return $retorno=$dia.'/'.$mes.'/'.$ano.' '.$hora.':'.$minu.':'.$segu;
}



