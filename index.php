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
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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
	  </div>
	</div>
</body>
</html>
