<?php /* Smarty version 2.6.20, created on 2011-03-01 15:28:58
         compiled from /home/qcpjuuzu/public_html/tienda/themes/emerald/product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/emerald/product.tpl', 7, false),array('function', 'convertPrice', '/home/qcpjuuzu/public_html/tienda/themes/emerald/product.tpl', 93, false),array('function', 'counter', '/home/qcpjuuzu/public_html/tienda/themes/emerald/product.tpl', 252, false),array('modifier', 'truncate', '/home/qcpjuuzu/public_html/tienda/themes/emerald/product.tpl', 257, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
getimage.js"></script>
<?php if ($this->_tpl_vars['errors']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<!-- Navigationbar -->
	<div class="nav_bar">
		<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a> <?php echo $this->_tpl_vars['navigation_pipe']; ?>
 <?php echo $this->_tpl_vars['path']; ?>

	</div>
	
	
	<div class="product_properties">
	
		<!-- Product img-->
		<div class="product_img">
			<?php if ($this->_tpl_vars['have_image']): ?>
				<img id="bigpic" src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['cover']['id_image']; ?>
-large.jpg" alt="<?php echo $this->_tpl_vars['product']->link_rewrite; ?>
" title="<?php echo $this->_tpl_vars['product']->link_rewrite; ?>
" 
				onclick="window.open('zoom.php?id_image='+getE('bigpic').id_image, '', 'width=auto, height=auto, resizable=yes');" onmouseover="style.cursor='pointer';" />
			<?php else: ?>
				<img id="bigpic" src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['lang_iso']; ?>
-default-large.jpg" alt="<?php echo $this->_tpl_vars['product']->link_rewrite; ?>
" title="<?php echo $this->_tpl_vars['product']->link_rewrite; ?>
" />
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['cover']['id_image_only']): ?>
				<script type="text/javascript">
					if (getE('bigpic')) getE('bigpic').id_image = <?php echo $this->_tpl_vars['cover']['id_image_only']; ?>
;
				</script>
			<?php endif; ?>
			
			<!-- Muti-image manager -->
			<?php if (count ( $this->_tpl_vars['images'] ) > 1): ?>
				<script type="text/javascript">
					var imgi = 0;
					var reg = new RegExp('\-', 'g');
					var imga = '<?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['image']):
?><?php echo $this->_tpl_vars['image']['id_image']; ?>
-<?php endforeach; endif; unset($_from); ?>'.slice(0, -1).split(reg);
					var imgp = '<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']->id; ?>
';
				</script>
			
				<div class="img_zoom">
					<div class="img_prev">
						<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
arrow_prev.gif" alt="<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
" onclick="getimage(-1);" onmouseover="style.cursor='pointer';" />
					</div> 
					
					<div class="img_next">
						<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
arrow_next.gif" alt="<?php echo smartyTranslate(array('s' => 'Next'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Next'), $this);?>
" onclick="getimage(1);" onmouseover="style.cursor='pointer';" />
					</div>
					
					<div onclick="window.open('zoom.php?id_image='+getE('bigpic').id_image, '', 'width=auto, height=auto, resizable=yes');" onmouseover="style.cursor='pointer';">
						<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
zoom.gif" alt="<?php echo smartyTranslate(array('s' => 'Zoom'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Zoom'), $this);?>
" /> <?php echo smartyTranslate(array('s' => 'View full size'), $this);?>

					</div>
					<div class="other_views">
						<?php echo smartyTranslate(array('s' => 'OTHER VIEWS'), $this);?>

					</div>
					<div>
						<?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['image']):
?>
							<img id="minImage_<?php echo $this->_tpl_vars['image']['id_image']; ?>
" class="min_image" src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']->id; ?>
-<?php echo $this->_tpl_vars['image']['id_image']; ?>
-small.jpg" alt="<?php echo $this->_tpl_vars['image']['legend']; ?>
" title="<?php echo $this->_tpl_vars['image']['legend']; ?>
" onclick="onClickImage('<?php echo $this->_tpl_vars['image']['id_image']; ?>
', '<?php echo $this->_tpl_vars['image']['legend']; ?>
', '<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']->id; ?>
-<?php echo $this->_tpl_vars['image']['id_image']; ?>
-large.jpg')" />
						<?php endforeach; endif; unset($_from); ?>
						<script type="text/javascript">onClickImage('<?php echo $this->_tpl_vars['mainImage']['id_image']; ?>
', '<?php echo $this->_tpl_vars['mainImage']['legend']; ?>
', '<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']->id; ?>
-<?php echo $this->_tpl_vars['mainImage']['id_image']; ?>
-large.jpg');</script>
					</div>
				</div>
			<?php endif; ?>
		</div>


		<!-- Product name -->
		<h1 class="product_name" style="margin-left: <?php echo $this->_tpl_vars['imgWidth']+8; ?>
px"><?php echo $this->_tpl_vars['product']->name; ?>
</h1>

		<!-- Product description -->
		<?php if ($this->_tpl_vars['product']->description_short): ?>
			<div class="product_description" style="margin-left: <?php echo $this->_tpl_vars['imgWidth']+10; ?>
px">
				<?php echo $this->_tpl_vars['product']->description_short; ?>

			</div>
		<?php endif; ?>
		
		<!-- Last quantities -->
		<div class="last_quantities" id="last_qties">
			<?php if (! $this->_tpl_vars['allow_oosp'] && $this->_tpl_vars['product']->quantity && $this->_tpl_vars['product']->quantity < $this->_tpl_vars['last_qties']): ?>
				<?php echo smartyTranslate(array('s' => 'Warning: Last pieces available!'), $this);?>

			<?php endif; ?>
		</div>
		
		<!-- Price -->
		<div class="product_prices">
			<!-- Price -->
			<div class="product_price">
				<!-- Sale -->
				<?php if ($this->_tpl_vars['product']->on_sale != 0): ?>
					<div class="on_sale">
						<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
<?php echo $this->_tpl_vars['lang_iso']; ?>
/onsale.gif" alt="<?php echo smartyTranslate(array('s' => 'On sale !'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'On sale !'), $this);?>
" />
					</div>
				<?php endif; ?>
				
				<!-- Product price with tax -->
				<div class="big_price" id="price">
					<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPrice(true,'NULL',2)), $this);?>

				</div>
				
				<!-- Product price without tax -->
				<?php if ($this->_tpl_vars['displayPreTax'] && $this->_tpl_vars['display_ht'] && $this->_tpl_vars['product']->id_tax): ?>
					<div>
						<span id="pretax-price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPrice(false,'NULL',2)), $this);?>
</span>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'pre-tax'), $this);?>

					</div>
				<?php endif; ?>
				
				<!-- Discount percent -->
				<?php if ($this->_tpl_vars['product']->reduction_percent != 0): ?>
					<div class="percent_discount">
						(- <?php echo $this->_tpl_vars['product']->reduction_percent; ?>
 %)
						<span class="strike" id="price_without_reduct">
						<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPriceWithoutReduct()), $this);?>

						</span>
					</div>
				<?php endif; ?>

				<!-- Discount price -->
				<?php if ($this->_tpl_vars['product']->reduction_price != 0): ?>
					<div class="price_discount">
						(- <?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPrice(true,'NULL',2,'NULL',true)), $this);?>
)
						<span class="strike" id="price_without_reduct">
						<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPrice(true,'NULL',2,'NULL',false,false)), $this);?>

						</span>
					</div>
				<?php endif; ?>
				
				<!-- Eco tax -->
				<span class="ecotax" id="ecotax">
					<?php if ($this->_tpl_vars['product']->ecotax != 0): ?>
						<?php echo smartyTranslate(array('s' => 'Green tax (if any)'), $this);?>
 : <?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->ecotax), $this);?>

					<?php endif; ?>
				</span>
			</div>		
			
		</div>

		<script type="text/javascript">
			var imgdir = '<?php echo $this->_tpl_vars['img_dir']; ?>
';
			var langiso = '<?php echo $this->_tpl_vars['lang_iso']; ?>
';
			var nbpiece = <?php echo $this->_tpl_vars['product']->quantity; ?>
;
			var pieces = '<?php echo smartyTranslate(array('s' => 'in stock','js' => 1), $this);?>
';
			var piece  = '<?php echo smartyTranslate(array('s' => 'in stock','js' => 1), $this);?>
';
			var doesntexist = '<?php echo smartyTranslate(array('s' => 'This product does not exist with those options','js' => 1), $this);?>
';
			var doesntexist_but = '<?php echo smartyTranslate(array('s' => 'but is available with others','js' => 1), $this);?>
';
			var outofstock = '<?php echo smartyTranslate(array('s' => 'restocking','js' => 1), $this);?>
';
			var oosp = '<?php echo $this->_tpl_vars['allow_oosp']; ?>
';
			var displayQties = <?php if ($this->_tpl_vars['display_qties']): ?><?php echo $this->_tpl_vars['display_qties']; ?>
<?php else: ?>0<?php endif; ?>;
			var availabilityMessage = '<?php echo $this->_tpl_vars['product']->availability; ?>
';
			var no_tax = 1;
			var taxRate = <?php echo $this->_tpl_vars['product']->tax_rate; ?>
;
		</script>
		
		<div class="product_attributs">
			<form name="addtocart" action="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php" method="post">
			<?php if (isset ( $this->_tpl_vars['groups'] )): ?>
				<!-- Attributs JS -->
				<script type="text/javascript">
					currency_sign = '<?php echo $this->_tpl_vars['currency']->sign; ?>
';
					currency_rate = '<?php echo $this->_tpl_vars['currency']->conversion_rate; ?>
';
					currency_format = '<?php echo $this->_tpl_vars['currency']->format; ?>
';
					img_prod_dir = '<?php echo $this->_tpl_vars['img_prod_dir']; ?>
';
					id_product = '<?php echo $this->_tpl_vars['product']->id; ?>
';
					<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_attribute_group'] => $this->_tpl_vars['g']):
?>
						addSelect(<?php echo $this->_tpl_vars['id_attribute_group']; ?>
, 'group_<?php echo $this->_tpl_vars['id_attribute_group']; ?>
');
					<?php endforeach; endif; unset($_from); ?>
					<?php $_from = $this->_tpl_vars['combinaisons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ipa'] => $this->_tpl_vars['h']):
?>
						addCombinaison(<?php echo $this->_tpl_vars['ipa']; ?>
, new Array(<?php echo $this->_tpl_vars['h']['list']; ?>
), <?php echo $this->_tpl_vars['h']['quantity']; ?>
, <?php echo $this->_tpl_vars['h']['price']; ?>
, <?php if ($this->_tpl_vars['h']['ecotax'] != 0): ?><?php echo $this->_tpl_vars['h']['ecotax']; ?>
<?php else: ?>0<?php endif; ?>, <?php echo $this->_tpl_vars['h']['id_image']; ?>
);
					<?php endforeach; endif; unset($_from); ?>
					product_price = <?php echo $this->_tpl_vars['product']->getPrice(true,'NULL',2); ?>
;
					product_price_without_reduct = <?php echo $this->_tpl_vars['product']->getPriceWithoutReduct(); ?>
;
					reduction_percent = <?php echo $this->_tpl_vars['product']->reduction_percent; ?>
;
					reduction_price = <?php if ($this->_tpl_vars['product']->reduction_percent): ?>0<?php else: ?><?php echo $this->_tpl_vars['product']->getPrice(true,'NULL',2,'NULL',true); ?>
<?php endif; ?>;
					var last_qties = <?php echo $this->_tpl_vars['last_qties']; ?>
;
					no_tax = '<?php echo $this->_tpl_vars['no_tax']; ?>
';
					var noAttribut = 0;
				</script>
				<!-- Attributs -->
				<div class="attributs">
					<!-- Attributs select -->
					<div class="attributs_select">
						<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_attribute_group'] => $this->_tpl_vars['g']):
?>
							<select name="group_<?php echo $this->_tpl_vars['id_attribute_group']; ?>
" id="group_<?php echo $this->_tpl_vars['id_attribute_group']; ?>
" onchange="javascript:findCombinaison();">
								<?php $_from = $this->_tpl_vars['g']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_attribute'] => $this->_tpl_vars['h']):
?>
									<option value="<?php echo $this->_tpl_vars['id_attribute']; ?>
"<?php if ($this->_tpl_vars['g']['default'] == $this->_tpl_vars['id_attribute']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['h']; ?>
</option>
								<?php endforeach; endif; unset($_from); ?>
							</select><br />
						<?php endforeach; endif; unset($_from); ?>
					</div>
					<!-- Attributs description -->
					<div class="attributs_description">
						<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_attribute_group'] => $this->_tpl_vars['g']):
?>
							<?php echo $this->_tpl_vars['g']['name']; ?>
 :<br />
						<?php endforeach; endif; unset($_from); ?>
						<!-- JS -->
						<script type="text/javascript">updatePrice(); updateEcotax();</script>
					</div>
				</div>
			<?php endif; ?>
				<!-- Add to cart form -->
				<div class="add_to_cart_17">
					<span id="add_to_cart">
					<!-- Quantity -->
					<?php echo smartyTranslate(array('s' => 'Quantity'), $this);?>
 :
					<input type="hidden" name="id_product_attribute" id="id_product_attribute" value="" />
					<input type="text" id="qty" name="qty" size="2" value="1" maxlength="3" onkeyup="javascript:checkQty();"/>
					<!-- Add to cart -->
					<input type="hidden" name="id_product" value="<?php echo $this->_tpl_vars['product']->id; ?>
" />
					<input type="hidden" name="add" value="1" />
					<input type="image" name="Submit" src="<?php echo $this->_tpl_vars['img_dir']; ?>
<?php echo $this->_tpl_vars['lang_iso']; ?>
/btn-add.gif" id="add_to_cart_btn" />
					</span>
				</div>
			</form>
			<!-- Availability -->
			<div id="divqtyav" class="product_availability">
    		<?php echo smartyTranslate(array('s' => 'Availability'), $this);?>
 :
				<span id="qtyav"></span>
				<script type="text/javascript">
				<?php if (isset ( $this->_tpl_vars['groups'] )): ?>
					findCombinaison();
				<?php else: ?>
					writeAvailability();
				<?php endif; ?>
				</script>
			</div>
		</div>
		
	</div>

	<!-- User interaction -->
	<div class="user_interaction clear">
		<?php if ($this->_tpl_vars['hook_extra_nb']): ?><h2 class="product"><?php echo smartyTranslate(array('s' => 'Action'), $this);?>
</h2><?php endif; ?>
		<!-- <img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/add_disabled.png" alt="" title="" class="bottom" /><?php echo smartyTranslate(array('s' => 'Add to my wishlist'), $this);?>
<br /> -->
		<?php echo $this->_tpl_vars['HOOK_EXTRA']; ?>

	</div>
	
	<!-- Full description -->
	<?php if ($this->_tpl_vars['product']->description): ?>
		<h2 class="full_description"><?php echo smartyTranslate(array('s' => 'More details about'), $this);?>
 "<?php echo $this->_tpl_vars['product']->name; ?>
"</h2>
		<div class="full_description">
			<?php echo $this->_tpl_vars['product']->description; ?>

		</div>
	<?php endif; ?>
	
	<!-- Product's features -->
	<?php if ($this->_tpl_vars['features']): ?>
		<h2 class="full_description"><?php echo smartyTranslate(array('s' => 'Product\'s features'), $this);?>
</h2>
		<?php $_from = $this->_tpl_vars['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['feature']):
?>
			<b><?php echo $this->_tpl_vars['feature']['name']; ?>
</b> : <?php echo $this->_tpl_vars['feature']['value']; ?>
<br />
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	
	<!-- Accessories -->
	<?php if ($this->_tpl_vars['accessories']): ?>
		<div class="product_accessories">
			<h2 class="product"><?php echo smartyTranslate(array('s' => 'Accessories'), $this);?>
</h2>
			<?php echo smarty_function_counter(array('assign' => 'i','start' => 0,'skip' => 1), $this);?>

			<?php $_from = $this->_tpl_vars['accessories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['accessory']):
?>
				<div class="product_accessory f_left<?php if (( $this->_tpl_vars['i'] % 4 == 0 )): ?> clear<?php endif; ?>">
					<a href="<?php echo $this->_tpl_vars['accessory']['link']; ?>
">
						<img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['accessory']['id_image']; ?>
-medium.jpg" alt="<?php echo $this->_tpl_vars['accessory']['name']; ?>
" title="<?php echo $this->_tpl_vars['accessory']['name']; ?>
" />
						<div class="accessory_name"><?php echo ((is_array($_tmp=$this->_tpl_vars['accessory']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
</div>
						<span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['accessory']['price']), $this);?>
</span>
					</a>
				</div>
				<?php echo smarty_function_counter(array(), $this);?>

			<?php endforeach; endif; unset($_from); ?>
		</div>
	<?php endif; ?>
	
<?php endif; ?>