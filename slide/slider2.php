<style>
* {margin: 0; padding: 0;}
body {background: #fff}
a,img {border: none;}
.trs {-webkit-transition:all ease-out 0.5s;
      -moz-transition:all ease-out 0.5s;
      -o-transition:all ease-out 0.5s;
      -ms-transition:all ease-out 0.5s;
      transition:all ease-out 0.5s;
}  
#slider {position: relative; z-index: 1;}
#slider a { position: absolute; top: 0; left: 0; opacity: 0;filter:alpha(opacity=0);}
.ativo {opacity: 1!important; filter:alpha(opacity=100)!important;}

/*controladores*/
span {background: #0190EE; cursor: pointer; opacity: 0;filter:alpha(opacity=0); position: absolute; bottom: 40%; width: 43px; height: 43px; z-index: 5;}
.next {right: 10px;}
.next:before,.next:after {left: 21px;}
.next:before {
    -webkit-transform: rotate(-42deg);
    top: 5px;
}
.next:after {
    -webkit-transform: rotate(-132deg);
    top: 19px;
}
.next:before,.next:after,.prev:before,.prev:after {content: "";
    height: 20px;
    background: #fff;
    width: 1px;
    position: absolute;
}
.prev {left: 10px;}
.prev:before,.prev:after {left: 18px;}
.prev:before {
    -webkit-transform: rotate(42deg);
    top: 5px;
}
.prev:after {
    -webkit-transform: rotate(132deg);
    top: 19px;
}

figure:hover span {opacity: .5;filter:alpha(opacity=50);}
figure {
    max-width: 600px;
    height   : 354px;
    position : relative;
    overflow : hidden;
    margin   : 50px auto;
}

figcaption {padding-left: 20px;color: #fff; font-family: "Kaushan Script","Lato","arial"; font-size: 22px; background: rgba(1, 144, 238, 0.76); width: 100%; position: absolute; bottom: 0; left: 0; line-height: 55px; height: 55px; z-index: 5}
</style>


<figure>
   <span class="trs next"></span>
   <span class="trs prev"></span>

   <div id="slider">
      <a href="#" class="trs"><img src="imgs/img1.jpg" alt="Legenda da imagem 1" /></a>
      <a href="#" class="trs"><img src="imgs/img2.jpg" alt="Legenda da imagem 2" /></a>
	  <a href="#" class="trs"><img src="imgs/img3.jpg" alt="Legenda da imagem 3" /></a>
   </div>

   <figcaption></figcaption>
</figure>

<script type="text/javascript">
  function setaImagem(){
   document.querySelector(".next").addEventListener("click",settings.proximo,false);
   document.querySelector(".prev").addEventListener("click",settings.anterior,false);	  
	  
  }
  window.addEventListener("load",setaImagem,false);
   
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
		
 }
   
 //chama o slide
settings.primeiraImg();

//chama a legenda
settings.legenda(elemento);

//chama o slide ?? um determinado tempo
var intervalo = setInterval(settings.slide,4000);  

</script>