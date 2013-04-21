<?php /* Smarty version 2.6.20, created on 2011-03-04 14:35:50
         compiled from /home/qcpjuuzu/public_html/tienda/themes/PrestashopGrey/modules/blockpermanentlinks/blockpermanentlinks-header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/PrestashopGrey/modules/blockpermanentlinks/blockpermanentlinks-header.tpl', 5, false),array('modifier', 'addslashes', '/home/qcpjuuzu/public_html/tienda/themes/PrestashopGrey/modules/blockpermanentlinks/blockpermanentlinks-header.tpl', 9, false),)), $this); ?>
<!-- Block permanent links module HEADER -->
<div id="permalinks">
	<div class="permalinksLeftBg"></div>
<ul id="header_links">
	<li id="header_link_home"><a href="index.php" title="home"><span><?php echo smartyTranslate(array('s' => 'home'), $this);?>
</span></a></li>
	<li id="header_link_contact"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php" title="<?php echo smartyTranslate(array('s' => 'contact','mod' => 'blockpermanentlinks'), $this);?>
"><span><?php echo smartyTranslate(array('s' => 'contact','mod' => 'blockpermanentlinks'), $this);?>
</span></a></li>
	<li id="header_link_sitemap"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
sitemap.php" title="<?php echo smartyTranslate(array('s' => 'sitemap','mod' => 'blockpermanentlinks'), $this);?>
"><span><?php echo smartyTranslate(array('s' => 'sitemap','mod' => 'blockpermanentlinks'), $this);?>
</span></a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('<?php echo $this->_tpl_vars['come_from']; ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)))) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<span><?php echo smartyTranslate(array('s' => 'bookmark','mod' => 'blockpermanentlinks'), $this);?>
</span>');</script>
	</li>
</ul>
</div>
<!-- /Block permanent links module HEADER -->