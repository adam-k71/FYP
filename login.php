<!-- login form page has appropriate error messages for invalid user/passwords
if users are logged in and try to access this page they're redirected to the 
home page instead -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/46894f4043.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png">
</head>

<body class="login login-body">
    <div class="container">
        <form action="includes/login.inc.php" method="post" class="form" id="login">
            <h1 class="form__title">Login</h1>

            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<div class="form__message form__message--error"> Fill in all fields! </div>';
                } else if ($_GET['error'] == "nouser") {
                    echo '<div class="form__message form__message--error"> User does not exist! </div>';
                } else if ($_GET['error'] == "wrongpwd") {
                    echo '<div class="form__message form__message--error"> Wrong password! </div>';
                }
            }
            ?>
            <div class="form__input-group">
                <input type="text" name="mailuid" class="form__input" placeholder="Username..."><br>
                <input type="password" name="pwd" class="form__input" placeholder="Password..."><br>
                <button type="submit" name="login-submit" class="form__button">Login</button><br>
                <br>
                <p class="form__text">
                    <a href="signup.php" class="form__link">Don't have an account? Create account</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>