<?php /* Smarty version 2.6.20, created on 2010-11-24 18:38:41
         compiled from /home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blocknewproducts/blocknewproducts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blocknewproducts/blocknewproducts.tpl', 4, false),array('modifier', 'count', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blocknewproducts/blocknewproducts.tpl', 10, false),array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blocknewproducts/blocknewproducts.tpl', 13, false),)), $this); ?>
<!-- MODULE Block new products -->
<div class="footer_stuffs">
	<h4>
     <strong><?php echo smartyTranslate(array('s' => 'New products','mod' => 'blocknewproducts'), $this);?>
</strong>
     <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php">+ <?php echo smartyTranslate(array('s' => 'See more','mod' => 'blocknewproducts'), $this);?>
</a>
	</h4>
	<?php if ($this->_tpl_vars['new_products']): ?>
			<?php $_from = $this->_tpl_vars['new_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['myLoop']['iteration']++;
?>
		<?php endforeach; endif; unset($_from); ?>
 <?php if (count($this->_tpl_vars['new_products']) > 0): ?> 	  
			<li>
			 <a href="<?php echo $this->_tpl_vars['new_products']['0']['link']; ?>
">
			  <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['new_products']['0']['id_image']; ?>
-medium.jpg" height="60" width="60" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['new_products']['0']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
			 </a>
		 </li>
<?php endif; ?>
 <?php if (count($this->_tpl_vars['new_products']) > 1): ?> 	  
			<li>
			 <a href="<?php echo $this->_tpl_vars['new_products']['1']['link']; ?>
">
			  <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['new_products']['1']['id_image']; ?>
-medium.jpg" height="60" width="60" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['new_products']['1']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
			 </a>
		 </li>
<?php endif; ?>
 <?php if (count($this->_tpl_vars['new_products']) > 2): ?> 	  
			<li>
			 <a href="<?php echo $this->_tpl_vars['new_products']['2']['link']; ?>
">
			  <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['new_products']['2']['id_image']; ?>
-medium.jpg" height="60" width="60" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['new_products']['2']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
			 </a>
		 </li>
<?php endif; ?>
 <?php if (count($this->_tpl_vars['new_products']) > 3): ?> 	  
			<li>
			 <a href="<?php echo $this->_tpl_vars['new_products']['3']['link']; ?>
">
			  <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['new_products']['3']['id_image']; ?>
-medium.jpg" height="60" width="60" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['new_products']['3']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
			 </a>
		 </li>
<?php endif; ?>
	     <?php else: ?>
		<p><?php echo smartyTranslate(array('s' => 'No new product at this time','mod' => 'blocknewproducts'), $this);?>
</p>
	<?php endif; ?>
</div>
<!-- /MODULE Block new products -->