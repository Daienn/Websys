<?php
// Include PayPal PHP SDK
require_once 'vendor/autoload.php';

// Include Configuration file
include_once 'config.php';

echo $_GET['PayerID'];
echo $_GET['amt'];
echo $_GET['st'];
echo $_GET['payer_email'];
