<?php /* Smarty version 2.6.20, created on 2010-11-12 11:41:57
         compiled from /home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blocknewproducts/blocknewproducts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blocknewproducts/blocknewproducts.tpl', 5, false),array('modifier', 'strip_tags', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blocknewproducts/blocknewproducts.tpl', 6, false),array('modifier', 'truncate', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blocknewproducts/blocknewproducts.tpl', 6, false),array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blocknewproducts/blocknewproducts.tpl', 10, false),)), $this); ?>
<!-- MODULE Block new products -->
<div id="new-products_block_right" class="tabdiv">	<?php if ($this->_tpl_vars['new_products'] !== false): ?>
   <?php $_from = $this->_tpl_vars['new_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['newproduct']):
        $this->_foreach['myLoop']['iteration']++;
?>
		<ul>		
				<li> <a href="<?php echo $this->_tpl_vars['newproduct']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['newproduct']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['newproduct']['link_rewrite'],$this->_tpl_vars['newproduct']['id_image'],'animated_tab'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['newproducts']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a></li>
                <li><h3><a href="<?php echo $this->_tpl_vars['newproduct']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['newproduct']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['newproduct']['name'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...') : smarty_modifier_truncate($_tmp, 40, '...')); ?>
</a></h3></li>
                <li><?php if ($this->_tpl_vars['newproduct']['description_short']): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['newproduct']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, 'UTF-8') : smarty_modifier_strip_tags($_tmp, 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, '...') : smarty_modifier_truncate($_tmp, 50, '...')); ?>
<?php endif; ?></li>
       </ul>
        <?php endforeach; endif; unset($_from); ?>
         <div class="see-all-link"> <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php" title="<?php echo smartyTranslate(array('s' => 'All new products','mod' => 'blocknewproducts'), $this);?>
" class="button_large"><?php echo smartyTranslate(array('s' => 'All new products','mod' => 'blocknewproducts'), $this);?>
</a></div>
		
	<?php else: ?>
		<p><?php echo smartyTranslate(array('s' => 'No new products at this time','mod' => 'blocknewproducts'), $this);?>
</p>
	<?php endif; ?>

</div>
<!-- /MODULE Block new products -->