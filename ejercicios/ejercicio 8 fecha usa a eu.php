<!DOCTYPE html>
<html>
<head>
	<title>ejercicio  php: 8 pasar fecha en formato EEUU a EU y viceversa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href=".../estilo.css">
</head>
<body>
<p> <h1>Ejercicio 8:</h1></p>
<p> pasar fecha en formato EEUU a EU y viceversa</p>
    <?php 
    function conversorFecha($datos, $region){
        $datos = explode ("/", $datos);
        
        

        echo $datos[2];
    } 

        $fecha1 = "23/04/2019";
        $zona ="EU";
        $resultado = conversorFecha ($fecha1,$zona);
        print ("<p>Fecha inicial de $zona: $fecha1</p>\n");
        print ("<p>Fecha convertida de $zona: $resultado</p>\n");


    

?>
</body>
</html>