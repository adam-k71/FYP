<!-- deletes users from database -->

<?php
include 'includes/dbh.inc.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `users` WHERE idUsers=$id";
    $result=mysqli_query($conn, $sql);
    if($result) {
        header("Location: ../viewusers.php?success=deleteuser");
    }
}