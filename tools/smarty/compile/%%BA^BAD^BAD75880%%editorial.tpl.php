<?php /* Smarty version 2.6.20, created on 2010-11-12 11:41:57
         compiled from /home/qcpjuuzu/public_html/tienda/themes/temporary/modules/editorial/editorial.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/editorial/editorial.tpl', 5, false),array('modifier', 'stripslashes', '/home/qcpjuuzu/public_html/tienda/themes/temporary/modules/editorial/editorial.tpl', 5, false),)), $this); ?>
<!-- Module Editorial -->
<div id="editorial_block_center" class="editorial_block">

    
	<?php if ($this->_tpl_vars['xml']->body->home_logo_link): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['xml']->body->home_logo_link)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['xml']->body->{(($_var=$this->_tpl_vars['title']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")})) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php endif; ?>
		<?php if ($this->_tpl_vars['homepage_logo']): ?><img src="<?php echo $this->_tpl_vars['this_path']; ?>
homepage_logo.jpg" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['xml']->body->{(($_var=$this->_tpl_vars['title']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")})) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php endif; ?><?php if ($this->_tpl_vars['xml']->body->home_logo_link): ?></a><?php endif; ?>
        <div class="editorial_container">
	
	<?php if ($this->_tpl_vars['xml']->body->{(($_var=$this->_tpl_vars['logo_subheading']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")}): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['xml']->body->{(($_var=$this->_tpl_vars['logo_subheading']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")})) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?> 
	<?php if ($this->_tpl_vars['xml']->body->{(($_var=$this->_tpl_vars['title']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")}): ?><h2><?php echo ((is_array($_tmp=$this->_tpl_vars['xml']->body->{(($_var=$this->_tpl_vars['title']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")})) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</h2><?php endif; ?>
	<?php if ($this->_tpl_vars['xml']->body->{(($_var=$this->_tpl_vars['subheading']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")}): ?><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['xml']->body->{(($_var=$this->_tpl_vars['subheading']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")})) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</h3><?php endif; ?>
	</div>
</div>
<!-- /Module Editorial -->