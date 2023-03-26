
<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];

// Include the PayPal backend code
require_once 'vendor/first.php';

// Create a PayPal payment using the form data
// Replace the 'CLIENT_ID' and 'CLIENT_SECRET' placeholders with your sandbox account's actual values
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ATFEjbl-Y3I1Nnfvc-vGrZ-UHqQxGdCeDXq6xhlGddGH5wA-Qj2J_HgaIKN0rJXhZ9-Mb6_H76nNzr_T',
        'EBiH6GUhdZtVrTFSypR1fVUU1LoaQ8EltT_Dyf3M4Zk_bxrY53AhKel9YXZR7Kpq-uTBLT95tb2bg8yV'
    )
);

$payer = new \PayPal\Api\Payer();
$payer->setPaymentMethod('paypal');

$item = new \PayPal\Api\Item();
$item->setName('Payment')
    ->setCurrency('USD')
    ->setQuantity(1)
    ->setPrice($amount);

$itemList = new \PayPal\Api\ItemList();
$itemList->setItems([$item]);

$amountObj = new \PayPal\Api\Amount();
$amountObj->setTotal($amount)
    ->setCurrency('USD');

$transaction = new \PayPal\Api\Transaction();
$transaction->setItemList($itemList)
    ->setDescription('Payment for ' . $name)
    ->setAmount($amountObj);

$redirectUrls = new \PayPal\Api\RedirectUrls();
$redirectUrls->setReturnUrl('http://35.212.241.120/WEBProject/success.php')
    ->setCancelUrl('http://35.212.241.120/WEBProject/cancel.php');

$payment = new \PayPal\Api\Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions([$transaction])
    ->setRedirectUrls($redirectUrls);

// Create the PayPal payment and redirect the user to the PayPal sandbox page
try {
    $payment->create($apiContext);
    header('Location: ' . $payment->getApprovalLink());
} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}