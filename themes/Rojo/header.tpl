<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">
	<head>
		<title>{$meta_title|escape:'htmlall':'UTF-8'}</title>
{if isset($meta_description) AND $meta_description}
		<meta name="description" content="{$meta_description|escape:html:'UTF-8'}" />
{/if}
{if isset($meta_keywords) AND $meta_keywords}
		<meta name="keywords" content="{$meta_keywords|escape:html:'UTF-8'}" />
{/if}
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$img_ps_dir}favicon.ico" />
		<link rel="shortcut icon" type="image/x-icon" href="{$img_ps_dir}favicon.ico" />
{if isset($css_files)}
	{foreach from=$css_files key=css_uri item=media}
	<link href="{$css_uri}" rel="stylesheet" type="text/css" media="{$media}" />
	{/foreach}
{/if}
		<script type="text/javascript" src="{$content_dir}js/tools.js"></script>
		<script type="text/javascript">
			var baseDir = '{$content_dir}';
			var static_token = '{$static_token}';
			var token = '{$token}';
			var priceDisplayPrecision = {$priceDisplayPrecision*$currency->decimals};
			var roundMode = {$roundMode};
		</script>
		<script type="text/javascript" src="{$content_dir}js/jquery/jquery-1.2.6.pack.js"></script>
		<script type="text/javascript" src="{$content_dir}js/jquery/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="{$content_dir}js/jquery/jquery.hotkeys-0.7.8-packed.js"></script>
        
        <script type="text/javascript" src="{$content_dir}js/main.js"></script>
{if isset($js_files)}
	{foreach from=$js_files item=js_uri}
	<script type="text/javascript" src="{$js_uri}"></script>
	{/foreach}
{/if}
		{$HOOK_HEADER}
	</head>
	
	<body {if $page_name}id="{$page_name|escape:'htmlall':'UTF-8'}"{/if}>
	{if !$content_only}
		<noscript><ul><li>{l s='This shop requires JavaScript to run correctly. Please activate JavaScript in your browser.'}</li></ul></noscript>
		<div id="page">

			<!-- Header -->
			<div style="position: relative;">
				<h1 id="logo"><a href="{$base_dir}" title="{$shop_name|escape:'htmlall':'UTF-8'}"><img src="{$img_ps_dir}logo.jpg" alt="{$shop_name|escape:'htmlall':'UTF-8'}" /></a></h1>
				<div id="header">
					{$HOOK_TOP}
				</div>
				<ul id="menu_header_bottom">
				<li class="header-link-bottom"><a title="Contacto" href="">Presentacion</a></li>
				<li id="header_link_contact" class="header-link-bottom"><a href="{$base_dir_ssl}contact-form.php" title="{l s='contact' mod='blockpermanentlinks'}">{l s='contact' mod='blockpermanentlinks'}</a></li>
				<li class="header-link-bottom"><a href="{$base_dir_ssl}my-account.php" title="{l s='Your Account' mod='blockuserinfo'}">{l s='Your Account' mod='blockuserinfo'}</a>
					<ul class="menu-dropdown">
						<!-- añadiendo -->
						<li><a href="{$base_dir_ssl}history.php" title="{l s='Orders'}">{l s='History and details of my orders'}</a></li>
	{if $returnAllowed}
		<li></a><a href="{$base_dir_ssl}order-follow.php" title="{l s='Merchandise returns'}">{l s='My merchandise returns'}</a></li>
	{/if}	 
	<li><a href="{$base_dir_ssl}addresses.php" title="{l s='Addresses'}">{l s='My addresses'}</a></li>
	<li><a href="{$base_dir_ssl}identity.php" title="{l s='Information'}">{l s='My personal information'}</a></li>
	
	<!--fin añadido-->
					</ul>
				</li>
				<li class="header-link-bottom"><a title="Mapa" href="http://localhost/tienda/sitemap.php">Politica</a>
				<ul class="menu-dropdown">
					{foreach from=$cmslinks item=cmslink}
						<li><a href="{$cmslink.link}" title="{$cmslink.meta_title|escape:html:'UTF-8'}">{$cmslink.meta_title|escape:html:'UTF-8'}</a></li>
					{/foreach}
					</ul>
				</li>
				<li class="header-link-bottom"><a href="">Carrito</a></li>
			</ul>
			</div>
			

			<!-- Left -->
			<div id="left_column" class="column">
				{$HOOK_LEFT_COLUMN}
			</div>

			<!-- Center -->
			<div id="center_column">
	{/if}
