<?php

$connection = mysqli_connect('localhost:3306','hajarrachid_ali','hajarrach@1234','hajarrachid_phpwebsite');

mysqli_select_db($connection,"websitedata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>