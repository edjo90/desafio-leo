<?php
	//session_start();
	$cod = $_POST['cod']; // carregamento no script valida_usuario.php
	    if ( isset( $_SESSION['sessiontime'] ) and $cod==0  ) {
		    if ( $_SESSION['sessiontime']<0 ) { 
			 session_destroy();   //destroi sessao
		    } else {
?>		       <script>    
		       //Setado tempo da Sessao em Segundos
		       var vlogin = '<?php echo $_SESSION['email'];?>';
		       $att('#usuario').fadeOut(250).show()
			.html("<a href='#'><i class='icon-user'></i><span class='caret'></span></a>&nbsp;&nbsp;&nbsp;&nbsp;"+vlogin).fadeIn(300);
		       // Inicia checagem de tempo da sessao
		       window.onload = clock(<?php echo $_SESSION['sessiontime'];?>); // modelo.js 
		       </script>
<?php       }
        } else {
?>		    <script>
				$att('#usuario').fadeOut(250).show()
				.html( "<a href='#'><i class='icon-user'></i><span class='caret'></span></a>&nbsp;&nbsp;aquitudotem.com/Cadastre-se&nbsp;&nbsp;&nbsp;&nbsp;" ).fadeIn(300);	
			</script>
<?php
        }
?>
