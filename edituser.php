<!-- page for navigating to either adding/viewing users where admin can delete/add/view users -->

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
    <title>AdminEditUser</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/46894f4043.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png">
</head>

<body>
    <div class="admin">
        <br>
        <h1>Admin Panel - Users</h1>
        <div class="admin__container">
            <div class="admin__card">
                <h2>Create Users</h2>
                <p>Add new Users</p>
                <a href="addusers.php"><button>Create</button></a>
            </div>
            <div class="admin__cardview">
                <h2>View Users</h2>
                <p>Update and Delete Users</p>
                <a href="viewusers.php"><button>View</button></a>
            </div>
        </div>
    </div>
</body>

<?php

?>