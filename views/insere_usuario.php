<?php
Header("Access-Control-Allow-Origin: *"); 
error_reporting(1);
ini_set('display_errors', 1 );

	$login 	     = $_POST['usuario_mail'];
	$senha	     = md5($_POST['usuario_pwd']);
	$nome        = $_POST['usuario_nome']; 
    $conf        = "config-santri";	
	
	if( $cfg = parse_ini_file("../cfg.app/".$conf.".ini",true) ) {
		$type    	= $cfg['cnxmysql']['type'];
		$host    	= $cfg['cnxmysql']['host'];
		$user    	= $cfg['cnxmysql']['user'];
		$pass      	= $cfg['cnxmysql']['pass'];
		$name     	= $cfg['cnxmysql']['name'];
		$port    	= $cfg['cnxmysql']['port'];
		
		spl_autoload_register( function ($classe) { 
			$pastas = array('../controller/conexao');
			foreach ($pastas as $pasta)	{
				if (file_exists("{$pasta}/{$classe}.class.php")) {
						include_once "{$pasta}/{$classe}.class.php";
				}
			}
		});

		//----------- Conexao a Base de Dados--------------------------------------------		
									 
		$conn  = new PDO("mysql:host={$host};port={$port};dbname={$name}", $user, $pass);

		$consulta = $conn->prepare("
									SELECT  u.usua_id, u.usua_email, u.usua_senha, u.usua_login
									, u.usua_nm, u.usua_nivel, u.usua_grup_id, u.usua_status
									FROM segu_usuarios AS u
									WHERE  u.usua_email = '$login'
		"); 

		$consulta->execute();
		
		if ( $consulta->rowCount() ) { // Encontrado registro, Nao Cadastrar
			$retorno	= 	array(
								'codzero'     =>	1
								);		
		} else { // Cadastrar 
		
			$inserir 	= $conn->prepare("
 				    
					INSERT INTO att_seguranca.segu_usuarios
						   (`usua_id`, `usua_login`, `usua_senha`, `usua_nm`, `usua_email`)
					VALUES `(:usua_id`, `:usua_login`, `:usua_senha`, `:usua_nm`, `:usua_email`)		
							
					 ");


					$atualiza->bindValue( ':usua_id'	, $id );  
					$atualiza->bindValue( ':usua_login'	, $dados['vl_limite_c'] );
					$atualiza->bindValue( ':usua_senha'	, $dados['obs'] );
					$atualiza->bindValue( ':usua_nm'	, $dados['atividade_cnae'] );  
					$atualiza->bindValue( ':usua_email'	, $dados['val_cnh'] );					
            ); 	
			
			$inserir->execute();
			$retorno	= 	array(
								'codzero'     =>	0
							);
		}
	}  else  { // Arquivo de Configuracao Incorreto
			$retorno	= 	array(
								'codzero'     =>	2
							);	
	}
	$conn   = null;

	echo (json_encode($retorno));
	
//-------------------------------------------------------------------------------------------------------------------------------------												
?>