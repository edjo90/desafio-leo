<?php
   session_start();
   $objeto = $_POST['objeto'];
  
   error_reporting(0);
   ini_set('display_errors', 0 );
?>
<style>
.imagge     	{ 
 		  position			: relative;
  		  top   			: 150px;
  		  left  			: 35%;
		  width				: 300px;
          margin-left		: 0px;
		  border-radius		:  10px;
		  background		: #000000;
		  filter:progid		: DXImageTransform.Microsoft.gradient(startColorstr=#000000, endColorstr=#000000);
		  -ms-filter		: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#000000, endColorstr=#000000)";
	} 
</style>

<script>
$( ".imagge" ).click( function() {
	$att('#imagge').hide(1);
	$att('#masscara1').hide(1);
	$att('#tabbela').hide(5);
	$att('#paggina').fadeOut("slow");
});
</script>

		<div class='imagge'>
		    <br><br>
			<a href='#'><img src='imagens/trabalhando.gif'></a>
			<br><br><br><br>
			<br><fb>m&oacute;dulo <font face="arial" size="5" > <?php echo $objeto; ?></font> em Desenvolvimento.</fb>  
			<br><br>
		</div>  
