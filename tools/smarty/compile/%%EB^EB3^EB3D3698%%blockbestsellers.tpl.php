<?php /* Smarty version 2.6.20, created on 2010-11-12 11:41:57
         compiled from /home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockbestsellers/blockbestsellers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockbestsellers/blockbestsellers.tpl', 4, false),array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockbestsellers/blockbestsellers.tpl', 8, false),array('modifier', 'strip_tags', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockbestsellers/blockbestsellers.tpl', 10, false),array('modifier', 'truncate', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockbestsellers/blockbestsellers.tpl', 10, false),array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockbestsellers/blockbestsellers.tpl', 14, false),)), $this); ?>
<!-- MODULE Block best sellers -->
<div id="best-sellers_block_right" class="tabdiv">

	<?php if (count($this->_tpl_vars['best_sellers']) > 0): ?>		
		<?php $_from = $this->_tpl_vars['best_sellers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['myLoop']['iteration']++;
?>
        <ul>
        	<li><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo $this->_tpl_vars['product']['legend']; ?>
"><img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'animated_tab'); ?>
" height="200" width="200" alt="<?php echo $this->_tpl_vars['product']['legend']; ?>
" /></a></li>
			<li><h3><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h3></li>
		<?php if ($this->_tpl_vars['product']['description_short']): ?>
        	<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, 'UTF-8') : smarty_modifier_strip_tags($_tmp, 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, '...') : smarty_modifier_truncate($_tmp, 50, '...')); ?>
</li>
        <?php endif; ?>            
        </ul>
	    <?php endforeach; endif; unset($_from); ?>
       <div class="see-all-link"> <a class="button_large" href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php" title="<?php echo smartyTranslate(array('s' => 'All best sellers','mod' => 'blockbestsellers'), $this);?>
"><?php echo smartyTranslate(array('s' => 'All best sellers','mod' => 'blockbestsellers'), $this);?>
</a></div>
		
		
	<?php else: ?>
		<p><?php echo smartyTranslate(array('s' => 'No best sellers at this time','mod' => 'blockbestsellers'), $this);?>
</p>
	<?php endif; ?>
	
</div>
<!-- /MODULE Block best sellers -->