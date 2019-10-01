<html>
<head>
    <title>Product Discount Calculator</title>
    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }
    </style>
</head>
<body>

<div id="content">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productDescription = $_POST['description'];
        $listPrice = $_POST['price'];
        $discountPercent = $_POST['discount_percent'];
        $discountAmount = $listPrice * $discountPercent * 0.1;
        $discountPrice = $listPrice - $discountAmount;
    } ?>
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span><?php echo $productDescription; ?></span><br/>
    <label>Price: </label>
    <span><?php echo $listPrice; ?></span><br/>
    <label>Discount Percent: </label>
    <span><?php echo $discountPercent; ?></span><br/>
    <label>Discount Amount: </label>
    $<span><?php echo $discountAmount; ?></span><br/>
    <label>Discount Price: </label>
    $<span><?php echo $discountPrice; ?></span><br/>
</div>
</body>
</html>
