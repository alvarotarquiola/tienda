<?php

/**
  * Homepage and main page for admin panel, index.php
  * @category admin
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.3
  *
  */


set_time_limit(6000);
define('PS_ADMIN_DIR', getcwd());
include(PS_ADMIN_DIR.'/../config/config.inc.php');
include(PS_ADMIN_DIR.'/functions.php');
include(PS_ADMIN_DIR.'/toolbar.php');
include(PS_ADMIN_DIR.'/header.inc.php');

//error_reporting(E_ALL & ~E_NOTICE); 
//ini_set('display_errors', 1)
//echo ini_get('display_errors');

if ($tab)
{
    $base_remoto = Configuration::get("PS_STORE_REMOTE");
    
	if ($id_tab = checkingTab($tab))
	{
		$tabs = array();
		recursiveTab($id_tab);
		$tabs = array_reverse($tabs);
        
        
        $aux_tabs = array();
        $aux_tabs2 = array();
        
        $idTabActual = Tab::getCurrentTabId();
        $auxTab = Tab::getClassNameFromID($idTabActual);
        
        if($auxTab == "AdminManufacturers"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        if($auxTab == "AdminSuppliers"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        /*if($auxTab == "AdminMessages"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }*/
        if($auxTab == "AdminBackup"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        if($auxTab == "AdminContact"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        if($auxTab == "AdminContacts"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        if($auxTab == "AdminAppearance"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        if($auxTab == "AdminCMS"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        if($auxTab == "AdminMeta"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        if($auxTab == "AdminImportv2"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        if($auxTab == "adminExportDatas"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        if($auxTab == "adminImageAttachments"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        
        if($auxTab == "AdminRangePrice" || $auxTab == "AdminRangeWeight" || $auxTab == "AdminCarriers"){
            $aux_tabs[] = $tabs[1];
            $tabs = $aux_tabs;
        }
        
		echo '<div class="path_bar"><img src="../img/admin/prefs.gif" style="margin-right:10px" /><a href="?token='.Tools::getAdminToken($tab.intval(Tab::getIdFromClassName($tab)).intval($cookie->id_employee)).'&id_lang='.$cookie->id_lang.'&adminlang=1">'.translate('Back home').'</a>';
		
		/*foreach ($tabs AS $key => $item){
			//echo ' >> <img src="'.((trim($item['module']) != '') ? _MODULE_DIR_.$item['module'].'/'.$item['class_name'].'.gif' : '../img/t/'.$item['class_name'].'.gif').'" style="margin-right:5px" />'.((sizeof($tabs) - 1 > $key) ? '<a href="?tab='.$item['class_name'].'&token='.Tools::getAdminToken($item['class_name'].intval($item['id_tab']).intval($cookie->id_employee)).'">' : '').$item['name'].((sizeof($tabs) - 1 > $key) ? '</a>' : '');
            //echo ' >> <img src="'.((trim($item['module']) != '') ? _MODULE_DIR_.$item['module'].'/'.$item['class_name'].'.gif' : '../img/t/'.$item['class_name'].'.gif').'" style="margin-right:5px" />'.('<a href="?tab='.$item['class_name'].'&token='.Tools::getAdminToken($item['class_name'].intval($item['id_tab']).intval($cookie->id_employee)).'">').$item['name'].'</a>';
            if($item['class_name'] == "AdminModules"){
                echo ' >> <img src="'.((trim($item['module']) != '') ? _MODULE_DIR_.$item['module'].'/'.$item['class_name'].'.gif' : '../img/t/'.$item['class_name'].'.gif').'" style="margin-right:5px" />'.$item['name'];
            }elseif($item['class_name'] == "adminImageAttachments"){
                echo ' >> <img src="'.((trim($item['module']) != '') ? _MODULE_DIR_.$item['module'].'/'.$item['class_name'].'.gif' : '../img/t/'.$item['class_name'].'.gif').'" style="margin-right:5px" />'.('<a href="?tab='.$item['class_name'].'&token='.Tools::getAdminToken($item['class_name'].intval($item['id_tab']).intval($cookie->id_employee)).'&imgatt=imagesattchment">').$item['name'].'</a>';
            }else{
                echo ' >> <img src="'.((trim($item['module']) != '') ? _MODULE_DIR_.$item['module'].'/'.$item['class_name'].'.gif' : '../img/t/'.$item['class_name'].'.gif').'" style="margin-right:5px" />'.('<a href="?tab='.$item['class_name'].'&token='.Tools::getAdminToken($item['class_name'].intval($item['id_tab']).intval($cookie->id_employee)).'">').$item['name'].'</a>';    
            }
		}*/
		echo '</div>';
        
        echo '<ul class="sub_menu_shop">';
				
    		$id_parent_tab_current = intval(Tab::getCurrentParentId());
    		// Display tabs belonging to opened tab
    		$id_parent = isset($id_parent) ? $id_parent : $id_parent_tab_current;
    		
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminShipping"){
    			$id_parent = 5;
                echo '<li>
                    <a href="index.php?tab=AdminShipping&token='.Tools::getAdminToken("AdminShipping".intval(Tab::getIdFromClassName('AdminShipping')).intval($cookie->id_employee)).'"><img style="margin-right:5px" src="../img/t/AdminShipping.gif"></a>
                    <a href="index.php?tab=AdminShipping&token='.Tools::getAdminToken("AdminShipping".intval(Tab::getIdFromClassName('AdminShipping')).intval($cookie->id_employee)).'">'.translate('Shipping').'</a>
                </li>';
    		}elseif((isset($_GET["tab"]) && $_GET["tab"]=="AdminRangePrice") || (isset($_GET["tab"]) && $_GET["tab"]=="AdminRangeWeight") || (isset($_GET["tab"]) && $_GET["tab"]=="AdminCarriers")){
    		   echo '<li>
                    <a href="index.php?tab=AdminShipping&token='.Tools::getAdminToken("AdminShipping".intval(Tab::getIdFromClassName('AdminShipping')).intval($cookie->id_employee)).'"><img style="margin-right:5px" src="../img/t/AdminShipping.gif"></a>
                    <a href="index.php?tab=AdminShipping&token='.Tools::getAdminToken("AdminShipping".intval(Tab::getIdFromClassName('AdminShipping')).intval($cookie->id_employee)).'">'.translate('Shipping').'</a>
                </li>';
    		}
    		
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminImportv2"){
    			$id_parent = -1;
                echo '
                    <li id="AdminImportv2">
                        <a href="index.php?tab=AdminImportv2&token='.Tools::getAdminToken("AdminImportv2".intval(Tab::getIdFromClassName('AdminImportv2')).intval($cookie->id_employee)).'">'.translate('Imports').'</a>
                    </li>
                    <li id="AdminImportv2">
                        <a href="index.php?tab=AdminImportv2&token='.Tools::getAdminToken("AdminImportv2".intval(Tab::getIdFromClassName('AdminImportv2')).intval($cookie->id_employee)).'&check=fields">'.translate('Check fields').'</a>
                    </li>
                    ';
    		}
            /*modificando*/
            if(isset($_GET["tab"]) && $_GET["tab"]=="AdminCatalog"){
                
                echo '<li>
                    <a href="index.php?tab=AdminCatalogs&token='.Tools::getAdminToken("AdminCatalog".intval(Tab::getIdFromClassName('AdminCatalog')).intval($cookie->id_employee)).'"><img style="margin-right:5px" src="../img/t/AdminCatalog.gif"></a>
                    <a href="index.php?tab=AdminCatalog&token='.Tools::getAdminToken("AdminCatalog".intval(Tab::getIdFromClassName('AdminCatalog')).intval($cookie->id_employee)).'">'.translate('Catalog').'</a>
                </li>';
            }
    		
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminManufacturers"){
    			$id_parent = -1;
    		}
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminSuppliers"){
    			$id_parent = -1;
    		}
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminImport"){
    			$id_parent = -1;
    		}
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminImagenesAdjuntos"){
    			$id_parent = -1;
    		}
    		//if(isset($_GET["tab"]) && $_GET["tab"]=="AdminMessages"){
    		//	$id_parent = -1;
    		//}
            
            
    		if((isset($_GET["tab"]) && $_GET["tab"]=="AdminBackup") || (isset($_GET["tab"]) && $_GET["tab"]=="AdminPreferences") || 
               (isset($_GET["tab"]) && $_GET["tab"]=="AdminRestore")){
    			$id_parent = -1;
                echo '
                    <li id="AdminPreferences">
                        <a href="index.php?tab=AdminPreferences&token='.Tools::getAdminToken("AdminPreferences".intval(Tab::getIdFromClassName('AdminPreferences')).intval($cookie->id_employee)).'">1. '.translate('Enable / Disable Shop').'</a>
                    </li>
                    <li id="AdminImportv2">
                        <a target="_blank" href="'.$base_remoto.'/index.php?tab=AdminImportv2&token='.Tools::getAdminToken("AdminImportv2".intval(Tab::getIdFromClassName('AdminImportv2')).intval($cookie->id_employee)).'">2. '.translate('Actualizar Catalogo').'</a>
                    </li>
                    <li id="AdminBackup">
                        <a href="index.php?tab=AdminBackup&token='.Tools::getAdminToken("AdminBackup".intval(Tab::getIdFromClassName('AdminBackup')).intval($cookie->id_employee)).'">3. '.translate('Backup').'</a>
                    </li>
                    <li id="AdminRestore">
                        <a href="index.php?tab=AdminRestore&token='.Tools::getAdminToken("AdminRestore".intval(Tab::getIdFromClassName('AdminRestore')).intval($cookie->id_employee)).'">4. '.translate('Restore').'</a>
                    </li>
                    <li>
                        <a href="'.__PS_BASE_URI__.'" target="_blank">5. '.translate('See Shop').'</a>
                    </li>';
    		}
            
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminContact"){
    			$id_parent = -1;
    		}
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminContacts"){
    			$id_parent = -1;
    		}
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminAppearance"){
    			$id_parent = -1;
    		}
    		
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminCMS"){
    			$id_parent = -1;
    		}
            if(isset($_GET["tab"]) && $_GET["tab"]=="adminImageAttachments"){
    			$id_parent = -1;
    		}
    		
    		//if($_GET["tab"]=="AdminCarriers"){
    		//	$id_parent = -1;
    		//}
    		
    		if(isset($_GET["tab"]) && $_GET["tab"]=="AdminCustomers"){
    			$id_parent = 2;
                echo '<li>
                    <a href="index.php?tab=AdminCustomers&token='.Tools::getAdminToken("AdminCustomers".intval(Tab::getIdFromClassName('AdminCustomers')).intval($cookie->id_employee)).'"><img style="margin-right:5px" src="../img/t/AdminCustomers.gif"></a>
                    <a href="index.php?tab=AdminCustomers&token='.Tools::getAdminToken("AdminCustomers".intval(Tab::getIdFromClassName('AdminCustomers')).intval($cookie->id_employee)).'">'.translate('Customers').'</a>
                </li>';
    		}elseif((isset($_GET["tab"]) && $_GET["tab"]=="AdminAddresses") || (isset($_GET["tab"]) && $_GET["tab"]=="AdminGroups")){
    		   echo '<li>
                    <a href="index.php?tab=AdminCustomers&token='.Tools::getAdminToken("AdminCustomers".intval(Tab::getIdFromClassName('AdminCustomers')).intval($cookie->id_employee)).'"><img style="margin-right:5px" src="../img/t/AdminCustomers.gif"></a>
                    <a href="index.php?tab=AdminCustomers&token='.Tools::getAdminToken("AdminCustomers".intval(Tab::getIdFromClassName('AdminCustomers')).intval($cookie->id_employee)).'">'.translate('Customers').'</a>
                </li>';
    		}
            if(isset($_GET["tab"]) && $_GET["tab"]=="adminExportDatas"){
    			$id_parent = -1;
    		}
            if(isset($_GET["tab"]) && $_GET["tab"] == "AdminOrders"){
    			$id_parent = 3;
                echo '<li id="AdminOrders"><a href="index.php?tab=AdminOrders&token='.Tools::getAdminToken("AdminOrders".intval(Tab::getIdFromClassName('AdminOrders')).intval($cookie->id_employee)).'"><img style="margin-right:5px" src="../img/t/AdminOrders.gif"></a>
                    <a href="index.php?tab=AdminOrders&token='.Tools::getAdminToken("AdminOrders".intval(Tab::getIdFromClassName('AdminOrders')).intval($cookie->id_employee)).'">'.translate('Orders').'</a></li>'; 
    		}elseif((isset($_GET["tab"]) && $_GET["tab"]=="AdminInvoices") || (isset($_GET["tab"]) && $_GET["tab"]=="AdminDeliverySlip") || (isset($_GET["tab"]) && $_GET["tab"]=="AdminOrderMessage") || (isset($_GET["tab"]) && $_GET["tab"]=="AdminMessages") || (isset($_GET["tab"]) && $_GET["tab"]=="AdminLangInvoices")){
    		   echo '<li id="AdminOrders"><a href="index.php?tab=AdminOrders&token='.Tools::getAdminToken("AdminOrders".intval(Tab::getIdFromClassName('AdminOrders')).intval($cookie->id_employee)).'"><img style="margin-right:5px" src="../img/t/AdminOrders.gif"></a>
                    <a href="index.php?tab=AdminOrders&token='.Tools::getAdminToken("AdminOrders".intval(Tab::getIdFromClassName('AdminOrders')).intval($cookie->id_employee)).'">'.translate('Orders').'</a></li>';
    		}
            if(isset($_GET["tab"]) && $_GET["tab"]=="AdminPayment"){
    			$id_parent = 4;
                 echo '<li><a href="index.php?tab=AdminPayment&token='.Tools::getAdminToken("AdminPayment".intval(Tab::getIdFromClassName('AdminPayment')).intval($cookie->id_employee)).'"><img style="margin-right:5px" src="../img/t/AdminPayment.gif"></a>
                    <a href="index.php?tab=AdminPayment&token='.Tools::getAdminToken("AdminPayment".intval(Tab::getIdFromClassName('AdminPayment')).intval($cookie->id_employee)).'">'.translate('Payment').'</a>
                </li>'; 
    		}elseif((isset($_GET["tab"]) && $_GET["tab"]=="AdminCurrencies") || (isset($_GET["tab"]) && $_GET["tab"]=="AdminTaxes")){
                 echo '<li><a href="index.php?tab=AdminPayment&token='.Tools::getAdminToken("AdminPayment".intval(Tab::getIdFromClassName('AdminPayment')).intval($cookie->id_employee)).'"><img style="margin-right:5px" src="../img/t/AdminPayment.gif"></a>
                    <a href="index.php?tab=AdminPayment&token='.Tools::getAdminToken("AdminPayment".intval(Tab::getIdFromClassName('AdminPayment')).intval($cookie->id_employee)).'">'.translate('Payment').'</a></li>'; 
    		}
            if(isset($_GET["tab"]) && $_GET["tab"]=="AdminMeta"){
    			$id_parent = -1;
    		}
										
			if (isset($id_parent) AND $id_parent != -1 AND $id_parent!= 0)
			{
			 	$subTabs = Tab::getTabs(intval($cookie->id_lang), intval($id_parent));
				foreach ($subTabs AS $t)
					if (checkTabRights($t['id_tab']) === true){
						
                        if($t['class_name'] == "AdminCarts"){
                        }elseif($t['class_name'] == "AdminReturn" || $t['class_name'] == "AdminSlip" || $t['class_name'] == "AdminStatuses"){
                        }elseif($t['class_name'] == "AdminStates"  || $t['class_name'] == "AdminCountries" || $t['class_name'] == "AdminZones"){
                        }elseif($t['class_name'] == "AdminDiscounts" ){
                        }elseif($t['class_name'] == "AdminOrders" ){
                            echo '
							<li id="'.$t['class_name'].'">
							<a href="index.php?tab='.$t['class_name'].'&token='.Tools::getAdminToken($t['class_name'].intval($t['id_tab']).intval($cookie->id_employee)).'"><img src="../img/t/'.$t['class_name'].'.gif" alt="" style="width:16px;height:16px" /></a> <a href="index.php?tab='.$t['class_name'].'&token='.Tools::getAdminToken($t['class_name'].intval($t['id_tab']).intval($cookie->id_employee)).'">'.$t['name'].'</a>
							</li>';
                        }else{
                            echo '
							<li id="'.$t['class_name'].'">
							<a href="index.php?tab='.$t['class_name'].'&token='.Tools::getAdminToken($t['class_name'].intval($t['id_tab']).intval($cookie->id_employee)).'"><img src="../img/t/'.$t['class_name'].'.gif" alt="" style="width:16px;height:16px" /></a> <a href="index.php?tab='.$t['class_name'].'&token='.Tools::getAdminToken($t['class_name'].intval($t['id_tab']).intval($cookie->id_employee)).'">'.$t['name'].'</a>
							</li>';
                        }	
						
					}
                    
			}

        echo '</ul>';
        
        if(isset($_GET["tab"]) && $_GET["tab"]=="AdminBackup"){
            echo "<h2 class='sub_title_tab'>".translate("Backup")."</h2>";
        }elseif(isset($_GET["tab"]) && $_GET["tab"]=="AdminRestore"){
            echo "<h2 class='sub_title_tab'>".translate("Restore")."</h2>";
        }elseif(isset($_GET["tab"]) && $_GET["tab"]=="AdminPreferences"){
            echo "<h2 class='sub_title_tab'>".translate("Enable / Disable Shop")."</h2>";
        }elseif(isset($_GET["tab"]) && $_GET["tab"]=="adminImageAttachments"){
            echo "<h2 class='sub_title_tab'>".translate("Images and Attachments")."</h2>";
        }elseif(isset($_GET["tab"]) && $_GET["tab"]=="AdminManufacturers"){
            echo "<h2 class='sub_title_tab'>".translate("Manufacturers")."</h2>";
        }elseif(isset($_GET["tab"]) && $_GET["tab"]=="AdminAddresses"){
            echo "<h2 class='sub_title_tab'>".translate("Direcciones")."</h2>";
        }elseif(isset($_GET["tab"]) && $_GET["tab"]=="AdminCustomers"){
            echo "<h2 class='sub_title_tab'>".translate("Cliente")."</h2>";
        }
        elseif(isset($_GET["tab"]) && $_GET["tab"]=="AdminCatalog"){
            if (isset($_GET["addcategory"])) {
              //echo "<h2 class='sub_title_tab'>".translate("Editar Categoria")."</h2>";
            }elseif (isset($_GET["addproduct"])) {
              echo "<h2 class='sub_title_tab'>".translate("Editar Producto")."</h2>";
            }            
        }
        

		if (Validate::isLoadedObject($adminObj))
			if (!$adminObj->checkToken())
				return;

		// Filter memorization 
		if (isset($_POST) AND !empty($_POST) AND isset($adminObj->table))
			foreach ($_POST AS $key => $value)
				if (is_array($adminObj->table))
				{
					foreach ($adminObj->table AS $table)
						if (strncmp($key, $table.'Filter_', 7) === 0 OR strncmp($key, 'submitFilter', 12) === 0)
							$cookie->$key = !is_array($value) ? $value : serialize($value);
				}
				elseif (strncmp($key, $adminObj->table.'Filter_', 7) === 0 OR strncmp($key, 'submitFilter', 12) === 0)
					$cookie->$key = !is_array($value) ? $value : serialize($value);

		if (isset($_GET) AND !empty($_GET) AND isset($adminObj->table))
			foreach ($_GET AS $key => $value)
				if (is_array($adminObj->table))
				{
					foreach ($adminObj->table AS $table)
						if (strncmp($key, $table.'OrderBy', 7) === 0 OR strncmp($key, $table.'Orderway', 8) === 0)
							$cookie->$key = $value;
				}
				elseif (strncmp($key, $adminObj->table.'OrderBy', 7) === 0 OR strncmp($key, $adminObj->table.'Orderway', 12) === 0)
					$cookie->$key = $value;

		//$adminObj->displayConf();
		//$adminObj->postProcess();
		//$adminObj->displayErrors();
		$adminObj->display();
	}
}
else /* Else display homepage */
{

?>

			<?
	/*echo '<div id="adminHeader">

	<img src="../img/logo.jpg" alt="Logo" title="Logo" /><br /><br />
	<h2>'.translate('Welcome to your Back Office').'</h2>
		<br /><br /><br />';*/
    echo '<div id="adminHeader" style="overflow:hidden;">';
    echo '<h2 class="title_back_office">'.translate('Welcome to your Back Office').'</h2>';
    echo '<div class="logo_back_office"><img src="../img/Logo-Team.png" alt="Logo" title="Logo" /></div>';
	/*
	if (@ini_get('allow_url_fopen') AND $update = checkPSVersion())
		echo '<div class="warning warn" style="margin-bottom:30px;"><h3>'.translate('New PrestaShop version avalaible').' : <a style="text-decoration: underline;" href="'.$update['link'].'">'.translate('Download').'&nbsp;'.$update['name'].'</a> !</h3></div>';
    elseif (!@ini_get('allow_url_fopen'))
    {
		echo '<p>'.translate('Update notification unavailable').'</p>';
		echo '<p>&nbsp;</p>';
		echo '<p>'.translate('To receive PrestaShop update warnings, you need to activate the <b>allow_url_fopen</b> command in your <b>php.ini</b> config file.').' [<a href="'.translate('http://www.php.net/manual/en/ref.filesystem.php').'">'.translate('more infos').'</a>]</p>';
		echo '<p>'.translate('If you don\'t know how to do that, please contact your host administrator !').'</p><br>';
	}
	*/
  echo '</div>';

	?>
			<style type="text/css">
<!--
.Estilo2 {
	font-family: Arial;
	font-size: 12px;
}
.Estilo3 {color: #FFFFFF}
.Estilo5 {
	color: #004b82;
	font-weight: bold;
}
.Estilo7 {
	font-size: 12px;
	font-weight: bold;
	font-family: Arial;
	color: #004b82;
}
.Estilo8 {font-size: 14px}

            </style>
            
    <script type="text/javascript">
    
        jQuery(function(){
            var linkA = jQuery(".box_link_main .column ul.links_calatog li");
            
            linkA.find("a#shop_remote_update_catalog").click(function(){
                var eleR = jQuery(this);
                
                if(eleR.data("url_remote") != ""){
                    //entra
                }else{
                    alert("Debe guardar la direccion tienda remota.");
                    return false;    
                }
            });
            
            
            
        })
    
    </script>

    <?php $base_remoto = Configuration::get("PS_STORE_REMOTE") ?>
    
    <div class="box_link_main">
        <div class="column" style="width:305px;">
            <fieldset style="height:340px;">
                <legend>1 - <?php echo translate("Catalog") ?></legend>
                <ul class="links_main links_calatog" style="margin:0;">
                    <li>
                        <span>1-1</span>
                        <a class="options_shop" href="index.php?tab=AdminCatalog&addcategory&token=<?=Tools::getAdminToken("AdminCatalog".intval(Tab::getIdFromClassName("AdminCatalog")).intval($cookie->id_employee))?>">
                            <?php echo translate('New Category') ?>
                        </a>
                    </li>
                    <li>
                        <span>1-2</span>
                        <a class="options_shop" href="index.php?tab=AdminCatalog&addproduct&token=<?=Tools::getAdminToken("AdminCatalog".intval(Tab::getIdFromClassName("AdminCatalog")).intval($cookie->id_employee))?>">
                            <?php echo translate('New Product') ?>
                        </a>
                    </li>
                    <li>
                        <span>1-3</span>
                        <a class="options_shop" href="index.php?tab=AdminCatalog&token=<?=Tools::getAdminToken("AdminCatalog".intval(Tab::getIdFromClassName("AdminCatalog")).intval($cookie->id_employee))?>">
                            <?php echo translate('Catalog') ?>
                        </a>
                    </li>
                    <li>
                        <span>1-4</span>
                        <a class="options_shop" href="index.php?tab=AdminManufacturers&token=<?=Tools::getAdminToken("AdminManufacturers".intval(Tab::getIdFromClassName("AdminManufacturers")).intval($cookie->id_employee))?>">
                            <?php echo translate('Manufacturers') ?>
                        </a>
                    </li>
                    <li>
                        <span>1-5</span>
                        <a class="options_shop" href="index.php?tab=AdminSuppliers&token=<?=Tools::getAdminToken("AdminSuppliers".intval(Tab::getIdFromClassName("AdminSuppliers")).intval($cookie->id_employee))?>">
                            <?php echo translate('Suppliers') ?>
                        </a>
                    </li>
                    <li>
                        <span>1-6</span>
                        <a class="options_shop" href="index.php?tab=adminImageAttachments&token=<?=Tools::getAdminToken("adminImageAttachments".intval(Tab::getIdFromClassName("adminImageAttachments")).intval($cookie->id_employee))?>&imgatt=imagesattchment">
                            <?php echo translate('Images and Attachments') ?>
                        </a>
                    </li>
                    <li>
                        <?php $base_remoto = Configuration::get("PS_STORE_REMOTE") ?>
                        <span>1-7</span>
                        <a id="shop_remote_update_catalog" data-url_remote='<?php echo $base_remoto ?>' target="_blank" href="<?php echo $base_remoto ?>/index.php?tab=AdminImportv2&token=<?=Tools::getAdminToken("AdminImportv2".intval(Tab::getIdFromClassName("AdminImportv2")).intval($cookie->id_employee))?>">
                            <?php echo translate('Actualizar Catalogo') ?>
                        </a>
                        <!--<a target="_blank" href="index.php?tab=AdminImportv2&token=<?=Tools::getAdminToken("AdminImportv2".intval(Tab::getIdFromClassName("AdminImportv2")).intval($cookie->id_employee))?>">
                            <?php echo translate('Importaciones') ?>
                        </a>-->
                    </li>
                    <li>
                        <span>1-8</span>
                        <a class="options_shop" href="index.php?tab=adminExportDatas&token=<?=Tools::getAdminToken("adminExportDatas".intval(Tab::getIdFromClassName("adminExportDatas")).intval($cookie->id_employee))?>">
                            <?php echo translate('Export') ?>
                        </a>
                    </li>
                    <!--<li>
                        <span>1-9</span>
                        <a class="options_shop" href="index.php?tab=AdminCatalog&addproduct&token=<?=Tools::getAdminToken("AdminCatalog".intval(Tab::getIdFromClassName("AdminCatalog")).intval($cookie->id_employee))?>&verifyproducts=1">
                            <?php echo translate('Ver produductos') ?>
                        </a>
                    </li>-->
                </ul>
            </fieldset>
        </div>
        <div class="column" style="width:312px;">
            <fieldset style="height:340px;">
                <legend>2 - <?php echo translate('Management') ?></legend>
                <ul class="links_main" style="margin:0;">
                    <li>
                        <span>2-1</span>
                        <a class="options_shop" href="index.php?tab=AdminOrders&addcategory&token=<?=Tools::getAdminToken("AdminOrders".intval(Tab::getIdFromClassName("AdminOrders")).intval($cookie->id_employee))?>">
                            <?php echo translate('Orders') ?>
                        </a>
                    </li>
                    <li>
                        <span>2-2</span>
                        <a class="options_shop" href="index.php?tab=AdminCustomers&token=<?=Tools::getAdminToken("AdminCustomers".intval(Tab::getIdFromClassName("AdminCustomers")).intval($cookie->id_employee))?>">
                            <?php echo translate('Customers') ?>
                        </a>
                    </li>
                    <li>
                        <span>2-3</span>
                        <a class="options_shop" href="index.php?tab=AdminMessages&token=<?=Tools::getAdminToken("AdminMessages".intval(Tab::getIdFromClassName("AdminMessages")).intval($cookie->id_employee))?>">
                            <?php echo translate('Messages') ?>
                        </a>
                    </li>
                    <li>
                        <span>2-4</span>
                        <a class="options_shop" href="index.php?tab=AdminModules&configure=newsletter&token=<?=Tools::getAdminToken("AdminModules".intval(Tab::getIdFromClassName("AdminModules")).intval($cookie->id_employee))?>">
                            <?php echo translate('Newsletter') ?>
                        </a>
                    </li>
                    <li>
                        <span>2-5</span>
                        <a><?php echo translate('Create newsletters') ?></a>
                    </li>
                    <li>
                        <span>2-6</span>
                        <a class="options_shop" href="index.php?tab=AdminPreferences&token=<?=Tools::getAdminToken("AdminPreferences".intval(Tab::getIdFromClassName("AdminPreferences")).intval($cookie->id_employee))?>">
                            <?php echo translate('Activar / Desactivar tienda') ?>
                        </a>
                    </li>
                    <li>
                        <span>2-7</span>
                        <a class="options_shop" href="index.php?tab=AdminStats&token=<?=Tools::getAdminToken("AdminStats".intval(Tab::getIdFromClassName("AdminStats")).intval($cookie->id_employee))?>">
                            <?php echo translate('Estadisticas') ?>
                        </a>
                    </li>
                    <li>
                        <span>2-8</span>
                        <a class="options_shop" href="index.php?tab=AdminRestore&token=<?=Tools::getAdminToken("AdminRestore".intval(Tab::getIdFromClassName("AdminRestore")).intval($cookie->id_employee))?>">
                            <?php echo translate('Backup y Restaurar') ?>
                        </a>
                    </li>
                    <li>
                        <span>2-9</span>
                        <a target="_blank" href="<?php echo $base_remoto ?>/index.php?tab=AdminPreferences&token=<?=Tools::getAdminToken("AdminPreferences".intval(Tab::getIdFromClassName("AdminPreferences")).intval($cookie->id_employee))?>">
                            <?php echo translate('Comprobar Backup') ?>
                        </a>
                    </li>
                </ul>
            </fieldset>
        </div>
        <div class="column" style="width:305px;">
            <fieldset>
                <legend>3 - <?php echo translate('Configuration') ?></legend>
                <ul class="links_main" style="margin:0;">
                    <li>
                        <span>3-1</span>
                        <a class="options_shop" href="index.php?tab=AdminEmployees&token=<?=Tools::getAdminToken("AdminEmployees".intval(Tab::getIdFromClassName("AdminEmployees")).intval($cookie->id_employee))?>">
                            <?php echo translate('Empleados') ?>
                        </a>
                    </li>
                    <li>
                        <span>3-2</span>
                        <a target="_blank" href="<?php echo $base_remoto ?>/index.php?tab=AdminEmployees&token=<?=Tools::getAdminToken("AdminEmployees".intval(Tab::getIdFromClassName("AdminEmployees")).intval($cookie->id_employee))?>">
                            <?php echo translate('Empleados (Actualizar Catalogo)') ?>
                        </a>
                    </li>
                    <li>
                        <span>3-3</span>
                        <a class="options_shop" href="index.php?tab=AdminModules&configure=mailalerts&token=<?=Tools::getAdminToken("AdminModules".intval(Tab::getIdFromClassName("AdminModules")).intval($cookie->id_employee))?>">
                            <?php echo translate('Mail alerts') ?></a>
                        </a>
                    </li>
                    <li>
                        <span>3-4</span>
                        <a class="options_shop" href="index.php?tab=AdminContact&conf=6&token=<?=Tools::getAdminToken("AdminContact".intval(Tab::getIdFromClassName("AdminContact")).intval($cookie->id_employee))?>">
                            <?php echo translate('Contact details') ?>
                        </a>
                    </li>
                    <li>
                        <span>3-5</span>
                        <a href="index.php?tab=AdminContacts&id_contact=2&updatecontact&token=<?=Tools::getAdminToken("AdminContacts".intval(Tab::getIdFromClassName("AdminContacts")).intval($cookie->id_employee))?>">
                            <?php echo translate('Contact') ?>
                        </a>
                    </li>
                    <li>
                        <span>3-6</span>
                        <a class="options_shop" href="index.php?tab=AdminAppearance&token=<?=Tools::getAdminToken("AdminAppearance".intval(Tab::getIdFromClassName("AdminAppearance")).intval($cookie->id_employee))?>">
                            <?php echo translate('Appearance') ?>
                        </a>
                    </li>
                    <li>
                        <span>3-7</span>
                        <a class="options_shop" href="index.php?tab=AdminModules&configure=editorial&token=<?=Tools::getAdminToken("AdminModules".intval(Tab::getIdFromClassName("AdminModules")).intval($cookie->id_employee))?>">
                            <?php echo translate('Home test editor') ?>
                        </a>
                    </li>
                    <li>
                        <span>3-8</span>
                        <a class="options_shop" href="index.php?tab=AdminCMS&token=<?=Tools::getAdminToken("AdminCMS".intval(Tab::getIdFromClassName("AdminCMS")).intval($cookie->id_employee))?>">
                            <?php echo translate('CMS') ?>
                        </a>
                    </li>
                    <li>
                        <span>3-9</span>
                        <a class="enlace_bo_menu" href="../mails/Correos.html" target="_blank"><?php echo translate('Text emails') ?></a><br/>
                    </li>
                    <li>
                        <span>3-10</span>
                        <a class="options_shop" href="index.php?tab=AdminMeta&token=<?=Tools::getAdminToken("AdminMeta".intval(Tab::getIdFromClassName("AdminMeta")).intval($cookie->id_employee))?>">
                            <?php echo translate('Meta-Tags') ?>
                        </a>
                    </li>
                    <li>
                        <span>3-11</span>
                        <a class="options_shop" href="index.php?tab=AdminPayment&token=<?=Tools::getAdminToken("AdminPayment".intval(Tab::getIdFromClassName("AdminPayment")).intval($cookie->id_employee))?>">
                            <?php echo translate('Payment') ?>
                        </a>
                    </li>
                    <li>
                        <span>3-12</span>
                        <a class="options_shop" href="index.php?tab=AdminCarriers&token=<?=Tools::getAdminToken("AdminCarriers".intval(Tab::getIdFromClassName("AdminCarriers")).intval($cookie->id_employee))?>">
                            <?php echo translate('Carriers') ?>
                        </a>
                    </li>
                </ul>
            </fieldset>
        </div>
    </div>

	<table width="922" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="336"><p class="Estilo7"><br />
            <span class="Estilo8"><span class="Estilo3">*</span><span class="Estilo3">*</span>* </span><?php echo translate('Before performing a Backup') ?> </p></td>
        <td width="586"><p align="right" class="Estilo7"><br />
        <?php echo translate('Consult first import') ?></p></td>
      </tr>
    </table>
	<?

	
}

include(PS_ADMIN_DIR.'/footer.inc.php');

?>
