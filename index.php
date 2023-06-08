<?php

use chillerlan\QRCode\QRCode;

require __DIR__ . '/vendor/autoload.php';

$result = (new QRCode())->readFromFile('qrcode.png'); // -> DecoderResult

// you can now use the result instance...
$content = $result->data;
$matrix  = $result->getMatrix(); // -> QRMatrix

// ...or simply cast it to string to get the content:
$content = (string)$result;

echo $content;