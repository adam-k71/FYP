<?php
include_once 'header.php';
require_once 'includes/functions.inc.php';

if (isNone()) {
    header("location: index.php");
}
if (isConsumer()) {
    header("location: consumer_dashboard.php");
}
if (isBroker()) {
    header("location: broker_dashboard.php");
}
if (isAdmin()) {
    header("location: admin‎ dashboard♠.php");
}

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1>Log into your account</h1>
    <div class="form-signin w-100 m-auto">
        <form action="includes/login.inc.php" method="post" style="max-width: 500px;"> <!-- action="includes/login.inc.php" is where user will be sent to when form submitted, using post method to hide sensitive data in URL but will still be passed-->
            <h2 class="h3 mb-3 fw-normal">Consumers</h2>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="consumer_email">
                <label for="floatingInput">Email address ("example@mail.com")</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="consumer_password">
                <label for="floatingPassword">Password</label>
                <br>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="consumer_login_submit">Sign in</button>
        </form>
        <?php
        # error-handling messages
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Log in failed, missing fields.</p>";
            }
            if ($_GET["error"] == "wronglogin") {
                echo "<p>Log in failed, incorrect login credentials.</p>";
            }
        }
        ?>
        <br>
        <a href=register.php> Don't have an account? Create one here </a> 
        <br>
        <br>
        <form action="includes/login.inc.php" method="post" style="max-width: 500px;"> <!-- action="includes/login.inc.php" is where user will be sent to when form submitted, using post method to hide sensitive data in URL but will still be passed-->
            <h2 class="h3 mb-3 fw-normal">Brokers</h2>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="broker_email">
                <label for="floatingInput">Email address ("example@mail.com")</label>
                
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="broker_password">
                <label for="floatingPassword">Password</label>
                <br>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="broker_login_submit">Sign in</button>
        </form>

        <br>
        <br>
        <form action="includes/login.inc.php" method="post" style="max-width: 500px;"> <!-- action="includes/login.inc.php" is where user will be sent to when form submitted, using post method to hide sensitive data in URL but will still be passed-->
            <h2 class="h3 mb-3 fw-normal">Admins</h2>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="admin_email">
                <label for="floatingInput">Email address ("example@mail.com")</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="admin_password">
                <label for="floatingPassword">Password</label>
                <br>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="admin_login_submit">Sign in</button>
        </form>
    </div>
</main>


<script src="assets/js/bootstrap.bundle.min.js"></script>