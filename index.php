<!DOCTYPE html>
<html lang="ca" xml:lang="ca">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- No tocar res de sobre meu, per sota afegir el que vulgus -->
	<meta name="description" content="Pàgina oficial einavirtual.com">
	<meta name="author" content="einavirtual.com">
	<link rel="icon" href="img/icons/ev-icona.gif">
    

	<title>EinaVirtual - inici</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap-xls.css" rel="stylesheet">
	<link href="css/personal.css" rel="stylesheet">

	<meta class="os-tdn" http-equiv="Content-Language" content="es"><meta class="os-tdn" property="og:locale" content="es">
</head>

<body>
	<!-- 2 divs per fer que el logo es vegi bé -->
  	<div class="container visible-xs visible-lg visible-xlg"><img src="img/transparent.gif" alt="" width="0" height="55"></div>
	<div class="container visible-sm visible-md"><img src="img/transparent.gif" alt="" width="0" height="110"></div>
	
	<!-- Menu principal log-out -->
<?php include("ca/phpol/menu-index.php"); ?>

	<!--Logo estatic, aqui no hi vull moviment-->
	<div class="row featurette"> 
		<div class="col-sm-1"><!-- Aquest div s'haura d'eliminar -->
			<button type="button" class="btn btn-xs btn-warning visible-sm">SM</button>
			<button type="button" class="btn btn-xs btn-danger visible-md">MD</button>
			<button type="button" class="btn btn-xs btn-warning visible-lg">LG</button>
			<button type="button" class="btn btn-xs btn-success visible-xlg">XLG</button>
		</div>       
		<div class="col-sm-10">
			<p><img class="featurette-image img-responsive center-block" src="img/logo-einavirtual-2.jpg" alt="Pàgina oficial EinaVirtual.com"></p>
		</div>
		<div class="col-sm-1">
		</div>
	</div>

	<!-- Botons principals -->
<?php include("ca/phpol/index-zona-calenta.php"); ?>

	<!-- cosetes per omplir espai sota les opcions importants -->
<?php include("ca/phpol/index-eslogans.php"); ?>

    <!--Aqui comença el còmic -->
<?php include("ca/phpol/index-comic.php"); ?>
	
    <!--Inici informacions bàsiques-->
<?php include("ca/phpol/index-info.php"); ?>

    <!--Peu de pàgina-->
<?php include("ca/phpol/index-footer.php"); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>