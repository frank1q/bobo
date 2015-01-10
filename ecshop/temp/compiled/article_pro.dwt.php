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

<div class="content_middle getintouch">
            <div class="getintouch_content">
              <div class="getintouch_content_left">
                <?php if ($this->_var['article']['content']): ?>
                  <?php echo $this->_var['article']['content']; ?>
                  <?php endif; ?>
                <div class="getintouch_content_title">
                  - Live Chat
                </div>
                <div class="getintouch_social_media">
                  <div class="getintouch_introduction_title">
                    Click here to start
                  </div>
                  <div class="getintouch_live_chat">
                    Live Chat
                  </div>
                  <div class="getintouch_introduction_title">
                    By using FaceBook contact
                  </div>
                </div>
                  <div class="getintouch_content_title">
                  - Subscribtion
                    </div>
                    <div class="getintouch_subscribtion">
                      <div class="getintouch_introduction_title">
                        Receive our newsletter or promotional campaign by typing your email address
                      </div>
                      <div class="getintouch_introduction_content">
                        <div class="input-group">
                          <input class="form-control" type="email" placeholder="Enter your e-mail address">
                          <div class="input-group-addon">
                            Subscribe
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="getintouch_content_right">
                <img src="themes/BoBo/images/get-in-touch_03.png"  class="img-responsive"/>
              </div>
            </div>
            <div class="getintouch_footer">
              <div class="getintouch_footer_content">
                <div class="getintouch_footer_left">
                  <p>@ 2014 BoBo d2c Ltd. All rights reserved</p>
                </div>
                <div class="getintouch_footer_right">
                  <p>Press Releases  | Privacy | Terms</p>
                </div>
              </div>
            </div>
          </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
