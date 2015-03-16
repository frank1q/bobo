<?php


	define('IN_ECS', true);

	require(dirname(__FILE__) . '/includes/init.php');
/*	if(!is_numeric($_GET['user_id'])){
				die('error');
		}
	$user_id = $_GET['user_id'];
	include_once(ROOT_PATH . 'includes/lib_transaction.php');
	// var_dump($user_id);
	$user_data = get_profile($user_id);
	// var_dump($user_data);
	$figure = $user_data['figure'];
	$my_shape = $shapeArr[$figure];
	$shapeArr = array(1=>'s',2=>'m',3=>'l');
	$sex = $user_data['sex'];
	$sexArr = array(1=>'m',2=>'f');
	// 获取穿上的衣服
	$wear_data = share_online_wear($user_id,$sex);*/
	
	// my_height={$my_height}&my_shape={$my_shape}&my_skin={$my_skin}&my_sex={$my_sex}&trousers={$arrWear.trousers.goods_id}&coat={$arrWear.coat.goods_id}&underwear={$arrWear.underwear.goods_id}"><button type="button" name="act" value="edit_profile">
                      
	$smarty->assign('my_sex',  $_GET['my_sex']);
	$smarty->assign('my_height',  $_GET['my_height']);
	$smarty->assign('my_shape',  $_GET['my_shape']);
	$smarty->assign('my_skin',  $_GET['my_skin']);
	$wear_data = array();

	$smarty->assign('trousers',intval($_GET['trousers']));
	$smarty->assign('coat',intval($_GET['coat']));
	$smarty->assign('underwear',intval($_GET['underwear']));
	$smarty->assign('share_head_img',$_GET['user_head_img']);
	// $smarty->assign('user_data',$user_data);
	assign_template();
	$smarty->display('share.dwt');



/*	function share_online_wear($user_id=0,$sex=1){
	    $sql = 'select * from '.$GLOBALS['ecs']->table('online_wear').' where user_id = "'.$user_id.'" and sex = '.$sex;
	    $arr =  $GLOBALS['db']->getAll($sql);
	    $res = array();
	    foreach ($arr as $key => $value) {
	        $newKey = $value['part_class'];
	        $res[$newKey] = $value;
	    }
	    return $res;
	}*/

?>