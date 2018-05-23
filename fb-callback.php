<?php
/**
 * Created by PhpStorm.
 * User: jmpg
 * Date: 21/05/18
 * Time: 15:18
 */
require_once "config.php";
try{
    $accessToken = $helper->getAccessToken();
}catch (\Facebook\Exceptions\FacebookResponseException $e){
    echo "reponse exception: " . $e->getMessage();
    die();
}catch (\Facebook\Exceptions\FacebookSDKException $e){
    echo "Response SDK exception: " . $e->getMessage();
    die();
}

if (!$accessToken){
    header('Location: index.php');
    exit();
}

$oAuth2Client = $FB->getOAuth2Client();
if (!$accessToken->isLongLived())
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

$response = $FB->get('/me?fields=id,first_name,last_name, email, picture.type(large)', $accessToken);
$userData = $response->getGraphNode()->asArray();

/**
 * Prueba de respuesta
 * echo "<pre>";
 * var_dump($userData);
 * echo "find";*
 */

$_SESSION['userData'] = $userData;
$_SESSION['access_token'] = (string) $accessToken;
header('Location: home.php');
exit();
