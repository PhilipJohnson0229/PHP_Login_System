<?php
define('_CONFIG_', true);
require_once "config.php"; 
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
<div class="uk grid uk child width-1-3@s uk child width-1-1">
	<form>
          <h2> Login </h2>
    <fieldset class="uk-fieldset js-login">

        <legend class="uk-legend">Legend</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Email">
        </div>

         <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Password">
        </div>

         <div class="uk-margin">
            <button class="uk-button uk-button-default" type="Submit">Login</button>
        </div>
    </fieldset>
	</form>
</div>
</div>

<?php require_once "footer.php" ?>

</body>

</html>