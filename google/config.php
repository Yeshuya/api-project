<?php
require_once 'vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setClientId('862564044784-fbpmelidspimkssnl0etfdcsp76510nc.apps.googleusercontent.com');
$google_client->setClientSecret('Gos4kW0_ZZAnmUdQMvsTCocA');
$google_client->setRedirectUri('http://localhost/Projects/Api%20Project/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');


session_start();
?>
