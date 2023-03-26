<?php
/* 
PayPal Setting and Products configuration
*/
//Paypal Settings and Configuration
define('PAYPAL_ID','sb-9nk43615258051@business.example.com');
define('PAYPAL_SANDBOX', TRUE); //TRUE OR FALSE
define('PAYPAL_RETURN_URL','http://35.212.241.120/WEBProject/success.php');
define('PAYPAL_CANCEL_URL','http://35.212.241.120/WEBProject/cancel.php');
//define('PAYPAL_NOTIFY_URL','http://35.212.241.120/WEBProject/ipn.php');
define('PAYPAL_CLIENT_ID', 'ATNfZ1ZhV-LX-vs0iY6y1hIR3E7zdJlTd0BiEiDz_A7iPPSFlsUBLBs77yYUTgjLpGs7OFg-_nTrs1d0');
define('PAYPAL_CLIENT_SECRET', 'EPB20dL1G12Bt7lIIqmpiBSvUrjrQa3CmE3n7ttg1Is40i1gF1UfuZ8AWYQgZCJhdPLfl0_Q7OcAxnjr');
define('PAYPAL_CURRENCY','USD');


//Change Not Required
define('PAYPAL_URL', (PAYPAL_SANDBOX == true) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");