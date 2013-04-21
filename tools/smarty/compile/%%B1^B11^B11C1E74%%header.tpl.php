<?php /* Smarty version 2.6.20, created on 2010-11-12 11:20:49
         compiled from /home/qcpjuuzu/public_html/tienda/themes/black-diamond/header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['lang_iso']; ?>
">
	<head>
		<base href="<?php echo $this->_tpl_vars['protocol']; ?>
<?php echo $_SERVER['HTTP_HOST']; ?>
<?php echo $this->_tpl_vars['base_dir']; ?>
" />
		<title><?php echo $this->_tpl_vars['meta_title']; ?>
</title>
<?php if (isset ( $this->_tpl_vars['meta_description'] )): ?>
		<meta name="description" content="<?php echo $this->_tpl_vars['meta_description']; ?>
" />
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['meta_keywords'] )): ?>
		<meta name="keywords" content="<?php echo $this->_tpl_vars['meta_keywords']; ?>
" />
<?php endif; ?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="<?php if (isset ( $this->_tpl_vars['nobots'] )): ?>no<?php endif; ?>index,follow" />
		<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['img_dir']; ?>
favicon.ico" />
<?php $_from = $this->_tpl_vars['css_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['css_uri'] => $this->_tpl_vars['media']):
?>
		<link href="<?php echo $this->_tpl_vars['css_uri']; ?>
" rel="stylesheet" type="text/css" media="<?php echo $this->_tpl_vars['media']; ?>
" />
<?php endforeach; endif; unset($_from); ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/tools.js"></script>
		<script type="text/javascript">
			//global JS variable
			var baseDir = '<?php echo $this->_tpl_vars['base_dir']; ?>
';
		</script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/jquery/jquery.pack.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/jquery/jquery.easing.1.3.js"></script>
<?php $_from = $this->_tpl_vars['js_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['js_uri']):
?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_uri']; ?>
"></script>
<?php endforeach; endif; unset($_from); ?>
		<?php echo $this->_tpl_vars['HOOK_HEADER']; ?>

	</head>
	
	<body <?php if ($this->_tpl_vars['page_name']): ?>id="<?php echo $this->_tpl_vars['page_name']; ?>
"<?php endif; ?>>
		<div id="page">

			<!-- Header -->
			<div>
					
				<div id="ps_navigation_green">
			<img src="themes/black-diamond/img/navigation-black-corner-left.png"  style="background:#000;font-family:Arial;" alt="" class="ps_f_left" />
			<ul>
				<li style="padding-left: 0px;"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="Accueil de la boutique">Accueil</a></li>
				<li>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
about-us.php" title="Présentation">Qui sommes nous ?</a></li>
				<li>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php" title="Nos derniers produits">Nouveaux articles</a></li>
				<li>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php" title="Les articles les plus vendu">Meilleures ventes</a></li>
				<li>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
prices-drop.php" title="Découvrez nos promotions spontanées">Promotions</a></li>
				<li>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
contact-form.php" title="Nous contacter">Contact</a></li>
			</ul>
			<img src="themes/black-diamond/img/navigation-black-corner-right.png" style="background:#000;" alt="" class="ps_f_right" />
		</div>
		<div id="ps_navigation_blue">&nbsp;</div>
		<h1 id="logo"><!--<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo $this->_tpl_vars['shop_name']; ?>
">--><img src="<?php echo $this->_tpl_vars['base_dir']; ?>
img/logo.jpg" alt="<?php echo $this->_tpl_vars['shop_name']; ?>
" /></a></h1>
				<div id="header">
					<?php echo $this->_tpl_vars['HOOK_TOP']; ?>

				</div>
			</div>
			<!-- Left -->
			<div id="left_column" class="column">
				<?php echo $this->_tpl_vars['HOOK_LEFT_COLUMN']; ?>

			</div>

			<!-- Center -->
			<div id="center_column">