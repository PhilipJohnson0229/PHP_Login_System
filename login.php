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
<div class="uk grid uk child width-1-3@s uk child width-1-1">
	<form class = "uk-form-stacked js-login">
    <h2> Login </h2>
            <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email@email.com">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Password</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Your passphrase">
            </div>
        </div>

        <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

        <div class="uk-margin">
            <button class="uk-button uk-button-default" type="Submit">Login</button>
        </div>
  </form>
</div>
</div>

<?php require_once "Inc/footer.php" ?>

</body>

</html>