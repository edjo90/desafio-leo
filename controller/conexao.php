<?php
    ini_set("display_errors", "1");	
	set_time_limit (120);
	setlocale(LC_ALL, "pt_BR", "ptb"); //Selecionar o local para pt-br
	$ADODB_COUNTRECS = true;

	global $PDONT056;
	$PDONT056 = pg_connect("host=10.1.32.120 port=6432 dbname=db_acionamento user=postgres password=Inova16") or die('connection failed');
	//Abre conexão com banco de dados
	function SQL(){
		global $sql;
		//$sql = new COM("ADODB.Connection"); //Instancia o objeto ADODB para manipulação de banco de dados
		//$sql->Open("PROVIDER=SQLOLEDB;Data Source=.;Initial Catalog=MON_BDC;User ID=monitor; Password=monitor");
		//$sql = new PDO('odbc:Driver={SQL Server};Server=DT7261NT050;Database=MON_BDC; Uid=sa;Pwd=Caixa01');
	
	    $sql = new COM("ADODB.Connection"); //Instancia o objeto ADODB para manipulação de banco de dados
		$sql->Open("PROVIDER=SQLOLEDB;Data Source=10.218.210.175;Initial Catalog=Acionamento;User Uid=sa; Pwd=Caixa01"); //Abre a conexão com o banco de dados		
		
		return $sql;
		//Abre a conexão com o banco de dados
	}
	
	//Fecha conexão com o banco de dados
	function SQL_FECHA(){
		
		global $sql;
		$sql->Close();
	}
?>