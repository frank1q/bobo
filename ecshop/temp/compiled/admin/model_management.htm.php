<!-- $Id: model_management.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<style>
  .action-span{
    display: none;
  }
</style>
<form method="post" action="" name="listForm">
<!-- start goods type list -->
  <div class="list-div" id="listDiv">
    <?php endif; ?>
      <table width="100%" cellpadding="3" cellspacing="1" id="listTable">
        <tr>
          <th><?php echo $this->_var['lang']['model_management']; ?></th>
          <th><?php echo $this->_var['lang']['model_complexion']; ?></th>
          <th><?php echo $this->_var['lang']['model_sex']; ?></th>
          <th><?php echo $this->_var['lang']['model_high']; ?></th>
          <th><?php echo $this->_var['lang']['model_figure']; ?></th>
          <th><?php echo $this->_var['lang']['handler']; ?></th>
        </tr>
        <?php $_from = $this->_var['model_management_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'model_management');if (count($_from)):
    foreach ($_from AS $this->_var['model_management']):
?>
          <tr>
            <td class="first-cell"><?php echo $this->_var['model_management']['mode_id']; ?></td>
            <td>
              <?php if ($this->_var['model_management']['mode_complexion'] == 1): ?>
                <?php echo $this->_var['lang']['model_color1']; ?>
              <?php elseif ($this->_var['model_management']['mode_complexion'] == 2): ?>
                <?php echo $this->_var['lang']['model_color2']; ?>
              <?php elseif ($this->_var['model_management']['mode_complexion'] == 3): ?>
                <?php echo $this->_var['lang']['model_color3']; ?>
              <?php else: ?>
                <?php echo $this->_var['lang']['model_color4']; ?>
              <?php endif; ?>
            </td>
            <td>
              <?php if ($this->_var['model_management']['mode_sex'] == 1): ?>
                <?php echo $this->_var['lang']['model_male']; ?>
              <?php else: ?>
                <?php echo $this->_var['lang']['model_female']; ?>
              <?php endif; ?>
            </td>
            <td><?php echo $this->_var['model_management']['mode_high_id']; ?></td>
            <td><?php echo $this->_var['model_management']['model_figure']; ?></td>
            <td align="center">
<!--<a href="model_management.php?act=edit&mode_id=<?php echo $this->_var['model_management']['mode_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><?php echo $this->_var['lang']['lang_enabled']; ?></a> |
 -->              
              <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['model_management']['mode_id']; ?>, '<?php echo $this->_var['lang']['remove_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>">
                <?php echo $this->_var['lang']['remove']; ?>
              </a>
            </td>
          </tr>
        <?php endforeach; else: ?>
        <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <tr>
          <td align="right" nowrap="true" colspan="6">
          <?php echo $this->fetch('page.htm'); ?>
          </td>
        </tr>

      </table>

    <?php if ($this->_var['full_page']): ?>
  </div>
<!-- end goods type list -->
</form>

<script type="text/javascript" language="JavaScript">
<!--
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
  
  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
  }

//-->

</script>


<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>
