<?php require_once('inumerology.php'); ?>
<html>
<head>
	<title>Soul & Personality by Numerology</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="https://getbootstrap.com/docs/3.4/assets/css/ie10-viewport-bug-workaround.csss" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="form.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="https://getbootstrap.com/docs/3.4/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="https://getbootstrap.com/docs/3.4/assets/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<div class="container">
	<form action="" method="post" class="form-numerology">
        <h2 class="form-numerology-heading text-center">iNumerology :</h2>
        <label for="inputFullname" class="sr-only">Fullname</label>
        <input type="text" id="inputFullname" name="fullname" class="form-control" placeholder="Input your name ..." required autofocus>
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Check">
      </form>
	  <div class="text-center">
		<?php 
				// if(isset($fullname)) {
					echo "<strong>".$fullname."</strong><br>";
					echo "🤗 <strong>Your Soul Number</strong> : (".$soul["number"].") ".$soul["character"]."<br>";
					echo "😇 <strong>Your Personality Number</strong> : (".$personality["number"].") ".$personality["character"]."<br>";
				// }
		?>
		<br>
		<a href="https://github.com/ismanramadhan/inumerology" target="_blank">See code on my <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg> github @ismanramadhan</a>
	  </div>
	</div>
</body>
</html>
