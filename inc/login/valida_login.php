<?php
Header("Access-Control-Allow-Origin: *"); 
session_start(); 
error_reporting(1);
ini_set('display_errors', 1 );

	$login 	     = $_POST['login_mail'];
	$senha	     = md5($_POST['login_pwd']);
    $conf        = "config-santri";	
	
	if( $cfg = parse_ini_file("../../cfg.app/".$conf.".ini",true) AND ($_POST['login_mail']) ) {
		$type    	= $cfg['cnxmysql']['type'];
		$host    	= $cfg['cnxmysql']['host'];
		$user    	= $cfg['cnxmysql']['user'];
		$pass      	= $cfg['cnxmysql']['pass'];
		$name     	= $cfg['cnxmysql']['name'];
		$port    	= $cfg['cnxmysql']['port'];
		
		spl_autoload_register( function ($classe) { 
			$pastas = array('../../source/conexao');
			foreach ($pastas as $pasta)	{
				if (file_exists("{$pasta}/{$classe}.class.php")) {
						include_once "{$pasta}/{$classe}.class.php";
				}
			}
		});

		//----------- Conexao a Base de Dados--------------------------------------------		
									 
		$conn  = new PDO("mysql:host={$host};port={$port};dbname={$name}", $user, $pass);
/*
		$consulta = $conn->prepare("
									SELECT  u.usua_id, u.usua_email, u.usua_senha, u.usua_login
									, u.usua_nm, u.usua_nivel, u.usua_grup_id, u.usua_status
									, g.grup_id, g.grup_ds, g.grup_nivel
									FROM segu_usuarios AS u
									INNER JOIN segu_grupos  AS g ON u.usua_grup_id = g.grup_id
									WHERE  u.usua_email = '$login' AND u.usua_senha = '$senha'	
		"); 
*/
		$consulta = $conn->prepare("
									SELECT  u.usua_id, u.usua_email, u.usua_senha, u.usua_login
									, u.usua_nm, u.usua_nivel, u.usua_grup_id, u.usua_status
									FROM segu_usuarios AS u
									WHERE  u.usua_email = '$login' AND u.usua_senha = '$senha'	
		"); 

		$consulta->execute();
		
		if ( $consulta->rowCount() ) {
		    include_once "../../controller/app.widgets/TSession.class.php";
			$Sessao = new TSession();
			$var	= "sessao";
			// seta variaveis da sessao
			$Sessao->setValue($var,$value); 
			// percorre os resultados via iteração e gera dados da sessao
		    foreach($consulta as $row) { // exibe os resultados
				$_SESSION['usua_id']	= $row["usua_id"];
				$_SESSION['usua_email'] = $row["usua_email"];
				$_SESSION['usua_senha'] = $row["usua_senha"];
				$_SESSION['usua_login'] = $row["usua_login"];
				$_SESSION['usua_nm']	= $row["usua_nm"];
				$_SESSION['usu_nivel']	= $row["usua_nivel"];
				$_SESSION['usu_grup_id']= $row["usua_grup_id"];
				$_SESSION['usu_status']	= $row["usua_status"];
				$_SESSION['grup_id']	= $row["grup_id"];
				$_SESSION['grup_ds']	= $row["grup_ds"];
				$_SESSION['grup_nivel']	= $row["grup_nivel"];
				$_SESSION['dt_acesso'] 	= date('Y-n-j H:i:s');
				$_SESSION['sessionid'] = session_id(); //( ini_set('session.gc_maxlifetime','0') - 0 ); //Setado valor no php.ini	 
		
				$retorno	= 	array(
										'codzero'     =>	0,
										'email'       => 	$_SESSION['usua_email'],
										'sessionid'   =>   	$_SESSION['sessionid'],
										'ativar'	  =>  	0	
								);
		    }
		} else { // Usuario ou Senhas Incorreto(s) 
				$retorno	= 	array(
										'codzero'     =>	1,
										'email'       => 	'Usuario Santri'
									);		
				}
	}  else  { // Arquivo de Configuracao Incorreto
				$retorno	= 	array(
										'codzero'     =>	2,
										'email'       => 	'Configuração Incorreta'
									);	
	}
	$conn   = null;

	echo (json_encode($retorno));
	
//-------------------------------------------------------------------------------------------------------------------------------------												
?>