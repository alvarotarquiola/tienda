<?php /* Smarty version 2.6.20, created on 2010-11-12 11:41:57
         compiled from /home/qcpjuuzu/public_html/tienda/themes/temporary/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/qcpjuuzu/public_html/tienda/themes/temporary/footer.tpl', 9, false),)), $this); ?>
<?php if (! $this->_tpl_vars['content_only']): ?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
                <!-- Begin animated tabs if you want to ad tabs use the right id in the anchor ! -->
                <div id="tabsrightcolumn" class="tabcontainer">
             	<ul class="tabnavMod tabnav">
                <?php if ($this->_tpl_vars['page_name'] == index): ?><li><a href="#editorial_block_center"><span><?php echo smartyTranslate(array('s' => 'Welcome to'), $this);?>
&nbsp;<?php echo $this->_tpl_vars['shop_name']; ?>
</span></a></li><?php endif; ?>               
             		<li><a href="#new-products_block_right"><span><?php echo smartyTranslate(array('s' => 'New products'), $this);?>
</span></a></li>
           		  <li><a href="#special_block_right"><span><?php echo smartyTranslate(array('s' => 'Specials'), $this);?>
</span></a></li>
           		  <li><a href="#best-sellers_block_right"><span><?php echo smartyTranslate(array('s' => 'Top sellers'), $this);?>
</span></a></li>
                   <?php if ($this->_tpl_vars['page_name'] != index): ?><li><a href="#editorial_block_center"><span><?php echo smartyTranslate(array('s' => 'Welcome to'), $this);?>
&nbsp;<?php echo $this->_tpl_vars['shop_name']; ?>
</span></a></li><?php endif; ?>  
                </ul>
               </div>
                 <!-- end animated tabs -->
					<?php echo $this->_tpl_vars['HOOK_RIGHT_COLUMN']; ?>

                \</div> 
                 <div id="left_column" class="column">
					<?php echo $this->_tpl_vars['HOOK_LEFT_COLUMN']; ?>

				</div>
              </div>
          </div>

<!-- Footer -->
			
			
        <?php endif; ?>
        <div id="header_bottom"></div>
        <div id="footer"><?php echo $this->_tpl_vars['HOOK_FOOTER']; ?>
<div id="footer_bottom"> Theme by <a href="mailto:menster.sacha@gmail.com">Sacha Menster</a>&nbsp;<a href="http://www.downloadprestashopthemes.com/">prestashop themes</a> If you like this template and you are gonna use it, make a little donation :-) <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="V9BU9MCF992PW">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
Remove the donate button in footer.tpl
	</div>
</div>
            
        
	
     
	</body>
</html>