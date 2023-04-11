<?php
/*
 * Charlie Tang
 * 4/11/2023
 * 328/icecream/process.php
 * Process order for Ice Cream Shoppe
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Define constants
define('PRICE_PER_SCOOP', 2.00);
define('SALES_TAX', 0.08);

// Include Header
include ('header.html');
?>



<body>
<div class="container">
    <h1>Thank you for your order!</h1>
    <?php
//        echo "<pre>";
//        var_dump($_POST);
//        echo "</pre>";
    $numScoops = $_POST['scoops'];
    $cone = $_POST['cone'];
    $flavors = $_POST['flavor'];
    $flavorList = implode(", ", $flavors);

    $subtotal = $numScoops * PRICE_PER_SCOOP;
    $total = $subtotal + ($subtotal * SALES_TAX);

    echo "<p>Number of scoops: $numScoops</p>";
    echo "<p>Cone selection: $cone</p>";
    echo "<p>Flavors: $flavorList</p>";
    echo "<p>Subtotal: $" . number_format($subtotal,2) . "</p>";
    echo "<p>Total: $" . number_format($total,2) . "</p>";
    ?>
</div>
</body>