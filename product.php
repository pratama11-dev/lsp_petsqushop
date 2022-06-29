<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Petshopqu</title>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">Petshopqu</a>
            </div>
            <ul class="nav navbar-nav navbar-center">
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="checkout.php"><i class="fa fa-shopping-cart" style="font-size:19px"></i></a>
                </li>
                <li>
                    <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                </li>
                <li>
                    <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Product-->

    <h2 style="text-align:center">PRODUCT</h2>

    <div class="col-md-3">
        <div class="card">
            <img src="assets/img/whiskas.jpg" alt="DRY FOOD" style="width:100%">
            <h1><b>WHISKAS</b></h1>
            <p class="price">RP 25.000</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button onclick="window.location.href='checkout.php'">Add to Cart</button></p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <img src="assets/img/whiskas.jpg" alt="DRY FOOD" style="width:100%">
            <h1><b>WHISKAS</b></h1>
            <p class="price">RP 25.000</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button onclick="window.location.href='checkout.php'">Add to Cart</button></p>
        </div>
    </div>
</body>

</html>