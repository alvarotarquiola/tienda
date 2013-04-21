<?php /* Smarty version 2.6.20, created on 2010-11-12 11:12:12
         compiled from /home/qcpjuuzu/public_html/tienda/themes/ultimate-webshop/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/ultimate-webshop/header.tpl', 19, false),array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/ultimate-webshop/header.tpl', 66, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['lang_iso']; ?>
">
<!-- | 
          \\\|///     
        \\  - -  //   
         (  @ @  )    
   _____OOo-(_)-oOOo_____________
 |                                |
 |  Realisation www.art-typo.com  |
 |      www.webgraphiste.com      |
 |    www.fashionconception.com   | 
 |         www.kreasite.fr        |
 |         06 80 56 35 41         |
 |                                |
 |                Version 1.0.0.8 |
  ________________________________
 | -->
	<head>
		<base href="<?php echo $this->_tpl_vars['protocol']; ?>
<?php echo ((is_array($_tmp=$_SERVER['HTTP_HOST'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php echo $this->_tpl_vars['base_dir']; ?>
" />
		<title><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</title>
<?php if (isset ( $this->_tpl_vars['meta_description'] )): ?>
		<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
		<meta http-equiv="Page-Exit" content="revealTrans(Duration=1,Transition=12)" />
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['meta_keywords'] )): ?>
		<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
<?php endif; ?>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta name="robots" content="<?php if (isset ( $this->_tpl_vars['nobots'] )): ?>no<?php endif; ?>index,follow" />
		<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['img_dir']; ?>
favicon.ico" />
<?php if (isset ( $this->_tpl_vars['css_files'] )): ?>
	<?php $_from = $this->_tpl_vars['css_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['css_uri'] => $this->_tpl_vars['media']):
?>
		<link href="<?php echo $this->_tpl_vars['css_uri']; ?>
" rel="stylesheet" type="text/css" media="<?php echo $this->_tpl_vars['media']; ?>
" />
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/tools.js"></script>
		<script type="text/javascript">
			//global JS variable
			var baseDir = '<?php echo $this->_tpl_vars['base_dir']; ?>
';
			var static_token = '<?php echo $this->_tpl_vars['static_token']; ?>
';
			var token = '<?php echo $this->_tpl_vars['token']; ?>
';
		</script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/jquery/jquery.pack.js"></script>
		<script type="text/javascript" src="http://art-typo.com/stats/php-stats.js.php"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/jquery/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['img_dir']; ?>
images.js"></script>
<?php if (isset ( $this->_tpl_vars['js_files'] )): ?>
	<?php $_from = $this->_tpl_vars['js_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['js_uri']):
?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_uri']; ?>
"></script>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>	
		<!--[if lt IE 7.]>
<script defer type="text/javascript" src="<?php echo $this->_tpl_vars['img_dir']; ?>
/pngfix.js"></script>
<![endif]--><?php echo $this->_tpl_vars['HOOK_HEADER']; ?>

	</head>	
	<body <?php if ($this->_tpl_vars['page_name']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"<?php endif; ?>>
<div id="page">

<!--  Début Menu -->
<div>
<h1 id="logo"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
logo.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a></h1>
				
<div id="ps_navigation_green">
<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
/navigation-green-corner-left.png"  style="background:#065C77;font-family:Arial;" class="ps_f_left" />
<ul>
<li style="padding-left: 0px;"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></li>
<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
about-us.php" title="<?php echo smartyTranslate(array('s' => 'About us'), $this);?>
"><b><?php echo smartyTranslate(array('s' => 'About us'), $this);?>
</b></a></li>
<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php" title="<?php echo smartyTranslate(array('s' => 'New products'), $this);?>
"><b><?php echo smartyTranslate(array('s' => 'New products'), $this);?>
</b></a></li>
<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php" title="<?php echo smartyTranslate(array('s' => 'Top sellers'), $this);?>
"><b><?php echo smartyTranslate(array('s' => 'Top sellers'), $this);?>
</b></a></li>
<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
mentions.php" title="<?php echo smartyTranslate(array('s' => 'Legal notice'), $this);?>
"><b><?php echo smartyTranslate(array('s' => 'Legal notice'), $this);?>
</b></a></li>
<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
contact-form.php" title="<?php echo smartyTranslate(array('s' => 'Contact us'), $this);?>
"><b><?php echo smartyTranslate(array('s' => 'Contact us'), $this);?>
</b></a></li>
</ul>
<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
/navigation-green-corner-right.png" style="background:#065C77;" class="ps_f_right" />
</div>
<div id="ps_navigation_blue">&nbsp;</div>
<!--  Fin Menu -->

<div id="header">

<br class="clear"/><br class="clear"/>
<?php echo $this->_tpl_vars['HOOK_TOP']; ?>

</div>
</div>
			<!-- Left -->
			<div id="left_column" class="column">
				<?php echo $this->_tpl_vars['HOOK_LEFT_COLUMN']; ?>

			</div>

			<!-- Center -->
			<div id="center_column">