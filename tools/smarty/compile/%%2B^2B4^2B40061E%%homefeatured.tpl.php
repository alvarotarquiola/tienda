<?php /* Smarty version 2.6.20, created on 2010-11-24 18:38:41
         compiled from /home/qcpjuuzu/public_html/tienda/themes/matrice/modules/homefeatured/homefeatured.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/homefeatured/homefeatured.tpl', 7, false),array('modifier', 'ceil', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/homefeatured/homefeatured.tpl', 8, false),array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/homefeatured/homefeatured.tpl', 15, false),array('modifier', 'truncate', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/homefeatured/homefeatured.tpl', 20, false),array('modifier', 'strip_tags', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/homefeatured/homefeatured.tpl', 22, false),array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/homefeatured/homefeatured.tpl', 22, false),array('function', 'displayWtPrice', '/home/qcpjuuzu/public_html/tienda/themes/matrice/modules/homefeatured/homefeatured.tpl', 24, false),)), $this); ?>
<!-- MODULE Home Featured Products -->
<div class="block products_block">
<?php if (isset ( $this->_tpl_vars['products'] ) && $this->_tpl_vars['products']): ?>
    <div class="block_content">
     <?php $this->assign('liHeight', 360); ?>
     <?php $this->assign('nbItemsPerLine', 4); ?>
     <?php $this->assign('nbLi', count($this->_tpl_vars['products'])); ?>
     <?php $this->assign('nbLines', ((is_array($_tmp=$this->_tpl_vars['nbLi']/$this->_tpl_vars['nbItemsPerLine'])) ? $this->_run_mod_handler('ceil', true, $_tmp) : ceil($_tmp))); ?>
     <?php $this->assign('ulHeight', $this->_tpl_vars['nbLines']*$this->_tpl_vars['liHeight']); ?>
      <ul>
        <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['homeFeaturedProducts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['homeFeaturedProducts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['homeFeaturedProducts']['iteration']++;
?>
        <?php $this->assign('productLink', $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category'])); ?>
        <li class="ajax_block_product <?php if (($this->_foreach['homeFeaturedProducts']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['homeFeaturedProducts']['iteration'] == $this->_foreach['homeFeaturedProducts']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> <?php if ($this->_foreach['homeFeaturedProducts']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 0): ?>last_item_of_line<?php elseif ($this->_foreach['homeFeaturedProducts']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 1): ?>first_item_of_line<?php endif; ?> <?php if ($this->_foreach['homeFeaturedProducts']['iteration'] > ( $this->_foreach['homeFeaturedProducts']['total'] - ( $this->_foreach['homeFeaturedProducts']['total'] % $this->_tpl_vars['nbItemsPerLine'] ) )): ?>last_line<?php endif; ?>">
          <p>
          <a href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
           <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['id_image']; ?>
-large.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"/>
          </a>
          </p>
          <h5>
            <a href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)); ?>
</a>
          </h5>
          <p><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo smartyTranslate(array('s' => 'More','mod' => 'homefeatured'), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 140, '...') : smarty_modifier_truncate($_tmp, 140, '...')); ?>
</a></p>
          <p class="pprice">
          <span><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['product']['price']), $this);?>
</span>
          <a href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo smartyTranslate(array('s' => 'View','mod' => 'homefeatured'), $this);?>
"><?php echo smartyTranslate(array('s' => 'View','mod' => 'homefeatured'), $this);?>
</a>
          <b id="categorie_product_view">
		  <?php if (( $this->_tpl_vars['product']['quantity'] > 0 || $this->_tpl_vars['product']['allow_oosp'] ) && $this->_tpl_vars['product']['customizable'] != 2): ?>
		   <a class="ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $this->_tpl_vars['product']['id_product']; ?>
" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?qty=1&amp;id_product=<?php echo $this->_tpl_vars['product']['id_product']; ?>
&amp;token=<?php echo $this->_tpl_vars['static_token']; ?>
&amp;add" title="<?php echo smartyTranslate(array('s' => 'Add to cart','mod' => 'homefeatured'), $this);?>
"><?php echo smartyTranslate(array('s' => 'cart','mod' => 'homefeatured'), $this);?>
</a>
		  <?php else: ?>
           <strike><?php echo smartyTranslate(array('s' => 'cart','mod' => 'homefeatured'), $this);?>
</strike>
		  <?php endif; ?>
          </b>
          </p>
         </li>
         <?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>
    <?php else: ?>
    <p><?php echo smartyTranslate(array('s' => 'No featured products','mod' => 'homefeatured'), $this);?>
</p>
<?php endif; ?>
</div>
<!-- /MODULE Home Featured Products -->