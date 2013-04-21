<?php /* Smarty version 2.6.20, created on 2010-11-02 09:44:01
         compiled from /home/qcpjuuzu/public_html/tienda/themes/emerald/contact-form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/emerald/contact-form.tpl', 5, false),array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/emerald/contact-form.tpl', 26, false),array('modifier', 'stripslashes', '/home/qcpjuuzu/public_html/tienda/themes/emerald/contact-form.tpl', 26, false),)), $this); ?>
<br />
<h1 id="contacto"><span>Contacto</span></h1>
<br /><br />
<?php if (isset ( $this->_tpl_vars['confirmation'] )): ?>
	<p><?php echo smartyTranslate(array('s' => 'Your message has been successfully sent to our team'), $this);?>
.</p>
<?php else: ?>
	<p class="bold"><?php echo smartyTranslate(array('s' => 'For questions about an order or for information about our products'), $this);?>
.</p>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<fieldset><legend><?php echo smartyTranslate(array('s' => 'Send a message'), $this);?>
</legend>
		<form action="<?php echo $this->_tpl_vars['request_uri']; ?>
" method="post">
			<label><?php echo smartyTranslate(array('s' => 'Subject'), $this);?>
</label>
			<div class="margin-form">
				<select id="id_contact" name="id_contact" onChange='showElemFromSelect("id_contact", "desc_contact")'>
					<option value="0">-- <?php echo smartyTranslate(array('s' => 'Choose'), $this);?>
 --</option>
					<?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contact']):
?>
					<option value="<?php echo $this->_tpl_vars['contact']['id_contact']; ?>
" <?php if (isset ( $_POST['id_contact'] ) && $_POST['id_contact'] == $this->_tpl_vars['contact']['id_contact']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['contact']['name']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</div>
			<?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contact']):
?>
				 <fieldset id="desc_contact<?php echo $this->_tpl_vars['contact']['id_contact']; ?>
" style="display:none;margin-bottom:15px;margin-left:10%;margin-right:10%;"><legend><?php echo smartyTranslate(array('s' => 'Description'), $this);?>
</legend><?php echo $this->_tpl_vars['contact']['description']; ?>
</fieldset>
			<?php endforeach; endif; unset($_from); ?>
			<div class="clear"></div>
			<label><?php echo smartyTranslate(array('s' => 'E-mail address'), $this);?>
</label>
			<div class="margin-form">
				<input type="text" name="from" value="<?php if (isset ( $_POST['from'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['from'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" />
			</div>
			<div class="clear"></div>
			<label><?php echo smartyTranslate(array('s' => 'Message'), $this);?>
</label>
			<div class="margin-form">
				<textarea name="message" rows="7" cols="35"><?php if (isset ( $_POST['message'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?></textarea>
			</div>
			<div class="clear"></div>
			<div class="center space">
				<input type="submit" name="submitMessage" value="<?php echo smartyTranslate(array('s' => 'Send'), $this);?>
" />
			</div>
		</form>
	</fieldset>
<?php endif; ?>