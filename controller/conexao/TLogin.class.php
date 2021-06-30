<?php

//namespace classes;
//use class TLogin; 
error_reporting(0);

class TLogin{
	//metodos e atributos da classe
	var $id_usu;
	var $usuario;
	var $senha;
	var $sessao;

    function __construct()
    {
		session_start();
		if ( $cfg = parse_ini_file("cfg.app/config-desafio-leo.ini",true) ) {
			 $this->usuario	= $cfg['cnxmysql']['usersys'];
		} 
		$this->sessao	= 0;
    }

	function setValue($usuario, $senha, $sessao)
    {}
	 
	function getValue()
    {} 

	function login()
    {
		echo("\n"); echo('Login Efetuado Aplicação '.' Sessão:' . $this->sessao);
    }
	
	function usuario()
    {
		if ( !isset($_SESSION['sessionid']) ) {
			if ( $cfg = parse_ini_file("cfg.app/config-desafio-leo.ini",true) ) {
				 $this->usuario	= $cfg['cnxmysql']['usersys'];
			} 				
		} else {
			     $this->usuario	= $_SESSION["usua_email"];
		} 
		
		echo("\n"); echo($this->usuario);
    } 
}

?>