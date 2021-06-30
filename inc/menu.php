<!-- MENU -->
<nav class="" >
  <div class="container-fluid">
    <div class="navbar-header">
 		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a class="btLogin"  id="myLnkRegistro" data-target='#myModalRegistros'><img src="assets/images/icoferramentas.png"/><p>Usuários</p></a>
			<a href="javascript:alert('Módulo')" ><img src="assets/images/icoprocessosl.png" alt="processos" class="img-responsive" /><p >Módulo</p></a>
			<a href="javascript:login_sair()" class="aviso1"><img src="assets/images/icoservicosl.png" alt="sair" class="img-responsive" onclick="" /><p>LogOut</p></a><!-- app-function.js -->
		</div>
    </div>
  </div>
  
</nav>
<!-- FIM MENU -->
<script>
	$('a.aviso1').mouseover(function(){
		$('#aviso1').css('display', 'block').text("LogOut"); //.load( 'usuario/aviso.php',{ aviso : "Aviso" } );
	}).mouseout(function(){
		$('#aviso1').css('display', 'none');
	});
</script>