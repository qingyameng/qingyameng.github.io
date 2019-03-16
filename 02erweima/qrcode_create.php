<?php

//PHP生成二维码

include "phpqrcode/qrlib.php";

//QRcode::png('abc');

//QRcode::png('abc','img/abc.png');

QRcode::png('abc','img/abc2.png',QR_ECLEVEL_L,10,0,true);