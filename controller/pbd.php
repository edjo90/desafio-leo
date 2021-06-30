<!DOCTYPE html>
<html lang="pt-br">

<?php
date_default_timezone_set('America/Sao_Paulo');
error_reporting(1);
ini_set(display_errors, 1);
//include_once("model/funcoes.php");

	spl_autoload_register( function ($classe) { 
		$pastas = array('../classes/conexao');
		foreach ($pastas as $pasta)	{
			if (file_exists("{$pasta}/{$classe}.class.php")) {
				include_once "{$pasta}/{$classe}.class.php";
			}
		}
	});
?>
<head>
	<title>Ceptisp - Passagem de Turno Banco de Dados</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	

    <link href="assets/images/favicon.ico" rel="shortcut icon" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="assets/js/app-function.js"></script>
	
		
	<script src="assets/js/bootstrap.min.js"></script>
	<!--<script src="assets/js/jquery-1.11.3.min.js"></script>-->
	<script language="JavaScript" src="assets/js/tabelas/dataTables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<!--<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>-->
    <script src="assets/js/tabelas/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script><!-- Page-Level Demo Scripts - Tables - Use for reference -->	
	
	<link href="assets/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet"><!-- DataTables Responsive CSS -->
	
    <!--[if lt IE 9]>
	<script src="assets/js/html5.js"></script>
	<![endif]-->


	<!-- Need to use datatables.net -->
    <link rel="stylesheet" type="text/css" href="assets/js/tabelas/datatables/media/css/jquery.dataTables.min.css"/>

</head>
<body>

	<div id="page-container">

	<?php include 'inc/header.php' ?>	
	<!-- #header -->

	<section class="container"><!-- Conteudo mostrando alguns padrões -->
		<h1 align='center'>Passagem De Turno<br>Gest&atilde;o de Incidentes Banco de Dados</h1>

		<!--<button id="" class="btnceptisp" > Botão </button>-->
		<!-- fim titulo -->

		<br><br>
		
		 <div class="col-sm-2">
			<form method="POST">
				<label for="reggistros">Consulta Registros:</label>
				<select name="registros" id="registros" class="form-control has-feedback-left" maxlength="7"  value=0>
				    <option value="">Seleciona Registros</option>
					<option value="1">Padrão</option>
					<option value="2">Todos</option>
					</select><br>
			</form>		
		</div>		

		<table id="tabbela" class="display nowrap tabbela" style="width: 100% !important;"> 
			<thead>
						<tr>
						 <th scope="col">data Inicio	 </th>
						 <th scope="col">data Fim		 </th>
						 <th scope="col">Usuario         </th> 
						 <th scope="col">Sistema         </th>
						 <th scope="col">Incidente       </th>
						 <th scope="col">WO         	 </th>
						 <th scope="col">Problema 		 </th>
						 <th scope="col">TAS 			 </th>
						 <!--<th scope="col">Visualizar</th>-->
						</tr>
			</thead>   			
<?
			// abre conexao com BD

		try{				
						$conn    = Conexao::getConnection();				

						$consulta   = $conn->query("SELECT TOP(950) max(p.id) identificacao, 
																p.data_inicio, p.data_fim, p.usuario, p.sistema, 
																p.inc, p.wo, p.problema, p.tas, p.descricao, p.status_botao, 
																p.turno, p.historico, p.ddl, p.dml
													FROM acionamento..tb_passagem_bd_new AS p
													GROUP BY 	data_inicio, p.data_fim, p.usuario, p.sistema, 
																p.inc, p.wo, p.problema, p.tas, p.descricao, p.status_botao, 
																p.turno, p.historico, p.ddl, p.dml, p.id
													ORDER BY p.data_inicio DESC
													");
												
						$consulta->execute();
						
						if($consulta) {				  
							/* Retonar um array associativo correspondente a cada linha da tabela */
							foreach($consulta as $row){	 
									$docu_id			= $row["id"];
									$docu_dta_inicio	= $row["data_inicio"];
									$docu_dta_fim		= $row["data_fim"];
									$docu_usuario	 	= $row["usuario"];
									$docu_sistema		= $row['sistema'];
									$docu_inc			= $row['inc'];
									$docu_wo			= $row['wo'];
									$docu_problema		= $row['problema'];
									$docu_tas   		= $row['tas']; 
									$docu_descricao		= $row['descricao'];			
									$docu_status_botao  = $row['status_botao'];			
									$docu_turno         = $row['turno'];			
									$docu_historico     = $row['historico'];			
									$docu_ddl           = $row['ddl'];			
									$docu_dml           = $row['dml'];			

									$dados	=	array( 
														0  =>  $docu_dta_inicio,
														1  =>  $docu_dta_fim,
														2  =>  $docu_usuario,
														3  =>  $docu_sistema,
														4  =>  $docu_inc, 	
														5  =>  $docu_wo, 	
														6  =>  $docu_problema,	
														7  =>  $docu_tas,
														8  =>  $docu_id
													);
?> 
								<tr>
								 							
								   <td data-label='Data Inicio'><?= ConvData($docu_dta_inicio);	?></td>
								   <td data-label='Data Fim'>   <?= ConvData($docu_dta_fim);   	?></td>
								   <td data-label='usuario'>	<?=	$docu_usuario;				?></td>   		
								   <td data-label='Sistema'>	<?=	$docu_sistema;				?></td>						
								   <td data-label='Incidente'><a href="javascript:abre_registro('<? echo $docu_id;?>')">
																<?=	$docu_inc;					?></a></td>	
								   <td data-label='WO'>			<?=	$docu_wo;					?></td>
								   <td data-label='Problema'>	<?=	$docu_problema;				?></td>
								   <td data-label='TAS'>		<?=	$docu_tas;					?></td>
								
								</tr>
								
<?
							}
						$objretorno = implode('|',$dados);	
						
						}				
		} catch(Exception $e) {
			echo $e->getMessage();
			exit;
		}				

		$conn   = null;
?>										   
		</table>
		<!-- fim tabela responsiva -->
		<br>
        <!--<kbd>modelo linha de separação</kbd>-->
		<div class="linhasepara"></div>
		<!-- fim linha de separação -->

		<br>

	</section>
	
	<!-- FOOTER -->
	<?php include 'inc/footer.php' ?>
	<!-- FIM FOOTER -->

	</div>
   	
</body>
</html>
	<!--<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>	-->
	<script src="assets/js/tabelas/datatables/media/js/jquery.dataTables.min.js"></script><!-- DataTables JavaScript Procura tabela iDisplayLength:8 -->
<script>	
$(document).ready( function($) {	
 	$('#tabbela').DataTable(
       	
		{
			"order": [0, "desc"]	
		}
		
	);	
	
	$("#registros").change(function(){ 
        $.ajax({
                    url  : 'controller/registros.php',
                    type : 'POST',
                    data : { param : $('#registros').val() } ,
                    success: function( r ) {
						//retorno = r.split('|');
                        if(r==1){                						
							alert("950 registros :"+ $('#registros').val());
						} else {
						    alert($('#registros').val()); 
						}	
                    }
        });
    });

	function abre_registro(n){
		alert('aqui ta :'+n);
	}



});// JavaScript read do Formulario

</script>