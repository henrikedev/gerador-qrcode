<?php

namespace chillerlan\QRCodeExamples;

use chillerlan\QRCode\{QRCode, QROptions};

include 'lib/vendor/autoload.php';

$url = 'https://henriquemiranda.dev.br';

echo '<img src="'.(new QRCode)->render($url).'" alt="QR Code" />';