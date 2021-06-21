<?php
$mysqli = new mysqli("localhost", "root", "kodukodu12", "cms") or die(mysqli_error($mysqli));
if(isset($_GET["delete_city"])){
    $id = $_GET["delete_city"];
    $sql = "DELETE FROM city WHERE id=$id";
    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }

}
header("location:http://localhost:8000/main_page.php");
$mysqli->close();

$mysqli = new mysqli("localhost", "root", "kodukodu12", "cms") or die(mysqli_error($mysqli));
if(isset($_GET["delete_country"])){
    $id = $_GET["delete_country"];
    $sql = "DELETE FROM country WHERE id=$id";
    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }

}
header("location:http://localhost:8000/main_page.php");
$mysqli->close();

