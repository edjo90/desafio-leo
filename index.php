<!DOCTYPE html>
<html lang="pt-br">

<?php
Header("Access-Control-Allow-Origin: *"); //Aceitar requisições de qualquer endereço
date_default_timezone_set('America/Sao_Paulo');
?>
	<head>
		<title>Desafio-LEO - PHP SLIDE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
		<meta charset="utf-8">
		

		<link href="imgs/desafio-leo.png" rel="shortcut icon" />
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/appca.css" rel="stylesheet" type="text/css">
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><!--Icones-->		
 		
		
		<link  href="css/dataTables.bootstrap.css" rel="stylesheet"><!-- DataTables Responsive CSS -->
		<link  href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link  href="css/desafio-leo.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js" type="text/javascript" language="JavaScript"></script>
		<script src="js/dataTables.bootstrap.min.js"></script><!-- Page-Level Demo Scripts - Tables -->		
		<script src="js/app-function.js"  type="text/javascript"></script>
		<script src="js/jquery.min.js"  type="text/javascript"></script><!-- classe stdclass() -->
				
	</head>
    <div class="modal"></div>
	<body onload="">
    
	    <div id="corpo">
			
				<section>
				    <h2>Teste slide PHP</h2>
				</section>
				<div class="container impapp">
					<?php include_once('slide/slider.php');?>
	    		</div>	
                <?php include_once('views/header.php');?> 				
	            <?php include_once('views/footer.php'); ?>				
        </div>
	    
	</body>
	
</html>

