<?php /* Smarty version 2.6.20, created on 2010-11-24 18:38:41
         compiled from /home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blockvariouslinks/blockvariouslinks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blockvariouslinks/blockvariouslinks.tpl', 3, false),array('modifier', 'addslashes', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blockvariouslinks/blockvariouslinks.tpl', 10, false),array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/blockvariouslinks/blockvariouslinks.tpl', 10, false),)), $this); ?>
<!-- MODULE Block various links -->
<ul class="block_various_links">
     <li class="first_item"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
prices-drop.php" title=""><?php echo smartyTranslate(array('s' => 'Specials','mod' => 'blockvariouslinks'), $this);?>
</a></li>
	 <li class="item"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php" title=""><?php echo smartyTranslate(array('s' => 'New products','mod' => 'blockvariouslinks'), $this);?>
</a></li>
	 <li class="item"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php" title=""><?php echo smartyTranslate(array('s' => 'Top sellers','mod' => 'blockvariouslinks'), $this);?>
</a></li>
	 <li class="item"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php" title=""><?php echo smartyTranslate(array('s' => 'Contact us','mod' => 'blockvariouslinks'), $this);?>
</a></li>
	 <li class="item"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
sitemap.php" title=""><?php echo smartyTranslate(array('s' => 'Sitemap','mod' => 'blockvariouslinks'), $this);?>
</a></li>
  <?php $_from = $this->_tpl_vars['cmslinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cmslink']):
?>
	 <li class="item">
      <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['cmslink']['link'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['cmslink']['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cmslink']['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
     </li>
  <?php endforeach; endif; unset($_from); ?>
</ul>
<p><?php echo smartyTranslate(array('s' => 'Copyright ','mod' => 'blockvariouslinks'), $this);?>
 &copy; <?php echo smartyTranslate(array('s' => 'Template','mod' => 'blockvariouslinks'), $this);?>
 <?php echo smartyTranslate(array('s' => 'Matrice for','mod' => 'blockvariouslinks'), $this);?>
 <a href="http://www.prestashop.com"><?php echo smartyTranslate(array('s' => 'PrestaShop 1.3.1','mod' => 'blockvariouslinks'), $this);?>
</a>
  <?php echo smartyTranslate(array('s' => 'by','mod' => 'blockvariouslinks'), $this);?>
 <a href="http://dgcraft.free.fr" target="_blank"><?php echo smartyTranslate(array('s' => '2 link','mod' => 'blockvariouslinks'), $this);?>
</a>
</p>
<p><a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
payment_logo.gif" alt="image" /></a></p>
<!-- /MODULE Block various links -->