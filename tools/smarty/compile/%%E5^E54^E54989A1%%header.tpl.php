<?php /* Smarty version 2.6.20, created on 2010-11-12 12:08:58
         compiled from /home/qcpjuuzu/public_html/tienda/themes/isant-v2/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/qcpjuuzu/public_html/tienda/themes/isant-v2/header.tpl', 4, false),array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/isant-v2/header.tpl', 70, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</title>
<?php if (isset ( $this->_tpl_vars['meta_description'] ) && $this->_tpl_vars['meta_description']): ?>
		<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['meta_keywords'] ) && $this->_tpl_vars['meta_keywords']): ?>
		<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
<?php endif; ?>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset ( $this->_tpl_vars['nobots'] )): ?>no<?php endif; ?>index,follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
favicon.ico" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
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
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/tools.js"></script>
		<script type="text/javascript">
			var baseDir = '<?php echo $this->_tpl_vars['content_dir']; ?>
';
			var static_token = '<?php echo $this->_tpl_vars['static_token']; ?>
';
			var token = '<?php echo $this->_tpl_vars['token']; ?>
';
			var priceDisplayPrecision = <?php echo $this->_tpl_vars['priceDisplayPrecision']*$this->_tpl_vars['currency']->decimals; ?>
;
		</script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/jquery/jquery-1.2.6.pack.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/jquery/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/jquery/jquery.hotkeys-0.7.8-packed.js"></script>
<?php if (isset ( $this->_tpl_vars['js_files'] )): ?>
	<?php $_from = $this->_tpl_vars['js_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['js_uri']):
?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_uri']; ?>
"></script>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
		<?php echo $this->_tpl_vars['HOOK_HEADER']; ?>

	<!--[if lte IE 6]>
	<?php echo '
	<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['content_dir']; ?>
<?php echo 'js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
	</script>
	'; ?>

	<![endif]--> 
	<?php echo '
	<style type="text/css"> 
		html {height:100%;}
		body {height:100%; margin:0; padding:0;}
		#bg {position:fixed; top:0; left:0; width:100%; height:100%;}
		#page {position:relative; z-index:1;}
		#header_menu {position:relative; z-index:1;}
	</style> 
	<!--[if lte IE 6]>
	<style type="text/css">
		html {overflow-y:hidden;}
		body {overflow-y:auto;}
		#bg {position:absolute; z-index:-1;}
		#page {position:static;}
		#header_menu {position:static;}
	</style>
	<![endif]--> 
	'; ?>

	</head>
	
	<body <?php if ($this->_tpl_vars['page_name']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"<?php endif; ?>>
	<?php if (! $this->_tpl_vars['content_only']): ?>
		<div id="bg"><img src="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
background.jpg" width="100%" height="100%" alt=""></div> 
		<noscript><ul><li><?php echo smartyTranslate(array('s' => 'This shop requires JavaScript to run correctly. Please activate JavaScript in your browser.'), $this);?>
</li></ul></noscript>
		<div id="page">
			<!-- Header -->
			<div>
				<h1 id="logo"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
logo.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a></h1>
				<div id="header">
					<?php echo $this->_tpl_vars['HOOK_TOP']; ?>

				</div>
			</div>
			<div id="contentWrapperRound">
				<div id="upperRound"></div>
				<div id="contentWrapper">
					<?php if ($this->_tpl_vars['HOOK_LEFT_COLUMN']): ?>
					<!-- Left -->
					<div id="left_column" class="column">
						<?php echo $this->_tpl_vars['HOOK_LEFT_COLUMN']; ?>

					</div>
					<?php endif; ?>
					<!-- Center -->
					<div id="center_column" class="<?php if ($this->_tpl_vars['HOOK_LEFT_COLUMN'] && $this->_tpl_vars['HOOK_RIGHT_COLUMN']): ?>bothActive<?php elseif (( $this->_tpl_vars['HOOK_LEFT_COLUMN'] && ! $this->_tpl_vars['HOOK_RIGHT_COLUMN'] ) || ( ! $this->_tpl_vars['HOOK_LEFT_COLUMN'] && $this->_tpl_vars['HOOK_RIGHT_COLUMN'] )): ?>oneActive<?php else: ?>noneActive<?php endif; ?>">
						<div id="centerColumnHeader"></div>
						<div id="centerColumnContent">
							<div id="centerContentWrapper">
	<?php endif; ?>