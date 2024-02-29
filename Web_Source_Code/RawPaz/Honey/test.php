<?php
require 'vendor/autoload.php';
$client = new Google_Client();
$client->setClientId('499094821834-pi31kku1rsg19ac7tlo94css71r3fo7r.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('https://mvp.rewpaz.waysdatalabs.com/Honey/test.php');
//$client->addScope(Google_Service_Gmail::GMAIL_READONLY);
//$client->addScope('email');
$client->addScope('https://www.googleapis.com/auth/userinfo.email');


if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  //$_SESSION['access_token'] = $client->getAccessToken();
  // Get user information from Google API
  $service = new Google_Service_Oauth2($client);
  $userInfo = $service->userinfo->get();
  $email = $userInfo->getEmail();
  //$name = $userInfo->getName();
  //$avatar = $userInfo->getPicture();
  header('Location: https://mvp.rewpaz.waysdatalabs.com/EmployerGmailLogin?email='.$email);exit();
}else{ 
  $authUrl = $client->createAuthUrl();
  header('Location: '.$authUrl);exit();
}