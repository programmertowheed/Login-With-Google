<?php

//start session on web page
session_start();

//Include google client library for PHP autoload file
require 'vendor/autoload.php';

//Make object of google  API Client for call google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1094718243053-o7i9qnshecmqt3ivq9m3dn16a0qher40.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret Key
$google_client->setClientSecret('lKUoVFa1ZrJL83TXm7X8ad6n');


//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/login_with_google/');


$google_client->addScope('email');

$google_client->addScope('profile');
