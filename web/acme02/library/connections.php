<?php
function acmeConnection(){
    $server     = "localhost";
    $database   = "acme";
    $user       = "iClient";
    $password   = "ik0CmaRLeHB9Bw7y";
    $dsn        = "mysql:host=$server;dbname=$database";
    $options    = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $acmeLink = new PDO($dsn, $user, $password, $options);
        echo 'Connection worked';
        return $acmeLink;
        exit;
    } catch (PDOException $ex) {
        header('location: /acme/view/500.php');
        exit;
    }
}

acmeConnection();
