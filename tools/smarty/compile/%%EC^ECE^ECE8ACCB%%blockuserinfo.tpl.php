<?php /* Smarty version 2.6.20, created on 2010-11-24 18:38:40
         compiled from /home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blockuserinfo/blockuserinfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blockuserinfo/blockuserinfo.tpl', 5, false),array('function', 'convertPrice', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blockuserinfo/blockuserinfo.tpl', 21, false),)), $this); ?>
<!-- Block user information module HEADER -->
<div id="header_user">
  <ul class="header_links">
   <li>
		<?php echo smartyTranslate(array('s' => 'Welcome','mod' => 'blockuserinfo'), $this);?>
<?php if ($this->_tpl_vars['logged']): ?>,
			<b><?php echo $this->_tpl_vars['customerName']; ?>
</b> 
            <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account','mod' => 'blockuserinfo'), $this);?>
</a>
            <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
index.php?mylogout" title="<?php echo smartyTranslate(array('s' => 'Log me out','mod' => 'blockuserinfo'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Log out','mod' => 'blockuserinfo'), $this);?>
</a>
		<?php else: ?>
			<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php" id="try-1"><?php echo smartyTranslate(array('s' => 'Log in','mod' => 'blockuserinfo'), $this);?>
</a>
		<?php endif; ?>
   </li>
 </ul>
 <ul class="shopping_cart">
 <h4><?php echo smartyTranslate(array('s' => 'Cart','mod' => 'blockuserinfo'), $this);?>
 : </a></h4>	
    <li>
	<span class="ajax_cart_no_product <?php if ($this->_tpl_vars['cart_qties'] > 0): ?>hidden<?php endif; ?>"><?php echo smartyTranslate(array('s' => 'empty','mod' => 'blockuserinfo'), $this);?>
</span>
      <span class="ajax_cart_quantity"><?php if ($this->_tpl_vars['cart_qties'] > 0): ?><?php echo $this->_tpl_vars['cart_qties']; ?>
<?php endif; ?></span>
      <span class="ajax_cart_product<?php if ($this->_tpl_vars['cart_qties'] != 1): ?> hidden<?php endif; ?>">
        <?php echo smartyTranslate(array('s' => 'product','mod' => 'blockuserinfo'), $this);?>

        <span class="ajax_cart_total"><?php if ($this->_tpl_vars['cart_qties'] > 0): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['cart']->getOrderTotal(true)), $this);?>
<?php endif; ?></span>
        <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php" title="<?php echo smartyTranslate(array('s' => 'view','mod' => 'blockuserinfo'), $this);?>
"><?php echo smartyTranslate(array('s' => 'View','mod' => 'blockuserinfo'), $this);?>
</a>
        <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1" id="button_order_cart" title="<?php echo smartyTranslate(array('s' => 'check out','mod' => 'blockuserinfo'), $this);?>
"><?php echo smartyTranslate(array('s' => 'check out','mod' => 'blockuserinfo'), $this);?>
</a>
     </span>
     <span class="ajax_cart_product <?php if ($this->_tpl_vars['cart_qties'] < 2): ?> hidden<?php endif; ?>">
        <?php echo smartyTranslate(array('s' => 'products','mod' => 'blockuserinfo'), $this);?>

        <span class="ajax_cart_total"><?php if ($this->_tpl_vars['cart_qties'] > 0): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['cart']->getOrderTotal(true)), $this);?>
<?php endif; ?></span>
        <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php" title="<?php echo smartyTranslate(array('s' => 'View','mod' => 'blockuserinfo'), $this);?>
"><?php echo smartyTranslate(array('s' => 'view','mod' => 'blockuserinfo'), $this);?>
</a>
        <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1" id="button_order_cart" title="<?php echo smartyTranslate(array('s' => 'check out','mod' => 'blockuserinfo'), $this);?>
"><?php echo smartyTranslate(array('s' => 'check out','mod' => 'blockuserinfo'), $this);?>
</a>
     </span>              
    </li>
  </ul>
</div>
<!-- /Block user information module HEADER -->