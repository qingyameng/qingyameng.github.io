<?php
//php识别二维码

$image = new ZBarCodeImage("img/zhangsan.jpg");

$scanner = new ZBarCodeScanner();

$barcode = $scanner->scan($image);

if(!empty($barcode)){

    var_dump($barcode);

//    foreach($barcode as $code){
//        printf("Found type %s barcode with data %s\n",$code['type'],$code['data']);
//    }
}