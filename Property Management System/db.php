<?php
// db.php
$servername = "localhost";
$username = "KubomuEdi";
$password = ".j_)lQ7cSaj0(Vh9";
$dbname = "property_management";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>