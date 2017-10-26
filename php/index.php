<html>
<head>
	<title>3dev</title>
	<link rel="icon" type="8248flavicon" href="http://localhost/?page=home" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="jquery.vide.js"></script>
	<link rel="stylesheet" href="style.css" >
	<script src="script.js"></script>
	
	<script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="3800b721-57b2-4531-8068-f3a7e719b664";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>
</head>
<body>

<?php include("include/header.php") ?>

<!-- content -->
			<?php
				if ($_GET['page'] == "home"){
					include("page/home.php");
				}else if ($_GET['page'] == "about"){
					include("page/about.php");
				}else if ($_GET['page'] == "contact"){
					include("page/contact.php");
				}else if ($_GET['page'] == "formation"){
					include("page/formation.php");
				}else{
					include("page/404.php");
				}
			?>
<?php include("include/footer.php") ?>

	
	</body>
</html>