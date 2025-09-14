<!DOCTYPE html>
<html lang="ca" xml:lang="ca">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Pàgina oficial einavirtual.com">
    <meta name="author" content="einavirtual.com">
    <link rel="icon" href="img/icons/ev-icona.gif">

    <title>Zona Freelancer</title>

    <!-- Bootstrap core CSS -->
	<link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-xls.css" rel="stylesheet">
    <link href="css/personal.css" rel="stylesheet">
	<link href="css/hidden.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-dropdown.js"></script>
	<script src="js/jquery-ui/jquery.js"></script>
	<script src="js/jquery-ui/jquery-ui.js"></script>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true, active: false 
    });
	$( "#tabs" ).tabs();
  });
  </script>
</head>

<body>


<div class="container-fluid">
	<div class="col-sm-3">	
		<a class="btn btn-default" href="form-llistat.html" role="button" title="Torna a la pàgina d'inici">LListat de formularis</a>
		<button type="button" class="btn btn-xs btn-success visible-xs">XS</button>
		<button type="button" class="btn btn-xs btn-warning visible-sm">SM</button>
		<button type="button" class="btn btn-xs btn-danger visible-md">MD</button>
		<button type="button" class="btn btn-xs btn-warning visible-lg">LG</button>
		<button type="button" class="btn btn-xs btn-success visible-xlg">XLG</button>
	</div>	
	<div class="col-sm-6">
		<h1><small>Zona Freelancer</small></h1>
	</div>
	<div class="col-sm-3">
		<script>
			document.write("Ample : " + window.innerWidth + "<br>");
			document.write("Altura: " + window.innerHeight + "<br>");
			document.write("Bits a paleta de colors: " + screen.colorDepth);
		</script>	
	</div>		
</div>
<hr class="featurette-divider">
<div class="container-fluid">
		<div class="col-sm-9 fondo1">
			
<?php include("ca/phpol/contingut-personal-freelancer.php"); ?>

		</div>
		<div class="col-sm-3 fondo2">
		
<?php include("ca/phpol/contingut-privat-freelancer.php"); ?>

		</div>	
</div>
<hr class="featurette-divider ">

</body>
</html>
