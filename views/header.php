<?php 
include_once('controller/conexao/TLogin.class.php');
$loginapp = new TLogin;
?>

<header id="header" class="navbar-fixed-top" role="banner">
  
<link rel="stylesheet" href="css/static/css/santri.css">
<link href="css/dataTables.bootstrap.css" rel="stylesheet"><!-- DataTables Responsive CSS -->
	
        
<div id="main-navigation" class="navbar navbar-default">
	<nav class="navbar-collapse navbar-main-navigation" role="navigation">
		<div class="">
			<span class="mais" style="" onclick="openNav()">&#9776;</span><!-- menu lateral / para desativar comente ou exclua -->
			<div class="logo_container">
				<span class="logo_helper"></span>
				<img width='190px;' src="imgs/logo_desafio-leo.png" id=""  />				
			</div>
			
			<div class="collapse navbar-collapse blocouser inicio" id="myNavbar"> 
				<ul class="nav navbar-nav navbar-right springy-text .visible-sm-block hidden-xs">
					<li>
						<a class="btLogin" id="myBtnLogin" data-target='#myModalLogin'>
							<img src="imgs/ico_clientes.png"/><img src="imgs/desafio-leo.png" id=""  />
						</a> 
					</li>
					<li>
						<a>
						<div id="usuario" class="col-md-12" style="color: #ffffff; font-size:15px; font-weight: 600;">
							<b style="color: #ffffff; font-size:15px; font-weight: 600;"><?php $loginapp->usuario();?></b>
						</div>
						</a>
					</li>						
				</ul>
			</div> 
 		</div>

		<!--</div><!-- .container-->
    </nav><!-- .navbar-collapse -->
</div><!-- #main-navigation-->


<?php include_once 'inc/menu.php' ?>
	
    <!-- modal login-->
    <div id="myModalLogin" class="modal">
        <div class="modal-content">
          
			<div class='modal-header' style='min-height: 45px !important; background-image: linear-gradient(to top, #0075be, #005a9c); '>
				<h4 class='modal-title close'> <font style='font-weight: bold; color: #FFFFFF; font-size: 1.0em;'>Login</font></h4>
			</div>

            <div class='modal-body' style="border-radius: 0px 0px 12px 12px; width: 100%; min-height: 65%; background-blend-mode: collor-dodge;">
                <form accept-charset='ISO-8859-1' name='formLogin' id='formLogin' method='post' action="">
                    <label>
						<b>usuario:</b>
						<input type="text" name="login_mail" id="login_mail"  class="modal-campo email" placeholder="login" />
					</label>
					<br><br>
					<label>
						<b>senha:</b>
						<input type="password" name="login_pwd" id="login_pwd"  class="modal-campo required" min="4" placeholder="password" />
					</label>
					<br><br><br>
						<p class="submit">
							<input type="button" value="OK" onclick="return login_sessao();"><!-- app-function.js -->
						</p>
				</form>						
			</div>
				
			<div id="footer-bottom">
				<div id="campo_contador"></div>
			</div>		
        </div>
    </div>
    <!-- fim modal login -->
	
	<!-- modal Registro-->
    <div id="myModalRegistros" class="modal">
        	
        <div class="col-md-12" style="top: -40px;">
          
			<div class='modal-header' style='border-radius: 10px 10px 0px 0px; min-height: 45px !important; background-image: linear-gradient(to top, #0075be, #005a9c); '>
				<h4 class='modal-title close'> <font style='font-weight: bold; color: #FFFFFF; font-size: 1.0em;'>Usuarios</font></h4>
			</div>
            <div class='modal-body' style="border-radius: 0px 0px 12px 12px; width: 100%; min-height: 65%; background-blend-mode: collor-dodge;background-color:#fff;" >
        <!--    <div class='modal-body' style="border-radius: 24px 24px 12px 12px; width: 100%; min-height: 65%; background-blend-mode: collor-dodge;" >-->
                
				<?php include_once( 'views/pesquisa_usuarios.php'); ?>
				
			</div>
        </div>
    </div>
	<!-- Final modal Registro-->
  </header>
  <!-- #header -->
  <div class="spaceheader"></div>
  
  <!-- modal Cadastro Usuario-->
    <div id="myRegistroModal" class="modal">
        <div class="modal-content">
          
			<div class='modal-header' style='min-height: 45px !important; background-image: linear-gradient(to top, #0075be, #005a9c); '>
				<span class="close1"  style='align:right font-size:10px;'>x</span>
			    <h4 class='modal-title'><font style='font-weight: bold; color: #FFFFFF; font-size: 1.0em;'>Cadastro Usuario</font></h4>				
			</div>

            <div class='modal-body' style="border-radius: 0px 0px 12px 12px; width: 100%; min-height: 65%; background-blend-mode: collor-dodge;">
                <form accept-charset='ISO-8859-1' name='formLogin' id='formLogin' method='post' action="">
                    <label>
						usuario:
						<input type="text" name="usuario_mail" id="usuario_mail"  class="modal-campo email" placeholder="Usuario mail" />
					</label>
					<br><br>
					<label>
						Nome:
						<input type="text" name="usuario_nome" id="usuario_nome"  class="modal-campo required" min="2" placeholder="Nome Completo" />
					</label>
					<br><br>
					<label>
						senha:
						<input type="password" name="usuario_pwd" id="usuario_pwd"  class="modal-campo required" min="4" placeholder="password" />
					</label>
					<br>
				</form>
			
				<p class="submit">
					<input type="button" class="w3-button w3-theme w3-margin-top w3-left submit" value="OK" onclick="return in_usuario();"><!-- app-function.js -->
				</p>
			
				<br><br>				
			</div>
				
        </div>
    </div>
    <!-- fim modal login -->
    <!-- modal Cadastro Usuario-->
    <div id="myImagem" class="modal">
        <div class="modal-content">
          
			<div class='modal-header' style='min-height: 45px !important; background-image: linear-gradient(to top, #0075be, #005a9c); '>
				<h4 class='modal-title close'><font style='font-weight: bold; color: #FFFFFF; font-size: 1.0em;'>Imagem</font></h4>				
			</div>

            <div class='modal-body' style="border-radius: 0px 0px 12px 12px; width: 100%; min-height: 65%; background-blend-mode: collor-dodge;">
  
			</div>
				
        </div>
    </div>