<?php
/**
 * Created by PhpStorm.
 * User: jmpg
 * Date: 21/05/18
 * Time: 12:55
 */
session_start();
require_once "vendor/facebook/graph-sdk/src/Facebook/autoload.php";

$FB = new \Facebook\Facebook([
   'app_id' => '359021804623625',
   'app_secret' => 'f11fa5c53c31342f5aace5db5979cd48',
    'default_graph_version' => 'v3.0'
]);

$helper = $FB->getRedirectLoginHelper();

