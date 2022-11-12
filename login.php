<?php

include "vendor/autoload.php";
use App\AuthClient;

$client = new AuthClient();

    $identifier = $_POST['identifier'];
    $password = $_POST['password'];

    $result = $client->login($identifier, $password);
    $body = $result->getBody()->getContents();
    $contents = json_decode($body);
    $user_info = $contents->user;

    $username = $user_info->username;
    $email = $user_info->email;

    header("Location: index.php?username=" . $username . "&email=" . $email);
    exit();

?>



