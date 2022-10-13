<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_inventory";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn) {
  die("<script>alert('Gagal tersambung dengan database')</script>");
}
?>