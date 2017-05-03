<?php
/**
 * Created by PhpStorm.
 * User: tgnet
 * Date: 2017/4/18
 * Time: 10:55
 */
verifyImage();
function verifyImage()
{
    session_start();

    $image = imagecreatetruecolor(100, 30);
    $bgcolor = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $bgcolor);

    $captch_code = '';
    for ($i = 0; $i < 4; $i++)//写字母数字混合体
    {
        $fontsize = mt_rand(14, 18);//字体大小
        $fontcolor = imagecolorallocate($image, rand(0, 120), rand(0, 120), rand(0, 120));//字体颜色

        $data = '01234567896321489052585';
        $fontcontent = substr($data, rand(0, strlen($data)), 1);
        $captch_code .= $fontcontent;

        $x = ($i * 25) + rand(5, 10);
        $y = rand(5, 10);

        imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);

    }
    $_SESSION['verify'] = $captch_code;

    for ($i = 0; $i < 200; $i++) //干扰点
    {
        $pointcolor = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));
        imagesetpixel($image, rand(1, 99), rand(1, 29), $pointcolor);
    }

    for ($i = 0; $i < 3; $i++) //线扰点
    {
        $linecolor = imagecolorallocate($image, rand(80, 220), rand(80, 220), rand(80, 220));
        imageline($image, rand(1, 99), rand(1, 29), rand(1, 99), rand(1, 29), $linecolor);
    }

    header('content-type: image/png');
    imagepng($image);

    imagedestroy($image);
}