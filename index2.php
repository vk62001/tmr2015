<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Facultad de Estudios Superiores - Acatlán | Torneo Mexicano de Robótica 2015</title>

    <link href="css/estilo.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="js/colorbox.css" />
    <link rel="icon" href="imagenes/favicon.ico" />
      <link href="../css/lightbox.css" rel="stylesheet" />
	<script src="../js/lightbox.min.js"></script>
    <script src="js/jquery.colorbox.js"></script>
        <!-- slider-->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!--slider-->
    <script>
        $(document).ready(function(){
            $(".iframe").colorbox({iframe:true, width:"30%", height:"50%"});
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("no repetir");
					return false;
				});
			});
    </script>

    <script>
        $(document).ready(function(){
 $('.bxslider').bxSlider({
  auto: true,
});
});
    </script>
    	<script>
        $(document).ready(function(){
            $(".iframe").colorbox({iframe:true, width:"70%", height:"80%"});
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("no repetir");
					return false;
				});
			});
    </script>
</head>
<body>
    
    <div class="contenido">
        <header>
            <div class="headLeft">
            </div>
            <div class="headRight">
                <img style="border-right:2px solid black; margin-right: 10px; padding-right:10px"  src="imagenes/acatlan.png">
                <img src="imagenes/Logo40.png">
            </div>
        </header>
        <menu>
            <a href="index2.html"><li class="menu activo" >Inicio</li></a>|
            <a href="categorias.html"><li class="menu" >Categorías</li></a>|
            <a href="sede.html"><li class="menu" >Sede</li></a>|
            <a href=""><li class="menu" >Cuotas</li></a>|
            <a href=""><li class="menu" >Becas</li></a>|
            <a href=""><li class="menu" >Registro</li></a>|
            <a href=""><li class="menu" >Programa</li></a>|
            <a href=""><li class="menu" >Organizadores</li></a>|
            <a href=""><li class="menu" >Patrocinadores</li></a>|
            <a href=""><li class="menu" >Resultados y premios</li></a>
        </menu>

        <section>
            <video width="970px" height="400px" autoplay>
                <source  src="imagenes/Bienvenidos%20a%20la%20FES%20Acatl%C3%A1n.webm" type="video/ogg">
                
            </video>
            <div class="imgPuma">
                
            </div>
            <div class="panel1">

            </div>
            <div class="panel2">

                <div class="aside">
                <div class="texto">
                   <a class="iframe" href="bienvenidos.html"> 
                       <div class="torneoMexicano"></div>
                    </a>
                </div>
                    <h2 class="titulo3">Fechas</h2>
                    <a class="iframe" href="index.html"><li class="liAside"> 12/ 12 / 12 | Lorem ipsum</li></a>
                    <a  class="iframe" href=""><li class="liAside"> 12/ 12 / 12 | Lorem ipsum</li></a>
                    <a class="iframe" href=""><li class="liAside"> 12/ 12 / 12 | Lorem ipsum</li></a>
                    <h2 class="titulo3">Avisos</h2>
                    <a class="iframe" href=""><li class="liAside"> Lorem ipsum</li></a>
                    <a class="iframe" href=""><li class="liAside"> Lorem ipsum</li></a>
                    <a class="iframe" href=""><li class="liAside"> Lorem ipsum</li></a>

                </div>
            </div>
        </section>
        <footer>
        
            <div class="footerUp">

                <div class="logos">
                    <div class="slider" >
                        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                            <ul class="amazingslider-slides" >
                            <li><a href="imagenes/100_1207.JPG" class="html5lightbox"><img src="imagenSlider/100_1207.JPG" alt="100_1207" /></a>
                </li>
                                <li><a href="imagenes/100_1225.JPG" class="html5lightbox"><img src="imagenSlider/100_1225.JPG" alt="100_1225" /></a>
                            </li>
                                <li><a href="imagenes/100_1237.JPG" class="html5lightbox"><img src="imagenSlider/100_1237.JPG" alt="100_1237" /></a>
                            </li>
                                <li><a href="imagenes/100_1262.JPG" class="html5lightbox"><img src="imagenSlider/100_1262.JPG" alt="100_1262" /></a>
                            </li>
                        </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="imagenSlider/100_1207-tn.JPG" alt="100_1207" /></li>
                <li><img src="imagenSlider/100_1225-tn.JPG" alt="100_1225" /></li>
                <li><img src="imagenSlider/100_1237-tn.JPG" alt="100_1237" /></li>
                <li><img src="imagenSlider/100_1262-tn.JPG" alt="100_1262" /></li>
            </ul>
        </div>
                    </div>
                    <div class="logoFed"></div>
                </div>

            </div>
            <div class="footerDown">
                <p class="derechosUp">Hecho en México, todos los derechos reservados 2013. Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica. De otra forma, requiere permiso previo por escrito de la institución.</p>
                <p class="derechosdown">Sitio web administrado por:
Facultad de Estudios Superiores Acatlán. comentarios@apolo.acatlan.unam.mx</p>
            </div>
        </footer>
    </div>
    
</body>
</html>