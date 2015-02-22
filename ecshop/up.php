<?php

define('IN_ECS', true);

require('includes/init.php');

// var_dump(1111);
// var_dump($_SESSION);

if(!isset($_SESSION['user_id'])){
	die('请先登陆');
}
if(!isset($_POST['imgUrl']) || !is_numeric($_POST['x']) || !is_numeric($_POST['y'])){
	die('参数出错');
}
$img = $_POST['imgUrl'];
$d_x = $_POST['x'];
$d_y = $_POST['y'];
$imageWidth = $_POST['imageWidth'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$imgName = $_SESSION['user_id'].'_'. uniqid() . '.png';
$file = './headImg/' .$imgName;


$im = imagecreatefromstring($data);
$x = imagesx($im);
$y = imagesy($im);
$thumbw = $imageWidth; // 期望的目标图宽
$thumbh = $imageWidth; // 期望的目标图高

$bgcolor = ImageColorAllocate($im,0,0,0);
$bgcolor = ImageColorTransparent($im,$bgcolor);
$dim = imagecreatetruecolor($thumbw, $thumbh); 
imagealphablending($dim,false);//这里很重要,意思是不合并颜色,直接用$img图像颜色替换,包括透明色; 
imagesavealpha($dim,true);//这里很重要,意思是不要丢了$thumb图像的透明色; 
imagecopyresampled($dim,$im,0,0,$d_x,$d_y,$thumbw,$thumbh,$thumbw,$thumbh);
// header('Content-type: image/png');


// 保存图片
if(imagepng($dim,$file)){
	// echo '<img src="'.$file.'" alt="">';
	$sql = 'update '.$GLOBALS['ecs']->table('users').' set user_head_img = "'.$imgName.'" where user_id = '.$_SESSION['user_id'];
	if($GLOBALS['db']->query($sql)){
		$_SESSION['user_head_img'] = $imgName;
		ecs_header("Location: user.php");
        exit;
	}else{
		exit;
		ecs_header("Location: user.php");
        exit;
	}
	
}






?>