<?php

//Img Path
$imagePath = 'Daily Activity Report.png';
$QRimage_path = "Resources/img/qr.png";


//Image Display
$imageInfo = getimagesize($imagePath);
header('Content-Type:  ' . $imageInfo['mime']);
readfile($imagePath);

//Image Create

$QRimage = imagecreatefrompng($QRimage_path);
$image = imagecreatefrompng('Resources/img/eform.png');
imagecopy($image,$QRimage,930,1450,0,0,193,162);
$black = imagecolorallocate ($image, 0,0,0 );
$white = imagecolorallocate ($image, 255,255,255 );

$font1 = 'Resources/fonts/Arial.ttf';

// FONT SIZE
$fontsize1 = '10';
$fontsize2 = '24';
// YOUR TEXT
$name = array("NAME1", "NAME2", "NAME3","NAME4","NAME5","NAME6","NAME7","NAME8","NAME9","NAME10","NAME11",
"NAME12","NAME13","NAME14","NAME15","NAME16","NAME17","NAME18");
$docno = 'DOC. NO.';
$effectively = 'EFFECTIVELY';
$rev = 'REV';
$projectname = 'PROJECT NAME';
$Customer = 'CUSTOMER';
$Location = 'LOCATION';
$Company = 'COMPANY';
$Requestby = 'REQUEST BY';
$Contact = 'CONTACT';
$Pcodeno = 'P CODE NO';
$Mobile = 'MOBILE';
$checkbox = '■';
$checkbox1 = '▬';
$Others = 'OTHERS';
$Observation = 'OBSERVATION';
$Action = 'ACTION';
$Remarks = 'REMARK/S';
$AdditionalManpower = array("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamcomde",
"nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
$Sitein = 'SITE IN';
$Siteout = 'SITE OUT';


//image , size , rotation , X, Y, text color , fonts , Your TEXT
// Image TEXT Format

// NAME
imagettftext($image, $fontsize1 , 0, 30, 1098 ,$black,$font1 ,$name[0] );
imagettftext($image, $fontsize1 , 0, 30, 1126 ,$black,$font1 ,$name[1] );
imagettftext($image, $fontsize1 , 0, 30, 1154 ,$black,$font1 ,$name[2] );
imagettftext($image, $fontsize1 , 0, 305, 1048 ,$black,$font1 ,$name[3] );
imagettftext($image, $fontsize1 , 0, 305, 1074 ,$black,$font1 ,$name[4] );
imagettftext($image, $fontsize1 , 0, 305, 1098 ,$black,$font1 ,$name[5] );
imagettftext($image, $fontsize1 , 0, 305, 1126 ,$black,$font1 ,$name[6] );
imagettftext($image, $fontsize1 , 0, 305, 1154 ,$black,$font1 ,$name[7] );
imagettftext($image, $fontsize1 , 0, 585, 1048 ,$black,$font1 ,$name[8] );
imagettftext($image, $fontsize1 , 0, 585, 1074 ,$black,$font1 ,$name[9] );
imagettftext($image, $fontsize1 , 0, 585, 1098 ,$black,$font1 ,$name[10] );
imagettftext($image, $fontsize1 , 0, 585, 1126 ,$black,$font1 ,$name[11] );
imagettftext($image, $fontsize1 , 0, 585, 1154 ,$black,$font1 ,$name[12] );
imagettftext($image, $fontsize1 , 0, 866, 1048 ,$black,$font1 ,$name[13] );
imagettftext($image, $fontsize1 , 0, 866, 1074 ,$black,$font1 ,$name[14] );
imagettftext($image, $fontsize1 , 0, 866, 1098 ,$black,$font1 ,$name[15] );
imagettftext($image, $fontsize1 , 0, 866, 1126 ,$black,$font1 ,$name[16] );
imagettftext($image, $fontsize1 , 0, 866, 1154 ,$black,$font1 ,$name[17] );

imagettftext($image, $fontsize1 , 0, 860, 33 ,$black,$font1 ,$docno );
imagettftext($image, $fontsize1 , 0, 880, 97 ,$black,$font1 ,$effectively );
imagettftext($image, $fontsize1 , 0, 1025, 32 ,$black,$font1 ,$rev );
imagettftext($image, $fontsize1 , 0, 160, 232 ,$black,$font1 ,$projectname );
imagettftext($image, $fontsize1 , 0, 160, 260 ,$black,$font1 ,$Customer );
imagettftext($image, $fontsize1 , 0, 160, 285 ,$black,$font1 ,$Location );
imagettftext($image, $fontsize1, 0, 710, 232 ,$black,$font1 ,$Company );
imagettftext($image, $fontsize1, 0, 710, 260 ,$black,$font1 ,$Requestby );
imagettftext($image, $fontsize1, 0, 710, 285 ,$black,$font1 ,$Contact );
imagettftext($image, $fontsize1, 0, 710, 312 ,$black,$font1 ,$Pcodeno );
imagettftext($image, $fontsize1, 0, 985, 285 ,$black,$font1 ,$Mobile );
imagettftext($image, $fontsize1, 0, 165, 1483 ,$black,$font1 ,$Sitein );
imagettftext($image, $fontsize1, 0, 165, 1519 ,$black,$font1 ,$Siteout );
imagettftext($image, $fontsize1, 0, 848, 388 ,$black,$font1 ,$Others );

// Checkbox
//row 1
imagettftext($image, $fontsize2, 0, 58, 391 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 58, 417 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 58, 443 ,$black,$font1 ,$checkbox );
//row 2
imagettftext($image, $fontsize2, 0, 265, 392 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 265, 418 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 265, 444 ,$black,$font1 ,$checkbox );
//row 3
imagettftext($image, $fontsize2, 0, 470, 391 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 470, 417 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 470, 443 ,$black,$font1 ,$checkbox );
//row 4
imagettftext($image, $fontsize2, 0, 744, 390 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 889, 443 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 983, 443 ,$black,$font1 ,$checkbox );
// row5 
imagettftext($image, $fontsize2, 0, 451, 834 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 585, 834 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 723, 834 ,$black,$font1 ,$checkbox );
imagettftext($image, $fontsize2, 0, 888, 834 ,$black,$font1 ,$checkbox );
// row 6
imagettftext($image, 14, 0, 894, 860 ,$black,$font1 ,$checkbox );
imagettftext($image,14 , 0, 894, 885 ,$black,$font1 ,$checkbox );
imagettftext($image, 14, 0, 894, 911 ,$black,$font1 ,$checkbox );
imagettftext($image, 14, 0, 894, 939 ,$black,$font1 ,$checkbox );
imagettftext($image, 14, 0, 894, 968 ,$black,$font1 ,$checkbox );



// LONG TEXT 
imagettftext($image, $fontsize1, 0, 152, 510 ,$black,$font1 ,$Observation );
imagettftext($image, $fontsize1, 0, 110, 673 ,$black,$font1 ,$Action ); 
imagettftext($image, $fontsize1, 0, 35, 862 ,$black,$font1 ,$Remarks );
imagettftext($image, $fontsize1, 0, 25, 1210 ,$black,$font1 ,$AdditionalManpower[0] );

imagepng ($image);
imagepng ($image,'Daily Activity Report.png');
imagedestroy($image);




