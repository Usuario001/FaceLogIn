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

echo "find";
