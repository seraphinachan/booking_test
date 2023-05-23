<?php

$servername = "localhost";
$username = "user";
$password = "jiyeonyee0312";
$dbname = "booking";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$room_name = $_POST["room_name"];
$location = $_POST["location"];
$price = $_POST["price"];
$wifi = isset($_POST["wifi"]) ? 1 : 0;
$tv = isset($_POST["tv"]) ? 1 : 0;
$ac = isset($_POST["ac"]) ? 1 : 0;
$heater = isset($_POST["heater"]) ? 1 : 0;
$occupancy = $_POST["occupancy"];
$image = $_POST["image"];
$bedroom = isset($_POST["bedroom"]) ? 1 : 0;
$kitchen = isset($_POST["kitchen"]) ? 1 : 0;
$bathroom = isset($_POST["bathroom"]) ? 1 : 0;
$balcony = isset($_POST["balcony"]) ? 1 : 0;

// Prepare SQL statement
$stmt = mysqli_prepare($conn, "INSERT INTO room_info (room_name, location, price, wifi, tv, ac, heater, occupancy, image, bedroom, kitchen, bathroom, balcony) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

mysqli_stmt_bind_param($stmt, "ssiiiiisiiiii", $room_name, $location, $price, $wifi, $tv, $ac, $heater, $occupancy, $image, $bedroom, $kitchen, $bathroom, $balcony);

// Execute SQL statement
if (mysqli_stmt_execute($stmt)) {
  echo "Data saved successfully.";
} else {
  echo "Error: " . mysqli_error($conn);
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
