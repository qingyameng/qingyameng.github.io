<?php

include "./phpqrcode/qrlib.php";

//$content = 'BEGIN:VCARD'."\n";
//$content .= 'VERSION:2.1'."\n";
//$content .= 'N:张'."\n";
//$content .= 'FN:三'."\n";
//$content .= 'END:VCARD'."\n";
//QRcode::png($content);

$codeContents = 'BEGIN:VCARD'."\n";
$codeContents .= 'VERSION:2.1'."\n";
$codeContents .= 'N:张'."\n";//姓
$codeContents .= 'FN:三'."\n";//名
$codeContents .= 'ORG:北京慕课网公司'."\n";//公司地址
$codeContents .= 'TEL;WORK;VOICE:188688111'."\n";//工作单位电话
$codeContents .= 'TEL;HOME;VOICE:188688112'."\n";//家里电话
$codeContents .= 'TEL;TYPE=cell:188688113'."\n";//移动电话
$codeContents .= 'ADR;HOME:;;德外大街10号；西城区；北京市；433330；中国'."\n";//家庭住址
$codeContents .= 'EMAIL:hr@imooc.com'."\n";//邮箱
$codeContents .= 'URL:http://www.imooc.com'."\n";//网址
$codeContents .= 'END:VCARD';

//QRcode::png($codeContents,false,QR_ECLEVEL_L,3,2);
QRcode::png($codeContents,'img/zhangsan.jpg',QR_ECLEVEL_L,3,2,true);
