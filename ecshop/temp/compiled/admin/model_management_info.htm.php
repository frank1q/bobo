<!-- $Id: model_management_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<div class="main-div">
  <form action="" method="post" name="theForm" onsubmit="return validate();">
    <table cellspacing="1" cellpadding="3" width="100%">
      <tr>
        <td class="label"><?php echo $this->_var['lang']['mode_sex']; ?>:</td>
        <td>
          <select name="mode_sex" id="">
            <option value="1"><?php echo $this->_var['lang']['mode_male']; ?></option>
            <option value="2"><?php echo $this->_var['lang']['mode_female']; ?></option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['mode_high']; ?>:</td>
        <td>
          <select name="mode_high" id="">
            <?php $_from = $this->_var['mode_high']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'high');if (count($_from)):
    foreach ($_from AS $this->_var['high']):
?>
              <option value="<?php echo $this->_var['high']['mode_id']; ?>"><?php echo $this->_var['high']['mode_high']; ?></option>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </select>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['mode_complexion']; ?>:</td>
        <td>
          <select name="mode_complexion" id="">
            <option value="1"><?php echo $this->_var['lang']['mode_color1']; ?></option>
            <option value="2"><?php echo $this->_var['lang']['mode_color2']; ?></option>
            <option value="3"><?php echo $this->_var['lang']['mode_color3']; ?></option>
            <option value="4"><?php echo $this->_var['lang']['mode_color4']; ?></option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['mode_images']; ?>:</td>
        <td>
          
        </td>
      </tr>
<!--       
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeAttrGroups');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a> <?php echo $this->_var['lang']['attr_groups']; ?>:</td>
        <td>
          <textarea name="attr_group" rows="5" cols="40"><?php echo htmlspecialchars($this->_var['model_management']['attr_group']); ?></textarea><br />
          <span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeAttrGroups"><?php echo $this->_var['lang']['notice_attr_groups']; ?></span>
        </td>
      </tr> -->
      <tr align="center">
        <td colspan="2">
          <input type="hidden" name="cat_id" value="<?php echo $this->_var['model_management']['cat_id']; ?>" />
          <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
          <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
          <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
        </td>
      </tr>
    </table>
  </form>
</div>
<script type="text/javascript">
<!--

onload = function() {
  document.forms['theForm'].elements['cat_name'].focus();
  startCheckOrder();
}

function validate()
{
  var validator = new Validator('theForm');
  validator.required('cat_name', type_name_empty);

  return validator.passed();
}
  
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
