<?php

//图片 验证码


    session_start();

    $table = array(
        'pic0' => '狗',
        'pic1' => '猫',
        'pic2' => '鱼',
        'pic3' => '鸟',
    );

    $index = rand(0,3);

    $value = $table['pic'.$index];
    $_SESSION['authcode'] = $value;

    $filename = dirname(__FILE__).'\\img\pic'.$index.'.jpg';
    $contents = file_get_contents($filename);

    header('content-type:image/jpg');
    echo $contents;