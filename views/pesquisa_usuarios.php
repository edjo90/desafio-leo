<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Desafio-Leo PHP</title>

	  
	  <link rel="stylesheet" href="css/static/css/desfio-leo.css">
	  <link href="css/dataTables.bootstrap.css" rel="stylesheet"><!-- DataTables Responsive CSS -->
	
      <style>
		  table {
			border-collapse: collapse;
			width: 100%;
		  }

		  th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		  }

		  tr:nth-child(even) {background-color: #f2f2f2;}
      </style>
    </head>
  

    <div>
		<div id="lista" class="w3-margin">

			<table id="tabela" class="display nowrap tabela" style="width: 100% !important;">
			<button  id="myInsRegistro" class="w3-button w3-theme w3-margin-top w3-left submit" onclick="return in_usuario();">Cadastrar novo usuário</button>
			

			<thead>
				<tr>
				<th scope="col">id usuario</th>
				<th scope="col">email     </th>
				<th scope="col">Nome      </th>
				<th scope="col">Editar    </th>
				</tr>
			</thead>
		
  	
<?php
/*
Header("Access-Control-Allow-Origin: *"); 
session_start(); 

error_reporting(1);
ini_set('display_errors', 1 );
*/

			// abre conexao com BD

			$cfg		 = "config-desafio-leo.ini";	
			if ( $cfg = parse_ini_file("cfg.app/".$cfg,true) ) {
				$type    	= $cfg['cnxmysql']['type'];
				$host    	= $cfg['cnxmysql']['host'];
				$user    	= $cfg['cnxmysql']['user'];
				$pass      	= $cfg['cnxmysql']['pass'];
				$name     	= $cfg['cnxmysql']['name'];
				$port    	= $cfg['cnxmysql']['port'];
				
				spl_autoload_register( function ($classe) { 
					$pastas = array('controller/conexao');
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
										"); 

				$consulta->execute();
				
					if ( $consulta->rowCount() ) {
						include_once "controller/app.widgets/TSession.class.php";
						$Sessao = new TSession();
						$var	= "sessao";
						// percorre os resultados via iteração e gera dados da sessao
						foreach($consulta as $row) { // exibe os resultados
												$docu_id			= $row["usua_id"];
												$docu_email     	= $row["usua_email"];
												$docu_nome  		= $row["usua_nm"];
												$dados	=	array( 
																	0  =>  $docu_id,
																	1  =>  $docu_email,
																	2  =>  $docu_nome
															);
												$dadosobj = implode('|',$dados);				
?>                          
			<tr>
				<td><?= $docu_id;	    ?></td>
				<td><?= $docu_email;   	?></td>
				<td><?= $docu_nome;		?></td>   		
				<td><a href="javascript:abre_registro('<?=$docu_id?>','<?=$dadosobj?>')" data-target="#myModalRegistro"><span class="fa fa-edit"></span></a></td>
			</tr>
<?php
						}
					}
				
				$retorno	= 	array(
										'codzero'     =>	2,
										'mensagem'    => 	'Listagem Usuarios'
								);
			}  else  { 
			    // Arquivo de Configuracao Incorreto -----------------------------------------
				$retorno	= 	array(
										'codzero'     =>	2,
										'mensagem'    => 	'Arquivo de Configuração Incorreto'
								);	
			}
				
			//echo (json_encode($retorno));
?>	
		</div>
	</div>
</table>
</html>			
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script><!-- DataTables JavaScript Procura tabela iDisplayLength:8 -->
	<script src="js/dataTables.bootstrap.min.js"></script><!-- Page-Level Demo Scripts - Tables - Use for reference -->	
	
 
<script>	
	$(document).ready( function($) {	
		$("#tabela").dataTable(
			
			{
				"order"   : [0, "asc"],	
				"language": {
							"lengthMenu": "Display _MENU_ records per page",
							"zeroRecords": "Nothing found - sorry",
							"info": "Showing page _PAGE_ of _PAGES_",
							"infoEmpty": "No records available",
							"infoFiltered": "(filtered from _MAX_ total records)"
				}
			}
			
		);	
		
		$(".abre").click(function(e){
			e.preventDefault;
			let __id = $(this).attr("idref");
				var param = __id;
				
				var lnk = document.getElementById('myLnkRegistro');
				var modalregistro 	= document.getElementById('myModalRegistro');
				modalregistro.style.display = 'block';
				//alert('Registro '+param);
		});

var versaoJquery = $.fn.jquery;
console.log('Versão jQuery: ' + versaoJquery);

	//alert("Lendo Jquery!"); 
      	
	});// JavaScript read do Formulario

	function abre_registro(id, param){
			var lnk = document.getElementById('myLnkRegistro');
			var modalregistro 	= document.getElementById('myModalRegistro');
			modalregistro.style.display = 'block';
			p = param.split("|");
			$('#dtini').val(p[0]);
			$('#dtfin').val(p[1]);
			$('#usuario').val(p[2]);
			$('#sistema').val(p[3]);
			$('#inc').val(p[4]);
			$('#wo').val(p[5]);
			$('#problema').val(p[6]);
			$('#tas').val(p[7]);
			$('#id').val(p[8]);
			$('#descricao').val(p[9]);
	}


</script>	

