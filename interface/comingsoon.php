<?php
/**
 * @package   coming-soon-page
 * 
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo plugins_url( 'assets/css/style.css', dirname( __FILE__ ) ); ?>">
	<script type="text/javascript" src="<?php echo plugins_url( 'assets/js/script.js', dirname( __FILE__ ) ); ?>"></script>
	<title>En maintenance | <?php bloginfo('name') ?></title>
</head>

<body>
	<header>
		<div class="hero">
			<p><?php bloginfo('name')?> est actuellement en construction, revenez plus tard</p>
		<h1>BIENTÔT</h1>
		
		<hr>
			<p id="launch"></p>
		</div>  
	</header>
</body>
</html>