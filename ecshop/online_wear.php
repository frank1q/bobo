<?php

/**
 *	修改，增加模特穿上的物品
 *
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
if(!isset($_GET['part_class']) || !isset($_GET['goods_id'])){
	echo '参数出错';
}	
$part_class =  addslashes($_GET['part_class']);
$goods_id =  intval($_GET['goods_id']);
// echo $_SESSION['user_id'];

if(!isset($_SESSION['user_id']) || $_SESSION['user_id']==0){
    $uid = SESS_ID;
}else{
	$uid = $_SESSION['user_id'];
}

$sql = 'select * from '.$GLOBALS['ecs']->table('online_wear').' where part_class = "'.$part_class.'" and user_id = "'.$uid.'"';
$res = $db->getRow($sql);
if($res){
	// 相同代表脱衣服
	if($res['goods_id']==$goods_id && $res['user_id']==$uid){
		$aSql = 'delete from '.$GLOBALS['ecs']->table('online_wear').'  where user_id = "'.$uid.'" and part_class = "'.$part_class.'" and goods_id = '.$goods_id;
	}else{
		$aSql = 'update '.$GLOBALS['ecs']->table('online_wear').' set goods_id = '.$goods_id.' where user_id = "'.$uid.'" and part_class = "'.$part_class.'"';
	}
	
}else{
	$aSql = 'insert into  '.$GLOBALS['ecs']->table('online_wear').' (user_id,part_class,goods_id) values ("'.$uid.'","'.$part_class.'",'.$goods_id.')';
}
// echo $aSql;
if($db->query($aSql)){
	echo 1;
}else{
	echo 0;
}




?>