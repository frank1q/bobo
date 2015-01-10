<?php if ($this->_var['new_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="picture_right">
  <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_00681200_1420825197');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_00681200_1420825197']):
?>
    <a href="<?php echo $this->_var['goods_0_00681200_1420825197']['url']; ?>">
      <div class="pictureimg">
        <img src="<?php echo $this->_var['goods_0_00681200_1420825197']['goods_img']; ?>" alt="" class="img-responsive"/>
      </div>
    </a>
    <div class="introduction">
      <div class="introduction_h">
        <img src="themes/BoBo/images/picture-right_4.png" alt=""  class="img-responsive"/>
      </div>
      <div class="introduction_c">
        <p>by</p>
        <div class="designers">
          <p>Krakowskle Szkoty</p>
        </div>
        <p>Price <?php echo $this->_var['goods_0_00681200_1420825197']['shop_price']; ?></p>
      </div>
      <a href="<?php echo $this->_var['goods_0_00681200_1420825197']['url']; ?>">
        <div class="introduction_f">
          <h4>DISCOVER ALL</h4>
        </div>
      </a>
    </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
  <?php endif; ?>
<?php endif; ?>