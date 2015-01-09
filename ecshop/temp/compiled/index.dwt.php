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
<div class="content_middle">
  <div class="slider" id="slider">
    <ul class="sliderbox">
      <?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
      <li>
        <img src="<?php echo $this->_var['cat']['goods_front_cover']; ?>" alt="test1" class="img-responsive">
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <ul class="slidertext">
      <?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('cat_key', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat_key'] => $this->_var['cat']):
?>
        <?php if ($this->_var['cat_key'] == 0): ?> 
          <li style="display: list-item;">
        <?php else: ?>
          <li style="display: none;">
        <?php endif; ?>
              <div class="boing">
                <img src="themes/BoBo/images/boing-icon.png" class="img-responsive" />
              </div>
              <div class="picture_main">
                <div class="picture">
                  <div class="picturerightimg">
                    <img src="themes/BoBo/images/picture-right_1.png" alt="" class="img-responsive">
                  </div>
                </div>
                <div class="picture_c">
                  <div class="picture_cp">
                    <a href="goods.php?id=<?php echo $this->_var['cat']['goods_id']; ?>">
                      <h3>
                          <?php echo $this->_var['cat']['goods_name']; ?>
                      </h3>
                    </a>
                    <div class="picture_cpimg">
                      <h4>by STYKELCON</h4> 
                    </div>  
                    <div class="picture_cpr">
                      <p>
                        Boer
                        <?php echo $this->_var['cat']['group_buy']['valid_goods']; ?>
                        /<?php echo $this->_var['cat']['ext_info']['restrict_amount']; ?>
                        <br>        
                        Days to go 5/7
                        <br>        
                        Future retail price $36
                        <br>Pre-order Price $18</p>
                    </div>
                    <div class="progressa">
                      <img src="themes/BoBo/images/progress.png" class="img-responsive" alt="">
                    </div>
                  </div>
                </div>
                <div class="picture_f">
                  <h3>DISCOVER ALL</h3>
                </div>
              </div>
          </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <div class="prev"></div>
    <div class="next"></div>
</div>
<?php echo $this->fetch('library/recommend_best.lbi'); ?>
</div>
<div class="content_mr">
  <div class="picture_right">
    <div class="pictureimg">
      <img src="themes/BoBo/images/picture_right_1.png" class="img-responsive" alt="">
    </div>
    <div class="introduction">
      <div class="introduction_h">
        <img src="themes/BoBo/images/picture-right_3.png" alt=""  class="img-responsive"/>
      </div>
      <div class="introduction_c">
        <div class="introduction_cp">
          <p>About</p>
          <p>STYLEICON</p>
          <p>(Hao Liu)</p>
        </div>
      </div>
      <div class="introduction_f">
        <h4>DISCOVER ALL</h4>
      </div>
    </div>
  </div>
  <?php echo $this->fetch('library/recommend_new.lbi'); ?>
  <?php if ($this->_var['group_buy_hot']): ?>
    <div class="picture_right">
      <div class="pictureimg">
        <img src="<?php echo $this->_var['group_buy_hot']['0']['goods_img']; ?>" alt="" class="img-responsive"/>
      </div>
      <div class="introduction">
        <div class="introduction_h">
          <img src="themes/BoBo/images/picture-right_5.png" alt=""  class="img-responsive"/>
        </div>
        <div class="introduction_c">
          <div class="introduction_cp">
            <p>by</p>
            <p class="fz">HStern</p>
            <p>Price&nbsp;<?php echo $this->_var['group_buy_hot']['0']['last_price']; ?></p>
            <p>Remoin&nbsp;<?php echo $this->_var['group_buy_hot']['0']['group_buy']['valid_goods']; ?>/<?php echo $this->_var['group_buy_hot']['0']['ext_info']['restrict_amount']; ?></p>
          </div>
        </div>
        <a href="goods.php?id=<?php echo $this->_var['group_buy_hot']['0']['goods_id']; ?>">
          <div class="introduction_f">
            <h4>DISCOVER ALL</h4>
          </div>
        </a>
      </div>
    </div>
    <?php else: ?>
    <div class="picture_right">
      <div class="pictureimg">
        <a href="goods.php?id=<?php echo $this->_var['group_buy_hot']['0']['url']; ?>">
          <img src="<?php echo $this->_var['group_buy_goods']['0']['goods_img']; ?>" alt="" class="img-responsive"/>
        </a>
      </div>
      <div class="introduction">
        <div class="introduction_h">
          <img src="themes/BoBo/images/picture-right_5.png" alt=""  class="img-responsive"/>
        </div>
        <div class="introduction_c">
          <div class="introduction_cp">
            <p>by</p>
            <p class="fz">HStern</p>
            <p>Price&nbsp;<?php echo $this->_var['group_buy_goods']['0']['last_price']; ?></p>
            <p>Remoin&nbsp;<?php echo $this->_var['group_buy_goods']['0']['group_buy']['valid_goods']; ?>/<?php echo $this->_var['group_buy_goods']['0']['ext_info']['restrict_amount']; ?></p>
          </div>
        </div>
        <a href="goods.php?id=<?php echo $this->_var['group_buy_hot']['0']['url']; ?>">
          <div class="introduction_f">
            <h4>DISCOVER ALL</h4>
          </div>
        </a>
      </div>
    </div>
 <?php endif; ?>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
