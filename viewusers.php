<!-- page for updating/deleting users data is diplayed via a table -->

<?php
session_start();
if (!$_SESSION['UserLevel'] == USER_LEVEL_ADMIN) {
    header("Location: ../index.php");
}
require "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>AdminViewUsers</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/46894f4043.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png">
</head>

<body>
    <nav>
        <div class="menu-container nav-wrapper">


            <div class="hamberger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li>
                    <a href="insurance.php">Insurance</a>
                    <ul class="dropdown-list">
                        <li><a href="insurance-details.php">Auto Policy</a></li>
                        <li><a href="insurance-details.php">Auto Policy</a></li>
                        <li><a href="insurance-details.php">Auto Policy</a></li>
                        <li><a href="insurance-details.php">Auto Policy</a></li>
                        <li><a href="insurance-details.php">Auto Policy</a></li>
                    </ul>
                </li>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="admin.php" class="navbar__links"> Admin </a></li>
                <li>
                    <form action="includes/logout.inc.php" method="post" class="navbar__btn">
                        <button type="submit" name="logout-submit" class="btn btn-blue">Logout</button>
                    </form>'
            </ul>
        </div>
    </nav>
    <div class="users">
        <h1>Admin Panel - View Users</h1>
        <table>
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">UserID</th>
                    <th scope="col">UserLevel</th>
                    <th scope="col">Update/Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `users`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $email = $row['emailUsers'];
                        $username = $row['uidUsers'];
                        $id = $row['idUsers'];
                        $level = $row['userLevel'];
                        echo '<tr>
                    <td>' . $email . '</td>
                    <td>' . $username . '</td>
                    <td>' . $id . '</td>
                    <td>' . $level . '</td>
                    <td>
                    <button><a href="updateuser.php?updateid=' . $id . '" target="_blank">Update</a></button>
                    <button><a href="deleteuser.php?deleteid=' . $id . '" >Delete</a></button>
                    </td>
                    </tr/>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
require "footer.php";
?>