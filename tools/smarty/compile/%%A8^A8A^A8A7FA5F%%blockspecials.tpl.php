<?php /* Smarty version 2.6.20, created on 2010-11-12 11:41:57
         compiled from /home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockspecials/blockspecials.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockspecials/blockspecials.tpl', 8, false),array('modifier', 'truncate', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockspecials/blockspecials.tpl', 11, false),array('function', 't', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockspecials/blockspecials.tpl', 12, false),array('function', 'displayWtPrice', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockspecials/blockspecials.tpl', 14, false),array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/blockspecials/blockspecials.tpl', 20, false),)), $this); ?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="tabdiv">
<?php if ($this->_tpl_vars['specials']): ?>
        
<?php $_from = $this->_tpl_vars['specials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['special']):
        $this->_foreach['products']['iteration']++;
?><ul>
   
            <li>
                <a href="<?php echo $this->_tpl_vars['special']['link']; ?>
"><img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['special']['id_image']; ?>
-animated_tab.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['special']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['special']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a>
            </li>
            <li>
                <h3><a href="<?php echo $this->_tpl_vars['special']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['special']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['special']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...') : smarty_modifier_truncate($_tmp, 40, '...')); ?>
</a></h3></li>
             <?php if ($this->_tpl_vars['special']['description_short']): ?><li><?php echo smartyTruncate(array('text' => $this->_tpl_vars['special']['description_short'],'length' => '50','strip' => 'true','encode' => 'true'), $this);?>
</li><?php endif; ?>
         <li>
                <span class="price-discount"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['special']['price_without_reduction']), $this);?>
</span>
                <?php if ($this->_tpl_vars['special']['reduction_percent']): ?><span class="reduction">(-<?php echo $this->_tpl_vars['special']['reduction_percent']; ?>
%)</span><?php endif; ?>
                <span class="price"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['special']['price']), $this);?>
</span>
            </li>
</ul><?php endforeach; endif; unset($_from); ?>
        
        <div class="see-all-link"> <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
prices-drop.php" title="<?php echo smartyTranslate(array('s' => 'All specials','mod' => 'blockspecials'), $this);?>
" class="button_large"><?php echo smartyTranslate(array('s' => 'All specials','mod' => 'blockspecials'), $this);?>
</a></div>
<?php else: ?>
        <p><?php echo smartyTranslate(array('s' => 'No specials at this time','mod' => 'blockspecials'), $this);?>
</p>
<?php endif; ?>

</div>
<!-- /MODULE Block specials -->