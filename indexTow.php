<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST["productName"];
    $listPrice = $_POST["listPrice"];
    $discountPercent = $_POST["discountPercent"];
    $check = 0;
    $discountAmount = $listPrice * ($discountPercent / 100);
    $discountPrice = $listPrice - $discountAmount;
    if (!empty($productName) && !empty($listPrice) && !empty($discountPercent)) {
        echo "<div class='echo'><h1>Product Discount Calculator</h1>";
        echo "Product Description:$productName. <br>List Price :$listPrice ($).<br>Discount Percent :$discountPercent (%).<br>";
        echo "Discount Amount la:$discountAmount ($). <br>";
        echo "Discount Price la :$discountPrice ($).</div>";
        $check = 1;
    }
    if ($check = 0) {
        echo "<span style='color: #ff281e'>Ban hay dien day du thong tin vao cac o trong !</span>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    .echo {
        border: solid blue;
        margin: 10px;
        padding: 20px;
    }

    h1 {
        color: darkblue;
    }
</style>
<body>
</body>
</html>
