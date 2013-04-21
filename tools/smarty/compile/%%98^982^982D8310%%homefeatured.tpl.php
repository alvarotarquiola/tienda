<?php /* Smarty version 2.6.20, created on 2010-11-12 11:41:57
         compiled from /home/qcpjuuzu/public_html/tienda/themes/temporary/modules/homefeatured/homefeatured.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/homefeatured/homefeatured.tpl', 2, false),array('function', 'convertPrice', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/homefeatured/homefeatured.tpl', 17, false),array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/homefeatured/homefeatured.tpl', 38, false),array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/homefeatured/homefeatured.tpl', 16, false),array('modifier', 'strip_tags', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/homefeatured/homefeatured.tpl', 16, false),array('modifier', 'truncate', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/homefeatured/homefeatured.tpl', 16, false),)), $this); ?>
<!-- MODULE Home Featured Products -->
<?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => false), $this);?>

<!--test begin -->
<link href="<?php echo $this->_tpl_vars['content_dir']; ?>
modules/homefeatured/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
modules/homefeatured/js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
modules/homefeatured/js/coda-slider.1.1.1.pack.js"></script>
<div id="page-wrap">
	  <?php if (isset ( $this->_tpl_vars['products'] ) && $this->_tpl_vars['products']): ?>										
	<div class="slider-wrap">
	  <div id="main-photo-slider" class="csw">
			<div class="panelContainer">
		<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['homeFeaturedProducts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['homeFeaturedProducts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['homeFeaturedProducts']['iteration']++;
?>
        
				<div class="panel" title="Panel <?php echo smarty_function_counter(array(), $this);?>
">				
					<div class="product_data">
                      <p><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
"><img class="product_image" src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'home'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
" /></a> <a class="product_name" href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a><br /><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, '...') : smarty_modifier_truncate($_tmp, 200, '...')); ?>
</a></p>
                      <p><span class="price"><?php if (! $this->_tpl_vars['priceDisplay']): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price']), $this);?>
<?php else: ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price_tax_exc']), $this);?>
<?php endif; ?></span></p>
                      
                    </div>
                </div>
         <?php endforeach; endif; unset($_from); ?>
			</div>
           
	  </div>

	  <!--Begin load thumbs  -->
      <?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => false), $this);?>
  
		<div id="movers-row" class="thumbcontainer">
        <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['homeFeaturedProducts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['homeFeaturedProducts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['homeFeaturedProducts']['iteration']++;
?>
        	<div class="bg_thumb">
           <a href="#<?php echo smarty_function_counter(array(), $this);?>
" class="cross-link"><img class="nav-thumb" src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'medium'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
" /> </a>          
        	</div> 		
          <?php endforeach; endif; unset($_from); ?>			
		</div>
		<!--end load thumbs  -->
	</div>
	<?php else: ?>
  <p><?php echo smartyTranslate(array('s' => 'No featured products','mod' => 'homefeatured'), $this);?>
</p>
	<?php endif; ?>
</div>
 

<!-- /MODULE Home Featured Products -->