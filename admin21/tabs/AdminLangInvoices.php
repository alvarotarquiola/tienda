<?php
//header('Content-Type: text/html; charset=iso-8859-1');
/**
  * Image resize tab for admin panel, AdminImageResize.php
  * @category admin
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.3
  *
  */
//error_reporting(E_ALL);
include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');

//include_once(PS_ADMIN_DIR.'/tabs/AdminImportv2/reader.php');
//include_once(PS_ADMIN_DIR.'/tabs/AdminImportv2/funciones.php');

class AdminLangInvoices extends AdminTab
{
	public function display()
    {
        global $currentIndex, $cookie;
        
        $languages = Language::getLanguages();
        $mensage = $this->l('The language was changed successfully.');
        
        echo '<div class="message_result" style="display:none;"><img alt="" src="../img/admin/ok.gif"/>'.$this->l('The language was changed successfully.').'</div>';
        
        echo '<script type="text/javascript">
            jQuery(function(){
                
                jQuery(".tap-shop-menu a").click(function(){
                    var ele = jQuery(this);
                });
                
                jQuery("#lang_invoice_select").change(function(e){
                    var ele = jQuery(this);
                    var mensage = \''.$mensage.'\';
                    console.log(ele.attr("value"));
                    var id_lang = ele.attr("value");
                    $.post("ajax.php", {id_lang_factura: id_lang, invoice: "invoice"}, function(res){
                        $(".message_result").css("display", "block");
                    });
                });
            });
        </script>';
        
        echo '
            <div id="language-shop-config" class="content-tab-shop">
            
                <div class="tap-shop-menu">
                    <a href="#" class="active" data-type="ivoice-delivery">'.$this->l('Idioma Factura y Albaranes').'</a>
                    <a href="#" class="" data-type="me-shop">'.$this->l('Idioma Tienda').'</a>
                </div>
                <div id="tap-options-shop">
                    <div id="ivoice-delivery" class="">
                        <h2 class="sub_title_tab">'.$this->l('Idioma Factura y Albaranes').'</h2>
                        <div class="warning warn" style="width: 600px;"><h3>'.$this->l('Choose the languaje for the generation of invoices and delivery slips.').'</h3>
                        <h3>'.$this->l('If you change your languaje, change the languaje in all existing invoices and delevery slips.').'</h3></div>
                        <div class="width2" style="width: 612px;">
                            <div class="row-form">
                                <label class="form-label left">'.$this->l('Language').': </label>
                                <div class="margin-form">
                                    <select name="lang_invoice_select" id="lang_invoice_select"> 
                                        <option>'.$this->l('Select language').'</option>';
                                    foreach($languages as $language)
                                        echo '<option value="'.$language['id_lang'].'" '.($cookie->id_lang_factura == $language['id_lang'] ? "selected='selected'" : "").'>'.$language['name'].'</option>';
                    echo '          </select>
                                    <!--<p class="clear">'.$this->l('The invoice will be shown in the selected language').'</p>-->
                    		    </div>    
                            </div>
                        </div>
                    </div>
                    <div id="me-shop" class="hide_tag">
                        <h2 class="sub_title_tab">'.$this->l('Idioma de su Tienda').'</h2>
                        <div class="width2" style="width: 612px;">
                            <div class="row-form">
                                <label class="form-label left">'.$this->l('Language').': </label>
                                <div class="margin-form">
                                    <select name="lang_invoice_select" id="lang_invoice_select"> 
                                        <option>'.$this->l('Select language').'</option>';
                                    foreach($languages as $language)
                                        echo '<option value="'.$language['id_lang'].'" '.($cookie->id_lang_factura == $language['id_lang'] ? "selected='selected'" : "").'>'.$language['name'].'</option>';
                    echo '          </select>
                    		    </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
		
        echo '<div class="warning warn" style="width: 600px;"><h3>'.$this->l('Choose the languaje for the generation of invoices and delivery slips.').'</h3>';
        echo '<h3>'.$this->l('If you change your languaje, change the languaje in all existing invoices and delevery slips.').'</h3></div>';
            
            echo '<fieldset class="width2" style="width: 612px;">
                    <label>'.$this->l('Language').': </label>
				    <div class="margin-form">
					   <select name="lang_invoice_select" id="lang_invoice_select"> 
                            <option>'.$this->l('Select language').'</option>';
                        foreach($languages as $language)
                            echo '<option value="'.$language['id_lang'].'" '.($cookie->id_lang_factura == $language['id_lang'] ? "selected='selected'" : "").'>'.$language['name'].'</option>';
        echo '          </select>
                        <!--<p class="clear">'.$this->l('The invoice will be shown in the selected language').'</p>-->
				    </div>
                </fieldset> 
                <br/>                   
            '; 
        
	}
	
	public function postProcess()
	{
		global $currentIndex, $cookie;

	
	}

	public function displayForm($isMainTab = true)
	{
		global $currentIndex, $cookie;
	}
    
    public function changeLangForm()
    {
        $id_lang = $_POST["id_lang"];
        $lang = Language::getLanguage($id_lang);
        
        print_r($lang);
    }
    
    
}

?>
