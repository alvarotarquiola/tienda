<?php /* Smarty version 2.6.20, created on 2010-11-02 09:44:01
         compiled from /home/qcpjuuzu/public_html/tienda/themes/emerald/./errors.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/home/qcpjuuzu/public_html/tienda/themes/emerald/./errors.tpl', 3, false),array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/emerald/./errors.tpl', 3, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['errors'] ) && $this->_tpl_vars['errors']): ?>
	<br />
	<?php if (count($this->_tpl_vars['errors']) > 1): ?><?php echo smartyTranslate(array('s' => 'There are'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'There is'), $this);?>
<?php endif; ?> <?php echo count($this->_tpl_vars['errors']); ?>
 <?php if (count($this->_tpl_vars['errors']) > 1): ?><?php echo smartyTranslate(array('s' => 'errors'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'error'), $this);?>
<?php endif; ?> :
	<ul class="error" style="margin-bottom: 20px;">
	<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['error']):
?>
		<li><span style="font-weight:bold; color:red;"><?php echo $this->_tpl_vars['error']; ?>
</span></li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
<?php endif; ?>