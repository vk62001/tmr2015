
<meta charset="utf-8" />
    <meta name="author" content="Centro de Estudios Tecnologicos (CEDETEC)">
    <meta name="description" content="Torneo Mexicano de Robotica 2015 - FES Acatlan">
    <meta name="keywords" content="TMR2015, TMR 2015, Torneo Mexicano de Robotica 2015,Torneo Mexicano de Robotica 2015,Torneo Mexicano de Robotica, Torneo Mexicano de Robotica, Federación Mexicana de Robotica, FES Acatlán ">
    <title>Torneo Mexicano de Robótica 2015</title>
    <link href="css/estilo.css" rel="stylesheet" />
    <link rel="icon" href="imagenes/favicon.ico" />
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
      <!-- google analytics -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59710517-1', 'auto');
  ga('send', 'pageview');

</script>
    <!-- google analytics -->
    <!-- slider-->
<!--   <script src="sliderengine/jquery.js"></script>-->
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingTorneo Mexicano de Robotica 2015slider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!--slider-->
    <!-- acordeon-->
    <link rel="stylesheet" href="js/jquery-ui-1.11.1.custom/jquery-ui.css" />
    <script src="js/jquery-ui-1.11.1.custom/jquery-ui.js"></script>
    <!-- acordeon-->
    <script src="slider/jquery.bxslider.js">
    </script>
    <link rel="stylesheet" href="js/colorbox.css" />
    <script src="js/jquery.colorbox.js"></script>
    <script>
        $(document).ready(function(){
            $(".iframe").colorbox({iframe:true, width:"800", height:"680"});
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("no repetir");
					return false;
				});
			});
    </script>
        <script>
        $(document).ready(function(){
            $(".iframe2").colorbox({iframe:true, width:"1000", height:"95%"});
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("no repetir");
					return false;
				});
			});
    </script>
    <script>
             $(function() {
            $( "#accordion" ).accordion({
            active:10,
            heightStyle: "content",
            event: "click hoverintent"
            });
            });
              
               $.event.special.hoverintent = {
setup: function() {
$( this ).bind( "mouseover", jQuery.event.special.hoverintent.handler );
},
teardown: function() {
$( this ).unbind( "mouseover", jQuery.event.special.hoverintent.handler );
},
handler: function( event ) {
var currentX, currentY, timeout,
args = arguments,
target = $( event.target ),
previousX = event.pageX,
previousY = event.pageY;
function track( event ) {
currentX = event.pageX;
currentY = event.pageY;
};
function clear() {
target
.unbind( "mousemove", track )
.unbind( "mouseout", clear );
clearTimeout( timeout );
}
function handler() {
var prop,
orig = event;
if ( ( Math.abs( previousX - currentX ) +
Math.abs( previousY - currentY ) ) < 7 ) {
clear();
event = $.Event( "hoverintent" );
for ( prop in orig ) {
if ( !( prop in event ) ) {
event[ prop ] = orig[ prop ];
}
}
// Prevent accessing the original event since the new event
// is fired asynchronously and the old event is no longer
// usable (#6028)
delete event.originalEvent;
target.trigger( event );
} else {
previousX = currentX;
previousY = currentY;
timeout = setTimeout( handler, 100 );
}
}
timeout = setTimeout( handler, 100 );
target.bind({
mousemove: track,
mouseout: clear
});
}
};
</script>