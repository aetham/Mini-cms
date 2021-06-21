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
$mysqli = new mysqli("localhost", "root", "kodukodu12", "cms") or die(mysqli_error($mysqli));
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM city WHERE id=$id");

while ($row = $result->fetch_assoc()) {
    $name = $row["name"];
    $population = $row["population"];
    $country_code = $row["country_code"];
}
?>
<div class="container">
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"
               value="<?php echo $name; ?>"><br>

        <label for="population">Population:</label><br>
        <input type="number" id="population" name="population"
               value="<?php echo $population ?>"><br>

        <label for="country_code">Country code:</label><br>
        <input type="number" id="country_code" name="country_code"
               value="<?php echo $country_code; ?>"><br/>

        <input type="submit" name="update" value="update">
    </form>
    <?php
    include_once("includes/functions.php");
    update_city_table();
    ?>
</div>
</body>
</html>
