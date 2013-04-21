<?php /* Smarty version 2.6.20, created on 2011-02-22 18:38:51
         compiled from /home/qcpjuuzu/public_html/tienda/modules/cashondelivery/validation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/modules/cashondelivery/validation.tpl', 1, false),array('function', 'convertPrice', '/home/qcpjuuzu/public_html/tienda/modules/cashondelivery/validation.tpl', 18, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Shipping','mod' => 'cashondelivery'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'Order summation','mod' => 'cashondelivery'), $this);?>
</h2>

<?php $this->assign('current_step', 'payment'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo smartyTranslate(array('s' => 'Cash on delivery (COD) payment','mod' => 'cashondelivery'), $this);?>
</h3>

<form action="<?php echo $this->_tpl_vars['this_path_ssl']; ?>
validation.php" method="post">
	<input type="hidden" name="confirm" value="1" />
	<p>
		<img src="<?php echo $this->_tpl_vars['this_path']; ?>
cashondelivery.jpg" alt="<?php echo smartyTranslate(array('s' => 'Cash on delivery (COD) payment','mod' => 'cashondelivery'), $this);?>
" style="float:left; margin: 0px 10px 5px 0px;" />
		<?php echo smartyTranslate(array('s' => 'You have chosen the cash on delivery method.','mod' => 'cashondelivery'), $this);?>

		<br/><br />
		<?php echo smartyTranslate(array('s' => 'The total amount of your order is','mod' => 'cashondelivery'), $this);?>

		<span id="amount_<?php echo $this->_tpl_vars['currencies']['0']['id_currency']; ?>
" class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total']), $this);?>
</span> <?php echo smartyTranslate(array('s' => '(tax incl.)','mod' => 'cashondelivery'), $this);?>

	</p>
	<p>
		<br /><br />
		<br /><br />
		<b><?php echo smartyTranslate(array('s' => 'Please confirm your order by clicking \'I confirm my order\'','mod' => 'cashondelivery'), $this);?>
.</b>
	</p>
	<p class="cart_navigation">
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=3" class="button_large"><?php echo smartyTranslate(array('s' => 'Other payment methods','mod' => 'cashondelivery'), $this);?>
</a>
		<input type="submit" name="submit" value="<?php echo smartyTranslate(array('s' => 'I confirm my order','mod' => 'cashondelivery'), $this);?>
" class="exclusive_large" />
	</p>
</form>