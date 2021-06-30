/* Funcoes Jquery implementada Junho de 2019 */
var $app    	= jQuery.noConflict(); 
//----------------------------------------------------------------------------------------------------
$(document).ready( function($) {
	
	$(function() {
		$( ".modal-content" ).draggable();
    });


	$('#tabbela').DataTable(
    	{
			"order": [0, "desc"]	
		}
	);	

});// JavaScript read do Formulario
 
//-------------------------------------------------------------
// Função para capturar eventos
function capturaEventos(obj, evt, fn) {
	// Verifica se o objeto suporta addEventListener
	if(obj.addEventListener){
		obj.addEventListener(evt, fn, true);
	} else {
	// Adiociona attachEvent da Microsoft
		var evento = 'on' + evt;
		obj.attachEvent(evento, fn);
	}
}

// Cancela evento
function cancelaEvento(evt){
	// Verifica se o evento suporta stopPropagation
	if(evt.stopPropagation) {
		// Aplica-se para Firefox, Chrome e demais
		evt.stopPropagation();
		evt.preventDefault();
	} else {
		// Aplica-se para IEs antigos
		evt.cancelBubble = true;
		evt.returnValue = false;
	}
}

// Função para capturar a requisição XMLHttpRequest
function verificaXmlHttp() {
	// Uma variável sem valor
	var xmlhttp;
	// Verifica se suporta XMLHttpRequest
	if (window.XMLHttpRequest) {
		// Adiciona o valor à variável
		xmlhttp = new XMLHttpRequest();
	} else {
		// Adiciona ActiveXObject da Microsoft 
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	// Retorna o valor
	return xmlhttp;
}

// Captura evento load da página
capturaEvento(window, 'onSubmit', function(evt){
	
	verificaXmlHttp();
	
	// Localiza o link com id "formulario"
	var formulario = document.getElementById('#formlogin');
	
	
		// Verifica os estados da requisição
		xmlhttp.onreadystatechange = function(){
			// Verifica se a página foi carregada corretamente
			if(xmlhttp.readyState === 4 && xmlhttp.status === 200) {
				var dadosJSON;
					try {
							dadosJSON = JSON.parse(xmlhttp.responseText);
					} catch(e) {
							eval("dadosJSON = (" + xmlhttp.responseText + ");");
					}
			}
		}
		
		// Abre a requisição com o método e url
		xmlhttp.open('POST', 'inc/login/valida_login.php', true);
		// Modifica o MimeType da requisição
		xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		// Envia os valores
		xmlhttp.send();
		
		// Checagem para os IEs antigos
		var evento = evt ? evt : window.event;
		// Cancela o evento
		cancelaEvento(evento);
}); 
//--------------------- Jquery ------------------------------------------

function login_sessao() {
	var vlogin_mail 	= 	$('#login_mail').val();
	var vlogin_pwd 		= 	$('#login_pwd').val();
    
	$.ajax({
			url		: "inc/login/valida_login.php",
			type	: "post",
			dataType: "json",
			data 	: { login_mail: vlogin_mail, login_pwd : vlogin_pwd } 
	}).done(function(r) {
			if (r.codzero==0) {
				$('#usuario').fadeOut(250).show()
					.html("&nbsp;"+r.email).fadeIn(300);
				modallogin.style.display = 'none';
				clock(r.ativar); 
			} else {
				alert('Falha na Conexão! '+r.codzero+' '+r.email);
			} 
	});
}	


function login_sair() {

	$.ajax({
			url		: "inc/login/login_sair.php",
			type	: "post",
			dataType: "json", 
			data 	: { p: "sair" }
	}).done(function(r) {
		if (r.codzero==0) {
								$("#aviso1").css("display", "none");
								$('#usuario').fadeOut(250).show()
									.html("&nbsp;"+r.email).fadeIn(300);
								modallogin.style.display = 'none';
								
							} else {
								
								alert('Nao existe Sessao Ativa ');

							} 
							
	});
	closeNav();
}	


function maria() {
	var vlogin_mail 	= 	$('#login_mail').val();
	var vlogin_pwd 		= 	$('#login_pwd').val();
    var oReq 			=	verificaXmlHttp(); 											/*Gera Objeto de Requisiçao*/

alert('Passagem 01 '+oReq);

		// Modifica o MimeType da requisição usado com POST
		oReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');		
		// Abre a requisição com o método e url
		oReq.open('POST', 'inc/login/valida_login.php', true);
		// Verifica os estados da requisição
		oReq.onreadystatechange = function(){
			// Verifica se a página foi carregada corretamente
			if(oReq.readyState === 4 && xmlhttp.status === 200) {
				
				alert('Passagem 02 oReq.readyState Carregou'+oReq.readyState === 4+' - '+xmlhttp.status === 200)+'-'+oReq.retorno;
			
			}
			// Envia os valores
			oReq.send('login_mail=vlogin_mail&'+'login_pwd='+vlogin_pwd);
		}
}	
//--------------------- JavaScript ---------------------------------------

function clock(n) {
	if (n==0){
		tempo = 360; // 6 minutos
	} else{
		tempo =   n;
	}	

	if((tempo - 1) >= 0){                   // Se o tempo não for zerado
		var min = parseInt(tempo/60); 		// Pega a parte inteira dos minutos
		var seg = tempo%60;                 // Calcula os segundos restantes

			if(min < 10){                  		// Formata o número menor que dez, ex: 08, 07, ...
				min = "0"+min;
				min = min.substr(0, 2);
			}
			if(seg <=9){
				seg = "0"+seg;
			}
			// Cria a variável para formatar no estilo hora/cronômetro
			horaImprimivel = min + ':' + seg; 	//JQuery pra setar o valor h/m/s '00:' + min + ':' + seg; 
			// Mostra se tempo <=30 seg
			if( tempo<=30 && tempo>0 ) {	
				$("#campo_contador").css("display", "block")
				.html('<img src="assets/images/ajax3.gif" alt="Carregando">').text(horaImprimivel);			
		    } else if ( tempo>30 ) {
				$("#campo_contador").css("display", "none");			
			} 
			
			if( tempo<=1 )  {
				$("#campo_contador").css("display", "none");
				login_sair();
			}
		
			//----Sensor de Movimentação do Mouse, recarrega o tempo de sessão------------------------------------
			$("body").mousemove(function(){
			  tempo=35;
			});
			//----------------------------------------------------------------------------------------------------		
		
		--tempo;							// diminui o tempo
	}

	if ( tempo>=0 )	{
		setTimeout('clock(tempo)',1000);	// Define que a função será executada novamente em 1000ms = 1 segundo
	} else if ( tempo<=0 ) {
		$("#campo_contador").css("display", "none");
		login_sair();
	}	
}