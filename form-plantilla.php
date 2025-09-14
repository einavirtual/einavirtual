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

    <title>Plantilla de formularis</title>

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
		<h1><small>Plantilla de proves</small></h1>
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
	<div class="row"><!-- FILA 1 -->
		<div class="col-sm-9 fondo1">
			<div class="col-md-5"><h1>Àrea Personal</h1></div>
			<div class="col-md-7"><h1><h4>Nom i Cognom, Freelancer a EinaVirtual</h4>&nbsp;</h1>
				<!-- Aquí el php contingut àrea personal -- mirar de recuir h1 creant un css "formath1..h2..etc" -->
				
			</div>
			<div class="row">
				<p>Contingut-Personal-Freelancer.php</p>
				<div class="col-md-4">
					<header><h2>Buscar nous projectes</h2></header>
					<article>
						<h3>Títol anunci 1</h3>
						<p>Text anunci 1<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 2</h3>
						<p>Text anunci 2<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 3</h3>
						<p>Text anunci 3<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 4</h3>
						<p>Text anunci 4<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 5</h3>
						<p>Text anunci 5<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 6</h3>
						<p>Text anunci 6<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 7</h3>
						<p>Text anunci 7<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 8</h3>
						<p>Text anunci 8<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
				</div>
				<div class="col-md-4">
					<header><h2>Pressupostos actius</h2></header>
					<article>
						<div class="lila">
							<h3>Títol anunci 1</h3>
							<p>Text anunci 1<p>
							<p>Fase 1: <del>recepció de pressupostos</del><p>
							<p>Fase 2: negociació dels pressupostos<p>
							<p>Fase 3: Selecció del candidat<p>
							<p>Fase 4: Adjudicació del projecte<p>
							<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
						</div>
						<div class="verd">
							<h3>Pressupost</h3>
							<p>Descipció del pressupost que va fer l'usuari en el seu moment</p>
							<p><strong>Fita 1 "240,00 €", </strong>descripció de la fita<p>
							<p><strong>Fita 2 "100,00 €", </strong>descripció de la fita<p>
							<p><strong>Fita 3 "350,00 €", </strong>descripció de la fita<p>
							<p><strong>Total projecte "690,00 €"</strong><p>
							<time datetime="2015-04-19" pubdate> pressupostat el 19-04-2015 </time>
						</div>
						<p>2 Missatges nous<p>
						<a class="btn btn-default" href="#" role="button" title="Obre el projecte per veure o afegir contingut">Obrir projecte</a>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 2</h3>
						<p>Text anunci 2<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 3</h3>
						<p>Text anunci 3<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 4</h3>
						<p>Text anunci 4<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
					<hr class="linea-hor">
					<article>
						<h3>Títol anunci 5</h3>
						<p>Text anunci 5<p>
						<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
					</article>
				</div>
				<div class="col-md-4">
					<header><h2>Projectes adjudicats</h2></header>
					<article>
						<div class="lila">
							<h3>Títol anunci 1</h3>
							<p>Text anunci 1<p>
							<time datetime="2015-04-19" pubdate> publicat el 19-04-2015 </time>
						</div>
						<div class="verd">
							<h3>Pressupost</h3>
							<p>Descipció del pressupost que va fer l'usuari en el seu moment</p>
							<p><strong>Fita 1 "240,00 €", </strong>descripció de la fita<p>
							<p><strong>Fita 2 "100,00 €", </strong>descripció de la fita<p>
							<p><strong>Fita 3 "350,00 €", </strong>descripció de la fita<p>
							<p><strong>Total projecte "690,00 €"</strong><p>
							<time datetime="2015-04-19" pubdate> pressupostat el 19-04-2015 </time>
						</div>
						<a class="btn btn-default" href="#" role="button" title="Obre el projecte per veure o afegir contingut">Obrir projecte</a>
					</article>
				</div>
			</div>
		</div>
		<div class="col-sm-3 fondo2">
		
<?php include("contingut-privat-freelancer.php"); ?>

		</div><!-- /area privada -->
	</div>	
	<div class="row"><!-- FILA 2 --
		<div class="col-md-9 fondo2">
			<div class="row">
			<div class="fondo2 hidden-md hidden-lg hidden-xlg"><h1>Àrea Personal</h1></div>
				<h1>Aquí hi va una d'aquelles parrafedes que ha d'ocupar més d'una línea, amb la finalitat de visualitzar correctament l'ample que té aquesta fila.</h1>
					<!-- Aquí el php contingut àrea personal --
			</div>
		</div>
		<div class="col-md-3 fondo1">
		</div>-->
	</div>
</div>
<hr class="featurette-divider ">

</body>
</html>
