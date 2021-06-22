<?php
session_start();
require_once("includes/functions.php");
logged_in();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mini CMS</title>
    <link rel="stylesheet" href="assets/style.css"/>
</head>
<body>
<?php
$mysqli = Require('includes/connection.php');
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM country WHERE id=$id");

while ($row = $result->fetch_assoc()) {
    $name = $row["name"];
    $continent = $row["continent"];
    $capital = $row["capital"];
    $gdp = $row["gdp"];
}
?>
<div class="container">
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"
               value="<?php echo $name; ?>"><br>

        <label for="continent">Continent:</label><br>
        <input type="text" id="continent" name="continent"
               value="<?php echo $continent; ?>"><br>

        <label for="capital">Capital:</label><br>
        <input type="text" id="capital" name="capital"
               value="<?php echo $capital ?>"><br>

        <label for="gdp">GDP:</label><br>
        <input type="number" id="gdp" name="gdp"
               value="<?php echo $gdp; ?>"><br/>

        <input type="submit" name="update" value="update">
    </form>
    <?php
    require_once("includes/functions.php");
    update_country_table();
    ?>

</div>
</body>
</html>
