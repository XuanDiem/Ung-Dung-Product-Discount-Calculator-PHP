<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ung Dung Tinh Chiet Khau San Pham </title>
</head>
<style type="text/css">
    .style {
        text-align: center;
        margin: 10%;
        padding: 20px;
        border: solid #091acc;
        background-color: green;
    }
    input{
        width: 40%;
        height: 10%;
        margin: 10px;
        padding: 10px;
        border: red;
        background-color: wheat;
        border-radius: 10% ;
    }

    body {
        background-color: lightblue;
    }

</style>
<body>
<form method="post" action="indexTow.php">
    <div class="style">
        <h1>Product Discount Calculator</h1>
        Product Description:<input ="text" name="productName" placeholder="Ten san pham" size="30px"><br>
        List Price         :<input type="text" name="listPrice" placeholder="Gia niem yet cua san pham" size="30px"><br>
        Discount Percent   :<input type="text" name="discountPercent" placeholder="Phan tram chiet khau cua san pham" size="30px">(%)<br>
        Calculate Discount :<button type="submit" name="calculateDiscount">Calculate Discount</button>
    </div>
</form>
</body>
</html>
<?php

?>