<?php


	define('IN_ECS', true);

	require(dirname(__FILE__) . '/includes/init.php');
	if(!is_numeric($_GET['user_id'])){
				die('error');
		}
	$user_id = $_GET['user_id'];
	include_once(ROOT_PATH . 'includes/lib_transaction.php');

	$user_data = get_profile($user_id);
	$figure = $user_data['figure'];
	$my_shape = $shapeArr[$figure];
	$shapeArr = array(1=>'s',2=>'m',3=>'l');
	$sex = $user_data['sex'];
	$sexArr = array(1=>'m',2=>'f');
	// 获取穿上的衣服
	$wear_data = share_online_wear($user_id,$sex);
	$smarty->assign('my_sex',  $sexArr[$sex]);
	$smarty->assign('my_height',  $user_data['my_height']);
	$smarty->assign('my_shape',  $my_shape);
	$smarty->assign('arrWear',$wear_data);
	$smarty->assign('user_data',$user_data);
	assign_template();
	$smarty->display('share.dwt');



	function share_online_wear($user_id=0,$sex=1){
	    $sql = 'select * from '.$GLOBALS['ecs']->table('online_wear').' where user_id = "'.$user_id.'" and sex = '.$sex;
	    $arr =  $GLOBALS['db']->getAll($sql);
	    $res = array();
	    foreach ($arr as $key => $value) {
	        $newKey = $value['part_class'];
	        $res[$newKey] = $value;
	    }
	    return $res;
	}

?>