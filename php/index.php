<!doctype html>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

	</head>
<body>
<!--header-->
	<?php include_once("header.php") ?>
		
<!--content-->
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
					if($_GET['page'] == "home"){
						echo "hey hey hey";
					}else if ($_GET['page'] == "about") {
						echo "page about";
						}else if ($_GET['page'] == "contact") {
						echo "page contact";
					}else{
						echo "page 3dev";
					}
				?>
			</div>
		</div>
	</div>
	
<!--footer-->
	<?php include_once("footer.php") ?>
	

</body>
</html>