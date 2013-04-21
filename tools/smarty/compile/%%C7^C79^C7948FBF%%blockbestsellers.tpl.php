<?php /* Smarty version 2.6.20, created on 2010-11-24 18:38:41
         compiled from /home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blockbestsellers/blockbestsellers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blockbestsellers/blockbestsellers.tpl', 4, false),array('modifier', 'count', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blockbestsellers/blockbestsellers.tpl', 7, false),)), $this); ?>
<!-- MODULE Block best sellers -->
<div class="footer_stuffs">
 <h4>
   <strong><?php echo smartyTranslate(array('s' => 'Top sellers','mod' => 'blockbestsellers'), $this);?>
</strong>
   <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php">+ <?php echo smartyTranslate(array('s' => 'See more','mod' => 'blockbestsellers'), $this);?>
</a>
 </h4>
 <?php if (count($this->_tpl_vars['best_sellers']) > 0): ?>
    <li>
      	 <a href="<?php echo $this->_tpl_vars['best_sellers']['0']['link']; ?>
" title="<?php echo $this->_tpl_vars['best_sellers']['0']['legend']; ?>
">
	      <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['best_sellers']['0']['id_image']; ?>
-medium.jpg" height="60" width="60" alt="<?php echo $this->_tpl_vars['best_sellers']['0']['legend']; ?>
" />
	     </a>
    </li>
 <?php if (count($this->_tpl_vars['best_sellers']) > 1): ?>
    <li>
      	 <a href="<?php echo $this->_tpl_vars['best_sellers']['1']['link']; ?>
">
	      <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['best_sellers']['1']['id_image']; ?>
-medium.jpg" height="60" width="60" alt="<?php echo $this->_tpl_vars['best_sellers']['1']['legend']; ?>
" />
	     </a>
    </li>
 <?php endif; ?>
 <?php if (count($this->_tpl_vars['best_sellers']) > 2): ?>
    <li>
      	 <a href="<?php echo $this->_tpl_vars['best_sellers']['2']['link']; ?>
" title="<?php echo $this->_tpl_vars['best_sellers']['2']['legend']; ?>
">
	      <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['best_sellers']['2']['id_image']; ?>
-medium.jpg" height="60" width="60" alt="<?php echo $this->_tpl_vars['best_sellers']['2']['legend']; ?>
" />
	     </a>
    </li>
 <?php endif; ?>
 <?php if (count($this->_tpl_vars['best_sellers']) > 3): ?>
    <li>
      	 <a href="<?php echo $this->_tpl_vars['best_sellers']['3']['link']; ?>
" title="<?php echo $this->_tpl_vars['best_sellers']['3']['legend']; ?>
">
	      <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['best_sellers']['3']['id_image']; ?>
-medium.jpg" height="60" width="60" alt="<?php echo $this->_tpl_vars['best_sellers']['3']['legend']; ?>
" />
	     </a>
    </li>
 <?php endif; ?>
<?php else: ?>
<li class="warning"><?php echo smartyTranslate(array('s' => 'No best sellers at this time','mod' => 'blockbestsellers'), $this);?>
</li>
<?php endif; ?>
</div>
<!-- /MODULE Block best sellers -->
