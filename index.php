<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
	<title>Como-Crear-Contador-de-Vistas-con-PHP-Fácil: Urian Viera</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cargando.css">
</head>
  <style>
  	span{
  		width: 100%;
  		padding: 15px 25px;
  		border-radius: 5px;
  		font-weight: 900;
  		font-size: 60px;
  		text-align: center;
  		color: #fff;
  		background-color: #ff6a00;
  	}
      h3{
          font-size: 35px;
          font-weight: 900;
          color: #ffa900;
          margin-top: 150px;
      }
  </style>
<body>


<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #563d7c !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="index.php"> 
          <img src="img/logo-mywebsite-urian-viera.svg" alt="Web Developer Urian Viera" width="120">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0">
      <h5 class="navbar-brand">Web Developer Urian Viera</h5>
    </div>
</nav>


<div class="container mt-7">
<br><br>
<br><br>


<h3 class="text-center">
	Cómo Crear un Contador de Vistas usando PHP de forma Fácil
</h3>
<hr>


<?php
if (file_exists('sumandoVista.html'))  //Verifico si existe este archivo 
$variableArchivo = fopen('sumandoVista.html','r+'); //si es archivo existe lo habro 

//$var1 = fopen('sumandoVista.txt','r+'); 
//$var2 = fopen('sumandoVista.html','r+'); 

else $variableArchivo = fopen('sumandoVista.html','w+'); //de lo contrario creo el archivo 
$leerArchivo = fgets($variableArchivo,20);  //luego de estar creado, leo el archivo y obtengo una línea desde el puntero de un archivo
if ($leerArchivo == '')  //Valido la variable leerArchivo cuando esta vacia 
$leerArchivo = "10";  //Inicio el conteo desde cero 
rewind($variableArchivo);  //ponemos el puntero al inicio del archivo 
fputs($variableArchivo,++$leerArchivo);  //escribimos la linea leída mientras le aumentamos en uno 
fclose($variableArchivo);  //cerramos el archivo 

?>


 <div class="row text-center">
    <div class="col-12 col-md-12">
    	<span>
			<?php echo $leerArchivo; ?>
		</span>
    </div>
  </div>


</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });      
});
</script>

	
</body>
</html>