<?php
    $username = $_GET["user"];
    $password = $_GET["pass"];
    $token = $_GET["token"];

    if($username == "JD" && $password == "123")
    {
        echo 10;
    }
?>