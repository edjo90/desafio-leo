<figure>
   <span class="trs next"></span>
   <span class="trs prev"></span>

   <div id="slider">
      <a href="" class="trs"><button id="1"><img src="imgs/img1.jpg" alt="Slide Legenda da imagem 1" /></button></a>
      <a href="" class="trs"><button id="2"><img src="imgs/img2.jpg" alt="Slide Legenda da imagem 2" /></button></a>
	  <a href="" class="trs"><button id="3"><img src="imgs/img3.jpg" alt="Slide Legenda da imagem 3" /></button></a>
   </div>

   <figcaption></figcaption>

</figure>

<script type="text/javascript">
  function setaImagem(){
   document.querySelector(".next").addEventListener("click",settings.proximo,false);
   document.querySelector(".prev").addEventListener("click",settings.anterior,false);	  
  }
  
  window.addEventListener("load",setaImagem,false);
	window.onload = function() {
		var divs = document.getElementsByTagName("button");
		
		for(var i=0; i<divs.length; i++) {
			divs[i].addEventListener("click", function() {
				this.style.backgroundColor = "#ff0000";
					if( this.id == "1" ){
						var imagem='../imgs/img1.jpg';	
						
					} else if (this.id == "2"){
						var imagem='../imgs/img2.jpg';	
						
					} else if (this.id == "3"){
						var imagem='../imgs/img3.jpg';	
						
					}
				alert(imagem);				
			});
		}
	}	
  
  var settings = {
	  primeiraImg: function(){
		elemento = document.querySelector("#slider a:first-child");
		elemento.classList.add("ativo");
		this.legenda(elemento);
	  },
	  legenda: function(obj){
		var legenda = obj.querySelector("img").getAttribute("alt");
		document.querySelector("figcaption").innerHTML = legenda;
	  },
	  slide: function(){
		elemento = document.querySelector(".ativo");
		if(elemento.nextElementSibling){
			elemento.nextElementSibling.classList.add("ativo");
			settings.legenda(elemento.nextElementSibling);
			elemento.classList.remove("ativo");
		}else{
			elemento.classList.remove("ativo");
			settings.primeiraImg();
		}
	  },
	  proximo: function(){
		clearInterval(intervalo);
		elemento = document.querySelector(".ativo");

		if(elemento.nextElementSibling){
			elemento.nextElementSibling.classList.add("ativo");
			settings.legenda(elemento.nextElementSibling);
			elemento.classList.remove("ativo");
		}else{
			elemento.classList.remove("ativo");
			settings.primeiraImg();
		}
		intervalo = setInterval(settings.slide,4000);
	  },
	  anterior: function(){
		clearInterval(intervalo);
		elemento = document.querySelector(".ativo");

		if(elemento.previousElementSibling){
			elemento.previousElementSibling.classList.add("ativo");
			settings.legenda(elemento.previousElementSibling);
			elemento.classList.remove("ativo");
		}else{
			elemento.classList.remove("ativo");                     
			elemento = document.querySelector("a:last-child");
			elemento.classList.add("ativo");
			this.legenda(elemento);
		}
		intervalo = setInterval(settings.slide,4000);
	  },	  
	  seleciona: function(){
		alert('Seleciona');
	  }, 	
 }
   
 //chama o slide
settings.primeiraImg();

//chama a legenda
settings.legenda(elemento);

//chama o slide à um determinado tempo
var intervalo = setInterval(settings.slide,4000);  

</script>