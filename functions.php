<!-- isAdmin function for checking if user is an admin grants access to admin panel
user level is 1 for the admin and is defaulted to 0 for general users if users
try to access admin only pages they are redirected to the page they were previously on -->

<?php
session_start();

define('USER_LEVEL_ADMIN', 1);

function isAdmin()
{
    if ($_SESSION['userLevel'] == USER_LEVEL_ADMIN) {
        return true;
    } else {
        return false;
    }
}
