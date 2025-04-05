<?php

session_start();
$_SESSION["countryme"] = $_POST["country"];
$_SESSION["city"] = $_POST["city"];
$_SESSION["street"] = $_POST["street"];

?>