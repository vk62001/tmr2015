<!doctype html>
<html>
<head>
	 <?php require_once ('modulos/head.php'); ?>
</head>
<body>
    <div class="contenido" style="background-image: url(../imagenes/12.jpg);">
        <header>
            <?php require_once ('modulos/header.php'); ?>
        </header>
        <menu>
            <a href="index.php"><li class="menu activo" >Inicio</li></a>
            <a class="iframe2" href="documentos/convocatoria.pdf"><li class="menu" >Convocatoria</li></a> 
            <a href="categorias.php"><li class="menu" >Categorías</li></a>
            <a href="sede.php"><li class="menu" >Sede</li></a>
            <a href="cuotas.php"><li class="menu" >Cuotas</li></a>
            <a href="becas.html"><li class="menu" >Becas</li></a>
            <a href="registro.php"><li class="menu" >Registro</li></a>
            <a href="programa.php"><li class="menu" >Programa</li></a>
            <a href="organizadores.php"><li class="menu" >Organizadores</li></a>
            <a href="patrocinadores.php"><li class="menu" >Patrocinadores</li></a>
            <a href="resultados.php"><li class="menu" >Resultados y premios</li></a>
            <a href="creditos.php"><li class="menu" >Créditos</li></a>  
        </menu>
        <section>
            <div class="imgPuma"></div>
            <div class="panel1"></div>
            <div class="panel2">
                <div class="aside">
                <div class="texto">
                   <a class="iframe" href="bienvenidos.php"> 
                       <br/>
                       <br/>
                       <div class="torneoMexicano"></div>
                    </a>
                </div>
                    <br/>
                    <h2 class="tituloCategoria3" style="font-size:40px;font-family:agencyb">Del 23 al 25 de Abril</h2>
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
        </section>
        <footer>
        
            <div class="footerUp">

                <div class="logos">
                    <div class="slider" >
                            <?php require_once('modulos/slider.php'); ?>
                    
                </div>
                <div class="logoFed"></div>
                <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FTorneo-Mexicano-de-Rob%25C3%25B3tica%2F1529351310614774%3Fref%3Dhl&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;margin-left:66px;" allowTransparency="true"> </iframe>
            </div>
            <?php require_once('modulos/footer.php'); ?>
        </footer>
    </div>
    
</body>
</html>