<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('862564044784-fbpmelidspimkssnl0etfdcsp76510nc.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('Gos4kW0_ZZAnmUdQMvsTCocA');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://api-project-finals.herokuapp.com/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');


//start session on web page
session_start()
// credits: john paul majaaaaaa
?>
