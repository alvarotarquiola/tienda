<?php /* Smarty version 2.6.20, created on 2010-11-02 09:42:12
         compiled from /home/qcpjuuzu/public_html/tienda/themes/orange-boutique/category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/orange-boutique/category.tpl', 13, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['category']->active): ?>
	<!-- Category image -->
	<?php if ($this->_tpl_vars['category']->id_image): ?>
		<img src="<?php echo $this->_tpl_vars['img_cat_dir']; ?>
<?php echo $this->_tpl_vars['category']->id_image; ?>
-category.jpg" alt="<?php echo $this->_tpl_vars['category']->name; ?>
" title="<?php echo $this->_tpl_vars['category']->name; ?>
" id="categoryImage" />
	<?php endif; ?>

<h2 class="category_title">
	<?php echo $this->_tpl_vars['category']->name; ?>

	<span><?php echo $this->_tpl_vars['nb_products']; ?>
&nbsp;<?php if ($this->_tpl_vars['nb_products'] > 1): ?><?php echo smartyTranslate(array('s' => 'products'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'product'), $this);?>
<?php endif; ?></span>
</h2>

  <?php if ($this->_tpl_vars['category']->description): ?>
    <div class="cat_desc"><?php echo $this->_tpl_vars['category']->description; ?>
</div>
  <?php endif; ?>
  
	<?php if (isset ( $this->_tpl_vars['subcategories'] )): ?>
	<!-- Subcategories -->
	<div id="subcategories">
		<h3><?php echo smartyTranslate(array('s' => 'Subcategories'), $this);?>
</h3>
		<ul class="inline_list">
		<?php $_from = $this->_tpl_vars['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subcategory']):
?>
			<li>
				<a href="<?php echo $this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['subcategory']['id_category'],$this->_tpl_vars['subcategory']['link_rewrite']); ?>
" title="<?php echo $this->_tpl_vars['subcategory']['name']; ?>
">
					<img src="<?php echo $this->_tpl_vars['img_cat_dir']; ?>
<?php if ($this->_tpl_vars['subcategory']['id_image']): ?><?php echo $this->_tpl_vars['subcategory']['id_image']; ?>
<?php else: ?>default<?php endif; ?>-medium.jpg" alt="" />
				</a>
				<a href="<?php echo $this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['subcategory']['id_category'],$this->_tpl_vars['subcategory']['link_rewrite']); ?>
"><?php echo $this->_tpl_vars['subcategory']['name']; ?>
</a>
			</li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
		<br class="clear"/>
	</div>
	<?php endif; ?>

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
	<?php elseif (! isset ( $this->_tpl_vars['subcategories'] )): ?>
		<p class="warning"><?php echo smartyTranslate(array('s' => 'There is no product in this category.'), $this);?>
</p>
	<?php endif; ?>
<?php else: ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'This category is currently unavailable.'), $this);?>
</p>
<?php endif; ?>