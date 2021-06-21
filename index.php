<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mini CMS</title>
    <link rel="stylesheet" href="assets/style.css"/>
</head>
<body>
<section class="Login-form">
    <h2>Login Page</h2>
    <form action="authentication.php" method="post">
        <label for="username">
            <input type="text" name="username" placeholder="Username" id="username" required>
        </label>
        <label>
            <input type="text" name="password" placeholder="Password" id="password" required>
        </label>
        <button type="submit" value="Login"> Login</button>
    </form>
</section>
</body>
</html>