<?php /* Smarty version 2.6.20, created on 2013-04-17 03:50:35
         compiled from D:%5Cxampp%5Chtdocs%5Ctienda/themes/Rojo/./breadcrumb.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\xampp\\htdocs\\tienda/themes/Rojo/./breadcrumb.tpl', 4, false),array('modifier', 'escape', 'D:\\xampp\\htdocs\\tienda/themes/Rojo/./breadcrumb.tpl', 4, false),array('modifier', 'strpos', 'D:\\xampp\\htdocs\\tienda/themes/Rojo/./breadcrumb.tpl', 4, false),)), $this); ?>
<!-- Breadcrumb -->
<?php if (isset ( $this->_smarty_vars['capture']['path'] )): ?><?php $this->assign('path', $this->_smarty_vars['capture']['path']); ?><?php endif; ?>
<div class="breadcrumb">
	<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'return to'), $this);?>
 <?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a><?php if ($this->_tpl_vars['path']): ?><span class="navigation-pipe"><?php echo ((is_array($_tmp=$this->_tpl_vars['navigationPipe'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
</span><?php if (! ((is_array($_tmp=$this->_tpl_vars['path'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'span') : strpos($_tmp, 'span'))): ?><span class="navigation_page"><?php echo $this->_tpl_vars['path']; ?>
</span><?php else: ?><?php echo $this->_tpl_vars['path']; ?>
<?php endif; ?><?php endif; ?>
</div>
<!-- /Breadcrumb -->