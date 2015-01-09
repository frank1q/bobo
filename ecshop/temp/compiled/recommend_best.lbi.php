<div class="slidera mt" id="slidera">
  <ul class="sliderboxa">
    <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <li>
        <img src="<?php echo $this->_var['goods']['front_cover']; ?>" alt="test1" class="img-responsive"> 
      </li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <ul class="slidertexta">
    <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('cat_key', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['cat_key'] => $this->_var['goods']):
?>
        <?php if ($this->_var['cat_key'] == 0): ?> 
          <li style="display: list-item;">
        <?php else: ?>
          <li style="display: none;">
        <?php endif; ?>
            <div class="picture_main">
              <div class="picture">
                <div class="picturerightimg">
                  <img src="themes/BoBo/images/picture-right_2.png" alt="" class="img-responsive">
                </div>
              </div>
              <div class="picture_c">
                <div class="picture_cpa">
                  <a href="<?php echo $this->_var['goods']['url']; ?>">
                    <h3>
                      <?php echo $this->_var['goods']['name']; ?>
                    </h3>
                  </a>
                  <div class="picture_cpl">
                    <p>
                      <a href="<?php echo $this->_var['goods']['url']; ?>">
                        <?php echo $this->_var['goods']['brief']; ?>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              <a href="<?php echo $this->_var['goods']['url']; ?>">
                <div class="picture_f">
                  <h3>DISCOVER ALL</h3>
                </div>
              </a>
            </div>
          </li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <div class="preva"></div>
  <div class="nexta"></div>
</div>
