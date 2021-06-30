<?php

class TConexao
{
    private static $conn;
    private static $conf="config-santri";
    private function __construct(){}

    public static function getConnection() {

		if ( file_exists("../../cfg.app/".$conf.".ini") ) { 
	
			$db = parse_ini_file("../../cfg.app/".$conf.".ini",true); 
	 
				// lê as informações contidas no arquivo 
				$app   		= $db['cnxmysql']['app']; 
				$host  		= $db['cnxmysql']['host'];
				$porta 		= $db['cnxmysql']['port'];
				$name  		= $db['cnxmysql']['name'];
				$user  		= $db['cnxmysql']['user'];
				$pass  		= $db['cnxmysql']['pass'];
				$driver		= $db['cnxmysql']['type'];		
			
			try { 
				if(!isset($conn)){
					$conn	= new PDO("mysql:host={$host};port={$porta};dbname={$name}", $user, $pass);
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