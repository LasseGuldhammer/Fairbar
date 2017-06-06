<!DOCTYPE html>
<html lang="da-DK">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Du er altid velkommen til at kontakte Fairbar på mail eller telefon.">
<meta name="keywords" content="kontakt, spørgsmål, telefon, mail, bestyrelse, formand, forbindelse, telefonisk kontakt, åbningstider">
<title>Kontakt | Fairbar</title>
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

<!-- Fluid Container Start -->
<div class="container-fluid">

<!-- Kontaktpersoner -->
<main>
<div class="row text-center margin-top-em-1 margin-bottom-em-2">
	<div class="col-xs-12 col-sm-4 kontakt padding-bottom-em-1">
		<img class="kontakt-billeder" src="images/kontakt_christian.png" height="194" width="194" alt="Christian Rundager" />
		<h3 class="lysegrå font-weight-700">Driftsleder</h3>
		<p>Christian Rundager<br /><a href="mailto:leder@fairbar.dk">leder@fairbar.dk</a><br />Tlf: 31 68 44 66</p>
	</div>
	<div class="col-xs-12 col-sm-4 kontakt skillelinjer">
		<img class="kontakt-billeder" src="images/kontakt_trine.png" width="194" height="194" alt="Trine Kofoed" />
		<h3 class="lysegrå font-weight-700">Formand for styregruppen</h3>
		<p>Trine Kofoed<br /><a href="mailto:formand@fairbar.dk">formand@fairbar.dk</a></p>
	</div>
	<div class="col-xs-12 col-sm-4 kontakt">
		<img class="kontakt-billeder" src="images/kontakt_vibeke.png" width="194" height="194" alt="Vibeke Mie Jensen" />
		<h3 class="lysegrå font-weight-700">Næstformand for styregruppen</h3>
		<p>Vibeke Mie Jensen<br /><a href="mailto:næstformand@fairbar.dk">næstformand@fairbar.dk</a></p>
	</div>
</div>

<div class="row text-center margin-top-em-1">
	<div class="col-xs-12 col-sm-4 kontakt">
		<img class="kontakt-billeder" src="images/kontakt_henrik.png" width="194" height="194" alt="Henrik Routhaues Andersen" />
		<h3 class="lysegrå font-weight-700">Personaleleder</h3>
		<p>Henrik Routhaues Andersen<br /><a href="mailto:koordinator@fairbar.dk">koordinator@fairbar.dk</a></p>
	</div>
	<div class="col-xs-12 col-sm-4 kontakt skillelinjer">
		<img class="kontakt-billeder" src="images/kontakt_jesper.png" width="194" height="194" alt="Jesper Bonde Hansen" />
		<h3 class="lysegrå font-weight-700">Event- og kommunikationsansvarlig</h3>
		<p>Jesper Bonde Hansen<br /><a href="mailto:info@fairbar.dk">info@fairbar.dk</a></p>
	</div>
	<div class="col-xs-12 col-sm-4 kontakt">
		<img class="kontakt-billeder" src="images/kontakt_anne_sofie.png" width="194" height="194" alt="Anne Sofie Hoi" />
		<h3 class="lysegrå font-weight-700">Koncertbooker</h3>
		<p>Anne Sofie Hoi<br/><a href="mailto:musik@fairbar.dk">musik@fairbar.dk</a></p>
	</div>
</div>

<div class="row text-center">
	<div class="col-sm-6 padding-em-1">
		<h1>Send os en mail</h1>
		<p>Vi glæder os til at høre fra dig!</p>
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
	<div class="col-sm-6 padding-em-1">		
		<div id="map" style="width:100%;height:500px"></div>
	</div>
</div>
</main>

<!-- Footer include -->
<?php require('footer.php') ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

<!-- Fairbar script -->
<script src="js/fairbar-maps.js"></script>

<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwnAuRXM8UG8NS283fA8Sn7HFG4zTOP0Q&callback=myMap"></script>

<!-- Fluid Container End -->
</div>

</body>
</html>