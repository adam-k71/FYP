<?php
session_start();
include_once 'header.php';
require_once 'includes/functions.inc.php';

if (isBroker()) {
    header("location: broker_dashboard.php");
}
if (isAdmin()) {
    header("location: admin‎ dashboard♠.php");
}
?>



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1>Viewing Policy</h1>
    <h4>If you're interested in purchasing this, consider creating an account or logging in to add this to your basket and checkout.</h4>
    <div class="row">
        <?php

        if (isset($_REQUEST["view_submit"])) {
            $product_id = $_REQUEST['product_id'];
            $product_name = $_REQUEST['product_name'];
            $vehicle_type = $_REQUEST['vehicle_type'];
            $cover_type = $_REQUEST['cover_type'];
            $product_price = $_REQUEST['product_price'];
            $product_description = $_REQUEST['product_description'];

            echo "
                            <h5 class='card-title'>" . $product_name . "</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>" . $cover_type . "</h6>
                            <h6 class='card-subtitle mb-2 text-muted'>" . $vehicle_type . "</h6>
                            <h6 class='card-subtitle mb-2 text-muted'>" . $product_price . "</h6>
                            <h6 class='card-subtitle mb-2 text-muted'>" . $product_description . "</h6>
                            <a href='quote.php' class='card-link'>Purchase</a>
                ";

                echo "<a href='product.php'>Back to products</a>";
        }

        ?>
    </div>
</main>


<script src="assets/js/bootstrap.bundle.min.js"></script>