<?php

include "vendor/autoload.php";

use App\AuthClient;

if (isset($_POST['submit'])) {
        $client = new AuthClient();
    
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $result = $client->register($username, $email, $password);
        header("Location: register-index.php");
        exit();
}


