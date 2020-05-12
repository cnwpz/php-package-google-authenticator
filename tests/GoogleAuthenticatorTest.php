<?php
include '../vendor/autoload.php';
$gc = new wuweiit\GoogleAuthenticator();
echo 'secret:' . $secret = $gc->createSecret(16) . PHP_EOL;
echo 'code:' . $gc->getCode($secret) . PHP_EOL;
echo 'qrurl:' . $gc->getQRCodeGoogleUrl('吴强强', $secret, $title = 'wuweiit', $params = array()) . PHP_EOL;
echo 'status:' . $gc->verifyCode('H2SJBBV2SXI4KDFP', '481410');
