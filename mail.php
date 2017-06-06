<!DOCTYPE html>
<html lang="da-DK">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Fairbar en nonprofit café og bar drevet af frivillige, med beliggenhed i Aarhus.  Her finder du spændende events, gode specialøl og ikke mindst vores støtteprojekt.">
<meta name="keywords" content="fairbar, nonprofit, frivillighed, specialøl, dagens program, tilbud, menu, priser, menukort, ølkort, aktuelle øl, kalender, nyheder, aktuelt, studiecafé, mad, drikke, alkohol">
<title>Fairbar - nonprofit, drevet af frivillige</title>
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

<div class="row">
	

<?php 
if(isset($_POST['submit'])){
    $to = "fairbar2016@mail.com";
    $from = $_POST['email'];
    $name = $_POST['navn'];
    $subject = "Besked fra fairbar.dk";
    $subject2 = "Kopi af din besked på fairbar.dk";
    $message = $name . " har skrevet følgende besked:" . "\n\n" . $_POST['besked'];
    $message2 = "Her er en kopi af din besked: " . $name . "\n\n" . $_POST['besked'];

    $headers = "fra:" . $from;
    $headers2 = "fra:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo '<div id="mail" class="col-xs-12">' . 'Mange tak for din henvendelse, ' . $name . '. Vi kontakter dig hurtigst muligt.' . '</div>';
    }
?>
	
</div>
<!-- Footer include -->
<?php require('footer.php') ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

<!-- Tagline script -->
<script src="js/tagline.js"></script>

<!-- Flip Box script -->
<script src="js/jquery.flip.min.js"></script>

<script>
$("#card").flip();
</script>

<!-- Fluid Container end -->
</div>

</body>
</html>