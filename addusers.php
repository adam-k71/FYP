<!-- the form used for adding users into the database only users with admin level can access 
has error messages for incomplete fields wrong passwords etc -->

<?php
session_start();
if (!$_SESSION['UserLevel'] == USER_LEVEL_ADMIN) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>AdminAddUser</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/46894f4043.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png">
</head>

<body class="login login-body">
    <div class="container">
        <form action="includes/users.inc.php" method="post" class="form">
            <h1 class="form__title">Add User</h1>
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
                <button type="submit" name="add-submit" class="form__button">Add User</button><br>


</body>

</html>