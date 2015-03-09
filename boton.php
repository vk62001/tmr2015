<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <script>
        function comprobar() {
         var pulsado = false;
         var opciones = document.formulario.validacion; 
         var elegido = -1; 
         for (i=0;i<opciones.length;i++) { 
               if (opciones[i].checked == true) {
               pulsado = true 
               elegido = i //número del elemento elegido en el array
               }
             }
         if (pulsado == true) { 
            miOpcion = opciones[elegido].value
            alert("Has elegido la opción: " + miOpcion + "\n El formulario ha sido enviado.");
            }
         else { 
            alert("no has elegido ninguna opción. \n Elige una opción para que el formulario pueda ser enviado")
            return false 
            }
         }
    </script>
</head>
<body>

    <form name="formulario" action="#" onsubmit="return comprobar()">
    <input type="text" maxlength="9" minlength="9" title="Se requieren 9 numeros" required />
  <input type="radio" name="validacion" value="Enviar y contestar otro" />Enviar y Contestar otro <br/>
  <input type="radio" name="validacion" value="Enviar y terminar" />Enviar y terminar<br/>
  <input type="submit" />
</form>

</body>
</html>