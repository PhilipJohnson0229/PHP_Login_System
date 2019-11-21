<?php
define('_CONFIG_', true);
require_once "Inc/config.php"; 
?>

<!DOCTYPE html>
<html lang = "en">

<head>
<meta charset = "utf-8"/>
<meta http-equiv = "X-UA-Compatible" content = "IE=edge"/>
<meta name = "viewport" content = "width=device.width, intial-scale=1"/>
<meta name = "Robots" content = "follow"/>

<title>Login System</title>
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.2/dist/css/uikit.min.css" />
</head>

<body>
<div class = "uk-section uk-container uk-text-center">
	<?php

	echo "Hello World! today is "; 
	echo date("y = d");

	?>

	<p>
		<a href = "login.php">Login</a>
		<a href = "register.php">Register</a>
	</p>
</div>

<?php require_once "Inc/footer.php"; ?>

</body>

</html>