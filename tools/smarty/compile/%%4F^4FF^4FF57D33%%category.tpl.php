<?php /* Smarty version 2.6.20, created on 2011-03-01 16:22:45
         compiled from /home/qcpjuuzu/public_html/tienda/themes/emerald/category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/emerald/category.tpl', 6, false),array('function', 'counter', '/home/qcpjuuzu/public_html/tienda/themes/emerald/category.tpl', 22, false),array('function', 'productPrice', '/home/qcpjuuzu/public_html/tienda/themes/emerald/category.tpl', 90, false),array('modifier', 'truncate', '/home/qcpjuuzu/public_html/tienda/themes/emerald/category.tpl', 73, false),array('modifier', 'strip_tags', '/home/qcpjuuzu/public_html/tienda/themes/emerald/category.tpl', 75, false),)), $this); ?>
<?php if ($this->_tpl_vars['errors']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['category']->active): ?>
		<!-- Navigationbar -->
		<div class="nav_bar">
			<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a> <?php echo $this->_tpl_vars['navigationPipe']; ?>
 <?php echo $this->_tpl_vars['path']; ?>

		</div>
	
		<!-- Category image -->
		<img src="<?php echo $this->_tpl_vars['img_cat_dir']; ?>
<?php echo $this->_tpl_vars['category']->id_image; ?>
.jpg" alt="" title="<?php echo $this->_tpl_vars['category']->name; ?>
" class="m_bottom" />
	
		<!-- Category name and description -->
		
		
		<?php if ($this->_tpl_vars['category']->description): ?>
			<div class="cat_description"><?php echo $this->_tpl_vars['category']->description; ?>
</div>
		<?php endif; ?>
		
		<!-- Subcategories if here -->
		<?php if (isset ( $this->_tpl_vars['subcategories'] )): ?>
			<div id="categories_list" class="m_bottom">	
				<?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => false,'assign' => 'nbCat'), $this);?>

				<?php $_from = $this->_tpl_vars['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['subcategory']):
?>
					<?php echo smarty_function_counter(array(), $this);?>
			
					<div class="subcategory<?php if (( $this->_tpl_vars['nbCat'] - 1 ) % 3 == 0): ?> clear<?php endif; ?>">
						<a href="<?php echo $this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['subcategory']['id_category'],$this->_tpl_vars['subcategory']['link_rewrite']); ?>
">
							<img src="<?php echo $this->_tpl_vars['img_cat_dir']; ?>
<?php if ($this->_tpl_vars['subcategory']['id_image']): ?><?php echo $this->_tpl_vars['subcategory']['id_image']; ?>
<?php else: ?>default<?php endif; ?>-medium.jpg" alt="" title="<?php echo $this->_tpl_vars['subcategory']['name']; ?>
" />
						</a>
						<br />
						<a href="<?php echo $this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['subcategory']['id_category'],$this->_tpl_vars['subcategory']['link_rewrite']); ?>
"><?php echo $this->_tpl_vars['subcategory']['name']; ?>
</a>
					</div>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		<?php endif; ?>
		
		<!-- Products -->
		<?php if ($this->_tpl_vars['products']): ?>
			<table class="product_list">
				<tr>
					<th><?php echo smartyTranslate(array('s' => 'Picture'), $this);?>
</th>
					<th>
						<?php echo smartyTranslate(array('s' => 'Product'), $this);?>

						<a href="<?php echo $this->_tpl_vars['link']->goLink('name','desc'); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
down.gif" alt="<?php echo smartyTranslate(array('s' => 'down'), $this);?>
" /></a>
						<a href="<?php echo $this->_tpl_vars['link']->goLink('name','asc'); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
up.gif" alt="<?php echo smartyTranslate(array('s' => 'up'), $this);?>
" /></a>
					</th>
					<th>
						<?php echo smartyTranslate(array('s' => 'Avail.'), $this);?>

						<a href="<?php echo $this->_tpl_vars['link']->goLink('quantity','desc'); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
down.gif" alt="<?php echo smartyTranslate(array('s' => 'down'), $this);?>
" /></a>
						<a href="<?php echo $this->_tpl_vars['link']->goLink('quantity','asc'); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
up.gif" alt="<?php echo smartyTranslate(array('s' => 'up'), $this);?>
" /></a>
					</th>
					<th>
						<?php echo smartyTranslate(array('s' => 'Price'), $this);?>
 
						<a href="<?php echo $this->_tpl_vars['link']->goLink('price','desc'); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
down.gif" alt="<?php echo smartyTranslate(array('s' => 'down'), $this);?>
" /></a>
						<a href="<?php echo $this->_tpl_vars['link']->goLink('price','asc'); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
up.gif" alt="<?php echo smartyTranslate(array('s' => 'up'), $this);?>
" /></a>
					</th>
				</tr>
				<tr class="separator">
					<td colspan="4" class="separator"></td>
				</tr>
				
				<!-- Products informations -->
				<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
				<tr class="product">
					<!-- Image -->
					<td>
						<a href="<?php echo $this->_tpl_vars['product']['link']; ?>
">
							<img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['id_image']; ?>
-medium.jpg" alt="<?php echo $this->_tpl_vars['product']['legend']; ?>
" title="<?php echo $this->_tpl_vars['product']['legend']; ?>
" />
						</a>
					</td>
					
					<!-- Name and description -->
					<td>
						<h3><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" class="product_link"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
</a></h3>
						<div class="cat_prod_description">
							<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 150) : smarty_modifier_truncate($_tmp, 150)); ?>

						</div>
					</td>
					
					<!-- Availability -->
					<td class="middle">
						<?php if (( $this->_tpl_vars['product']['allow_oosp'] || $this->_tpl_vars['product']['quantity'] > 0 )): ?>
							<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
available.gif" alt="<?php echo smartyTranslate(array('s' => 'Available'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Available'), $this);?>
" />
						<?php else: ?>
							<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
unavailable.gif" alt="<?php echo smartyTranslate(array('s' => 'Out of stock'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Out of stock'), $this);?>
" />
						<?php endif; ?>
					</td>
					
					<!-- Price and actions -->
					<td class="price">
						<?php echo Product::productPrice(array('p' => $this->_tpl_vars['product']), $this);?>

						<?php if (( $this->_tpl_vars['product']['allow_oosp'] || $this->_tpl_vars['product']['quantity'] > 0 )): ?>
							<a href="cart.php?add&amp;id_product=<?php echo $this->_tpl_vars['product']['id_product']; ?>
">
								<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
btn-add-small.gif" alt="<?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
" class="add_to_cart" />
							</a>
						<?php endif; ?>
						<br />
						<a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" class="product_link">
							<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
<?php echo $this->_tpl_vars['lang_iso']; ?>
/btn-view.gif" alt="View" title="View" class="tspace" />
						</a>
					</td>
				</tr>
				<tr class="separator2">
					<td colspan="4" class="separator2"></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<br /><?php echo smartyTranslate(array('s' => 'There is no product in this category'), $this);?>
.
		<?php endif; ?>
<?php else: ?>
	<p><?php echo smartyTranslate(array('s' => 'This category is currently unavailable'), $this);?>
.</p>
<?php endif; ?>