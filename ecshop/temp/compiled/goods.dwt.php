<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>




<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<?php echo $this->fetch('library/page_header.lbi'); ?>
  
<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
  
      
    
  <?php if ($this->_var['promotion']): ?>
    <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      <?php if ($this->_var['item']['type'] == "group_buy"): ?>
         <!-- <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>">[<?php echo $this->_var['lang']['group_buy']; ?>]</a> -->
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endif; ?>
  <div class="content_middle designer_product">
    <div class="item">
      <div class="item_content"></div>
      <div class="item_footer">
        <div class="item_complete">COMPLETE OUTFIT</div>
        <div class="item_complete_con">
          <?php if ($this->_var['fittings']): ?>  
            <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_92811100_1420870220');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_92811100_1420870220']):
?>  
              <div class="item_fc">
                <a href="<?php echo $this->_var['goods_0_92811100_1420870220']['url']; ?>">
                  <img src="<?php echo $this->_var['goods_0_92811100_1420870220']['goods_thumb']; ?>" alt="" class="img-responsive"/>
                </a>
                <a href="<?php echo $this->_var['goods_0_92811100_1420870220']['url']; ?>"><?php echo $this->_var['goods_0_92811100_1420870220']['fittings_price']; ?></a>
              </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
          <?php endif; ?> 
        </div>
        <div class="item_complete">RECENT VIEWED</div>
        <div class="item_complete_con"><?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
      </div>
    </div>
    <div class="designer_introduction">
      <div class="item_portrait">
        <p>BY</p>
        <h3>
          STYLELCON
          <p>T O K Y O</p>
        </h3>
      </div>
      <div class="item_review">
        <div class="item_style">
          <h5><?php echo $this->_var['goods']['goods_name']; ?></h5>
          <p>Ref: <?php echo $this->_var['goods']['goods_sn']; ?></p>
          <div class="itm_price">
            <h3><?php echo $this->_var['goods']['shop_price_formated']; ?></h3>
          </div>
          <div class="itm_color">
            <img src="themes/BoBo/images/color.png" alt="" class="img-responsive"/>  
          </div>
          <div class="itm_size">
            <div class="itm_size_coding">L</div>
            <div class="itm_size_coding">M</div>
            <div class="itm_size_coding">S</div>
            <div class="itm_size_coding">XS</div>
            <div class="itm_size_coding">XXS</div>
          </div>
        </div>
        <div class="item_introduction">
          <div class="item_opinion">DESIGNER'S COMMENT</div>
          <div class="item_comment"><?php echo $this->_var['goods']['goods_desc']; ?></div>
          <div class="visitbutton">FiTin & Share</div>
          <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">
            <div class="chatbutton">Add to basket</div>
          </a>
        </div>
        <div class="item_guide">
          <div class="item_size">+ Size Guide</div>
          <p>Free Standard Shipping</p>
          <p>for orders over number$30</p>
        </div>
      </div>
    </div>
  </div>


</form>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>  
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>