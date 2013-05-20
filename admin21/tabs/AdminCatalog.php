<?php

/**
  * Catalog tab for admin panel, AdminCatalog.php
  * Tab has been separated in 3 files : this one, AdminCategories.php and AdminProducts.php
  * @category admin
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.3
  *
  */

include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');
include(PS_ADMIN_DIR.'/tabs/AdminCategories.php');
include(PS_ADMIN_DIR.'/tabs/AdminProducts.php');

class AdminCatalog extends AdminTab
{
	/** @var object AdminCategories() instance */
	private $adminCategories;

	/** @var object AdminProducts() instance */
	private $adminProducts;

	/** @var object AttributeGenerator() instance */
	private $attributeGenerator;

	/** @var object AttributeGenerator() instance */
	private $imageResize;

	/** @var object Category() instance for navigation*/
	private static $_category = NULL;

	public function __construct()
	{
		/* Get current category */
		$id_category = abs(intval(Tools::getValue('id_category')));
		if (!$id_category) $id_category = 1;
		self::$_category = new Category($id_category);
		if (!Validate::isLoadedObject(self::$_category))
			die('Category cannot be loaded');

		$this->table = array('category', 'product');
		$this->adminCategories = new AdminCategories();
		$this->adminProducts = new AdminProducts();
		//var_dump("");
		parent::__construct();
	}

	/**
	 * Return current category
	 *
	 * @return object
	 */
	public static function getCurrentCategory()
	{
		return self::$_category;
	}

	public function viewAccess($disable = false)
	{
		$result = parent::viewAccess($disable);
		$this->adminCategories->tabAccess = $this->tabAccess;
		$this->adminProducts->tabAccess = $this->tabAccess;
		return $result;
	}

	public function postProcess()
	{
		if (!Tools::getValue('id_product'))
			$this->adminCategories->postProcess();
		elseif (isset($_GET['attributegenerator']))
		{
			if (!isset($this->attributeGenerator))
			{
				include_once(PS_ADMIN_DIR.'/tabs/AdminAttributeGenerator.php');
				$this->attributeGenerator = new AdminAttributeGenerator();
			}
			$this->attributeGenerator->postProcess();
		}
		elseif (isset($_GET['imageresize']))
		{
			if (!isset($this->imageResize))
			{
				include_once(PS_ADMIN_DIR.'/tabs/AdminImageResize.php');
				$this->imageResize = new AdminImageResize();
			}
			$this->imageResize->postProcess();
		}
		$this->adminProducts->postProcess($this->token);
	}

	public function displayErrors()
	{
		$this->adminProducts->displayErrors();
		$this->adminCategories->displayErrors();
	}

