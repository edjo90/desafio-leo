<?php
session_start();

error_reporting(0);
ini_set('display_errors', 0 );

if ( $_POST['p'] =="sair" ) {
	if ( $cfg = parse_ini_file("../../cfg.app/config-santri.ini",true) ) {
		
		$usuario	= $cfg['cnxmysql']['usersys'];

        if ( isset($_SESSION['sessionid']) or !empty($_SESSION['sessionid']) or $_SESSION['sessionid']<>0 ){
 			
			unset($_SESSION['id']);
			unset($_SESSION['email']);
			unset($_SESSION['senha']);
			unset($_SESSION['login']);
			unset($_SESSION['nome']);
			unset($_SESSION['usu_nivel']);
			unset($_SESSION['usu_grup_id']);
			unset($_SESSION['usu_status']);
			unset($_SESSION['grup_id']);
			unset($_SESSION['grup_ds']);
			unset($_SESSION['grup_nivel']);
			unset($_SESSION['dt_acesso']);
			unset($_SESSION['sessionid']);
		 			
			$retorno	= 	array(
					'codzero'     =>	0,
					'email'       => 	$usuario
			);
		} 		
	}				
 
}	

echo (json_encode($retorno));