<!DOCTYPE html>
<html lang="pt-br">

<?php
Header("Access-Control-Allow-Origin: *"); //Aceitar requisições de qualquer endereço
date_default_timezone_set('America/Sao_Paulo');
error_reporting(1);
ini_set(display_errors, 1);
?>
	<head>
		<title>teste Santri - PHP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
		<meta charset="utf-8">
		

		<link href="assets/images/santri.png" rel="shortcut icon" />
		<link href="assets/css/style.css" rel="stylesheet" type="text/css">
		<link href="assets/css/appca.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><!--Icones-->		
 		
		<script src="assets/js/jquery.js" type="text/javascript"></script>
		<script src="assets/js/jquery-1.11.3.js"></script><!--Janela Movel-->
		<script src="assets/js/jquery-3.3.1.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/tabelas/dataTables/media/js/jquery.dataTables.min.js" type="text/javascript" language="JavaScript"></script>
		<script src="assets/js/tabelas/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script><!-- Page-Level Demo Scripts - Tables - Use for reference -->	
		
		<link  href="assets/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet"><!-- DataTables Responsive CSS -->
		<link  href="assets/js/tabelas/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

		<!-- assets/css/static/ -->
		<link rel="stylesheet" href="assets/css/static/css/w3.css">
		<link rel="stylesheet" href="assets/css/static/css/santri.css">
		<link rel="stylesheet" href="assets/css/static/css/toastr.css">

		<link rel="stylesheet" href="assets/css/static/css-awesome/brands.css">
		<link rel="stylesheet" href="assets/css/static/css-awesome/fontawesome.css">
		<link rel="stylesheet" href="assets/css/static/css-awesome/regular.css">
		<link rel="stylesheet" href="assets/css/static/css-awesome/solid.css">
		<link rel="stylesheet" href="assets/css/static/css-awesome/svg-with-js.css">
		<link rel="stylesheet" href="assets/css/static/css-awesome/v4-shims.css">

        <link href="assets/css/slides.css" rel="stylesheet" type="text/css"> 
	</head>

	<body onload="clock(35)">
    <?php include_once('inc/header.php');?><!-- #header -->
	<div id='aviso1' class='paragrafo1'></div>
	
 	    <div id="corpo" class="bg-opaco">
			<div id="page-container">
				<section class="container impapp">
				    <h1>Teste PHP</h1>
					
				</section>
				<div class="container impapp">
				
				</div>		
			</div>
        </div>

	<?php include_once( 'inc/footer.php'); ?>
	</body>
	<div>
		<?php include_once('slide/slider.php');?>
	</div>
<script src="assets/js/app-function.js"  type="text/javascript"></script>
<script src="assets/js/tabelas/datatables/media/js/jquery.dataTables.min.js"  type="text/javascript"></script><!-- DataTables JavaScript Procura tabela iDisplayLength:8 -->

</html>

