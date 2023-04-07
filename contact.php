<?php
    require 'db.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $ip = $_POST['user_ip'];
        $geolocation = $_POST['geolocation'];;

        store_data($name, $email, $phone, $ip, $geolocation);

        echo $geolocation;
        echo "Form submitted successfully!";
    }

?>
