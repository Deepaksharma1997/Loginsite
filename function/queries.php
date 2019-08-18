<?php
$query = "SELECT country_name, country_code FROM country";
$query1 = "INSERT INTO users (name, email, password, phone, address, country) VALUES (" . $conn->quote($name) .", " . $conn->quote($email) .", " . $conn->quote($password) .", " . $conn->quote($phone) .", " . $conn->quote($address) .", " . $conn->quote($country) .")" ;
?>
