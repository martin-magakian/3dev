<!doctype html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>3dev</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="script/script.js"></script>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="https://cdn.plyr.io/2.0.16/plyr.css">
</head>
<body>

<div class="container">
  <div class="row">
	<?php
	$slide = array(
				array(
					"img" => "https://jeunes-ca.fr/main/wp-content/uploads/2014/03/Mutuelle-%C3%A9tudiante-358x240.jpg",
					"nom" => "Marie, 2année",
				),
				array(
					"img" => "http://cdn-europe1.new2.ladmedia.fr/var/europe1/storage/images/europe1/faits-divers/antoine-conte-presente-ses-excuses-apres-avoir-violemment-agresse-un-jeune-homme-en-decembre-2968640/32788571-1-fre-FR/Antoine-Conte-presente-ses-excuses-apres-avoir-violemment-agresse-un-jeune-homme-en-decembre.jpg",
					"nom" => "Mathéo 5année",
				),
				array(
					"img" => "http://www.dax.fr/sites/default/files/images/jeunesse/etudiant/jeune-etudiante.jpg",
					"nom" => "Elise, 1année",
				),
				
			);

	foreach($slides as $slide{ ?>
		<div class="col">
			<div class="card shadow" style="width: 20rem;">
				  <img class="card-img-top" src="<?php echo $slide['img'] ?>" alt="professeur institut de devellopement code 404">
				  <div class="card-body card-body-about">
					<h4 class="card-title space haut les-profs name"><?php echo $slide['nom'] ?></h4>
					<p class="card-text space les-profs">Etudie à 3dev</p>
					<p class="card-text space les-profs ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn about btn-primary-about bas"><img src="img/linkedin.svg" alt="linkedin"></a>
				  </div>
			</div>
		</div>
	<?php } ?>
  </div>
</div>

</body>
</html>