<link rel="stylesheet" href="./themes/BoBo/css/bootstrap.css" />
<link rel="stylesheet" href="./themes/BoBo/css/changestyle.css" />
<link rel="stylesheet" href="./themes/BoBo/css/style.css" />
<link rel="stylesheet" href="./themes/BoBo/css/common.css" />
<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="./themes/BoBo/css/style_common.css" />
<link rel="stylesheet" type="text/css" href="./themes/BoBo/css/style_hover.css" />
=======
>>>>>>> daccdeeb7ed8e4fd96df14966cfbb5bd82405ab1
<script type="text/javascript" src="./themes/BoBo/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="./themes/BoBo/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./themes/BoBo/js/banner.js"></script>
<script type="text/javascript" src="./js/user.js"></script>
<div class="container-fluid bodyheight">
  <div class="main">
    <div class="header">
      <div class="header_c">
        <div class="logo">
           <a href="index.php" ><img src="themes/BoBo/images/logo.png" class="img-responsive" alt="Responsive image"></a>
        </div>
        <div class="search">
          <div class="input-group">
            <input class="form-control" type="email" placeholder="SEARCH">
            <div class="input-group-addon">
              <img src="themes/BoBo/images/lcon_02.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="title">
      <p>
<<<<<<< HEAD
        Your current location: <?php echo $this->_var['ur_here']; ?> 
=======
        Your current location:<?php echo $this->_var['ur_here']; ?> 
>>>>>>> daccdeeb7ed8e4fd96df14966cfbb5bd82405ab1
        <br>
        <h1>Female Reception</h1>
      </p>
    </div>
    <div class="content">
      <div class="content_left">
        <div class="content_c">
          <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
            <div class="content_lc">
              <div class="manufacture"><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></div>
              <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                <div class="sub_c"><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
          <?php if ($_SESSION['user_id'] > 0): ?>
            <a href="user.php">
              <button type="button" class="content_lf">
                <div class="content_f">
                  <div class="lcon_01">
                    <img src="themes/BoBo/images/lcon_01.png" class="img-responsive"/>
                  </div>
                  <h4>User Center</h4>
                </div>
              </button>
            </a>
          <?php else: ?>
            <button type="button" data-toggle="modal" data-target="#myModal" class="content_lf">
              <div class="content_f">
                <div class="lcon_01">
                  <img src="themes/BoBo/images/lcon_01.png" class="img-responsive"/>
                </div>
                <h4>User Center</h4>
              </div>
            </button>
          <?php endif; ?>
      </div>
      <div class="content_r">

