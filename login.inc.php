<?php

if (isset($_POST["consumer_login_submit"])) {
    $consumer_email = $_POST["consumer_email"];
    $consumer_password = $_POST["consumer_password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyConsumerLogin($consumer_email, $consumer_password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginConsumerUser($conn, $consumer_email, $consumer_password);
} else if (isset($_POST["broker_login_submit"])) {
    $broker_email = $_REQUEST['broker_email'];
    $broker_password = $_REQUEST['broker_password'];

    require_once 'dbh.inc.php';

    $sql = "SELECT * FROM broker WHERE broker_email=?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $broker_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $dbPassword = $row['broker_password'];

            if ($broker_password != $dbPassword) {
                header("Location: ../login.php?error=wrongpassword");
                exit();
            } else if ($broker_password == $dbPassword) {
                session_start();
                $_SESSION['session_id'] = $row['broker_id'];
                $_SESSION['session_email'] = $row['broker_email'];
                $_SESSION['session_user_level'] = $row['user_level'];

                header("Location: ../broker_dashboard♠.php?login=success");
                exit();
            } else {
                header("Location: ../login.php?error=wrongpassword");
                exit();
            }
        } else {
            header("Location: ../login.php?error=nouser");
            exit();
        }
    }
} else if (isset($_POST["admin_login_submit"])) {
    $admin_email = $_REQUEST['admin_email'];
    $admin_password = $_REQUEST['admin_password'];

    require_once 'dbh.inc.php';

    $sql = "SELECT * FROM admin WHERE admin_email=?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $admin_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $dbPassword = $row['admin_password'];

            if ($admin_password != $dbPassword) {
                header("Location: ../login.php?error=wrongpassword");
                exit();
            } else if ($admin_password == $dbPassword) {
                session_start();
                $_SESSION['session_id'] = $row['admin_id'];
                $_SESSION['session_email'] = $row['admin_email'];
                $_SESSION['session_user_level'] = $row['user_level'];

                header("Location: ../admin‎ dashboard♠.php?login=success");
                exit();
            } else {
                header("Location: ../login.php?error=wrongpassword");
                exit();
            }
        } else {
            header("Location: ../login.php?error=nouser");
            exit();
        }
    }
} else {
    header("location: ../login.php");
    exit();
}

# Correctly integrating the session-based brute force protection into the login.inc.php
# Ensuring that the correct conditional code for failed login is placed

session_start();

// Initialize login attempts if not set
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
    $_SESSION['last_attempt_time'] = time();
}

// Check if there are too many failed attempts
if ($_SESSION['login_attempts'] >= 5 && time() - $_SESSION['last_attempt_time'] < 900) {
    // Block the login attempt for 15 minutes
    header("Location: ../login.php?error=toomanyattempts");
    exit();
}

// On failed login
if (false) {  // 
    $_SESSION['login_attempts'] += 1;
    $_SESSION['last_attempt_time'] = time();
    header("Location: ../login.php?error=wrongcredentials");
    exit();
}

// Reset attempts on successful login
$_SESSION['login_attempts'] = 0;