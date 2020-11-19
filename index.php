<?php
    include_once 'assets/src/base.php';

    $test = new Base;
    echo $test->request('v1/shopwarks/products')[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
    <title>dia slide show</title>
</head>
<body>
    <div class="swipe_card">
        <div class="pr_name">Product name</div>
        <div class="pr_price">€X.xxx</div>
        <div class="btn_voegtoe">In winkelmand</div>
    </div>
    <!-- <div>
        <div class="pr_name">hee</div>
        <div class="pr_price">123</div>
        <div class="btn_voegtoe">haa</div>
    </div>     -->
    <!-- <script src="assets/js/script.js"></script> -->
</body>
</html>