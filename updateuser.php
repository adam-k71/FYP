<!-- updates user information changes data in database and updates in the table for viewing all users -->

<?php
session_start();
if (!$_SESSION['UserLevel'] == USER_LEVEL_ADMIN) {
    header("Location: ../index.php");
}

include 'includes/dbh.inc.php';

$id = $_GET['updateid'];
$sql = "SELECT * FROM users WHERE idUsers=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['uidUsers'];
$email = $row['emailUsers'];
$password = $row['pwdUsers'];

$username = $_POST['uid'];
$email = $_POST['mail'];
$password = $_POST['pwd'];

$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE users set idUsers='$id', uidUsers='$username', emailUsers='$email',
pwdUsers='$hashedPwd' where idUsers=$id";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "success";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>AdminUpdateUser</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <script src="https://kit.fontawesome.com/46894f4043.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png">
</head>

<body class="login login-body">
    <div class="container">
        <form method="post" class="form">
            <h1 class="form__title">Update User</h1>
            <div class="form__input-group">
                <input type="text" name="uid" class="form__input" placeholder="Username" value=<?php echo $username ?>><br>
                <input type="text" name="mail" class="form__input" placeholder="E-mail" value=<?php echo $email; ?>><br>
                <input type="password" name="pwd" class="form__input" placeholder="Password" value=<?php echo $password; ?>><br>
                <a href="viewusers.php"><button type="submit" name="update" class="form__button">Update</button></a><br>
                <br>

</body>

</html>