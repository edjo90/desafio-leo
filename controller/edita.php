		<!-- modal registro-->
		  <div id="myModalRegistro" class="registro">
			<div class="modal-registro">
			  <span class="close">&times;</span>
					<div class='modal-header' style='min-height: 45px !important; background-image: linear-gradient(to top, #0075be, #005a9c);'>
						<h5 class='modal-title'> <font style='font-weight: bold; color: #FFFFFF; font-size: 1.0em;'>Registro</font></h5>
					</div>

					<div class='modal-body' style="border-radius: 0px 0px 12px 12px; width: 100%; min-height: 65%; background-blend-mode: collor-dodge;">
						<div class='modal-body'>
						  <button id="incluir" class="btnceptisp" > Editar Registro </button>
						  <br><br>
						  <form accept-charset='ISO-8859-1' method='post' action='#'>
							<div><?php 'Registro';?></div>

							<div class="form-group">
								<label id="lbldtini" for="dtini" class="col-sm-2 control-label"><?="Data Inicial"?></label>
								<div class="col-sm-4">
									<input type="text" required="required" class="form-control" id="dtini" name="dtini" placeholder="Data Inicial" value="<?= "Data Inicio" ?>">
								</div>
	
								<label id="lbldtfin" for="dtfin" class="col-sm-2 control-label"><?="Data Final"?></label>
								<div class="col-sm-4">
									<input type="text" required="required" class="form-control" id="dtfin" name="dtfin" placeholder="data Final" value="<?= "Data Fim" ?>">
								</div>
							</div>
							<br><br><br>
							<div class="form-group">
								<label id="lblUsuario" for="usuario" class="col-sm-2 control-label"><?="Usuário"?></label>
								<div class="col-sm-4">
									<input type="text" required="required" class="form-control" id="usuario" name="usuario" placeholder="Usuario Sistema" value="<?= $cnpj; ?>">
								</div>
	
								<label id="lblsistema" for="sistema" class="col-sm-2 control-label"><?="Sistema"?></label>
								<div class="col-sm-4">
									<input type="text" required="required" class="form-control" id="sistema" name="sistema" placeholder="Sistema" value="<?= $ie; ?>">
								</div>
							</div>							
							<br><br>
							<div class="form-group">
								<label id="lbltas" for="tas" class="col-sm-2 control-label"><?="TAS"?></label>
								<div class="col-sm-4">
									<input type="text" required="required" class="form-control" id="tas" name="tas" placeholder="TAS" value="<?=""?>" onBlur="javascript:__tas()">
								</div>
	
								<label id="lblinc" for="inc" class="col-sm-2 control-label"><?="Incidente"?></label>
								<div class="col-sm-4">
									<input type="text" required="required" class="form-control" id="inc" name="inc" placeholder="Incidente" value="<?=""?>" onBlur="javascript:__inc()">
								</div>
							</div>
							<br><br>
							<div class="form-group">
								<label id="lblwo" for="wo" class="col-sm-2 control-label"><?="WO"?></label>
								<div class="col-sm-4">
									<input type="text" required="required" class="form-control" id="wo" name="wo" placeholder="WO" value="<?=""?>" onBlur="javascript:__wo()">
								</div>
	
								<label id="lblproblema" for="problema" class="col-sm-2 control-label"><?="Problema"?></label>
								<div class="col-sm-4">
									<input type="text" required="required" class="form-control" id="problema" name="problema" placeholder="Problema" value="<?= "problema" ?>">
								</div>
							</div>
							<br><br>
							<div class="form-group">
								<label id="lbldescricao" for="descricao" class="col-sm-2 control-label"><?="Descrição"?></label>
								<div class="col-sm-4">
									<textarea id="descricao" class="form-control" rows="10" name="obs" style="height:80px; max-height:125px; min-height:80px; max-width:295px; min-width:295px;">
										<?=""?>
									</textarea>									
								</div>
							</div>
							
							
							<br><br><br><br>
						  </form>
						</div>
					</div>

			</div>
		  </div>
		<!-- fim modal --> 				   
<?	
//		echo '0';
?>	  