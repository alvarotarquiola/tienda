<?php /* Smarty version 2.6.20, created on 2012-09-11 23:28:24
         compiled from C:%5CAmpps%5Cwww%5CTienda/themes/Rojo/manufacturer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'C:\\Ampps\\www\\Tienda/themes/Rojo/manufacturer.tpl', 6, false),array('function', 'l', 'C:\\Ampps\\www\\Tienda/themes/Rojo/manufacturer.tpl', 13, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- logo -->
					<div>
					
						<img src="<?php echo $this->_tpl_vars['img_manu_dir']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']->id)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
-medium.jpg" alt="" width="<?php echo $this->_tpl_vars['mediumSize']['width']; ?>
" height="<?php echo $this->_tpl_vars['mediumSize']['height']; ?>
" style="float:left;margin:5px;" />
						<?php echo $this->_tpl_vars['manufacturer']->description; ?>

					
					</div>
					
<div style="width:90%;clear:both;"></div>					
					
<h2><?php echo smartyTranslate(array('s' => 'List of products by manufacturer:'), $this);?>
&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</h2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['products']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-list.tpl", 'smarty_include_vars' => array('products' => $this->_tpl_vars['products'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'No products for this manufacturer.'), $this);?>
</p>
<?php endif; ?>