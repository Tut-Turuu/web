<?php

session_start();
if (isset($_SESSION["country"]) && isset($_SESSION["city"]) && isset($_SESSION["street"])) {
    $country = $_SESSION["country"];
    $city = $_SESSION["city"];
    $street = $_SESSION["street"];
    echo "Имя преподавателя: $name <br> Предмет: $subject <br> Стаж: $experience";
    echo "Страна: $country Город: $city Улица: $street";
}

?>