<?php /* Smarty version 2.6.20, created on 2010-11-12 11:41:56
         compiled from /home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockmanufacturer/blockmanufacturer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockmanufacturer/blockmanufacturer.tpl', 9, false),array('modifier', 'strip_tags', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockmanufacturer/blockmanufacturer.tpl', 11, false),array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockmanufacturer/blockmanufacturer.tpl', 23, false),)), $this); ?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left">
		
<?php if ($this->_tpl_vars['manufacturers']): ?>
	<?php if ($this->_tpl_vars['text_list']): ?>	
       <?php $_from = $this->_tpl_vars['manufacturers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['manufacturer_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['manufacturer_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['manufacturer']):
        $this->_foreach['manufacturer_list']['iteration']++;
?>
		<?php if ($this->_foreach['manufacturer_list']['iteration'] <= $this->_tpl_vars['text_list_nb']): ?>
        <div class="productlistMan">	
        <a href="<?php echo $this->_tpl_vars['link']->getmanufacturerLink($this->_tpl_vars['manufacturer']['id_manufacturer'],$this->_tpl_vars['manufacturer']['link_rewrite']); ?>
" title="<?php echo smartyTranslate(array('s' => 'More about','mod' => 'blockmanufacturer'), $this);?>
 <?php echo $this->_tpl_vars['manufacturer']['name']; ?>
"><img src="<?php echo $this->_tpl_vars['img_manu_dir']; ?>
<?php echo $this->_tpl_vars['manufacturer']['id_manufacturer']; ?>
-small.jpg" alt="<?php echo $this->_tpl_vars['manufacturer']['name']; ?>
"/></a>
		<h3><a href="<?php echo $this->_tpl_vars['link']->getmanufacturerLink($this->_tpl_vars['manufacturer']['id_manufacturer'],$this->_tpl_vars['manufacturer']['link_rewrite']); ?>
" title="<?php echo smartyTranslate(array('s' => 'More about','mod' => 'blockmanufacturer'), $this);?>
 <?php echo $this->_tpl_vars['manufacturer']['name']; ?>
"><?php echo $this->_tpl_vars['manufacturer']['name']; ?>
</a></h3>    
        <?php if ($this->_tpl_vars['manufacturer']['short_description']): ?><p><a href="<?php echo $this->_tpl_vars['link']->getmanufacturerLink($this->_tpl_vars['manufacturer']['id_manufacturer'],$this->_tpl_vars['manufacturer']['link_rewrite']); ?>
" title="<?php echo smartyTranslate(array('s' => 'More about','mod' => 'blockmanufacturer'), $this);?>
 <?php echo $this->_tpl_vars['manufacturer']['name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']['short_description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, '...') : smarty_modifier_strip_tags($_tmp, '...')); ?>
</a></p><?php else: ?><p><?php echo smartyTranslate(array('s' => 'Description for this manufacturer is currently not available','mod' => 'blockmanufacturer'), $this);?>
</p><?php endif; ?>	
     </div>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	
	<?php endif; ?>
	<?php if ($this->_tpl_vars['form_list']): ?>
		<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>
" method="get">
			<div style="float:left; clear:both;">
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0"><?php echo smartyTranslate(array('s' => 'All manufacturers','mod' => 'blockmanufacturer'), $this);?>
</option>
				<?php $_from = $this->_tpl_vars['manufacturers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['manufacturer']):
?>
					<option value="<?php echo $this->_tpl_vars['link']->getmanufacturerLink($this->_tpl_vars['manufacturer']['id_manufacturer'],$this->_tpl_vars['manufacturer']['link_rewrite']); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select>
			</div>
		</form>
	<?php endif; ?>
<?php else: ?>
	<p><?php echo smartyTranslate(array('s' => 'No manufacturer','mod' => 'blockmanufacturer'), $this);?>
</p>
<?php endif; ?>

</div>
<!-- /Block manufacturers module -->