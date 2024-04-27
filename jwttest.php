<?php  
ini_set('display_errors', 1);
error_reporting(E_ALL);

use \Firebase\JWT\JWT;

$key = "example_key";
$payload = array(
    "iss" => "localhost",
    "aud" => "localhost",
    "iat" => time(),
    "nbf" => time()
);

$jwt = JWT::encode($payload, $key);
echo $jwt;

$decoded = JWT::decode($jwt, $key, array('HS256'));
print_r($decoded);
?>