<?php /* Smarty version 2.6.20, created on 2011-04-15 16:12:18
         compiled from /home/qcpjuuzu/public_html/Tienda-10/modules/blockcurrencies/blockcurrencies.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/Tienda-10/modules/blockcurrencies/blockcurrencies.tpl', 15, false),)), $this); ?>
<!-- Block currencies module -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['module_dir']; ?>
blockcurrencies.js"></script>
<div id="currencies_block_top">
	<form id="setCurrency" action="<?php echo $this->_tpl_vars['request_uri']; ?>
" method="post">
		<ul>
			<?php $_from = $this->_tpl_vars['currencies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f_currency']):
?>
				<li <?php if ($this->_tpl_vars['id_currency_cookie'] == $this->_tpl_vars['f_currency']['id_currency']): ?>class="selected"<?php endif; ?>>
					<a href="javascript:setCurrency(<?php echo $this->_tpl_vars['f_currency']['id_currency']; ?>
);" title="<?php echo $this->_tpl_vars['f_currency']['name']; ?>
"><?php echo $this->_tpl_vars['f_currency']['sign']; ?>
</a>
				</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		<p>
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
			<?php echo smartyTranslate(array('s' => 'Currency','mod' => 'blockcurrencies'), $this);?>

		</p>
	</form>
</div>
<!-- /Block currencies module -->