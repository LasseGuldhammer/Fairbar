<!DOCTYPE html>
<html lang="da-DK">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="På Fairbar har du som musiker mulighed for at spille din koncert helt gratis. Send os en mail, og vi hjælper med at arrangere arrangementet.">
<meta name="keywords" content="musik, spille, optræde, synge, live musik, akustisk, elektronisk, samspil, release">
<title>Musiker | Fairbar</title>
<link rel="icon" type="image/png" href="images/favicon.png">
<!-- Normalize -->
<link href="css/normalize.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Header include -->
<?php require('header.php') ?>

<!-- Header -->
<header>

<div class="jumbotron padding-0 position-relative">
	<div id="musiker-header" class="col-xs-12 text-center position-absolute">
  		<h1 class="header-h1 primær font-weight-700">MUSIKER</h1>
  		<h4 class="header-h4 hvid playfair-display font-italic">spil gratis på fairbar</h4>
  	</div>	
</div>

</header>

<!-- Fluid Container Start -->
<div class="container-fluid">

<!-- Information -->
<main>
<div class="row margin-top-em-1">
	<div class="col-sm-4 frivillig-padding-1">
		<h3>Spil din musik på fairbar</h3>
		<p class="text-justify">Er du interesseret i at spille din musik gratis på Fairbar? Så skriv til os! Vi sætter stor pris på at du med din musik kan hjælpe os med at sprede vores budskab.</p>
		<h3>Release parties</h3>
		<p class="text-justify">Har du eller dit band udgivet et album, en EP, eller andet som kræver en festlig lejlighed?<br />
		Brug fairbar! Vi har lokalet, stemningen, og ikke mindst faciliteterne til at jeres release party bliver - ja - en fest.<br />
		Det er også muligt at lave særlige aftaler med hensyn til mad, snacks og drikkevarer.</p>
	</div>
	<div class="skillelinjer col-sm-4 frivillig-padding-1">
		<h3>Fairbars retningslinjer for musikere</h3>
		<p>Læs retningslinjerne i linket nedenunder og skriv en mail til formanden for musikudvalget.</p>
		<p><a class="btn btn-default btn-block fairbar-button margin-top-em-1 font-smallcaps font-weight-700" href="files/guidelines-dk.pdf" target="_blank">download fairbars retningslinjer for musikere</a></p>
		<p><a class="btn btn-default btn-block fairbar-button margin-top-em-1 font-smallcaps font-weight-700" href="files/guideslines-en.pdf" target="_blank">download fairbar's guidelines for musicians</a></p>
	</div>
	<div class="col-sm-4 frivillig-padding-1">
		<h3>Send os en mail</h3>
		<p>Vi glæder os til at høre fra dig/jer!</p>
		 <form class="form-horizontal" method="post" action="mail.php">
		 	<div class="form-group">
    			<label class="control-label col-sm-2" for="name">Navn</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" id="name" name="navn" placeholder="navn">
    			</div>
  			</div>
  			<div class="form-group">
    			<label class="control-label col-sm-2" for="email">E-mail</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" id="email" name="email" placeholder="e-mail">
    			</div>
  			</div>
  			<div class="form-group">
  				<label class="control-label col-sm-2" for="besked">Besked</label>
  				<div class="col-sm-10">
  					<textarea class="form-control" rows="5" id="besked" name="besked" placeholder="besked"></textarea>
				</div>
			</div>
  			<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      				<input type="submit" name="submit" value="SEND" class="btn btn-default btn-block fairbar-button">
    			</div>
  			</div>
		</form>
	</div>
</div>
</main>

<!-- Footer include -->
<?php require('footer.php') ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>


<!-- Fluid Container End -->
</div>

</body>
</html>
