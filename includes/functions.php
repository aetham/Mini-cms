<?php
function logged_in()
{
    if (!isset($_SESSION['loggedin'])) {
        header('Location:index.php');
        exit;
    }
}
function country_table()
{
    $mysqli = new mysqli("localhost", "root", "kodukodu12", "cms") or die(mysqli_error($mysqli));
    $sql = "SELECT id, name, continent, capital, gdp from country";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {
        $_SESSION["id"] = $row["id"];
        echo "<tr><td>"
            .$row["name"]."<td>"
            .$row["continent"]."<td>"
            .$row["capital"]."<td>"
            .$row["gdp"].'€'."<td><a href=\"update_country.php?id=$row[id]\" >Edit</a>"
            ."</td></tr>";
    }
    $mysqli->close();
}

function update_country_table(){
    $mysqli = new mysqli("localhost", "root", "kodukodu12", "cms") or die(mysqli_error($mysqli));
    if (isset($_POST["update"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $continent = $_POST["continent"];
        $capital = $_POST["capital"];
        $gdp = $_POST["gdp"];
        $mysqli->query("UPDATE country SET name='$name', continent='$continent', capital='$capital', gdp='$gdp' WHERE id=$id") or die($mysqli->error);
        header("location:main_page.php");
    }
    $mysqli->close();
}

function city_table()
{
    $mysqli = new mysqli("localhost", "root", "kodukodu12", "cms") or die(mysqli_error($mysqli));
    $sql = "SELECT id, name, population, country_code from city";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {
        $_SESSION["id"] = $row["id"];
        echo "<tr><td>"
            .$row["name"]."<td>"
            .$row["population"]."<td>"
            .$row["country_code"]."<td><a href=\"update_city.php?id=$row[id]\" >Edit</a>"
            ."</td></tr>";
    }
    $mysqli->close();

}
function update_city_table(){
    $mysqli = new mysqli("localhost", "root", "kodukodu12", "cms") or die(mysqli_error($mysqli));
    if (isset($_POST["update"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $population = $_POST["population"];
        $country_code = $_POST["country_code"];
        $mysqli->query("UPDATE city SET name='$name', population='$population', country_code='$country_code' WHERE id=$id") or die($mysqli->error);
        header("location:main_page.php");
    }
    $mysqli->close();
}
