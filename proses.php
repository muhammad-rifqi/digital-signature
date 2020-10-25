<?php
$name = date("YmdHis");
$get = file_get_contents("php://input");
$data =  explode(',',$get);
$decode = base64_decode($data[1],true);
$im = imageCreateFromString($decode);
if($im){
$image = imagecreatetruecolor(100, 100);
$white = imagecolorallocate($image, 255, 255, 255);
imagefill($im, 0, 0, $white);
header('Content-Type: image/png');
imagepng($im,"foto/".$name.".png",0);
imagedestroy($im);
echo"Oke";
}else{
echo"Gagal";
}
?>
