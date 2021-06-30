<?php
class Teste
{
    private static $conn;
    
    private function __construct(){}

    public static function getConnection() {

		if (file_exists("../../cfg.app/"."config-app".".ini")) { 
	
				// lê as informações contidas no arquivo 
				$app   		= $db['cnxsqlserver']['app']; 
				$host  		= $db["cnxsqlserver"]["host"];
				$porta 		= $db["cnxsqlserver"]["port"];
				$name  		= $db["cnxsqlserver"]["name"];
				$user  		= $db["cnxsqlserver"]["user"];
				$pass  		= $db["cnxsqlserver"]["pass"];
				$driver		= $db["cnxsqlserver"]["type"];		
			$pdoConfig  = $driver . ":". "Server=" . $host . ";";
			$pdoConfig .= "Database=".$name.";";
			
			try { 
				if(!isset($conn)){
					$conn =  new PDO($pdoConfig, $user, $pass);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
				return $conn;
			} catch (PDOException $e) {
				$mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
				$mensagem .= "\nErro: " . $e->getMessage();
				throw new Exception($mensagem);
			}
		}	
    }
}