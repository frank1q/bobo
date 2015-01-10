<div class="content_middle designer_product">
  <div class="designer">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <?php if ($this->_var['goods']['goods_id']): ?>
<<<<<<< HEAD
        <div class="view view-first designer_picture">
            <img src="<?php echo $this->_var['goods']['goods_img']; ?>" class="img-responsive" />
          <div>
            <?php echo $this->_var['goods']['goods_name']; ?>
          </div>
          <h3><?php echo $this->_var['goods']['shop_price']; ?></h3>
           <div class="mask">
              <h2>StyleIcon</h2>
              <a href="javascript:void(0);" class="info">FiTin & Share</a>
              <div class="mystyle">
                <a href="javascript:void(0);" class="color_style1"></a>
                <a href="javascript:void(0);" class="color_style2"></a>
                <a href="javascript:void(0);" class="color_style3"></a>
                <a href="javascript:void(0);" class="color_style4"></a>
              </div>
              <a href="<?php echo $this->_var['goods']['url']; ?>">
              <div class="hovercontent">
                <div class="goodcontent">
                  <?php echo $this->_var['goods']['goods_name']; ?>
                  <h3><?php echo $this->_var['goods']['shop_price']; ?></h3>
                </div>
                <div class="leftIcon"></div>
                <div class="writeIcon"></div>
              </div>
              </a>
                
          </div>
=======
        <div class="designer_picture">
            <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" class="img-responsive" /></a>
          <p>
            <a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a>
          </p>
          <a href="<?php echo $this->_var['goods']['url']; ?>"><h3><?php echo $this->_var['goods']['shop_price']; ?></h3></a>
>>>>>>> daccdeeb7ed8e4fd96df14966cfbb5bd82405ab1
        </div>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
  <div class="designer_introduction">
    <div class="portrait">
      <img src="themes/BoBo/images/designer-list_05.png" class="img-responsive" />
    </div>
    <div class="designre_introduction">
      <div class="designre_name">
        <h3>ROUGE PONY</h3>
        Ref: 77480417
      </div>
      <div class="designre_content">
        <div class="designre_title">
          <p>DESIGNER`S INTRODUCTION</p>
        </div>
        <div class="designre_description">
          <p>
            You can effortlessly cover bot those bases thanks to this geo-pattren sweater dress. Its bodycon silhouette and 3/4 length sleeves will hug your body in all the right places while keeping you warm and cozy.
          </p>
        </div>
      </div>
      <div class="visitbutton">Visit my F</div>
      <div class="chatbutton">Chant with me F</div>
      <div class="facebook_icon">
        <img src="themes/BoBo/images/lcon_07.png" class="img-responsive" />
        <img src="themes/BoBo/images/lcon_08.png" class="img-responsive" />
        <img src="themes/BoBo/images/lcon_09.png" class="img-responsive" />
        <img src="themes/BoBo/images/lcon_10.png" class="img-responsive" />
        <img src="themes/BoBo/images/lcon_11.png" class="img-responsive" />
        <img src="themes/BoBo/images/lcon_12.png" class="img-responsive" />
      </div>
    </div>
    <div class="bottom_navigation">
      <img src="themes/BoBo/images/progressa.png" class="img-responsive" />
      <div class="ranking">
        <p>Average Price</p>
        <h4>$53</h4>
      </div>
      <div class="ranking">
        <p>Total Sales</p>
        <h4>648</h4>
      </div>
      <div class="ranking">
        <p>30 Days Sales</p>
        <h4>92</h4>
      </div>
      <div class="ranking">
        <p>BoBo Ranking</p>
        <h4>52</h4>
      </div>
    </div>
  </div>
</div>


