<?php 
    session_start();
    $product_ids = array();
    if (filter_input(INPUT_POST, 'add_to_cart')) {
        if (isset($_SESSION['shopping_cart'])) {
            $count = count($_SESSION['shopping_cart']);
            $product_ids = array_column($_SESSION['shopping_cart'], 'id');
            if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)) {
                $_SESSION['shopping_cart'][$count] = array(
                    'id' => filter_input(INPUT_GET, 'id'),
                    'name' => filter_input(INPUT_POST, 'name'),
                    'price' => filter_input(INPUT_POST, 'price'),
                    'quantity' => filter_input(INPUT_POST, 'quantity'),
                );
            }
            else {
                for ($i = 0; $i < count($product_ids); $i++) {
                    if ($product_ids[$i] == filter_input(INPUT_GET, 'id')) {
                        $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                    }
                }
            }
        }
        else {
            $_SESSION['shopping_cart'][0] = array(
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity'),
            );
        }
    }

    if (filter_input(INPUT_GET, 'action') == 'delete') {
        foreach($_SESSION['shopping_cart'] as $key => $product) {
            if ($product['id'] == filter_input(INPUT_GET, 'id')) {
                unset($_SESSION['shopping_cart'][$key]);
            }
        }
        $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Haven/Order</title>
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <style>
        .products {
            border: 1px solid #333;
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 20px;
        }
        .table {
            margin: 0px auto;
            float: none;
        }
        .row {
            margin: 0px auto;
            float: none;
        }
        .centered {
            float: none;
            margin: 0 auto;
        }
        .button {
            background: #0066B2; 
            color: white;
            text-align: center; 
            padding: 12px;
            text-decoration: none;
            display: block;
            border-radius: 3px;
            font-size: 16px;
            margin: 25px 0 15px 0;  
        }
        .button:visited {
            text-decoration: none;
            color: white;
        }
        .button:hover {
            background: #7fa9ff;
            text-decoration: none;
            color: white;
        }
        .button:active {
            text-decoration: none;
            color: white;
        }
        .btn-danger:hover {
            text-decoration: none;
        }
        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: none;
        }
        h3 {
            margin-top: 0px;
        }
    </style>
</head>
<body>
    <div class="container-fluid info p-1" id="top-icons">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-baseline flex-wrap">
                <h2 class="primary-color p-2">Burger Haven</h2>
                <div class="info-icons p-2">
                    <a href="index.php" class="mr-3 primary-color"><i class="fa fa-home" aria-hidden="true"></i></i> Home</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
    <div class="row">
    <?php 
        $conn = new mysqli('localhost', 'root', '', 'login', '3308');
        $query = 'SELECT * FROM product ORDER BY id ASC';
        $result = mysqli_query($conn, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($product = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-sm-4 col-md-3">
                    <form method="POST" action="order.php?action=add&id=<?php echo $product['id']; ?>">
                        <div class="products">
                            <img src="<?php echo $product['image']; ?>" class="img-responsive" style="width:220px;">
                            <h4 class="text-info"><?php echo $product['productName']; ?></h4>
                            <h6>PKR <?php echo $product['price']; ?>/-</h6>
                            <input type="text" name="quantity" id="quantity" class="form-control" value="1">
                            <input type="hidden" name="name" value="<?php echo $product['productName']; ?>">
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info" value="Add to Cart">
                        </div>
                    </form>
                </div>
                <?php
                }
            }
        }
    ?>
    </div>
        <div style="clear:both"></div>
        <br>
        <div class="table-responsive">
            <table class="table">
                <tr><th colspan="5"><h3>Order Details</h3></th></tr>
                <tr>
                    <th width="40%">Product</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
                <?php
                if (!empty($_SESSION['shopping_cart'])) {
                    $total=0;
                    foreach($_SESSION['shopping_cart'] as $key => $product) {
                    ?>
                    <tr>
                        <td><?php echo $product['name'];?></td>
                        <td><?php echo $product['quantity'];?></td>
                        <td>PKR <?php echo $product['price'];?></td>
                        <td>PKR <?php echo number_format($product['quantity'] * $product['price'], 2);?></td>
                        <td>
                            <a href="order.php?action=delete&id=<?php echo $product['id'];?>">
                                <div class="btn-danger">Remove</div>
                            </a>
                        </td>
                    </tr>
                    <?php
                        $total = $total + ($product['quantity'] * $product['price']);
                    }
                    ?>
                    <tr>
                        <td colspan='3' align='right'>Total</td>
                        <td align="right">PKR <?php echo number_format($total, 2);?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="5"> 
                        <?php 
                        if (isset($_SESSION['shopping_cart'])) {
                            if (count($_SESSION['shopping_cart']) > 0) {
                            ?>
                                <a href="#" class='button'>Checkout</a>
                            <?php
                            }
                        }
                        ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src = "js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.ripples-min.js"></script>
    <script src="js/script.js"></script>
    <script src = "magnific-popup/jquery.magnific-popup.js"></script>
</body>
</html>