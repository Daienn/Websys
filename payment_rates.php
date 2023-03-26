<?php
// Include Configuration file
include_once 'config.php';

error_reporting(E_ERROR | E_PARSE);

// Define products array
$products = array(
    array(
        'id' => '1',
        'name' => 'Product 1',
        'price' => '10.00'
    ),
    array(
        'id' => '2',
        'name' => 'Product 2',
        'price' => '20.00'
    ),
    array(
        'id' => '3',
        'name' => 'Product 3',
        'price' => '30.00'
    )
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integration PayPal Payment Gateway in PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php
            foreach($products as $product){
            ?>
                <div class="card">
                    <div class="body">
                        <h5><?php echo $product['name'] ?></h5>
                        <h6>Price: <?php echo '$'.$product['price'].' '.PAYPAL_CURRENCY; ?></h6>
                        <!-- Paypal payment form for displaying the buy button -->
                        <form action="<?php echo PAYPAL_URL; ?>" method="POST">
                            <!-- Identify your business so that you can collect the payment -->
                            <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
                            <!-- Specify a buy now button -->
                            <input type="hidden" name="cmd" value="_xclick">
                            <!-- Specify details about the item that buyers will purchase -->
                            <input type="hidden" name="item_name" value="<?php echo $product['name']; ?>">
                            <input type="hidden" name="item_number" value="<?php echo $product['id']; ?>">
                            <input type="hidden" name="amount" value="<?php echo $product['price']; ?>">
                            <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
                            <!-- Specify URLs -->
                            <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                            <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
                            <!-- Display the payment button -->
                            <input type="image" name="submit" style="border:0;" src="https://paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
                        </form>
                    </div>
                </div>
            <?php
            }
        ?>
    </div>
</body>
</html>
