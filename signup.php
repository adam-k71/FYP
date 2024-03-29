<!-- signup form page has appropriate error messages for invalid user/passwords/email
if users are logged in and try to access this page they're redirected to the home page instead -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/46894f4043.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png">
</head>

<body class="login login-body">
    <div class="container">
        <form action="includes/signup.inc.php" method="post" class="form">
            <h1 class="form__title">Create an Account</h1>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<div class="form__message form__message--error"> Fill in all fields! </div>';
                } else if ($_GET['error'] == "invaliduidmail") {
                    echo '<div class="form__message form__message--error"> Invalid username and email! </div>';
                } else if ($_GET['error'] == "invaliduid") {
                    echo '<div class="form__message form__message--error"> Invalid username! </div>';
                } else if ($_GET['error'] == "invalidmail") {
                    echo '<div class="form__message form__message--error"> Invalid email! </div>';
                } else if ($_GET['error'] == "passwordcheck") {
                    echo '<div class="form__message form__message--error"> Passwords do not match! </div>';
                } else if ($_GET['error'] == "usertaken") {
                    echo '<div class="form__message form__message--error"> Username already taken! </div>';
                } else if ($_GET['error'] == "usernotallowed") {
                    echo '<div class="form__message form__message--error"> Username not allowed! </div>';
                }
            }
            ?>
            <div class="form__input-group">
                <input type="text" name="uid" class="form__input" placeholder="Username"><br>
                <input type="text" name="mail" class="form__input" placeholder="E-mail"><br>
                <input type="password" name="pwd" class="form__input" placeholder="Password"><br>
                <input type="password" name="pwd-repeat" class="form__input" placeholder=" Repeat password"><br>
                <button type="submit" name="signup-submit" class="form__button">Signup</button><br>
                <br>
                <p class="form__text">
                    <a href="login.php" class="form__link">Already have an account? Login</a>
                </p>

</html>