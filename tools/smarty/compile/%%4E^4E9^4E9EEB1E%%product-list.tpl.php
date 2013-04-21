<?php /* Smarty version 2.6.20, created on 2010-11-12 12:04:26
         compiled from /home/qcpjuuzu/public_html/tienda/themes/clean-simple/./product-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/home/qcpjuuzu/public_html/tienda/themes/clean-simple/./product-list.tpl', 5, false),array('modifier', 'ceil', '/home/qcpjuuzu/public_html/tienda/themes/clean-simple/./product-list.tpl', 6, false),array('modifier', 'truncate', '/home/qcpjuuzu/public_html/tienda/themes/clean-simple/./product-list.tpl', 10, false),array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/clean-simple/./product-list.tpl', 10, false),array('modifier', 'strip_tags', '/home/qcpjuuzu/public_html/tienda/themes/clean-simple/./product-list.tpl', 12, false),array('modifier', 'date_format', '/home/qcpjuuzu/public_html/tienda/themes/clean-simple/./product-list.tpl', 21, false),array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/clean-simple/./product-list.tpl', 10, false),array('function', 'convertPrice', '/home/qcpjuuzu/public_html/tienda/themes/clean-simple/./product-list.tpl', 15, false),)), $this); ?>
<div id="list_products_block" class="block products_block products_block_bg">
	<?php if (isset ( $this->_tpl_vars['products'] ) && $this->_tpl_vars['products']): ?>
		<div class="block_content">
			<?php $this->assign('nbItemsPerLine', 5); ?>
			<?php $this->assign('nbLi', count($this->_tpl_vars['products'])); ?>
			<?php $this->assign('nbLines', ((is_array($_tmp=$this->_tpl_vars['nbLi']/$this->_tpl_vars['nbItemsPerLine'])) ? $this->_run_mod_handler('ceil', true, $_tmp) : ceil($_tmp))); ?>
			<ul>
			<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['homeFeaturedProducts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['homeFeaturedProducts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['homeFeaturedProducts']['iteration']++;
?>
				<li class="ajax_block_product <?php if (($this->_foreach['homeFeaturedProducts']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['homeFeaturedProducts']['iteration'] == $this->_foreach['homeFeaturedProducts']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> <?php if ($this->_foreach['homeFeaturedProducts']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 0): ?>last_item_of_line<?php elseif ($this->_foreach['homeFeaturedProducts']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 1): ?>first_item_of_line<?php endif; ?> <?php if ($this->_foreach['homeFeaturedProducts']['iteration'] > ( $this->_foreach['homeFeaturedProducts']['total'] - ( $this->_foreach['homeFeaturedProducts']['total'] % $this->_tpl_vars['nbItemsPerLine'] ) )): ?>last_line<?php endif; ?>">
					<h5><?php if ($this->_tpl_vars['product']['new'] == 1): ?><span class="new"><?php echo smartyTranslate(array('s' => 'new'), $this);?>
</span><?php endif; ?><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 32, '...') : smarty_modifier_truncate($_tmp, 32, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 27, '...') : smarty_modifier_truncate($_tmp, 27, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h5>
					<div class="hover_bg"></div>			
					<p class="product_desc"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 130, '...') : smarty_modifier_truncate($_tmp, 130, '...')); ?>
 <span class="availability"><?php if (( $this->_tpl_vars['product']['allow_oosp'] || $this->_tpl_vars['product']['quantity'] > 0 )): ?><?php else: ?><?php echo smartyTranslate(array('s' => 'Out of stock'), $this);?>
<?php endif; ?></span></p>
					<a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" class="product_image"><img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'home'); ?>
" height="<?php echo $this->_tpl_vars['homeSize']['height']; ?>
" width="<?php echo $this->_tpl_vars['homeSize']['width']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a>
					<div class="product_price">
						<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?><p class="price_container"><span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price']), $this);?>
</span><?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '+Tx','mod' => 'homefeatured'), $this);?>
<?php endif; ?></p><?php endif; ?>
						<?php if ($this->_tpl_vars['priceDisplay']): ?><p class="price_container"><span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price_tax_exc']), $this);?>
</span><?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '-Tx','mod' => 'homefeatured'), $this);?>
<?php endif; ?></p><?php endif; ?>
					</div>
					<div class="price_lower">
						<?php if ($this->_tpl_vars['product']['on_sale']): ?>
					<span class="on_sale"><?php echo smartyTranslate(array('s' => 'On sale!'), $this);?>
</span>
				<?php elseif (( $this->_tpl_vars['product']['reduction_price'] != 0 || $this->_tpl_vars['product']['reduction_percent'] != 0 ) && ( $this->_tpl_vars['product']['reduction_from'] == $this->_tpl_vars['product']['reduction_to'] || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']['reduction_to'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']['reduction_from'] ) )): ?>
					<span class="discount"><?php echo smartyTranslate(array('s' => 'Price lowered!'), $this);?>
</span>
				<?php endif; ?>
					</div>
					<div class="product_actions">
						<?php if (( $this->_tpl_vars['product']['quantity'] > 0 || $this->_tpl_vars['product']['allow_oosp'] ) && $this->_tpl_vars['product']['customizable'] != 2): ?>
						<a class="add_to_cart ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $this->_tpl_vars['product']['id_product']; ?>
" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?qty=1&amp;id_product=<?php echo $this->_tpl_vars['product']['id_product']; ?>
&amp;token=<?php echo $this->_tpl_vars['static_token']; ?>
&amp;add" title="<?php echo smartyTranslate(array('s' => 'Add to cart','mod' => 'homefeatured'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Add to cart','mod' => 'homefeatured'), $this);?>
</a>
						<?php else: ?>
						<span class="add_to_cart"><?php echo smartyTranslate(array('s' => 'Add to cart','mod' => 'homefeatured'), $this);?>
</span>
						<?php endif; ?>
						<a class="view_product" href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo smartyTranslate(array('s' => 'View','mod' => 'homefeatured'), $this);?>
"><?php echo smartyTranslate(array('s' => 'View','mod' => 'homefeatured'), $this);?>
</a>
					</div>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	<?php else: ?>
		<p><?php echo smartyTranslate(array('s' => 'No featured products','mod' => 'homefeatured'), $this);?>
</p>
	<?php endif; ?>
</div>