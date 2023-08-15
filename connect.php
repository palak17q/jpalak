<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="test1";

$conn = new mysqli($servername, $username, $password,$database);


if (mysqli_connect_error()) {
  echo"<script>alert('cannot connect to the database');</script>";
   exit();
}
?>