	public function display()
	{
		global $currentIndex;
        
        if(isset($_GET['verifyproducts']) AND $_GET['verifyproducts'] == 1){
            
            echo "<h2>".$this->l("Cantidad Categorias y productos.")."</h2>";
            
            $this->getCategoriesAndProducts();
        }
		elseif (((Tools::isSubmit('submitAddcategory') OR Tools::isSubmit('submitAddcategoryAndStay')) AND sizeof($this->adminCategories->_errors)) OR isset($_GET['updatecategory']) OR isset($_GET['addcategory']))
		{
			$this->adminCategories->displayForm($this->token);
			//echo '<br /><a href="'.$currentIndex.'&token='.$this->token.'"><img src="../img/admin/arrow2.gif" /> '.$this->l('Back to list').'</a><br />';
            echo '<br /><a class="action_back_list" href="'.$currentIndex.'&token='.$this->token.'"><img src="../img/admin/arrow2.gif" /> '.$this->l('Back to catalog').'</a><br />';
		}
		elseif (((Tools::isSubmit('submitAddproduct') OR Tools::isSubmit('submitAddproductAndStay')) AND sizeof($this->adminProducts->_errors)) OR Tools::isSubmit('updateproduct') OR Tools::isSubmit('addproduct'))
		{
			$this->adminProducts->displayForm($this->token);
			echo '<br /><a class="action_back_list" href="index.php?tab='.Tools::getValue('tab').'&token='.$this->token.'"><img src="../img/admin/arrow2.gif" />'.$this->l('Back to catalog').'</a><br />';
		}
		elseif (isset($_GET['attributegenerator']))
		{
			if (!isset($this->attributeGenerator))
			{
				include_once(PS_ADMIN_DIR.'/tabs/AdminAttributeGenerator.php');
				$this->attributeGenerator = new AdminAttributeGenerator();
			}
			$this->attributeGenerator->displayForm();
		}
		elseif (isset($_GET['imageresize']))
		{
			if (!isset($this->imageResize))
			{
				include_once(PS_ADMIN_DIR.'/tabs/AdminImageResize.php');
				$this->imageResize = new AdminImageResize();
			}
			$this->imageResize->displayForm();
		}
		elseif (!isset($_GET['editImage']))
		{
			$id_category = intval(Tools::getValue('id_category'));
			if (!$id_category)
				$id_category = 1;
			$catalog_tabs = array('category', 'product');
			// Cleaning links
			$catBarIndex = $currentIndex;
			foreach ($catalog_tabs AS $tab)
				if (Tools::getValue($tab.'Orderby') && Tools::getValue($tab.'Orderway')) 
					$catBarIndex = preg_replace('/&'.$tab.'Orderby=([a-z _]*)&'.$tab.'Orderway=([a-z]*)/i', '', $currentIndex);
            
            $url_grafico = $currentIndex."&token=".$this->token."&verifyproducts=1";
			echo '
                <div class="cat_bar"><span style="color: #3C8534;">
                    '.$this->l('Current category').' :</span>&nbsp;&nbsp;&nbsp;'.getPath($catBarIndex, $id_category).' 
                    <a href="'.$url_grafico.'" style="float:right;margin: 0 20px 0 0;">'.$this->l("Grafico").'</a>
                </div>';

			echo '<h2 class="sub_title_tab right-h2">'.$this->l('Categories').'</h2>';	
			
			//echo '<h3>'.$this->l('Current category').'&nbsp;&nbsp;'.getPath($catBarIndex, $id_category).'</h3>';
			$this->adminCategories->display($this->token);
			echo '<div style="margin:10px">&nbsp;</div>';			
			echo '<h2>'.$this->l('Products in this category').'</h2>';

			$this->adminProducts->display($this->token);
		}
	}
    
    public function getCategoriesAndProducts()
    {
        global $cookie, $currentIndex;
        
        $categories = Category::getCategories(intval($cookie->id_lang_2), false);
        
        echo '
        <table cellspacing="0" cellpadding="0" class="table_categories">';
		$done = array();
		$index = array();
		$indexedCategories =  array();
		foreach ($indexedCategories AS $k => $row)
			$index[] = $row['id_category'];
		$this->recurseCategoryForInclude($index, $categories, $categories[0][1], 1, 1);
		echo '			</table>
        
        ';
    }
    
    function recurseCategoryForInclude($indexedCategories, $categories, $current, $id_category = 1, $id_category_default = NULL)
	{
		global $done;
		static $irow;
		$id_obj = intval(Tools::getValue($this->identifier));

		if (!isset($done[$current['infos']['id_parent']]))
			$done[$current['infos']['id_parent']] = 0;
		$done[$current['infos']['id_parent']] += 1;

		$todo = sizeof($categories[$current['infos']['id_parent']]);
		$doneC = $done[$current['infos']['id_parent']];

		$level = $current['infos']['level_depth'] + 1;
		$img = $level == 1 ? 'lv1.gif' : 'lv'.$level.'_'.($todo == $doneC ? 'f' : 'b').'.gif';

		echo '
		<tr class="'.($irow++ % 2 ? 'alt_row' : '').'">
            ';
        $producs = Product::getCategoryProducts($id_category);
        $cant = count($producs);
        echo '
			<td>
				<img src="../img/admin/'.$img.'" alt="" /> &nbsp;<label for="categoryBox_'.$id_category.'" class="t">'.stripslashes(Category::hideCategoryPosition($current['infos']['name'])).' <span>('.$cant.')</span></label>
			</td>
		</tr>';

		if (isset($categories[$id_category]))
			foreach ($categories[$id_category] AS $key => $row)
				if ($key != 'infos')
					$this->recurseCategoryForInclude($indexedCategories, $categories, $categories[$id_category][$key], $key);
	}
}

?>