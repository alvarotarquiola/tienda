<?php /* Smarty version 2.6.20, created on 2010-11-12 11:16:52
         compiled from /home/qcpjuuzu/public_html/tienda/themes/swanky/header.tpl */ ?>
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Swanky
Description: A three-column, fixed-width design suitable for news sites and blogs.
Version    : 1.0
Released   : 20080227


Redesign for prestashop : [hans]  contacto@todoprestashop.com
spanish buttons		: jose miguel  2creations.com
Version	            	: 1.0
Released		: 20080310              
More in        		: www.todoprestashop.com
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['lang_iso']; ?>
" lang="<?php echo $this->_tpl_vars['lang_iso']; ?>
">
<head>
	<base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>
<?php echo $this->_tpl_vars['base_dir']; ?>
" />
	<title><?php echo $this->_tpl_vars['meta_title']; ?>
</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php if (isset ( $this->_tpl_vars['meta_description'] )): ?><meta name="description" content="<?php echo $this->_tpl_vars['meta_description']; ?>
" /><?php endif; ?>
	<?php if (isset ( $this->_tpl_vars['meta_keywords'] )): ?><meta name="keywords" content="<?php echo $this->_tpl_vars['meta_keywords']; ?>
" /><?php endif; ?>
	<meta name="robots" content="<?php if (isset ( $this->_tpl_vars['nobots'] )): ?>no<?php endif; ?>index,follow" />
	<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['img_dir']; ?>
favicon.ico" />
	<link href="<?php echo $this->_tpl_vars['css_dir']; ?>
layout.css" rel="stylesheet" type="text/css" /><!-- layout freecsstemplates.org -->
	<link href="<?php echo $this->_tpl_vars['css_dir']; ?>
_style.css" rel="stylesheet" type="text/css" /><!-- css shop prestashop -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
layer.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/tools.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/attributesFront.js"></script>
</head>

<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
">Homepage</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
section1.php">Section 1</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
section2.php">Section 2</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
about-us.php">About</a></li>
			<li class="last"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
contact-form.php">Contact</a></li>
		</ul>
	</div>
</div>
<div id="logo">
	<h1 class="real_h1" title="<?php echo $this->_tpl_vars['shop_name']; ?>
">
	 <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo $this->_tpl_vars['shop_name']; ?>
"><img alt="<?php echo $this->_tpl_vars['shop_name']; ?>
" src="<?php echo $this->_tpl_vars['base_dir']; ?>
img/logo.jpg"/></a>	
	</h1>
</div>

<!-- end header -->
<hr />
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"><a href="#">Welcome to <?php echo $this->_tpl_vars['shop_name']; ?>
</a></h1>
			<br />