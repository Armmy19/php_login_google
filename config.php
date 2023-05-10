
<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('811698600873-ta6tj4hu86veg1fo3l7v1kbtch8kmon5.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://doctorjuonline.com/sign_google/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>