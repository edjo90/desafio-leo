<!DOCTYPE html>
<?php
  // session_start();
  // $objeto = $_POST['objeto'];
    
   error_reporting(0);
   ini_set('display_errors', 0 );
?>

<html>
<script type="text/javascript" src="../../assets/js/jquery.min.js"></script><!-- classe stdclass() -->
 <script type="text/javascript">
	$(document).ready(function() {
		$('#go').click(function() {
			$.ajax({
				url: "json.php",
				dataType: 'json'
				}).done(function(data) {
					alert(data.mensagem);
				});
		})
	});
</script>
 
 <a href=""><img src='../../assets/images/btn_x.png' alt='Fecha Janela' class='direita' /></a>
  <br><br><br><br>	
 <a href="#"><img src='../../assets/images/trabalhando.gif'></a>
  <br><br><br><br><br><br><br>

	<form>
	<input id="go" type="button" value="Diga ola ao REST"/>
	</form>
	
	
	
	
	
  <br>Estamos Trabalhando para melhor atende-lo !!
  <br>m&oacute;dulo em Desenvolvimento Objeto<font face="arial" size="5" ></font> 
  <br>


</html>


