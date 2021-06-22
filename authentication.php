<?php
session_start();
# Change the connection parameters to your mysqli connection.
$con = new mysqli("localhost", "root", "", "cms") or die(mysqli_error($con));
if ( mysqli_connect_error() ) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'])){
    exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare("SELECT id, password FROM users WHERE username = ?")) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if ($_POST['password'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
            header("location:main_page.php");
        } else {
            echo 'Incorrect username and/or password!';
        }
    } else {
        echo 'Incorrect username and/or password!';
    }
    $stmt->close();
}
