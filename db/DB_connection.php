<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_reva";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed" . $conn->$connect_error);
}
echo "";
?>