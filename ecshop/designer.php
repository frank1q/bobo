<?php


define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/*------------------------------------------------------ */
//-- 用户帐号列表
/*------------------------------------------------------ */
assign_template();
$treeArr = get_categories_tree();
$smarty->assign('categories',       get_categories_tree()); // 分类树

$_REQUEST['act'] = isset($_REQUEST['act'])?$_REQUEST['act']:'list';
if ($_REQUEST['act'] == 'list')
{
    $sql = "SELECT * FROM ".$ecs->table('users')." where user_rank = 4 and is_validated = 1 ORDER BY user_id ASC ";
    $designer_list = $db->getAll($sql);
    // var_dump($res);
    $position = assign_ur_here(0, 'Designer List');
    $smarty->assign('page_title',       $position['title']);    // 页面标题
    $smarty->assign('ur_here',          $position['ur_here']);  // 当前位置
    $smarty->assign('ur_here_base',      $position['ur_here_base']);  // 当前位置
    $smarty->assign('designer_list',$designer_list);
    // var_dump($designer_list);
    $smarty->display('designer.dwt');
}


?>