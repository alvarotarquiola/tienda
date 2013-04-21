<?php /* Smarty version 2.6.20, created on 2011-03-01 16:11:48
         compiled from /home/qcpjuuzu/public_html/tienda/themes/assembly/cms.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/assembly/cms.tpl', 12, false),)), $this); ?>
<?php if ($this->_tpl_vars['cms']): ?>
	<?php if ($this->_tpl_vars['content_only']): ?>
	<div style="text-align:left; padding:10px;" class="rte">
		<?php echo $this->_tpl_vars['cms']->content; ?>

	</div>
	<?php else: ?>
	<div class="rte">
		<?php echo $this->_tpl_vars['cms']->content; ?>

	</div>
	<?php endif; ?>
<?php else: ?>
	<?php echo smartyTranslate(array('s' => 'This page does not exist.'), $this);?>

<?php endif; ?>
<br />
<?php if (! $this->_tpl_vars['content_only']): ?>
<p><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.gif" alt="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></p>
<?php endif; ?>
