<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

  

<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="content_middle">
  <form action="user.php" method="post">
    <div class="AreaR">
        <div class="boxL">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="getintouch_content_title">
                <h5 class="panel-title">
                  <a data-toggle="collapse" class="collapeiconv"  data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <span class="modified">-</span> Basic Information
                  </a>
                </h5>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
                  <div class="panelhalf">
                    <div class="paneltitle"><?php echo $this->_var['field']['reg_field_name']; ?></div>
                    <div class="panelinput">
                      <input type="text" name="extend_field<?php echo $this->_var['field']['id']; ?>" value="<?php echo $this->_var['field']['content']; ?>" class="form-control"/>
                    </div>
                  </div>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <div class="panelhalf">
                    <div class="paneltitle">Day of Birth</div>
                    <div class="panelinput">
                      <?php echo $this->html_select_date(array('field_order'=>'YMD','prefix'=>'birthday','start_year'=>'-60','end_year'=>'-1','display_days'=>'true','month_format'=>'%m','day_value_format'=>'%02d','time'=>$this->_var['profile']['birthday'])); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="getintouch_content_title">
                <h5 class="panel-title">
                  <a class="collapsed collapeiconv" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <span class="modified">+</span> Payment Method
                  </a>
                </h5>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  - Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="getintouch_content_title">
                <h5 class="panel-title">
                  <a class="collapsed collapeiconv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                   <span class="modified">+</span> Oder History
                  </a>
                </h5>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  - Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="getintouch_content_title">
                <h5 class="panel-title">
                  
                  <a class="collapsed collapeiconv" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                   <span class="modified">+</span> Facebook Conection
                  </a>
                </h5>
              </div>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                  - Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="getintouch_content_title">
                <h5 class="panel-title">
                  <a class="collapsed collapeiconv" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                   <span class="modified">+</span> Security
                  </a>
                </h5>
              </div>
              <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                <div class="panel-body">
                  - Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information- Basic Information
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="boxR">
          <div class="boxR_img">
            <img src="themes/BoBo/images/picture-right_6.png" alt="" class="img-responsive"/>
          </div>
          <div class="boxR_editor">
            <div class="boxR_portrait">
              <img src="themes/BoBo/images/user-portrait.png" alt="" class="img-responsive"/>
            </div>
            <div class="figure">
              <div class="figure_content">
                Gender
                <div class="btn-group gender" data-toggle="buttons">
                  <label class="btn sex_choose <?php echo $this->_var['profile']['male']; ?>">
                    <input type="radio" name="sex"  value="1" id="option2" autocomplete="off"> Male
                  </label>
                  <label class="btn sex_choose <?php echo $this->_var['profile']['female']; ?>">
                    <input type="radio" name="sex" value="2" id="option3" autocomplete="off">  Female
                  </label>
                </div>
              </div>
              <div class="figure_content">
                Skin color
                <div class="figure_skin">
                  <img src="themes/BoBo/images/color01.png" class="img-responsive" />
                </div>
              </div>
              <div class="figure_content">
                Height
                <select class="figure_height" name="height">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="figure_content">
                Body Shape
                <div class="figure_skin">
                  <img src="themes/BoBo/images/user-center-2_03.png" class="img-responsive" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="boxF">
          <div class="reset left">
            <a href="article.php?id=4">Reset</a>
          </div>
          <div class="submit_form right">
            <button type="submit" name="act" value="edit_profile">
                Updote Changes
            </button>
          </div>
        </div>
    </div>
  </form>
</div>
<div class="content_mr">
  <div class="picture_guide">
    <div class="pictureimg">
      <div class="picturecont">
        <div class="getintouch_content_title">
            <h5 class="panel-title">
              - Welcome Tour
            </h5>
        </div>
        <div class="picturecontent buy_01">
          <p>
            Don't know where to start?<br>
            Here are some of the essential tour.<br>
            <br>
            How does Boing (Pre-order) item work?
            <br>
            <br>
            How does Boed (buy it now) item work?
            <br>
            <br>
            How does FitIn & Share work?
            <br>
            <br>
            How does delivery & return work?
          </p>
        </div>
        <div class="getintouch_content_title">
            <h5 class="panel-title">
              - Need Assistance?
            </h5>
        </div>
        <div class="picturecontent">
          <p>
            BoBo is always here to help, there are lots of different ways to get in touch with us. The easiest ways is Live Chat with us, but you can also try Other ways to get in touch with us.
          </p>
        </div>
      </div>
    </div>
    <div class="introduction">
      <div class="picture_guide_h">
        <img src="themes/BoBo/images/picture-right_7.png" alt=""  class="img-responsive"/>
      </div>
      <div class="picture_guide_c">
        <div class="picture_guide_con">
          <img src="themes/BoBo/images/lcon_13.png" class="img-responsive" alt="">
          <div class="picture_guide_f">
            <h4>MORE TOUR</h4>
          </div>
        </div>
        <div class="picture_guide_con">
          <img src="themes/BoBo/images/lcon_14.png" class="img-responsive" alt="">
          <div class="picture_guide_f">
            <h4>GET IN TOUCH</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="picture_right">
    <div class="pictureimg">
      <div class="picturecont">
        <div class="picturecontent">
          <p>
            Are you a fashion designer? We are always looking for different fashion designers to join BoBo.<br><br>
            Now with BoBo,you can sell your own designs in your own brand in national scale.What you need to do is just send us the design pro-totype to us, we will help you to exhibit, mass-manufacture, on the coolest fashion retail network.
          </p>
        </div>
      </div>
    </div>
    <div class="introduction">
      <div class="introduction_h">
        <img src="themes/BoBo/images/picture-right_8.png" alt=""  class="img-responsive"/>
      </div>
      <div class="introduction_c background32">
      </div>
      <div class="introduction_f" >
        <h4>JOIN NOW</h4>
      </div>
    </div>
  </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script>
  
  $(function(){
    $('.collapeiconv').click(function(event) {
      var ifadd = $(this).find('span').text();
      $('.collapeiconv span').text('+');
      if(ifadd=='+'){
        $(this).find('span').text('-');
      }
    });
  })
</script>
