<!-- $Id: model_management_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<div class="main-div">
  <form action="" method="post" name="theForm" onsubmit="return validate();">
    <table cellspacing="1" cellpadding="3" width="100%">
      <tr>
        <td class="label"><?php echo $this->_var['lang']['model_height']; ?>:</td>
        <td>
         <input type="text" onkeypress="return IsNum(event)" value="<?php echo $this->_var['model_height_management']['mode_high']; ?>"name="model_height"/>  
        </td>
      </tr>
      <tr align="center">
        <td colspan="2">
          <input type="hidden" name="mode_id" value="<?php echo $this->_var['model_height_management']['mode_id']; ?>" />
          <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
          <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
          <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
        </td>
      </tr>
    </table>
  </form>
</div>
<script type="text/javascript">

function IsNum(e) {
  var k = window.event ? e.keyCode : e.which;
  if (((k >= 48) && (k <= 57)) || k == 8 || k == 0) {
  } else {
      if (window.event) {
          window.event.returnValue = false;
      }
      else {
          e.preventDefault(); //for firefox 
      }
  }
} 
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
