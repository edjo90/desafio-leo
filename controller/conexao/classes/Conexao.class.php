<?php

class Conexao
{
    private static $connection;
    private static $conf="config-santri";
    private function __construct(){}

    public static function getConnection() {

		if (file_exists("../../cfg.app/".$conf.".ini")) { 
	
			$db = parse_ini_file("../../cfg.app/".$conf.".ini",true); 
	 			// lê as informações contidas no arquivo 
				$app   		= $db["cnxmysql"]["app"]; 
				$driver		= $db["cnxmysql"]["type"];
				$host  		= $db["cnxmysql"]["host"];
				$name  		= $db["cnxmysql"]["name"];
				$user  		= $db["cnxmysql"]["user"];
				$pass  		= $db["cnxmysql"]["pass"];
				$porta 		= $db["cnxmysql"]["port"];
						
			$pdoConfig  = $driver . ":". "Server=" . $host . ";";
			$pdoConfig .= "Database=".$name.";";
			
			try { 
				if(!isset($connection)){
					$connection =  new PDO($pdoConfig, $user, $pass);
					$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
				return $connection;
			} catch (PDOException $e) {
				$mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
				$mensagem .= "\nErro: " . $e->getMessage();
				throw new Exception($mensagem);
			}
		}	
    }
}