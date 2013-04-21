<?php /* Smarty version 2.6.20, created on 2010-11-12 11:41:56
         compiled from /home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockcategories/blockcategories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockcategories/blockcategories.tpl', 5, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
tools/treeManagement.js"></script>

<!-- Block categories module -->
<div id="categories_block_left" class="footerblock">
	<h5><?php echo smartyTranslate(array('s' => 'Proucts','mod' => 'blockcategories'), $this);?>
</h5>
		<ul>
        <li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php"><?php echo smartyTranslate(array('s' => 'New products'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php"><?php echo smartyTranslate(array('s' => 'Top sellers'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
prices-drop.php"><?php echo smartyTranslate(array('s' => 'Specials'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
manufacturer.php"><?php echo smartyTranslate(array('s' => 'Manufacturers'), $this);?>
</a></li>
		<?php $_from = $this->_tpl_vars['blockCategTree']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['blockCategTree'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['blockCategTree']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['child']):
        $this->_foreach['blockCategTree']['iteration']++;
?>
			<?php if (($this->_foreach['blockCategTree']['iteration'] == $this->_foreach['blockCategTree']['total'])): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['branche_tpl_path'], 'smarty_include_vars' => array('node' => $this->_tpl_vars['child'],'last' => 'true')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php else: ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['branche_tpl_path'], 'smarty_include_vars' => array('node' => $this->_tpl_vars['child'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div>
<script type="text/javascript">
// <![CDATA[
	// we hide the tree only if JavaScript is activated
	$('div#categories_block_left ul.dhtml').hide();
// ]]>
</script>
<!-- /Block categories module -->