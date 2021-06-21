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
<div>
    <h1>Admin Page</h1>
    <p>Welcome <?php echo $_SESSION["name"]; ?></p>
    <a href="logout.php" title="Logout">Logout.</a>
</div>
<div>
    <table class="table_one">
        <caption>Country Table</caption>
        <tr>
            <th>Name</th>
            <th>Continent</th>
            <th>Capital</th>
            <th>GDP</th>
            <th>Edit</th>
        </tr>
        <?php
        require_once("includes/functions.php");
        country_table();
        ?>
    </table>
    <table class="table_two">
        <caption>City table</caption>
        <tr>
            <th>Name</th>
            <th>Population</th>
            <th>Country code</th>
            <th>Edit</th>
        </tr>
        <?php
        require_once("includes/functions.php");
        city_table();
        ?>
    </table>
</div>

</body>
</html>
